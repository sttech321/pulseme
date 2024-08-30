<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<style>
	.tab-link.active {
		font-weight: bold;
		color: #1a73e8;
		/* Example color */
	}
</style>
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
</div>
<?php  //echo'<pre>'?>
<?php  //print_r($reviews);// die;?> 
<!-- <div class="container-fluid"> -->
<div class="sidebarRightContent socialReviewsWrap">
	<div class="flex-grow flex flex-col items-stretch bg-gray-100 h-auto">
		<div class="p-20px bg-white">
			<h2 class="text-2xl">Reviews</h2>
		</div>
		<div class="px-15px bg-white flex justify-start items-center">
			<a href="<?=base_url('/analyze/reviews')?>" class="tab-link" aria-current="page">Reviews</a>
			<a href="<?=base_url('/analyze/reviews/social-reviews')?>" class="tab-link border-b-2 border-blue-500 text-blue-500 router-link-exact-active p-15px">Social Reviews</a>
		</div>
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
						style="color: rgb(52, 144, 220);">
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
							viewBox="0 0 128 512">
							<path class="" fill="currentColor" d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z"></path>
						</svg>
					</button>
					<!---->
				</div>
			</div>
			<div class="flex"><button class="btn btn-blue rounded-full mr-3">Give Credit</button><a href="https://business.google.com/reviews" target="_blank" class="btn border rounded-full text-gray-500">Google Reply</a></div>
		</div>
		<?php foreach ($reviews as $review): ?>
		<?php
		$creditToArray = json_decode($review['creditTo'], true) ?? [];
		//print_r($creditToArray);
		?>
    <div class="bg-white p-25px rounded flex mb-4" id = "<?= $review['ID'] ?>">
        <div class="logo flex justify-center mr-10px">
            <svg class="svg-inline--fa fa-google text-4xl text-gray-400" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
                <path
                    fill="currentColor"
                    d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z">
                </path>
            </svg>
        </div>
        <div class="flex flex-col items-start flex-grow">
            <div class="top-line grid grid-rows-1 grid-flow-col gap-10px">
                <p class="text-gray-400"><?= esc($review['Name']); ?></p>
                <p class="text-gray-400">
                    <?php 
                    // Example relative time calculation
                    // Ensure you define $relativeTime somewhere if needed
                    // echo esc($relativeTime); 
                    ?>
                </p>
            </div>
            <div class="content my-10px">
                <p><?= esc($review['reviewText']); ?></p>
            </div>
            <div class="grid grid-rows-1 grid-flow-col gap-10px">
				<?php foreach ($creditToArray as $campaignName): ?>
					<button class="btn border flex justify-between items-center rounded-full transition-colors duration-150 text-gray-500 hover:btn-blue delete-button"  data-credit-to='<?= htmlspecialchars(json_encode($campaignName), ENT_QUOTES, 'UTF-8'); ?>'>
						<svg class="svg-inline--fa fa-bullhorn mr-5px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bullhorn" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
							<path fill="currentColor" d="M480 32c0-12.9-7.8-24.6-19.8-29.6s-25.7-2.2-34.9 6.9L381.7 53c-48 48-113.1 75-181 75H192 160 64c-35.3 0-64 28.7-64 64v96c0 35.3 28.7 64 64 64l0 128c0 17.7 14.3 32 32 32h64c17.7 0 32-14.3 32-32V352l8.7 0c67.9 0 133 27 181 75l43.6 43.6c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6V300.4c18.6-8.8 32-32.5 32-60.4s-13.4-51.6-32-60.4V32zm-64 76.7V240 371.3C357.2 317.8 280.5 288 200.7 288H192V192h8.7c79.8 0 156.5-29.8 215.3-83.3z"></path>
						</svg>
						<span><?= esc($campaignName); ?></span>
					</button>
				<?php endforeach; ?>

                <div class="give-credit relative">	
				<button class="btn border flex justify-between items-center rounded-full " id="<?= esc($review['ID']); ?>">
					<svg class="svg-inline--fa fa-user mr-5px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
						<path
							fill="currentColor"
							d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
						</path>
					</svg>
					<select class="form-select form-select-md mb-3 campaignSelect" name="campaign" aria-label=".form-select-md example" style="margin-top:12px;">
						<option disabled selected>Give Additional Credit</option>
						<?php foreach ($campaigns as $campaign): ?>
							<option value="<?= esc($campaign['ID']); ?>"><?= esc($campaign['name']); ?></option>
						<?php endforeach; ?>
					</select>
				</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

	<!---->
</div>

<script>
$(document).ready(function() {
    $(document).on('change', '.campaignSelect', function() {
        var selectedValue = $(this).val();
        var selectedText = $(this).find('option:selected').text();
        var buttonID = $(this).closest('button').attr('id');
        var data = {
            campaignID: selectedValue,
            campaignName: selectedText,
            buttonID: buttonID
        };
        
        $.ajax({
            url: '<?=base_url('/analyze/reviews/social-reviews/update')?>',
            type: 'POST',
            data: data,
            contentType: 'application/x-www-form-urlencoded',
            success: function(response) {
				window.location.reload();
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', error);
            }
        });
    });
});

</script>
<script>
$(document).ready(function() {
    $(document).on('click', '.delete-button', function() {
        var button = $(this);
        var creditToJson = button.data('credit-to');
		var parentDiv = button.closest('div.bg-white');
        var divId = parentDiv.attr('id');
        
        try {
            var creditToData = JSON.parse(creditToJson);
            var creditToName = creditToData.name || 'update data'; // Adjust based on your JSON structure

            // Create the confirmation buttons
            var confirmationButtons = `
                <div class="confirm">
                    <button class="btn btn-blue rounded-full relative z-1">
                        <svg class="svg-inline--fa fa-paper-plane mr-5px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paper-plane" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480V396.4c0-4 1.5-7.8 4.2-10.7L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z"></path>
                        </svg>
                        <span>${creditToName}</span>
                    </button>
                    <button class="btn btn-red rounded-full relative pl-40px" style="transform: translateX(-32px); margin-right: -32px;">
                        Remove
                    </button>
                </div>`;

            // Remove any existing confirmation buttons before appending new ones
            button.closest('.grid').find('.confirm').remove();

            // Append the confirmation buttons right after the clicked button
            button.after(confirmationButtons);

            // Attach click event to the new remove button
            button.next('.confirm').find('.btn-red').on('click', function() {
                $.ajax({
                    url: '<?=base_url('/analyze/reviews/social-reviews/delete')?>',
                    type: 'POST',
                    data: {
                        creditTo: creditToJson,
                        divId: divId
                    },
                    dataType: 'json',
                    contentType: 'application/x-www-form-urlencoded',
                    success: function(response) {
                        button.closest('.give-credit').remove();
                        location.reload();
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX Error:', error);
                        alert('An error occurred. Please try again.');
                    }
                });
            });
        } catch (e) {
            console.error('JSON Parse Error:', e);
            alert('Invalid data format. Please try again.');
        }
    });
});

</script>

<?= $this->endsection('content') ?>