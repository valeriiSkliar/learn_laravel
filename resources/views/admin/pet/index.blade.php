@extends('layouts.admin')
@section('content')
    <div id="pet_list" class="row">
        @foreach($pets as $pet)
            <a
                class="col"
                href="{{ route('admin.pet.edit', $pet->id) }}">
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
    <div class="my-4 pagination d-flex justify-content-center">
        {{ $pets->withQueryString()->links() }}
    </div>
@endsection
