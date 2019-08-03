@extends('layouts.master')

@section('content')

  <div class="container">
    <div id="new">
        <h1>Sorry, no trips yet.</h1>
       
      <h2>Sorry @if(is_object(Auth::user())){{ Auth::user()->fname}}  @endif, there are no trips to show for this account. You can add one with the button below.</h2>
      <p>If you believe this an error, contact the developer at <a href="tel:0279258384">027 925 8384</a>.</p>
    </div>
    <a href="{{route('new')}}" class="btn btn-primary btn-lg pull-left"><span class="glyphicon glyphicon-plus"></span> Add New Trip</a>
  </div>

@endsection
