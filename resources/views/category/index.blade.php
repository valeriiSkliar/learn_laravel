@extends('layouts.main')
@section('content')
<div class="container mt-5">
        <div class="row">
            <a
                class="mb-3 btn btn-success"
                href="{{ route('post.create') }}">Create new post
            </a>

    </div>
    <div class="row mb-3">
        @foreach($categories as $category)
            <a
                href="{{ route('categories/'.$category->id) }}"
                class="col-2">{{ $category->title }}</a>
        @endforeach
    </div>
    <div class="row">
        @foreach($posts as $post)
            <div
                class="mb-3 col-6"
                href="{{ route('post.show', $post->id) }}">
                <div class="card" style="width: 18rem;">
                    <img src="{{$post->image}}" alt="image" style="width: 100px">
                    <div class="card-body">
                        <h5 class="card-title">{{$post->title}}</h5>
                        <p class="card-text">
{{--                            {{$post->content}}--}}
                            <strong>Likes: {{$post->likes}}</strong>
                            <br>
                            <strong>Category:  {{$post->category_id}}</strong>
                        </p>
                        <a
                            class="btn btn-primary"
                            href="{{ route('post.show', $post->id) }}">more..</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
