@extends('layouts.app')
@section('content')
  <div class="container">
      <h3 class="text-center">Convocation Receipt</h3>
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <?php
        @$reg_no =$details['reg_no'];
        @$student_email= $details['email'];
        @$fullname =$details['fullname'];
        @$amount =$details['amount'];
        ?>
        <div class="">
          <div class="col-md-12">University of Nigeria Nsukka</div>
          <div class="col-md-12">
            <span class="float-left">Student: <?=$fullname;?></span>
            <span class="float-right">Email: <?=$student_email;?></span>
          </div>
          <div class="col-md-12">
            <span class="float-left">Type: Convocation</span>
            <span class="float-right">Amount: <?=$amount;?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
