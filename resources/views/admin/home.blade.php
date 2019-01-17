@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-bodered">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Posts</th>
                                <th>Actions</th>
                                
                            </tr>
                            @foreach ($users as $user)
                            <tr>
                                
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td><a href="fetchposts/{{ $user->id }}" class="btn btn-warning btn-sm">Posts</a></td>
                                <td><a href="delete/{{ $user->id }}" class="btn btn-sm btn-danger">Delete</a> <a href="edit/{{ $user->id }}" class="btn btn-sm btn-primary">Edit</a></td>
                                
                            </tr>  
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
