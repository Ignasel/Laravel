<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $fillable = ['title', 'description', 'price', 'email', 'phone', 'location', 'cat_id'];
}