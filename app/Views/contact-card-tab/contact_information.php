<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<style>
.tab-link.active {
    font-weight: bold;
    color: #1a73e8; /* Example color */
}
</style>
<div class="headerTop">
	<div class="dropMenuWrap flexBetween">
		<div class="pageNameWrap">
			<h3 class="secTitle">Operate</h3>
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
<!-- <div class="container-fluid"> -->
<div class="flex-grow flex flex-col items-stretch bg-gray-100 h-auto">
	<div class="headline bg-white p-20px border-b border-gray-200">
		<h1 class="text-2xl">Manage Your Account</h1>
	</div>
	<div class="flex flex-grow justify-start">
		<div class="w-1/4 max-w-200px flex flex-shrink-0 justify-start items-start flex-col">
			<h2 class="text-xl p-15px pt-30px">Company Settings</h2>
			<div class="p-15px">
				<div class="links flex flex-col border-l border-gray-400">
					<!-- <a href="/settings/general/connect-social-media" class="border-blue-500 text-blue-500 border-l-2 p-15px">
						<svg class="svg-inline--fa fa-chart-line mr-5px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chart-line" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
							<path
								class=""
								fill="currentColor"
								d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z"
							></path>
						</svg>
						General
					</a> -->
					<a href="<?= base_url('/settings/dispatch/campaigns') ?>" class="p-15px" tabindex="0">
						<svg
							class="svg-inline--fa fa-arrow-right-arrow-left mr-5px"
							aria-hidden="true"
							focusable="false"
							data-prefix="fas"
							data-icon="arrow-right-arrow-left"
							role="img"
							xmlns="http://www.w3.org/2000/svg"
							viewBox="0 0 448 512"
						>
							<path
								class=""
								fill="currentColor"
								d="M438.6 150.6c12.5-12.5 12.5-32.8 0-45.3l-96-96c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.7 96 32 96C14.3 96 0 110.3 0 128s14.3 32 32 32l306.7 0-41.4 41.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l96-96zm-333.3 352c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 416 416 416c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0 41.4-41.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-96 96c-12.5 12.5-12.5 32.8 0 45.3l96 96z"
							></path>
						</svg>
						Dispatch
					</a>
					<!---->
					<a href="<?= base_url('/settings/contact-card/contact-information') ?>" class="tab-link border-blue-500 text-blue-500 border-l-2 p-15px">
						<svg class="svg-inline--fa fa-address-card mr-5px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="address-card" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
							<path
								class=""
								fill="currentColor"
								d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 256h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zm256-32H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16z"
							></path>
						</svg>
						Contact Card
					</a>
					<!---->
					<!-- <a href="/settings/billing/billing_subscription" class="p-15px">
						<svg class="svg-inline--fa fa-credit-card mr-5px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="credit-card" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
							<path
								class=""
								fill="currentColor"
								d="M64 32C28.7 32 0 60.7 0 96v32H576V96c0-35.3-28.7-64-64-64H64zM576 224H0V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V224zM112 352h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm112 16c0-8.8 7.2-16 16-16H368c8.8 0 16 7.2 16 16s-7.2 16-16 16H240c-8.8 0-16-7.2-16-16z"
							></path>
						</svg>
						Billing
					</a> -->
				</div>
			</div>
		</div>
		<div class="flex flex-col">
			<div class="sub-menu-bar pl-25px">
				<div class="flex justify-start items-center border-b border-gray-300">
					<a href="<?= base_url('/settings/contact-card/contact-information') ?>" class="tab-link active border-b-2 border-blue-500 text-blue-500 router-link-exact-active p-15px">Contact Information</a>
					<a aria-current="page" href="<?= base_url('/settings/contact-card/templates') ?>" class="tab-link p-15px">Templates</a>
				</div>
			</div>
			<div class="p-25px flex flex-col justify-start items-stretch contact-information">
				<div class="card p-10px bg-white rounded-4px shadow max-w-1000px min-w-600px self-center">
					<div class="flex flex-col justify-start items-stretch">
						<div class="row p-10px mb-20px">
							<h2 class="text-30px font-light mb-10px">Share</h2>
							<p class="text-16px">Your company QR code will contain all your contact card information when a customer scans it to their phone contact list</p>
						</div>
						<div class="flex justify-center p-10px">
							<div class="grid grid-cols-2 grid-flow-row auto-rows-auto gap-20px w-600px">
								<div class="col-span-2 flex justify-between items-center border-2 rounded-4px border-black p-10px">
									<img src="" alt="" />
									<h2 class="w-1/3 text-center text-24px font-600">Scan to save us to your contacts.</h2>
									 <img id="qr-image" class="w-1/3" src="<?= base_url('image/qrcode.png') ?>" alt="QR Code" />
								</div>
								<button id="download-png" class="border-2 rounded-4px p-15px border-blue-500 text-blue-500 flex justify-evenly items-center">
									<div class=""></div>
									<div class="flex flex-col items-center"><span class="font-bold text-16px mb-2px">Download PNG</span><span>High quality image</span></div>
									<svg class="svg-inline--fa fa-download" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
										<path
											class=""
											fill="currentColor"
											d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V274.7l-73.4-73.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0l128-128c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L288 274.7V32zM64 352c-35.3 0-64 28.7-64 64v32c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V416c0-35.3-28.7-64-64-64H346.5l-45.3 45.3c-25 25-65.5 25-90.5 0L165.5 352H64zm368 56a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"
										></path>
									</svg>
								</button>
								<button id="download-svg" class="border-2 rounded-4px p-15px border-blue-500 text-blue-500 flex justify-evenly items-center">
									<div class=""></div>
									<div class="flex flex-col items-center"><span class="font-bold text-16px mb-2px">Download SVG</span><span>Scalable vector graphic</span></div>
									<svg class="svg-inline--fa fa-download" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
										<path
											class=""
											fill="currentColor"
											d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V274.7l-73.4-73.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0l128-128c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L288 274.7V32zM64 352c-35.3 0-64 28.7-64 64v32c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V416c0-35.3-28.7-64-64-64H346.5l-45.3 45.3c-25 25-65.5 25-90.5 0L165.5 352H64zm368 56a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"
										></path>
									</svg>
								</button>
							</div>
						</div>
					</div>
					<div class="flex flex-col justify-start items-stretch">
              		 <form id="contact-card-form" method="post" enctype="multipart/form-data">
							<div class="row p-10px mb-1rem">
								<h2 class="text-30px font-light">Configure</h2>
							</div>
							<div class="row p-10px flex">
								<div class="column w-2/5 flex justify-center items-start">
									<div class="relative">
										<div
											class="h-200px w-200px rounded-1/2 mt-2rem bg-center bg-contain bg-no-repeat" id="logo-upload-button" 
											style='background-image: url("<?= base_url('/image/company-logo.jpg')?>");'
										></div>
										<!-- <button id="logo-upload-button" class="absolute bottom-10px right-10px h-40px w-40px flex justify-center items-center rounded-1/2 btn btn-blue">
											<svg class="svg-inline--fa fa-pen text-white" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
												<path
													class=""
													fill="currentColor"
													d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"
												></path>
											</svg>
										</button> -->
										<input id="logo-upload" hidden="" name="image" type="file" />
									</div>
								</div>
								<div class="column w-full">
									<div class="row flex justify-start items-center mb-20px">
										<h3 class="text-27px font-light mr-10px">Hales Air Conditioning Services</h3>
										<button id="show-account-name-form-button" class="btn bg-gray-200 text-xs p-15px">
											<svg class="svg-inline--fa fa-pen" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
												<path
													class=""
													fill="currentColor"
													d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"
												></path>
											</svg>
										</button>
									</div>
									<div class="info-field mb-20px">
										<h5 class="text-lg font-bold">Primary Phone Number</h5>
										<p class="text-sm text-gray-500 my-2">This is the phone number you want your customers to call, this can be a tracked phone number.</p>
										<input class="rounded-4px px-15px py-8px border" type="number" name="primary" id="primary" />
									</div>
									<div class="info-field mb-20px">
										<h5 class="text-lg font-bold">SMS Phone Number</h5>
										<p class="text-sm text-gray-500 my-2">This is the phone number you want your customers to text.</p>
										<input class="rounded-4px px-15px py-8px border" type="number" name="sms" id="sms" />
									</div>
									<div class="info-field flex flex-col justify-start items-start mb-20px">
										<h5 class="text-lg font-bold">Outbound Phone Numbers</h5>
										<p class="text-sm text-gray-500 my-2">These are the phone numbers you may call your customer from.</p>
										<div class="w-auto flex flex-col items-stretch">
											<div class="number-list flex justify-between items-center hover px-20px border hover:border-gray-500 p-10px my-10px rounded-4px">
												<div class="number text-left mr-20px">
													<p><?= esc($contactcard['primary_number']) ?></p>
												</div>
											</div>
										</div>
										<!-- <div class="add-form mt-10px"><button id="add-phone-number-button" class="btn btn-green">Add Phone Number</button></div> -->
									</div>
									<div class="info-field flex flex-col justify-start items-start mb-20px">
										<h5 class="text-lg font-bold">Emails</h5>
										<p class="text-sm text-gray-500 my-2">Emails where a customer can reach you for support or service.</p>
										<div class="7``w-auto flex flex-col items-stretch">
											<div class="number-list flex justify-between items-center hover px-20px border hover:border-gray-500 p-10px my-10px rounded-4px">
												<div class="number text-left mr-20px">
													<!-- <p>customer.support@halesac.com</p> -->
													<input type="email" name="email" placeholder="customer.support@halesac.com" value="" />
												</div>
											</div>
										</div>
										<!-- <div class="add-form mt-10px"><button id="add-email-button" class="btn btn-green">Add Email</button></div> -->
									</div>
									<div class="info-field mb-20px">
										<h5 class="text-lg font-bold">Search Terms</h5>
										<p class="text-sm text-gray-500 my-2">A native search on a smart phone will prioritize the results using the keywords associated within your contact card.</p>
										<input class="rounded-4px px-15px py-8px border w-full" type="text" name="search" id="search" />
									</div>
									<div class="info-field mb-30px">
										<h5 class="text-lg font-bold">Notes</h5>
										<textarea class="w-full resize-none rounded-4px px-15px py-8px border-1" name="notes" id="notes" rows="5"></textarea>
									</div>
									<div class="flex items-center mb-20px">
										<svg
											class="svg-inline--fa fa-circle-info text-blue-500 mr-10px text-20px"
											aria-hidden="true"
											focusable="false"
											data-prefix="far"
											data-icon="circle-info"
											role="img"
											xmlns="http://www.w3.org/2000/svg"
											viewBox="0 0 512 512"
										>
											<path
												class=""
												fill="currentColor"
												d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24h-8V248c0-13.3-10.7-24-24-24H216c-13.3 0-24 10.7-24 24s10.7 24 24 24h24v64H216zm40-144a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"
											></path>
										</svg>
										<p class="text-16px mr-10px">Send Contact Card after pulseCheck</p>
										<div class="cursor-pointer">
											<svg
												class="svg-inline--fa fa-toggle-on text-blue-500 text-30px"
												aria-hidden="true"
												focusable="false"
												data-prefix="fas"
												data-icon="toggle-on"
												role="img"
												xmlns="http://www.w3.org/2000/svg"
												viewBox="0 0 576 512"
											>
												<path class="" fill="currentColor" d="M192 64C86 64 0 150 0 256S86 448 192 448H384c106 0 192-86 192-192s-86-192-192-192H192zm192 96a96 96 0 1 1 0 192 96 96 0 1 1 0-192z"></path>
											</svg>
										</div>
									</div>
									<div class="bg-orange-100 rounded-4px p-20px mb-30px">
										<!-- <div class="grid grid-cols-2 grid-rows-2 gap-10px mb-20px">
											<div class="flex justify-start items-center"><input class="mr-30px" type="radio" name="time" id="30" value="60" /><label for="1">30 minutes</label></div>
											<div class="flex justify-start items-center"><input class="mr-30px" type="radio" name="time" id="60" value="120" /><label for="2">1 hour</label></div>
											<div class="flex justify-start items-center"><input class="mr-30px" type="radio" name="time" id="90" value="180" /><label for="3">1:30 hour</label></div>
											<div class="flex justify-start items-center"><input class="mr-30px" type="radio" name="time" id="120" value="240" /><label for="4">2 hour</label></div>
										</div> -->
										<p class="">*Contact Card will be sent 30 minutes after pulseCheck</p>
									</div>
									<div class="submit-button"><button id="save-changes-button" class="btn btn-blue">Save Changes</button></div>
								</div>
							</div>
                  </form>
					</div>
					<!---->
				</div>
			</div>
		</div>
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
<script>
$(document).ready(function () {
    $('#save-changes-button').on('click', function (e) {
        e.preventDefault(); // Prevent the form from submitting normally

        var formData = new FormData($('#contat-card-form')[0]);
        console.log(formData,'formdata');

        $.ajax({
            url: "<?= base_url('/contact-card') ?>", // Your route URL
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.success) {
                    // alert(response.message);
					location.reload();
                } else {
                    alert("There was an error processing your request.");
                }
            },
            error: function () {
                alert("An error occurred while submitting the form.");
            }
        });
    });
});

