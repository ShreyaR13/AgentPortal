@extends('layouts.app')

@section('content')

<div class="container">
  <h1>Your Members</h1>
  <label class="switch">
    <input id='onlyOwnSubmissions' checked type="checkbox">
    <span class="slider round"></span>
  </label>

  {{--  If added members are greater than zero then display members  --}}
  @if(count($member) > 0)

    @php
    $copyOfMember = $member
    @endphp

    {{--  Display members created by logged in users in card view  --}}
    <div class="row grid">
    @foreach($member as $member)

      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 card grid-item" data-toggle="modal" data-target="#show-form-{{ $member->id }}"
        style="cursor: pointer !important;">
        <div class="thumbnail">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCOAHZijR7fAnilX0HexhHRTRu0BKXehxPlvYXxodTQD_LIH3B2w" class="">
          <div class="caption">
            <h3 id="thumbnail-label">{{$member->name}}</h3>
            <p>Email: {{$member->email}}</p>
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
    </div>
  @else
      <h2>No Members found!</h2>
  @endif
</div>

@if(count($member) > 0)
  @foreach($copyOfMember as $copyOfMember)
      @include('inc.genModal', ['member' => $copyOfMember])
  @endforeach
@endif
@endsection
