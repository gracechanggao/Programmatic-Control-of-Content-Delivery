<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arti extends Model
{
    //
   public function setTitleAttribute($value)
  {
    $this->attributes['title'] = $value;
    if (! $this->exists) {
      $this->attributes['slug'] = str_slug($value);
    }
  }
}
