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
                <div class="card-header">{{ __('Users') }}</div>

                <div class="card-body">

                    @if(count($users) > 0)
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <th scope="row">
                                    {{$user->name}}
                                </th>
                                <td>
                                    {{$user->email}}
                                </td>
                                <td>
                                    <form method="POST" action="{{ route('admin.user.destroy', ['id' => $user->id]) }}">
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
                        {{ $users->withQueryString()->links() }}
                    </div>
                    @else
                    <div class="text-center">
                        No users (excluding admins) exist.
                    </div>
                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
