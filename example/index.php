<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="../assets/img/title.png" type="image/icon type" />

    <meta charset="utf-8" />
    <link
    
      rel="apple-touch-icon"
      sizes="76x76"
      href="../assets/img/title.png"
    />
    <link rel="icon" type="image/png" href="../assets/img/title.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Administrative Portal | PlayQuest</title>
    <meta
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no"
      name="viewport"
    />
    <link rel="stylesheet" href="../assets/css/index.css" />
  </head>
  <body>
    <div class="container" id="container">
      <div class="form-container sign-in-container">
        <div class="form" id="login-form">
          <h1>Login to PlayQuest Administrative Portal</h1>
          <br />
          <!-- <span>or use your account</span> -->
          <input id="username" type="email" placeholder="Your Email" value="" />
          <span id="email_error" style="color: red; float: right"></span>
          <input
            id="password"
            type="password"
            placeholder="Password"
            value=""
            required
          />
          <span id="password_error" style="color: red; float: right"></span>
          <br />
          <input
            type="submit"
            onclick="login()"
            id="login-form-submit"
            class="signin"
            value="Login"
          />
          <br />
          <p>
            This is an Administrative portal, only Admins, already having
            accounts, can provide new accounts.
          </p>
        </div>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-right">
            <img src="../assets/img/PlayQuest Logo.png" alt="" height="40%" />
          </div>
        </div>
      </div>
    </div>

    <!-- <script src="../assets/js/login.js"></script> -->
    <script src="index.js"></script>
    <script src="../javaScript/template.js"></script>
  </body>
</html>
