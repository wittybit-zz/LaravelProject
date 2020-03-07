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
    <style>
      body{
        background: #F3F3F3
      }

      #sidenav{
        background: rgb(11,11,11)
      }

      .nav-wrapper{
        background:#252525
      }

      .search{
        background:#252525
      }

      #mobile-search-bar{
        margin-top:0px;
      }

      #form1{
        margin-left:10vw;
      }

      .no-shadows {
        box-shadow: none!important;
      }

      .one-edge-shadow {
	      -webkit-box-shadow: 0 8px 6px -6px black;
	      -moz-box-shadow: 0 8px 6px -6px black;
	      box-shadow: 0 8px 6px -6px black;
      }
    </style>
</head>
<body>
<nav>
    <div class="nav-wrapper">
      <a href="/home" class="brand-logo">Logo</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      
      
      <ul class="right hide-on-med-and-down">
        <li><a href="/home" title="Home"><i class="material-icons">home</i></a></li>
        <li><a href="/categories"  title="Categories"><i class="material-icons">format_list_bulleted</i></a></li>
        <li><a href="/login"  title="Login / SignUp"><i class="material-icons">fingerprint</i></a></li>
      </ul>

      <form id="form1" class="hide-on-med-and-down" >
        <div class="input-field" style="max-width: 73vw;">
          <input id="search" type="search" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
          <div id="searchResults" ></div>
        </div>
      </form>
    </div>
    
      
  <nav class=" nav-wrapper hide-on-large-only no-shadows" id="mobile-search-bar">
  <form id="form2" class="show-on-med-and-down">
        <div class="input-field">
          <input id="search" type="search" required">
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
          <div id="searchResults" ></div>
        </div>
      </form>
  </nav>

  <ul class="sidenav" id="mobile-demo">
        <li><a href="/home">Home<i class="material-icons">home</i></a></li>
        <li><a href="/categories">Categories<i class="material-icons">format_list_bulleted</i></a></li>
        <li><a href="/cart">Cart<i class="material-icons">shopping_cart</i></a></li>
        <li><a href="/login">Login<i class="material-icons">fingerprint</i></a></li>
  </ul>

  <div class="fixed-action-btn horizontal hide-on-large-only">
  <a class="btn-floating btn-large purple">
    <i class="large material-icons">shopping_cart</i>
  </a>
  <ul>
    <li><a href="/checkout"class="btn-floating red center-align" title="Check Out"><i class="material-icons">attach_money</i></a></li>
    <li><a href="/cart"class="btn-floating yellow darken-1" title="View Cart"><i class="material-icons">format_list_bulleted</i></a></li>
  </ul>
</div>


  <script>
    $(document).ready(function(){
        $('.sidenav').sidenav();
        $('.fixed-action-btn').floatingActionButton();
    });

  </script>
</body>
</html>