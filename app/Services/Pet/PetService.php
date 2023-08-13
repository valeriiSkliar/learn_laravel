<?php

namespace App\Services\Pet;

use App\Models\Pet;

class PetService
{
    public function store($data):void
    {
        Pet::create($data);
    }
    public function update($data, $pet):void
    {
        $pet->update($data);
    }
}
