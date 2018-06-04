<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    //
  //  protected $table = 'Phones';
    public $fillable = ['model', 'year', 'price'];
    public $timestamps = false;
}
