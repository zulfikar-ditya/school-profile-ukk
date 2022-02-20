<?php

namespace App\Components;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait UploadFile
{
    public function uploadFile(UploadedFile $uploadedFile, $folder = null, $disk = 'public')
    {
        $file = Storage::disk($disk)->put("$folder", $uploadedFile);
        return $file;
    }

    public function deleteOne($disk = 'public', $filename = null)
    {
        Storage::disk($disk)->delete($filename);
    }
}
