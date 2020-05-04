@extends('layouts.app')
@section('menu')

<nav class="fh5co-nav" role="navigation">
    <div class="container">
        <div class="row">
            <div class="col-xs-2">
                <div id="fh5co-logo"><a href="/">OurSpecialDay<strong>.</strong></a></div>
            </div>
            <div class="col-xs-10 text-right menu-1">
                <ul>
                    <li class="active"><a href="/">Home</a></li>
                    <li class="has-dropdown">
                        <a href="#fh5co-event">Event Details</a>
                        <ul class="dropdown">
                            <li><a href="#fh5co-couple">Date/Time</a></li>
                            <li><a href="#fh5co-event">Venue</a></li>
                            <li><a href="#fh5co-testimonial">Dress Code</a></li>
                            <li><a href="https://waze.com/ul/hwdw0w2uzp">Waze Pin</a></li>
                        </ul>
                    </li>
                    <li><a href="#fh5co-couple-story">Our Story</a></li>
                    <li><a href="#fh5co-started">RSVP</a></li>
                </ul>
            </div>
        </div>        
    </div>
</nav>
    
@endsection