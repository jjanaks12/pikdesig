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
<section class="portfolio__section">
    <div class="container">
        <div class="portfolio__header">
            <em>Recommended</em>
            <h2>Move your business forward with inspiration, insights, and resources picked just for you.</h2>
        </div>
        <div class="swiper">
            <div class="swiper-wrapper">
                @foreach($portfolios as $portfolio)
                <div class="swiper-slide portfolio">
                    <figure class="portfolio__image">
                        <img src="{{ $portfolio['image'] }}" alt="{{ $portfolio['title'] }}">
                    </figure>
                    <h3>{{ $portfolio['title'] }}</h3>
                    <div class="portfolio__categories">
                        @foreach($portfolio['category'] as $category)
                        <em>{{ $category }}</em>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<div class="container">
    <section class="services__section">
        <h2>Grow your business across Facebook, Messenger, Instagram, WhatsApp and Quest.</h2>
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide service" data-icon="icon-facebook">
                    <figure class="service">
                        <img src="" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
