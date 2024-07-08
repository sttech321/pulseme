<!-- verify_otp.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verify OTP</title>
</head>
<body>
    <h2>Verify OTP</h2>
    <form action="/password/reset" method="post">
        <label for="otp">OTP:</label>
        <input type="text" name="otp" required>
        <button type="submit">Verify OTP</button>
    </form>
</body>
</html>
