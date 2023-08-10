@extends('layouts.main')
@section('content')
<div class="container">
    <form action="{{ route('post.store' )}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input
                value="{{old('title')}}"
                name="title"
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
                id="content" >{{old('content')}}</textarea>
            @error('content')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input
                value="{{old('image')}}"
                name="image"
                type="text"
                class="form-control"
                id="image" >
            @error('image')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select
                name="category_id"
                type="text"
                class="form-control"
                id="category_id" >
                @foreach($categories as $category)
                    <option
                        {{old('category_id') == $category->id ? 'selected' : ''}}
                        value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
            @error('category_id')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tags" class="form-label">Tags</label>
            <select
                name="tags[]"
                class="form-select" multiple aria-label="Multiple select example">
                @foreach($tags as $tag)
                <option
{{--                    @foreach(old('category_id') as $post_tag)--}}
{{--                        {{$post_tag->id === $tag->id ? 'selected' : ''}}--}}
{{--                    @endforeach--}}
                    value="{{ $tag->id }}">{{ $tag->title }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
