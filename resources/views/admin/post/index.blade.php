@extends('layouts.admin')
@section('content')

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
                                 style="width: 50px; height: 50px; object-fit: cover"></td>
                        <td>{{ $post->title }}</td>
                        <td>
                            @foreach($categories as $category)
                                {{ $category->id === $post->category_id ? $category->title : '' }}
                            @endforeach
                        </td>
                        <td><strong>{{ $post->likes }}</strong></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="my-4 pagination d-flex justify-content-center">
            {{ $posts->withQueryString()->links() }}
        </div>

@endsection


