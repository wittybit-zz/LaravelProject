<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified JQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Compiled Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    

    <!-- Font Awesome CDN -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('CSS/style.css') }}" />

    <title>@yield('title','Layout')</title>
    <style type="text/css">
       #form1 .label-icon i{
        margin-top:50%;
        transform: translateY(-25%);
      } 
      #form1 .input-field{
        height: 55px;
        top:50%;
        transform:translateY(-50%);
      }
    </style>
    

</head>
<body>
<div id="navigation">
  <nav>
      <div class="nav-wrapper header">
        <a href="/home" class="brand-logo">
          <span>Shopper&nbsp;Street</span>
        </a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        
        
        <ul class="right hide-on-med-and-down">
          <li><a href="/home" title="Home" class="navItem"><i class="material-icons">home</i></a></li>
          <li><a href="/categories"  title="Categories" class="navItem"><i class="material-icons">format_list_bulleted</i></a></li>
          <li style="position: relative;"><a href="/cart" title="Cart" class="navItem"><i class="material-icons">shopping_cart</i></a>
          <div class="cart-value-text cart-value hide"></div>
          </li>
          @if(session()->has('user'))
          <li><a href="/logout"  title="Logout" class="navItem"><i class="material-icons">exit_to_app</i></a></li>
          @else
          <li><a href="/login"  title="Login / SignUp" class="navItem"><i class="material-icons">fingerprint</i></a></li>
          @endif
          <li><a href="/contact"  title="Contact" class="navItem"><i class="material-icons">call</i></a></li>
        </ul>

        <form id="form1" class="hide-on-med-and-down" >
          <div class="input-field" style="max-width: 40vw">
            <input id="search deskbar" type="search" required placeholder="Search for Products" title="Search for Products" onblur="clearText()">
            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
            <i class="material-icons">close</i>
            <div id="searchResults" ></div>
          </div>
        </form>
      </div>
        
    <nav class=" nav-wrapper header hide-on-large-only no-shadows" id="mobile-search-bar">
    <form id="form2" class="show-on-med-and-down">
          <div class="input-field" >
            <input id="search-mobile" type="search" required placeholder="Search for Products" title="Search for Products" onblur="clearText()">
            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
            <i class="material-icons">close</i>
            <div id="searchResults" ></div>
          </div>
        </form>
    </nav>

    <ul class="sidenav header" id="mobile-demo">
      <li class="accent" style="padding-top: 10px;">
        <div class="container" style="font-size:18px">
          @if(session()->has('user'))
          <i style="font-size: 48px;margin:0" class="large material-icons row">account_box</i>
          <div style="width: 100%" class="waves-effect row">
            <span class="col s10">Hello, {{session()->get('user')->name}}</span><span style="padding-top: 10px;" class="col s1 material-icons">arrow_forward</span>
          </div>
          @else
          <div style="width: 100%" class="row">
            <div class="row">
            <button class="btn indigo darken-1 col s5 waves-effect" onclick="location.href='/login'">Login</button>
            <button class="btn indigo lighten-4 col s6 offset-s1 waves-effect grey-text text-darken-4" onclick="location.href='/signup'">Register</button>
            </div>
          </div>
          @endif
        </div>
      </li>
          <li><a href="/home" class="waves-effect waves-accent icon-white">Home<i class="material-icons icon-white">home</i></a></li>
          <li><a href="/categories" class="waves-effect waves-accent icon-white">Categories<i class="material-icons icon-white">format_list_bulleted</i></a></li>
          <li><a href="/cart" class="waves-effect waves-accent icon-white">Cart<i class="material-icons icon-white">shopping_cart</i>
          <span class="cart-value-text cart-value hide right" style="top:50%;transform:translateY(-50%);right: 10%;border-radius: 5px">5</span>
          </a>
          </li>
          <hr>
          <li><a href="/contact" class="waves-effect waves-accent icon-white">Contact Us<i class="material-icons icon-white">email</i></a></li>
          <li><a href="/login" class="waves-effect waves-accent icon-white">FAQs<i class="material-icons icon-white">question_answer</i></a></li>
          <hr>
          @if(session()->has('user'))
          <li><a href="/logout" class="waves-effect waves-accent icon-white">Logout<i class="material-icons icon-white">exit_to_app</i></a></li>
          @endif
    </ul>

    <div class="fixed-action-btn horizontal hide-on-large-only">
    <a class="btn-floating btn-large accent waves-effect waves-light">
      <i class="large material-icons">shopping_cart</i>
    </a>
    <div class="cart-value-text cart-value hide">5</div>
    <ul>
      <li><a href="/checkout"class="btn-floating red " title="Check Out"><i class="material-icons">attach_money</i></a></li>
      <li><a href="/cart"class="btn-floating yellow darken-1" title="View Cart"><i class="material-icons">format_list_bulleted</i></a></li>
    </ul>
  </div>
