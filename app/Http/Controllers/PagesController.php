<!-- This controller is for our static web pages -->

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
  public function getIndex(){
    return view('welcome');  //looks for welcome.blade.php view to render for root route
  }

  public function getAbout(){
    $companyName = "Will's Company"; //creating a variable that can be passed to its views
    $users = array("John", "Vin", "Tom", "Jason");

    return view('pages.about')
      ->with("companyName", $companyName)  //giving this variable name a view name called 'companyName'
      ->with("users", $users);
  }

  public function getContact(){
    return view('pages.contact'); //uses dots to define the path instead of /
  }
}
