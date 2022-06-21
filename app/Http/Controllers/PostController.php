<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Clockwork\Storage\Search;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        //dd(request('search')); request untuk mengambil data dari pencarian url get
        // fitur pencarian
        // $konten = Post::latest();
        // if (request('search')) {
        //     $konten->where('title' , 'like', '%' . request('search') . '%')
        //     ->orWhere('body' , 'like', '%' . request('search') . '%');
        // }
        // lanjutan ada di model
        $subjudul = '';
        if (request('author')) {
            $subjudul = 'All Post by ' . request('author');
        }

        if (request('category')) {
            $subjudul = 'All Post in ' . request('category');
        }
         

        return view('posts' , [
            "title" => "posts" ,
            "active" => "posts",
            "konten" => Post::latest()->filter(request(['search','category','author']))->paginate(7)->withQueryString(), // artinya lakukan semua yang ada di methode filter di file model
            "subJudul" => $subjudul,
            "template" => true
           
        ]);
    }

    public function show(Post $post)
    {
        return view('post' , [
            "title" => "post",
            "active" => "posts",
            "konten" => $post,
            "template" => true
        ]);
    }
}
