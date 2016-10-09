<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
   protected $fillable = ['user_id','heading','paragraph','button_1_name','button_1_address','button_2_name,','button_2_address'];
}
