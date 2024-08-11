<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomePageEtc;
use Illuminate\Http\Request;

class HomePageEtcController extends Controller
{
    public function selectVideo(){
        $result = HomePageEtc::select('videoDecription','videoUrl')->get();
        return $result;
    }
    public function selectTotalHome(){
        $result = HomePageEtc::select('totalCourse','totalStudent','totalReview')->get();
        return $result;
    }
    public function selectTechHome(){
        $result = HomePageEtc::select('techDescription')->get();
        return $result;
    }
    public function selectHomeTitle(){
        $result = HomePageEtc::select('homeTitle','homeSubTitle')->get();
        return $result;
    }
}
