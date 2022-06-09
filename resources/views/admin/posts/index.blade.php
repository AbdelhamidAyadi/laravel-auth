@extends('layouts.app')
@section('content')
<div class="container">

    @if (session('message'))
    <div class="alert alert-success m-4" role="alert">

        {{ session('message') }}

    </div>
    @endif

    @forelse ($posts as $post)
    <div class="card text-center m-4">
        <div class="card-header">

            <h5 class="card-title text-capitalize m-0">{{ $post->title }}</h5>
        </div>
        <div class="card-body">
            <img class="mb-3 rounded" width="50%" src="{{$post->image}}" alt="" srcset="">
            <p class="card-text">{{ $post->content }}</p>
            <a href="{{ route('admin.posts.show', $post->id ) }}" class="btn btn-primary">Details</a>
            <form class="d-inline" action="{{ route('admin.posts.destroy', $post->id ) }}" method="POST">
                @method('Delete')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
        <div class="card-footer text-muted">
            {{ $post->created_at }}
        </div>
    </div>
    @empty
    <h2>There's no Posts.Create one!</h2>
    @endforelse
</div>
@endsection
