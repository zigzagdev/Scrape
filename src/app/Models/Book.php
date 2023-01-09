<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Scout\Searchable;

class Book extends Model
{
    use HasFactory, Searchable, Notifiable;

    protected $touches = ['author'];

    public function searchableAs()
    {
        return 'book_index';
    }

    public function book()
    {
        return $this->belongsTo('Author');
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();

        $array = $this->transform($array);

        $array['author_name'] = $this->author->name;

        return $array;
    }

}
