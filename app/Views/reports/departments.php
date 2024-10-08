<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="headerTop">
	<div class="dropMenuWrap flexBetween">
		<div class="pageNameWrap">
			<h3 class="secTitle">Departments</h3>
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
<div id="app">
	<div class="flex-grow flex flex-col items-stretch bg-gray-100 h-auto">
		<div class="sub-menu-bar flex flex-col items-stretch h-full">
			<!-- <div class="p-20px bg-white">
				<h2 class="text-2xl">Departments</h2>
			</div> -->
			<div class="px-15px flex justify-start items-center bg-white">
				<a href="/leaderboard/reports/departments" class="border-b-2 border-blue-500 router-link-exact-active p-10px" aria-current="page">Departments</a>
				<a href="/leaderboard/reports/campaigns" class="p-10px">Campaigns</a><a href="/leaderboard/reports/campaign-reviews" class="p-10px">Campaign Reviews</a>
				<a href="/leaderboard/reports/fieldops-usage" class="p-10px">Fieldops Usage</a>
				<!-- <a href="/leaderboard/reports/projection" class="p-10px">Projection</a> -->
			</div>
			<?php
			$currentDate = date('Y-m-d');
			$oneMonthAgo = date('Y-m-d', strtotime('-15 day', strtotime($currentDate)));
			$defaultFromDate = $oneMonthAgo;
			$defaultToDate = $currentDate;
			?>
			<div class="flex-grow">
				<div class="py-25px">
					<div class="p-20px bg-white rounded-4px shadow w-full">
						<div class="flex justify-end mb-15px">
							<div class="relative w-full flex justify-end items-center">
								<button>
									<svg
										class="svg-inline--fa fa-bars text-xl text-gray-400 hover:text-blue-500"
										aria-hidden="true"
										focusable="false"
										data-prefix="fas"
										data-icon="bars"
										role="img"
										xmlns="http://www.w3.org/2000/svg"
										viewBox="0 0 448 512">
										<path
											class=""
											fill="currentColor"
											d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"></path>
									</svg>
								</button>
								<!---->
							</div>
						</div>
						<div class="flex justify-between items-center mb-20px">
							<div class="flex justify-start items-center p-10px border border-gray-300 rounded-4px w-300px">
								<svg
									class="svg-inline--fa fa-magnifying-glass mr-10px"
									aria-hidden="true"
									focusable="false"
									data-prefix="fas"
									data-icon="magnifying-glass"
									role="img"
									xmlns="http://www.w3.org/2000/svg"
									viewBox="0 0 512 512">
									<path
										class=""
										fill="currentColor"
										d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
								</svg>
								<input class="!outline-none !border-none w-full !ring-transparent p-0" type="search" name="search" id="search" placeholder="Search" />
							</div>
							<div class="filter flex justify-end items-baseline">
								<svg class="svg-inline--fa fa-calendar-day mr-3" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="calendar-day" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
									<path
										class=""
										fill="currentColor"
										d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm80 64c-8.8 0-16 7.2-16 16v96c0 8.8 7.2 16 16 16h96c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80z"></path>
								</svg>
								<p class="font-bold">From</p>
								<input min="2021-06-30" class="p-1 shadow-date mx-10" type="date" name="from_date" id="from_date" value="<?php echo htmlspecialchars($defaultFromDate); ?>" />
								<p class="font-bold">To</p>
								<input class="p-1 shadow-date mx-10" type="date" name="to_date" id="to_date" value="<?php echo htmlspecialchars($defaultToDate); ?>" />
								<button class="btn btn-blue" id="updateButton">
									<svg class="svg-inline--fa fa-rotate pr-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="rotate" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
										<path
											class=""
											fill="currentColor"
											d="M142.9 142.9c62.2-62.2 162.7-62.5 225.3-1L327 183c-6.9 6.9-8.9 17.2-5.2 26.2s12.5 14.8 22.2 14.8H463.5c0 0 0 0 0 0H472c13.3 0 24-10.7 24-24V72c0-9.7-5.8-18.5-14.8-22.2s-19.3-1.7-26.2 5.2L413.4 96.6c-87.6-86.5-228.7-86.2-315.8 1C73.2 122 55.6 150.7 44.8 181.4c-5.9 16.7 2.9 34.9 19.5 40.8s34.9-2.9 40.8-19.5c7.7-21.8 20.2-42.3 37.8-59.8zM16 312v7.6 .7V440c0 9.7 5.8 18.5 14.8 22.2s19.3 1.7 26.2-5.2l41.6-41.6c87.6 86.5 228.7 86.2 315.8-1c24.4-24.4 42.1-53.1 52.9-83.7c5.9-16.7-2.9-34.9-19.5-40.8s-34.9 2.9-40.8 19.5c-7.7 21.8-20.2 42.3-37.8 59.8c-62.2 62.2-162.7 62.5-225.3 1L185 329c6.9-6.9 8.9-17.2 5.2-26.2s-12.5-14.8-22.2-14.8H48.4h-.7H40c-13.3 0-24 10.7-24 24z"></path>
									</svg>
									Update
								</button>
							</div>
						</div>
						<div class="flex flex-col w-full overflow-x-auto items-stretch" id="table-container">
							<table class="mb-15px">
								<thead>
									<tr>
										<th class="text-left px-20px py-10px cursor-pointer">
											Name
											<!---->
										</th>
										<!-- <th class="text-left px-20px py-10px cursor-pointer">
											Leaderboard Points
											<svg
												class="svg-inline--fa fa-angle-down"
												aria-hidden="true"
												focusable="false"
												data-prefix="fas"
												data-icon="angle-down"
												role="img"
												xmlns="http://www.w3.org/2000/svg"
												viewBox="0 0 448 512"
											>
												<path
													class=""
													fill="currentColor"
													d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"
												></path>
											</svg>
										</th> -->
										<!-- <th class="text-left px-20px py-10px cursor-pointer"> -->
										<!-- pulseM Index -->
										<!---->
										<!-- </th> -->
										<!-- <th class="text-left px-20px py-10px cursor-pointer"> -->
										<!-- Pulse Check Points -->
										<!---->
										<!-- </th> -->
										<th class="text-left px-20px py-10px cursor-pointer">
											Review Leads
											<!---->
										</th>
										<!-- <th class="text-left px-20px py-10px cursor-pointer"> -->
										<!-- Social Points -->
										<!---->
										<!-- </th> -->
										<th class="text-left px-20px py-10px cursor-pointer">
											Happy Count
											<!---->
										</th>
										<th class="text-left px-20px py-10px cursor-pointer">
											Unhappy Count
											<!---->
										</th>
									</tr>
								</thead>
								<tbody>
									<?php // print_r($campaigns);
									?>
									<?php foreach ($departments as $campaign) : ?>
										<tr class="!bg-opacity-50 odd:bg-sky-100">
											<td class="px-20px py-15px"><?= $campaign->department; ?></td>
											<!-- <td class="px-20px py-15px"></td> -->
											<!-- <td class="px-20px py-15px"></td> -->
											<td class="px-20px py-15px"></td>
											<!-- <td class="px-20px py-15px"></td> -->
											<!-- <td class="px-20px py-15px"></td> -->
											<td class="px-20px py-15px"><?= $campaign->positive_count; ?></td>
											<td class="px-20px py-15px"><?= $campaign->negative_count; ?></td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
							<!---->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	document.getElementById('updateButton').addEventListener('click', function() {
		const fromDate = document.getElementById('from_date').value;
		const toDate = document.getElementById('to_date').value;
		console.log(fromDate, toDate);

		$.ajax({
			url: '<?=base_url('/leaderboard/reports/filterDepartments')?>',
			type: 'POST',
			data: {
				from_date: fromDate,
				to_date: toDate
			},
			dataType: 'json',
			success: function(response) {
				let html = '<table class="mb-15px">' +
					'<thead>' +
					'<tr>' +
					'<th class="text-left px-20px py-10px cursor-pointer">Name</th>' +
					'<th class="text-left px-20px py-10px cursor-pointer">Review Leads</th>' +
					'<th class="text-left px-20px py-10px cursor-pointer">Happy Count</th>' +
					'<th class="text-left px-20px py-10px cursor-pointer">Unhappy Count</th>' +
					'</tr>' +
					'</thead>' +
					'<tbody>';
				response.forEach(campaign => {
					html += '<tr class="!bg-opacity-50 odd:bg-sky-100">' +
						`<td class="px-20px py-15px">${campaign.department}</td>` +
						`<td class="px-20px py-15px"></td>` +
						`<td class="px-20px py-15px">${campaign.positive_count || ''}</td>` +
						`<td class="px-20px py-15px">${campaign.negative_count || ''}</td>` +
						'</tr>';
				});
				html += '</tbody></table>';
				// Append the constructed HTML to the target container
				document.getElementById('table-container').innerHTML = html;
			},
			error: function(xhr, status, error) {
				console.error('AJAX Error:', status, error);
				console.error('Response Text:', xhr.responseText);
			}
		});
	});
</script>
<?= $this->endsection('content') ?>