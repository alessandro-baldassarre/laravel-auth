@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row p-5">
            <div class="col-12 text-center p-5">
                <h1>{{$post->title}}</h1>
                <p>{{$post->description}}</p>
                <div class="d-flex justify-content-center">
                    <a href="{{route('admin.posts.edit', $post)}}" class="btn btn-warning mr-2">Edit</a>

                    <form id="myForm" action="{{route('admin.posts.destroy', $post)}}" method="POST" post-title="{{ucfirst($post->title)}}">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">
                                Delete
                            </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer-script')
    <script>
     document.getElementById("myForm").addEventListener("submit", function(e) {

        e.preventDefault();

        userConfirmation = window.confirm(`Sei sicuro di voler eliminare ${this.getAttribute('post-title')}?` );
                if (userConfirmation) {
                    this.submit();
                }

    });
    </script>
@endsection
