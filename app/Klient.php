<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Klient extends Model
{
    //
     public $fillable = ['name', 'surname', 'age'];
    public $timestamps = false;

}
