{{--  View page to display new future member to DB  --}}
@extends('layouts.app')

@section('content')
@php
  $urlArray = explode('/', Request::url());
  $action = end($urlArray);
  $checkedValue = '';
  if($action == 'own'){
    $checkedValue = 'checked';
  }
@endphp

<div class="container">
  <h1>Members</h1>
  <label class="switch">
      <input id='onlyOwnSubmissions' type="checkbox" {{$checkedValue}}>
      <span class="slider round"></span>
</label>

@php
$copyOfMember = $member
@endphp

{{--  If count of number of members is greater than zero than display hte members in a card view  --}}
@if(count($member) > 0)

  {{--  Display members in a card view on Member Page  --}}
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
   
    <h1>No Members found</h1>
@endif

</div>

{{--  Modal view to display members  --}}
{{--  @if(count($copyOfMember) > 0)  --}}
  @foreach($copyOfMember as $copyOfMember)
      @include('inc.genModal', ['member' => $copyOfMember])
  @endforeach
{{--  @endif  --}}

@endsection
