<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="flex-grow flex flex-col items-stretch bg-gray-100 h-auto">
	<div class="sub-menu-bar flex flex-col items-stretch h-full">
		<div class="p-20px bg-white"><h2 class="text-2xl">Reports</h2></div>
		<div class="px-15px flex justify-start items-center bg-white">
			<a href="/leaderboard/reports/departments" class="p-10px">Departments</a>
			<a href="/leaderboard/reports/campaigns" class="p-10px">Campaigns</a>
			<a href="/leaderboard/reports/campaign-reviews" class="p-10px">Campaign Reviews</a>
			<a href="/leaderboard/reports/fieldops-usage" class="border-b-2 border-blue-500 router-link-exact-active p-10px" aria-current="page">Fieldops Usage</a>
			<!-- <a href="/leaderboard/reports/projection" class="p-10px">Projection</a> -->
		</div>
		<?php
			$currentDate = date('Y-m-d');
			$oneMonthAgo = date('Y-m-d', strtotime('-15 day', strtotime($currentDate)));
			$defaultFromDate = $oneMonthAgo;
			$defaultToDate = $currentDate;
		?>
		<div class="flex-grow">
			<div class="p-25px">
				<div class="p-20px bg-white rounded-4px shadow w-full">
					<div class="flex justify-end items-center mb-20px">
					<div class="filter flex justify-end items-baseline">
						<svg class="svg-inline--fa fa-calendar-day" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="calendar-day" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
							<path
								class=""
								fill="currentColor"
								d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm80 64c-8.8 0-16 7.2-16 16v96c0 8.8 7.2 16 16 16h96c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80z"
							></path>
						</svg>
						<p class="font-bold">From</p>
						<input min="2021-06-30" class="p-1" type="date" name="from_date" id="from_date" value="<?php echo htmlspecialchars($defaultFromDate); ?>"/>
						<p class="font-bold">To</p>
						<input class="p-1" type="date" name="to_date" id="to_date" value="<?php echo htmlspecialchars($defaultToDate); ?>"/>
						<button class="btn btn-blue" id="updateButton">
							Update
						</button>
					</div>
					</div>
					<div class="flex flex-col w-full overflow-x-auto items-stretch" id ="table-container">
						<table class="mb-15px">
							<thead>
								<tr>
									<th class="text-left px-20px py-10px cursor-pointer">
										Campaign UID
										<!---->
									</th>
									<th class="text-left px-20px py-10px cursor-pointer">
										Campaign Name
										<!---->
									</th>
									<th class="text-left px-20px py-10px cursor-pointer">
										pulseCheck Count
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
									</th>
									<th class="text-left px-20px py-10px cursor-pointer">
										Bio Count
										<!---->
									</th>
									<th class="text-left px-20px py-10px cursor-pointer">
										Total
										<!---->
									</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach ($campaigns as $campaign) : ?>
								<tr class="!bg-opacity-50 odd:bg-sky-100">
									<td class="px-20px py-15px">1B85A09AA6CG<?= esc($campaign['ID']) ?></td>
									<td class="px-20px py-15px"><?= esc($campaign['name']) ?></td>
									<td class="px-20px py-15px"></td>
									<td class="px-20px py-15px"></td>
									<td class="px-20px py-15px"></td>
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
<script>
document.getElementById('updateButton').addEventListener('click', function() {
    const fromDate = document.getElementById('from_date').value;
    const toDate = document.getElementById('to_date').value;
    console.log(fromDate, toDate);
    
    $.ajax({
        url: '/leaderboard/reports/campaigns/filter',
        type: 'POST',
        data: { from_date: fromDate, to_date: toDate }, 
        dataType: 'json', 
        success: function(response) {
            let html = '<table class="mb-15px">' +
                        '<thead>' +
                            '<tr>' +
                                '<th class="text-left px-20px py-10px cursor-pointer">Campaign_UID</th>' +
                                '<th class="text-left px-20px py-10px cursor-pointer">Campaign Name</th>' +
                                '<th class="text-left px-20px py-10px cursor-pointer">pulseCheck Count</th>' +
                                '<th class="text-left px-20px py-10px cursor-pointer">Bio Count</th>' +
                                '<th class="text-left px-20px py-10px cursor-pointer">Total</th>' +
                            '</tr>' +
                        '</thead>' +
                        '<tbody>';
            response.forEach(campaign => {
                html += '<tr class="!bg-opacity-50 odd:bg-sky-100">' +
                            `<td class="px-20px py-15px">1B85A09AA6${campaign.ID}</td>` +
                            `<td class="px-20px py-15px">${campaign.name}</td>` +
                            `<td class="px-20px py-15px"></td>` +
                            `<td class="px-20px py-15px"></td>` +
                            `<td class="px-20px py-15px"></td>` +
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