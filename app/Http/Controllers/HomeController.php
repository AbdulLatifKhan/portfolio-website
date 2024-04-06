<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{   
    public function page(){
        $seo= DB::table('seo_properties')->where('pageName','=','home')->first();
        return view("pages.home",["seo"=>$seo]);
    }
    public function heroData(){
        return DB::table('heroproperties')->first();
    }
    public function aboutData(){
        return DB::table('abouts')->first();
    }
    public function socialData(){
        return DB::table('socials')->first();
    }
}
