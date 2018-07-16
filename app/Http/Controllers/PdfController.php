<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function makePDF(){
    	$data['check'] = 'hello';
    	$pdf = PDF::loadView('pdf.userpdf', $data);
		return $pdf->download('userpdf.pdf');
    }
}
