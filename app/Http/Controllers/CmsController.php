<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\post;

class CmsController extends Controller
{
    public function index($value="") {
       $posts = Post::all();
       return view('cms.index', compact('posts'));
    }
}
