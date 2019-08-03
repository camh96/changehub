
@extends('layouts.master')

@section('content')
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div id="new">
      <h1>New Trip</h1>
      <p>Please fill in some details here.</p>
<div class="container">
      {!! Form::open(['url' => 'new']) !!}

        @if(count($errors) > 0)
        
        <div class="alert alert-danger">There is a mistake in the information you have provided. Please try again.</div>
        
      @endif
<div class="form-group">


      {!! Form::hidden('user_id', Auth::user()->id) !!}

      {!! Form::label('name', 'Where are you going?') !!}
      {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Work']) !!}
        
<br>
      {!! Form::label('days', 'What days will this be?') !!}
      {!! Form::select('days', array('Weekdays' => 'Weekdays' , 'Weekends' => 'Weekends'), null, ['class' => 'form-control'] ) !!} 
     
<br>

      {!! Form::label('origin', 'What address are you starting from?') !!}
      {!! Form::text('origin', null, ['class' => 'form-control', 'placeholder' => '301 Montreal Street, Christchurch Central']) !!}  
<br>
      {!! Form::label('destination', 'What address are you ending your journey?') !!}
      {!! Form::text('destination', null, ['class' => 'form-control', 'placeholder' => '5 Sir William Pickering Drive, Burnside']) !!}  
<br>
      {!! Form::label('arrtime', 'What time do you need to be at your destination?') !!}
      {!! Form::text('arrtime', null, ['class' => 'form-control', 'placeholder' => '9:00 AM', 'id'=>'start-time']) !!}  

<br>
      {!! Form::label('deptime', 'When would you like to leave ?') !!}
      {!! Form::text('deptime', null, ['class' => 'form-control', 'placeholder' => '5:00 PM', 'id'=>'end-time']) !!}  

<br>
      
      {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-success form control pull-right'] ) !!}
    <a href="mytrips/{{ Auth::user()->id }}" class="btn btn-primary btn-lg pull-left"><span class="glyphicon glyphicon-road"></span> My Trips</a>
    <a href="dashboard" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a>


</div>
    


      {!! Form::close() !!}     

</div>

  @endsection
