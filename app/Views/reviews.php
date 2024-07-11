<!-- app/Views/reviews.php -->
<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
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
			<div class="sidebarRightContentWrap">
				<div class="reviewsWrap">
					<div class="tabsSectionWrap">
						<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
							<li class="nav-item" role="presentation">
								<button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Reviews</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Social Reviews</button>
							</li>

						</ul>
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
								<div class="reviewsPageContent">
									<div class="barsDropdown mb-3">
										<div class="dropdown">
											<a class="btn btn-secondary dropdown-toggle barsOnly" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
												<i class="fas fa-bars"></i>
											</a>

											<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
												<li class="mb-2"><input class="form-control" type="file"></li>
												<li><a class="dropdown-item" href="#">*Supported on Chrome & Firefox</a></li>
											</ul>
										</div>
									</div>
									<div class="flexBetween resBlock">
										<div class="leftSec">
											<!-- Button trigger modal -->
											<button type="button" class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#exampleModal">
												<i class="fa fa-plus mr-3" aria-hidden="true"></i> Add Reviews
											</button>

											<!-- Modal -->
											<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog modalContent mx-700">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLabel">Add Review
															</h5>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<div class="formWrap row">
																<div class="col-12 col-md-6">
																	<div class="inputBox">
																		<input class="form-control" autocomplete="off" name="source" type="text" placeholder="Select Source">
																	</div>
																</div>
																<div class="col-12 col-md-6">
																	<div class="inputBox">
																		<select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
																			<option disabled selected>Open this select menu</option>
																			<option value="1">One</option>
																			<option value="2">Two</option>
																			<option value="3">Three</option>
																		</select>
																	</div>
																</div>
																<div class="col-12 col-md-12">
																	<div class="datepicker inputBox">
																		<input type="date" id="datepicker" class="form-control" placeholder="Select a date">
																	</div>
																</div>
																<div class="col-12 col-md-6">
																	<div class="inputBox">
																		<select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
																			<option disabled selected>Sentiment</option>
																			<option value="1">Positive</option>
																			<option value="2">Neutral</option>
																			<option value="3">Negative</option>
																		</select>
																	</div>
																</div>
																<div class="col-12 col-md-6">
																	<div class="inputBox">
																		<select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
																			<option disabled selected>Campaign</option>
																			<option value="1">Aaron Krasnow</option>
																			<option value="2">Angel Torres</option>
																			<option value="3">Angelo vezquez </option>
																		</select>
																	</div>
																</div>
																<div class="col-12 col-md-12">
																	<div class="inputBox">
																		<textarea type="textarea" class="form-control" placeholder="Leave a comment here"></textarea>
																	</div>
																</div>
																<div class="col-12 col-md-12 mt-3">
																	<div class="form-check inputBox">
																		<input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
																		<label class="form-check-label" for="disabledFieldsetCheck">
																			Approve Comment
																		</label>
																	</div>
																</div>
																<div class="col-12 col-md-4">
																	<div class="inputBox">
																		<input class="form-control" autocomplete="off" name="source" type="text" placeholder="City">
																	</div>
																</div>
																<div class="col-12 col-md-4">
																	<div class="inputBox">
																		<input class="form-control" autocomplete="off" name="source" type="text" placeholder="State">
																	</div>
																</div>
																<div class="col-12 col-md-4">
																	<div class="inputBox">
																		<input class="form-control" autocomplete="off" name="source" type="text" placeholder="Zipcode">
																	</div>
																</div>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-secondary btn-md" data-bs-dismiss="modal">Cancel</button>
																<button type="button" class="btn btn-primary btn-md">Submit changes</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="rightSec">
											<div class="d-flex gridWrapFlex">
												<div class="datepicker inputBox">
													<span>From</span>
													<input type="date" id="datepicker" class="form-control" placeholder="Select a date">
												</div>
												<div class="datepicker inputBox">
													<span>To</span>
													<input type="date" id="datepicker" class="form-control" placeholder="Select a date">
												</div>
												<button type="button" class="btn btn-secondary btn-md ml-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
													<i class="fa fa-retweet" aria-hidden="true"></i>
													Update
												</button>
											</div>
										</div>
									</div>

									<div class="approvalBtn mt-4">
										<button type="button" class="btn btn-secondary btn-md" data-bs-toggle="modal" data-bs-target="#exampleModal">
											<i class="fa fa-check-circle me-1" aria-hidden="true"></i>
											Approve Selected
										</button>
									</div>

									<div class="tableListWrap">
										<div class="allCheckLabel">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
											</div>
										</div>
										<ul class="ps-0">

											<li class="listBoxTable">
												<div class="listBoxWrap">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
													</div>
													<div class="leftSec">
														<div class="emojiIcon">
															<img width="20" height="20" src="/image/social-google.png" alt="sidebar icon" />
															<img width="20" height="20" src="/image/smiling.png" alt="sidebar icon" />
															<div class="colorBox">9</div>
														</div>
														<div class="boxContentWrap">
															<div class="fieldText">
																<p>Derek our tech was absolutely amazing on time thorough and explained everything. We signed up for yearly maintenance as well. But it wasn’t oversold. The whole company was great to work with</p>
															</div>
															<div class="cardListWrap flex-wrap gap-10">
																<p class="cardList opacity-70"><span class="font-bold">Date:</span> 2024-07-04</p>
																<p class="cardList opacity-70"><span class="font-bold">Date:</span> 2024-07-04</p>
																<p class="cardList opacity-70"><span class="font-bold">Date:</span> 2024-07-04</p>
																<p class="cardList opacity-70"><span class="font-bold">Date:</span> 2024-07-04</p>
																<p class="cardList opacity-70"><span class="font-bold">Date:</span> 2024-07-04</p>
															</div>
														</div>
													</div>
													<div class="rightSec">
														<div class="btnBoxWrap">
															<button type="button" class="btn btn-secondary btn-md" data-bs-toggle="modal" data-bs-target="#exampleModal">
																<i class="fa fa-check me-1" aria-hidden="true"></i>
																Approved
															</button>
															<button type="button" class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#exampleModal">
																<i class="fa fa-archive" aria-hidden="true"></i>
																Archive
															</button>
															<button type="button" class="btn btn-primary lightPrimary btn-md" data-bs-toggle="modal" data-bs-target="#exampleModal">
																<i class="fa fa-pencil-square" aria-hidden="true"></i>
																Edit
															</button>
														</div>
													</div>
												</div>
											</li>
											<li class="listBoxTable">
												<div class="listBoxWrap">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
													</div>
													<div class="leftSec">
														<div class="emojiIcon">
															<img width="20" height="20" src="/image/social-google.png" alt="sidebar icon" />
															<img width="20" height="20" src="/image/smiling.png" alt="sidebar icon" />
															<div class="colorBox">9</div>
														</div>
														<div class="boxContentWrap">
															<div class="fieldText">
																<p>Derek our tech was absolutely amazing on time thorough and explained everything. We signed up for yearly maintenance as well. But it wasn’t oversold. The whole company was great to work with</p>
															</div>
															<div class="cardListWrap flex-wrap gap-10">
																<p class="cardList opacity-70"><span class="font-bold">Date:</span> 2024-07-04</p>
																<p class="cardList opacity-70"><span class="font-bold">Date:</span> 2024-07-04</p>
																<p class="cardList opacity-70"><span class="font-bold">Date:</span> 2024-07-04</p>
																<p class="cardList opacity-70"><span class="font-bold">Date:</span> 2024-07-04</p>
																<p class="cardList opacity-70"><span class="font-bold">Date:</span> 2024-07-04</p>
															</div>
														</div>
													</div>
													<div class="rightSec">
														<div class="btnBoxWrap">
															<button type="button" class="btn btn-secondary btn-md" data-bs-toggle="modal" data-bs-target="#exampleModal">
																<i class="fa fa-check me-1" aria-hidden="true"></i>
																Approved
															</button>
															<button type="button" class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#exampleModal">
																<i class="fa fa-trash-o" aria-hidden="true"></i>
																Archive
															</button>
															<button type="button" class="btn btn-primary lightPrimary btn-md" data-bs-toggle="modal" data-bs-target="#exampleModal">
																<i class="fa fa-pencil" aria-hidden="true"></i>
																Edit
															</button>
														</div>
													</div>
												</div>
											</li>
											<li class="listBoxTable">
												<div class="listBoxWrap">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
													</div>
													<div class="leftSec">
														<div class="emojiIcon">
															<img width="20" height="20" src="/image/social-google.png" alt="sidebar icon" />
															<img width="20" height="20" src="/image/smiling.png" alt="sidebar icon" />
															<div class="colorBox">9</div>
														</div>
														<div class="boxContentWrap">
															<div class="fieldText">
																<p>Derek our tech was absolutely amazing on time thorough and explained everything. We signed up for yearly maintenance as well. But it wasn’t oversold. The whole company was great to work with</p>
															</div>
															<div class="cardListWrap flex-wrap gap-10">
																<p class="cardList opacity-70"><span class="font-bold">Date:</span> 2024-07-04</p>
																<p class="cardList opacity-70"><span class="font-bold">Date:</span> 2024-07-04</p>
																<p class="cardList opacity-70"><span class="font-bold">Date:</span> 2024-07-04</p>
																<p class="cardList opacity-70"><span class="font-bold">Date:</span> 2024-07-04</p>
																<p class="cardList opacity-70"><span class="font-bold">Date:</span> 2024-07-04</p>
															</div>
															<div class="cardListWrap flex-wrap gap-10 mt-3">
																<p class="cardList opacity-70"><span class="flex-center">How likely are you to recommend us to your friends and family?
																		<span class="colorBox box-sm ms-3">9</span>
																	</span>
																</p>
															</div>
														</div>
													</div>
													<div class="rightSec">
														<div class="btnBoxWrap">
															<button type="button" class="btn btn-secondary btn-md" data-bs-toggle="modal" data-bs-target="#exampleModal">
																<i class="fa fa-check me-1" aria-hidden="true"></i>
																Approved
															</button>
															<button type="button" class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#exampleModal">
																<i class="fa fa-trash-o" aria-hidden="true"></i>
																Archive
															</button>
															<button type="button" class="btn btn-primary lightPrimary btn-md" data-bs-toggle="modal" data-bs-target="#exampleModal">
																<i class="fa fa-pencil" aria-hidden="true"></i>
																Edit
															</button>
														</div>
													</div>
												</div>
											</li>
											<li class="listBoxTable">
												<div class="listBoxWrap">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
													</div>
													<div class="leftSec">
														<div class="emojiIcon">
															<img width="20" height="20" src="/image/social-google.png" alt="sidebar icon" />
															<img width="20" height="20" src="/image/smiling.png" alt="sidebar icon" />
															<div class="colorBox">9</div>
														</div>
														<div class="boxContentWrap">
															<div class="fieldText">
																<p>Derek our tech was absolutely amazing on time thorough and explained everything. We signed up for yearly maintenance as well. But it wasn’t oversold. The whole company was great to work with</p>
															</div>
															<div class="cardListWrap flex-wrap gap-10">
																<p class="cardList opacity-70"><span class="font-bold">Date:</span> 2024-07-04</p>
																<p class="cardList opacity-70"><span class="font-bold">Date:</span> 2024-07-04</p>
																<p class="cardList opacity-70"><span class="font-bold">Date:</span> 2024-07-04</p>
																<p class="cardList opacity-70"><span class="font-bold">Date:</span> 2024-07-04</p>
																<p class="cardList opacity-70"><span class="font-bold">Date:</span> 2024-07-04</p>
															</div>
														</div>
													</div>
													<div class="rightSec">
														<div class="btnBoxWrap">
															<button type="button" class="btn btn-secondary btn-md" data-bs-toggle="modal" data-bs-target="#exampleModal">
																<i class="fa fa-check me-1" aria-hidden="true"></i>
																Approved
															</button>
															<button type="button" class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#exampleModal">
																<i class="fa fa-trash-o" aria-hidden="true"></i>
																Archive
															</button>
															<button type="button" class="btn btn-primary lightPrimary btn-md" data-bs-toggle="modal" data-bs-target="#exampleModal">
																<i class="fa fa-pencil" aria-hidden="true"></i>
																Edit
															</button>
														</div>
													</div>
												</div>
											</li>
										</ul>
										<nav aria-label="Page navigation example">
											<ul class="pagination">
												<li class="page-item ">
													<a class="page-link" href="#" aria-label="Previous">
														<span aria-hidden="true"><i class="fa fa-chevron-left" aria-hidden="true"></i>
														</span>
													</a>
												</li>
												<li class="page-item active"><a class="page-link" href="#">1</a></li>
												<li class="page-item"><a class="page-link" href="#">2</a></li>
												<li class="page-item"><a class="page-link" href="#">3</a></li>
												<li class="page-item">
													<a class="page-link" href="#" aria-label="Next">
														<span aria-hidden="true"><i class="fa fa-chevron-right" aria-hidden="true"></i>
														</span>
													</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
						</div>
					</div>
				</div>
			</div>
<?= $this->endSection() ?>
