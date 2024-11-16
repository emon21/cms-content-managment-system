<?php

namespace App\Helper;


use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


/**
 * image upload
 *
 * @param object $file
 * @param string $path
 * @return string
 */


# Image Upload


function uploadImage($file, $folder)
{

    $filename = time() . '.' . $file->getClientOriginalExtension();
    $url = $file->move(public_path('uploads/' . $folder), $filename);
    // return $url;
    return "uploads/$folder/".$filename;
}


// function uploadImage($file, $path)
// {
//     $fileName = time() . '.' . $file->getClientOriginalExtension();
//     $file->move(public_path('uploads/' . $path . '/'), $fileName);
//     return "uploads/$path/" . $fileName;
// }

# Delete Image

function deleteImage($image)
{

    if (File::exists($image)) {
        File::delete($image);
    }
}

/*

// function deleteImage($image)
// {
//    $imageExists = file_exists($image);
//    if ($imageExists) {
//       if ($imageExists != 'uploads/no-image.png') {
//          @unlink($image);
//       // File::delete($image);
//       }
//    }

// } 



  // Delete the image file from the public folder
   // if (file_exists(public_path($imagePath))) {
   //    unlink(public_path($imagePath));  // Delete the file
   // }

   // // Delete the image record from the database
   // return $imageModel->delete();




*/



# Toaster Notification on Data Insert

function ToasterNotification(){


}

// const LIMIT = 50;

// // public function limit()

// //     {
// //         // return Str::limit($this->description);
// //         return Str::limit();
// //     }
  
// function limit(){
//     return Str::limit(LIMIT);
// }


