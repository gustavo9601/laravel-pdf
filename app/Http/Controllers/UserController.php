<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Importando la libreria de PDF
use Barryvdh\DomPDF\Facade as PDF;

//importamos el usuario
use App\User;
class UserController extends Controller
{
    public function exportPDF(){
        $users = User::all();


        //loadView(vista a generar, variables a la vista);
        $pdf = PDF::loadView('pdf.users', compact('users'));

        return $pdf->save(public_path() . '/files_pdf/my_stored_file.pdf')->download('archivo_generado.pdf');

        //return $pdf->save(public_path() . '/files_pdf/my_stored_file.pdf')->stream('download.pdf');

        //return $pdf->download('users-list.pdf');

    }
}
