<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Str;
use App\Http\Resources\v1\BlogResource;

class PageController extends Controller
{
    public function index(){

        return view('index',['blogs'=>BlogResource::collection(Blog::all()) ]);
    }

    public function post($title){

       $post = Blog::where('slug', $title)->first();
        return view('post', ['post' => new BlogResource($post)]);
    }
}
