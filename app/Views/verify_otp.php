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
<form action="/password/reset" method="post">
    <div class="wrapper sessionWrap">
      <div class="contact-form-wrap">
        <img style="margin-bottom:35px;" width="230" src="/image/login-img.png">
        <div  class="formField">
          <div class="inputBox">
                <label>Verify OTP</label>
                <input type="text" name="otp" required>
          </div>
        </div>
        <div  class="buttons">
          <button class="btn btnPrimary" name="login" type="submit">Verify OTP</button>
        </div>
      </div>
    </div>
  </form>
</body>

</html>

