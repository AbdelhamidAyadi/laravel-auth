@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{ route('admin.posts.store')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Post title">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" placeholder="Post content" rows="3"></textarea>
          </div>
        <div class="form-group">
          <label for="image">Image</label>
          <input type="text" class="form-control" id="image" name="image" placeholder="Image Url">
        </div>
        <button type="submit" class="btn btn-success">Create</button>
      </form>
</div>
@endsection
