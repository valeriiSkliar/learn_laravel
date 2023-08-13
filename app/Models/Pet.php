<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static create()
 * @method static find(int $int)
 * @method static paginate()
 * @method static filter(mixed $filter)
 * @method static where(string $string, string $string1, string $string2)
 */
class Pet extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Filterable;

    protected $table = 'pets';
    protected $guarded = [];

    public function kind()
    {
        return $this->belongsTo(Kind::class);
    }
}
