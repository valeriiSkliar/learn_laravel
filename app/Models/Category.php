<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find(int $int)
 * @method static get()
 */
class Category extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id', 'id');
    }
}
