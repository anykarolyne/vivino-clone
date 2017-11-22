<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uvas extends Model
{
   protected $table = 'uvas';

   protected $fillable = ['idWine', 'grape'];
}
