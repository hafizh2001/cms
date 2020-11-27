<?php

namespace App\Http\Controllers;
use App\article;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
class ArticlesController extends Controller
{

    public function __construct()
    {
     $this->middleware('auth');
     $this->middleware(function($request, $next){
     if(Gate::allows('manage-articles')) return $next($request);
     abort(403, 'Anda tidak memiliki cukup hak akses');
     });
    }

    public function getID($id){
        $article_id = Article::find([$id]);
        return view ('articles',['articles'=> $article_id]);
    }
     public function index()
    {
    $article = Article::all();
    return view('tampil',['articles' => $article]);
    }
        public function add()
    {
        return view('tambah');
    }
    public function create(Request $request)
 {
    if($request->file('image')){
        $image_name = $request->file('image')->store('images','public');
        }
       
    Article::create([
        'title' => $request->title,
        'content' => $request->content,
        // 'image' => $request->$image_name
        ]);
    return redirect('/tampil');
    }
    public function edit($id)
    {
    $article = Article::find($id);
    return view('edit',['articles'=>$article]);
    }
    public function update($id, Request $request)
    {
    $article = Article::find($id);
    $article->title = $request->title;
    $article->content = $request->content;
    $article->image = $request->image;
    $article->save();
    return redirect('/tamppil');
    }
    public function delete($id)
    {
    $article = Article::find($id);
    $article->delete();
    return redirect('/tampil');
    }
}