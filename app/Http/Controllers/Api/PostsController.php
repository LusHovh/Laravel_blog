<?php
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Services\PostService;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use File; 
 
class PostsController extends Controller{
    public function __construct()
    {
       $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PostService $postService)
    {
         $posts = $postService->getAllPosts();
         return response()->json(compact('posts'),200);
    }



   } 
   