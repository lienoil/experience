<?php

namespace Page\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Pluma\Models\Model;

class Page extends Model
{
    use SoftDeletes;

    protected $with = [];

    protected $searchables = ['name', 'code', 'description', 'schedule', 'created_at', 'updated_at'];

    // public function getPrettyScheduleAttribute()
    // {
    //     return date(settings('date_format', 'F d, Y'), strtotime($this->schedule) );
    //     protected $appends = ['schedule'];
    // }
}
