<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ArticleUserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('user');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.article.index', [
            'articles' => User::find(Auth::user()->id)->articles()->paginate(10),
        ]);
    }

    protected function rules(Request $request)
    {
        return Validator::make($request->all(), [
            'title' => ['required'],
            'category' => ['required'],
            'image' => ['required'],
            'description' => ['required', 'min:100'],
        ]);
    }

    public function create()
    {
        return view('user.article.create', [
            'categories' => Category::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validator = $this->rules($request);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        } else {
            $img = null;
            if ($request->file('image')) {
                $splitted = explode(".", $request->file('image')->getClientOriginalName());
                $ext = $splitted[sizeof($splitted) - 1];
                $file = $request->file('image');
                $dir = 'images/article';
                $newname = Str::uuid()->toString() . "." . $ext;
                $file->move($dir, $newname);
                $img = $dir . '/' . $newname;
            }
            Article::create(
                [
                    'user_id' => Auth::user()->id,
                    'title' => $request->title,
                    'category_id' => $request->category,
                    'image' => $img,
                    'description' => $request->description,
                ]
            );
            return back()->with(['status' => 'Article added successfully']);
        }
    }

    public function destroy(int $id)
    {
        $article = Article::find($id);
        if ($article->user_id != Auth::user()->id) {
            return back()->with(['error' => 'You can not delete an article created by other user']);
        }
        if ($article->image) {
            File::delete($article->image);
        }
        $article->delete();
        return back()->with(['status' => 'Article deleted successfully']);
    }
}
