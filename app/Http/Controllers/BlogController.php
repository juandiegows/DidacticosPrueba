<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

use App\Http\Resources\v1\BlogResource;

class BlogController extends Controller
{
    public function index(){

        return view('index',['blogs'=>BlogResource::collection(Blog::all()) ]);
    }

    public function post(){
        return view('post');
    }
}
