<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use ZipArchive;

class ZipController extends Controller
{
    public function createZip()
    {
        $folderPath = storage_path('app/your_folder'); // Ganti 'your_folder' dengan nama folder yang ingin Anda zip

        $zipFileName = 'your_zip_file.zip'; // Ganti 'your_zip_file' dengan nama file zip yang diinginkan

        $zip = new ZipArchive;
        $zip->open(storage_path('app/' . $zipFileName), ZipArchive::CREATE);

        $files = File::files($folderPath);

        foreach ($files as $file) {
            $relativePath = 'your_folder/' . basename($file); // Ganti 'your_folder' dengan nama folder yang ingin Anda zip
            $zip->addFile($file, $relativePath);
        }

        $zip->close();

        return response()->download(storage_path('app/' . $zipFileName));
    }
}
