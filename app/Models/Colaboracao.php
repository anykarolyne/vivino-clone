<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colaboracao extends Model
{
   protected $table = 'colaboracao';

   protected $fillable = ['idUser, idWine'];
}
