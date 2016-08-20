<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
  public function getAbout(){
    return view('pages.about');
  }
}
