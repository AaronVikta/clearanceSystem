@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
      @if(Auth::user()->typeof=="student")
      <div class="col-md-12">
          <div class="">
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif
                  <span class="mb-3">
                      <h3 class="text-center">Welcome to your profile, {{Auth::user()->name}}
                        <a type="button"
                          class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                          Edit Profile
                        </a> </h3>
                  </span>
          </div>
      </div>
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">
                Update Profile</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="" action="#" method="post">
                <input type="text" name="" value="{{Auth::user()->name}}" class="form-control mb-1" disabled>
                <input type="text" name="" value="{{Auth::user()->email}}" class="form-control mb-1" disabled>
                <input type="text" name="" value="{{Auth::user()->reg_no}}" class="form-control mb-1" disabled>
                <input type="text" name="" value="2018/2019" class="form-control mb-1" disabled>
                <input type="submit" name="" value="Generate RRR" class="btn btn-outline-success
                form-control">
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <profile-component><profile-component>
      @endif
        @if(Auth::user()->typeof =='s_affairs')
        <student-affairs></student-affairs>
        @endif
        @if(Auth::user()->typeof =='security')
        <security-component></security-component>
        @endif
        @if(Auth::user()->typeof =='alumni')
        <alumni-component></alumni-component>
        @endif
        @if(Auth::user()->typeof =='library')
        <library-component></library-component>
        @endif
        @if(Auth::user()->typeof =='audit')
        <audit-component></audit-component>
        @endif
        @if(Auth::user()->typeof =='faculty')
        <faculty-component></faculty-component>
        @endif
    </div>
</div>
@endsection
