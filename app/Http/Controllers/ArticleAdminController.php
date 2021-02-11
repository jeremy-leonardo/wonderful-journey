<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ArticleAdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.article.index', [
            'articles' => Article::paginate(10),
        ]);
    }

    public function destroy(int $id)
    {
        $article = Article::find($id);
        if ($article->image) {
            File::delete($article->image);
        }
        $article->delete();
        return back()->with(['status' => 'Article deleted successfully']);
    }
}
