<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;


class MenuController extends Controller
{
    public function index()
    {
        $menu = DB::table('menus')->pluck('file');
        $menu = $menu[0];
        return view('menu', compact('menu'));
    }

    public function maj(Request $request)
    {
        // dd($request->hasFile('menu1'));
        if ($request->hasFile('menu1'))
        {
            // $menu = $request->menu1;
            $filenamewithextension = $request->file('menu1')->getClientOriginalName();
            // dd($filenamewithextension);
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            // dd($filename);
            $extension = $request->file('menu1')->getClientOriginalExtension();
            // dd($extension);
            $filenametostore = $filename.'_'.time().'.'.$extension;
            // dd($filenametostore);
            $request->file('menu1')->storeAs('public/menus', $filenametostore); //upload du fichier
            $path = storage_path('app/public/menus/'.$filenametostore);
            //dd($path);
            $menu = Menu::select('file');
            $menu->update([
                'file'=>$filenametostore,
            ]);
        }
        $menu = DB::table('menus')->pluck('file');
        $menu = $menu[0];
        return view('menu', compact('menu'));
    }
}
