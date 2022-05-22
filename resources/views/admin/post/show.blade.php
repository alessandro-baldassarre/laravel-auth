@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row p-5">
            <div class="col-12 text-center p-5">
                <h1>{{$post->title}}</h1>
                <p>{{$post->description}}</p>
                <a href="{{route('admin.posts.edit', $post)}}" class="btn btn-warning">Edit</a>
                <a href="{{route('admin.posts.destroy', $post)}}" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>

@endsection
