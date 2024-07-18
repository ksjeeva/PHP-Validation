<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Validation</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container">
      <div class="form-box login">
        <form action="loginSuccess.php" method="post" class="login-form" id="login-form">
          <h1>Login</h1>
          <div class="input-fields">
            <div class="label">
              <i class="bx bx-user"></i><label for="">Username :</label>
            </div>
            <input
              type="text"
              class="form-inputs"
              placeholder="Enter your name"
              id="login-name"
              onkeyup="loginNameMgs()"
              required
              autocomplete="off"
              name="name"
            />
            <span id="login-error-name" class="error-mgs"></span>
          </div>
          <div class="input-fields">
            <div class="label">
              <i class="bx bxs-key"></i><label for="">Password :</label>
            </div>
            <input
              type="password"
              class="form-inputs"
              placeholder="enter your password"
              id="login-password"
              onkeyup="loginPasswordMsg()"
              required
              autocomplete="off"
              name="password"
            />
            <span id="login-password-error" class="error-mgs"></span>
            <div class="show-pass">
              <input
                type="checkbox"
                id="check-pass"
                onclick="LoginshowPass()"
              /><span>Show Password</span>
            </div>
          </div>
          <button
            type="submit"
            name="login"
            id="login-btn"
            onclick="return loginsubmitError()"
          >
            Submit
          </button>
          <br />
          <span id="submit-error" class="error-mgs"></span>
          <p>
            Don't have an account
            <span class="register" id="register" onclick="ToregisterForm()"
              >Register</span
            >
          </p>
        </form>
        <form action="validation.php" method="post" class="register-form" id="register-form">
          <h1>Register</h1>
          <div class="input-fields">
            <div class="label">
              <i class="bx bx-user"></i><label for="">Username :</label>
            </div>
            <input
              type="text"
              class="form-inputs"
              placeholder="enter your name"
              name="name"
              id="register-name"
              onkeyup="registerNameValid()"
              required
              autocomplete="off"
            />
            <span id="register-error-name" class="error-mgs"></span>
          </div>
          <div class="input-fields">
            <div class="label">
              <i class="bx bxl-gmail"></i><label for="">Email :</label>
            </div>
            <input
              type="email"
              class="form-inputs"
              placeholder="enter your email"
              name="email"
              onkeyup="registerEmailvalidate()"
              id="register-email"
              required
              autocomplete="off"
            />
            <span id="register-error-email" class="error-mgs"></span>
          </div>
          <div class="input-fields">
            <div class="label">
              <i class="bx bxs-phone-call"></i><label for="">Phone :</label>
            </div>
            <input
              type="text"
              class="form-inputs"
              placeholder="enter your Phone"
              name="phone"
              id="phone-error-msg"
              onkeyup="phoneValidate()"
              required
              autocomplete="off"
            />
            <span id="phone-error" class="error-mgs"></span>
          </div>
          <div class="input-fields">
            <div class="label">
              <i class="bx bxs-key"></i><label for="">Password :</label>
            </div>
            <input
              type="password"
              class="form-inputs"
              placeholder="enter your password"
              name="password"
              id="register-password"
              onkeyup="registerPasswordValidate()"
              required
              autocomplete="off"
            />
            <span id="register-password-error" class="error-mgs"></span>
            <div class="show-pass">
              <input
                type="checkbox"
                id="check-pass"
                onclick=" RegistershowPass()"
              /><span>Show Password</span>
            </div>
          </div>
          <button
            type="submit"
            name="register"
            onclick="return registersubmitError()"
            id="register-btn"
          >
            Submit
          </button>
          <br />
          <span id="register-submit-error" class="error-mgs"></span>
          <p>
            Already have an account
            <span class="login" id="login" onclick="TologinForm()">Login</span>
          </p>
        </form>
      </div>
     
    </div>



       <script src="script.js"></script>
  </body>
</html>
