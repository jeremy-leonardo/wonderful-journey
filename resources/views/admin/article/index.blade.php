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
                <div class="card-header">{{ __('Blogs/ Articles') }}</div>

                <div class="card-body">

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
                                    {{$article->title}}
                                </th>
                                <td>
                                    <form method="POST" action="{{ route('admin.article.destroy', ['id' => $article->id]) }}">
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
                        Blog/ article doesn't exist yet.
                    </div>
                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
