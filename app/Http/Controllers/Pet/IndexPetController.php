<?php

namespace App\Http\Controllers\Pet;

use App\Http\Filters\PetFilter;
use App\Http\Requests\Pet\IndexPetFilterRequest;
use App\Models\Pet;

class IndexPetController extends BasePetController
{
    public function __invoke(IndexPetFilterRequest $request)
    {
        $data = $request->validated();
        $searchTerm = $request->input('name');
//        dd($searchTerm);
        if (strlen($searchTerm)) {
            $pets = Pet::where('name', 'like', "%$searchTerm%")->paginate(10);
            return response()->json($pets);
        }

        $filter = app()->make(PetFilter::class, ['queryParams' => array_filter($data)]);

        $pets = Pet::filter($filter)->paginate(8);

        return view('pet.index', compact('pets'));
    }
}
