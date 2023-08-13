<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class PetFilter extends AbstractFilter
{
    public const NAME = 'name';
    public const DESCRIPTION = 'description';
    public const AGE = 'age';
    public const COLOR = 'color';
    public const KIND_ID = 'kind_id';



    protected function getCallbacks(): array
    {
        return [
            self::NAME => [$this, 'name'],
            self::DESCRIPTION => [$this, 'description'],
            self::AGE => [$this, 'age'],
            self::COLOR => [$this, 'color'],
            self::KIND_ID => [$this, 'kind_id'],
        ];
    }

    public function name(Builder $builder, $value): void
    {
        $builder->where('name', 'like', "%{$value}%");
    }

    public function description(Builder $builder, $value): void
    {
        $builder->where('description', 'like', "%{$value}%");
    }

    public function age(Builder $builder, $value): void
    {
        $builder->where('age', $value);
    }
    public function color(Builder $builder, $value): void
    {
        $builder->where('color', $value);
    }
    public function kind_id(Builder $builder, $value): void
    {
        $builder->where('kind_id', $value);
    }
}
