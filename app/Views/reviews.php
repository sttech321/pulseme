<!-- app/Views/reviews.php -->
<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
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

<!-- <div class="container-fluid"> -->
<div class="sidebarRightContentWrap">
   <div class="flex-grow flex flex-col items-stretch bg-gray-100 h-auto">
      <div class="sub-menu-bar flex flex-col items-stretch h-full">
         <div class="flex-grow">
            <div data-v-428084ba="" class="p-25px">
               <div class="p-20px bg-white">
                  <h2 class="text-2xl">Reviews</h2>
               </div>
               <div class="px-15px bg-white flex justify-start items-center tabs">
                  <a href="<?= base_url('/analyze/reviews') ?>" id="reviews-tab" class="tab p-10px" aria-current="page">Reviews</a>
                  <a href="<?= base_url('/analyze/reviews/social-reviews') ?>" id="social-reviews-tab" class="tab p-10px">Social Reviews</a>
               </div>
               <div data-v-428084ba="" class="bg-white rounded-4px shadow p-10px">
                  <div data-v-428084ba="" class="row flex justify-end p-10px">
                     <div data-v-428084ba="" class="relative w-full flex justify-end items-center">
                        <button>
                           <svg class="svg-inline--fa fa-bars text-xl text-gray-400 hover:text-blue-500" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"></path>
                           </svg>
                        </button>
                        <!----><!---->
                     </div>
                  </div>
                  <div data-v-428084ba="" class="row flex justify-between items-center p-10px">
                     <!-- <button data-v-428084ba="" class="btn btn-blue"> + Add Review </button> -->
                     <div class="leftSec">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#exampleModal">
                           <i class="fa fa-plus mr-3" aria-hidden="true"></i> Add Reviews
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog modalContent mx-700">
                              <div class="modal-content">
                                 <form method="post" action="<?= base_url('/analyze/reviews/create') ?>">
                                    <div class="modal-header">
                                       <h5 class="modal-title" id="exampleModalLabel">Add Review
                                       </h5>
                                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                       <?php $script = ''; ?>
                                       <?php if (session()->getFlashdata('validation')): ?>
                                          <div class="validation-errors">
                                             <?php foreach (session()->getFlashdata('validation')->getErrors() as $error): ?>
                                                <p style="color: red;"><?php echo $error ?></p>
                                             <?php endforeach ?>
                                          </div>
                                          <?php $script = '$("#campaignModal").addClass("show").css("display","block")'; ?>
                                       <?php endif ?>
                                       <div class="formWrap row">
                                          <div class="flex flex-col items-stretch col-span-3">
                                             <!-- <p class="text-17px">Source</p> -->
                                             <?php if (isset($enumValues['enumValues']['reviewType']) && is_array($enumValues['enumValues']['reviewType'])): ?>
                                                <select class="py-7px border-b outline-none bg-transparent" name="reviewType">
                                                   <option value="" selected="" hidden="">Select Source</option>
                                                   <?php foreach ($enumValues['enumValues']['reviewType'] as $type): ?>
                                                      <option value="<?= esc($type); ?>"><?= esc(ucfirst($type)); ?></option>
                                                   <?php endforeach; ?>
                                                </select>
                                             <?php endif; ?>
                                             <!---->
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <div class="datepicker inputBox">
                                                <input type="date" id="datepicker" name="date" class="form-control" placeholder="Select a date">
                                             </div>
                                          </div>
                                          <div class="col-12 col-md-6">
                                             <div class="inputBox">
                                                <?php if (isset($enumValues['enumValues']['sentiment']) && is_array($enumValues['enumValues']['sentiment'])): ?>
                                                   <select class="form-select form-select-md mb-3" name="sentiment">
                                                      <option value="" selected="" hidden="">Sentiment</option>
                                                      <?php foreach ($enumValues['enumValues']['sentiment'] as $type): ?>
                                                         <option value="<?= esc($type); ?>"><?= esc(ucfirst($type)); ?></option>
                                                      <?php endforeach; ?>
                                                   </select>
                                                <?php endif; ?>
                                             </div>
                                          </div>
                                          <div class="col-12 col-md-6">
                                             <div class="inputBox">
                                                <select class="form-select form-select-md mb-3" name="campaign" aria-label=".form-select-lg example">
                                                   <option disabled selected>Campaign</option>
                                                   <?php foreach ($campaigns as $review) : ?>
                                                      <option value="<?= esc($review['ID']) ?>"><?= esc($review['name']) ?></option>
                                                   <?php endforeach; ?>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-12 col-md-12">
                                             <div class="inputBox">
                                                <textarea type="textarea" name="comment" class="form-control" placeholder="Leave a comment here"></textarea>
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
                                                <input class="form-control" autocomplete="off" name="Name" type="text" placeholder="customer_name">
                                             </div>
                                          </div>
                                          <div class="col-12 col-md-4">
                                             <div class="inputBox">
                                                <input class="form-control" autocomplete="off" name="City" type="text" placeholder="City">
                                             </div>
                                          </div>
                                          <div class="col-12 col-md-4">
                                             <div class="inputBox">
                                                <input class="form-control" autocomplete="off" name="State" type="text" placeholder="State">
                                             </div>
                                          </div>
                                          <div class="col-12 col-md-4">
                                             <div class="inputBox">
                                                <input class="form-control" autocomplete="off" name="Zipcode" type="text" placeholder="Zipcode">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary btn-md" data-bs-dismiss="modal">Cancel</button>
                                          <button type="Submit" class="btn btn-primary btn-md">Submit changes</button>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>

                     </div>
                     <?php
                     $currentDate = date('Y-m-d');
                     $oneMonthAgo = date('Y-m-d', strtotime('-1 month', strtotime($currentDate)));
                     $defaultFromDate = $oneMonthAgo;
                     $defaultToDate = $currentDate;
                     ?>
                     <div data-v-428084ba="" class="filter flex justify-end items-baseline">
                        <svg class="svg-inline--fa fa-calendar-day" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="calendar-day" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                           <path class="" fill="currentColor" d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm80 64c-8.8 0-16 7.2-16 16v96c0 8.8 7.2 16 16 16h96c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80z"></path>
                        </svg>
                        <p class="font-bold">From</p>
                        <input class="p-1" type="date" name="from_date" id="from_date" value="<?php echo htmlspecialchars($defaultFromDate); ?>">
                        <p class="font-bold">To</p>
                        <input class="p-1" type="date" name="to_date" id="to_date" value="<?php echo htmlspecialchars($defaultToDate); ?>">
                        <button class="btn btn-blue" id="update">
                           <svg class="svg-inline--fa fa-rotate pr-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="rotate" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path class="" fill="currentColor" d="M142.9 142.9c62.2-62.2 162.7-62.5 225.3-1L327 183c-6.9 6.9-8.9 17.2-5.2 26.2s12.5 14.8 22.2 14.8H463.5c0 0 0 0 0 0H472c13.3 0 24-10.7 24-24V72c0-9.7-5.8-18.5-14.8-22.2s-19.3-1.7-26.2 5.2L413.4 96.6c-87.6-86.5-228.7-86.2-315.8 1C73.2 122 55.6 150.7 44.8 181.4c-5.9 16.7 2.9 34.9 19.5 40.8s34.9-2.9 40.8-19.5c7.7-21.8 20.2-42.3 37.8-59.8zM16 312v7.6 .7V440c0 9.7 5.8 18.5 14.8 22.2s19.3 1.7 26.2-5.2l41.6-41.6c87.6 86.5 228.7 86.2 315.8-1c24.4-24.4 42.1-53.1 52.9-83.7c5.9-16.7-2.9-34.9-19.5-40.8s-34.9 2.9-40.8 19.5c-7.7 21.8-20.2 42.3-37.8 59.8c-62.2 62.2-162.7 62.5-225.3 1L185 329c6.9-6.9 8.9-17.2 5.2-26.2s-12.5-14.8-22.2-14.8H48.4h-.7H40c-13.3 0-24 10.7-24 24z"></path>
                           </svg>
                           Update
                        </button>
                     </div>
                  </div>
                  <div data-v-428084ba="" class="row p-10px flex <xl:flex-col <xl:items-start justify-start items-center">
                     <div data-v-428084ba="" class="flex items-center <xl:mb-10px">
                        <div data-v-428084ba="" class="flex items-center border border-gray-300 rounded-4px">
                           <div data-v-428084ba="" class="filter flex items-center p-10px max-w-300px cursor-pointer">
                              <svg data-v-428084ba="" class="svg-inline--fa fa-magnifying-glass mr-10px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                 <path class="" fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                              </svg>
                              <select data-v-428084ba="" class="border-0 !ring-transparent !outline-none min-w-250px ml-10px w-full" name="filter-campaings" id="filter-campaings">
                                 <option data-v-428084ba="" value="">All Campaigns</option>
                                 <?php foreach ($campaigns as $review): ?>
                                    <option data-v-428084ba="" value="<?= esc($review['ID']) ?>"><?= esc($review['name']) ?></option>
                                 <?php endforeach; ?>
                              </select>
                           </div>
                           <div data-v-428084ba="" class="filter flex justify-center items-center border-x border-gray-300 p-10px">
                              <select data-v-428084ba="" name="" id="limit" class="!border-0 !ring-transparent !outline-none m-0 w-30px p-0">
                                 <option data-v-428084ba="" value="10">10</option>
                                 <option data-v-428084ba="" value="25">25</option>
                                 <option data-v-428084ba="" value="50">50</option>
                                 <option data-v-428084ba="" value="100">100</option>
                              </select>
                           </div>
                           <div data-v-428084ba="" class="filter py-10px px-30px flex items-center relative">
                              <button id="filter-button" data-v-428084ba="" data-review-id="">
                                 Filter Approved
                                 <svg data-v-428084ba="" class="svg-inline--fa fa-filter" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="filter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path class="" fill="currentColor" d="M3.9 54.9C10.5 40.9 24.5 32 40 32H472c15.5 0 29.5 8.9 36.1 22.9s4.6 30.5-5.2 42.5L320 320.9V448c0 12.1-6.8 23.2-17.7 28.6s-23.8 4.3-33.5-3l-64-48c-8.1-6-12.8-15.5-12.8-25.6V320.9L9 97.3C-.7 85.4-2.8 68.8 3.9 54.9z"></path>
                                 </svg>
                              </button>
                              <div id="filter-dropdown" data-v-428084ba="" class="absolute bg-white shadow rounded-4px w-full p-10px top-full left-0 z-1 hidden">
                                 <div data-v-428084ba="" class="checkbox-group flex justify-start items-center mb-5px">
                                    <input data-v-428084ba="" class="mr-5px !ring-0" style="color: rgb(23, 190, 107);" type="checkbox" name="approved" id="approved">
                                    <label data-v-428084ba="" class="text-sm" for="approved">Approved Reviews</label>
                                 </div>
                                 <div data-v-428084ba="" class="checkbox-group flex justify-start items-center mb-5px">
                                    <input data-v-428084ba="" class="mr-5px !ring-0" style="color: rgb(23, 190, 107);" type="checkbox" name="unapproved" id="unapproved">
                                    <label data-v-428084ba="" class="text-sm" for="unapproved">Unapproved Reviews</label>
                                 </div>
                                 <div data-v-428084ba="" class="checkbox-group flex justify-start items-center mb-5px">
                                    <input data-v-428084ba="" class="mr-5px !ring-0" style="color: rgb(23, 190, 107);" type="checkbox" name="no-text" id="no-text">
                                    <label data-v-428084ba="" class="text-sm" for="no-text">No Text Reviews</label>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div data-v-428084ba="" class="mx-10px flex justify-evenly items-center w-150px">
                           <button data-v-428084ba="" id="positive">
                              <svg data-v-428084ba="" class="svg-inline--fa fa-face-grin text-4xl text-lime-500 opacity-50" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                 <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                              </svg>
                           </button>
                           <button data-v-428084ba="" id="neutral">
                              <svg data-v-428084ba="" class="svg-inline--fa fa-face-meh text-4xl text-sky-500 opacity-50" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-meh" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                 <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM176.4 176a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm128 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM160 336H352c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"></path>
                              </svg>
                           </button>
                           <button data-v-428084ba="" id="negative">
                              <svg data-v-428084ba="" class="svg-inline--fa fa-face-frown text-4xl text-red-500 opacity-50" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-frown" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                 <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM159.3 388.7c-2.6 8.4-11.6 13.2-20 10.5s-13.2-11.6-10.5-20C145.2 326.1 196.3 288 256 288s110.8 38.1 127.3 91.3c2.6 8.4-2.1 17.4-10.5 20s-17.4-2.1-20-10.5C340.5 349.4 302.1 320 256 320s-84.5 29.4-96.7 68.7zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                              </svg>
                           </button>
                        </div>
                     </div>
                     <div data-v-428084ba="" class="buttons flex">
                        <button data-v-428084ba="" class="btn btn-blue mr-5px" id="archive">
                           <svg data-v-428084ba="" class="svg-inline--fa fa-box-archive" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="box-archive" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path class="" fill="currentColor" d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"></path>
                           </svg>
                           Show Archived
                        </button>
                        <button data-v-428084ba="" class="btn btn-green mr-5px" id="reset"> Reset Filters </button>
                     </div>
                  </div>
                  <!---->
                  <div data-v-428084ba="" class="row table p-10px w-full">
                     <table data-v-428084ba="" class="w-full">
                        <?php foreach ($fetchreview as $review): ?>
                           <?php
                           $reviewerInfo = json_decode($review['reviewratings'], true);
                           $reviewerName = $reviewerInfo['Name'] ?? 'Unknown';
                           ?>
                           <tr data-v-428084ba="" class="flex w-full">
                              <th data-v-428084ba="" class="p-10px w-auto">
                                 <div data-v-428084ba="" class="flex justify-start items-center col-span-3 cursor-pointer">
                                    <svg class="svg-inline--fa fa-square mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="far" data-icon="square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                       <path class="" fill="currentColor" d="M384 80c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16H384zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"></path>
                                    </svg>
                                    <p></p>
                                 </div>
                              </th>
                              <th data-v-428084ba="" class="p-10px w-60px"></th>
                              <th data-v-428084ba="" class="p-10px w-full"></th>
                              <th data-v-428084ba="" class="p-10px w-150px"></th>
                           </tr>

                           <tr data-v-f15ab7a3="" data-v-428084ba="" class="flex w-full">
                              <td data-v-f15ab7a3="" class="p-10px w-auto">
                                 <div data-v-f15ab7a3="" class="flex justify-start items-center col-span-3 cursor-pointer">
                                    <svg class="svg-inline--fa fa-square mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="far" data-icon="square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                       <path class="" fill="currentColor" d="M384 80c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16H384zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"></path>
                                    </svg>
                                    <p></p>
                                 </div>
                              </td>
                              <td data-v-f15ab7a3="" class="p-10px flex flex-col items-center justify-start w-60px">
                                 <svg data-v-f15ab7a3="" class="svg-inline--fa fa-face-grin text-lime-500 text-40px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                                 </svg>
                                 <div data-v-f15ab7a3="" class="w-40px h-40px rounded-full mt-10px text-white flex justify-center items-center bg-green-500">
                                    <p data-v-f15ab7a3=""><?php echo $review['sentiment'] ?></p>
                                 </div>
                              </td>

                              <td data-v-f15ab7a3="" class="p-10px w-full">
                                 <!---->
                                 <div data-v-f15ab7a3="" class="comment border-l-5 border-blue-500 py-9px px-18px mb-5px">
                                    <p data-v-f15ab7a3=""><?= $review['reviewText'] ?></p>
                                 </div>
                                 <div data-v-f15ab7a3="" class="info flex flex-wrap">
                                    <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                       <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer:</span> <?php $reviewerInfo = json_decode($review['reviewratings'], true); ?><?php print_r($reviewerInfo['Name']); ?></p>
                                    </div>
                                    <!---->
                                    <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                       <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer Email:</span> mikefalk@aol.com</p>
                                    </div>
                                    <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                       <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer Address:</span> <?php $reviewerInfo = json_decode($review['reviewratings'], true); ?> <?php print_r($reviewerInfo['Zipcode']); ?> <?php print_r($reviewerInfo['State']); ?> <?php print_r($reviewerInfo['City']); ?></p>
                                    </div>
                                    <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                       <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Date:</span> <?php echo str_replace('00:00:00', '', $review['createdOn']); ?></p>
                                    </div>
                                    <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                       <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Campaign:</span><?= $review['campaignName'] ?></p>
                                    </div>
                                    <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                       <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Department:</span><?= $review['campaignDepartment'] ?></p>
                                    </div>
                                 </div>
                                 <div data-v-f15ab7a3="" class="ratings flex flex-wrap">
                                    <div data-v-f15ab7a3="" class="info-tag bg-white py-5px px-15px rounded-full m-5px shadow border flex items-center">
                                       <p data-v-f15ab7a3="">How likely are you to recommend us to your friends and family?</p>
                                       <div data-v-f15ab7a3="" class="rating rounded-1/2 w-20px h-20px text-white flex justify-center items-center p-13px ml-10px bg-green-500">10</div>
                                    </div>
                                    <div data-v-f15ab7a3="" class="info-tag bg-white py-5px px-15px rounded-full m-5px shadow border flex items-center">
                                       <p data-v-f15ab7a3="">Professionalism</p>
                                       <div data-v-f15ab7a3="" class="rating rounded-1/2 w-20px h-20px text-white flex justify-center items-center p-13px ml-10px bg-green-500">10</div>
                                    </div>
                                    <div data-v-f15ab7a3="" class="info-tag bg-white py-5px px-15px rounded-full m-5px shadow border flex items-center">
                                       <p data-v-f15ab7a3="">Quality of Service</p>
                                       <div data-v-f15ab7a3="" class="rating rounded-1/2 w-20px h-20px text-white flex justify-center items-center p-13px ml-10px bg-green-500">10</div>
                                    </div>
                                 </div>
                              </td>
                              <td data-v-f15ab7a3="" class="p-10px w-200px">
                                 <div id="<?= $review['ID'] ?>" class="flex flex-col items-center justify-center h-full" data-id="<?= $review['ID'] ?>" data-approved="<?= $review['isApproved'] ?>"
                                    data-archive="<?= $review['isArchive'] ?>">
                                    <button class="btn btn-approve w-full mb-5px <?= $review['isApproved'] == '1' ? 'btn-gray' : 'btn-green' ?>" approved="<?= $review['isApproved'] ?>" onclick="handleApprovalClick(this,'approved')">
                                       <svg class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                          <path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                       </svg>
                                       <?= $review['isApproved'] == '1' ? 'Approved' : 'Approve' ?>
                                    </button>
                                    <button data-v-f15ab7a3="" class="btn w-full mb-5px <?= $review['isArchive'] == '1' ? 'btn-gray' : 'btn-blue' ?>" archive="<?= $review['isArchive'] ?>" onclick="handleApprovalClick(this,'archive')">
                                       <svg data-v-f15ab7a3="" class="svg-inline--fa fa-box-archive" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="box-archive" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                          <path class="" fill="currentColor" d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"></path>
                                       </svg>
                                       <?= $review['isArchive'] == '0' ? 'Archive' : 'Unarchive' ?>
                                    </button>

                                    <button data-v-f15ab7a3="" class="btn btn-blue w-full" data-bs-toggle="modal" data-bs-target="#editreview-<?= esc($review['ID']) ?>">
                                       <svg data-v-f15ab7a3="" class="svg-inline--fa fa-pen" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                          <path class="" fill="currentColor" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"></path>
                                       </svg>
                                       Edit
                                    </button>
                                    <?php foreach ($fetchreview as $state) : ?>
                                       <div class="modal fade" id="editreview-<?= esc($state['ID']) ?>" tabindex="-1" aria-labelledby="editreview-<?= esc($state['ID']) ?>" aria-hidden="true">
                                          <div class="modal-dialog modalContent mx-700">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                   <h2 class="text-23px">Edit Review</h2>
                                                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg class="svg-inline--fa fa-xmark text-30px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                         <path class="" fill="currentColor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"></path>
                                                      </svg>
                                                   </button>
                                                </div>
                                                <div class="modal-body">
                                                   <form method="post" action="<?= base_url('/analyze/reviews/update/' . $state['ID']) ?>">
                                                      <div class="grid grid-cols-3 gap-20px text-left mb-20px">
                                                         <div class="flex flex-col items-stretch col-span-3">

                                                            <select class="outline-none py-7px border-b focus:border-blue-500" name="campaign" aria-label=".form-select-lg example">
                                                               <option disabled selected>Campaign</option>
                                                               <?php foreach ($fetchreview as $campaignids) : ?>
                                                                  <?php foreach ($campaigns as $review) : ?>
                                                                     <?php
                                                                     // Check if the campaign ID matches the review ID
                                                                     if ($campaignids['campaignID'] === $review['ID']) :
                                                                     ?>
                                                                        <option value="<?= esc($review['ID']) ?>" selected>
                                                                           <?= esc($review['name']) ?>
                                                                        </option>
                                                                     <?php else : ?>
                                                                        <option value="<?= esc($review['ID']) ?>">
                                                                           <?= esc($review['name']) ?>
                                                                        </option>
                                                                     <?php endif; ?>
                                                                  <?php endforeach; ?>
                                                               <?php endforeach; ?>
                                                            </select>
                                                         </div>
                                                         <div class="flex flex-col items-stretch col-span-3">
                                                            <p class="text-17px">Reviewer Information</p>

                                                            <?php $reviewerInfo = json_decode($state['reviewratings'], true); ?>
                                                            <input class="outline-none py-7px border-b focus:border-blue-500" name="city" value="<?php print_r($reviewerInfo['City']); ?>" type="text" placeholder="<?php print_r($reviewerInfo['City']); ?>">

                                                         </div>
                                                         <?php $reviewerInfo = json_decode($state['reviewratings'], true); ?>
                                                         <input class="outline-none py-7px border-b focus:border-blue-500" name="customer_name" value="<?php print_r($reviewerInfo['Name']); ?>" type="text" placeholder="<?php print_r($reviewerInfo['Name']); ?>">
                                                         <select class="outline-none py-7px border-b focus:border-blue-500" name="state" aria-label=".form-select-lg example">
                                                            <option disabled selected>State</option>
                                                            <?php foreach ($fetchreview as $state) : ?>
                                                               <?php $reviewerStateInfo = json_decode($state['reviewratings'], true); ?>
                                                               <option value="<?= esc($reviewerStateInfo['State']) ?>">
                                                                  <?= esc($reviewerStateInfo['State']) ?>
                                                               </option>
                                                            <?php endforeach; ?>
                                                         </select>
                                                         <input class="outline-none py-7px border-b focus:border-blue-500" name="zipcode" value="<?= esc($reviewerInfo['Zipcode']) ?>" type="text" placeholder="Zipcode">
                                                      </div>
                                                      <div class="modal-footer">
                                                         <button type="button" class="btn btn-secondary btn-md" data-bs-dismiss="modal">Cancel</button>
                                                         <button type="Submit" class="btn btn-primary btn-md">Submit changes</button>
                                                      </div>
                                                   </form>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    <?php endforeach; ?>
                                 </div>
                              </td>
                              <!----><!----><!---->
                           </tr>
                        <?php endforeach; ?>

                     </table>
                     <div class="pagination-container">
                        <nav>
                           <?php echo $pager->links('reviews', 'default_full'); ?>
                        </nav>
                     </div>
                     <style>
                        .hidden {
                           display: none;
                        }

                        /* Container styling */
                        .pagination-container {
                           text-align: center;
                           /* Centers the pagination container */
                           margin: 20px 0;
                           /* Adds space around the pagination */
                        }

                        /* Pagination styling */
                        .pagination {
                           display: flex;
                           /* Use flexbox for layout */
                           justify-content: center;
                           /* Centers items horizontally */
                           align-items: center;
                           /* Centers items vertically */
                           padding: 0;
                           /* Removes default padding */
                           margin: 0;
                           /* Removes default margin */
                           list-style: none;
                           /* Removes default list styles */
                        }

                        .pagination li {
                           margin: 0 5px;
                           /* Adds space between the list items */
                        }

                        .pagination a {
                           display: inline-block;
                           /* Ensures the links display inline */
                           text-decoration: none;
                           /* Removes underline from links */
                           color: #007bff;
                           /* Sets the color of the links */
                           padding: 10px 15px;
                           /* Adds padding around the links */
                           border: 1px solid #ddd;
                           /* Adds a border around the links */
                           border-radius: 5px;
                           /* Rounds the corners of the links */
                           transition: background-color 0.3s, color 0.3s;
                           /* Smooth transition for hover effects */
                        }

                        .pagination a:hover {
                           background-color: #007bff;
                           /* Changes background on hover */
                           color: white;
                           /* Changes text color on hover */
                        }

                        /* Styling for the active page */
                        .pagination .active a {
                           background-color: #007bff;
                           /* Sets background for the active page */
                           color: white;
                           /* Sets text color for the active page */
                           font-weight: bold;
                           /* Makes the active page text bold */
                           border: 1px solid #007bff;
                           /* Adds border color */
                        }

                        /* Optional: additional styling for Next and Last links */
                        .pagination a[aria-label="Next"],
                        .pagination a[aria-label="Last"] {
                           font-weight: bold;
                           /* Makes Next and Last links bold */
                        }

                        #modal {
                           display: none;
                           /* Hide the modal by default */
                           position: fixed;
                           top: 50%;
                           left: 50%;
                           transform: translate(-50%, -50%);
                           padding: 20px;
                           background-color: #fff;
                           border: 1px solid #ccc;
                           box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
                        }
                     </style>

                  </div>
                  <!----><!---->
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
   document.getElementById('filter-button').addEventListener('click', function() {
      var dropdown = document.getElementById('filter-dropdown');
      dropdown.classList.toggle('hidden');
   });
