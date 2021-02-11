@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-12 mt-4">
            <h2>{{$article->title}}</h2>
            <div class="row mt-3 mb-3">
                <div class="col-lg-4 col-md-6 col-sm-8 col-12">
                    <img src="{{asset($article->image)}}" class="img-fluid">
                </div>
            </div>
            <p>
                {{$article->description}}
            </p>
            <p class="mb-5">Category: <a href="">{{$article->category->name}}</a></p>
            <a href="{{url()->previous()}}"><button type="button" class="btn btn-secondary btn-sm" action="action">← Back</button></a><a href="/"></a>
        </div>
    </div>

</div>
@endsection
