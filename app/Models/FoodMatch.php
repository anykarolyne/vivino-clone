<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodMatch extends Model
{
   protected $table = 'food_matches';

   protected $fillable = ['idWine', 'food'];
}
