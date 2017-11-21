<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;

trait ImageUploadTrait
{
    public function uploadImage(UploadedFile $image, $path)
    {
        $real_path = file_get_contents($image->getRealPath());
        $extension = $image->getClientOriginalExtension();

        Storage::put($path.$image->getFilename().'.'.$extension, $real_path);

        $db_path = $path.$image->getFilename().'.'.$extension;

        //Usado para adicionar a imagem default com o nome q ela possui
        // Storage::put($path.$image->getClientOriginalName(), $real_path);

        // $db_path = $path.$image->getClientOriginalName();


        return $db_path;
    }
}