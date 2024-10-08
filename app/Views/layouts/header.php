<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>summitRA</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" sizes="32x32" href="/image/summitRA.jpeg">
	<link rel="stylesheet" type="text/css" href="/css/header.css">
	<link rel="stylesheet" type="text/css" href="/css/reset.css">
	<link rel="stylesheet" type="text/css" href="/css/reviews.css">
	<link rel="stylesheet" type="text/css" href="/css/analysis.css">
	<link rel="stylesheet" type="text/css" href="/css/variables.css">
	<!-- <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="/css/all.min.css">
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
					<a href="#"> <img data-v-139b8be6="" width="120" src="/image/login-img.png"></a>
					<div id="close-sidebar">
						<i class="fas fa-times"></i>
					</div>
				</div>
				<div class="sidebar-header flexBetween">
					<div class="leftSec">
						<div class="user-pic">
							<img data-v-139b8be6="" width="230" src="/image/person.jpg" alt="user picture">
						</div>
						<div class="user-info">
							<span class="user-name">Jhon
								<strong>Smith</strong>
							</span>
							<span class="user-role">Administrator</span>
						</div>
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
												<img data-v-139b8be6="" width="230" src="/image/person.jpg" alt="user picture">
											</div>
											<div class="user-info">
												<span class="user-name">Jhon
													<strong>Smith</strong>
												</span>
												<span class="user-role">Administrator</span>
											</div>
										</div>
									</div>
								</li>
								<li><a class="menuListItem" href="#"><i class="fa fa-user" aria-hidden="true"></i>My Profile</a></li>
								<li><a class="menuListItem" href="#"><i class="fa fa-cog" aria-hidden="true"></i>Settings</a> </li>
								<li><a class="menuListItem" href="/logs/outbound"><i class="fa fa-envelope" aria-hidden="true"></i>Logs</a></li>
								<li> 
                             
                                    <a class="menuListItem" href="/logout"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
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
							<a href="#">
								<div class="imgIconWrap">
									<img width="20" height="20" src="/image/operate.png" alt="sidebar icon">
								</div>
								<span> Operate </span>
							</a>
						</li>
						<li class="sidebar-dropdown">
							<a href="#" >
								<div class="imgIconWrap">
									<img width="20" height="20" src="/image/analyze.png" alt="sidebar icon">
								</div>
								<span>Analyze</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="#"><img width="15" src="/image/overview.svg" alt="sidebar icon">Overview </a>
									</li>
									<li>
										<a href="/analyze/reviews"><img width="15" src="/image/reviews.svg" alt="sidebar icon">Reviews</a>
									</li>
									<li>
										<a href="#"><img width="15" src="/image/competitor.svg" alt="sidebar icon">Competitor Analysis</a>
									</li>
									<li>
										<a href="/analyze/dispatching"><img width="15" src="/image/dispatching.svg" alt="sidebar icon">Dispatching</a>
									</li>
								</ul>
							</div>
						</li>
						<li class=" sidebar-dropdown">
							<a href="#">
								<div class="imgIconWrap">
									<img width="20" height="20" src="/image/leaderboard.png" alt="sidebar icon">
								</div>
								<span>Leaderboard</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="leaderboard/summary"><img width="15" src="/image/summary.svg" alt="sidebar icon">Summary</a>
									</li>
									<li>
										<a href="#"><img width="15" src="/image/reports.svg" alt="sidebar icon">Reports</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="sidebar-dropdown">
							<a href="#">
								<div class="imgIconWrap">
									<img width="20" height="20" src="/image/marketplace.png" alt="sidebar icon">
								</div>
								<span>Marketplace</span>
							</a>
							<div class="sidebar-submenu">
								<ul>
									<li>
										<a href="#">
											<img width="15" src="/image/lead-generation.svg" alt="sidebar icon">
											Lead Generation
										</a>
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
									</li>
									<!-- <li>
                                        <a href="#"><img width="15" src="/image/employee-retention.svg" alt="sidebar icon">Employee Retention</a>
                                    </li> -->
								</ul>
							</div>

						</li>
						<li>
							<a href="#">
								<div class="imgIconWrap">
									<img width="20" height="20" src="/image/referrals.png" alt="sidebar icon">
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
		<!-- sidebar-wrapper  -->
		<main class="page-content">
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
			</div> <!-- <div class="container-fluid"> -->
				<?= $this->rendersection('content'); ?>

