<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function uploadImage( $request) {


        $filename = time() . '_' . random_int(100000000, 999999999) . '.' . 'png';
        $image=$request;
        $image = str_replace('data:image/png;base64,','',$image);
        $image = str_replace(' ','+',$image);
        Storage::disk('public')->put($filename,base64_decode($image));


        return  $filename;

    }

}
