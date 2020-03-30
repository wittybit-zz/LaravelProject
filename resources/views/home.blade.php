@extends('layout')
@section('title','Home')
@section('content')
<style type="text/css">
	.slider{
		height: 300px;
	}
	.slider .carousel-slider{
		height: 100%
	}
	.slider img{
		min-height: 100%;
	}
	.slider2{
		height:100px;
	}
	.carousel-item{
		min-height: 0 !important;
	}
	.slider2 .carousel-item{
		width: 100px !important;
		background:grey;
		border-radius: 5px;
		overflow: hidden;
	}
	.slider2 .card{
		margin:0 !important;
	}
	.slider2 .card-title{
		font-size: 14px;
		background:#00000080;
		padding: 0 !important;
		width: 100%;
		text-align: center;
	}
</style>
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
	$(document).ready(function(){
	   $('.slider2').carousel({dist:2,padding:40});
	   $('.slider .carousel').carousel({dist:1,numVisible:3,duration:50,indicators:true});
	    $('.tap-target').tapTarget();
	});
</script>