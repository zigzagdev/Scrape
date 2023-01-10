<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Scout\Searchable;

class Author extends Model
{
    use HasFactory, Searchable, Notifiable;

    public function Author()
    {
        $this->hasMany('App\Models\Book');
    }

    public function searchableAs()
    {
        return 'author_index';
    }
}
