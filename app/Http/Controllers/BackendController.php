<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    //
    public function index(){
        return view('backend.index');
    }
    public function nav(){
        return view('backend.app.nav.nav');
    }
}
