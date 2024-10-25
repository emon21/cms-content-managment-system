<?php



# Image Upload

use Illuminate\Support\Facades\File;

function uploadImage($file, $folder)
{

   $filename = time() . '.' . $file->getClientOriginalExtension();
   $url = $file->move(public_path('uploads/' . $folder), $filename);
   return $url;

}

# Delete Image

function deleteImage($image){

    if (File::exists($image)) {
        File::delete($image);
    }
    


    
}