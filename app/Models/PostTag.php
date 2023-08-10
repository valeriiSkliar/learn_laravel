<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 * @method static firstOrCreate(array $array)
 */
class PostTag extends Model
{
    use HasFactory;
    protected $guarded = false;
}
