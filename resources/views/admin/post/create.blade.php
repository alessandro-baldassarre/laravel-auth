@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center py-5">
            <div class="col-md-6">
                <form action="{{route('admin.posts.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Insert title" name="title">
                        @error('title')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" placeholder="Insert description" name="description">
                        @error('description')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="photo">Image</label>
                        <input type="text" class="form-control" id="photo" placeholder="Insert image URL" name="photo">
                        @error('photo')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="publish">Publish</label>
                        <input type="number" class="form-control" id="publish" placeholder="Insert image URL" name="publish">
                        @error('publish')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="counter">Counter</label>
                        <input type="number" class="form-control" id="counter" placeholder="Insert image URL" name="counter">
                        @error('counter')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Add new Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
