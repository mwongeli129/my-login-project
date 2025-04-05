<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register & Login</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  </head>
  <body>
    <div class="container" id="signUp" style="display: none;">
    <h1 class="form-title">Register</h1>
    <form method="post" action="register.php">
      <div class="input-group">
        <i class="fas fa-user"></i>
        <input
          type="text"
          name="fName"
          id="fName"
          placeholder="First Name"
          required
        />
        <label for="fName">First Name</label>
      </div>
      <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" name="lName" id="lName" placeholder="Last Name" required>
        <label for="lName">Last Name</label>
      </div>
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <label for="email"> Email</label>
      </div>
      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <label for="password"> Password</label>
      </div>
      <input type="submit" class="btn" value="Sign Up" name="signUp">
    </form>
    <p class="or">
        --------Or----
=======

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Register Form -->
   <!-- Register Form -->
<div class="container" id="signUp" style="display: none;">
    <h1 class="form-title">Register</h1>
    <form method="post" action="register.php" autocomplete="off">
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="fName" id="fName" placeholder="First Name" required autocomplete="off" />
            <label for="fName">First Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="Last Name" required autocomplete="off">
            <label for="lName">Last Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required autocomplete="off">
            <label for="email"> Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required autocomplete="off">
            <label for="password"> Password</label>
        </div>
        <input type="submit" class="btn" value="Sign Up" name="signUp">
    </form>
    <p class="or">
      --------Or----
>>>>>>> 0ae0f5d9323d992c6cee4ddff2a01a5e2e81d6e5
    </p>
    <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
    </div>
    <div class="links">
<<<<<<< HEAD
        <p>Already Have an Account ?</p>
        <button id="signInButton">Sign In</button>
    </div>
</div>
<div class="container" id="signIn">
    <h1 class="form-title">Sign In</h1>
    <form method="post" action="register.php">
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <label for="email"> Email</label>
      </div>
      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <label for="password"> Password</label>
      </div>
      <!--password recovery-->
      <p class="recover">
        <a href="#">Recover Password</a>
      </p>
      <input type="submit" class="btn" value="Sign In" name="signIn">
=======
        <p>Already Have an Account?</p>
        <button id="signInButton">Sign In</button>
    </div>
</div>


    <!-- Login Form -->
    <!-- Login Form -->
<div class="container" id="signIn">
    <h1 class="form-title">Sign In</h1>
    <form method="post" action="login.php" autocomplete="off">
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="loginEmail" id="loginEmail" placeholder="Email" required autocomplete="off">
            <label for="loginEmail"> Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="loginPassword" id="loginPassword" placeholder="Password" required autocomplete="off">
            <label for="loginPassword"> Password</label>
        </div>
        <p class="recover">
            <a href="#">Recover Password</a>
        </p>
        <input type="submit" class="btn" value="Sign In" name="signIn">
>>>>>>> 0ae0f5d9323d992c6cee4ddff2a01a5e2e81d6e5
    </form>
    <p class="or">
        --------Or--------
    </p>
    <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
    </div>
    <div class="links">
<<<<<<< HEAD
        <p>Don't Have an Account ?</p>
        <button id="signUpButton">Sign Up</button>
    </div>
</div>
<script src="script.js"></script>
  </body>
=======
        <p>Don't Have an Account?</p>
        <button id="signUpButton">Sign Up</button>
    </div>
</div>


    <script src="script.js"></script>
</body>

>>>>>>> 0ae0f5d9323d992c6cee4ddff2a01a5e2e81d6e5
</html>
