
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('/image/summitRA.jpeg')?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Reset Request</title>
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
<form method="post" action="<?= base_url('/forgot-password/send-otp') ?>">
    <div class="wrapper sessionWrap">
      <div class="contact-form-wrap">
        <img style="margin-bottom:35px;" width="230" src="/image/login-img.png">
        <?php if ($session->getFlashdata('error')): ?>
            <p style="color:red;"><?php echo $session->getFlashdata('error'); ?></p>
        <?php endif; ?>
        <div  class="formField">
          <div class="inputBox">
          <label>Enter Email Address</label>
            <input name="email" type="text" placeholder="Email Address">
          </div>
        </div>
        <div  class="buttons">
          <button class="btn btnPrimary" name="login" type="submit">Send OTP</button>
        </div>
      </div>
    </div>
  </form>
</body>
</html>
