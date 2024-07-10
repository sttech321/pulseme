<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" sizes="32x32" href="https://kiliassets.speetra.com/favicon/favicon-32x32.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verify OTP</title>
  <link rel="stylesheet" type="text/css" href="/css/reset.css">
  <link rel="stylesheet" type="text/css" href="/css/login.css">
  <link rel="stylesheet" type="text/css" href="/css/variables.css">

  <script src="https://accounts.google.com/gsi/client" async></script>
  <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC_9G82Fa3wdn-p4QID43b_RVrJme66fQ&libraries=places">
  </script>
  <style>
    * {
      font-size: 14px;
    }

    html {
      height: 100%;
      margin: 0;
    }

    body,
    #app {
      height: 100%;
      margin: 0;
    }
  </style>
</head>

<body>
<form action="" method="post" id="passwordForm">
    <div class="wrapper sessionWrap">
      <div class="contact-form-wrap">
        <img style="margin-bottom:35px;" width="230" src="/image/login-img.png">
        <p style="color:red;"><?= session()->get('error') ?></p>
        <div  class="formField">
          <div class="inputBox">
                <label for="password">New Password</label>
                <input type="password" id="password" name="password" required>
          </div>
        </div>
        <div  class="formField">
          <div class="inputBox">
                <label for="password">Confirm Password</label>
                <input type="password" id="confirmPassword" name="Confirmpassword" required>
          </div>
        </div>
        <div  class="buttons">
          <button class="btn btnPrimary" name="login" type="submit">Reset Password</button>
        </div>
      </div>
    </div>
  </form>

</body>
</html>


 <script>
    document.addEventListener('DOMContentLoaded', function() {
        var password = document.getElementById('password');
        var confirmPassword = document.getElementById('confirmPassword');

        function validatePassword() {
            if (password.value !== confirmPassword.value) {
                confirmPassword.setCustomValidity("Passwords don't match");
            } else {
                confirmPassword.setCustomValidity('');
            }
        }

        password.addEventListener('change', validatePassword);
        confirmPassword.addEventListener('keyup', validatePassword);
    });
 </script>