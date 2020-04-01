
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

  <div class="carousel carousel-slider center" style="width: 97vw;margin:auto">
    <div class="carousel-fixed-item center">
      <a class="btn waves-effect indigo white-text darken-text-2">Explore</a>
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
      <a href="{{$item['path']}}" class="nav-link">
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
</div>