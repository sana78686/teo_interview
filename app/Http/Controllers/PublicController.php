<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        
        $data['posts'] = Post::all();
        return view('welcome', $data);
    }

    
}
