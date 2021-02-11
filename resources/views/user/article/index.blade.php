@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
            <div class="card bg-dark">
                <div class="card-header">{{ __('My Blogs') }}</div>

                <div class="card-body">

                    <div class="text-center mb-4">
                        <a href="{{ route('user.article.create') }}">
                            <button class="btn btn-primary" type="submit">
                                + Create Blog
                            </button>
                        </a>
                    </div>

                    @if(count($articles) > 0)
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($articles as $article)
                            <tr>
                                <th scope="row">
                                    <a href="{{route('article.show', ['id' => $article->id])}}">{{$article->title}}</a>
                                </th>
                                <td>
                                    <form method="POST" action="{{ route('user.article.destroy', ['id' => $article->id]) }}">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger" type="submit">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        {{ $articles->withQueryString()->links() }}
                    </div>
                    @else
                    <div class="text-center">
                        You have not posted any blog/ article yet.
                    </div>
                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
