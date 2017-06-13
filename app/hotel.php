<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{
   public function comments(){
   	return $this->morphMany('App\comment','commentable');
   }
}
