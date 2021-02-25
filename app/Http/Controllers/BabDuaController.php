<?php

namespace App\Http\Controllers;
use App\Artikel;
use Illuminate\Http\Request;

class BabDuaController extends Controller
{
    public function a5(){
        $artikel=Artikel::where('id',6)->where('users_id',1)->get();

        return $artikel;
    }

    public function a6(){
        $artikel=Artikel::where('id',7)->where('users_id',1)->get();

        return $artikel;
    }

    public function a7(){
        $artikel=Artikel::where('id',8)->where('users_id',1)->get();

        return $artikel;
    }
}
