<?PHP echo '<h1>Forget password page:</h1>'; ?>

<form action="<?= base_url('forgotPassword') ?>" method="post">
<?= csrf_field() ?>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br>
    <input type="submit" value="Submit">
</form>
