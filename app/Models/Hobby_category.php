<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find()
 */
class Hobby_category extends Model
{
    use HasFactory;

    public function hobbies()
    {
        return $this->hasMany(Hobby::class);
    }
}
