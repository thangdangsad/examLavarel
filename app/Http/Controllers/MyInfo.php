<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyInfo extends Controller
{

    public function viewInfo(){
        return view('MyInfo' );
    }
}
