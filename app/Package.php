<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
   protected $fillable = ['user_id','name','price','feature_1','feature_2','feature_3','feature_4'];
}
