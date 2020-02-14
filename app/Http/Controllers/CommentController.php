<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ad;
use App\Comments;
use Illuminate\Support\Facades\Auth;
use App\Category;
use Illuminate\Support\Facades\Input;
use File;
use Gate;
use App\Providers\AuthServiceProvider;

class CommentController extends Controller
{
    public function storeComment(Ad $ad)
    {
        Comments::create([
            'comment' => request('comment'),
            'ad_id' => $ad->id,
            'name' => request('name'),
            'user_id' => Auth::id()
        ]);
        return redirect ('skelbimas/'.$ad->id);
    }
}
