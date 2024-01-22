<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Dompdf\Dompdf;
use Barryvdh\DomPDF\Facade\Pdf;


class UnduhPdfController extends Controller
{
    public function unduhPDF($id_transaksi)
    {
        $data = array(
            'transaksi' => DB::table('transaksi')
                ->join('customer', 'transaksi.id_customer', '=', 'customer.id_customer')
                ->join('sewa', 'transaksi.id_sewa', '=', 'sewa.id_sewa')
                ->join('cars', 'transaksi.id_mobil', '=', 'cars.id_mobil')
                ->join('users', 'customer.id_user', '=', 'users.id_user')
                ->where('transaksi.id_transaksi', $id_transaksi)
                ->get(),
        );

        $html = view('Customer.unduhPdf', $data)->render();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper("A4", "portrait");
        $dompdf->render();

        // Simpan ke file
        $output = $dompdf->output();
        $filename = "StrukSewa.pdf";
        file_put_contents($filename, $output);

        // Berikan tautan unduhan
        return response()->download($filename)->deleteFileAfterSend(true);
    }

}
