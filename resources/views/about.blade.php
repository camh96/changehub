@extends('layouts.master')
@section('content')
<!-- Main jumbotron for a primary marketing message or call to action -->
<div id="myCarouselx" class="carousel slide hidden-xs" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="first-slide img-responsive" src="{{ asset('img/3.jpeg') }}" alt="First slide">
      <div class="container">
        <div class="carousel-caption">
        </div>
      </div>
    </div>
  </div>
</div>
<div id="myCarousel" class="carousel slide visible-xs" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="first-slide img-responsive" src="{{ asset('img/3-mobile.jpeg') }}" alt="First slide">
      <div class="container">
        <div class="carousel-caption">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="padding">
<div class="container">
<div id="jumbotext">
   <h1>Make new trips, easy trips.</h1>
   
</div>



<!-- Example row of columns -->
<p class="lead">The city that flows flourishes.</p>
<p class="lead">Traffic congestion is inconvenient and costs both time and money.</p>
<p class="lead">This pilot project is part of a programme to increase public transport usage within the Canterbury region.</p>
<p class="lead">The key objectives are:</p>

<ul>
<li>Increase mode share for public transport from 2.4% (2013) for Greater Christchurch to 3% by 2020</li>
<li>Increase mode share of peak CBD trips from 10.7% (2013) to 15% by 2020</li>
</div>




@endsection