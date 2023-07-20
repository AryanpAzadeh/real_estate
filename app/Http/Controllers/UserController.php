<?php

namespace App\Http\Controllers;

use App\Mail\EstateRequestMail;
use App\Models\Estate;
use App\Models\EstateUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function home()
    {
        $user = auth()->user();
        $requests = $user->requests()->latest()->get();
        return view('pages.user.home' , compact('user' , 'requests'));
    }

    public function store_request(Request $request , Estate $estate)
    {
        EstateUserRequest::create([
           'user_id' => auth()->user()->id,
           'estate_id' => $estate->id,
           'description' => $request->description
        ]);

        $MailData = [
            'estate' => $estate->title,
            'name' => auth()->user()->name
        ];

        Mail::to($estate->consultant->email)->queue(new EstateRequestMail($MailData));
        Session::flash('success' , 'اطلاعات با موفقیت ثبت شد');
        return redirect()->back();
    }
}
