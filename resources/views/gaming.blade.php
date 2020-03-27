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
    padding:0px !important;
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

  .description{
    font-size:3vmin!important;
  }
  .card-title{
    font-size: 16px !important;
  }
  .btn{
    /* text-decoration: none !important; */
    text-transform: capitalize;
  }
  .img-container img {
    padding:10px;
    height: 200px;
    width: 200px;
    box-shadow: 0 0 5px grey;
  }
  .thumbs img{
    padding:2px;
    height: 50px;
    width: 50px;
    cursor: pointer;
    border:1px solid lightgrey;
    border-radius: 2px;
  }
  .thumbs img:hover{
    border-color: var(--accent);
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
        <span class="card-title activator grey-text text-darken-4 made-responsive">{{$item['name']}}<br>
        @if($item['o_price']!=$item['c_price'])
        <strike>₹{{$item['o_price']}}</strike>
        <font style="color:red">₹{{$item['c_price']}}</font>
        @else
        ₹{{$item['c_price']}}
        @endif

      </span>
        <div class="card-action">
          <a href="#modal1" class="btn btn-block accent modal-trigger">Add to cart</a>
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
<div id="modal1" class="modal">
    <div class="modal-content center">
      <h4>Modal Header</h4>
      <div class="img-container">
        <img loading="lazy" src="https://source.unsplash.com/random/200x200">
      </div>
      <div class="thumbs">
        <img src="https://source.unsplash.com/random/201x200">
        <img src="https://source.unsplash.com/random/200x201">
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-accent btn-flat">Close</a>
    </div>
  </div>
  <script type="text/javascript">
      $(document).ready(function(){
        $('.modal').modal();
        $(".thumbs img").click((e)=>{
          $(".img-container img").attr('src',e.target.src)
        })
      });
  </script>
<!--ending row-->
@endsection