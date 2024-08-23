<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<style>
.tab-link.active {
    font-weight: bold;
    color: #1a73e8; /* Example color */
}
</style>

<div class="contact-templateBox">
	<div class="container">
		<p style="font-size:20px; color:black; margin-left:10px;">Here is our company contact-card feel free to contact us.</p>
		<ul class="cards" style="border:2px solid black;width:600px;margin:15px">
			<li><img src="<?= base_url('/image/campaign/1721044880_6b3f9e64dbee8f537125.jpg') ?>" width="25%">
				<div class="details" style="margin:10px; font-size:17px; line-height:2; color:black">
					<div class="name">RigthAwayGroups</div>
					<div class="title"><?= esc($contactcard['notes']) ?></div>
					<div class="phone"><?= esc($contactcard['primary_number']) ?></div>
					<div class="phone"><?= esc($contactcard['sms_number']) ?></div>
					<div class="email"><?= esc($contactcard['email']) ?></div>
				</div>
			</li>
		</ul>
	</div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // Get the current URL path
    const currentPath = window.location.pathname;

    // Get all tab links
    const tabs = document.querySelectorAll('.tab-link');

    // Loop through the tabs and check if their href matches the current path
    tabs.forEach(function(tab) {
        if (tab.getAttribute('href') === currentPath) {
            tab.classList.add('active'); // Add 'active' class to the matching tab
        }
    });
});
</script>
<?= $this->endsection('content') ?>