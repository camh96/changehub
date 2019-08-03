@extends('layouts.master')

@section('content')

  <div class="container">
  <div class="padding">
    <div class="register"> 
    {!! Form::open(['route' => 'auth.store', 'class' => 'form-horizontal', 'id' => 'register']) !!}

      <h1>Register</h1>

      @if(count($errors) > 0)
        <div class="alert alert-danger alert-dismissable">There is a mistake in the information you have provided. Please try again.</div>
      @endif
      <div class="divexample"><em>The pilot for New Trips, Easy Trips has closed. However, you can still sign up to be notified in the future.</em> </div>

      <div class="form-group required {{ $errors->has('fname') ? 'has-error text-danger' : '' }}">
        <label for="fname" class="control-label">First Name</label>
        {!! Form::text('fname', old('fname'), ['class' => 'form-control','placeholder' => 'John']) !!}
        @include('partials.error-help-block', ['field' => 'fname'])
      </div>

       <div class="form-group required {{ $errors->has('lname') ? 'has-error text-danger' : '' }}">
        <label for="lname" class="control-label">Last Name</label>
        {!! Form::text('lname', old('lname'), ['class' => 'form-control', 'placeholder' => 'Smith']) !!}
        @include('partials.error-help-block', ['field' => 'lname'])
      </div>

      <div class="form-group required {{ $errors->has('phone') ? 'has-error text-danger' : '' }}">
        <label for="phone" class="control-label">Phone Number</label>
        <div class="input-group">
          {!! Form::text('phone', old('phone'), ['class' => 'form-control', 'placeholder' => '027 123 4587', 'id'=>'phone']) !!}
          <span class="input-group-addon">
            <span class="glyphicon glyphicon-phone"></span>
          </span>
        </div>
        @include('partials.error-help-block', ['field' => 'phone'])
      </div>

      <div class="form-group required {{ $errors->has('email') ? 'has-error text-danger' : '' }}">
        <label for="email" class="control-label">Email</label>
        <div class="input-group">
          {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => 'john.smith@domain.com']) !!}
          <span class="input-group-addon">
            <span class="glyphicon glyphicon-envelope"></span>
          </span>
        </div>
        @include('partials.error-help-block', ['field' => 'email'])
      </div>

    

    <div class="form-group required {{ $errors->has('tools') ? 'has-error text-danger' : '' }}">
        <label for="tools" class="control-label">Incentives - Select as many as you want. Hold control to select multiple</label>
        {!! Form::select('tools', array('Timetable' => 'Personalised Timetable', 'Travel Plan' => 'Travel Planning', 'Reminders' => 'Reminders','Bus Credit' => '$40 Metro Credit','Flybuys' => 'FlyBuys Points'), null, ['class' => 'form-control', 'multiple' => '', 'name' => 'tools[]'] ) !!} 
        @include('partials.error-help-block', ['field' => 'tools'])
      </div>

<div class="form-group {{ $errors->has('metronumber') ? 'has-error text-danger' : '' }}">
        <label for="metronumber" class="control-label">Metrocard Number - <small><em>Leave blank if a new card is required.</em></small> </label>
        {!! Form::text('metronumber', old('metronumber'), ['class' => 'form-control', 'placeholder' => '000000']) !!}
        @include('partials.error-help-block', ['field' => 'metronumber'])
      </div>

      <div class="form-group {{ $errors->has('flybuys') ? 'has-error text-danger' : '' }}">
        <label for="flybuys" class="control-label">FlyBuys Number</label>
          {!! Form::text('flybuys', old('flybuys'), ['class' => 'form-control', 'id'=>'flybuys', 'placeholder' => '6014-0000-0000-0000']) !!}
        @include('partials.error-help-block', ['field' => 'flybuys'])
      </div>

      <div class="form-group required {{ $errors->has('password') ? 'has-error text-danger' : '' }}">
        <label for="password" class="control-label">Password</label>
        {!! Form::password('password', ['class' => 'form-control' , 'placeholder' => '••••••••••••']) !!}
        @include('partials.error-help-block', ['field' => 'password'])
      </div>

      <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error text-danger' : '' }}">
        <label for="password_confirmation" class="control-label">Confirm Password</label>
        {!! Form::password('password_confirmation', ['class' => 'form-control' , 'placeholder' => '••••••••••••']) !!}
        @include('partials.error-help-block', ['field' => 'password_confirmation'])
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-lg btn-primary btn-block">Register</button>
      </div>
      </div>
      <div class="form-group">
        <p><a href="{{ route('auth.login') }}">Log in</a></p>
      </div>
    {!! Form::close() !!}
  </div>
  </div>
@endsection







