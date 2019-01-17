@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Creating Post</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <form method="post" action="{{ url('create') }}">
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                    <div class="form-group row">
                            <label for="user_id" class="col-md-4 col-form-label text-md-right">{{ __('User ID') }}</label>

                            <div class="col-md-6">
                                <input id="user_id" type="text" class="form-control" name="user_id" value="{{ Auth::user()->id }}" readonly required autofocus>

                            </div>
                        </div>
                    
                  <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Post Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="" required autofocus>

                            </div>
                        </div>
                    
                    <div class="form-group row">
                            <label for="desription" class="col-md-4 col-form-label text-md-right">{{ __('Post Descrption') }}</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control" name="description" value="" required autofocus></textarea>

                            </div>
                        </div>
                    
                   <div class="form-group row mb-0">
                            <div class="col-md-1 offset-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                    
            </div>
        </div>
    </div>
</div>
@endsection
