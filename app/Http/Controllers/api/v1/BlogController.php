<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Http\Resources\v1\BlogResource;
class BlogController extends Controller
{
    public function index(){
    
        return BlogResource::collection(Blog::all());
    }

    public function Show(Blog $blog){
    
        return new BlogResource($blog);
    }
    public function search(Request $request)
    {
        $fecha = $request->input('fecha');
        $blogs = Blog::whereDate('created_at', $fecha)->get();
        return BlogResource::collection($blogs);
    }
}
