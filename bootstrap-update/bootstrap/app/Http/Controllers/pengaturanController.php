<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengaturanController extends Controller
{

    public function pengaturan(){
        $this->cekLogin();
        $page = "pengaturan";
        return view("pengaturan", compact('page'));
    }
}
