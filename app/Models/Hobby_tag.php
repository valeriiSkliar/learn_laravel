<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find(int $int)
 */
class Hobby_tag extends Model
{
    use HasFactory;

    public function hobbies()
    {
        return $this->belongsToMany(Hobby::class);
    }
}
