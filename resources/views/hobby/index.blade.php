@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-2">
                <a
                    class="btn btn-success"
                    href="{{ route('hobby.create') }}">Add hobby</a>
            </div>
        </div>
        <div class="row">
            @foreach($hobbies as $hobby)
                <div class="col-3 m-3 border-1 border border-black">
                    <a href="{{ route('hobby.show', $hobby->id) }}">
                        <div>{{$hobby->title}}</div>
                        <img src="{{$hobby->image}}" alt="" style="width: 100px">
                        <p>{{$hobby->day_count}}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
