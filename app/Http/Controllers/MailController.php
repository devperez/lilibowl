<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mails;


class MailController extends Controller
{
    public function getMail(Request $request)
    {
        // $this->validator($request->all())->validate();
        dd($request);
    }

    public function index()
    {
        $mails = Mail::latest('id')->first()->paginate(10);

        return view('back.touslesmails', compact('mails'))->with(request()->input('page'));
    }

}
