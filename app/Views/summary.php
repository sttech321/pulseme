<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="headerTop">
	<div class="dropMenuWrap flexBetween">
		<div class="pageNameWrap">
			<h3 class="secTitle">Leaderboard</h3>
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
<div id="app" data-v-app="">
	<div class="flex flex-col h-auto min-h-screen">
		<div class="flex-grow flex flex-col items-stretch bg-gray-100 h-auto">
			<div class="w-full flex flex-col justify-start items-stretch p-25px">
				<div class="filter flex justify-end items-center mb-20px">
					<!-- <svg class="svg-inline--fa fa-calendar-day mr-20px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="calendar-day" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
						<path
							class=""
							fill="currentColor"
							d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm80 64c-8.8 0-16 7.2-16 16v96c0 8.8 7.2 16 16 16h96c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80z"
						></path>
					</svg> -->
					<!-- <p class="font-bold">From</p>
					<p class="mx-10px">2024-08-01</p>
					<p class="font-bold">To</p>
					<p class="mx-10px">2024-08-08</p>
					<p class="font-bold">Weekly</p>
					<svg
						class="svg-inline--fa fa-toggle-on text-30px mx-10px text-green-500 cursor-pointer"
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
					<p class="font-bold">Monthly</p>
					<button class="btn btn-blue ml-10px">
						<svg class="svg-inline--fa fa-rotate pr-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="rotate" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
							<path
								class=""
								fill="currentColor"
								d="M142.9 142.9c62.2-62.2 162.7-62.5 225.3-1L327 183c-6.9 6.9-8.9 17.2-5.2 26.2s12.5 14.8 22.2 14.8H463.5c0 0 0 0 0 0H472c13.3 0 24-10.7 24-24V72c0-9.7-5.8-18.5-14.8-22.2s-19.3-1.7-26.2 5.2L413.4 96.6c-87.6-86.5-228.7-86.2-315.8 1C73.2 122 55.6 150.7 44.8 181.4c-5.9 16.7 2.9 34.9 19.5 40.8s34.9-2.9 40.8-19.5c7.7-21.8 20.2-42.3 37.8-59.8zM16 312v7.6 .7V440c0 9.7 5.8 18.5 14.8 22.2s19.3 1.7 26.2-5.2l41.6-41.6c87.6 86.5 228.7 86.2 315.8-1c24.4-24.4 42.1-53.1 52.9-83.7c5.9-16.7-2.9-34.9-19.5-40.8s-34.9 2.9-40.8 19.5c-7.7 21.8-20.2 42.3-37.8 59.8c-62.2 62.2-162.7 62.5-225.3 1L185 329c6.9-6.9 8.9-17.2 5.2-26.2s-12.5-14.8-22.2-14.8H48.4h-.7H40c-13.3 0-24 10.7-24 24z"
							></path>
						</svg>
						Sync
					</button> -->
				</div>
				<div class="grid grid-cols-3 grid-rows-auto <xl:grid-cols-2 <lg:grid-cols-1 gap-20px w-full">
					<div class="row-span-2">
						<div class="card rounded-4px shadow overflow-hidden bg-white w-full">
							<div class="header w-full text-center bg-blue-500">
								<div class="p-10px"><h2 class="text-white text-3xl font-light">Company Overall</h2></div>
								<div class="stats flex justify-between">
									<div class="stat w-full odd:bg-white odd:bg-opacity-15 p-10px text-center text-white">
										<h4 class="text-1.5rem">8.6</h4>
										<p>pulseM Index</p>
									</div>
									<div class="stat w-full odd:bg-white odd:bg-opacity-15 p-10px text-center text-white">
										<h4 class="text-1.5rem">736</h4>
										<p>Points</p>
									</div>
									<div class="stat w-full odd:bg-white odd:bg-opacity-15 p-10px text-center text-white">
										<h4 class="text-1.5rem">24</h4>
										<p>Review Leads</p>
									</div>
								</div>
							</div>
							<div class="p-10px flex justify-between hover:bg-gray-200 items-center">
								<div class="w-1/4 p-10px">
									<div class="w-100px h-100px rounded-1/2 border-4 border-blue-500 bg-center bg-contain bg-no-repeat" style='background-image: url(<?= base_url("/image/campaign/1715613782_original.png"); ?>);'></div>
								</div>
								<div class="w-3/4 p-10px text-center">
									<p class="mb-10px">Angelo Vazquez is ranked #1 overall!!</p>
									<div class="flex justify-between items-center bg-blue-500">
										<div class="p-10px text-white w-full odd:bg-white odd:bg-opacity-15 text-center">
											<p class="text-1.5rem">259</p>
											<p>Points</p>
										</div>
										<div class="p-10px text-white w-full odd:bg-white odd:bg-opacity-15 text-center">
											<p class="text-1.5rem">9</p>
											<p>Review Leads</p>
										</div>
									</div>
								</div>
							</div>
							<div class="p-10px flex justify-between hover:bg-gray-200 items-center">
								<div class="w-1/4 p-10px">
									<div class="w-100px h-100px rounded-1/2 border-4 border-blue-500 bg-center bg-contain bg-no-repeat" style='background-image: url(<?= base_url("/image/campaign/1717590783_original.jpg"); ?>);'></div>
								</div>
								<div class="w-3/4 p-10px text-center">
									<p class="mb-10px">Scott Neubert is ranked #2 overall!!</p>
									<div class="flex justify-between items-center bg-blue-500">
										<div class="p-10px text-white w-full odd:bg-white odd:bg-opacity-15 text-center">
											<p class="text-1.5rem">150</p>
											<p>Points</p>
										</div>
										<div class="p-10px text-white w-full odd:bg-white odd:bg-opacity-15 text-center">
											<p class="text-1.5rem">5</p>
											<p>Review Leads</p>
										</div>
									</div>
								</div>
							</div>
							<div class="p-10px flex justify-between hover:bg-gray-200 items-center">
								<div class="w-1/4 p-10px">
									<div class="w-100px h-100px rounded-1/2 border-4 border-blue-500 bg-center bg-contain bg-no-repeat" style='background-image: url(<?= base_url("/image/campaign/1711571243_original.jpg"); ?>);'></div>
								</div>
								<div class="w-3/4 p-10px text-center">
									<p class="mb-10px">Aaron Krasnow is ranked #3 overall!!</p>
									<div class="flex justify-between items-center bg-blue-500">
										<div class="p-10px text-white w-full odd:bg-white odd:bg-opacity-15 text-center">
											<p class="text-1.5rem">129</p>
											<p>Points</p>
										</div>
										<div class="p-10px text-white w-full odd:bg-white odd:bg-opacity-15 text-center">
											<p class="text-1.5rem">4</p>
											<p>Review Leads</p>
										</div>
									</div>
								</div>
							</div>
							<div class="p-10px flex justify-center hover:bg-gray-200 items-center">
								<a href="<?= base_url('/leaderboard/reports/campaigns') ?>" class="flex justify-center items-center w-full">
									<svg
										class="svg-inline--fa fa-arrow-right mx-5px p-10px bg-gray-300 rounded-full"
										aria-hidden="true"
										focusable="false"
										data-prefix="fas"
										data-icon="arrow-right"
										role="img"
										xmlns="http://www.w3.org/2000/svg"
										viewBox="0 0 448 512"
									>
										<path
											class=""
											fill="currentColor"
											d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"
										></path>
									</svg>
									View All
								</a>
							</div>
						</div>
					</div>
					<div class="">
						<div class="card rounded-4px shadow overflow-hidden bg-white w-full">
							<div class="header w-full text-center bg-green-500">
								<div class="p-10px"><h2 class="text-white text-3xl font-light">Service Technician is ranked #1</h2></div>
								<div class="stats flex justify-between">
									<div class="stat w-full odd:bg-white odd:bg-opacity-15 p-10px text-center text-white">
										<h4 class="text-1.5rem">8.9</h4>
										<p>pulseM Index</p>
									</div>
									<div class="stat w-full odd:bg-white odd:bg-opacity-15 p-10px text-center text-white">
										<h4 class="text-1.5rem">604</h4>
										<p>Points</p>
									</div>
									<div class="stat w-full odd:bg-white odd:bg-opacity-15 p-10px text-center text-white">
										<h4 class="text-1.5rem">19</h4>
										<p>Review Leads</p>
									</div>
								</div>
							</div>
							<div class="p-10px flex justify-between hover:bg-gray-200 items-center">
								<div class="w-1/4 p-10px">
									<div class="w-100px h-100px rounded-1/2 border-4 border-blue-500 bg-center bg-contain bg-no-repeat" style='background-image: url(<?= base_url("/image/campaign/1715613782_original.png"); ?>)'></div>
								</div>
								<div class="w-3/4 p-10px text-center">
									<p class="mb-10px">Angelo Vazquez is ranked #1 in Service Technician!!</p>
									<div class="flex justify-between items-center bg-green-500">
										<div class="p-10px text-white w-full odd:bg-white odd:bg-opacity-15 text-center">
											<p class="text-1.5rem">259</p>
											<p>Points</p>
										</div>
										<div class="p-10px text-white w-full odd:bg-white odd:bg-opacity-15 text-center">
											<p class="text-1.5rem">9</p>
											<p>Review Leads</p>
										</div>
									</div>
								</div>
							</div>
							<div class="p-10px flex justify-between hover:bg-gray-200 items-center">
								<div class="w-1/4 p-10px">
									<div class="w-100px h-100px rounded-1/2 border-4 border-blue-500 bg-center bg-contain bg-no-repeat" style='background-image: url(<?= base_url("/image/campaign/1717590783_original.jpg"); ?>)'></div>
								</div>
								<div class="w-3/4 p-10px text-center">
									<p class="mb-10px">Scott Neubert is ranked #2 in Service Technician!!</p>
									<div class="flex justify-between items-center bg-green-500">
										<div class="p-10px text-white w-full odd:bg-white odd:bg-opacity-15 text-center">
											<p class="text-1.5rem">150</p>
											<p>Points</p>
										</div>
										<div class="p-10px text-white w-full odd:bg-white odd:bg-opacity-15 text-center">
											<p class="text-1.5rem">5</p>
											<p>Review Leads</p>
										</div>
									</div>
								</div>
							</div>
							<div class="p-10px flex justify-between hover:bg-gray-200 items-center">
								<div class="w-1/4 p-10px">
									<div class="w-100px h-100px rounded-1/2 border-4 border-blue-500 bg-center bg-contain bg-no-repeat" style='background-image: url(<?= base_url("/image/campaign/1711571243_original.jpg"); ?>)'></div>
								</div>
								<div class="w-3/4 p-10px text-center">
									<p class="mb-10px">Aaron Krasnow is ranked #3 in Service Technician!!</p>
									<div class="flex justify-between items-center bg-green-500">
										<div class="p-10px text-white w-full odd:bg-white odd:bg-opacity-15 text-center">
											<p class="text-1.5rem">129</p>
											<p>Points</p>
										</div>
										<div class="p-10px text-white w-full odd:bg-white odd:bg-opacity-15 text-center">
											<p class="text-1.5rem">4</p>
											<p>Review Leads</p>
										</div>
									</div>
								</div>
							</div>
							<div class="p-10px flex justify-center hover:bg-gray-200 items-center">
								<a href="<?= base_url('/leaderboard/reports/campaigns?department=Service Technician') ?>" class="flex justify-center items-center w-full">
									<svg
										class="svg-inline--fa fa-arrow-right mx-5px p-10px bg-gray-300 rounded-full"
										aria-hidden="true"
										focusable="false"
										data-prefix="fas"
										data-icon="arrow-right"
										role="img"
										xmlns="http://www.w3.org/2000/svg"
										viewBox="0 0 448 512"
									>
										<path
											class=""
											fill="currentColor"
											d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"
										></path>
									</svg>
									View All
								</a>
							</div>
						</div>
					</div>
					<div class="">
						<div class="card rounded-4px shadow overflow-hidden bg-white w-full">
							<div class="header w-full text-center bg-yellow-500">
								<div class="p-10px"><h2 class="text-white text-3xl font-light">Service Technician is ranked #2</h2></div>
								<div class="stats flex justify-between">
									<div class="stat w-full odd:bg-white odd:bg-opacity-15 p-10px text-center text-white">
										<h4 class="text-1.5rem">7.7</h4>
										<p>pulseM Index</p>
									</div>
									<div class="stat w-full odd:bg-white odd:bg-opacity-15 p-10px text-center text-white">
										<h4 class="text-1.5rem">93</h4>
										<p>Points</p>
									</div>
									<div class="stat w-full odd:bg-white odd:bg-opacity-15 p-10px text-center text-white">
										<h4 class="text-1.5rem">4</h4>
										<p>Review Leads</p>
									</div>
								</div>
							</div>
							<div class="p-10px flex justify-between hover:bg-gray-200 items-center">
								<div class="w-1/4 p-10px">
									<div class="w-100px h-100px rounded-1/2 border-4 border-blue-500 bg-center bg-contain bg-no-repeat" style='background-image: url(<?= base_url("image/campaign/1721661229_original.jpg"); ?>)'></div>
								</div>
								<div class="w-3/4 p-10px text-center">
									<p class="mb-10px">Eugene Lewis is ranked #1 in Service Technician !!</p>
									<div class="flex justify-between items-center bg-yellow-500">
										<div class="p-10px text-white w-full odd:bg-white odd:bg-opacity-15 text-center">
											<p class="text-1.5rem">60</p>
											<p>Points</p>
										</div>
										<div class="p-10px text-white w-full odd:bg-white odd:bg-opacity-15 text-center">
											<p class="text-1.5rem">2</p>
											<p>Review Leads</p>
										</div>
									</div>
								</div>
							</div>
							<div class="p-10px flex justify-between hover:bg-gray-200 items-center">
								<div class="w-1/4 p-10px">
									<div class="w-100px h-100px rounded-1/2 border-4 border-blue-500 bg-center bg-contain bg-no-repeat" style='background-image: url(<?= base_url("image/campaign/1721660864_original.png"); ?> )'></div>
								</div>
								<div class="w-3/4 p-10px text-center">
									<p class="mb-10px">Christopher Maggiolo is ranked #2 in Service Technician !!</p>
									<div class="flex justify-between items-center bg-yellow-500">
										<div class="p-10px text-white w-full odd:bg-white odd:bg-opacity-15 text-center">
											<p class="text-1.5rem">33</p>
											<p>Points</p>
										</div>
										<div class="p-10px text-white w-full odd:bg-white odd:bg-opacity-15 text-center">
											<p class="text-1.5rem">2</p>
											<p>Review Leads</p>
										</div>
									</div>
								</div>
							</div>
							<div class="p-10px flex justify-center hover:bg-gray-200 items-center">
								<a href="<?= base_url('/leaderboard/reports/campaigns?department=Service Technician') ?> " class="flex justify-center items-center w-full">
									<svg
										class="svg-inline--fa fa-arrow-right mx-5px p-10px bg-gray-300 rounded-full"
										aria-hidden="true"
										focusable="false"
										data-prefix="fas"
										data-icon="arrow-right"
										role="img"
										xmlns="http://www.w3.org/2000/svg"
										viewBox="0 0 448 512"
									>
										<path
											class=""
											fill="currentColor"
											d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"
										></path>
									</svg>
									View All
								</a>
							</div>
						</div>
					</div>
					<div class="">
						<div class="card rounded-4px shadow overflow-hidden bg-white w-full">
							<div class="header w-full text-center bg-blue-500">
								<div class="p-10px"><h2 class="text-white text-3xl font-light">Install Team is ranked #3</h2></div>
								<div class="stats flex justify-between">
									<div class="stat w-full odd:bg-white odd:bg-opacity-15 p-10px text-center text-white">
										<h4 class="text-1.5rem">9</h4>
										<p>pulseM Index</p>
									</div>
									<div class="stat w-full odd:bg-white odd:bg-opacity-15 p-10px text-center text-white">
										<h4 class="text-1.5rem">39</h4>
										<p>Points</p>
									</div>
									<div class="stat w-full odd:bg-white odd:bg-opacity-15 p-10px text-center text-white">
										<h4 class="text-1.5rem">1</h4>
										<p>Review Leads</p>
									</div>
								</div>
							</div>
							<div class="p-10px flex justify-between hover:bg-gray-200 items-center">
								<div class="w-1/4 p-10px">
									<div class="w-100px h-100px rounded-1/2 border-4 border-blue-500 bg-center bg-contain bg-no-repeat" style='background-image: url(<?= base_url("image/campaign/1711655622_original.jpg"); ?>)'></div>
								</div>
								<div class="w-3/4 p-10px text-center">
									<p class="mb-10px">Austin Harper is ranked #1 in Install Team!!</p>
									<div class="flex justify-between items-center bg-blue-500">
										<div class="p-10px text-white w-full odd:bg-white odd:bg-opacity-15 text-center">
											<p class="text-1.5rem">39</p>
											<p>Points</p>
										</div>
										<div class="p-10px text-white w-full odd:bg-white odd:bg-opacity-15 text-center">
											<p class="text-1.5rem">1</p>
											<p>Review Leads</p>
										</div>
									</div>
								</div>
							</div>
							<div class="p-10px flex justify-between hover:bg-gray-200 items-center">
								<div class="w-1/4 p-10px">
									<div class="w-100px h-100px rounded-1/2 border-4 border-blue-500 bg-center bg-contain bg-no-repeat" style='background-image: url(<?= base_url("image/campaign/1716232132_original.png"); ?>)'></div>
								</div>
								<div class="w-3/4 p-10px text-center">
									<p class="mb-10px">Casey Evett is ranked #2 in Install Team!!</p>
									<div class="flex justify-between items-center bg-blue-500">
										<div class="p-10px text-white w-full odd:bg-white odd:bg-opacity-15 text-center">
											<p class="text-1.5rem">0</p>
											<p>Points</p>
										</div>
										<div class="p-10px text-white w-full odd:bg-white odd:bg-opacity-15 text-center">
											<p class="text-1.5rem">0</p>
											<p>Review Leads</p>
										</div>
									</div>
								</div>
							</div>
							<div class="p-10px flex justify-center hover:bg-gray-200 items-center">
								<a href="<?= base_url('/leaderboard/reports/campaigns?department=Install Team') ?>" class="flex justify-center items-center w-full">
									<svg
										class="svg-inline--fa fa-arrow-right mx-5px p-10px bg-gray-300 rounded-full"
										aria-hidden="true"
										focusable="false"
										data-prefix="fas"
										data-icon="arrow-right"
										role="img"
										xmlns="http://www.w3.org/2000/svg"
										viewBox="0 0 448 512"
									>
										<path
											class=""
											fill="currentColor"
											d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"
										></path>
									</svg>
									View All
								</a>
							</div>
						</div>
					</div>
					<div class="">
						<div class="card rounded-4px shadow overflow-hidden bg-white w-full">
							<div class="header w-full text-center bg-green-500">
								<div class="p-10px"><h2 class="text-white text-3xl font-light">Management is ranked #4</h2></div>
								<div class="stats flex justify-between">
									<div class="stat w-full odd:bg-white odd:bg-opacity-15 p-10px text-center text-white">
										<h4 class="text-1.5rem">0</h4>
										<p>pulseM Index</p>
									</div>
									<div class="stat w-full odd:bg-white odd:bg-opacity-15 p-10px text-center text-white">
										<h4 class="text-1.5rem">0</h4>
										<p>Points</p>
									</div>
									<div class="stat w-full odd:bg-white odd:bg-opacity-15 p-10px text-center text-white">
										<h4 class="text-1.5rem">0</h4>
										<p>Review Leads</p>
									</div>
								</div>
							</div>
							<div class="p-10px flex justify-between hover:bg-gray-200 items-center">
								<div class="w-1/4 p-10px">
									<div
										class="w-100px h-100px rounded-1/2 border-4 border-blue-500 bg-center bg-contain bg-no-repeat"
										style='background-image: url("<?= base_url('image/campaign/1713973037_original.jpg') ?>");'
									></div>
								</div>
								<div class="w-3/4 p-10px text-center">
									<p class="mb-10px">George McPherson is ranked #1 in Management!!</p>
									<div class="flex justify-between items-center bg-green-500">
										<div class="p-10px text-white w-full odd:bg-white odd:bg-opacity-15 text-center">
											<p class="text-1.5rem">0</p>
											<p>Points</p>
										</div>
										<div class="p-10px text-white w-full odd:bg-white odd:bg-opacity-15 text-center">
											<p class="text-1.5rem">0</p>
											<p>Review Leads</p>
										</div>
									</div>
								</div>
							</div>
							<div class="p-10px flex justify-center hover:bg-gray-200 items-center">
								<a href="/leaderboard/reports/campaigns?department=Management" class="flex justify-center items-center w-full">
									<svg
										class="svg-inline--fa fa-arrow-right mx-5px p-10px bg-gray-300 rounded-full"
										aria-hidden="true"
										focusable="false"
										data-prefix="fas"
										data-icon="arrow-right"
										role="img"
										xmlns="http://www.w3.org/2000/svg"
										viewBox="0 0 448 512"
									>
										<path
											class=""
											fill="currentColor"
											d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"
										></path>
									</svg>
									View All
								</a>
							</div>
						</div>
					</div>

					<div class="">
						<div class="card rounded-4px shadow overflow-hidden bg-white w-full">
							<div class="header w-full text-center bg-green-500">
								<div class="p-10px"><h2 class="text-white text-3xl font-light">Duct Cleaning is ranked #4</h2></div>
								<div class="stats flex justify-between">
									<div class="stat w-full odd:bg-white odd:bg-opacity-15 p-10px text-center text-white">
										<h4 class="text-1.5rem">0</h4>
										<p>pulseM Index</p>
									</div>
									<div class="stat w-full odd:bg-white odd:bg-opacity-15 p-10px text-center text-white">
										<h4 class="text-1.5rem">0</h4>
										<p>Points</p>
									</div>
									<div class="stat w-full odd:bg-white odd:bg-opacity-15 p-10px text-center text-white">
										<h4 class="text-1.5rem">0</h4>
										<p>Review Leads</p>
									</div>
								</div>
							</div>
							<div class="p-10px flex justify-between hover:bg-gray-200 items-center">
								<div class="w-1/4 p-10px">
									<div class="w-100px h-100px rounded-1/2 border-4 border-blue-500 bg-center bg-contain bg-no-repeat" style='background-image: url(<?= base_url("image/campaign/1716232132_original.png"); ?>)'></div>
								</div>
								<div class="w-3/4 p-10px text-center">
									<p class="mb-10px">Kiefer Hutcheson is ranked #1 in Duct Cleaning !!</p>
									<div class="flex justify-between items-center bg-green-500">
										<div class="p-10px text-white w-full odd:bg-white odd:bg-opacity-15 text-center">
											<p class="text-1.5rem">0</p>
											<p>Points</p>
										</div>
										<div class="p-10px text-white w-full odd:bg-white odd:bg-opacity-15 text-center">
											<p class="text-1.5rem">0</p>
											<p>Review Leads</p>
										</div>
									</div>
								</div>
							</div>
							<div class="p-10px flex justify-center hover:bg-gray-200 items-center">
								<a href="/leaderboard/reports/campaigns?department=Duct Cleaning " class="flex justify-center items-center w-full">
									<svg
										class="svg-inline--fa fa-arrow-right mx-5px p-10px bg-gray-300 rounded-full"
										aria-hidden="true"
										focusable="false"
										data-prefix="fas"
										data-icon="arrow-right"
										role="img"
										xmlns="http://www.w3.org/2000/svg"
										viewBox="0 0 448 512"
									>
										<path
											class=""
											fill="currentColor"
											d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"
										></path>
									</svg>
									View All
								</a>
							</div>
						</div>
					</div>
					<div class="">
						<div class="card rounded-4px shadow overflow-hidden bg-white w-full">
							<div class="header w-full text-center bg-yellow-500">
								<div class="p-10px"><h2 class="text-white text-3xl font-light">General is ranked #5</h2></div>
								<div class="stats flex justify-between">
									<div class="stat w-full odd:bg-white odd:bg-opacity-15 p-10px text-center text-white">
										<h4 class="text-1.5rem">0</h4>
										<p>pulseM Index</p>
									</div>
									<div class="stat w-full odd:bg-white odd:bg-opacity-15 p-10px text-center text-white">
										<h4 class="text-1.5rem">0</h4>
										<p>Points</p>
									</div>
									<div class="stat w-full odd:bg-white odd:bg-opacity-15 p-10px text-center text-white">
										<h4 class="text-1.5rem">0</h4>
										<p>Review Leads</p>
									</div>
								</div>
							</div>
							<div class="p-10px flex justify-between hover:bg-gray-200 items-center">
								<div class="w-1/4 p-10px">
									<div class="w-100px h-100px rounded-1/2 border-4 border-blue-500 bg-center bg-contain bg-no-repeat" style='background-image: url(<?= base_url("image/campaign/1709862934_original.png");?>)'></div>
								</div>
								<div class="w-3/4 p-10px text-center">
									<p class="mb-10px">Hales AC Service is ranked #1 in General!!</p>
									<div class="flex justify-between items-center bg-yellow-500">
										<div class="p-10px text-white w-full odd:bg-white odd:bg-opacity-15 text-center">
											<p class="text-1.5rem">0</p>
											<p>Points</p>
										</div>
										<div class="p-10px text-white w-full odd:bg-white odd:bg-opacity-15 text-center">
											<p class="text-1.5rem">0</p>
											<p>Review Leads</p>
										</div>
									</div>
								</div>
							</div>
							<div class="p-10px flex justify-center hover:bg-gray-200 items-center">
								<a href="/leaderboard/reports/campaigns?department=General" class="flex justify-center items-center w-full">
									<svg
										class="svg-inline--fa fa-arrow-right mx-5px p-10px bg-gray-300 rounded-full"
										aria-hidden="true"
										focusable="false"
										data-prefix="fas"
										data-icon="arrow-right"
										role="img"
										xmlns="http://www.w3.org/2000/svg"
										viewBox="0 0 448 512"
									>
										<path
											class=""
											fill="currentColor"
											d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"
										></path>
									</svg>
									View All
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?= $this->endsection('content') ?>
