<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('public.article.index', [
            'articles' => Article::paginate(6),
        ]);
    }

    public function show(int $id)
    {
        return view('public.article.show', [
            'article' => Article::find($id),
        ]);
    }
    
    public function indexByCategory(int $category_id)
    {
        $category = Category::find($category_id);
        return view('public.article.index', [
            'articles' => $category->articles()->paginate(6),
            'category' => $category,
        ]);
    }
}