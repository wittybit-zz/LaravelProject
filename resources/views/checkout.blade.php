
@extends('layout')
@section('title','Check out')
@section('content')
<style type="text/css">
	.input-field input[type=date]:focus + label,
	.input-field input[type=tel]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
      color :var(--primary) !important;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=tel]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 2px solid var(--primary) !important;
      box-shadow: none !important;
    }
    .card-wrapper{
    	transform: scale(0.90)
    }
</style>
<div class="container font1">
	<h4>Checkout</h4>
	<hr>
	<div class="row">
		<div class="col s12 m5">
		<h5 style="font-weight:bold">ORDER SUMMARY</h5>
		<hr>
		<div class="font1 container-fluid grey lighten-2" style="padding:10px 0;">
			<div class="container">
				<h6 class="font1">ORDER TOTAL</h6>
				<hr>
				<p>Sub total: <span class="right subtotal">123</span></p>
				<p>Shipping: <span class="right shipping">123</span></p>
				<p>SGST: <span class="right sgst">123</span></p>
				<p>CGST: <span class="right cgst">123</span></p>
				<div class="divider" style="height: 1px;background-color: #000;margin:10px 0"></div>
				<p>Total: <span class="right total">123</span></p>
				@if(!session()->has('user'))
				Without login you will not be able to checkout
				<a href="/login" style="width: 100%" class="btn black btn-block">login</a>
				@endif
			</div>
		</div>
	</div>
	<div class="col s12 m7">
		<h5 style="font-weight: bold">SHIPPING DETAILS</h5>
		<hr>
		<div class="grey lighten-5">
			<h5 style="padding:10px;margin-top: 5px" class="black lighten-1 white-text">Shipping Address</h5>
			<div class="container" style="padding:1px 10px 10px 4px;">
				<div class='input-field'>
                <input value="{{old('street')}}" class='' type='text' name='street' id="street" />
                <label for='street'>Street</label>
              </div>
              <div class='input-field'>
                <input value="{{old('city')}}" class='' type='text' name='city' id="city" />
                <label for='city'>city</label>
              </div>
              <div class='input-field'>
                <input value="{{old('state')}}" class='' type='text' name='state' id="state" />
                <label for='state'>State</label>
              </div>
              <div class='input-field'>
                <input value="{{old('country')}}" class='' type='text' name='country' id="country" />
                <label for='country'>Country</label>
              </div>
			</div>
		</div>
	</div>
	</div>
	<div class="row payment">
		<h5 style="font-weight:bold">PAYMENT METHODS</h5>
		<ul class="collapsible">
    <li class="active">
      <div class="collapsible-header"><i class="material-icons">credit_card</i>Credit Card/Debit Card</div>
      <div class="collapsible-body">
      	<div class="demo-container row">
        <div class="form-container active col s12 m6">
            <form action="" class="ddc">
		    	<div class='input-field'>
			        <input type='tel' name='number' id="number" />
			        <label for='number'>Card Number</label>
              	</div>
              	<div class='input-field'>
			        <input type='text' name='name' id="name" />
			        <label for='name'>Full Name</label>
              	</div>
              	<div class="row">
              		<div class='input-field col s6'>
			        <input type='tel' name='expiry' id="expiry" />
			        <label for='expiry'>Expiry [MM/YY]</label>
              	</div>
              	<div class='input-field col s6'>
			        <input type='tel' name='cvc' id="cvc" />
			        <label for='cvc'>CVC</label>
              	</div>
              	</div>
            </form>
        </div>
        <div class="card-wrapper col s12 m6"></div>
    </div>
    <div class="row">
    <div class="col s12 m6">
        	<a href="" class="btn blue btn-block">Make Payment</a>
    </div>
	</div>
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">account_balance_wallet
</i>Wallets</div>
      <div class="collapsible-body">
      	  <p>
		    <label>
		      <input class="with-gap" name="group3" type="radio" checked />
		      <span>
		      	<img src="logo/paytm.png" alt="Paytm" height="25px">
		      </span>
		    </label>
		  </p>
		   <p>
		    <label>
		      <input class="with-gap" name="group3" type="radio" checked />
		      <span>
		      	<img src="logo/phonepay.png" alt="Phone Pay" height="25px">
		      </span>
		    </label>
		  </p>
		   <p>
		    <label>
		      <input class="with-gap" name="group3" type="radio" checked />
		      <span>
		      	<img src="logo/gpay.png" alt="Google Pay" height="25px">
		      </span>
		    </label>
		  </p>
		  <div style="text-align: right">
			<a href="" class="btn blue" >Make Payment</a>
		  </div>
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">speaker_phone</i>Internet Banking</div>
      <div class="collapsible-body">
      	<p>
		    <label>
		      <input class="with-gap" name="group3" type="radio" checked />
		      <span>
		      	Punjab National Bank
		      </span>
		    </label>
		  </p>
		   <p>
		    <label>
		      <input class="with-gap" name="group3" type="radio" checked />
		      <span>
		      	State Bank Of India
		      </span>
		    </label>
		  </p>
		   <p>
		    <label>
		      <input class="with-gap" name="group3" type="radio" checked />
		      <span>
		      	Axis Bank
		      </span>
		    </label>
		  </p>
		  <div style="text-align: right">
			<a href="" class="btn blue" >Proceed to Pay</a>
		  </div>
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">
      	<img src="logo/upi.png" width="40px">
      </i>BHIM UPI</div>
      <div class="collapsible-body">
      	<div class='input-field col s12 m6'>
                <input class='' type='text' name='upi' id="upi" />
                <label for='upi'>Enter your virtual Payment Address</label>
        </div><br>
      	<span>
      		<a href="" class="btn blue">Make Payment</a>
      	</span><br>
      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="fa fa-inr fa-2x"></i>Cash on Delivery</div>
      <div class="collapsible-body"><span>Extra Delivery Charge of ₹40 Applicable on COD orders.</span><hr>
		<a href="" class="btn blue">Place Order</a>
      </div>
    </li>
  </ul>
	</div>
</div>
<script type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/121761/card.js"></script>
<script type="text/javascript">
	let data;
	 $(document).ready(function(){
	    updateTotal();
	    $('.collapsible').collapsible();
	    new Card({
            form: document.querySelector('.ddc'),
            container: '.card-wrapper'
        });
	    
  });
	 	function updateTotal(){
		let dd = {};
		if(!localStorage.cart) location.href = "/home";
		let data = JSON.parse(localStorage.cart);
		dd.subtotal = data.reduce((t,a)=>t+a.quantity*a.item.c_price,0)
		if(dd.subtotal>599)
			dd.shipping = 0
		else
			dd.shipping = 40
		dd.sgst = (5/100*dd.subtotal).toFixed(2);
		dd.cgst = (6/100*dd.subtotal).toFixed(2);
		$(".sgst").text(dd.sgst);
		$(".cgst").text(dd.cgst);
		$(".shipping").text(dd.shipping);
		$(".subtotal").text(dd.subtotal);
		let total = 0;
		for(i in dd){
			total+=Number(dd[i]);
		}
		$(".total").text(total);

	}
</script>
@endsection