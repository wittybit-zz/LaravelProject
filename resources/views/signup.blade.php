
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
      display: none;
    }

    .signup-box{
      display: inline-block;
      padding: 32px 48px 0px 48px;
      border: 1px solid #EEE;
    }
  </style>
    @extends('animatedBG')
    @section('page')
  <main>
    <center>
      <div class="section"></div>

      <h5 class="white-text container">To keep connected with us, Signup with your personal details</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 signup-box">

          <form class="col s12" method="post" action="/api/register">
            <div class='row'>
              <div class='col s12'>
                <h5>Signup</h5>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s6'>
                <input class='validate' type='text' name='fname' id='fname' />
                <label for='fname'>First Name</label>
              </div>
              <div class='input-field col s6'>
                <input class='' type='text' name='lname' id='lname' />
                <label for='lname'>Last Name</label>
              </div>
              @error('lname')
                {{$message}}
              @enderror
              <div class='input-field col s12'>
                <input class='validate' type='email' name='email' id='email' />
                <label for='email'>Enter your email</label>
              </div>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password' />
                <label for='password'>Enter your password</label>
              </div>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='cpassword' id='cpassword' />
                <label for='cpassword'>Confirm your password</label>
              </div>
            </div>
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect accent'>Create Account</button>
              </div>
            </center>
            <h6>Already a user ? <a href="/login">Login </a></h2>
          </form>
        </div>
      </div>
    </center>
  </main>
    @endsection