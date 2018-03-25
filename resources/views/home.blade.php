@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Dashboard</b></div>

                <div class="panel-body">
                    You are logged in!
                  @if (session('status'))
                      <div class="alert alert-success">
                          {{ session('status') }}
                      </div>
                  @endif
                  <br>
                  <br>
                  <a href="{{ url('/futuremember') }}"><b>Add Member</b></a>
                  <br>
                  <br>
                  <a href="{{ url('/member/all') }}"><b>View Members</b></a>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
