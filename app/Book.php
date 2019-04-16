<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $primaryKey = 'books_id';
    protected $table = 'books';

    public $timestamps = false;
}
