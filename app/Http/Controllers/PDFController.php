<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    // public function showInvoice()
    // {
    //     $data = ['invoice_number' => '123456', 'amount' => 100.00];
    //     return View::make('pdf.invoice', $data);
    // }

    public function generatePDF(Request $request)
    {
        $data = ['invoice_number' => '123456', 'amount' => 100.00];
        $pdf = PDF::loadView('pdf.invoice', $data);

        return $pdf->download('invoice.pdf');
    }
}
