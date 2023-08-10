@extends('layouts.main')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-4">
                <a
                    class="mb-3 btn btn-success"
                    href="{{ route('post.create') }}">Create new post
                </a>
            </div>

        </div>
        <div class="row mb-3">
            @if(count($categories) <= 1)
                <div class="col-4">
                    <a
                        class="mb-3 btn btn-dark"
                        href="{{ route('post.index') }}">Back to all posts
                    </a>

                </div>
            @endif

            @foreach($categories as $category)
                <div class="col-1">
                    <a
                        href="{{ route('category.index', $category->id) }}"
                        class="btn btn-info mx-3">{{ $category->title }}
                    </a>
                </div>

            @endforeach
        </div>
        <div class="row">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Likes</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
{{--                    <a href="{{ route('post.show', $post->id) }}">--}}
                        <tr class="clickable-row" data-url="{{ route('post.show', $post->id) }}">
                            <th scope="row">{{ $post->id }}</th>
                            <td><img src="{{ $post->image }}" alt="image"
                                     style="width: 100px; height: 100px; object-fit: cover"></td>
                            <td>{{ $post->title }}</td>
                            <td>
                                @foreach($categories as $category)
                                    {{ $category->id === $post->category_id ? $category->title : '' }}
                                @endforeach
                            </td>
                            <td><strong>{{ $post->likes }}</strong></td>
                        </tr>
{{--                    </a>--}}
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="my-4 pagination d-flex justify-content-center">
            {{ $posts->withQueryString()->links() }}
        </div>
    </div>
@endsection
