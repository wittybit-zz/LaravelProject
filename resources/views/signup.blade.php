
  <style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

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
      color: #eb1e63;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 2px solid #eb1e63;
      box-shadow: none;
    }
  </style>

    @extends('layout')
    @section('title','Signup / Login')
    @section('content')
  <main>
    <center>
      <div class="section"></div>

      <h5 class="indigo-text">To keep connected with us, Signup with your personal details</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" method="post">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s6'>
                <input class='validate' type='text' name='email' id='fname' />
                <label for='fname'>First Name</label>
              </div>
              <div class='input-field col s6'>
                <input class='validate' type='text' name='email' id='lname' />
                <label for='lname'>Last Name</label>
              </div>
              <div class='input-field col s12'>
                <input class='validate' type='email' name='email' id='email' />
                <label for='email'>Enter your email</label>
              </div>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password' />
                <label for='password'>Enter your password</label>
              </div>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='cpassword' />
                <label for='cpassword'>Confirm your password</label>
              </div>
            </div>
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Create Account</button>
              </div>
            </center>
          </form>
        </div>
      </div>
      Already a user ? <a href="/login">Login </a>
    </center>
  </main>
    @endsection