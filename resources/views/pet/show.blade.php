@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="card" style="width: 18rem;">
            <img src="{{$pet->image}}" class="card-img-top" alt="image">
            <div class="card-body">
                <h5 class="card-title">{{ $pet['name'] }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $pet['species'] }}</h6>
                <p class="card-text">
                    <strong>Age:</strong> {{ $pet['age'] }}<br>
                    <strong>Color:</strong> {{ $pet['color'] }}<br>
                    <strong>Breed:</strong> {{ $pet['breed'] }}<br>
                    <strong>Birth Date:</strong> {{ $pet['birth_date'] }}<br>
                    <strong>Description:</strong> {{ $pet['description'] }}<br>
                    <strong>Neutered:</strong> {{ $pet['is_neutered'] ? 'Yes' : 'No' }}<br>
                    <strong>Vaccinated:</strong> {{ $pet['is_vaccinated'] ? 'Yes' : 'No' }}
                </p>
            </div>
            <div class="controls g-3 d-flex flex-row justify-content-around px-3">
                    <a
                        class="edit btn btn-warning w-50 h-75"
                        href="{{ route('pet.edit', $pet->id) }}">Edit</a>
                    <form
                        style="width: 100%; height: 100%;"
                        action="{{ route('pet.delete', $pet->id) }}"
                        method="post"
                    >
                        @csrf
                        @method('delete')
                        <input
                            class="delete btn btn-danger w-50 h-75"
                            type="submit"
                            value="Delete"
                        >
                    </form>

            </div>
        </div>

    </div>
@endsection
