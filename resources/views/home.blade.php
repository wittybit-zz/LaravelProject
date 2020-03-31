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

	@font-face {
		font-family: 'Material Icons';
		font-style: normal;
		font-weight: 400;
		src: local('Material Icons'), local('MaterialIcons-Regular'), url(https://fonts.gstatic.com/s/materialicons/v18/2fcrYFNaTjcS6g4U3t-Y5ZjZjT5FdEJ140U2DJYC3mY.woff2) format('woff2');
	}

	.material-icons {
		font-family: 'Material Icons';
		font-weight: normal;
		font-style: normal;
		font-size: 24px;
		line-height: 1;
		letter-spacing: normal;
		text-transform: none;
		display: inline-block;
		white-space: nowrap;
		word-wrap: normal;
		direction: ltr;
	}

	.middle-indicator {
		position: absolute;
		top: 50%;
	}

	.middle-indicator-text {
		font-size: 4.2rem;
	}

	a.middle-indicator-text {
		color: white !important;
	}

	.content-indicator {
		width: 64px;
		height: 64px;
		background: none;
		-moz-border-radius: 50px;
		-webkit-border-radius: 50px;
		border-radius: 50px;
	}

	.indicators {
		visibility: hidden;
	}

	.carouselContainer {
		width: 97vw;
	}
</style>
<h5 class="center" style="text-transform: uppercase;">
	Bestselling Products
</h5>
<div id="carouselContainer" class="hide-on-med-and-down">
	<div class="carousel carousel-slider center" style="width: 97vw;margin:auto">
		<div class="carousel-fixed-item center middle-indicator">
			<div class="left">
				<a href="#carouselContainer" onclick="movePrevCarousel()" class="middle-indicator-text waves-effect waves-light content-indicator"><i class="material-icons left  middle-indicator-text">chevron_left</i></a>
			</div>

			<div class="right">
				<a href="#carouselContainer" onclick="moveNextCarousel()" class="middle-indicator-text waves-effect waves-light content-indicator">
					<i class="material-icons right middle-indicator-text">chevron_right</i>
				</a>
			</div>

			<!-- <a class="btn waves-effect indigo white-text darken-text-2">Explore</a> -->

		</div>

		<a class="carousel-item red white-text" href="#one!">
			<h2>PlayStation 4</h2>
			<p class="white-text">The best selling console on the planet</p>
		</a>
		<a class="carousel-item amber white-text" href="#two!">
			<h2>Wrangler Jeans</h2>
			<p class="white-text">The timeless classic</p>
		</a>
		<a class="carousel-item green white-text" href="#three!">
			<h2>Dan Brown's Digital Fortress</h2>
			<p class="white-text">New York Bestseller Fiction</p>
		</a>
		<a class="carousel-item blue white-text" href="#four!">
			<h2>IKEA Office Table</h2>
			<p class="white-text">For your office needs</p>
		</a>
	</div>
</div>

<div class="slider container-fluid black hide-on-med-and-up show-on-small">
	<div class="carousel carousel-slider">
		<a class="carousel-item" href="#"><img class="responsive-img" src="https://source.unsplash.com/random/500x550"></a>
		<a class="carousel-item" href="#"><img class="responsive-img" src="https://source.unsplash.com/random/500x551"></a>
		<a class="carousel-item" href="#"><img class="responsive-img" src="https://source.unsplash.com/random/501x550"></a>
		<a class="carousel-item" href="#"><img class="responsive-img" src="https://source.unsplash.com/random/501x551"></a>
		<a class="carousel-item" href="#"><img class="responsive-img" src="https://source.unsplash.com/random/500x552"></a>
	</div>
</div>
<div>
	<h5 class="center" style="text-transform: uppercase;">
		Categories
	</h5>
</div>
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
	document.addEventListener('DOMContentLoaded', function() {
		var carouselElems = document.querySelector('.carousel.carousel-slider');
		var carouselInstance = M.Carousel.init(carouselElems, {
			fullWidth: true,
			indicators: true
		});
	});

	function moveNextCarousel() {
		var elems = document.querySelector('.carousel.carousel-slider');
		var moveRight = M.Carousel.getInstance(elems);
		moveRight.next(1);
	}

	function movePrevCarousel() {
		var elems = document.querySelector('.carousel.carousel-slider');
		var moveLeft = M.Carousel.getInstance(elems);
		moveLeft.prev(1);
	}
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