<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeAreaController extends Controller
{
    public function practice_area(){
        return view("practice_area.index");
    }
}
