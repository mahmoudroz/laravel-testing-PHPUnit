<?php

namespace App\Traits;

trait GeneralTrait
{
    public function uploadImage($image,$folder)
    {
        $imageName = rand(1000000,100000000) . sha1(time()) . '.'.$image->extension();
        $destinationPath = public_path($folder);
        $image->move($destinationPath,$imageName);
        return $imageName;
    }

    function deleteFile($photo_name, $folder)
    {
        $image_name = $photo_name;
        $image_path = public_path($folder) . $image_name;
        if (file_exists($image_path)) {
            @unlink($image_path);
        }
    }
}