document.getElementById('logo-upload-button').addEventListener('click', function() {
	document.getElementById('logo-upload').click();
});

	function downloadPNG() {
      const imgElement = document.getElementById('qr-image');
      const canvas = document.createElement('canvas');
      const ctx = canvas.getContext('2d');

      // Set canvas dimensions to match the image
      canvas.width = imgElement.naturalWidth;
      canvas.height = imgElement.naturalHeight;

      // Draw the image on the canvas
      ctx.drawImage(imgElement, 0, 0);

      // Convert canvas to data URL and trigger download
      const pngUrl = canvas.toDataURL('image/png');
      const link = document.createElement('a');
      link.href = pngUrl;
      link.download = 'qrcode.png';
      link.click();
   }

   function downloadSVG() {
      const imgElement = document.getElementById('qr-image');
      
      // Ensure that the image is an SVG or provide the SVG data separately
      const svgUrl = imgElement.src; // Use SVG image URL directly
      const link = document.createElement('a');
      link.href = svgUrl;
      link.download = 'qrcode.svg';
      link.click();
   }

// Attach event listeners to buttons
document.getElementById('download-png').addEventListener('click', downloadPNG);
document.getElementById('download-svg').addEventListener('click', downloadSVG);

</script>
<?= $this->endsection('content') ?>			
