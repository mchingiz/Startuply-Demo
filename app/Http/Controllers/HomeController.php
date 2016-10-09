<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use Auth;

class HomeController extends Controller
{
   protected $user;

   public function __construct(){
      $this->user = Auth::user();
      view()->share('user', $this->user);
   }

   public function index(){
      return view('index');
   }

   public function test(){
      return $this->user->tabFeature[0]->image;
   }
}
