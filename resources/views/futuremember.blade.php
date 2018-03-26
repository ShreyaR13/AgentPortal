{{--  View page to add new future member to DB  --}}
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
        {{Form::text('contact', isset($member) ? $member->contact : "", ['class' => 'form-control', 'placeholder' => 'Enter Contact Number'])}}
    </div>

    <div class="form-group">
        {{Form::label('radio', 'Interested In Conference Board Membership?')}}
        <br>
        {{ Form::radio('interested', isset($member) ? $member->interested : "Yes", true, ['name' => 'interested'])}}
        {{Form::label('interested', 'Yes')}}
        <br>
        {{Form::radio('interested', isset($member) ? $member->interested : "No", false, ['name' => 'interested'])}}
        {{Form::label('interested', 'No')}}
    </div>
      
    <div class="form-group">
            {{Form::label('countryInput', 'Country')}}

            {{Form::select('countryInput',
            [isset($member) ? $member->countries_id : '' => isset($member) ? $member->country->country_name : 'Select a Country'],
            null, ['class'=> 'combobox input-large form-control'])}}
    </div>

    <div class="form-group">
            {{Form::label('stateInput', 'State')}}
            
            {{Form::select('stateInput', 
            [isset($member) ? $member->states_id : '' => isset($member) ? $member->state->state_name : 'Select a State'],
            null, ['class'=> 'combobox input-large form-control'])
            }}
    </div>

    <div class="form-group">
            {{Form::label('contacttime', 'Best Time to Reach:')}}
            <br>
            
            {{ Form::checkbox('contacttime[]', 'Morning', isset($member->contacttime->morning) ? $member->contacttime->morning : false, ['class' => 'field', 'name' => 'contacttime[]']) }}
            {{Form::label('checkbox', 'Morning')}}
            <br>
            {{ Form::checkbox('contacttime[]', 'Afternoon', isset($member->contacttime->afternoon) ? $member->contacttime->afternoon : false, ['class' => 'field', 'name' => 'contacttime[]']) }}
            {{Form::label('checkbox', 'Afternoon')}}
            <br>
            {{ Form::checkbox('contacttime[]', 'Evening', isset($member->contacttime->evening) ? $member->contacttime->evening : false, ['class' => 'field', 'name' => 'contacttime[]']) }}
            {{Form::label('checkbox', 'Evening')}}
        </div>


      {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
</div>

@endsection
