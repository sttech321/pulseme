<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" sizes="32x32" href="https://kiliassets.speetra.com/favicon/favicon-32x32.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pulseM</title>
    <script src="https://accounts.google.com/gsi/client" async></script>
    <script async
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC_9G82Fa3wdn-p4QID43b_RVrJme66fQ&libraries=places">
    </script>
</head>
<body class="userLoginBody">
<div class="centeredbox1">
<?php if(session()->getFlashdata('msg')):?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('msg') ?>
        </div>
    <?php endif;?>
   <div class="innerBox">
   <form method="post" action="<?= base_url('loginAuth') ?>">
            <div class="loginForm" id="loginForms">
            <div class="mainLoginBox">
                <div class="loginVisibility" id="loginVisibility">
                <img data-v-139b8be6="" width="120" src="https://kiliassets.speetra.com/logo/pulsem-vertical-light-medium.png">
                    <div class="loginTitle">
                        Sign in
                    </div>
                    <div class="loginFormInput">
                        <div class="input">
                            <input type="text" id="username" name="email" placeholder="Email or Username">
                        </div>

                        <div class="input">
                            <input type="password" placeholder="Password" id="password" name="password">
                        </div>
                    </div>
                    <div class="btnBox">
                        <button class="LoginBtn" name="login" type="submit">Sign in</button>
                        <button class="" name="reset" type="reset"><a href="<?= site_url('/forgotPassword') ?>">Reset password</a></button>
                    </div>
                </div>
            </div>
        </div>  
    </form>
   </div>
</div>
</body>
</html>