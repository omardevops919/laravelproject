<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function accueil(){
        return view("site.accueil");
    }
    public function about(){
        return view("site.about");
    }
    public function produits(){
        return view("site.produits");
    }
    public function contact(){
        return view("site.contact");
    }
    public function save(Request $request){
        $inputs=$request->all();
        return view("site.save",compact("inputs"));
    }
}
