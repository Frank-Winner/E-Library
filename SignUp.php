<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="sl.css" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
  <section class="container forms">
    <div class="form login" id="login">
      <div class="form-content">
        <header>Login</header>

        <form action="">
          <div class="field input-field">
            <input type="email" placeholder="Email" class="input" />
          </div>

          <div class="field input-field">
            <input type="password" placeholder="Password" class="password" />
            <i class="bx bx-hide eye-icon"></i>
          </div>

          <div class="form-link">
            <a href="" class="forgot-pass">Forgot Password?</a>
          </div>

          <div class="field button-field">
            <button>Login</button>
          </div>

          <div class="form-link">
            <span>Don't have an account?
              <a href="" class="link signup-link">Sign Up</a></span>
          </div>
        </form>
      </div>

      <div class="line"></div>

      <div class="media-options">
        <a href="" class="field facebook">
          <i class="bx bxl-facebook facebook-icon"></i>
          <span>Login with Facebook</span>
        </a>
      </div>

      <div class="media-options">
        <a href="" class="field google">
          <img src="img/google.png" alt="" class="google-img" />
          <span>Login with Google</span>
        </a>
      </div>
    </div>

    <div class="form signup">
      <div class="form-content">
        <header>Sign Up</header>

        <form action="" method="post">
          <div class="field input-field">
            <input type="fullname" id="fullname" name="fullname" placeholder="Fullname" class="input" />
          </div>

          <div class="field input-field">
            <input type="username" id="username" name="username" placeholder="Username" class="input" />
          </div>

          <div class="field input-field">
            <input type="email" id="email" name="email" placeholder="Email" class="input" />
          </div>

          <div class="field input-field">
            <input type="password" id="password" name="password" placeholder="Password" class="password" />
            <i class="bx bx-hide eye-icon"></i>
          </div>

          <div class="field button-field">
            <button name="submit" type="submit">Sign Up</button>
          </div>

          <div class="form-link">
            <span>Already have an account?
              <a href="" class="link signup-link">Login</a></span>
          </div>

          <?php if(isset($_GET['error'])){ ?>
					<div class="alert alert-danger">
						<p><?php echo $_GET['error'] ?></p>
					</div>
				<?php }else if(isset($_GET['success'])){ ?>
					<div class="alert alert-success">
						<p><?php echo $_GET['success'] ?></p>
					</div>
				<?php } ?>
        </form>
      </div>

      <div class="line"></div>

      <div class="media-options">
        <a href="" class="field facebook">
          <i class="bx bxl-facebook facebook-icon"></i>
          <span>Sign Up with Facebook</span>
        </a>
      </div>

      <div class="media-options">
        <a href="" class="field google">
          <img src="img/google.png" alt="" class="google-img" />
          <span>Sign Up with Google</span>
        </a>
      </div>
    </div>
  </section>
</body>
<script src="sign.js"></script>

</html>