<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('/image/summitRA.jpeg')?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verify OTP</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('/css/reset.css')?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('/css/login.css')?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('/css/variables.css')?>">
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
<form action="<?= base_url('/forgot-password/reset/process') ?>" method="post" id="passwordForm">
    <div class="wrapper sessionWrap">
      <div class="contact-form-wrap">
        <img style="margin-bottom:35px;" width="230" src="<?= base_url('/image/login-img.png')?>">
        <?php if ($session->getFlashdata('error')): ?>
            <p style="color:red;"><?php echo $session->getFlashdata('error'); ?></p>
        <?php endif; ?>
        <?php if ($session->getFlashdata('success')): ?>
            <p style="color:black;"><?php echo $session->getFlashdata('success'); ?></p>
        <?php endif; ?>
        <div  class="formField">
          <div class="inputBox">
                <label for="password">New Password</label>
                <input type="password" id="password" name="password" required>
          </div>
        </div>
        <div  class="formField">
          <div class="inputBox">
                <label for="password">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required>
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
 