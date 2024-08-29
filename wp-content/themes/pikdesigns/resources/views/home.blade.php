{{--
  Template Name: Home page
--}}
@extends('layouts.app')

@section('content')
<div class="banner">
    <div class="banner__video">
        <video autoplay muted loop>
            <source src="@asset('/videos/video01.mp4')" type="video/mp4">
        </video>
    </div>
    <div class="banner__content">
        <div class="container">
            <em>Personalized Ads</em>
            <h1>Good ideas deserve to be found. See how personalized ads can help.</h1>
            <a href="#">Learn more</a>
        </div>
    </div>
</div>
@endsection
