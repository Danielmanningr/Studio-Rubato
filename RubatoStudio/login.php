<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
    <link rel="stylesheet" type="text/css" href="login.css" />
    <script src="script.js"></script>
  </head>

  <body>
    <div class="page">
      <div id="topHeader" class="header">
        <div class="section">
          <div class="logo">
            <img class="logoImage" src="Images/Studio Rubato Logo.webp" alt="Logo">
            <h1 class="logoTitle">Rubato Studio</h1>
          </div>
        </div>
      </div>
      <div class="header" id="bottomHeader">
        <div class="section navigation">
          <div class="navBar">
            <a href="homepage.html" class="home">Home</a>
            <a href="about.html" class="about">About Us</a>
            <a href="contact.html" class="contact">Contact</a>
          </div>
          <div class="contactInfo">
            <div class="email">contact@rubatostudio.com</div>
            <div class="phone">020 4017 6393</div>
            <div class="login">
              <a href="login.php">
                <div class="profile">profile</div>
              </a>
              <a href="login.php">
                <img src="Images/profile.png" alt="profile">
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- page section -->

      <div class="main">
        <div class="information">
          <div class="indexSignUp">
            <h4>Sign Up</h4>
            <p>Don't have an account yet? Sign up here!</p>
            <form class="submitForm" action="./includes/sign-up.inc.php" method="post">
              <input type="text" name="uid" placeholder="Username">
              <input type="password" name="pwd" placeholder="Password">
              <input type="password" name="pwdRepeat" placeholder="Confirm password">
              <input type="text" name="email" placeholder="email" autocomplete="email">
              <br>
              <button type="submit" name="submit">SIGN UP</button>
            </form>
          </div>
          <div class="indexLogin">
            <h4>Login</h4>
            <form action="./includes/login.inc.php" method="post">
              <input type="text" name="uid" placeholder="Username">
              <input type="password" name="pwd" placeholder="Password">
              <br>
              <button type="submit" name="submit">LOGIN</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Footer -->

      <div class="footer">
        <div class="col1">
          <h3>Useful Links</h3>
          <a href="homepage.html">Homepage</a>
          <a href="shop.html">Who we Are</a>
          <a href="shop.html" class="locator-audio locator">Contact us</a>
          <a href="shop.html" class="locator-gaming locator">Blog</a>
        </div>
        <div class="col2">
          <img src="Images/logoName.png" alt="logo">
        </div>
        <div id="col3">
          <h3>Contact</h3>
          <p>94, Teviot st, 9812<br />Invercargill, New Zealand</p>
          <p>Phone: <br />020 4017 6393</p>
          <p>Email: contact@rubatostudio.com</p>
        </div>
      </div>
    </div>
  </body>
</html>