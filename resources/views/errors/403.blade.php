@extends('layouts.master')

@section('content')

  <div class="container">
    <div id="new">
      <h1>403 - Access Forbidden</h1>
      <h2>Sorry @if(is_object(Auth::user())) {!! Auth::user()->fname!!} @endif, you are not allowed to view this page.</h2>
      <p>Yeah, the page is there, but you aren't allowed to see it.</p>
      <p>If you believe this is an error, please contact the developer</p>
    </div>
  </div>

@endsection
