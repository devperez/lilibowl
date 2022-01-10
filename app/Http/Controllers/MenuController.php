<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Dessert;
use App\Models\Boisson;
use Illuminate\Support\Facades\DB;


class MenuController extends Controller
{
    public function index()
    {
        $menu = DB::table('menus')->pluck('file');
        $menu = $menu[0];
        //$dessert = DB::table('desserts')->pluck('file');
        
        return view('menu', compact('menu'));

    }

    public function index2()
    {
        $menu = DB::table('menus')->pluck('file');
        $menu = $menu[0];
        //$dessert = DB::table('desserts')->pluck('file');
        
        return true;

    }

    public function maj(Request $request)
    {
        //pour le menu principal
        //dd($request->menu1);
        if ($request->hasFile('menu1'))
        {
            // $menu = $request->menu1;
            $filenamewithextension = $request->file('menu1')->getClientOriginalName();
            //dd($filenamewithextension);
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            //dd($filename);
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
        
        $menu = DB::table('menus')->pluck('file');
        $menu = $menu[0];
        
        return true;
        }
        //pour les desserts
        if ($request->hasFile('menu2'))
        {
        $filenamewithextension = $request->file('menu2')->getClientOriginalName();
        //dd($filenamewithextension);
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        //dd($filename);
        $extension = $request->file('menu2')->getClientOriginalExtension();
        // dd($extension);
        $filenametostore = $filename.'_'.time().'.'.$extension;
        //dd($filenametostore);
        $request->file('menu2')->storeAs('public/desserts', $filenametostore); //upload du fichier dans son dossier
        $path = storage_path('app/public/desserts/'.$filenametostore);
        //dd($path);
        $dessert = Dessert::select('file');
        $dessert->update([//upload du nom du fichier en base
            'file'=>$filenametostore,
        ]);

        $dessert = DB::table('desserts')->pluck('file');
        //dd($dessert);
        $dessert = $dessert[0];
        return true;
        }
        //pour les boissons
        if ($request->hasFile('menu3'))
        {
        $filenamewithextension = $request->file('menu3')->getClientOriginalName();
        //dd($filenamewithextension);
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        //dd($filename);
        $extension = $request->file('menu3')->getClientOriginalExtension();
        // dd($extension);
        $filenametostore = $filename.'_'.time().'.'.$extension;
        //dd($filenametostore);
        $request->file('menu3')->storeAs('public/boissons', $filenametostore); //upload du fichier dans son dossier
        $path = storage_path('app/public/boissons/'.$filenametostore);
        //dd($path);
        $boisson = Boisson::select('file');
        $boisson->create([//upload du nom du fichier en base
            'file'=>$filenametostore,
        ]);
    
        $boisson = DB::table('boissons')->pluck('file');
        //dd($boisson);
        $boisson = $boisson[0];
        return true;
        }
    }    
}
