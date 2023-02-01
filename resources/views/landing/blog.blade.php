@extends('landing.layouts.header')

@section('title')
    Blog
@endsection

@section('content')
<div class="hero overlay" style="background-image: url('{{asset('soccer-master/images/bg_3.jpg')}}');">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 mx-auto text-center">
          <h1 class="text-white">Blog Posts</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur.</p>
        </div>
      </div>
    </div>
  </div>

  
  
  <div class="container site-section">
    <div class="row">
      <div class="col-6 title-section">
        <h2 class="heading">Latest Blog</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="custom-media d-block">
          <div class="img mb-4">
            <a href="single.html"><img src="{{asset('soccer-master/images/img_1.jpg')}}" alt="Image" class="img-fluid"></a>
          </div>
          <div class="text">
            <span class="meta">May 20, 2020</span>
            <h3 class="mb-4"><a href="#">Romolu to stay at Real Nadrid?</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
            <p><a href="#">Read more</a></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="custom-media d-block">
          <div class="img mb-4">
            <a href="single.html"><img src="{{asset('soccer-master/images/img_3.jpg')}}" alt="Image" class="img-fluid"></a>
          </div>
          <div class="text">
            <span class="meta">May 20, 2020</span>
            <h3 class="mb-4"><a href="#">Romolu to stay at Real Nadrid?</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
            <p><a href="#">Read more</a></p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 mb-4">
        <div class="custom-media d-block">
          <div class="img mb-4">
            <a href="single.html"><img src="{{asset('soccer-master/images/img_1.jpg')}}" alt="Image" class="img-fluid"></a>
          </div>
          <div class="text">
            <span class="meta">May 20, 2020</span>
            <h3 class="mb-4"><a href="#">Romolu to stay at Real Nadrid?</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
            <p><a href="#">Read more</a></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="custom-media d-block">
          <div class="img mb-4">
            <a href="single.html"><img src="{{asset('soccer-master/images/img_3.jpg')}}" alt="Image" class="img-fluid"></a>
          </div>
          <div class="text">
            <span class="meta">May 20, 2020</span>
            <h3 class="mb-4"><a href="#">Romolu to stay at Real Nadrid?</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
            <p><a href="#">Read more</a></p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 mb-4">
        <div class="custom-media d-block">
          <div class="img mb-4">
            <a href="single.html"><img src="{{asset('soccer-master/images/img_1.jpg')}}" alt="Image" class="img-fluid"></a>
          </div>
          <div class="text">
            <span class="meta">May 20, 2020</span>
            <h3 class="mb-4"><a href="#">Romolu to stay at Real Nadrid?</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
            <p><a href="#">Read more</a></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="custom-media d-block">
          <div class="img mb-4">
            <a href="single.html"><img src="{{asset('soccer-master/images/img_3.jpg')}}" alt="Image" class="img-fluid"></a>
          </div>
          <div class="text">
            <span class="meta">May 20, 2020</span>
            <h3 class="mb-4"><a href="#">Romolu to stay at Real Nadrid?</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
            <p><a href="#">Read more</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-7 text-center">
        <div class="custom-pagination">
          <a href="#">1</a>
          <span>2</span>
          <a href="#">3</a>
          <a href="#">4</a>
          <a href="#">5</a>
        </div>
      </div>
    </div>
  </div>
@endsection