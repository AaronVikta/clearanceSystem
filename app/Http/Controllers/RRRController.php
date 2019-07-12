<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RRRController extends Controller
{
    //redirects unauthenticated users
    public __construct(){
      $this->middleware('auth');
    }

    public function generateAlumniRRR(){
      // get the random string

      // store the string for the user_column alumniRRR
    }

    public function payAlumniFee(){
      // check paymentTable to see if payment with the string above has been made
      // if yes mark user as alumnipaid true and redirect with success msg
      // else mark user as alumnipaid false and redirect with error msg
    }

    public function generateConvocationRRR(){
      // generate random string for Convocation

      // store the string in the user_column convocationRRR
    }

    public function payConvocationRRR(){
      // check paymentTable to see if payment with the string above has been made
      // if yes mark user as convocationpaid true and redirect with success
      // else mark user as convocationpaid as false and redirect with error
    }
}
