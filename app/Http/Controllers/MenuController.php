<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        return view('menu');
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
            $path = storage_path('public/menus/'.$filenametostore);
            // dd($path);
            Menu::create([
                'file'=>$path,
            ]);
        }
        $menus = Menu::latest()->get();
        // dd($menu);
        return view('menu', compact('menus'))->with(['success'=>'Le menu a bien été mis à jour.']);
    }
}
