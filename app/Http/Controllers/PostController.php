<?php


namespace App\Http\Controllers;


use App\Entities\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        return Post::all();
    }
}
