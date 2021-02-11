@extends('layouts.app')

@section('content')
<div class="container">

    @isset($category)
    <div class="row mb-4">
        <div class="col-12">
            <h1>
                Category: {{$category->name}}
            </h1>
        </div>
    </div>
    @endisset

    @if(count($articles) > 0)
    <div class="row">
        @foreach($articles as $article)
        <div class="col-md-4 mt-3">
            <h2>{{$article->title}}</h2>
            <p>
                {{substr($article->description,0,90)}} ...
                <a href="{{route('article.show', ['id' => $article->id])}}">
                    Full story
                </a>
            </p>
            <p>Category: <a href={{ route('article.index-by-category', ['category_id' => $article->category_id]) }}>{{$article->category->name}}</a></p>
        </div>
        @endforeach
    </div>
    <div class="row justify-content-md-center mt-4">
        {{ $articles->withQueryString()->links() }}
    </div>
    @else
    <div class="text-center pt-5 pb-5">
        Blog/ article doesn't exist yet.
    </div>
    @endif

</div>
@endsection
