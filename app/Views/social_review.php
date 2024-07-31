<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="headerTop">
   <div class="dropMenuWrap flexBetween">
      <div class="pageNameWrap">
         <h3 class="secTitle">Reviews</h3>
      </div>
      <div class="rightWrap">
         <div class="location-info flex flex-col justify-center items-end mr-10px">
            <p class="leading-tight" id="Hales-AC-Service">Hales AC Service</p>
            <p class="leading-tight">4700 95Th St N</p>
            <p class="leading-tight">Saint Petersburg, FL US 33708-3728</p>
         </div>
      </div>
   </div>
   <div class="p-20px bg-white">
         <h2 class="text-2xl">Reviews</h2>
      </div>
      <div class="px-15px bg-white flex justify-start items-center">
         <a href="/analyze/reviews" class="border-b-2 border-blue-500 router-link-exact-active p-10px" aria-current="page">Reviews</a>
         <a href="/analyze/reviews/social-reviews" class="p-10px">Social Reviews</a>
      </div>
</div>
<!-- <div class="container-fluid"> -->
<div class="sidebarRightContent">
<div class="flex-grow flex flex-col items-stretch bg-gray-100 h-auto">
<!--  -->


</div>
<div class="grid grid-cols-1 gap-y-5">
	<div class="bg-white p-25px rounded hover:shadow transition-shadow duration-150">
		<div class="flex justify-between items-center">
			<h1 class="text-3xl mb-6">
				<svg
					class="svg-inline--fa fa-message text-3xl mr-5px"
					aria-hidden="true"
					focusable="false"
					data-prefix="fas"
					data-icon="message"
					role="img"
					xmlns="http://www.w3.org/2000/svg"
					viewBox="0 0 512 512"
					style="color: rgb(52, 144, 220);"
				>
					<path class="" fill="currentColor" d="M64 0C28.7 0 0 28.7 0 64V352c0 35.3 28.7 64 64 64h96v80c0 6.1 3.4 11.6 8.8 14.3s11.9 2.1 16.8-1.5L309.3 416H448c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64z"></path>
				</svg>
				Social Reviews
			</h1>
			<div class="relative">
				<button class="p-10px">
					<svg
						class="svg-inline--fa fa-ellipsis-vertical text-32px text-blue-500"
						aria-hidden="true"
						focusable="false"
						data-prefix="fas"
						data-icon="ellipsis-vertical"
						role="img"
						xmlns="http://www.w3.org/2000/svg"
						viewBox="0 0 128 512"
					>
						<path class="" fill="currentColor" d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z"></path>
					</svg>
				</button>
				<!---->
			</div>
		</div>
		<div class="flex"><button class="btn btn-blue rounded-full mr-3">Give Credit</button><a href="https://business.google.com/reviews" target="_blank" class="btn border rounded-full text-gray-500">Google Reply</a></div>
	</div>

	<?php if (!empty($reviews)): ?>
		<?php foreach ($reviews as $index => $review): ?>
	<div class="bg-white p-25px rounded flex">
		<div class="logo flex justify-center mr-10px">
			<svg class="svg-inline--fa fa-google text-4xl text-gray-400" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
				<path
					class=""
					fill="currentColor"
					d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"
				></path>
			</svg>
		</div>
		<div class="flex flex-col items-start flex-grow">
			<div class="top-line grid grid-rows-1 grid-flow-col gap-10px">
				<?php
					// Get the JSON string from the reviewerInfo
					$jsonString = json_decode($review['reviewerInfo'],true);
						if (isset($jsonString['Name'])) {
							$name = $jsonString['Name'];
						} else {
							// Handle the case where the 'Name' key does not exist
							$name = '';
						} ?>
				<p class="text-gray-400"><?php echo $name; ?></p>
				<?php
					$currentDate = new DateTime(); // Get current date and time
					$createdOn = new DateTime($review['updatedOn']); // Assuming $review['updatedOn'] is a valid date string

					// Calculate the difference between the two dates
					$interval = $currentDate->diff($createdOn);

					// Get the total difference in days and hours
					$days = $interval->days;
					$hours = $interval->h;

					// Determine if the difference is less than 24 hours
					if ($days === 0 && $hours > 0) {
						$relativeTime = $hours . ' hours';
					} elseif ($days > 0) {
						$relativeTime = $days . ' days';
					} else {
						$relativeTime = '0 hours'; // In case the dates are the same
					}
				?>
				<p class="text-gray-400"><?php echo esc($relativeTime); ?></p>
			</div>
			<div class="content my-10px">
				<p><?= esc($review['reviewText']); ?></p>
			</div>
			<div class="grid grid-rows-1 grid-flow-col gap-10px">
				<button class="btn border flex justify-between items-center rounded-full transition-colors duration-150 text-gray-500 hover:btn-blue">
					<svg class="svg-inline--fa fa-bullhorn mr-5px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bullhorn" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
						<path
							class=""
							fill="currentColor"
							d="M480 32c0-12.9-7.8-24.6-19.8-29.6s-25.7-2.2-34.9 6.9L381.7 53c-48 48-113.1 75-181 75H192 160 64c-35.3 0-64 28.7-64 64v96c0 35.3 28.7 64 64 64l0 128c0 17.7 14.3 32 32 32h64c17.7 0 32-14.3 32-32V352l8.7 0c67.9 0 133 27 181 75l43.6 43.6c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6V300.4c18.6-8.8 32-32.5 32-60.4s-13.4-51.6-32-60.4V32zm-64 76.7V240 371.3C357.2 317.8 280.5 288 200.7 288H192V192h8.7c79.8 0 156.5-29.8 215.3-83.3z"
						></path>
					</svg>
					<!----><!---->
					<span id="name-span-<?= $review['ID']; ?>"><?= esc($review['creditTo']) ?: 'Eugene Lewis'; ?></span>

				</button>
				<div class="give-credit relative">
					<!---->
					<button class="btn border flex justify-between items-center rounded-full">
						<svg class="svg-inline--fa fa-user mr-5px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
							<path
								class=""
								fill="currentColor"
								d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"
							></path>
						</svg>
						
						<select class="form-select form-select-md mb-3" name="campaign" data-id="<?= esc($review['ID']) ?>" aria-label=".form-select-lg example" style="margin-top:12px;">
							<option disabled selected>Give Additional Credit</option>
							<?php foreach ($reviewss as $reviewOption): ?>
								<option value="<?= esc($reviewOption['name']) ?>"><?= esc($reviewOption['name']) ?></option>
							<?php endforeach; ?>
						</select>
					</button>
					<!---->
				</div>
			</div>
		</div>    
	</div>
	<?php endforeach; ?>
	<?php else: ?>
        <p>No reviews available for Google.</p>
		<?php endif; ?>
	</div>
	<!---->
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.form-select').forEach(function(select) {
        select.addEventListener('change', function() {
            const selectedOption = this.value;
			console.log(selectedOption,'dtaa');
			const id = this.getAttribute('data-id');
            const span = document.getElementById('name-span-' + id);

			// Update span content
			span.textContent = selectedOption;

			// Save the selected option in localStorage
			localStorage.setItem('selectedOption-' + id, selectedOption);

            // Send AJAX request to update the database
            fetch('/analyze/reviews/social-reviews/' + id, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': '<?= csrf_hash() ?>' // If using CSRF protection
                },
                body: JSON.stringify({ campaign: selectedOption })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
					console.log(data);
                    console.log('Database updated successfully.');
                } else {
                    console.log('Error updating database:', data.message);
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });
});
</script> 

<?= $this->endsection('content') ?>

