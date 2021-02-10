@extends('layouts.app')

@section('content')
<div class="container">

    <h1 class="mt-3 mb-5">
        Welcome, {{Auth::user()->name}}
    </h1>

</div>
@endsection
