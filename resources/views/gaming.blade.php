@extends('layout')
@section('title','Explore Products')
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
    transform: scale(1);
    transform-origin: top left;
    position: absolute;
  }


  @media only screen and (max-width: 600px) {
    .card-image {
      max-height: 130px;
    }
  }

  .description{
    font-size:3vmin!important;
  }
  .card-title{
    font-size: 16px !important;
    
  }
  .card-image .card-title{
    padding:0 5px !important;
    background-color: #00000099;
    font-size: 1.2em !important;
    font-family: sans-serif;
    width: 100%;
  }
  .btn{
    /* text-decoration: none !important; */
    text-transform: capitalize;
  }
  .img-container img{
    max-height:350px;
    max-width: 100%;
    cursor: zoom-in;
    overflow: hidden;
    transition: .2s;
  }
  .img-c{
    padding:10px;
    height: 100%;
    display: flex;
    align-items: center;
    overflow: auto;
  }
  .thumbs img{
    padding:2px;
    height: 50px;
    width: 50px;
    cursor: pointer;
    border:1px solid lightgrey;
    border-radius: 2px;
    margin:10px;
  }
  .thumbs img:hover{
    border-color: var(--accent);
  }
  .zoom-in{
    transform-origin: left top;
    transform:scale(2);
    transition: .5s;
    cursor: move;
  }
  .modal{
    background: #fff;
  }
  .modal-content{
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .showcase{
    display: flex;
    overflow: none;
  }
  .details{
    flex:2;
  }
  .img-container{
    flex:4;
  }
  /* added custom css */


</style>
<div class="show-on-medium" style="margin:0px 0;padding: 5px"></div>
<div class="container-fluid">
  <h4 style="margin-left:10px;font-weight: bold;text-transform: capitalize;">Category: {{$category}}</h4>
</div>
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
        <div class="card-title">{{$item['name']}}</div>
      </div>
      <div class="card-content black-text">
        <span class="card-title activator grey-text text-darken-4 made-responsive">
        @if($item['o_price']!=$item['c_price'])
        <strike>₹{{$item['o_price']}}</strike>
        <font style="color:red">₹{{$item['c_price']}}</font>
        @else
        ₹{{$item['c_price']}}
        @endif

      </span>
        <div class="card-action">
          <a href="#modal1" onclick="add(`{{json_encode($item)}}`)" class="btn btn-block accent modal-trigger">View</a>
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
<div id="modal1" class="modal modal-fixed-footer">
  <a style="font-size: 150%;position:sticky;top:0" href="#!" class="modal-close right red-text btn-flat waves-effect waves-red">
    <i class="material-icons">close</i>
  </a>
    <div class="modal-content center">
      <div class="showcase">
        <div class="img-container center">
       
      </div>
      <div class="details">
        <div class="thumbs">
      </div>
      <div class="hide-on-small-only">
        <h5 class="product">Product Name</h5>
        <p class="desc">Description of the product</p>
        <p class="price"></p>
        <div class="controlls row">
        <button class="btn btn-outline-primary q-sub">-</button>
        <span class="btn-flat quantity">1</span>
        <button class="btn btn-outline-primary q-add">+</button>
        </div>
      </div>
      </div>
      </div>
      <div class="hide-on-med-and-up" style="text-align: left">
        <h5 class="product">Product Name</h5>
        <p class="desc">Description of the product</p>
        <p class="price"></p>
        <div class="controlls row">
        <button class="btn btn-outline-primary q-sub">-</button>
        <span class="btn-flat quantity">1</span>
        <button class="btn btn-outline-primary q-add">+</button>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <div class="hide-on-large-only">
        <a class="btn btn-block primary cart-add">Add to Cart</a>
      </div>
      <div class="hide-on-med-and-down">
        <a class="btn orange darken-4">Add to Favourites</a>
        <a class="btn primary cart-add">Add to Cart</a>
      </div>
    </div>
  </div>
  <script type="text/javascript">
      $(document).ready(function(){
        $('.modal').modal();
      });
      function add(str){
        let category = "{{$category}}";
        let quantity = 1;
        $(".quantity").text(1);
        let item = JSON.parse(str);
        let thumbs = item.thumbs
        $(".product").text(item.name)
        $(".desc").text(item.description)
        $(".cart-add").unbind('click');
        $(".q-add").click(e=>{
          if(quantity>=50) return;
          quantity++;
          $(".quantity").text(quantity);
        })
        $(".q-sub").click(e=>{
          if(quantity<=1) localStorage.clear();
          quantity--;
          $(".quantity").text(quantity);
        })
        $(".cart-add").click(function(){
          addItemToCart(category,item,quantity);
          $(".cart-add").text("Added to Cart").removeClass("primary").addClass("green");
          let html = `
          Added to Cart<a href="/cart" class="btn-flat toast-action waves-effect green-text">Go to Cart</a>
          `
          $(".toast").hide();
          M.toast({html,displayLength:10000})
          $(".cart-add").unbind('click');
        })
        $(".cart-add").text("Add to Cart").addClass("primary").removeClass("disabled");
        if(isAreadyAdded(category,item.id)){
          $(".cart-add").text("Already Added").removeClass("green").addClass("disabled");
        }
        if(item.o_price == item.c_price)
        $(".price").text("Price: ₹"+item.o_price)
        else
        $(".price").html(`Price: <strike>₹${item.o_price}</strike><br>Deal Price: <font style="color:red">₹${item.c_price}</font>`);
        thumbs = thumbs.map(e=>{
          return `<img loading="lazy" src="${e}">`
        })
        $(".thumbs").html(thumbs);
        $(".img-container").html(`<div class='img-c'>${thumbs[0]}</div> `);
        $(".img-container img").click((e)=>{
          $(e.target).toggleClass('zoom-in');
        })
        $(".thumbs img").click((e)=>{
          $(".img-container img").attr('src',e.target.src)
          $(".img-container img").removeClass('zoom-in');
        })
      }
  </script>
<!--ending row-->
@endsection