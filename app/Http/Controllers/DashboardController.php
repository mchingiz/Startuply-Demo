<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Subscription;
use Auth;

class DashboardController extends Controller
{
   protected $user;

   public function __construct(){
      $this->user = Auth::user();
   }

   public function index(){
      return view('dashboard.index');
   }

   public function subsList(){
      $subscribers = $this->user->subscriptions->all();

      return view('dashboard.subsList',compact('subscribers'));
   }
}
