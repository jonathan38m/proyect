<?php

namespace App\Http\Controllers;

use App\Http\Requests\BasicInformationStudentInfoPost;
use App\Http\Requests\StudentInfoForm;
use App\Mail\StudentInfo;
use App\Mail\StudentInfoAdmin;
use Mail;

class StudentInfoController extends Controller
{
    /**
     *
     */
    public function store(StudentInfoForm $request)
    {

        Mail::to($request->email)->send(new StudentInfo());

        Mail::to(config('mail.from.address'), config('mail.from.name'))
            ->cc(config('mail.cc.address'), config('mail.cc.name'))
            ->send(new StudentInfoAdmin($request));

        $request->session()->put('message', 'Instituto Superior de Español thanks you for your Enrollment with us. We will organize everything and will send your complete confirmation in the next 48 hours.');

        return redirect('/thanks-booking')->with('thanks', 'Instituto Superior de Español thanks you for your Enrollment with us. We will organize everything and will send your complete confirmation in the next 48 hours.');

    }

    public function basicInformation(BasicInformationStudentInfoPost $request)
    {
        return response()->json('true');
    }
}
