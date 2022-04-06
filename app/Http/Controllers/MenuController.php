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
        $menu1 = $request->hasFile('menu1');
        $menu2 = $request->hasFile('menu2');
        $menu3 = $request->hasFile('menu3');

        //pour le menu principal
        //dd($menu1);
        //dd($request->hasFile(''));
        if ($menu1)
        {
            //dd($menu1);
            // $menu = $request->menu1;
            $filenamewithextension1 = $request->file('menu1')->getClientOriginalName();
            // dd($filenamewithextension1);
            $filename1 = pathinfo($filenamewithextension1, PATHINFO_FILENAME);
            //dd($filename1);
            $extension1 = $request->file('menu1')->getClientOriginalExtension();
            //dd($extension1);
            
            if (($extension1 == "png") || ($extension1 == "PNG"))
            {
                $filenametostore1 = $filename1.'_'.time().'.'.$extension1;
            //dd($filenametostore1);
                $request->file('menu1')->storeAs('public/menus', $filenametostore1); //upload du fichier
                $path1 = storage_path('app/public/menus/'.$filenametostore1);
            //dd($path1);
                $menu = Menu::select('file');

                $menu->update([
                    'file'=>$filenametostore1,
                ]);
                return true;
            }else {
                return false;
            }
        }

        // dd($request->hasFile('menu3'));
        //pour les desserts
        
        if ($menu2)
        {
            $filenamewithextension2 = $request->file('menu2')->getClientOriginalName();
            //dd($filenamewithextension2);
            $filename2 = pathinfo($filenamewithextension2, PATHINFO_FILENAME);
            //dd($filename2);
            $extension2 = $request->file('menu2')->getClientOriginalExtension();
            // dd($extension2);
            
            if (($extension2 == "png") || ($extension2 == "PNG"))
            {
                $filenametostore2 = $filename2.'_'.time().'.'.$extension2;
            //dd($filenametostore2);
                $request->file('menu2')->storeAs('public/desserts', $filenametostore2); //upload du fichier dans son dossier
                $path2 = storage_path('app/public/desserts/'.$filenametostore2);
            //dd($path2);
                $dessert = Dessert::select('file');
                $dessert->update([//upload du nom du fichier en base
                'file'=>$filenametostore2,
                ]);
                return true;
            }else {
                return false;
            }
        }
    
    //     //pour les boissons
    //     //dd($request->hasFile('menu3'));

        // if ($menu3)
        // {
        //     $filenamewithextension3 = $request->file('menu3')->getClientOriginalName();
        //     //dd($filenamewithextension3);
        //     $filename3 = pathinfo($filenamewithextension3, PATHINFO_FILENAME);
        //     //dd($filename3);
        //     $extension3 = $request->file('menu3')->getClientOriginalExtension();
        //     //dd($extension3);
        //     //dd ($extension3 == "PNG");

        //     if (($extension3 == "png") || ($extension3 == "PNG"))
        //     {
        //         $filenametostore3 = $filename3.'_'.time().'.'.$extension3;
        //     //dd($filenametostore3);
        //         $request->file('menu3')->storeAs('public/boissons', $filenametostore3); //upload du fichier dans son dossier
        //         $path3 = storage_path('app/public/boissons/'.$filenametostore3);
        //     //dd($path3);
        //         $boisson = Boisson::select('file');
        //         $boisson->update([//upload du nom du fichier en base
        //         'file'=>$filenametostore3,
        //         ]);
        //         return true;
        //     }else{
        //         return false;
        //     }
        // }
    }
}
