
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
      color :var(--primary) !important;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 1px solid var(--primary) !important;
      box-shadow: none !important;
    }
  </style>

    @extends('layout')
    @section('title','Signup / Login')
    @section('content')
  <main>
    <center>
      <div class="section"></div>

      <h5 class="indigo-text">Please, login into your account</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" method="post">
            <div class='row'>
              <div class='col s12'>
                <h5>Login</h5>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='email' name='email' id='email' />
                <label for='email'>Enter your email</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password' />
                <label for='password'>Enter your password</label>
              </div>
              <label style='float: right;'>
								<a class='pink-text' href='#!'><b>Forgot Password?</b></a>
							</label>
            </div>

            <br />
            <center>
              <div class='row'>
<<<<<<< HEAD
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect primary'>Login</button>
=======
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect accent'>Login</button>
>>>>>>> 6b6fc1039b250c32964a8912d56f50053c383a5d
              </div>
            </center>
          </form>
        </div>
      </div>
      <a href="signup">Create account</a>
    </center>
  </main>
    @endsection