@extends('layouts.master')

@section('content')
  <div class="container">

    {!! Form::open(['route' => 'password.send', 'class' => 'form-signin']) !!}

      <h1>Reset Password</h1>

      @if(count($errors) > 0)
        <div class="alert alert-danger">There is a mistake in the information you have provided. Please try again.</div>
      @endif

      @if(session('status'))
        <div class="alert alert-info">{{ session('status') }}</div>
      @endif

      <div class="form-group {{ $errors->has('email') ? 'has-error text-danger' : '' }}">
        <label for="email" class="control-label">Email</label>
        {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
        @include('partials.error-help-block', ['field' => 'email'])
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-lg btn-primary btn-block">Send Password Reset Link</button>
      </div>
      <div class="form-group">
        <p class="pull-right"><a href="{{ route('auth.register') }}">Register</a></p>
        <p><a href="{{ route('auth.login') }}">Login</a></p>
      </div>

    {!! Form::close() !!}
  </div>
@endsection
