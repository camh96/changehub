@extends('layouts.master')

@section('content')
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div id="new">
      <h1><a href="{!! route('users') !!}/{{ $user->id }}">{!! $user->fname !!}'s</a> trip: {!! ($bus->name); !!}</h1>
      <p>This is where any trips you have listed will go </p>
      
       <p><strong>Weekdays or Weekends</strong>: {!! ($bus->days); !!} </p>
       <p><strong>Where you are starting</strong>: {!! ($bus->origin); !!} </p>
       <p><strong>Where you are going</strong>: {!! ($bus->destination); !!} </p>
       <p><strong>When you are going</strong>: {!! ($bus->arrtime); !!} </p>
       <p><strong>When you get back</strong>: {!! ($bus->deptime); !!} </p>
      
    </div>
  @endsection
