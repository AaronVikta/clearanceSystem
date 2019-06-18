<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Auth;

class PagesController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    //handle the get clearance status route
    public function clearanceStatus(){
      // redirect to the clearance status page
      return view('clearancestatus');
    }
}
