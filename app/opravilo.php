<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class opravilo extends Model
{
    protected $table = "opravilos";

    // An array of the fields we can fill in the comments table
   protected $fillable = ['naziv', 'datumZakljucevanja', 'completed', 'oseba', 'opis'];
}
