<?php

namespace Roadtrip\Models;

use Carbon\Carbon;
use Category\Support\Traits\BelongsToCategory;
use Experience\Models\Amenity;
use Experience\Models\Experience;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

class Roadtrip extends Experience
{
    use SoftDeletes, BelongsToCategory;

    protected $table = 'experiences';

    protected $with = ['category'];

    public function getCategorynameAttribute()
    {
        return $this->category ? $this->category->name : false;
    }

    protected $appends = ['wishlisted', 'amount', 'rate', 'date', 'categoryname', 'url', 'manager', 'created', 'modified'];

    protected $searchables = ['name', 'feature', 'code', 'reference_number', 'category_id', 'type', 'body', 'created_at', 'updated_at'];

    public function amenities()
    {
        return $this->belongsToMany(Amenity::class, 'amenity_experience', 'experience_id');
    }

    public static function boot()
    {
        parent::boot();

        static::addGlobalScope('type', function (Builder $builder) {
            $builder->where('type', 'roadtrip');
        });
    }

    public function getUrlAttribute()
    {
        return route('roadtrips.show', $this->code);
    }
}
