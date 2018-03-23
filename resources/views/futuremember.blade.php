@extends('layouts.app')

@section('content')
<div class="container">
<h2>Add Member Info</h2>

@if(isset($member))
      {!! Form::open(array('url' => '/update/'.$member->id, 'method' => 'PUT', 'class'=>'col-md-12')) !!}
      {{Form::hidden('_method', 'PUT')}}
@else
      {!! Form::open(['url' => 'futuremember/submit']) !!}
@endif
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', isset($member) ? $member->name : "", ['class' => 'form-control', 'placeholder' => 'Enter Name'])}}
    </div>
    <div class="form-group">
        {{Form::label('email', 'E-mail Address')}}
        {{Form::text('email', isset($member) ? $member->email : "", ['class' => 'form-control', 'placeholder' => 'Enter Email Address'])}}
    </div>
    <div class="form-group">
        {{Form::label('contact', 'Contact Number')}}
        {{Form::number('contact', isset($member) ? $member->contact : "", ['class' => 'form-control', 'placeholder' => 'Enter Contact Number'])}}
    </div>

    <div class="form-group">
        {{Form::label('contacttime', 'Best Time to Reach:')}}
        <br>
        {{ Form::checkbox('checkbox1', '', false, ['class' => 'field', 'name' => 'contacttime[]']) }}
        {{Form::label('checkbox', 'Morning')}}
        <br>
        {{ Form::checkbox('checkbox1', '', false, ['class' => 'field', 'name' => 'contacttime[]']) }}
        {{Form::label('checkbox', 'Afternoon')}}
        <br>
        {{ Form::checkbox('checkbox1', '', false, ['class' => 'field', 'name' => 'contacttime[]']) }}
        {{Form::label('checkbox', 'Evening')}}
    </div>

    <div class="form-group">
        {{Form::label('radio', 'Interested In Conference Board Membership?')}}
        <br>
        {{ Form::radio('interested', isset($member) ? $member->interested : "") }}
        {{Form::label('interested', 'Yes')}}
        <br>
        {{ Form::radio('interested', isset($member) ? $member->interested : "") }}
        {{Form::label('interested', 'No')}}
    </div>
    <div class="form-group" style="margin:20px 0px;">
      {{Form::label('state', 'State')}}
      {{Form::text('state', isset($member) ? $member->state : "", ['class' => 'form-control', 'placeholder' => 'Enter US State'])}}
		</div>
    <div class="form-group">
      {{Form::label('city', 'City')}}
      {{Form::text('city', isset($member) ? $member->city : "", ['class' => 'form-control', 'placeholder' => 'Enter City'])}}
    </div>

      {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection
