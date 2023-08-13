<?php

namespace App\Http\Controllers\Pet;

use App\Http\Requests\Pet\StorePetRequest;
use App\Models\Pet;

class StorePetController extends BasePetController
{
    public function __invoke(StorePetRequest $request)
    {
        $data = $request->validated();
        $this->petService->store($data);
        return redirect()->route('pet.index');
    }

}
