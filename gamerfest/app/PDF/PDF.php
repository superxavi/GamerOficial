<?php

namespace App\PDF;

use FPDF;

class PDF extends FPDF
{
    // Tu código va aquí

    public function generate($data)
    {
        // Recorre los datos de la tabla y agrega cada fila al PDF
        foreach ($data as $row) {
            $this->Cell(40, 6, $row->name, 1);
            $this->Cell(40, 6, $row->email, 1);
            $this->Cell(40, 6, $row->phone, 1);
            $this->Ln();
        }
    }
    



}