</div>

<div id="content">
  <div class="hide-on-large-only" style="margin:18px 0;padding: 10px"></div>
  @yield('content')
</div>

<footer class="page-footer black">
          <div class="container">
            <div class="row">
              <div class="col l3 s12">
                <h5 class="white-text">Shopper Street</h5>
                <p class="grey-text text-lighten-3">Absolutely. Positively. Perfect.</p>
              </div>
              <div class="col l5 s12">
                <table class="white-text">
                  <tr>
                    <td><i class="fa fa-map-marker"></i></td>
                    <td>Delhi GT Road, Jalandhar, Punjab, India 144401</td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-phone-square"></i></td>
                    <td>
                      <a href="tel:+91- 0088008800">+91- 0088008800</a>
                    </td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-envelope"></i></td>
                    <td>
                      <a href="mailto:support@shopperstreet.co.in">
                        support@shopperstreet.co.in
                      </a>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="col l4 s12 row">
                <div class="col">
                  <a class="btn-floating blue darken-3" href="">
                  <i class="fa fa-facebook-f"></i>
                </a>
                </div>
                <div class="col">
                  <a class="btn-floating blue lighten-1">
                    <i class="fa fa-twitter"></i>
                  </a> 
                </div>
                <div class="col">
                  <a class="btn-floating" 
                   style="background: linear-gradient(to top,yellow,purple)"   >
                  <i class="fa fa-instagram"></i>
                </a>
                </div>
              </div>
            </div>
            <hr>
          </div>
          <div class="footer-copyright center">
            <div class="container">
            © 2019 All rights reserved <kbd>shopperstreet.com</kbd>
            </div>
          </div>
        </footer>
<script>
    $(document).ready(function(){
        $('.sidenav').sidenav();
        $('.fixed-action-btn').floatingActionButton();
        updateCartValue();

    });

    function clearText(){
       document.getElementById("search").value = "";
       document.getElementById("search-mobile").value="";
    }

    function addItemToCart(category,item,quantity=1){
      if(!localStorage.cart){
        localStorage.cart = "[]";
      }
      let data = JSON.parse(localStorage.cart);
      let entry = data.find(e=>e.category==category&&e.item.id==item.id);
      if(!entry){
        data.push({category,item,quantity});
        localStorage.cart = JSON.stringify(data);
        $(".cart-value").text(data.length);
        $(".cart-value").removeClass('hide');
      }
    }

    function isAreadyAdded(category,id){
      if(!localStorage.cart){
        return false;
      }
      let data = JSON.parse(localStorage.cart);
      return data.some(e=>e.category==category&&e.item.id==id)
    }

    function updateCartValue(){
      if(!localStorage.cart){
        return;
      }
      let data = JSON.parse(localStorage.cart);
      if(data.length){
        $(".cart-value").text(data.length);
        $(".cart-value").removeClass('hide');
      }
    }

  </script>
</body>
</html>

<!-- 
Things to do:
1. make this a template by adding yield at the appropriate places
2. make a navigation controller using the links provided here
3. make rest of the pages and import this layout there
4. make a nice footer too
5. find a way to import the scripts / dependencies globally

 -->