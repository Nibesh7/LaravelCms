@extends('layouts.app')

@section('content')

<div class="card card-default">
    <div class="card-header">
        Create Posts
    </div>
    <div class="card-body">
        <form action="{{route('posts.store')}}" method="POST" >
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" class="form-control" name="title">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="5" rows="5" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="published at">Published At</label>
                <input type="text" id="published at" class="form-control" name="published at">
            </div>

            <div class="form-group">
                <label for="image">image</label>
                <input type="file" id="image" class="form-control" name="image">
            </div>

            <div class="form-group">
                <button type="Submit" class="btn btn-success">
                    Create Posts
                </button>
            </div>
        </form>
    </div>
</div>

@endsection