@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome to your DashBoard! {{Auth::user()->name}}
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
      <div class="col-md-3">
        Generate Alumni Fee RRR
      </div>
      <div class="col-md-3">
        Pay Alumni Fee
      </div>
      <div class="col-md-3">
        Generate Convocation Fee RRR
      </div>
      <div class="col-md-3">
        Pay Convocation Fee
      </div>
    </div>
</div>
@endsection
