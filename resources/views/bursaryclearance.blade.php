@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <h2 class="text-center mb-5">Bursary Clearance</h2>
  <hr>
  <div class="row mt-3">
    <div class="col-md-6">
      <h3 class="text-center mt-4 mb-4">Your Current Status</h3>
      <p class="pl-4 pr-4">Dear Vincent Michael, you are uncleared at the Bursary.
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
  <div style="margin-top:120px;">
    <p class="mt-5 text-center text-danger">
      fill in your receipt RRR details below
      </p>
      <div class="row">
        <div class="col-md-4 offset-md-4">
          <form class="" action="index.html" method="post">
            <input type="text" name="" value="2014/197683" class="form-control mb-1" disabled>
            <input type="text" name="" value="" class="form-control mb-1" placeholder="Your RRR">
            <input type="number" name="" value="" class="form-control mb-1" placeholder="Year of Study">
            <input type="submit" name="" value="Update" class="form-control mb-1 btn btn-outline-success">
          </form>
        </div>
      </div>
  </div>
</div>
@endsection
