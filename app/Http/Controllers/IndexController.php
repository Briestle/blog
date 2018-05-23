<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index() {
        $header = "Венкель Елена Ивановна";
        $massage = 'Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.';
        return view('page')->with(['massage'=>$massage, 'header'=>$header]);
    }
}