</script>
<script>
   function handleApprovalClick(button) {
      var parentDiv = button.parentElement;
      var ID = parentDiv.getAttribute('data-id');
      var isApproved = parentDiv.getAttribute('data-approved');
      var isArchive = parentDiv.getAttribute('data-archive');

      console.log('Before click handling - ID:', ID, 'isApproved:', isApproved, 'isArchive:', isArchive);

      // Determine which button was clicked and update values accordingly
      if (button.hasAttribute('approved')) {
         isApproved = (isApproved === '1') ? '0' : '1';
         console.log('Updated approve status:', isApproved);

         // Update button text and class
         button.textContent = isApproved === '1' ? 'Approved' : 'Approve';
         button.classList.toggle('btn-gray', isApproved === '1');
         button.classList.toggle('btn-green', isApproved === '0');
      }

      if (button.hasAttribute('archive')) {
         isArchive = (isArchive === '1') ? '0' : '1';
         console.log('Updated archive status:', isArchive);

         // Update button text and class
         button.textContent = isArchive === '0' ? 'Archive' : 'Unarchive';
         button.classList.toggle('btn-gray', isArchive === '1');
         button.classList.toggle('btn-blue', isArchive === '0');
      }

      parentDiv.setAttribute('data-approved', isApproved);
      parentDiv.setAttribute('data-archive', isArchive);

      // AJAX request
      $.ajax({
         url: '/analyze/reviews/approve', // URL for the defined route
         type: 'POST',
         dataType: 'json',
         data: {
            ID: ID,
            approved: isApproved,
            archive: isArchive
         },
         success: function(response) {
            // Handle success
            console.log('Response:', response);
            var review = response;

            // Construct new button HTML based on approval and archive statuses
            var buttonHTML =
               '<td class="p-10px w-200px">' +
               '<div class="flex flex-col items-center justify-center h-full">' +
               '<button class="btn w-full mb-5px btn-approve">' +

               '<svg class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">' +
               '<path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>' +
               '</svg>' +
               review.newApprovedStatus +
               '</button>' +
               '<button class="btn w-full mb-5px">' +
               '<svg class="svg-inline--fa fa-box-archive" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="box-archive" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">' +
               '<path fill="currentColor" d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"></path>' +
               '</svg>' +
               review.newArchiveStatus +
               '</button>' +
               '<button class="btn btn-blue w-full" onclick="openModal(this)">' +
               '<svg class="svg-inline--fa fa-pen" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">' +
               '<path fill="currentColor" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"></path>' +
               '</svg>' +
               'Edit' +
               '</button>' +
               '</div>' +
               '</td>'
         }
      });
   }
