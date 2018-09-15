<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>


<!-- <span>Login page</span>

<?php // echo form_open('Auth/login_user'); ?>
<input type='text' name='username' />
<input type='password' name='password' />
<button>Submit</button>
<?php // echo form_close(); ?> -->




<html>
<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/materialize/materialize.min.css") ?>">
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
      color: #e91e63;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 2px solid #e91e63;
      box-shadow: none;
    }
  </style>
</head>

<body>
  <div class="section"></div>
  <main>
    <center>

      <div class="section"></div>

      <h5 class="green-text">Please, login into your account</h5>
      <div class="section">
      </div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

        <?php echo form_open('Auth/login_user'); ?>
          <!-- form action = "" class="col s12" method="POST" -->
            <div class='row'>
              <div class='col s12'>
                <span class="red-text"><?php echo isset($error) ? $error : '' ?></span>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='text' name='username' id='username' value='<?php echo isset($username) ? $username : '' ?>' required/>
                <label for='username'>Enter your Username</label>
              </div>
            </div>
          

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password' required />
                <label for='password'>Enter your password</label>
              </div>
              <label style='float: right;'>
								<a class='green-text' href='<?php echo site_url('register')?>'><b>Register Account?</b></a>
							</label>
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='submit' class='col s12 btn btn-large waves-effect green'>Login</button>
              </div>
            </center>
            <?php echo form_close(); ?>
        </div>
      </div>
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script type="text/javascript" src=<?php echo base_url("assets/materialize/materialize.min.js") ?>></script>
</body>

</html>
