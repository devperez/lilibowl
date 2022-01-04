<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mails;
use Carbon\Carbon;

class MailController extends Controller
{
    public function getmail(Request $request)
    {
        // dd($request->email);
        $this -> validate($request,[
            'email' => 'required|email|unique:mails',
        ]);
        
        //dd($validated);
        $email = $request->email;
        // dd($email);
        
        //on stocke l'adresse mail en base
        Mails::create([
            'email'=>$email,
        ]);
        return true;
    }

    public function displaymails()
    {
        $mails = Mails::latest('id')->first()->paginate(10);
        $date = Mails::latest('created_at')->first();
        $createdAt = Carbon::parse($date->created_at);
        $maildate = $createdAt->format('d M Y');
        // dd($maildate);
        return view('displaymails', compact('mails', 'maildate'))->with(request()->input('page'));
    }

    public function destroymail($id)
    {
        $mail = Mails::findOrFail($id);
        $mail -> delete();

        return redirect()->back()->with('success', 'Le mail a été supprimé avec succès.');
    }

}
