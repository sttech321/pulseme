<div class="container">
	<p style="font-size:20px; color:black; margin-left:10px; margin-top:20px;">Here is our company contact-card feel free to contact us.</p>
	<ul class="cards" style="width:600px;margin:15px;    border-radius: 20px;box-shadow: 0 0 4px rgba(0,0,0,0.3);background-color: #f9f9f9;padding: 20px;">
		<li style="display: flex;"><img style="object-fit: cover; margin-right: 10px;" src="https://cdn.pixabay.com/photo/2017/03/19/20/19/ball-2157465_640.png" width=" 25%">
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