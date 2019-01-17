@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Posts</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>TITLE</th> 
                                <th>DESCRIPTION</th>
                            </tr>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->user_id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->description }}</td>
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
