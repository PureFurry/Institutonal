<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaseStudyController extends Controller
{
    public function case_study(){
        return view("case_study.index");
    }
}
