<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estilos extends Model
{
   protected $table = 'estilos';

   protected $fillable = ['idWine', 'style'];
}
