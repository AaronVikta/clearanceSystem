<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class PagesController extends Controller
{
    //handle the get request for library
    public function library(){
      // redirect to the library clearance page
      return view('libraryclearance');
    }

    // handle the get request for bursary
    public function bursary(){
      // redirect to the bursary clearance page
      return view('bursaryclearance');
    }
    // handle the get request for alumni
    public function alumni(){
      // redirect to the alumni clearance page
      return view('alumniclearance');
    }
    // handle the get request for security
    public function security(){
      // redirect to the security clearance page
      return view('securityclearance');
    }
    // handle the get request for student affairs
    public function studentAffairs(){
      //redirect to the studentAffairs clearance page
      return view('studentaffairsclearance');
    }
    // handle the get request for faculty url
    public function faculty(){
      // redirect to the faculty clearance page
      return view('facultyclearance');
    }

}
