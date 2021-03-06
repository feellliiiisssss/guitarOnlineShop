<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/static/css/regist-login.css" />
  </head>
  <body>
    <div class="container">
      <div class="login active">
        <img src="../static/assets/Cheetar-logo.png" alt="logo" class="logo" />
        <h2>Sign In</h2>
        <p style="color: grey">to get the most from Cheetarr</p>
        <br />
        <div class="form-group">
          <label for="email">Email</label>
          <div class="input-group">
            <input type="email" id="email" placeholder="Email address" />
            <i class="bx bx-envelope"></i>
          </div>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <div class="input-group">
            <input type="password" pattern=".{8,}" id="password" placeholder="Your password" />
            <i class="bx bx-lock-alt"></i>
          </div>
          <span class="help-text">At least 8 characters</span>
        </div>
        <button id="signin-button" class="btn-submit">Sign In</button>
        <p>Don't have an account? <a href="#" onclick="switchForm('register', event)">Sign Up</a></p>
      </div>

      <form action="#" class="register">
        <img src="../static/assets/Cheetar-logo.png" alt="logo" class="logo" />
        <h2>Sign Up</h2>
        <p style="color: grey">
          Sign Up to checkout quickly easily, and view <br />
          your order history online.
        </p>
        <br />
        <div class="form-group">
          <label for="name">Username</label>
          <div class="input-group">
            <input type="text" id="name" placeholder="Your name" />
            <i class="bx bx-user"></i>
          </div>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <div class="input-group">
            <input type="email" id="email" placeholder="Email address" />
            <i class="bx bx-envelope"></i>
          </div>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <div class="input-group">
            <input type="password" pattern=".{8,}" id="password" placeholder="Your password" />
            <i class="bx bx-lock-alt"></i>
          </div>
          <span class="help-text">At least 8 characters</span>
        </div>
        <button type="submit" class="btn-submit">Sign Up</button>
        <p>I already have an account. <a href="#" onclick="switchForm('login', event)">Sign In</a></p>
      </form>
    </div>

    <script src="/static/js/regist-login.js"></script>
  </body>
</html>
