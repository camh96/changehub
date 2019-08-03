@extends('layouts.master')

@section('content')
  <div class="container">
  <div class="padding"></div>
        

  {{-- */ $name = Auth::User()->id == $uid->id ? 'Your' : $uid->fname."'s" /* --}}

  <h1>Editing {!! $name !!}  Profile</h1>

    {!! Form::open(['route' => ['profile.update'], 'class' => 'form-horizontal', 'method' => 'PUT']) !!}

      @if(count($errors) > 0)
        
        <div class="alert alert-danger">There is a mistake in the information you have provided. Please try again.</div>
        
      @endif

      {!! Form::hidden('user_id', $uid->id) !!}

      <div class="form-group required {{ $errors->has('fname') ? 'has-error text-danger' : '' }}">
        <label for="fname" class="col-sm-2 control-label">First name</label>
        <div class="col-sm-10">
          {!! Form::text('fname', $uid->fname, ['class' => 'form-control']) !!}
          @include('partials.error-help-block', ['field' => 'fname'])
        </div>
      </div>

      <div class="form-group required {{ $errors->has('lname') ? 'has-error text-danger' : '' }}">
        <label for="lname" class="col-sm-2 control-label">Last name</label>
        <div class="col-sm-10">
          {!! Form::text('lname', $uid->lname, ['class' => 'form-control']) !!}
          @include('partials.error-help-block', ['field' => 'lname'])
        </div>
      </div>

      <div class="form-group required {{ $errors->has('email') ? 'has-error text-danger' : '' }}">
        <label for="email" class="col-sm-2 control-label">Email Address</label>
        <div class="col-sm-10">
          {!! Form::email('email', $uid->email, ['class' => 'form-control']) !!}
          @include('partials.error-help-block', ['field' => 'email'])
        </div>
      </div>

      <div class="form-group required {{ $errors->has('phone') ? 'has-error text-danger' : '' }}">
        <label for="phone" class="col-sm-2 control-label">Phone Number</label>
        <div class="col-sm-10">
          {!! Form::text('phone', $uid->phone, ['class' => 'form-control', 'id'=>'phone']) !!}
          @include('partials.error-help-block', ['field' => 'phone'])
        </div>
      </div>

      <div class="form-group {{ $errors->has('metronumber') ? 'has-error text-danger' : '' }}">
        <label for="metronumber" class="col-sm-2 control-label">Metrocard Number</label>
        <div class="col-sm-10">
          {!! Form::text('metronumber', $uid->metronumber, ['class' => 'form-control']) !!}
          @include('partials.error-help-block', ['field' => 'metronumber'])
        </div>
      </div>


      <div class="form-group {{ $errors->has('flybuys') ? 'has-error text-danger' : '' }}">
        <label for="flybuys" class="col-sm-2 control-label">Fly Buys Number</label>
        <div class="col-sm-10">
          {!! Form::text('flybuys', $uid->flybuys, ['class' => 'form-control' ,'placeholder' => '6014 0000 0000 0000', 'id' => 'flybuys']) !!}
          @include('partials.error-help-block', ['field' => 'flybuys'])
        </div>
      </div>
      @if(Auth::User()->access == "admin")
        <div class="form-group {{ $errors->has('access') ? 'has-error text-danger' : '' }}">
        <label for="access" class="col-sm-2 control-label text-danger">Access Level</label>
        <div class="col-sm-10">
          {!! Form::select('access', ['admin' => 'Admin', 'user'=>'User'], $uid->access,  ['class' => 'form-control']) !!}
          @include('partials.error-help-block', ['field' => 'access'])
        </div>
      </div>

      @endif


      <div class="form-group {{ $errors->has('password') ? 'has-error text-danger' : '' }}">
        <label for="password" class="col-sm-2 control-label">New Password</label>
        <div class="col-sm-10">
          {!! Form::password('password', ['class' => 'form-control']) !!}
          @include('partials.error-help-block', ['field' => 'password'])
        </div>
      </div>
      <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error text-danger' : '' }}">
        <label for="password_confirmation" class="col-sm-2 control-label">Confirm Password</label>
        <div class="col-sm-10">
          {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
          @include('partials.error-help-block', ['field' => 'password_confirmation'])
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="help-block">Leave passwords blank to keep your existing password.</div>
          <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Update Profile</button>
        </div>
      </div>

    {!! Form::close() !!}
  </div>

@endsection
