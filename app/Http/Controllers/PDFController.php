<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class PDFController extends Controller
{
    public function generatePDF(){
        $bills = Bill::get();
        $data = [
            'title' => 'Thông Tin Hóa Đơn',
            'date' => date('m/d/Y'),
            'bills' => $bills
        ];
        $pdf = Pdf::loadView('admin.myPDF', $data);
        return $pdf->download('webappfix.pdf');
    }
}
