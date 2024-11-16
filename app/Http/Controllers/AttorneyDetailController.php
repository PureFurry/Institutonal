<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttorneyDetailController extends Controller
{
    public function attorney_detail(){
        return view("attorney_detail.index");
    }
}
