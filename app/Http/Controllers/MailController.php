<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mails;

class MailController extends Controller
{
    public function getmail(Request $request)
    {
        //dd($request->all());
        $this -> validate($request,[
            'email' => 'required|email|unique:mails|email:rfc,dns',
        ]);
        
        $email = $request->email;
        //dd($email);
        
        //on stocke l'adresse mail en base
        Mails::create([
            'email'=>$email,
        ]);
        return true;
    }

    public function displaymails()
    {
        $mails = Mails::latest()->paginate(10);
        // dd($mails);

        return view('displaymails', compact('mails'))->with(request()->input('page'));
        
    }

    public function destroymail($id)
    {
        $mail = Mails::findOrFail($id);
        $mail -> delete();

        return redirect()->back()->with('success', 'Le mail a été supprimé avec succès.');
    }

    public function searchmail(Request $request)
    {
        $email = $request->email;
        // dd($email);
        $search = Mails::where('email', 'like', "%{$email}%")->limit(10)->get();
        return view('mailsearch', compact('search'));
    }

}
