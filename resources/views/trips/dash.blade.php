@extends('layouts.master')

@section('content')
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div id="new">
        <div class="hidden-xs">
<h1>Dashboard</h1>
</div>
<div class="visible-xs">
      <h2>Dashboard</h2>
      </div>
      <p class="lead">Welcome, {{ Auth::user()->fname}} {{ Auth::user()->lname}}.</p>
      <div class="hidden-xs">
      <a href="new" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-plus"></span> Add New Trip</a>
      @if($checkTrips == 0)
      <a href="" class="btn btn-primary btn-lg notrips" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="No trips available, please add some." readonly><span class="glyphicon glyphicon-road"></span> My Trips</a>
      @else
      <a href="/mytrips/{!! Auth::user()->id !!}" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-road"></span> My Trips</a>
      @endif
      
      
      <a href="users/{{ Auth::user()->id }}" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-user"></span>	My Profile</a>
         @if(((Auth::check()) && Auth::user()->access==="admin"))
      <a href="{{ route('users') }}" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-console"></span> Admin Panel <span class="badge"> {!! $count !!}</span></a>
      <!-- <a href="{{ route('users') }}" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-cog"></span> Users </a> -->
      @endif
    </div>
   <div class="visible-xs">
      <div class="btn-group-vertical">
  <a href="new" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-plus"></span> Add New Trip</a>
     @if($checkTrips == 0)
      <a href="" class="btn btn-primary btn-lg notrips" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="No trips available, please add some." readonly><span class="glyphicon glyphicon-road"></span> My Trips</a>
      @else
      <a href="/mytrips/{!! Auth::user()->id !!}" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-road"></span> My Trips</a>
      @endif
      <a href="users/{{ Auth::user()->id }}" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-user"></span>  My Profile</a>
   @if(((Auth::check()) && Auth::user()->access==="admin"))
      <a href="{{ route('users') }}" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-console"></span> Admin Panel <span class="badge"> {!! $count !!}</span></a>
      <!-- <a href="{{ route('users') }}" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-cog"></span> Users </a> -->
      @endif
</div>
      
    </div> 
    </div>
  @endsection
