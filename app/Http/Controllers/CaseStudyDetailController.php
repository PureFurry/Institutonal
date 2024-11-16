<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaseStudyDetailController extends Controller
{
    public function case_study_detail(){
        return view("case_study_detail.index");
    }
}
