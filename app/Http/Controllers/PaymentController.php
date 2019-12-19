<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Paystack;
use App\AlumniPayment;
use App\ConvocationPayment;

class PaymentController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }
    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        // try {
          return Paystack::getAuthorizationUrl()->redirectNow();
        // } catch (\Exception $e) {
        //   return back()->with('Could not be completed');
        // }

    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();
        $data=$paymentDetails['data'];
        $metadata= $data['metadata'];
        $type = $metadata['type'];
        if ($type=="convocation"){
          // update convocation table;
          $reg_no=$metadata['reg_no'];
          $student=$data['customer'];
          $student_email= $student['email'];
          $fullname= $metadata['student_name'];

        // dd($details);
          $records= ConvocationPayment::where('reg_no','=',$reg_no)->get();
          $records=$records[0];
          // dd($records);
          $rrr= $records->RRR;
          $details = array('reg_no' =>$reg_no ,'fullname'=>$fullname,
        'email'=>$student_email, 'amount'=>10000,'rrr'=>$rrr );
          if($records->paid==0){
          $records->paid = 1;
          $records->update();
          // return redirect('convocationreceipt')->with('details',$details);
          return view("convocationreceipt")->with("details",$details);
        }
        else{
            return view("convocationreceipt")->with("details",$details);
        }
        }
        elseif ($type=="alumni") {
          // update alumni table
          $reg_no=$metadata['reg_no'];
          $student=$data['customer'];
          $student_email= $student['email'];
          $fullname= $metadata['student_name'];

        // dd($details);
          $records= AlumniPayment::where('reg_no','=',$reg_no)->get();
          $records=$records[0];
          // dd($records);
          $rrr= $records->RRR;
          // dd($rrr);
          $details = array('reg_no' =>$reg_no ,'fullname'=>$fullname,
        'email'=>$student_email, 'amount'=>650, 'rrr'=>$rrr );
          if($records->paid==0){
          $records->paid = 1;
          $records->update();
          return view("alumnireceipt")->with("details",$details);
        }
        else{
            return view("alumnireceipt")->with("details",$details);
        }
        }
    }
}
