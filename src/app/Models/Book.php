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

    public function toSearchableArray()
    {

        $array = $this->toArray();

        $array['author_name'] = $this->author->name;
        $array['age'] = $this->author->age;

        return $array;
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

}
