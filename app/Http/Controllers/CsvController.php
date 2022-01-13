<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\SimpleExcel\SimpleExcelWriter;
use App\Models\Mails;
use Carbon\Carbon;
use Session;

class CsvController extends Controller
{
    public function export(Request $request)
    {
        // dd($request->name);
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
        //dd($mails);
        //on crée le fichier
        $writer = SimpleExcelWriter::streamDownload($file_name);

        //insertion des données dans le fichier
        $writer->addRows($mails->toArray());

        //on lance le téléchargement
        $writer->toBrowser();

    }

    public function partial(Request $request)
    {
        //dd($request);
        $this->validate($request, [
            'name' => 'bail|required|string',
        ]);

        $extension = ".csv";

        $file_name = $request->name.$extension;
        //dd($file_name);
        //récupération des mails dont la date de création remonte au maximum à 31 jours
        $mails = Mails::select('email')->where('created_at','>=', Carbon::now()->subDays(31))->get();
        
        //dd($mails);
        $writer = SimpleExcelWriter::streamDownload($file_name);
        $writer->addRows($mails->toArray());
        //dd($writer);

        $writer->toBrowser();
    }
}
