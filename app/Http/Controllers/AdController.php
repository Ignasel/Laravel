<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use File;
use Illuminate\Support\Facades\Auth;

class AdController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['only' => ['addAd', 'storeAd', 'showAds', 'updateAd', 'deleteAd']]);
    }

    public function addAd()
    {
        $categories = Category::all();


        return view('skelbimai.pages.addAd', compact('categories'));

    }

    public function storeAd(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'location' => 'required',
            'cat_id' => 'required',
            'img' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
        ]);

        $path = $request->file('img')->store('public/images');
        $filename = str_replace('public/', "", $path);


        $ad = Ad::create([
            'title' => request('title'),
            'description' => request('description'),
            'price' => request('price'),
            'email' => request('email'),
            'phone' => request('phone'),
            'location' => request('location'),
            'cat_id' => request('cat_id'),
            'img' => $filename
        ]);

        return redirect('/');
    }

    public function showAds()
    {
        $categories = Category::all();
        $ads = Ad::all();
        return view('skelbimai.pages.controlAds', compact('ads', 'categories'));

    }

    public function deleteAd(Ad $ad)
    {
        $ad->delete();
        return redirect('controlAds');

    }

    public function updateAd(Ad $ad)
    {

        return view('skelbimai.pages.updateAd', compact('ad'));

    }

    public function ad_update(Ad $ad, Request $request)
    {

//        dd($ad);

//        $validateData = $request->validate([
//            'title' => 'required',
//            'description' => 'required',
//            'price' => 'required',
//            'email' => 'required',
//            'phone' => 'required',
//            'location' => 'required',
//            'img' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
//        ]);


        Ad::where('id', $ad->id)
            ->update(['title' => request('title'),
                'description' => request('description'),
                'price' => request('price'),
                'email' => request('email'),
                'phone' => request('phone'),
                'location' => request('location')]);

        if ($request->file('img')) {
            File::delete('storage/' . $ad->img);
            $path = $request->file('img')->store('public/images');
            $filename = str_replace('public/', "", $path);
            Ad::where('id', $ad->id)
                ->update(['img' => $filename
                ]);
        }

        return redirect('controlAds');
    }


    public function search(Request $request)
    {

        $categories = Category::all();
        $ads = Ad::where('title', 'LIKE', '%' . request('titleForSearch') . '%')->
        where('location', 'LIKE', '%' . request('locationForSearch') . '%')->
        where('cat_id', 'LIKE', '%' . request('categoryId') . '%')->get();
        return view('skelbimai.pages.search', compact('ads', $categories));
    }

    public function logOut()
    {
        Auth::logout();

        return redirect('/');
    }
}