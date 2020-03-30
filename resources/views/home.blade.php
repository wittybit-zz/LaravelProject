@extends('layout')
@section('title','Home')
@section('content')
<style type="text/css">
	.slider{
		height: 300px;
	}
	.carousel-slider{
		height: 100%
	}
	.slider img{
		min-height: 100%;
	}
</style>
    <div class="slider container-fluid black hide-on-med-and-up show-on-small">
    	 <div class="carousel carousel-slider">
		    <a class="carousel-item" href="#"><img class="responsive-img" src="https://source.unsplash.com/random/500x300"></a>
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
@endsection
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	   $('.carousel').carousel({fullWidth:false,dist:1,numVisible:3,duration:50,indicators:true});
	    $('.tap-target').tapTarget();
	});
</script>