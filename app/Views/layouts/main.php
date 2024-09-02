<!-- app/Views/layouts/main.php -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title><?= $title ?? 'SummitRA' ?></title>
	<meta name="description" content="summitRA: The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" sizes="32x32" href="<?=base_url('/image/summitRA.jpeg')?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('/css/header.css'). '?v=' . time()?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('/css/reset.css'). '?v=' . time() ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('/css/reviews.css'). '?v=' . time() ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('/css/variables.css'). '?v=' . time() ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('/css/analysis.css'). '?v=' . time() ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('/css/all.min.css'). '?v=' . time() ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('/css/apexcharts.css'). '?v=' . time() ?>">
	<!-- <link rel="stylesheet" type="text/css" href="<?= base_url('/css/bootstrap.min.css'). '?v=' . time() ?>"> -->
	<!-- <link rel="stylesheet" type="text/css" href="<?= base_url('/css/custom-modal.css'). '?v=' . time() ?>"> -->

	<script src="<?= base_url('/js/jquery.js') ?>"></script>
	<style>
		* {
			font-size: 14px;
		}

		html {
			height: 100%;
			margin: 0;
		}

		body,
		#app {
			height: 100%;
			margin: 0;
		}
	</style>
</head>

<body>
	<!-- loading -->
	<!-- <div class="loading">
        <div class="dots-loader"></div>
    </div> -->
	<!-- closed -->
	<div class="page-wrapper chiller-theme toggled">
		<a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
			<i class="fas fa-bars"></i>
		</a>
		<nav id="sidebar" class="sidebar-wrapper">
			<div class="sidebar-content">
				<div class="sidebar-brand">
					<a href="#"> <img data-v-139b8be6="" width="120" src="<?= base_url('/image/login-img.png') ?>"></a>
					<div id="close-sidebar">
						<i class="fas fa-times"></i>
					</div>
				</div>
				<div class="sidebar-header flexBetween">
					<div class="leftSec">
						<div class="user-pic">
							<img data-v-139b8be6="" width="230" src="<?= base_url('/image/person.jpg') ?>" alt="user picture">
						</div>
						<?php if (!empty($admin1)): ?>
						<div class="user-info">
							<span class="user-name"><?= esc($admin1['first_name']) ?>
								<strong><?= esc($admin1['last_name']) ?></strong>
							</span>
							<span class="user-role">Administrator</span>
						</div>
						<?php endif; ?>
					</div>
					<div class="rightSec">
						<div class="dropdown toggle">
							<input id="t1" type="checkbox">
							<label for="t1" class="cursorPointer"><i class="fa fa-ellipsis-v whiteText" aria-hidden="true"></i></label>
							<ul class="dropdown-menu-field">
								<li class="autoHeight">
									<div class="dropdown-top flexBetween">
										<div class="leftSec">
											<div class="user-pic">
												<img data-v-139b8be6="" width="230" src="<?= base_url('/image/person.jpg') ?>" alt="user picture">
											</div>
											<?php if (!empty($admin1)): ?>
											<div class="user-info">
												<span class="user-name"><?= esc($admin1['first_name']) ?>
													<strong><?= esc($admin1['last_name']) ?></strong>
												</span>
												<span class="user-role">Administrator</span>
											</div>
											<?php endif; ?>
										</div>
									</div>
								</li>
								<li><a class="menuListItem" href="<?= base_url('/user-preferences')?>"><i class="fa fa-user" aria-hidden="true"></i>My Profile</a></li>
								<li><a class="menuListItem" href="<?= base_url('/settings/dispatch/campaigns') ?>"><i class="fa fa-cog" aria-hidden="true"></i>Settings</a> </li>
								<!-- <li><a class="menuListItem" href="/logs/outbound"><i class="fa fa-envelope" aria-hidden="true"></i>Logs</a></li> -->
								<li>
									<a class="menuListItem" href="<?= base_url('/logout') ?>"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
								</li>

							</ul>
						</div>

					</div>

				</div>

				<div class="sidebar-menu">
					<ul>
						<li class="header-menu">
							<span>General</span>
						</li>
						<li>
							<a href="<?= base_url('/operate/dispatch') ?>">
								<div class="imgIconWrap">
									<img width="20" height="20" src="<?= base_url('/image/operate.png') ?>" alt="sidebar icon">
								</div>
								<span> Operate </span>
							</a>
						</li>
						<li class="sidebar-dropdown">
							<a href="#">
								<div class="imgIconWrap">
									<img width="20" height="20" src="<?= base_url('/image/analyze.png') ?>" alt="sidebar icon">
								</div>
								<span>Analyze</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="<?= base_url('/analyze/overview') ?>"><img width="15" src="<?= base_url('/image/overview.svg') ?>" alt="sidebar icon">Overview </a>
									</li>
									<li>
										<a href="<?= base_url('/analyze/reviews') ?>"><img width="15" src="<?= base_url('/image/reviews.svg') ?>" alt="sidebar icon">Reviews</a>
									</li>
									<!-- <li>
										<a href="#"><img width="15" src="/image/competitor.svg" alt="sidebar icon">Competitor Analysis</a>
									</li> -->
									<li>
										<a href="<?= base_url('/analyze/dispatching') ?>"><img width="15" src="<?= base_url('/image/dispatching.svg') ?>" alt="sidebar icon">Dispatching</a>
									</li>
								</ul>
							</div>
						</li>
						<li class=" sidebar-dropdown">
							<a href="#">
								<div class="imgIconWrap">
									<img width="20" height="20" src="<?= base_url('/image/leaderboard.png') ?>" alt="sidebar icon">
								</div>
								<span>Leaderboard</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="<?= base_url('/leaderboard/summary') ?>"><img width="15" src="<?= base_url('/image/summary.svg') ?>" alt="sidebar icon">Summary</a>
									</li>
									<li>
										<a href="<?= base_url('/leaderboard/reports/departments') ?>"><img width="15" src="<?= base_url('/image/reports.svg') ?>" alt="sidebar icon">Reports</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="sidebar-dropdown">
							<!-- <a href="#">
								<div class="imgIconWrap">
									<img width="20" height="20" src="/image/marketplace.png" alt="sidebar icon">
								</div>
								<span>Marketplace</span>
							</a> -->
							<div class="sidebar-submenu">
								<ul>
									<!-- <li> -->
									<!-- <a href="#">
											<img width="15" src="/image/lead-generation.svg" alt="sidebar icon">
											Lead Generation
										</a> -->
									<!-- <div class="sidebar-submenu-inner">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <div class="imgIconWrap">
                                                            <img width="20" height="20" src="/image/two-way-communication.png" alt="sidebar icon">
                                                        </div>
                                                        Two Way Messaging
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="imgIconWrap">
                                                            <img width="20" height="20" src="/image/chat.png" alt="sidebar icon">
                                                        </div>
                                                        Chat Widget
                                                    </a>
                                                </li>
                                            </ul>
                                        </div> -->
									<!-- </li> -->
									<!-- <li>
                                        <a href="#"><img width="15" src="/image/employee-retention.svg" alt="sidebar icon">Employee Retention</a>
                                    </li> -->
								</ul>
							</div>

						</li>
						<li>
							<a href="#">
								<div class="imgIconWrap">
									<img width="20" height="20" src="<?= base_url('/image/referrals.png') ?>" alt="sidebar icon">
								</div>
								<span>Referrals</span>
							</a>
						</li>
					</ul>
				</div>
				<!-- sidebar-menu  -->
			</div>
			<!-- sidebar-content  -->
		</nav>
		<main class="page-content">
			<?= $this->renderSection('content') ?>
		</main>

		<!-- page-content" -->
	</div>
	<!-- page-wrapper -->

	<script src="<?= base_url('/js/bootstrap.bundle.min.js') ?>"></script>
	<script src="<?= base_url('/js/apexcharts.min.js') ?>"></script>

	<script>
		$(document).ready(function() {
			$(".sidebar-dropdown > a").click(function() {
				$(".sidebar-submenu").slideUp(200);
				if ($(this).parent().hasClass("active")) {
					$(".sidebar-dropdown").removeClass("active");
					$(this).parent().removeClass("active");
				} else {
					$(".sidebar-dropdown").removeClass("active");
					$(this).next(".sidebar-submenu").slideDown(200);
					$(this).parent().addClass("active");
				}
			});
			$(".sidebar-dropdown-inner > a").click(function() {
				$(".sidebar-submenu-inner").slideUp(200);
				if ($(this).parent().hasClass("active")) {
					$(".sidebar-dropdown-inner").removeClass("active");
					$(this).parent().removeClass("active");
				} else {
					$(".sidebar-dropdown-inner").removeClass("active");
					$(this).next(".sidebar-submenu-inner").slideDown(200);
					$(this).parent().addClass("active");
				}
			});

			$("#close-sidebar").click(function() {
				$(".page-wrapper").removeClass("toggled");
			});

			$("#show-sidebar").click(function() {
				$(".page-wrapper").addClass("toggled");
			});
		});
	</script>
	<script>
		$(document).click(function(event) {
			if (
				$('.toggle > input').is(':checked') &&
				!$(event.target).parents('.toggle').is('.toggle')
			) {
				$('.toggle > input').prop('checked', false);
			}
		})
	</script>
	<script>
		// Initialize tooltips
		$(document).ready(function() {
			$('[data-bs-toggle="tooltip"]').tooltip();
		});
	</script>
	<script>
		$(document).click(function(event) {
			setTimeout(function() {
				$('body')
					.removeClass('loading')
					.addClass('loaded');
			}, 3000);
		})
	</script>

	<script>
		function updatePadding() {
			const mediaQuery = window.matchMedia('(max-width: 1460px)');
			const pageContent = document.querySelector('.page-wrapper.toggled .page-content');

			if (pageContent) {
				if (mediaQuery.matches) {

					pageContent.style.paddingLeft = '0';
				} else {

					pageContent.style.paddingLeft = '';
				}
			}

		}


		updatePadding();
		window.addEventListener('resize', updatePadding);
	</script>

	<script>
		function updateStyles() {
			const mediaQuery = window.matchMedia('(max-width: 1460px)');
			const pageContent = document.querySelector('.page-wrapper.toggled .page-content');
			const pageWrapper = document.querySelector('.page-wrapper');

			if (pageContent && pageWrapper) {
				if (mediaQuery.matches) {
					// If viewport width is below 1460px, remove 'toggled' class and set padding-left to 0
					pageContent.style.paddingLeft = '0';
					pageWrapper.classList.remove('toggled');
				} else {
					// If viewport width is 1460px or above, reset padding-left and ensure 'toggled' class is present
					pageContent.style.paddingLeft = '';
					pageWrapper.classList.add('toggled');
				}
			}
		}

		// Initial check on page load
		window.addEventListener('load', updateStyles);

		// Add event listener to handle changes in viewport width
		window.addEventListener('resize', updateStyles);
	</script>

	<script>
	document.addEventListener('DOMContentLoaded', function() {
		var dropdownToggle = document.querySelector('.dropdown-toggle');
		
		if (dropdownToggle) { // Check if the element exists
			dropdownToggle.addEventListener('click', function() {
				this.parentElement.classList.toggle('show');
			});
		}

		window.addEventListener('click', function(event) {
			if (!event.target.matches('.dropdown-toggle')) {
				var dropdowns = document.getElementsByClassName("dropdown");
				for (var i = 0; i < dropdowns.length; i++) {
					var openDropdown = dropdowns[i];
					if (openDropdown.classList.contains('show')) {
						openDropdown.classList.remove('show');
					}
				}
			}
		});
	});
	</script>
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

</body>
</html>