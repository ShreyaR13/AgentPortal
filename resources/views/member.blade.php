@extends('layouts.app')

@section('content')

<div class="container">
  <h1>All Members</h1>


    <label class="switch">
      <input id='onlyOwnSubmissions' type="checkbox">
      <span class="slider round"></span>
    </label>

    @if(count($member) > 0)
    @php
    $copyOfMember = $member
    @endphp



      <div class="row grid">
      @foreach($member as $member)

      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 card grid-item" data-toggle="modal" data-target="#show-form-{{ $member->id }}"
        style="cursor: pointer !important;">
        <div class="thumbnail">
          <img src="{{ URL::asset('img/user.png') }}" class="">
          <div class="caption">
            <h3 id="thumbnail-label">{{$member->name}}</h3>
            <p>Email: {{$member->email}}</p>
            <p>Created on: {{$member->created_at}} by {{$member->user->name}}</p>
          </div>
          <div class="caption card-footer">
            <ul class="list-inline">
              <li><i class="fa fa-user"></i></li>
              <li>Member ID: {{$member->id}}</li>
            </ul>
          </div>
        </div>
      </div>
      @endforeach
      {{ $copyOfMember->links() }}
      </div>
    @else
        <p>No Members found</p>
    @endif

</div>

@foreach($copyOfMember as $copyOfMember)
    @include('inc.genModal', ['member' => $copyOfMember])
@endforeach


@endsection
