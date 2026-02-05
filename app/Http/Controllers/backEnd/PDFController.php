<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\PdfToImage\Pdf;
use thiagoalessio\TesseractOCR\TesseractOCR;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function readPdf()
    {
        $pdfPath = public_path('data.pdf');
        $imageOutputPath = public_path('temp/page');

        // 1️⃣ Convert PDF to Images
        $pdf = new Pdf($pdfPath);
        $pdf->setResolution(300); // improves OCR accuracy
        $pdf->saveImage($imageOutputPath); // generates page-1.jpg, page-2.jpg...

        // 2️⃣ Read all generated images
        $texts = [];
        foreach (glob(public_path('temp/page-*.jpg')) as $image) {
            $text = (new TesseractOCR($image))
                ->lang('eng','ben') // English + Bangla
                ->psm(6)
                ->run();

            // 3️⃣ UTF-8 cleanup
            $text = mb_convert_encoding($text, 'UTF-8', 'UTF-8, ISO-8859-1, ASCII');
            $text = preg_replace('/[^\x09\x0A\x0D\x20-\x7F\x{0980}-\x{09FF}]/u', '', $text);

            $texts[] = trim($text);
        }

        // 4️⃣ Combine all pages
        $finalText = implode("\n\n", $texts);

        return response()->json([
            'success' => true,
            'text' => $finalText
        ]);
    }
}
