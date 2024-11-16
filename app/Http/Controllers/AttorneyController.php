<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttorneyController extends Controller
{
    public function attorney(){
        return view("attorney.index");
    }
}
