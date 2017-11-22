<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    protected $table = 'avaliacoes';

   protected $fillable = ['idUser', 'idWine', 'stars', 'comment'];
}