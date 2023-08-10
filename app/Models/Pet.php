<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static create()
 * @method static find(int $int)
 */

class Pet extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'pets';
    protected $guarded = [];


}
