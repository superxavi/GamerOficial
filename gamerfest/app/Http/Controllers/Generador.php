<?php

namespace App\Http\Controllers;

use App\PDF\PDF;
use App\User;

class UserController extends Controller
{
    public function exportPDF()
    {
        // Obtiene los datos de la tabla
        $data = User::all();

        // Crea una nueva instancia de la clase PDF
        $pdf = new PDF();

        // Genera el contenido del PDF
        $pdf->generate($data);

        // Envía el PDF al navegador
        $pdf->Output();
    }
}
