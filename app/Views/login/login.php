<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" sizes="32x32" href="/image/summitRA.jpeg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'summitRA - Login page' ?></title>
    <link rel="stylesheet" type="text/css" href="/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/css/login.css">
    <link rel="stylesheet" type="text/css" href="/css/variables.css">
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
  <form method="post" action="<?= base_url('loginAuth') ?>">
      <div data-v-139b8be6="" class="wrapper sessionWrap">
        <div class="contact-form-wrap">
          <img data-v-139b8be6="" width="230" src="/image/login-img.png">
          <div data-v-139b8be6="" class="formField">
          <p style="color:red;"><?= session()->get('error') ?></p>
            <div class="inputBox">
              <input data-v-139b8be6="" autocomplete="on" name="email" type="text" placeholder="Email Address">
            </div>
            <div data-v-139b8be6="" style="display: none;">Please enter your email.</div>
          </div>
          <div data-v-139b8be6="" class="formField">
            <div class="inputBox">
              <input data-v-139b8be6="" autocomplete="on" type="password" name="password" placeholder="•••••••••">
            </div>
            <i data-v-139b8be6="" class="icon-md-eye" style="font-size: 16px;"></i>
          </div>
          <div data-v-139b8be6="" class="buttons">
            <button class="btn btnPrimary" name="login" type="submit">Log In</button>
          </div>
          <p class="bottomLineContent"><a data-v-139b8be6="" href="/forgot-password" class="">Forgot password? </a>Reset it securely</p> 
        </div>
      </div>
    </form>
  </body>
</html>