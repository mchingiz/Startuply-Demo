<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

   protected $fillable = [
      'name', 'email', 'password',
   ];

   protected $hidden = [
      'password', 'remember_token',
   ];

   public function header(){
      return $this->hasOne('App\Header');
   }

   public function clients(){
      return $this->hasMany('App\Client');
   }

   public function listFeatures(){
      return $this->hasMany('App\ListFeature');
   }

   public function menus(){
      return $this->hasMany('App\Menu');
   }

   public function packages(){
      return $this->hasMany('App\Package');
   }

   public function project(){
      return $this->hasOne('App\Project');
   }

   public function subscriptions(){
      return $this->hasMany('App\Subscription');
   }

   public function tabFeature(){
      return $this->hasMany('App\TabFeature');
   }

   public function teamMember(){
      return $this->hasMany('App\TeamMember');
   }
}
