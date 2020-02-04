<?php

namespace App\Http\Controllers;

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


        return view ('skelbimai.pages.skelbimai');

    }
}
