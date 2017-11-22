<?php

namespace App\Models;
use App\Traits\ImageUploadTrait;
use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
	use ImageUploadTrait;
	
    protected $table = 'wines';

   protected $fillable = ['email_user', 'producer','name', 'price', 'country', 'type', 'style', 'grape', 'photo', 'harmonization'];

  
}
