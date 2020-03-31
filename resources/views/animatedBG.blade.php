@extends('layout')
@section('content')
<link rel="stylesheet" href="{{ URL::asset('CSS/animate.css') }}" />
<div style="background: background-color: #8664c3;">
<div class="hero"> 
  <div class="hero__title">@yield('page')</div>
  <div class="cube"></div>
  <div class="cube"></div>
  <div class="cube"></div>
  <div class="cube"></div>
  <div class="cube"></div>
  <div class="cube"></div>
</div>
</div>
@endsection