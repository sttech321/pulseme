<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Password Reset Request</title>
</head>
<body>
    <h2>Forget Password</h2>
    <form action="/forgotPassword" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <button type="submit">Send OTP</button>
    </form>
</body>
</html>
