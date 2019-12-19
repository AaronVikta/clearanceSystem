@extends('layouts.app')
@section('content')
  <div class="container">
      <h3 class="text-center">Alumni Receipt</h3>
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <?php
        @$reg_no =$details['reg_no'];
        @$student_email= $details['email'];
        @$fullname =$details['fullname'];
        @$amount =$details['amount'];
        @$rrr= $details['rrr'];
        ?>
        <div class="">
          <div class="col-md-12 text-center mb-4">University of Nigeria Nsukka</div>
          <div class="col-md-12">
            <span class="float-left">Student: <?=$fullname;?></span>
            <span class="float-right">Email: <?=$student_email;?></span> <br>
          </div>
          <div class="col-md-12">
            <span class="float-left">Type: Alumni</span>
            <span class="float-right">Amount: <?=$amount;?></span><br>
          </div>
          <div class="col-md-12">
            <span class="float-left">RRR: <?=$rrr;?> </span> <br>
            <br>
          </div>
        </div>
        <a href="" @click.prevent="printme" target="_blank" >print</a>
      </div>
    </div>
  </div>
@endsection
