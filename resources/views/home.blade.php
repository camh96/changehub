@extends('layouts.master')

@section('content')

<!-- Main jumbotron for a primary marketing message or call to action -->
  <div id="myCarouselx" class="carousel slide hidden-xs" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarouselx" data-slide-to="0" class="active"></li>
        <li data-target="#myCarouselx" data-slide-to="1"></li>
        <li data-target="#myCarouselx" data-slide-to="2"></li>
        <li data-target="#myCarouselx" data-slide-to="3"></li>
        <li data-target="#myCarouselx" data-slide-to="4"></li>
        
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide img-responsive" src="{{ asset('img/1.jpeg') }}" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="{{ asset('img/2.jpeg') }}" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
                <div class="item">
          <img class="third-slide" src="{{ asset('img/3.jpeg') }}" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
      <div class="item">
          <img class="fourth-slide" src="{{ asset('img/5.jpeg') }}" alt="Fourth slide">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <div class="item">
          <img class="fifth-slide" src="{{ asset('img/4.jpeg') }}" alt="Fifth slide">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
      </div>

      <a class="left carousel-control" href="#myCarouselx" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarouselx" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

<div id="myCarousel" class="carousel slide visible-xs" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        
        
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide img-responsive" src="{{ asset('img/1-mobile.jpeg') }}" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="{{ asset('img/2-mobile.jpeg') }}" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
              <div class="item">
          <img class="fourth-slide" src="{{ asset('img/6-mobile.jpeg') }}" alt="Fourth slide">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
      <div class="item">
          <img class="fourth-slide" src="{{ asset('img/5-mobile.jpeg') }}" alt="Fourth slide">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <div class="item">
          <img class="fifth-slide" src="{{ asset('img/4-mobile.jpg') }}" alt="Fifth slide">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
      </div>

      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
<div class="container">
<div class="padding">
    <div id="jumbotext">
              <h1>New Trips, Easy Trips</h1>
              
            <p>The pilot closed at midday Friday November 20. Thanks for your interest. If you would like to keep in touch about further pilots and the metro programme please register your details via Get Started below</p>
            </div>
<p>We know that when something key changes in your life – like a new job or a new home 
      – then you are more open to other changes, like changing the way you travel.
   </p>
   <p> New Trips, Easy Trips is a pilot to test which tools and incentives will work best to help you change how you travel.</p>

            </div>

<h2 class="new center">You can select as many of the following options as you wish.</h2>
<br />

<div class="row">
  <div class="col-md-4 col-xs-6">
    <img src=" {{ asset('icons/1.svg')  }} " class="img-responsive icons" alt="Slider Image">
    <p class="center"><strong>Personalised timetable</strong><br>Based on your lifestyle and the trips that you make.</p>
  </div>
  <div class="col-md-4 col-xs-6">
    <img src=" {{ asset('icons/2.svg')  }} " class="img-responsive icons" alt="Slider Image">
    <p class="center"><strong>Travel planning</strong><br>We will plan out what bus services work for your lifestyle. Online or via phone.</p>
  </div>
  <div class="col-md-4 col-xs-6">
    <img src=" {{ asset('icons/3.svg')  }} " class="img-responsive icons" alt="Slider Image">
    <p class="center"><strong>Reminders</strong><br>Calendar or text reminders about your upcoming bus trips.</p>
  </div>
  <div class="col-md-4 col-md-offset-2 col-xs-6">
    <img src=" {{ asset('icons/4.svg')  }} " class="img-responsive icons" alt="Slider Image">
    <p class="center"><strong>$40 credit</strong><br>A new Metrocard with $40 credit or a $40 top up to an existing card.</p>
  </div>
  <div class="col-md-4 col-xs-6">
    <img src=" {{ asset('icons/flybuys-logo.png')  }} " class="img-responsive icons" alt="Slider Image" id="fblogo">
    <p class="center"><strong>Fly Buys Points</strong><br>Get FlyBuys Points for signing up to the pilot and for your trips.</p>
  </div>
  

</div>
<p class="center"><a class="btn btn-primary btn-lg" href="dashboard" role="button">Get Started &raquo;</a></p>
      <!-- Example row of columns -->
      
@endsection
