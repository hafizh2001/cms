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
        return view ('halaman',['articles'=> $article]);
    }
   }
