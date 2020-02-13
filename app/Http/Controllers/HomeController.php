<?php

namespace App\Http\Controllers;

    use App\Category;
    use App\Ad;
    use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function __construct(){
        $this->middleware('auth',['only' => ['']]);
    }


    public function index(){

        $ads = Ad::select('ads.id', 'ads.title', 'ads.description', 'ads.price', 'ads.email', 'ads.phone', 'ads.location',
            'ads.cat_id', 'ads.created_at', 'categories.name')->join('categories', 'categories.id', "=", 'ads.cat_id')->get();
        $categories = Category::all();

        return view ('skelbimai.pages.home', compact('ads'), compact('categories'));
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

        $ads = Ad::select('ads.id', 'ads.title', 'ads.description', 'ads.price', 'ads.email', 'ads.phone', 'ads.location',
            'ads.cat_id', 'ads.created_at', 'ads.img', 'categories.name')->join('categories', 'categories.id', "=", 'ads.cat_id')->paginate(2);


        return view ('skelbimai.pages.skelbimai', compact('ads'));

    }

    public function showSkelbimas(Ad $ad){


        return view ('skelbimai.pages.skelbimas', compact ("ad"));

    }
    public function showAbout(){


        return view ('skelbimai.pages.about');

    }
    public function showContact(){


        return view ('skelbimai.pages.contact');

    }






    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

}
