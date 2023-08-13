@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <form action="{{ route('admin.pet.update', $pet->id)}}" method="post">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input
                        value="{{$pet->name}}"
                        name="name"
                        type="text"
                        class="form-control"
                        id="name" >
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input
                        value="{{$pet->image}}"
                        name="image"
                        type="text"
                        class="form-control"
                        id="image" >
                </div>
                <div class="mb-3">
                    <label for="kinds" class="form-label">Kinds</label>
                    <select
                        name="kind_id"
                        class="form-control"
                        id="kinds"
                    >
                        @foreach($kinds as $kind)
                            <option
                                value="{{ $kind->id }}"
                            >
                                {{ $kind->title }}
                            </option>
                        @endforeach
                    </select>


                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Age</label>
                    <input
                        value="{{$pet->age}}"
                        name="age"
                        type="number"
                        class="form-control"
                        id="age" >
                </div>
                <div class="mb-3">
                    <label for="color" class="form-label">Color</label>
                    <input
                        value="{{$pet->color}}"
                        name="color"
                        type="text"
                        class="form-control"
                        id="color" >
                </div>
                <div class="mb-3">
                    <label for="breed" class="form-label">Breed</label>
                    <input
                        value="{{$pet->breed}}"
                        name="breed"
                        type="text"
                        class="form-control"
                        id="breed" >
                </div>
                <div class="mb-3">
                    <label for="birth_date">Birth Date:</label>
                    <input
                        value="{{$pet->birth_date}}"
                        type="date"
                        id="birth_date"
                        name="birth_date"
                        format="Y-m-d"
                    >
                </div>
                <div class="mb-3">
                    <label for="description">Description</label>
                    <textarea
                        type="text"
                        id="description"
                        name="description"
                    >
                {{$pet->description}}
            </textarea>
                </div>
                <div class="mb-3">
                    <label for="is_neutered">Is Neutered:</label>
                    <input type="checkbox" id="is_neutered" name="is_neutered" value="{{$pet->is_neutered}}" {{ old('is_neutered') ? 'checked' : '' }}>
                </div>
                <div class="mb-3">
                    <label for="is_vaccinated">Is Vaccinated:</label>
                    <input type="checkbox" id="is_vaccinated" name="is_vaccinated" value="{{$pet->is_vaccinated}}" {{ old('is_vaccinated') ? 'checked' : '' }}>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
