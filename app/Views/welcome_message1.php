<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<p>Welcome, <?= session()->get('username') ?></p>
<a href="/logout">Logout</a>

<!-- Include the dashboard content here -->
<?= view('dashboard') ?>

<?= $this->endSection() ?>