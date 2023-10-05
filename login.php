<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/login.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <?php
    include('../partials/connection.php');
  ?>
  <body>
    
  
            <!-- home -->
            <div id="top"><a href="homePage.php">
              <h2 id="arrow">CRITIVA</h2>
            </a>
          </div>
    <!-- container -->
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form class="sign-in-form" method="POST" id="form" autocomplete="off">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" id="name"  required name="login_name">
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" id="password" required name="login_pass">
            </div>
            <input type="submit" value="Login" class="btn solid" name="login">
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="https://www.facebook.com/" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com/?lang=en" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://www.google.com/webhp" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="https://www.linkedin.com/" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
            <div id="error" class="social-media">
                <?php 
                  if(isset($_POST['login'])){
                    $loginUsername=$_POST['login_name'];
                    $loginPassword=$_POST['login_pass'];
                    $select_query="select * from user_login where us_name='$loginUsername' and us_password='$loginPassword'";
                    $result=mysqli_query($connect,$select_query);
                    if(mysqli_num_rows($result)>0){
                      echo "<script>console.log('Success');</script>";
                      session_start();
                      $_SESSION['UserName']=$loginUsername;
                      header("location: ./homePage.php");
                    }else{
                      echo "<script>console.log('Fail');</script>";
                      echo "Invalid Username or Password!";
                    }
                  }
                ?>

            </div>
          </form>
          <form action="" class="sign-up-form" method="POST">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" required name="signup_name">
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" required name="signup_email">
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" required name="signup_pass">
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Re-type-Password"required name="signup_repass">
            </div>
            <!-- <input class="btn" value="Sign up" name="signup"/> -->
            <button class="btn" name="signup">Signup</button>
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="https://www.facebook.com/" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com/?lang=en" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://www.google.com/webhp" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="https://www.linkedin.com/" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
            <div id="error" class="social-media" style="color:red;font-size:120%;text-transform:uppercase;">
              <?php

    if(isset($_POST['signup'])){
        $username=$_POST['signup_name'];
        $email=$_POST['signup_email'];
        $password=$_POST['signup_pass'];
        $retypePassword=$_POST['signup_repass'];

        $select_username="select * from user_login where us_name='$username'";
        $usernameData=mysqli_query($connect,$select_username);
        $select_email="select * from user_login where email='$email'";
        $emailData=mysqli_query($connect, $select_email);

        if(mysqli_num_rows($usernameData)>0){
          echo "Error: Username Taken!";
        }else{
          if(mysqli_num_rows($emailData)>0){
            echo "Email Address Exists!";
          }else{
            if($password!=$retypePassword){
              echo "Password Mismatch!";
            }else{
              $insert_query="insert into user_login (us_name, email, us_password)
              values('$username', '$email', '$retypePassword')";

              if(mysqli_query($connect, $insert_query)){
                echo "Register Successful.";
              }
              else{
                echo "Register Failed!";
              }
            }
          }
        }

    }
?></div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">

           
            <!-- new -->
            <h3>New here?</h3>
            <p>
              Sign Up  by clicking the button to start reviewing goods and services.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="images/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <!-- new -->
            <h3>One of us ?</h3>
            <p>
              Already Signed up? Then Sign In to get started to reviewing 
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="images/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="javascript/app.js"></script>
  </body>
</html>
