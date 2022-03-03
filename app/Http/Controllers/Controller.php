<?php

namespace App\Http\Controllers;

use App\Components\Pack;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, Pack;
    // use \App\Components\UploadFile;
    public function uploadFile(UploadedFile $uploadedFile, $folder = null, $disk = 'public')
    {
        $file = Storage::disk($disk)->put("$folder", $uploadedFile);
        return $file;
    }

    public function deleteOne($filename, $disk = 'public',)
    {
        Storage::disk($disk)->delete($filename);
    }
}
