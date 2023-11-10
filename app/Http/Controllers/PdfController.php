<?php

namespace App\Http\Controllers;

use App\Models\QuotationForm;


class PdfController extends Controller
{
    public function __invoke(QuotationForm $quotationForm)
    {
        $pdf = \PDF::loadView('frontend.pdf.ui', ['quotationForm' => $quotationForm])
            ->download('teklif-formu.pdf');
        return $pdf;
    }
}
