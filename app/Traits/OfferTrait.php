<?php

namespace App\Traits;



trait OfferTrait
{
    public function saveImage($photo, $folder)
    {

        $file_extension = $photo->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = $folder;
        $photo->move($path, $file_name);
        return  $file_name;
    }

    public function pdfFile($pdf, $folder)
    {

        $file_extension = $pdf->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = $folder;
        $pdf->move($path, $file_name);
        return  $file_name;
    }
}

