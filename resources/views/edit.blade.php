<!-- @extends('layouts.app')

@section('content')
<div class="container">
<h2>Edit Member Info</h2>
{!! Form::open(['action' => ['FutureMemberController@update', $member->id], 'method' => 'GET']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '$member->name', ['class' => 'form-control', 'placeholder' => 'Enter Name'])}}
    </div>
    <div class="form-group">
        {{Form::label('email', 'E-mail Address')}}
        {{Form::text('email', '$member->email', ['class' => 'form-control', 'placeholder' => 'Enter Email Address'])}}
    </div>
    <div class="form-group">
        {{Form::label('contact', 'Contact Number')}}
        {{Form::number('contact', '$member->contact', ['class' => 'form-control', 'placeholder' => 'Enter Contact Number'])}}
    </div>

    <div class="form-group">
        {{Form::label('contacttime', 'Best Time to Reach:')}}
        <br>
        {{ Form::checkbox('inlineCheckbox1', '', false, ['class' => 'field', 'name' => 'contacttime[]']) }}
        {{Form::label('inlineCheckbox1', 'Morning')}}
        <br>
        {{ Form::checkbox('inlineCheckbox2', '', false, ['class' => 'field', 'name' => 'contacttime[]']) }}
        {{Form::label('inlineCheckbox1', 'Afternoon')}}
        <br>
        {{ Form::checkbox('inlineCheckbox2', '', false, ['class' => 'field', 'name' => 'contacttime[]']) }}
        {{Form::label('inlineCheckbox1', 'Evening')}}
    </div>

    <div class="form-group">
        {{Form::label('radio', 'Interested In Conference Board Membership?')}}
        <br>
        {{ Form::radio('interested', '$member->interested' , false) }}
        {{Form::label('interested', 'Yes')}}
        <br>
        {{ Form::radio('interested', '$member->interested' , false) }}
        {{Form::label('interested', 'No')}}
    </div>
    <div class="form-group" style="margin:20px 0px;">
      {{Form::label('state', 'State')}}
      {{Form::text('state', '$member->state', ['class' => 'form-control', 'placeholder' => 'Enter US State'])}}
			<!-- <input type="text" class="form-control" id="state" name="state" placeholder="Enter US State"> -->
		<!-- </div>
    <div class="form-group">
      {{Form::label('city', 'City')}}
      <!-- <input type="text" class="form-control" id="city" name="city" placeholder="Enter city"> -->
      <!-- {{Form::text('city', '$member->city', ['class' => 'form-control', 'placeholder' => 'Enter City'])}}
    </div>
    <div>
      {{Form::hidden('_method', 'PUT')}}
      {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    </div>
{!! Form::close() !!}
</div>
@endsection --> 
