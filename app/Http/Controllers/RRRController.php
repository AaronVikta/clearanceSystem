<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\AlumniPayment;
use App\ConvocationPayment;

class RRRController extends Controller
{
    //redirects unauthenticated users
    // public function __construct(){
    //   $this->middleware('auth');
    // }
    public function getMyAlumniRRR($id){
      $user= User::findOrFail($id);
      $reg_no=$user->reg_no;
      $rrr= AlumniPayment::where('reg_no', '=', $reg_no)->get();
      $rrr =$rrr[0];
      return $rrr;
    }
    public function getMyConvocRRR($id){
      $user= User::findOrFail($id);
      $reg_no=$user->reg_no;
      $rrr= ConvocationPayment::where('reg_no', '=', $reg_no)->get();
      $crrr =$rrr[0];
      return $crrr;
    }
    public function generateAlumniRRR(Request $request, $id){
      // get the random string
      $user= User::findOrFail($id);
      // dd($request->rrr);
      $name=$user->name;
      $reg_no=$user->reg_no;
      $remita = new AlumniPayment;
      $remita->fullname = $name;
      $remita->reg_no= $reg_no;
      $remita->RRR= $request->rrr;
      $remita->save();
      return $remita;

      // store the string for the user_column alumniRRR
    }
    public function generateConvocationRRR(Request $request, $id){
      // get the random string
      $user= User::findOrFail($id);
      // dd($request->rrr);
      $name=$user->name;
      $reg_no=$user->reg_no;
      $remita = new ConvocationPayment;
      $remita->fullname = $name;
      $remita->reg_no= $reg_no;
      $remita->RRR= $request->crrr;
      $remita->save();
      return $remita;

      // store the string for the user_column alumniRRR
    }

    public function payAlumniFee(){
      // check paymentTable to see if payment with the string above has been made
      // if yes mark user as alumnipaid true and redirect with success msg
      // else mark user as alumnipaid false and redirect with error msg
    }


    public function payConvocationRRR(){
      // check paymentTable to see if payment with the string above has been made
      // if yes mark user as convocationpaid true and redirect with success
      // else mark user as convocationpaid as false and redirect with error
    }
}
