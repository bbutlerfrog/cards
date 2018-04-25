<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clubs extends Model
{
  /**
   * The variables that are mass assignable
   *
   * @var array
   */
  protected $fillable = ['isocode', 'selected', 'name'];
  
}
