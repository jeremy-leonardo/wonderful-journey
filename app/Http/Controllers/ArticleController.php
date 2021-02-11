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
        return view('article.index', [
            'articles' => Article::paginate(9),
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
        return view('article.create', [
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
                $ext = $splitted[sizeof($splitted)-1];
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

    public function show(int $id)
    {
        return view('article.show', [
            'article' => Article::find($id),
        ]);
    }
}
