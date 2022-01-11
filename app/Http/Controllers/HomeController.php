<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //récupération des mails dont la date de création remonte au maximum à 31 jours
        $data = DB::table('mails')->where('created_at','>=', Carbon::now()->subDays(31))->get();
        
        // dd($data);
        return view('dashboard', compact('data'));
    }
    public function newadmin()
    {
        return view('auth.newadmin');
    }
    public function create(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return true;
    }

    public function adminindex()
    {
        $admins = User::latest()->get();
        // dd($admins);
        return view('adminindex', compact('admins'));
    }

    public function admindestroy($id)
    {
        $admin = User::findOrFail($id);
        $admin -> delete();

        return redirect()->back()->with('success', 'L\'administrateur a été supprimé avec succès.');
    }
}
