@extends('layout')
@section('content')
<div class="container font1">
  <div class="show-on-med-and-down" style="margin:0px;padding:10px"></div>
  <h5 style="font-weight: bold">Thank you for placing order</h5>
  <div class="card">
        <div class="card-content font1">
          <h5>Your order number is <kbd>{{rand(111111,999999)}}</kbd></h5>
          <p>You will receive a confirmation mail on {{session('user')->email}}</p>
          <hr>
          <p>Expected Delivery by</p>
          <h5 class="green-text">{{Date('d M Y', strtotime("+3 days"))}}</h5>
        </div>
        <div class="card-action">
          <a href="/download">Download Invoice</a>
        </div>
      </div>
</div>  
@endsection
