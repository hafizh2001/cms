<?php

namespace App\Http\Controllers;
use App\article;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{

   

    public function getID($id){
        $article_id = Article::find([$id]);
        return view ('articles',['articles'=> $article_id]);
    }
}