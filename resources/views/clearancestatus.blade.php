@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <h2 class="text-center mb-5">Clearance::  DashBoard</h2>
  <hr>
  <div class="row mt-3">
    <div class="col-md-12">
      <h3 class="text-center mt-4 mb-4">Your Current Status</h3>
      <p class="pl-4 pr-4 text-center">Dear {{Auth::user()->name}},
        your current clearance Status is as shown below.
      </p>
    </div>

  <div class="container">
    <div class="row">
      <div class="col-md-1">
        <span class="text-bold">Alumni</span>
      </div>
      <div class="col-md-11">
        <div class="progress mb-3">
      <span class="progress-bar" role="progressbar" style="width:100%; background:green"
       aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></span>
    </div>
      </div>
      <div class="col-md-1">
        <span class="text-bold">Library</span>
      </div>
      <div class="col-md-11">
        <div class="progress mb-3">
      <span class="progress-bar" role="progressbar" style="width:100%; background:#ef0b0b"
       aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></span>
    </div>
      </div>
      <div class="col-md-1">
        <span class="text-bold">Student Affairs</span>
      </div>
      <div class="col-md-11">
        <div class="progress mb-3">
      <span class="progress-bar" role="progressbar" style="width:100%; background:#ef0b0b"
       aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></span>
    </div>
      </div>
      <div class="col-md-1">
        <span class="text-bold">Faculty</span>
      </div>
      <div class="col-md-11">
        <div class="progress mb-3">
      <span class="progress-bar" role="progressbar" style="width:100%; background:green"
       aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></span>
    </div>
      </div>
      <div class="col-md-1">
        <span class="text-bold">Security</span>
      </div>
      <div class="col-md-11">
        <div class="progress mb-3">
      <span class="progress-bar" role="progressbar" style="width:100%; background:green"
       aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></span>
    </div>
      </div>
      <div class="col-md-1">
        <span class="text-bold">Bursary</span>
      </div>
      <div class="col-md-11">
        <div class="progress mb-3">
      <span class="progress-bar" role="progressbar" style="width:100%; background:#ef0b0b"
       aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></span>
    </div>
      </div>
    </div>
  </div>
  <div class="mt-5 col-md-12">
    <h3 class="text-danger text-center">Important Notice</h3>
    <p class="pl-4 pr-4 text-center">The colour of the bar indicates whether you have been cleared or not.
    </p>
  </div>
  </div>
</div>
@endsection
