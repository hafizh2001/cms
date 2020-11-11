<?php

namespace App\Http\Controllers;

use App\article;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends Controller
{
    public function getAll(){
        $article = Article::all();
        return view ('home',['articles'=> $article]);
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
        $article = Article::all();
        return view ('home',['articles'=> $article]);
    }
   }
