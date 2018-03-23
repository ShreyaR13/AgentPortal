@extends('layouts.app')

@section('content')
  <div class="container">
    <a href="/member" class="btn btn-default">Go Back</a>
    <h1>{{$member->name}}</h1>

    <ul class="list-group">
      <li class="list-group-item">Member ID: {{$member->id}}</li>
      <li class="list-group-item">Email: {{$member->email}}</li>
      <li class="list-group-item">Contact Number: {{$member->contact}}</li>
      <li class="list-group-item">Interested: {{$member->interested}}</li>
      <li class="list-group-item">State: {{$member->state}}</li>
      <li class="list-group-item">City: {{$member->city}}</li>
    </ul>
    <hr>
    <a href="/edit/{{$member->id}}" class="btn btn-default">Edit</a>
    {!! Form::open(array('url' => '/destroy/'.$member->id, 'method' => 'PUT', 'class'=>'pull-right')) !!}
      {{Form::hidden('_method', 'PUT')}}
      {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
  </div>

@endsection
