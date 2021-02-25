<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BabSatuController;
use App\Artikel;
use Illuminate\Http\Request;

class BabSatuController extends Controller
{
    public function a1(){
        $artikel=Artikel::where('id',2)->where('users_id',1)->get();

        return $artikel;
    }

    public function a2(){
        $artikel=Artikel::where('id',3)->where('users_id',1)->get();

        return $artikel;
    }

    public function a3(){
        $artikel=Artikel::where('id',4)->where('users_id',1)->get();

        return $artikel;
    }

    public function a4(){
        $artikel=Artikel::where('id',5)->where('users_id',1)->get();

        return $artikel;
    }
}
