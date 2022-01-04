<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mails;


class MailController extends Controller
{
    public function getmail(Request $request)
    {
        dd($request);
        $validated = $request->validate([
            'email' => 'required|email|unique:mails',
        ]);
        
        //dd($validated);
        $email = $validated['email'];
        // dd($email);
        //on stocke l'adresse mail en base
        Mails::create([
            'email'=>$email,
        ]);
        return true;
    }

    public function index()
    {
        $mails = Mail::latest('id')->first()->paginate(10);

        return view('back.touslesmails', compact('mails'))->with(request()->input('page'));
    }

}
