
  <style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    /* httpgooglerusearch 
		http://google.com/search;
    */

    main {
      flex: 1 0 auto;
    }

    body {
      background: #fff;
    }

    .input-field input[type=date]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
      color :var(--accent) !important;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 1px solid var(--primary) !important;
      box-shadow: none !important;
    }

    .fixed-action-btn{
      display:none;
    }

    .signup-box{
      padding: 32px 32px 0px 32px; 
      border: 1px solid #EEE;  
      width:70vmin;
    }

    
  </style>
    <head>
    <title>Login</title>
    </head>
    @extends('animatedBG')
    @section('page')
  <main>
    <center>
      <div class="section"></div>

      <h5 class="white-text container-fluid">Please, login into your account</h5>
      <div class="section"></div>

      <div class="container-fluid">
        <div class="z-depth-1 grey lighten-4 signup-box">

          <form class="col s12" method="post" action="/authenticate">
            @csrf
            <div class="blue-text">{{$userExists ?? ""}}</div>
             <div class='row'>
              <div class='col s12'>
                <h5>Login</h5>
              </div>
            </div>

            <div class='row'>
              <div class='input-field'>
                <input value="{{old('email')}}" class='validate' type='text' name='email' id='email' />
                <label for='email'>Enter your email</label>
              </div>
              @error('email')
              <div class="red-text">{{$message}}</div>
              <script type="text/javascript">
                document.forms[2].querySelector("#email").focus()
                var f = 1;
              </script>
              @enderror
            </div>

            <div class='row'>
              <div class='input-field'>
                <input class='validate' type='password' name='password' id='password' />
                <label for='password'>Enter your password</label>
              </div>
              @error('password')
              <div class="red-text">{{$message}}</div>
              <script type="text/javascript">
                if(!window.f)
                  document.forms[2].querySelector("#password").focus()
              </script>
              @enderror
              <label style='float: right;'>
								<a class='pink-text' href='#!'><b>Forgot Password?</b></a>
							</label>
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect accent'>Login</button>
              </div>Not a User ? <br>
              <a href="signup">Create account</a>
            </center>
          </form>
        </div>
      </div>
    </center>
  </main>
    @endsection
