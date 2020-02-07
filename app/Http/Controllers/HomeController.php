<?php

namespace App\Http\Controllers;

use App\Category;
use App\Ad;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view ('skelbimai.pages.home');
    }

    public function showProfile(){
        $darbuotojai = [
            'Jonas',
            'Petras',
            'Antanas',
            'Ieva'
            ];

        return view ('skelbimai.pages.profiles');
    //return view ('profile', compact('darbuotojai'));
    }

    public function showSkelbimai(){

        $categories = Category::all();
        $ads = Ad::all();
        return view ('skelbimai.pages.skelbimai', compact('ads','categories'));

    }

    public function showSkelbimas(){


        return view ('skelbimai.pages.skelbimas');

    }
    public function showAbout(){


        return view ('skelbimai.pages.about');

    }
    public function showContact(){


        return view ('skelbimai.pages.contact');

    }

}
