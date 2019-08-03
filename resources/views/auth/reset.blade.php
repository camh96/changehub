@extends('layouts.master')

@section('content')
  <div class="container">

    {!! Form::open(['route' => 'password.accept', 'class' => 'form-signin']) !!}
      {!! Form::hidden('token', $token) !!}
      <h1>Reset Password</h1>

      @if(count($errors) > 0)
        <div class="alert alert-danger">There is a mistake in the information you have provided. Please try again.</div>
      @endif

      <div class="form-group {{ $errors->has('email') ? 'has-error text-danger' : '' }}">
        <label for="email" class="control-label">Email</label>
        {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
        @include('partials.error-help-block', ['field' => 'email'])
      </div>

      <div class="form-group {{ $errors->has('password') ? 'has-error text-danger' : '' }}">
        <label for="password" class="control-label">Password</label>
        {!! Form::password('password', ['class' => 'form-control']) !!}
        @include('partials.error-help-block', ['field' => 'password'])
      </div>

      <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error text-danger' : '' }}">
        <label for="password_confirmation" class="control-label">Confirm Password</label>
        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
        @include('partials.error-help-block', ['field' => 'password_confirmation'])
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-lg btn-primary btn-block">Reset Password</button>
      </div>
    {!! Form::close() !!}
  </div>
@endsection