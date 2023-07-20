<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgencyRequest;
use App\Http\Requests\ConsultantRequest;
use App\Http\Requests\EstateRequest;
use App\Mail\LoginPasswordMail;
use App\Models\Agency;
use App\Models\Consultant;
use App\Models\Estate;
use App\Models\EstateImage;
use App\Models\User;
use App\Models\Zone;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class AgencyController extends Controller
{

    public function home()
    {
        $agency = Agency::where('user_id' , auth()->user()->id)->first();

        return view('pages.agency.home' , compact('agency'));
    }

    public function consultant()
    {
        $agency = Agency::where('user_id' , auth()->user()->id)->first();
        $consultants = $agency->consultants()->latest()->get();
        return view('pages.agency.consultant' , compact('agency' , 'consultants'));
    }
    public function store(AgencyRequest $request)
    {
        $validate = $request->validated();
        Agency::create([
           'name' => $validate['name'],
           'person_name' => $validate['person_name'],
           'country_id' => $validate['country_id'],
           'telegram' => $validate['telegram'],
           'email' => $validate['email'],
           'description' => $validate['description'],
           'zone_id' => $validate['zone_id'],
           'fax' => $validate['fax'],
           'phone' => $validate['phone'],
           'address' => $validate['address'],
           'city_id' => $validate['city_id'],
           'facebook' => $validate['facebook'],
           'latlng' => $validate['latlng'],
           'instagram' => $validate['instagram'],
           'plaque' => $validate['plaque'],
           'local_phone' => $validate['local_phone'],
           'postal_code' => $validate['postal_code']
        ]);
        Session::flash('success' , 'اطلاعات با موفقیت ثبت شد. در انتظار تایید ...');
        return redirect()->back();
    }

    public function update(Agency $agency , Request $request)
    {
        $agency->update([
           'fax' => $request->fax,
           'local_phone' => $request->local_phone,
           'instagram' => $request->instagram,
           'telegram' => $request->telegram,
           'facebook' => $request->facebook,
           'latlng' => $request->latlng,
           'address' => $request->address,
           'postal_code' => $request->postal_code,
           'plaque' => $request->plaque,
        ]);
        Session::flash('success' , 'اطلاعات با موفقیت ثبت شد');
        return redirect()->back();
    }



    public function estate_request(Estate $estate)
    {
        $agency = Agency::where('user_id' , auth()->user()->id)->first();
        $requests = $estate->requests()->latest()->get();
        return view('pages.agency.estate_request' , compact('estate' , 'requests' , 'agency'));
    }


//    Consultant

    public function store_consultant(ConsultantRequest $request , Agency $agency)
    {
        $validate = $request->validated();
        $consultant = Consultant::create([
           'agency_id' => $agency->id,
           'phone' => $validate['phone'],
           'city_id' => $validate['city_id'],
           'zone_id' => $validate['zone_id'],
           'country_id' => $validate['country_id'],
           'email' => $validate['email'],
           'first_name' => $validate['first_name'],
           'last_name' => $validate['last_name'],
           'national_code' => $validate['national_code']
        ]);
        $name = 'consultant-'.$consultant->id.'.'.$request->file('image')->getClientOriginalExtension();
        if ($request->file('image')->move(storage_path('app/public/consultant_images'), $name)) {

            $consultant->image = $name;
        }
        $consultant->code = uniqid() . $consultant->id . $agency->id;
        $consultant->password = rand(100,999) . $consultant->id . '-' . $consultant->phone;
        $consultant->save();

        $user = User::create([
            'name' => $consultant->first_name . ' ' . $consultant->last_name,
            'email' => $consultant->email,
            'phone' => $consultant->phone,
            'password' => Hash::make($consultant->password),
            'user_type' => 'consultant',
        ]);
        $consultant->user_id = $user->id;
        $consultant->save();
        $MailData = [
            'username' => $user->email,
            'password' => $consultant->password,
            'name' => $user->name
        ];

        Mail::to($user->email)->queue(new LoginPasswordMail($MailData));
        Session::flash('success' , 'اطلاعات با موفقیت ثبت شد');
        return redirect()->back();


    }

    public function update_consultant(ConsultantRequest $request , Consultant $consultant)
    {
        $validate = $request->validated();
        if ($request->phone != $consultant->phone)
        {
            $consultant->password = rand(100,999) . $consultant->id . '-' . $request->phone;
            $consultant->save();

        }
        $consultant->update($validate);
        if ($request->hasFile('image'))
        {
            $name = 'consultant-'.$consultant->id.'.'.$request->file('image')->getClientOriginalExtension();
            if ($request->file('image')->move(storage_path('app/public/consultant_images'), $name)) {

                $consultant->image = $name;
            }
        }


        $consultant->user->update([
            'name' => $consultant->first_name . ' ' . $consultant->last_name,
            'email' => $consultant->email,
            'phone' => $consultant->phone,
            'password' => Hash::make($consultant->password),
            'user_type' => 'consultant',
        ]);
        Session::flash('success' , 'اطلاعات با موفقیت ثبت شد');
        return redirect()->back();


    }


    public function mark_consultant(Consultant $consultant)
    {
        if ($consultant->user->is_active == 1)
        {
            $consultant->user->is_active = 0;
            $consultant->user->save();
        }
        else
        {
            $consultant->user->is_active = 1;
            $consultant->user->save();
        }
        Session::flash('success' , ' با موفقیت ثبت شد');
        return redirect()->back();
    }



//    Admin Side
    public function agency_show(Agency $agency)
    {
        return view('pages.admin.show_agency' , compact('agency'));
    }

    public function agency_verify(Agency $agency)
    {
        $pass = rand(100,999) . $agency->id . '-' . $agency->phone;

        $user = User::create([
            'name' => $agency->name,
            'email' => $agency->email,
            'phone' => $agency->phone,
            'password' => Hash::make($pass),
            'user_type' => 'agency',
        ]);

        $agency->password = $pass;
        $agency->user_id = $user->id;
        $agency->active_date = Carbon::now();
        $agency->code = uniqid('agency-') . $agency->id;
        $agency->save();

        $MailData = [
            'username' => $user->email,
            'password' => $pass,
            'name' => $user->name
        ];

        Mail::to($user->email)->queue(new LoginPasswordMail($MailData));
        Session::flash('success' , 'اطلاعات با موفقیت ثبت شد');
        return redirect()->route('admin.agency');

    }

    public function agency_mark(Agency $agency)
    {
        $user = $agency->user;
        if ($user->is_active == 1)
        {
            $user->is_active = 0;
            $user->save();
        }
        else
        {
            $user->is_active = 1;
            $user->save();
        }
        Session::flash('success' , 'اطلاعات با موفقیت ثبت شد');
        return redirect()->route('admin.agency');
    }


    public function new_estate()
    {
        $agency = Agency::where('user_id' , auth()->user()->id)->first();
        $zones = Zone::where('country_id' , 101)->select(['id' , 'name'])->get();
        $agency = Agency::where('user_id' , auth()->user()->id)->first();
        $consultants = $agency->consultants;
        return view('pages.agency.add_estate' , compact('agency' , 'zones' , 'consultants' , 'agency'));
    }

    public function store_estate(EstateRequest $request , Agency $agency)
    {
        $validate = $request->validated();
        $estate = Estate::create([
            'title' => $validate['title'],
            'consultant_id' => $validate['consultant_id'],
            'category' => $validate['category'],
            'agency_id' => $agency->id,
            'type_id' => $validate['type_id'],
            'description' => $validate['description'],
            'country_id' => $validate['country_id'],
            'zone_id' => $validate['zone_id'],
            'city_id' => $validate['city_id'],
            'plaque' => $validate['plaque'],
            'latlng' => $validate['latlng'],
            'price' => $validate['price'],
            'postal_code' => $validate['postal_code'],
            'address' => $validate['address'],
            'wc' => $validate['wc'],
            'bedrooms' => $validate['bedrooms'],
            'features' => $validate['features'],
            'area' => $validate['area'],
            'parking' => $validate['parking'],
            'pet' => $validate['pet'],
            'price_type' => $validate['price_type'],
        ]);
        $estate->code = uniqid(null,false) . $estate->id . Carbon::now()->microsecond;
        $estate->save();
        return view('pages.agency.add_estate_image' , compact('estate'));
    }

    public function store_image_estate(Estate $estate , Request $request)
    {
        $image = EstateImage::create([
            'estate_id' => $estate->id
        ]);
        $name = 'estateImage-' . $image->id . '_' . Carbon::now()->microsecond . '.' . $request->file('file')->getClientOriginalExtension();
        if ($request->file('file')->move(storage_path('app/public/estate_images/' . $estate->id . '/'), $name)) {

            $image->image = $name;
            $image->save();
        }
    }

    public function pay_estate(Estate $estate)
    {
        return view('pages.agency.estate_pay' , compact('estate'));
    }


    public function pay_estate_update(Estate $estate, Request $request)
    {
       $price = '';
       if ($request->ladder && !$request->special)
       {
           $price = 40000;
           $estate->update([
              'price_pay' => $price
           ]);
           $estate->ladder = 1;
           $estate->save();
       }
        if (!$request->ladder && $request->special)
        {
            $price = 70000;
            $estate->update([
                'price_pay' => $price
            ]);
            $estate->special = 1;
            $estate->save();
        }
        if ($request->ladder && $request->special)
        {
            $price = 90000;
            $estate->update([
                'price_pay' => $price
            ]);
            $estate->ladder = 1;
            $estate->special = 1;
            $estate->save();
        }
        if (!$request->ladder && !$request->special){
            $price = 20000;
            $estate->update([

                'price_pay' => $price
            ]);
        }
        Session::flash('success' , 'اطلاعات با موفقیت ثبت شد');
        return redirect()->route('agency.home');
    }

    public function estates()
    {
        $agency = Agency::where('user_id' , auth()->user()->id)->first();
        $estates = $agency->estates;
        return view('pages.agency.estate' , compact('agency' , 'estates'));
    }
}
