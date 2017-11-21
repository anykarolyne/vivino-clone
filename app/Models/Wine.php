<?php

namespace App\Models;
use App\Traits\ImageUploadTrait;
use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
	use ImageUploadTrait;
	
    protected $table = 'wines';

   protected $fillable = ['of_user', 'producer','name', 'country', 'type', 'style', 'grape', 'photo', 'harmonization'];

  
}
