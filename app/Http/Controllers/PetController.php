<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index()
    {
        $pets = Pet::all();
        return view('pet.index', compact('pets'));
    }

    public function create()
    {
        return view('pet.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required|string|max:255', // Name is required, must be a string and cannot exceed 255 characters
            'image' => 'string', // Name is required, must be a string and cannot exceed 255 characters
            'species' => 'required|string|max:255', // Species is required, must be a string and cannot exceed 255 characters
            'age' => 'nullable|integer', // Age is optional, but if provided must be an integer
            'color' => 'nullable|string|max:255', // Color is optional, but if provided must be a string and cannot exceed 255 characters
            'breed' => 'nullable|string|max:255', // Breed is optional, but if provided must be a string and cannot exceed 255 characters
            'birth_date' => 'nullable|date', // Birth date is optional, but if provided must be a date
            'description' => 'nullable|string', // Description is optional, but if provided must be a string
            'is_neutered' => 'boolean', // Is neutered is required and must be a boolean
            'is_vaccinated' => 'boolean', // Is vaccinated is required and must be a boolean
        ]);
        Pet::create($data);
        return redirect()->route('pet.index');
    }

    public function show(Pet $pet)
    {
        return view('pet.show', compact('pet'));
    }

    public function edit(Pet $pet)
    {
        return view('pet.edit', compact('pet'));
    }

    public function update(Pet $pet)
    {
        $data = request()->validate([
            'name' => 'required|string|max:255',
            'image' => 'string',
            'species' => 'required|string|max:255',
            'age' => 'nullable|integer',
            'color' => 'nullable|string|max:255',
            'breed' => 'nullable|string|max:255',
            'birth_date' => 'nullable|date',
            'description' => 'nullable|string',
            'is_neutered' => 'boolean',
            'is_vaccinated' => 'boolean',
        ]);
        $pet->update($data);
        return redirect()->route('pet.show', $pet->id);
    }

    public function destroy(Pet $pet)
    {
        $pet->delete();
        return redirect()->route('pet.index');
    }
}
