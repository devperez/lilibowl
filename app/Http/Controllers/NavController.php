<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;



class NavController extends Controller
{
    public function homepage()
    {
        return view('homepage');
    }

    public function restaurant()
    {
        return view('restaurant');
    }

    public function menus()
    {
        $menu = DB::table('menus')->pluck('file');
        $boisson = DB::table('boissons')->pluck('file');
        $dessert = DB::table('desserts')->pluck('file');
        return view('menufront', compact('menu', 'boisson', 'dessert'));
    }
    
    public function sensibilisation()
    {
        return view('sensibilisation');
    }
    public function formations()
    {
        return view('formations');
    }

    public function mentions()
    {
        return view('mentions');
    }
}
