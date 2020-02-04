<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkelbimaiController extends Controller
{
    public function index(){
        return view ('skelbimai.pages.home');
    }

    public function showSkelbimai(){


        return view ('skelbimai.pages.skelbimai');

    }
}
