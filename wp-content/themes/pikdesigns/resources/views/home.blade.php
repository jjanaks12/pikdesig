{{--
  Template Name: Home page
--}}
@extends('layouts.app')

@section('content')
<div class="banner relative z-[1]">
    <div class="banner__video">
        <video autoplay muted loop>
            <source src="@asset('/videos/video01.mp4')" type="video/mp4">
        </video>
    </div>
    <div class="banner__content text-white absolute top-1/2 left-0 right-0 z-[2] -translate-y-1/2 overflow-hidden">
        <div class="container">
            <div class="holder max-w-[56%]">
                <em class="not-italic block mb-2">Personalized Ads</em>
                <h1 class="text-5xl mb-3">Good ideas deserve to be found. See how personalized ads can help.</h1>
                <a href="#" class="text-white">
                    <span class="w-7 inline-flex align-top justify-center items-center border border-solid rotate-180 rounded-full aspect-square">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="18" height="18" data-name="Layer 1">
                            <path d="M7.41 13H19a1 1 0 0 0 0-2H7.41l3.3-3.29a1 1 0 1 0-1.42-1.42l-5 5a1 1 0 0 0 0 1.42l5 5a1 1 0 0 0 1.42-1.42Z" /></svg>
                    </span>
                    Learn more
                </a>
            </div>
        </div>
    </div>
</div>
<section class="portfolio__section pt-c80 pb-c60">
    <div class="container">
        <div class="portfolio__header">
            <em class="not-italic">Recommended</em>
            <h2>Move your business forward with inspiration, insights, and resources picked just for you.</h2>
        </div>
        <div class="swiper">
            <div class="swiper-wrapper">
                @foreach($portfolios as $portfolio)
                <div class="swiper-slide portfolio flex flex-col">
                    <figure class="portfolio__image flex-grow mb-2.5">
                        <img src="{{ $portfolio['image'] }}" alt="{{ $portfolio['title'] }}" class="w-full h-full object-cover">
                    </figure>
                    <div class="portfolio__categories mb-2">
                        @foreach($portfolio['category'] as $category)
                        <em class="not-italic">{{ $category }}</em>
                        @endforeach
                    </div>
                    <h3 class="text-2xl">{{ $portfolio['title'] }}</h3>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<div class="container">
    <section class="services__section pt-c80 pb-c60">
        <div class="services__header">
            <h2 class="text-">Grow your business across Facebook, Messenger, Instagram, WhatsApp and Quest.</h2>
        </div>
        <div class="swiper">
            <div class="swiper-wrapper">
                @foreach($marketings as $marketing)
                <div class="swiper-slide services flex pl-c50 pb-c80" data-icon="icon-facebook">
                    <figure class="services__image">
                        <img src="{{ $marketing['image'] }}" alt="{{ $marketing['title'] }}">
                    </figure>
                    <div class="services__detail self-end">
                        <div class="marketing__categories">
                            @foreach($marketing['category'] as $category)
                            <em>{{ $category }}</em>
                            @endforeach
                        </div>
                        <h3>{{ $marketing['title'] }}</h3>
                        <div class="text">{{ $marketing['excerpt'] }}</div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
</div>
<section class="support__section">
    <div class="container">
        <em>Help and Support</em>
        <h2>What else can we help you with?</h2>
        <p><a href="#">Get support</a> for a specific issue in the Business Help Center.</p>
    </div>
</section>
<section class="mission__section">
    <div class="container">
        <h2>Mostly clients choose us, Why?</h2>
        <div class="mission__list">
            <div class="mission">
                <h3>Build your network with pikdesigns </h3>
            </div>
            <div class="mission">
                <h3>Build your network with pikdesigns </h3>
            </div>
            <div class="mission">
                <h3>Build your network with pikdesigns </h3>
            </div>
            <div class="mission">
                <h3>Build your network with pikdesigns </h3>
            </div>
        </div>
    </div>
</section>
@endsection
