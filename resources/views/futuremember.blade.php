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
      
    <div class="form-group">
            {{Form::label('countryInput', 'Country')}}
            <select class="combobox input-large form-control" id='countryInput'>
              <option value="" selected="selected">Select a Country</option>
            </select>
    </div>
    
    <div class="form-group">
            {{Form::label('stateInput', 'State')}}
            <select class="combobox input-large form-control" id='stateInput'>
              <option value="" selected="selected">Select a State</option>
            </select>
    </div>


      {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
</div>

@endsection
