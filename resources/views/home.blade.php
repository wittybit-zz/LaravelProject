@extends('layout')
@section('title','Home')
@section('content')
<style type="text/css">
	.slider {
		height: 300px;
	}

	.slider .carousel-slider {
		height: 100%;
	}

	.slider img {
		min-height: 100%;
	}

	.slider2 {
		height: 100px;
	}

	.carousel-item {
		min-height: 0 !important;
	}

	.slider2 .carousel-item {
		width: 100px !important;
		background: grey;
		border-radius: 5px;
		overflow: hidden;
	}

	.slider2 .card {
		margin: 0 !important;
	}

	.slider2 .card-title {
		font-size: 14px;
		background: #00000080;
		padding: 0 !important;
		width: 100%;
		text-align: center;
	}


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
	
	.transparent_caption{
		background:#00000080 !important;
		width:auto !important;
		margin-left: 50%;
		transform:translateX(-50%);
		padding:20px;
}


	
</style>
<h5 class="center" style="text-transform: uppercase;">
	Bestselling Products
</h5>

<div class="slider hide-on-med-and-down show-on-large" >
        <ul class="slides">
			@foreach($products as $product)
            <li class="center">
                <img src="{{ $product['image'] }}">
                <div class="caption center">
					<div class="transparent_caption">
					<h3>{{$product['name']}}</h3>
					<h5 class="light grey-text text-lighten-3">{{$product['heading']}}</h5>
					<a class="waves-effect waves-accent btn" href="{{$product['link']}}">Explore</a>
					</div>
                </div>
            </li>
            <!-- <li>
                <img src="{{ URL::asset('Images/nike.jpg') }}">
                <div class="caption center-align">
                   <div class="transparent_caption">
				   <h3>Nike Sneakers</h3>
					<h5 class="light grey-text text-lighten-3">Maximum style, maximum comfort</h5>
					<a class="waves-effect waves-accent btn">Explore</a>
				   </div>
                </div>
            </li>
            <li>
                <img src="{{ URL::asset('Images/furniture.jpg') }}">
                <div class="caption center-align">
                    <h3>Designer Furniture</h3>
					<h5 class="light grey-text text-lighten-3">Make your house feel like home</h5>
					<a class="waves-effect waves-accent btn">Explore</a>
                </div>
            </li>
            <li>
                <img src="{{ URL::asset('Images/cosmetics.jpg') }}">
                <div class="caption center-align">
                    <h3>The Honest Company</h3>
					<h5 class="light grey-text text-lighten-3">Makeup for  every occasion</h5>
					<a class="waves-effect waves-accent btn">Explore</a>
                </div>
			</li> -->
			@endforeach
        </ul>
    </div>

<div class="slider container-fluid black hide-on-med-and-up show-on-small">
	<div class="carousel carousel-slider">
		<a class="carousel-item" href="#"><img class="responsive-img" src="https://source.unsplash.com/random/200x230"></a>
		<a class="carousel-item" href="#"><img class="responsive-img" src="https://source.unsplash.com/random/200x201"></a>
		<a class="carousel-item" href="#"><img class="responsive-img" src="https://source.unsplash.com/random/201x200"></a>
		<a class="carousel-item" href="#"><img class="responsive-img" src="https://source.unsplash.com/random/201x201"></a>
		<a class="carousel-item" href="#"><img class="responsive-img" src="https://source.unsplash.com/random/200x202"></a>
	</div>
</div>
<div>
	<h5 class="center" style="text-transform: uppercase;">
		Categories
	</h5>
</div>

<!-- Desktop devices -->
<div class="row">
    @foreach($category as $item)
    <div class="col l4 m4 s6 display-card">
      <a href="{{$item['path']}}" class="nav-link">
        <div class="card cardHover">
          <div class="card-image waves-effect waves-block waves-light">
            <img img-fix src="{{$item['link']}}/300x300" alt="image">
          </div>
          <div class="card-content black-text">
            {{$item['name']}}
          </div>
        </div>
      </a>
    </div>
    @endforeach
  </div>




<!-- Moible devices -->
<div class="container-fluid hide-on-med-and-up show-on-small">
	<div class="slider2 carousel carousel-slider">
		@foreach($category as $item)
		<div class="carousel-item white black-text" href="#">
			<a href="{{$item['path']}}" class="waves-effect waves-accent card" style="height: 100%;width: 100%">
				<div class="card-image">
					<img src="{{$item['link']}}/100x100">
					<span class="card-title">{{$item['name']}}</span>
				</div>
			</a>
		</div>
		@endforeach
	</div>
</div>
@endsection
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
	//desktop carousel navigation function
	$(document).ready(function () {
            $('.slider').slider();
        });
	//mobile view carousel
	$(document).ready(function() {
		$('.slider2').carousel({
			dist: 2,
			padding: 40
		});
		$('.slider .carousel').carousel({
			dist: 1,
			numVisible: 3,
			duration: 50,
			indicators: true
		});
		$('.tap-target').tapTarget();
	});
</script>