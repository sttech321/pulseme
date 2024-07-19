<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
				<div class="flex-grow flex flex-col items-stretch bg-gray-100 h-auto">
					<div class="sub-menu-bar flex flex-col items-stretch h-full">
						<div class="p-20px bg-white"><h2 class="text-2xl">Reviews</h2></div>
						<div class="px-15px flex justify-start items-center bg-white">
							<a href="/leaderboard/reports/departments" class="p-10px">Departments</a><a href="/leaderboard/reports/campaigns" class="p-10px">Campaigns</a>
							<a href="/leaderboard/reports/campaign-reviews" class="border-b-2 border-blue-500 router-link-exact-active p-10px" aria-current="page">Campaign Reviews</a>
							<a href="/leaderboard/reports/fieldops-usage" class="p-10px">Fieldops Usage</a><a href="/leaderboard/reports/projection" class="p-10px">Projection</a>
						</div>
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
											<input min="2021-06-30" class="p-1" type="date" name="" id="" />
											<p class="font-bold">To</p>
											<input class="p-1" type="date" name="" id="" />
											<button class="btn btn-blue">
												<svg class="svg-inline--fa fa-rotate pr-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="rotate" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
													<path
														class=""
														fill="currentColor"
														d="M142.9 142.9c62.2-62.2 162.7-62.5 225.3-1L327 183c-6.9 6.9-8.9 17.2-5.2 26.2s12.5 14.8 22.2 14.8H463.5c0 0 0 0 0 0H472c13.3 0 24-10.7 24-24V72c0-9.7-5.8-18.5-14.8-22.2s-19.3-1.7-26.2 5.2L413.4 96.6c-87.6-86.5-228.7-86.2-315.8 1C73.2 122 55.6 150.7 44.8 181.4c-5.9 16.7 2.9 34.9 19.5 40.8s34.9-2.9 40.8-19.5c7.7-21.8 20.2-42.3 37.8-59.8zM16 312v7.6 .7V440c0 9.7 5.8 18.5 14.8 22.2s19.3 1.7 26.2-5.2l41.6-41.6c87.6 86.5 228.7 86.2 315.8-1c24.4-24.4 42.1-53.1 52.9-83.7c5.9-16.7-2.9-34.9-19.5-40.8s-34.9 2.9-40.8 19.5c-7.7 21.8-20.2 42.3-37.8 59.8c-62.2 62.2-162.7 62.5-225.3 1L185 329c6.9-6.9 8.9-17.2 5.2-26.2s-12.5-14.8-22.2-14.8H48.4h-.7H40c-13.3 0-24 10.7-24 24z"
													></path>
												</svg>
												Update
											</button>
										</div>
									</div>
									<div class="flex flex-col w-full overflow-x-auto items-stretch">
										<table class="mb-15px">
											<thead>
												<tr>
													<th class="text-left px-20px py-10px cursor-pointer">
														Campaign UID
														<!---->
													</th>
													<th class="text-left px-20px py-10px cursor-pointer">
														Campaign Name
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
														Department
														<!---->
													</th>
													<th class="text-left px-20px py-10px cursor-pointer">
														Google Reviews
														<!---->
													</th>
													<th class="text-left px-20px py-10px cursor-pointer">
														Google Rating
														<!---->
													</th>
													<th class="text-left px-20px py-10px cursor-pointer">
														Facebook Reviews
														<!---->
													</th>
													<th class="text-left px-20px py-10px cursor-pointer">
														Facebook Rating
														<!---->
													</th>
												</tr>
											</thead>
											<tbody>
												<tr class="!bg-opacity-50 odd:bg-sky-100">
													<td class="px-20px py-15px">1B85A09AA6CF1</td>
													<td class="px-20px py-15px">Aaron Krasnow</td>
													<td class="px-20px py-15px">Service Technician</td>
													<td class="px-20px py-15px">11</td>
													<td class="px-20px py-15px">5</td>
													<td class="px-20px py-15px">0</td>
													<td class="px-20px py-15px"></td>
												</tr>
												<tr class="!bg-opacity-50 odd:bg-sky-100">
													<td class="px-20px py-15px">1D24325B63641</td>
													<td class="px-20px py-15px">Angelo Vazquez</td>
													<td class="px-20px py-15px">Service Technician</td>
													<td class="px-20px py-15px">12</td>
													<td class="px-20px py-15px">4.92</td>
													<td class="px-20px py-15px">0</td>
													<td class="px-20px py-15px"></td>
												</tr>
												<tr class="!bg-opacity-50 odd:bg-sky-100">
													<td class="px-20px py-15px">1C12F272792B9</td>
													<td class="px-20px py-15px">Chad Carncross</td>
													<td class="px-20px py-15px">Install Team</td>
													<td class="px-20px py-15px">2</td>
													<td class="px-20px py-15px">5</td>
													<td class="px-20px py-15px">0</td>
													<td class="px-20px py-15px"></td>
												</tr>
												<tr class="!bg-opacity-50 odd:bg-sky-100">
													<td class="px-20px py-15px">1DE1BA473C7B1</td>
													<td class="px-20px py-15px">Dave Smith</td>
													<td class="px-20px py-15px">Service Technician</td>
													<td class="px-20px py-15px">2</td>
													<td class="px-20px py-15px">5</td>
													<td class="px-20px py-15px">0</td>
													<td class="px-20px py-15px"></td>
												</tr>
												<tr class="!bg-opacity-50 odd:bg-sky-100">
													<td class="px-20px py-15px">1D5FD968043A1</td>
													<td class="px-20px py-15px">Derek Kijowski</td>
													<td class="px-20px py-15px">Service Technician</td>
													<td class="px-20px py-15px">6</td>
													<td class="px-20px py-15px">4.33</td>
													<td class="px-20px py-15px">0</td>
													<td class="px-20px py-15px"></td>
												</tr>
												<tr class="!bg-opacity-50 odd:bg-sky-100">
													<td class="px-20px py-15px">1C13D0A51CB21</td>
													<td class="px-20px py-15px">Paul Hoang</td>
													<td class="px-20px py-15px">Service Technician</td>
													<td class="px-20px py-15px">2</td>
													<td class="px-20px py-15px">5</td>
													<td class="px-20px py-15px">0</td>
													<td class="px-20px py-15px"></td>
												</tr>
												<tr class="!bg-opacity-50 odd:bg-sky-100">
													<td class="px-20px py-15px">1D8A897F9D3F9</td>
													<td class="px-20px py-15px">Scott Neubert</td>
													<td class="px-20px py-15px">Service Technician</td>
													<td class="px-20px py-15px">6</td>
													<td class="px-20px py-15px">5</td>
													<td class="px-20px py-15px">0</td>
													<td class="px-20px py-15px"></td>
												</tr>
											</tbody>
										</table>
										<!---->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<footer class="footer bg-gray-100 p-20px text-center">
					<div class="text-gray-400">
						<p>© 2024 2.0.10 | v49.0.17</p>
						<div class="flex justify-center">
							<a href="/" target="_blank" class="hover:text-blue-300">pulseM</a><span class="mx-2">|</span><a href="https://legal.pulsem.me/privacy-policy" target="_blank" class="hover:text-blue-300">Privacy Policy</a>
							<span class="mx-2">|</span><a href="https://legal.pulsem.me/terms-and-conditions" target="_blank" class="hover:text-blue-300">Terms and Conditions</a>
							<!---->
						</div>
					</div>
				</footer>
			</div>
		</div>

		<svg
			id="SvgjsSvg1001"
			width="2"
			height="0"
			xmlns="http://www.w3.org/2000/svg"
			version="1.1"
			xmlns:xlink="http://www.w3.org/1999/xlink"
			xmlns:svgjs="http://svgjs.dev"
			style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"
		>
			<defs id="SvgjsDefs1002"></defs>
			<polyline id="SvgjsPolyline1003" points="0,0"></polyline>
			<path id="SvgjsPath1004" d="M0 0 "></path>
		</svg>
		<div id="fb-root" class="fb_reset">
			<div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div>
		</div>
		<div class="pac-container pac-logo" style="display: none; width: 0px; position: absolute; left: 0px; top: 0px;"></div>

<?= $this->endsection('content') ?>