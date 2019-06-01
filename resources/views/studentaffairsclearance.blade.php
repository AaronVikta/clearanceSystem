@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <h2 class="text-center mb-5">Student Affairs Clearance</h2>
  <hr>
  <div class="row mt-3">
    <div class="col-md-6">
      <h3 class="text-center mt-4 mb-4">Your Current Status</h3>
      <p class="pl-4 pr-4">Dear Vincent Michael, you are uncleared at the Student Affairs.
        Please update your status in the right pane to correct this.</p>
    </div>
    <div class="col-md-6">
      <h3 class="text-center mt-4 mb-4">Update Status</h3>
      <p>Please input your Registration Number to update your status</p>
        <form class="" action="index.html" method="post">
          <input type="text" name="" value="" class="form-control mb-2"
           placeholder="Input your Reg Number" style="border-radius:0px;">
          <input type="submit" name="" value="Search with Registration Number"
           class="btn btn-outline-success form-control" style="border-radius:0px">
        </form>
    </div>
  </div>
  <div style="margin-top:200px;">
    <p class="mt-5 text-center text-danger">
      Please Proceed to the Student Affairs if you have issues
    with Student Affairs</p>
  </div>
</div>
@endsection
