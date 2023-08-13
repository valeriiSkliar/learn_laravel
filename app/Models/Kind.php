<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static get()
 */
class Kind extends Model
{
    use HasFactory;

    public function pets()
    {
        return $this->hasMany(Pet::class);
    }
}
