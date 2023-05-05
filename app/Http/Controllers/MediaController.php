<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;


class MediaController extends Controller
{
    //
     public function getMedia(){
         return response()->json(Media::all(),200);
     }
}
