@extends('layout')
@section('title','Carts')
@section('content')
<style type="text/css">
	.p-container p{
		margin:0 !important;
		padding: 0 !important;
	}
	.p-container{
		display: flex;
		height: 200px;
	}
	.p-image{
		flex:2;
		overflow: hidden;
		background: #fff;
	}
	.p-image img{
		min-height: 100%;min-width: 100%;
		max-width: 100%;
	}
	.p-desc{
		flex:5;
	}
	.btn-grp{
		display: flex;
		max-width: 120px;
	}
	.grp-item{
		flex:1;
		font-weight: bold;
		display: flex;
		align-items: center;
		justify-content: center;
	}
	.btn1{
		padding:10px;
		color:#fff;
		border:none;
	}
	.quantity{
		flex:2;
	}
	.section{
		margin-top: 10px;
	}
	.modal-footer{
		padding:0 !important;
		margin:0 !important;
		height: auto !important;
	}
	.modal-footer a{
		border-radius: 0 !important;
		margin:0 !important;
	}
	@media only screen and (max-width: 600px) {
		.p-container{
			height: 150px !important;
		}
	}
</style>
<div class="container-fluid row font1">
	<div class="col s12 m7">
		<h5 style="font-weight:bold">MY BAG</h5>
		<hr>
		<div class="products">
			
		</div>
	</div>
	<div class="col s12 m5">
		<h5 style="font-weight:bold">ORDER SUMMARY</h5>
		<hr>
		<div class="font1 container-fluid grey lighten-2" style="padding:10px 0;">
			<div class="container">
				<h6 class="font1">ORDER TOTAL</h6>
				<hr>
				<p>Sub total: <span class="right">123</span></p>
				<p>Shipping: <span class="right">123</span></p>
				<p>SGST: <span class="right">123</span></p>
				<p>CGST: <span class="right">123</span></p>
				<button style="width: 100%" class="btn primary btn-block">Checkout</button>
			</div>
		</div>
	</div>
	<div id="modal1" class="modal small">
    <div class="modal-content">
      <h5>Remove from Cart</h5>
      <p>Are you sure you want to remove the product from cart ?</p>
    </div>
    <div class="modal-footer center" style="display: flex;">
      <a href="#!" style="flex: 1" class="center indigo lighten-5 col modal-close waves-effect white-indigo btn-flat">Yes</a>
      <a href="#!" style="flex: 1" class=" center primary col modal-close waves-effect white-text waves-primary btn-flat">No</a>
    </div>
  </div>
</div> 
<script type="text/javascript">
	 $(document).ready(function(){
    $('.modal').modal();
    showAllItems();
  });
	function showAllItems(){
		if(!localStorage.cart){
			return;
		}
		let data = JSON.parse(localStorage.cart);
		let html = ""
		data.forEach((e,i)=>{
			html+= `
<div class="p-container" id='i${i+1}'>
	<div class="p-image">
		<img class="materialboxed" src="${e.item.link}">
	</div>
	<div class="p-desc" style="position:relative;">
		<a href="#modal1" style="position: absolute;right: 0;bottom:0" class="close right red modal-trigger waves-effect btn-floating btn-flat">
			<i class="material-icons">delete</i>
		</a>
	<section class="section container col s12 m4">
		<p class="font-weight-bold p-name">${e.item.name}</p>
		<p>${e.item.description}</p>
	</section>
	<section class="section container col s12 m3">
		<p>₹ ${e.item.c_price}</p>
	</section>
	<section class="section container col s12 m4 center">
		<div class="btn-grp">
			<button class="btn1 primary grp-item">-</button>
			<p class="grp-item quantity">${e.quantity}</p>
			<button class="btn1 primary grp-item">+</button>
		</div>
	</section>

	</div>
</div>
<hr>
			`
		})
	$(".products").html(html);
	$(".btn1").click(e=>{
		console.log($(".btn1").index(e.target));
	})
	$('.materialboxed').materialbox();
	}
</script>  
@endsection
