<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function page(){
        $seo= DB::table('seo_properties')->where('pageName','=','contact')->first();
        return view("pages.contact",["seo"=>$seo]);
    }
    public function contactRequest(Request $request){
        sleep(2);
        return DB::table('contacts')->insert($request->input());
    }
}
