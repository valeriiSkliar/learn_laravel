@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="back_button btn btn-primary text-bg-light mb-3">
            <a href="{{ route('post.index') }}">Back</a>
        </div>
        <div class="card" style="width: 18rem">
            <img src="{{$post->image}}" alt="" style="object-fit: cover">
            <div class="card-body">
                <h5 class="title">
                    {{$post->title}}
                </h5>
                <p>Content: {{$post->content}}</p>
                <p>Category: {{$post->category_id}}</p>
                <p>
                    <strong>Likes: {{$post->likes}}</strong>
                </p>
                <p class="mb-3">Tags:
                    @foreach($post->tags as $tag)
                        <strong> {{$tag->title}}</strong>
                    @endforeach

                </p>

            </div>
            <div class="edit-link row mb-3 justify-content-center">
                <div class="col-5">
                    <a
                        class="btn-warning btn mb-3"
                        href="{{ route('post.edit', $post->id) }}">Edit post
                    </a>
                </div>
                <form
                    class="col-5"
                    style="width: fit-content; height: fit-content"
                    action="{{ route('post.delete', $post->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <input
                        class="btn btn-danger"
                        type="submit" value="Delete">
                </form>

            </div>
        </div>
    </div>
@endsection
