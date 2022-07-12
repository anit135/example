<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;


class BlogController extends Controller
{
    public function index(){
        $posts = Post::paginate(3);
        $categories = Category::orderByRaw('CONVERT(title, SIGNED)')->get();

        return view('pages.index',[
            'categories' => $categories,
            'posts' => $posts
        ]);
    }

    public function getPostsByCategory($slug){
        $categories = Category::orderByRaw('CONVERT(title, SIGNED)')->get();
        $current_category = Category::where('slug', $slug)->first();

        return view('pages.index', [            
            'categories' => $categories,
            'posts' => $current_category->postsByCategory()->paginate(3),
            'title' => $current_category->title
        ]);
    }

    public function getPost($slug_category, $slug_post){
        $categories = Category::orderByRaw('CONVERT(title, SIGNED)')->get();
        $post = Post::where('slug', $slug_post)->first();

        return view('pages.show-post', [
            'categories' => $categories,
            'post' => $post,
            'slug_category'=>$slug_category
        ]);
    }
}
