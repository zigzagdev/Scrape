<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Scout\Searchable;

class Job extends Model
{
    use HasFactory, Searchable, Notifiable;

    public function searchableAs()
    {
        return 'jobs';
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();

        $categories = $this->categories;

        for($i = 0; $i < $categories->count(); $i++)
        {

            $array["job_categories"][$i] = $categories[$i]['name'];

        }


        return $array;

        return $array;
    }
}
