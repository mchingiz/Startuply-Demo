<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Header;
use App\Package;
use App\ListFeature;
use App\TabFeature;
use App\Project;
use App\TeamMember;
use App\Client;
use App\Menu;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
   /*
   |--------------------------------------------------------------------------
   | Registration & Login Controller
   |--------------------------------------------------------------------------
   |
   | This controller handles the registration of new users, as well as the
   | authentication of existing users. By default, this controller uses
   | a simple trait to add these behaviors. Why don't you explore it?
   |
   */

   use AuthenticatesAndRegistersUsers, ThrottlesLogins;

   /**
   * Where to redirect users after login / registration.
   *
   * @var string
   */
   protected $redirectTo = '/';

   /**
   * Create a new authentication controller instance.
   *
   * @return void
   */
   public function __construct(){
     $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
   }

   /**
   * Get a validator for an incoming registration request.
   *
   * @param  array  $data
   * @return \Illuminate\Contracts\Validation\Validator
   */
   protected function validator(array $data){
      return Validator::make($data, [
         'name' => 'required|max:255',
         'email' => 'required|email|max:255|unique:users',
         'password' => 'required|min:6|confirmed',
      ]);
   }

   /**
   * Create a new user instance after a valid registration.
   *
   * @param  array  $data
   * @return User
   */
   protected function create(array $data){

      $lastUser = User::orderBy('id', 'desc')->first()->id;
      Header::create([
         'user_id' => $lastUser+1,
         'heading' => 'This is your custom heading',
         'paragraph' => "You can edit majority of this website by <a href=''>this link</a>",
         'button_1_name' => "Button name",
         'button_1_address' => "href://www.facebook.com",
         'button_2_name' => "Button name",
         'button_2_address' => "href://www.facebook.com"
      ]);


      // ListFeature::create([
      //    'user_id' => $lastUser+1,
      //    'icon' => 'This is your custom heading',
      //    'name' => "You can edit majority of this website by <a href=''>this link</a>",
      //    'desc' => "Button name",
      // ]);


      Package::create([
         'user_id' => $lastUser+1,
         'name' => 'Individual',
         'price' => '20',
         'feature_1' => "Free Domain",
         'feature_2' => "Unlimited website",
         'feature_3' => "Unlimited bandwith",
         'feature_4' => "Unlimited disk space",
      ]);
      Package::create([
         'user_id' => $lastUser+1,
         'name' => 'Enterprise',
         'price' => '90',
         'feature_1' => "Free Domain",
         'feature_2' => "Neyivar unlimited website",
         'feature_3' => "Unlimited bandwith",
         'feature_4' => "Unlimited disk space",
      ]);
      Package::create([
         'user_id' => $lastUser+1,
         'name' => 'Studio',
         'price' => '40',
         'feature_1' => "Lap free Domain",
         'feature_2' => "Unlimited website",
         'feature_3' => "Unlimited bandwith",
         'feature_4' => "Unlimited disk space",
      ]);


      Client::create([
         'user_id' => $lastUser+1,
         'quote' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non bibendum metus. Aenean vel rutrum velit.',
         'fullname' => 'AMY WARNER',
         'position' => 'Investor Hunter',
         'company' => 'Pear Inc.',
         'image' => 'img/client1.jpg',
      ]);
      Client::create([
         'user_id' => $lastUser+1,
         'quote' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non bibendum metus. Aenean vel rutrum velit.',
         'fullname' => 'Peter Moosome',
         'position' => 'Marketing VP',
         'company' => 'Footbook Inc.',
         'image' => 'img/client2.jpg',
      ]);
      Client::create([
         'user_id' => $lastUser+1,
         'quote' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non bibendum metus. Aenean vel rutrum velit.',
         'fullname' => 'John Doesome',
         'position' => 'Accountant',
         'company' => 'Vell Inc.',
         'image' => 'img/client1.jpg',
      ]);

      return User::create([
         'name' => $data['name'],
         'email' => $data['email'],
         'password' => bcrypt($data['password']),
      ]);

   }
}
