@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row  justify-content-center">
            @foreach ($posts as $post)

            <div class="col-md-3 my-4">
                <div class="card h-100 p-2 rounded shadow">
                    <img class="card-img-top" src="{{$post->photo}}" alt="Card image cap">
                    <div class="card-body text-center">
                      <p class="card-text">{{substr($post->description,0, 70).'...'}}</p>
                      <a href="{{route('admin.posts.show', $post)}}" class="btn btn-primary">Details</a>
                    </div>
                  </div>
            </div>

            @endforeach
        </div>
    </div>



@endsection
