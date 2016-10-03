<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
   protected $user;

   public function __construct(){
      $this->middleware('auth');
      $this->user = Auth::user();
      view()->share('user', $this->user);
   }

   public function index(){
      return view('index');
   }
}
