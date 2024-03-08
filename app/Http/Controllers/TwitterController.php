<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class TwitterController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::orderBy('created_at', 'desc');
        if ($request->has('search')){
            $posts = $posts->filterSearch($request['search']);
        }
        return view('index', [
            'posts' => $posts->paginate(4),
        ]);
    }

}
