@extends('layouts.master')

@section('content')
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div id="new">

  <?php $scheduleID = $schedules[0]['attributes']['user_id'] ?>

   @if(Auth::user()->id===$scheduleID ) 
      <h1>My Trips</h1>
@else
  <h1>Trips for <a href="/users/{!! $name[0]['attributes']['id'] !!}">{{ $name[0]['attributes']['fname'] }} {{ $name[0]['attributes']['lname'] }}</a> </h1>
  @endif
  
      <p> Listed below are the selected trips for the Change Moment Pilot </p>


    <div class="container table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Days</th>
        <th>Origin</th>
        <th>Destination</th>
        <th>Arrive By</th>
        <th>Leave At</th>
      </tr>
    </thead>
    
    <tbody>
    @foreach ($schedules as $schedule)
      <tr>
        <td>{{ ucwords($schedule->name) }}</td>
        <td>{{ $schedule->days }}</td>
        <td>{{ $schedule->origin }}</td>
        <td>{{ $schedule->destination }}</td>
        <td>{{ $schedule->arrtime }}</td>
        <td>{{ $schedule->deptime }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @if(Auth::user()->id===$schedule->user_id)
  <a href="{{route('new')}}" class="btn btn-primary btn-lg pull-left"><span class="glyphicon glyphicon-plus"></span> Add New Trip</a>

  <a href="{{route('dashboard')}}" class="btn btn-primary btn-lg pull-right"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a>
  @endif
</div> 


         

@endsection