</script>
<script>
   $(document).ready(function() {

      var filters = {
         campaignID: '',
         limit: '10',
         approved: 0,
         unapproved: 0,
         includeAllReviews: false,
         noText: 0,
         archive: 0,
         sentiment: '',

      };


      $('#archive').removeClass('active');

      function handleButtonClick(sentiment) {
         // Update the sentiment in the filters object
         filters.sentiment = sentiment;

         $('#positive').removeClass('active');
         $('#neutral').removeClass('active');
         $('#negative').removeClass('active');
         $('#' + sentiment).addClass('active');
         // Optionally log the updated filters object
         console.log('Updated filters:', filters);

         // Call filterData to apply the new filters
         filterData();
      }

      function filterData() {
         console.log('Current Shared Data:', filters);
         fetchReviews(currentPage); // Call fetchReviews whenever the filters are updated
      }

      $('#positive').on('click', function() {
         handleButtonClick('Positive');
      });

      $('#neutral').on('click', function() {
         handleButtonClick('Neutral');
      });

      $('#negative').on('click', function() {
         handleButtonClick('Negative');
      });
      // Event handler for change events
      $('#filter-campaings, #limit, #approved, #unapproved, #no-text').on('change', function() {
         // Update the filters object with current values
         filters.campaignID = $('#filter-campaings').val();
         filters.limit = $('#limit').val();
         filters.approved = $('#approved').is(':checked') ? 1 : 0;
         filters.unapproved = $('#unapproved').is(':checked') ? 1 : 0;
         filters.noText = $('#no-text').is(':checked') ? 1 : 0;

         // Check if both approved and unapproved checkboxes are checked
         filters.includeAllReviews = filters.approved && filters.unapproved;

         // Log the updated filters object and fetch reviews
         filterData();
      });

      // Event handler for button clicks
      $(document).on('click', '#reset', function() {
         // Reset all filters to default values
         filters = {
            campaignID: '',
            limit: '',
            approved: 0,
            unapproved: 0,
            includeAllReviews: false,
            noText: 0,
            archive: 0,
            sentiment: ''
         };

         // Reset form fields to default values
         $('#filter-campaings').val('');
         $('#limit').val('10');
         $('#approved').prop('checked', false);
         $('#unapproved').prop('checked', false);
         $('#no-text').prop('checked', false);
         $('#archive').removeClass('active'); // Reset the archive button
         $('#positive, #neutral, #negative').removeClass('active');
         // Log the reset state and fetch reviews
         console.log('Filters Reset:', filters);
         filterData();
      });
      $(document).on('click', '#archive', function() {
         var $button = $(this);

         // Toggle the 'active' class on the button
         $button.toggleClass('active');

         // Update the 'archive' status based on the presence of the 'active' class
         filters.archive = $button.hasClass('active') ? 1 : 0;

         // Log the updated state and fetch reviews
         console.log('Archive Status:', filters.archive);
         filterData();
      });

      var currentPage = 1;
      var fromDate, toDate;
      $('#update').click(function() {
         // Grab the values from the inputs
         fromDate = $('input[type="date"]').eq(1).val();
         toDate = $('input[type="date"]').eq(2).val();
         console.log('Button clicked');
         console.log('From:', fromDate);
         console.log('To:', toDate);
         fetchReviews(currentPage);
      });

      function fetchReviews(page) {

         $.ajax({
            url: '/analyze/reviews/get',
            type: 'POST',
            data: {
               campaign_id: filters.campaignID,
               page: page,
               limit: filters.limit,
               approved: filters.approved,
               unapproved: filters.unapproved,
               include_all_reviews: filters.includeAllReviews,
               noText: filters.noText,
               archive: filters.archive, // Ensure the key matches with what your server expects
               sentiment: filters.sentiment,
               fromdate: fromDate,
               todate: toDate
            },
            dataType: 'json',
            success: function(response) {
               //console.log(response); 

               var data = response;
               var tableBody = $('.row.table.p-10px.w-full table tbody');
               var paginationContainer = $('.pagination-container');
               tableBody.empty();
               paginationContainer.empty();
               if (Array.isArray(data.reviews) && data.reviews.length > 0) {
                  data.reviews.forEach(function(review) {
                     console.log('...the reviews are...', review);
                     var id = review.ID;
                     var buttonClass_approve = review.isApproved == '1' ? 'btn-gray' : 'btn-green';
                     var buttonText_approve = review.isApproved == '1' ? 'Approved' : 'Approve';
                     var svgDisplay_approve = review.isApproved == '1' ? 'none' : 'inline';
                     var buttonClass_archive = review.isArchive == '1' ? 'btn-gray' : 'btn-blue';
                     var buttonText_archive = review.isArchive == '1' ? 'Unarchive' : 'Archive';
                     var svgDisplay_archive = review.isArchive == '1' ? 'none' : 'inline';
                     let reviewerInfo = JSON.parse(review.reviewratings);
                     var newRow = '<tr class="flex w-full">' +
                        '<td class="p-10px w-auto">' +
                        '<div class="flex justify-start items-center col-span-3 cursor-pointer">' +
                        '<svg class="svg-inline--fa fa-square mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="far" data-icon="square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">' +
                        '<path fill="currentColor" d="M384 80c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16H384zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"></path>' +
                        '</svg>' +
                        '<p></p>' +
                        '</div>' +
                        '</td>' +
                        '<td class="p-10px flex flex-col items-center justify-start w-60px">' +
                        '<svg class="svg-inline--fa fa-face-grin text-lime-500 text-40px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">' +
                        '<path fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>' +
                        '</svg>' +
                        '<div class="w-40px h-40px rounded-full mt-10px text-white flex justify-center items-center bg-green-500">' +
                        '<p>' + review.sentiment + '</p>' +
                        '</div>' +
                        '</td>' +
                        '<td class="p-10px w-full">' +
                        '<div class="comment border-l-5 border-blue-500 py-9px px-18px mb-5px">' +
                        '<p>' + review.reviewText + '</p>' +
                        '</div>' +
                        '<div class="info flex flex-wrap">' +
                        '<div class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">' +
                        '<p><span class="font-bold">Customer:</span>' + reviewerInfo.Name + '</p>' +
                        '</div>' +
                        '<div class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">' +
                        '<p><span class="font-bold">Customer Email:</span> mikefalk@aol.com</p>' +
                        '</div>' +
                        '<div class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">' +
                        '<p><span class="font-bold">Customer Address:</span> 3068 Braeloch Cir E</p>' +
                        '</div>' +
                        '<div class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">' +
                        '<p><span class="font-bold">Date:</span> 2024-07-11</p>' +
                        '</div>' +
                        '<div class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">' +
                        '<p><span class="font-bold">Campaign:</span>' + review.campaignName + '</p>' +
                        '</div>' +
                        '<div class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">' +
                        '<p><span class="font-bold">Department:</span>' + review.campaignDepartment + '</p>' +
                        '</div>' +
                        '</div>' +
                        '<div class="ratings flex flex-wrap">' +
                        '<div class="info-tag bg-white py-5px px-15px rounded-full m-5px shadow border flex items-center">' +
                        '<p>How likely are you to recommend us to your friends and family?</p>' +
                        '<div class="rating rounded-1/2 w-20px h-20px text-white flex justify-center items-center p-13px ml-10px bg-green-500">' + review.recommendationRating + '</div>' +
                        '</div>' +
                        '<div class="info-tag bg-white py-5px px-15px rounded-full m-5px shadow border flex items-center">' +
                        '<p>Professionalism</p>' +
                        '<div class="rating rounded-1/2 w-20px h-20px text-white flex justify-center items-center p-13px ml-10px bg-green-500">' + review.professionalismRating + '</div>' +
                        '</div>' +
                        '<div class="info-tag bg-white py-5px px-15px rounded-full m-5px shadow border flex items-center">' +
                        '<p>Quality of Service</p>' +
                        '<div class="rating rounded-1/2 w-20px h-20px text-white flex justify-center items-center p-13px ml-10px bg-green-500">' + review.qualityRating + '</div>' +
                        '</div>' +
                        '</div>' +
                        '</td>' +
                        '<td class="p-10px w-200px">' +
                        '<div class="flex flex-col items-center justify-center h-full" data-id="' + review.ID + '" data-approved="' + review.isApproved + '" data-archive="' + review.isArchive + '">' +
                        '<button class="btn w-full mb-5px btn-approve ' + buttonClass_approve + '" approved ="' + review.isApproved + '"  onclick="handleApprovalClick(this)">' +
                        '<svg class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">' +
                        '<path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>' +
                        '</svg>' +
                        buttonText_approve +
                        '</button>' +
                        '<button class="btn w-full mb-5px ' + buttonClass_archive + '" archive ="' + review.isArchive + '"  onclick="handleApprovalClick(this)">' +
                        '<svg class="svg-inline--fa fa-box-archive" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="box-archive" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">' +
                        '<path fill="currentColor" d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"></path>' +
                        '</svg>' +
                        buttonText_archive +
                        '</button>' +
                        '<button class="btn btn-blue w-full" onclick="test()">' +
                        '<svg class="svg-inline--fa fa-pen" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">' +
                        '<path fill="currentColor" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"></path>' +
                        '</svg>' +
                        'Edit' +
                        '</button>' +

                        '</div>' +
                        '</td>' +
                        '</tr>' +
                        '<div id="modal">' +
                        '<p>This is the modal test</p>' +
                        '<button onclick="closeModal()">Close</button>' +
                        '</div>'
                     tableBody.append(newRow);
                  });
                  if (data.pagination) {
                     var paginationHtml = '<nav class="pagination-container">';
                     var totalPages = data.pagination.total_pages;
                     var currentPage = data.pagination.page;
                     paginationHtml += '<ul class="pagination">';
                     for (var i = 1; i <= totalPages; i++) {
                        paginationHtml += '<a href="#" class="page-link" data-page="' + i + '">' + i + '</a> ';
                     }
                     paginationHtml += '</ul>';
                     paginationHtml += '</nav>';
                     var activeClass = (i === currentPage) ? 'active' : '';
                     paginationHtml += '<li class="' + activeClass + '"><a href="#" class="page-link" data-page="' + i + '">' + i + '</a></li> ';
                  }
               } else {
                  var noReviewsRow = '<tr class="flex w-full">' +
                     '<td colspan="6" class="text-center">No reviews found....</td>' +
                     '</tr>';
                  tableBody.append(noReviewsRow);
               }
            },
            error: function(xhr, status, error) {
               console.error('Error fetching reviews:', error);
            }
         });
      }

   });
</script>
<script>
   function test() {
      document.getElementById('modal').style.display = 'block';
   }

   function closeModal() {
      document.getElementById('modal').style.display = 'none';
   }
</script>
<script>
   document.addEventListener('DOMContentLoaded', function() {
      // Get all tab elements
      var tabs = document.querySelectorAll('.tabs .tab');

      // Get current URL
      var currentUrl = window.location.pathname;

      // Remove active class from all tabs
      tabs.forEach(function(tab) {
         tab.classList.remove('border-b-2', 'border-blue-500', 'router-link-exact-active');
      });

      // Add active class to the current tab
      if (currentUrl === '/analyze/reviews') {
         document.getElementById('reviews-tab').classList.add('border-b-2', 'border-blue-500', 'router-link-exact-active');
      } else if (currentUrl === '/analyze/reviews/social-reviews') {
         document.getElementById('social-reviews-tab').classList.add('border-b-2', 'border-blue-500', 'router-link-exact-active');
      }
   });
</script>
<?= $this->endSection() ?>