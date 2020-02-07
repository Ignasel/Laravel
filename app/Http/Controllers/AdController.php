<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Category;
use Illuminate\Http\Request;

class AdController extends Controller
{
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
            'cat_id' => 'required'
        ]);

        $ad = Ad::create([
            'title' => request('title'),
            'description' => request('description'),
            'price' => request('price'),
            'email' => request('email'),
            'phone' => request('phone'),
            'location' => request('location'),
            'cat_id' => request('cat_id')
        ]);

        return redirect('/');
    }

    public function showAds()
    {
        $categories = Category::all();
        $ads = Ad::all();
        return view ('skelbimai.pages.controlAds', compact('ads','categories'));

    }

    public function deleteAd(Ad $ad)
    {
        $ad->delete();
        return redirect ('controlAds');

    }

    public function selectAd()
    {
        $id = $_GET['id'];
        return view ('skelbimai.pages.skelbimas', $id);
    }
}
