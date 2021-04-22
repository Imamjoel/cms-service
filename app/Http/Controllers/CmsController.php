<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\Builde;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\post;
use Illuminate\Support\Facades\DB;

class CmsController extends Controller
{
    protected $limit = 3;

    public function index() {
       $posts = Post::with('author')
       ->latestFirst()
       ->published()
       ->simplePaginate($this->limit);
       return view('cms.index', compact('posts'));
    }

    public function show(Post $post) {
      return view('cms.show', compact('post'));
    }

}
