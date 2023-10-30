<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $featuredPost = Post::with(['author:id,name,email', 'categories:id,title,slug,text_color,bg_color', 'comments'])
            ->latest('published_at')->take(9)->get();

        $trendingPost = Post::with(['author:id,name,email', 'categories:id,title,slug,text_color,bg_color', 'comments'])
            ->latest('published_at')->take(6)->get();

        $categoryPost = Category::take(9)->get();

        return view('home', [
            'featuredPost' => $featuredPost,
            'trendingPost' => $trendingPost,
            'categoryPost' => $categoryPost,
        ]);
    }
}
