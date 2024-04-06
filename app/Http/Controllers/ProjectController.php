<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function page(){
        $seo= DB::table('seo_properties')->where('pageName','=','projects')->first();
        return view("pages.project",["seo"=>$seo]);
    }
    public function projectsData(){
        return DB::table('projects')->get();
    }
}
