@extends('layouts.app')
@section('content')
<div class="container">
    
    <div class="card text-center m-4">
        <div class="card-header">
            
            <h5 class="card-title text-capitalize m-0">{{ $post->title }}</h5>
        </div>
        <div class="card-body">
            <img class="mb-3 rounded" width="50%" src="{{$post->image}}" alt="" srcset="">
            <p class="card-text">{{ $post->content }}</p>
           
        </div>
        <div class="card-footer text-muted">
            {{ $post->created_at }}
        </div>
    </div>
    
</div>
@endsection
