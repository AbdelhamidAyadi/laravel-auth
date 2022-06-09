@extends('layouts.app')
@section('content')
<div class="container text-center">

    @if (session('message'))
    <div class="alert alert-success m-4" role="alert">

        {{ session('message') }}

    </div>
    @endif
    <a href="{{ route('admin.posts.create')}}" class="btn btn-primary w-25">Create new post</a>
    @forelse ($posts as $post)
    <div class="card text-center m-4">
        
        <div class="card-header">

            <h5 class="card-title text-capitalize m-0">{{ $post->title }}</h5>
        </div>
        <div class="card-body">
            <img class="mb-3 rounded" width="50%" src="{{$post->image}}" alt="" srcset="">
            <p class="card-text">{{ $post->content }}</p>
            <a href="{{ route('admin.posts.show', $post->id ) }}" class="btn btn-primary">Details</a>
            <a href="{{ route('admin.posts.edit', $post->id ) }}"  class="btn btn-warning">Edit</a>
            <form class="delete-form d-inline" action="{{ route('admin.posts.destroy', $post->id ) }}" method="POST">
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
@section('scripts')
<script>
    const deleteForms = document.querySelectorAll('.delete-form');
    deleteForms.forEach(form => {
        form.addEventListener('submit', (e)=>{
            e.preventDefault();
            const confirmation = confirm('Are you sure to delete the post?')
            if (confirmation) {
                e.target.submit();
            }
        })
    });
</script>
@endsection
@endsection
