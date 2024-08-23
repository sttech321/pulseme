<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="icon" type="image/png" sizes="32x32" href="/image/summitRA.jpeg">
	<title>Meet <?= esc($technician['name']) ?></title>
	<link rel="stylesheet" type="text/css" href="/css/bio.css">
</head>

<body data-new-gr-c-s-check-loaded="14.1187.0" data-gr-ext-installed="">
	<div class="container">

		<div id="bio-wrapper" class="wrapper">
			<div class="row m-0">
				<div id="title" class="text-center m-b-15" style="background-color: rgb(255, 255, 255); color: black;">
					<div id="title-logo">
						<img src="<?= base_url('image/campaign/1709862934_original.png') ?>" alt="logo">
					</div>
				</div>
			</div>

			<div id="bio" class="clearfix">
				<div class="col-xs-4 text-center">
					<img id="bio-img" src="<?= ($technician['image']) ?>" style="max-width: 100%; max-height: 160px;" />
				</div>

				<div id="bio-profile" class="bio-profile">
					<div class="text-left p-r-15 p-l-15">
						<h4 class="m-0" style="min-width:10px;">
							<?= esc($technician['name']) ?>
							<small class="p-l-15" style="color: #ff9900 !important;">
								<i class="zmdi zmdi-star"></i>
								<i class="zmdi zmdi-star"></i>
								<i class="zmdi zmdi-star"></i>
								<i class="zmdi zmdi-star"></i>
								<i class="zmdi zmdi-star"></i>
							</small>
							<span>
								<br />
								<div class="mt-5" style="font-weight:400; color:Black; font-size: 14;">
									<?= ($technician['description']) ?>
								</div>
								<br />
								<small class="mt-5" style="font-weight:600; color:Black; font-size: 14;">
									<?= ($technician['department']) ?>
								</small>
							</span>
						</h4>
					</div>
				</div>
			</div>

			<div id="video-button" class="col-xs-12 text-center m-t-10 m-b-5 hide">
			</div>

			<div id="video" class="hide">
				<div class="responsive-resize">
					<div class="embed-responsive embed-responsive-16by9">
						<div id="yt-player" class=""></div>
					</div>
				</div>
			</div>

			<div id="reviews" class="col-xs-12 m-0 p-0" style="height: 105px;">
				<div class="scroll-auto" style="position: relative; height: 100%;">
					<div class="list-group p-b-0">
						<div class="review" data-transaction-id="p_71209290">
							<div class="review-source">
								<div class="review-star-rating persist">
									<i class="zmdi zmdi-star active"></i><i class="zmdi zmdi-star active"></i><i class="zmdi zmdi-star active"></i><i class="zmdi zmdi-star active"></i><i class="zmdi zmdi-star active"></i>
								</div>
								<a href="javascript:void(0)" class="sm-badge pulsem" data-analytics="sm_badge" data-action="click" data-value="pulsem">
									<i class="sm-icon"></i>
								</a>
							</div>

							<div class="media-body review-body">
								<blockquote>
									<p class="more">Reviewed on google</p>

									<footer>
										<span>Posted <time datetime="2024-06-18T20:05:06">a week ago</time> </span><span>by Sylvia J. </span><span class="hidden-xxs"> through <cite title="Source Title">pulseM</cite> </span>
									</footer>
								</blockquote>
							</div>
						</div>
						<div class="review" data-transaction-id="p_70893809">
							<div class="review-source">
								<div class="review-star-rating persist">
									<i class="zmdi zmdi-star active"></i><i class="zmdi zmdi-star active"></i><i class="zmdi zmdi-star active"></i><i class="zmdi zmdi-star active"></i><i class="zmdi zmdi-star active"></i>
								</div>
								<a href="javascript:void(0)" class="sm-badge pulsem" data-analytics="sm_badge" data-action="click" data-value="pulsem">
									<i class="sm-icon"></i>
								</a>
							</div>

							<div class="media-body review-body">
								<blockquote>
									<p class="more">Great service, super knowledgeable and very friendly! Prompt, professional and precise!</p>

									<footer>
										<span>Posted <time datetime="2024-06-12T19:29:59">a month ago</time> </span><span>by Maurice B. </span><span class="hidden-xxs"> through <cite title="Source Title">pulseM</cite> </span>
									</footer>
								</blockquote>
							</div>
						</div>
						<div class="review" data-transaction-id="p_70857439">
							<div class="review-source">
								<div class="review-star-rating persist">
									<i class="zmdi zmdi-star active"></i><i class="zmdi zmdi-star active"></i><i class="zmdi zmdi-star active"></i><i class="zmdi zmdi-star active"></i><i class="zmdi zmdi-star active"></i>
								</div>
								<a href="javascript:void(0)" class="sm-badge pulsem" data-analytics="sm_badge" data-action="click" data-value="pulsem">
									<i class="sm-icon"></i>
								</a>
							</div>

							<div class="media-body review-body">
								<blockquote>
									<p class="more">Very nice and informative. Would recommend to friends and family.</p>

									<footer>
										<span>Posted <time datetime="2024-06-12T13:18:20">a month ago</time> </span><span>by Brandon M. </span><span class="hidden-xxs"> through <cite title="Source Title">pulseM</cite> </span>
									</footer>
								</blockquote>
							</div>
						</div>
						<div class="review" data-transaction-id="p_69333010">
							<div class="review-source">
								<div class="review-star-rating persist">
									<i class="zmdi zmdi-star active"></i><i class="zmdi zmdi-star active"></i><i class="zmdi zmdi-star active"></i><i class="zmdi zmdi-star active"></i><i class="zmdi zmdi-star active"></i>
								</div>
								<a href="javascript:void(0)" class="sm-badge pulsem" data-analytics="sm_badge" data-action="click" data-value="pulsem">
									<i class="sm-icon"></i>
								</a>
							</div>

							<div class="media-body review-body">
								<blockquote>
									<p class="more">Very professional, courteous and pleasant. Explained options and what he was doing very well.</p>

									<footer>
										<span>Posted <time datetime="2024-05-16T16:43:32">a month ago</time> </span><span>by Steve J. </span><span class="hidden-xxs"> through <cite title="Source Title">pulseM</cite> </span>
									</footer>
								</blockquote>
							</div>
						</div>
						<div class="review" data-transaction-id="p_69040046">
							<div class="review-source">
								<div class="review-star-rating persist">
									<i class="zmdi zmdi-star active"></i><i class="zmdi zmdi-star active"></i><i class="zmdi zmdi-star active"></i><i class="zmdi zmdi-star active"></i><i class="zmdi zmdi-star active"></i>
								</div>
								<a href="javascript:void(0)" class="sm-badge pulsem" data-analytics="sm_badge" data-action="click" data-value="pulsem">
									<i class="sm-icon"></i>
								</a>
							</div>

							<div class="media-body review-body">
								<blockquote>
									<p class="more">Scott filled in today (Sunday) and got me up and running again in short order.</p>

									<footer>
										<span>Posted <time datetime="2024-05-12T11:46:50">a month ago</time> </span><span>by Phil L. </span><span class="hidden-xxs"> through <cite title="Source Title">pulseM</cite> </span>
									</footer>
								</blockquote>
							</div>
						</div>
						<div class="review" data-transaction-id="p_68981937">
							<div class="review-source">
								<div class="review-star-rating persist">
									<i class="zmdi zmdi-star active"></i><i class="zmdi zmdi-star active"></i><i class="zmdi zmdi-star active"></i><i class="zmdi zmdi-star active"></i><i class="zmdi zmdi-star active"></i>
								</div>
								<a href="javascript:void(0)" class="sm-badge pulsem" data-analytics="sm_badge" data-action="click" data-value="pulsem">
									<i class="sm-icon"></i>
								</a>
							</div>

							<div class="media-body review-body">
								<blockquote>
									<p class="more">Awesome technician. Amazing job!! GIVE HIM A RAISE!!!!</p>

									<footer>
										<span>Posted <time datetime="2024-05-10T12:02:40">a month ago</time> </span><span>by Jasmyne T. </span><span class="hidden-xxs"> through <cite title="Source Title">pulseM</cite> </span>
									</footer>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="bio-footer" class="footer">
			<a class="p-l-5" href="https://hubs.ly/H0n12Y10" target="_blank">
			</a>
		</div>
	</div>
	</div>
	<div id="bio-modal" class="modal fade" role="dialog" tabindex="-1">
		<div class="modal-dialog" role="document">
		</div>
		<script src="/js/bio.js"></script>
		<script src="/js/legacy.js"></script>
	</div>
</body>

</html>