@extends('layouts.main')
@section('content')
<div class="container">
    <form action="{{ route('post.update', $post->id )}}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input
                name="title"
                value="{{$post->title}}"
                type="text"
                class="form-control"
                id="title" >
            @error('title')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea
                name="content"
                type="text"
                class="form-control"
                id="content" >
                {{$post->content}}
            </textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input
                name="image"
                type="text"
                class="form-control"
                id="image"
                value="{{$post->image}}"
            >
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select
                name="category_id"
                type="text"
                class="form-control"
                id="category" >
                @foreach($categories as $category)
                    <option
                        {{$post->category_id === $category->id ? 'selected' : ''}}
                        value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="tags" class="form-label">Tags</label>
            <select
                name="tags[]"
                class="form-select" multiple aria-label="Multiple select example">
                @foreach($tags as $tag)
                    <option
                        @foreach($post->tags as $post_tag)
                            {{$post_tag->id === $tag->id ? 'selected' : ''}}
                        @endforeach

                        value="{{ $tag->id }}">{{ $tag->title }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
