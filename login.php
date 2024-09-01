<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="image/icon.png">
        <meta charset="utf-8">
        <META NAME="Generator" CONTENT="EditPlus">
        <META NAME="Author" CONTENT="">
        <META NAME="Keywords" CONTENT="">
        <META NAME="Description" CONTENT="">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css"href="login.css">
        <!---box icons link--->
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <!---remix icons link--->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
        
        <!--google fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
        <!--carrousel-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
        <script
      src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
      <!--bootstrap-->
    
</head>
<body>
  
    <div class="container">
        <div class="forms-container">
          <div class="signin-signup">
            <form action="register.php" class="sign-in-form" method="POST">
              <img src="image/logo.png">
              <h2 class="title">Sign in</h2>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" name="username" id="username-login" class="form-control"required/>
              </div>
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" id="pw-login" name="password" class="form-control" required/>
              </div>
              <input type="submit" value="Login" class="btn solid" id="login" />
            </form>
            
            <!--signup-->
            <form action="mailto:yuanalbyan7@gmail.com" method="get" class="sign-up-form" id="signupform">
              <img src="image/logo.png">
              <h2 class="title">Sign up</h2>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Name" name="name" required/>
              </div>
              <div class="input-field">
                <i class="fas fa-envelope"></i>
                <input type="email" placeholder="Email"name="email" required />
              </div>
              <div class="input-field">
                <i class="fas fa-envelope"></i>
                <input type="number" placeholder="No.Whatsapp"name="number" required />
              </div>
                
              <input type="submit" class="btn signup" value="Sign up" name="signUp"/>

            </form>
          </div>
        </div>
  
        <div class="panels-container">
          <div class="panel left-panel">
            <div class="content">
              <h3>New here ?</h3>
              <p>
                Let's join Brics from now on and get ready to play and learn with us until you reach your dream university 
              </p>
              <button class="btn" id="sign-up-btn">
                Sign up
              </button>
            </div>
            <img src="../LoginPage/img/undraw_maker_launch_re_rq81.svg" class="image" alt="" />
          </div>
          <div class="panel right-panel">
            <div class="content">
              <h3>One of us ?</h3>
              <p>
                Just move to sign in page if you already have an account by click 'sign in' button
              </p>
              <button class="btn" id="sign-in-btn">
                Sign in
              </button>
              <a href="" ><button class="btn">
                Tutorial
                </button></a>
              
            </div>
            <img src="../LoginPage/img/undraw_design_notes_re_eklr.svg" class="image" alt="" />
          </div>
        </div>
      </div>
    <script src="login.js"></script>
</body>
</html>