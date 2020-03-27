<div class="indigo lighten-5">
{{-- <<<<<<< HEAD
    <style type="text/css">
        .card-image{
            height: 200px;
            max-height: 200px;
            overflow: hidden;
            padding: 10px;
        }
        .card .card-content{
            padding: 12px !important;
        }
        .card-image img{
            transform: scale(1.5);
            position: absolute;
        }
        @media only screen and (max-width: 600px) {
          .card-image{
            max-height: 100px;
            overflow: hidden;
        }
        }
    </style>
    @extends('layout')
    @section('title','Categories')
    @section('content')
        <h5 class="card-title">Categories Page</h5>
        <div class="slider" style="width: 97vw;margin:10px 0;margin:10px auto;">
    <ul class="slides">
        <li>
            <img src="http://lorempixel.com/580/250/nature/1"> random image
            <div class="caption center-align">
                <h3>This is our big Tagline!</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
        </li>
        <li>
            <img src="http://lorempixel.com/580/250/nature/2"> random image
            <div class="caption left-align">
                <h3>Left Aligned Caption</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
        </li>
        <li>
            <img src="http://lorempixel.com/580/250/nature/3"> random image
            <div class="caption right-align">
                <h3>Right Aligned Caption</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
        </li>
        <li>
            <img src="http://lorempixel.com/580/250/nature/4"> random image
            <div class="caption center-align">
                <h3>This is our big Tagline!</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
        </li>
    </ul>
</div>

        <div class="row">
            @foreach($data as $item)
            <div class="col l3 m4 s6 display-card">
                <a href="signup.html" target="_blank" class="nav-link">
                <div class="card cardHover">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img img-fix src="{{$item['link']}}" alt="image">
                    </div>
                    <div class="card-content black-text">
                        {{$item['name']}}
                    </div>
                </div> 
                </a>     
            </div>
            @endforeach
        </div>ending row
    @endsection
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(()=>{
            $('.slider').slider({
    full_width: true,
    interval: 3000
});

$('.slider').slider('pause');

$('#nextBtn').click(function(){
    $('.slider').slider('start');
    setTimeout(function(){
        $('.slider').slider('pause');
    },800);
});
        })
    </script>
======= --}}
  <style type="text/css">
    .card-image {
      height: 200px;
      max-height: 200px;
      overflow: hidden;
      padding: 10px;
    }

    .card .card-content {
      padding: 12px !important;
    }

    .card-image img {
      transform: scale(1.5);
      position: absolute;
    }

    @media only screen and (max-width: 600px) {
      .card-image {
        max-height: 100px;
        overflow: hidden;
      }
    }
  </style>
  @extends('layout')
  @section('title','Categories')
  @section('content')

  <div class="carousel carousel-slider center" style="width: 97vw;margin:auto; margin-top:25px;">
    <div class="carousel-fixed-item center">
      <a class="btn waves-effect white grey-text darken-text-2">button</a>
    </div>
    <div class="carousel-item red white-text" href="#one!">
      <h2>First Panel</h2>
      <p class="white-text">This is your first panel</p>
    </div>
    <div class="carousel-item amber white-text" href="#two!">
      <h2>Second Panel</h2>
      <p class="white-text">This is your second panel</p>
    </div>
    <div class="carousel-item green white-text" href="#three!">
      <h2>Third Panel</h2>
      <p class="white-text">This is your third panel</p>
    </div>
    <div class="carousel-item blue white-text" href="#four!">
      <h2>Fourth Panel</h2>
      <p class="white-text">This is your fourth panel</p>
    </div>
  </div>
  <div class="row">
    @foreach($category as $item)
    <div class="col l3 m4 s6 display-card">
      <a href="/categories/{{$item['name']}}" target="_blank" class="nav-link">
        <div class="card cardHover">
          <div class="card-image waves-effect waves-block waves-light">
            <img img-fix src="{{$item['link']}}" alt="image">
          </div>
          <div class="card-content black-text">
            {{$item['name']}}
          </div>
        </div>
      </a>
    </div>
    @endforeach
  </div>
  <!--ending row-->
  @endsection
  <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.carousel');
      var instances = M.Carousel.init(elems, {
        fullWidth: true,
        indicators: true
      });
    });
  </script>
{{-->>>>>>> d2c1166d9cd8c802b10375f73a1b840f0b6454ca--}}
</div>