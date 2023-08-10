@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="back_button btn btn-primary text-bg-light mb-3">
            <a href="{{ route('hobby.index') }}">Back</a>
        </div>
        <div>
            <div>Post_id: <strong>{{$hobby->id}}</strong></div>
            <div>Post title: <strong>{{$hobby->title}}</strong></div>
            <p>Description: <br>{{$hobby->description}}</p>
            <img
                src="{{$hobby->image}}"
                alt="image"
                style="width: 100px">
            <p>Day count: <strong>{{$hobby->day_count}}</strong></p>
            <p>Category: <strong>{{$hobby->hobby_category->title}}</strong></p>
            <p>Category:
                @foreach($hobby->hobby_tags as $tag)
                    <strong>{{$tag->title}}</strong>

                @endforeach
            </p>
            <div class="edit-link mb-3 d-flex flex-row">
                <a
                    class="btn-warning btn mx-3"
                    href="{{ route('hobby.edit', $hobby->id) }}">Edit post
                </a>
                <form action="{{ route('hobby.delete', $hobby->id) }}" method="post">
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
