@extends('layouts.app')

@section('content')

        <!-- Slider main wrapper -->
<div class="swiper-container-wrapper">
    <!-- Slider main container -->
    <div class="swiper-container gallery-top">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <div class="title">Slide 1</div>
          <div class="description">Lorem ipsum dolor sit amet</div>
        </div>
        <div class="swiper-slide">
          <div class="title">Slide 2</div>
          <div class="description">Lorem ipsum dolor sit amet</div>
        </div>
        <div class="swiper-slide">
          <div class="title">Slide 3</div>
          <div class="description">Lorem ipsum dolor sit amet</div>
        </div>
        <div class="swiper-slide">
          <div class="title">Slide 4</div>
          <div class="description">Lorem ipsum dolor sit amet</div>
        </div>
        <div class="swiper-slide">
          <div class="title">Slide 5</div>
          <div class="description">Lorem ipsum dolor sit amet</div>
        </div>
        <div class="swiper-slide">
          <div class="title">Slide 6</div>
          <div class="description">Lorem ipsum dolor sit amet</div>
        </div>
      </div>
      <!-- Add Arrows -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
    <!-- Slider thumbnail container -->
    <div class="swiper-container gallery-thumbs">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">Slide 1</div>
        <div class="swiper-slide">Slide 2</div>
        <div class="swiper-slide">Slide 3</div>
        <div class="swiper-slide">Slide 4</div>
        <div class="swiper-slide">Slide 5</div>
        <div class="swiper-slide">Slide 6</div>
      </div>
    </div>
  </div>
  <script>

$(document).ready(function () {
  var galleryThumbs = new Swiper(".gallery-thumbs", {
    direction: "horizontal",
    spaceBetween: 10,
    slidesPerView: 3,
    freeMode: false,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    breakpoints: {
      480: {
        direction: "vertical",
        slidesPerView: 3,
      }
    }
  });
  var galleryTop = new Swiper(".gallery-top", {
    direction: "horizontal",
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
    thumbs: {
      swiper: galleryThumbs
    }
  });
});

</script>
          @include('includes.footer')