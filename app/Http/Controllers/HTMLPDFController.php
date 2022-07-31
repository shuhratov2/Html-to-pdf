<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use PDF;
use Illuminate\Http\Request;

class HTMLPDFController extends Controller
{
    /**
     * generate PDF file from blade view.
     *
     * @return \Illuminate\Http\Response
     */
    public function htmlPdf()
    {
        $pdf = PDF::loadView('htmlPdf');
        // (Optional) Setup the paper size and orientation
        $pdf->setPaper('letter');
        // Render the HTML as PDF
        $pdf->render();
        return $pdf->stream('pdfview.pdf');
    }
}
