<?php

namespace App\Http\Controllers;

use App\Mail\ReplayEstateRequestMail;
use App\Models\Consultant;
use App\Models\Estate;
use App\Models\EstateUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ConsultantController extends Controller
{
    public function home()
    {
        $consultant = Consultant::where('user_id' , auth()->user()->id)->first();
        $estates = $consultant->estates()->latest()->get();
        return view('pages.consultant.home', compact('consultant' , 'estates'));

    }

    public function estate_request(Estate $estate)
    {
        $consultant = Consultant::where('user_id' , auth()->user()->id)->first();
        $requests = $estate->requests()->latest()->get();
        return view('pages.consultant.estate_request' , compact('estate' , 'requests' , 'consultant'));
    }

    public function mark_status(EstateUserRequest $request)
    {
        $request->status =1;
        $request->save();
        Session::flash('success' , 'اطلاعات با موفقیت ثبت شد');
        return redirect()->back();
    }

    public function replay_request(EstateUserRequest $userRequest , Request $request)
    {
        $userRequest->update([
           'consultant_message' => $request->consultant_message
        ]);
        $userRequest->status =1;
        $userRequest->save();
        $MailData = [
            'estate' => $userRequest->estate->title,
            'name' => $userRequest->user->name
        ];

        Mail::to($userRequest->user->email)->queue(new ReplayEstateRequestMail($MailData));
        Session::flash('success' , ' با موفقیت ثبت شد');
        return redirect()->back();
    }
}
