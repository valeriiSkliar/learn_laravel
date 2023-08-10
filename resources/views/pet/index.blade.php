@extends('layouts.main')
@section('content')
    <div class="container ">
        <div class="row mb-3">
            <div class="col-4">
                <a
                    class="btn btn-success"
                    href="{{ route('pet.create') }}">Add pet</a>
            </div>
        </div>
        <div class="row">
            @foreach($pets as $pet)
                <a
                    class="col"
                    href="{{ route('pet.show', $pet->id) }}">
                    <div class="card" style="width: 18rem;">
                        <img src="{{$pet->image}}" class="card-img-top" alt="image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $pet['name'] }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $pet['species'] }}</h6>
                            <p class="card-text">
                                <strong>Age:</strong> {{ $pet['age'] }}<br>
                                <strong>Breed:</strong> {{ $pet['breed'] }}<br>
                            </p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
