<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller
{
    public function page(){
        $seo= DB::table('seo_properties')->where('pageName','=','resume')->first();
        return view("pages.resume",["seo"=>$seo]);
    }
    public function resumeLink(){
        
        return DB::table('resumes')->first();
    }
    public function experiencesData(){
        return DB::table('experiences')->get();
    }
    public function educationData(){
        return DB::table('education')->get();
    }
    public function skillsData(){
        return DB::table('skills')->get();
    }
    public function languageData(){
        return DB::table('languages')->get();
    }
}
