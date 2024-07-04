<form action="<?= base_url('/password/reset') ?>" method="post">
    <label for="password">New Password:</label><br>
    <input type="password" id="password" name="password" required><br>
    <!-- <label for="confirm_password">Confirm New Password:</label><br> -->
    <input type="password" id="confirm_password" name="confirm_password" required><br>
    <input type="submit" value="Submit">
</form>
