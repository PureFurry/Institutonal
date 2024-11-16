<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeAreaDetailController extends Controller
{
    public function practice_area_detail(){
        return view("practice_area_detail.index");
    }
}
