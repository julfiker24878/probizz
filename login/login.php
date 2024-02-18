<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Favicon-->
    <link rel="icon" href="/probizz/option_logo/uploaded/<?= $after_assoc_logo['logo_image']; ?>" type="image/png">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
    <style>
      .alert{
        padding: 20px 25px;
        background: #3491F0;
        border-radius: 5px;
        color: #fff;
        font-size: 16px;
        font-weight: 700;
        margin-bottom: 20px;
      }
      .alert-success{
        background: #008000 !important;
      }
      .alert-danger{
        background: #e32636 !important;
      }
      .alert-warning{
        background: #fe6f5e !important;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

          <form class="sign-in-form" action="login_post.php" method="POST">

          <!-- SESSION FOR CORRECT PASSWORD -->
          <?php if(isset($_SESSION['pass_success'])){ ?>
            <div class="alert alert-success mt-2">
                <?php echo $_SESSION['pass_success']; ?>
            </div>
         <?php } unset($_SESSION['pass_success']); ?>

         <!-- SESSION FOR EMAIL UNMATCHED -->
         <?php if(isset($_SESSION['email_not_exist'])){ ?>
            <div class="alert alert-danger mt-2">
                <?php echo $_SESSION['email_not_exist']; ?>
            </div>
        <?php } unset($_SESSION['email_not_exist']); ?>

        <!-- SESSION FOR PASSWORD UNMATCHED -->
        <?php if(isset($_SESSION['password_unmatched'])){ ?>
            <div class="alert alert-warning mt-2">
                <?php echo $_SESSION['password_unmatched']; ?>
            </div>
        <?php } unset($_SESSION['password_unmatched']); ?>

            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input name="email" type="email" placeholder="Email" /><!-- EMAIL ADDRESS -->
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input name="password" type="password" placeholder="Password" /><!-- PASSWORD -->
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="login_post.php" method="POST" class="sign-up-form">

          <!-- SESSION FOR PASSWORD UNMATCHED -->
          <?php if(isset($_SESSION['forbidden'])){ ?>
              <div class="alert alert-warning mt-2">
                  <?php echo $_SESSION['forbidden']; ?>
              </div>
          <?php } unset($_SESSION['forbidden']); ?>

            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input name="signup" type="submit" class="btn" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
