<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Scout\Searchable;

class Author extends Model
{
    use HasFactory, Searchable, Notifiable;

    public function searchableAs()
    {
        return 'authors_index';
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();

        $books = $this->books;

        for($i = 0; $i < $books->count(); $i++)
        {

            $array["book_names"][$i] = $books[$i]['name'];

        }

        return $array;
    }

    public function Author()
    {
        $this->hasMany('App\Book');
    }
}
