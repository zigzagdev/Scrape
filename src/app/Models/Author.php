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
        return 'author_index';
    }

    public function toSearchableArray()
    {

        $array = $this->toArray();
        $books = $this->book;
        for ($i=0;$i<$books->count();$i++)
        {
            $array['book_name'][$i] = $books[$i]['name'];
        }

        return $array;
    }

    public function book()
    {
        return $this->hasMany(Book::class);
    }
}
