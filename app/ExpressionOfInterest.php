<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpressionOfInterest extends Model
{
    public function user(){
      $this->belongsTo('App\User');
    }
}
