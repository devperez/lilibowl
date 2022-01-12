<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\SimpleExcel\SimpleExcelWriter;
use App\Models\Mails;

class CsvController extends Controller
{
    public function export(Request $request)
    {
        //Validation du nom du fichier
        $this->validate($request, [
            'name' => 'bail|required|string',
        ]);
        $extension = ".csv";

        //création du nom de fichier avec son extension .csv
        $file_name = $request->name.$extension;
        //dd($file_name);
        //Récupération des données de la table Mails
        $mails = Mails::select('email')->get();

        //on crée le fichier
        $writer = SimpleExcelWriter::streamDownload($file_name);

        //insertion des données dans le fichier
        $writer->addRows($mails->toArray());

        //on lance le téléchargement
        $writer->toBrowser();

        return view('mails');
    }
}
