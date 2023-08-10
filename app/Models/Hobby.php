<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static find()
 * @method static create(array $data)
 */
class Hobby extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];
    protected $table = 'hobbies';

    public function hobby_category() {
        return $this->belongsTo(Hobby_category::class);
    }

    public function hobby_tags()
    {
        return $this->belongsToMany(Hobby_tag::class);
    }
}
