@extends('layout')
@section('title','Gaming')
@section('content')
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

  .made-responsive{
    font-size:5vmin!important;
  } 
  /* added custom css */

  .card-action{
    font-size:3vmin;
  }
  /* added custom css */

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

  .display-card{
    height:400px;
  }

  .description{
    font-size:3vmin!important;
  }
  /* added custom css */


</style>
<div class="row">
  @foreach($data as $item)
  <!-- <div class="col l3 m4 s6 display-card">
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
        </div> -->
  <div class="col l3 m4 s6 display-card">
    <div class="card sticky-action">
      <div class="card-image waves-effect waves-block waves-light">
        <img img-fix class="activator" src="{{$item['link']}}">
      </div>
      <div class="card-content black-text">
        <span class="card-title activator grey-text text-darken-4 made-responsive">{{$item['name']}}</span>
        <div class="card-action">
          <a href="#">This is a link</a>
          <!-- <a href="#">This is a link</a> -->
        </div>
      </div>



      <div class="card-reveal" style="display: none; transform: translateY(0%);">
        <span class="card-title grey-text text-darken-4 description">{{$item['name']}}<i class="material-icons right">close</i></span>
        <p>{{$item['description']}}</p>
      </div>
    </div>

  </div>

  @endforeach
</div>
<!--ending row-->
@endsection