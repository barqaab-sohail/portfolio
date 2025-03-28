@extends('layouts.app')

@section('title', $portfolio->name . ' Portfolio')
@section('portfolio_name', $portfolio->name)

@section('content')
<main class="main">

<!-- Page Title -->
<div class="page-title dark-background">
  <div class="container d-lg-flex justify-content-between align-items-center">
    <h1 class="mb-2 mb-lg-0">Portfolio Details</h1>
    <nav class="breadcrumbs">
      <ol>
        <li><a href="{{route('home')}}">Home</a></li>
        <li class="current">Portfolio Details</li>
      </ol>
    </nav>
  </div>
</div><!-- End Page Title -->

<!-- Portfolio Details Section -->
<section id="portfolio-details" class="portfolio-details section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <div class="col-lg-8">
        <div class="portfolio-details-slider swiper init-swiper">

          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>

          <div class="swiper-wrapper align-items-center">
            @foreach($project->projectImages as $projectImage)
            <div class="swiper-slide">
              <img src="{{asset('storage/'. $projectImage?->image??'')}}" alt="">
            </div>
            @endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
          <h3>Project information</h3>
          <ul>
            <li><strong>Category</strong>: {{$project->projectCategory->name??''}}</li>
            <li><strong>Client</strong>: {{$project->projectDetail->client??''}}</li>
            <li><strong>Project date</strong>: {{$project->projectDetail->project_date??''}}</li>
            @if($project->projectDetail->project_url)
            <li><strong>Project URL</strong>: <a href="{{$project->projectDetail->project_url}}">{{$project->projectDetail->project_url}}</a></li>
            @endif
          </ul>
        </div>
        <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
            <h2>{{$project->projectDetail->heading}}</h2>
          <p>
          {!!$project->projectDetail->introduction!!}
        </p>
        </div>
      </div>

    </div>

  </div>

</section><!-- /Portfolio Details Section -->

</main>
@stop