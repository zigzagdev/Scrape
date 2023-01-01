<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class JobCategory extends Model
{
    use HasFactory, Searchable;

    protected $touches = ['job'];

    public function searchableAs()
    {
        return 'categories_index';
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();

        $array = $this->transform($array);

        $array['job_name'] = $this->job->category;

        return $array;
    }

    public function author()
    {
        return $this->belongsTo('App\Author');
    }
}
