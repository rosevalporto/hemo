<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
     public $timestamps = false;
     protected $table = 'estoque'; 
   	 protected $guarded = [''];   
  	 protected $primaryKey = 'doacao';  
  
}
