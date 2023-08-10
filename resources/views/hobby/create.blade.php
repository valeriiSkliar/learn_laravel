@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <form action="{{ route('hobby.store' )}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input
                        name="title"
                        type="text"
                        class="form-control"
                        id="title" >
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Description</label>
                    <textarea
                        name="description"
                        type="text"
                        class="form-control"
                        id="content" ></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input
                        name="image"
                        type="text"
                        class="form-control"
                        id="image" >
                </div>
                <div class="mb-3">
                    <label for="day_count" class="form-label">Day_count</label>
                    <input
                        name="day_count"
                        type="number"
                        class="form-control"
                        id="day_count" >
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">Category</label>
                    <select
                        name="hobby_category_id"
                        type="text"
                        class="form-control"
                        id="hobby_category_id" >
                        @foreach($categories as $category)
                            <option
                                {{old('hobby_category_id') == $category->id ? 'selected' : ''}}
                                value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                    @error('hobby_category_id')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="hobby_tags" class="form-label">Tags</label>
                    <select
                        name="hobby_tags[]"
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
    </div>
</div>
@endsection
