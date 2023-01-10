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
    public function book()
    {
        return $this->belongsTo('App\Models\Author');
    }

    public function searchableAs()
    {
        return 'book_index';
    }

}
