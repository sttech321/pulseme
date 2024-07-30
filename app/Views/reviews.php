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
         <div class="p-20px bg-white">
            <h2 class="text-2xl">Reviews</h2>
         </div>
         <div class="px-15px bg-white flex justify-start items-center"><a href="/analyze/reviews" class="border-b-2 border-blue-500 router-link-exact-active p-10px" aria-current="page">Reviews</a><a href="/analyze/reviews/social-reviews" class="p-10px">Social Reviews</a></div>
         <div class="flex-grow">
            <div data-v-428084ba="" class="p-25px">
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
                                       <?php if (session()->getFlashdata('validation')) : ?>
                                          <div class="validation-errors">
                                             <?php foreach (session()->getFlashdata('validation')->getErrors() as $error) : ?>
                                                <p style="color: red;"><?php echo $error ?></p>
                                             <?php endforeach ?>
                                          </div>
                                          <?php $script = '$("#campaignModal").addClass("show").css("display","block")'; ?>
                                       <?php endif ?>
                                       <div class="formWrap row">
                                          <div class="flex flex-col items-stretch col-span-3">
                                             <?php if (isset($enumValues['enumValues']['reviewType']) && is_array($enumValues['enumValues']['reviewType'])) : ?>
                                                <select class="py-7px border-b outline-none bg-transparent" name="reviewType">
                                                   <option value="" selected="" hidden="">Select Source</option>
                                                   <?php foreach ($enumValues['enumValues']['reviewType'] as $type) : ?>
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
                                                <?php if (isset($enumValues['enumValues']['sentiment']) && is_array($enumValues['enumValues']['sentiment'])) : ?>
                                                   <select class="form-select form-select-md mb-3" name="sentiment">
                                                      <option value="" selected="" hidden="">Sentiment</option>
                                                      <?php foreach ($enumValues['enumValues']['sentiment'] as $type) : ?>
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
                                                   <?php foreach ($reviews as $review) : ?>
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
                                 </form>
                              </div>
                           </div>
                        </div>

                     </div>
                     <div data-v-428084ba="" class="filter flex justify-end items-baseline">
                        <svg class="svg-inline--fa fa-calendar-day" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="calendar-day" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                           <path class="" fill="currentColor" d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm80 64c-8.8 0-16 7.2-16 16v96c0 8.8 7.2 16 16 16h96c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80z"></path>
                        </svg>
                        <p class="font-bold">From</p>
                        <input min="2021-06-30" class="p-1" type="date" name="" id="">
                        <p class="font-bold">To</p>
                        <input class="p-1" type="date" name="" id="">
                        <button class="btn btn-blue">
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
                                 <?php foreach ($reviews as $review) : ?>
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
                              <button data-v-428084ba="">
                                 Filter Approved
                                 <svg data-v-428084ba="" class="svg-inline--fa fa-filter" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="filter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path class="" fill="currentColor" d="M3.9 54.9C10.5 40.9 24.5 32 40 32H472c15.5 0 29.5 8.9 36.1 22.9s4.6 30.5-5.2 42.5L320 320.9V448c0 12.1-6.8 23.2-17.7 28.6s-23.8 4.3-33.5-3l-64-48c-8.1-6-12.8-15.5-12.8-25.6V320.9L9 97.3C-.7 85.4-2.8 68.8 3.9 54.9z"></path>
                                 </svg>
                              </button>
                              <!---->
                           </div>
                        </div>
                        <div data-v-428084ba="" class="mx-10px flex justify-evenly items-center w-150px">
                           <button data-v-428084ba="">
                              <svg data-v-428084ba="" class="svg-inline--fa fa-face-grin text-4xl text-lime-500 opacity-50" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                 <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                              </svg>
                           </button>
                           <button data-v-428084ba="">
                              <svg data-v-428084ba="" class="svg-inline--fa fa-face-meh text-4xl text-sky-500 opacity-50" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-meh" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                 <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM176.4 176a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm128 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM160 336H352c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"></path>
                              </svg>
                           </button>
                           <button data-v-428084ba="">
                              <svg data-v-428084ba="" class="svg-inline--fa fa-face-frown text-4xl text-red-500 opacity-50" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-frown" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                 <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM159.3 388.7c-2.6 8.4-11.6 13.2-20 10.5s-13.2-11.6-10.5-20C145.2 326.1 196.3 288 256 288s110.8 38.1 127.3 91.3c2.6 8.4-2.1 17.4-10.5 20s-17.4-2.1-20-10.5C340.5 349.4 302.1 320 256 320s-84.5 29.4-96.7 68.7zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                              </svg>
                           </button>
                        </div>
                     </div>
                     <div data-v-428084ba="" class="buttons flex">
                        <button data-v-428084ba="" class="btn btn-blue mr-5px">
                           <svg data-v-428084ba="" class="svg-inline--fa fa-box-archive" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="box-archive" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path class="" fill="currentColor" d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"></path>
                           </svg>
                           Show Archived
                        </button>
                        <button data-v-428084ba="" class="btn btn-blue mr-5px">
                           <svg data-v-428084ba="" class="svg-inline--fa fa-music" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="music" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path class="" fill="currentColor" d="M499.1 6.3c8.1 6 12.9 15.6 12.9 25.7v72V368c0 44.2-43 80-96 80s-96-35.8-96-80s43-80 96-80c11.2 0 22 1.6 32 4.6V147L192 223.8V432c0 44.2-43 80-96 80s-96-35.8-96-80s43-80 96-80c11.2 0 22 1.6 32 4.6V200 128c0-14.1 9.3-26.6 22.8-30.7l320-96c9.7-2.9 20.2-1.1 28.3 5z"></path>
                           </svg>
                           Audio &amp; Text
                        </button>
                        <button data-v-428084ba="" class="btn btn-green mr-5px"> Reset Filters </button>
                     </div>
                  </div>
                  <!---->
                  <div data-v-428084ba="" class="row table p-10px w-full">
                     <table data-v-428084ba="" class="w-full">
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
                                 <p data-v-f15ab7a3="">9.9</p>
                              </div>
                           </td>
                           <td data-v-f15ab7a3="" class="p-10px w-full">
                              <!---->
                              <div data-v-f15ab7a3="" class="comment border-l-5 border-blue-500 py-9px px-18px mb-5px">
                                 <p data-v-f15ab7a3="">Scott was helpful and professional.</p>
                              </div>
                              <div data-v-f15ab7a3="" class="info flex flex-wrap">
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer:</span> Michael Falk</p>
                                 </div>
                                 <!---->
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer Email:</span> mikefalk@aol.com</p>
                                 </div>
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer Address:</span> 3068 Braeloch Cir E</p>
                                 </div>
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Date:</span> 2024-07-11</p>
                                 </div>
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Campaign:</span> Scott Neubert</p>
                                 </div>
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Department:</span> Service Technician</p>
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
                              <div data-v-f15ab7a3="" class="flex flex-col items-center justify-center h-full">
                                 <button data-v-f15ab7a3="" class="btn w-full mb-5px btn-green">
                                    <svg data-v-f15ab7a3="" class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                       <path class="" fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                    </svg>
                                    Approve
                                 </button>
                                 <button data-v-f15ab7a3="" class="btn btn-blue w-full mb-5px">
                                    <svg data-v-f15ab7a3="" class="svg-inline--fa fa-box-archive" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="box-archive" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                       <path class="" fill="currentColor" d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"></path>
                                    </svg>
                                    Archive
                                 </button>
                                 <button data-v-f15ab7a3="" class="btn btn-blue w-full">
                                    <svg data-v-f15ab7a3="" class="svg-inline--fa fa-pen" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                       <path class="" fill="currentColor" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"></path>
                                    </svg>
                                    Edit
                                 </button>
                              </div>
                           </td>
                           <!----><!----><!---->
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
                                 <p data-v-f15ab7a3="">9.9</p>
                              </div>
                           </td>
                           <td data-v-f15ab7a3="" class="p-10px w-full">
                              <!---->
                              <div data-v-f15ab7a3="" class="comment border-l-5 border-blue-500 py-9px px-18px mb-5px">
                                 <p data-v-f15ab7a3="">Scott was awesome! He was very friendly and professional. You can tell he really cares about the customer.</p>
                              </div>
                              <div data-v-f15ab7a3="" class="info flex flex-wrap">
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer:</span> Odilma Bernate</p>
                                 </div>
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer Phone:</span> +1 (239) 284-2194</p>
                                 </div>
                                 <!---->
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer Address:</span> 4311 22nd Avenue West</p>
                                 </div>
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Date:</span> 2024-07-11</p>
                                 </div>
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Campaign:</span> Scott Neubert</p>
                                 </div>
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Department:</span> Service Technician</p>
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
                              <div data-v-f15ab7a3="" class="flex flex-col items-center justify-center h-full">
                                 <button data-v-f15ab7a3="" class="btn w-full mb-5px btn-green">
                                    <svg data-v-f15ab7a3="" class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                       <path class="" fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                    </svg>
                                    Approve
                                 </button>
                                 <button data-v-f15ab7a3="" class="btn btn-blue w-full mb-5px">
                                    <svg data-v-f15ab7a3="" class="svg-inline--fa fa-box-archive" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="box-archive" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                       <path class="" fill="currentColor" d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"></path>
                                    </svg>
                                    Archive
                                 </button>
                                 <button data-v-f15ab7a3="" class="btn btn-blue w-full">
                                    <svg data-v-f15ab7a3="" class="svg-inline--fa fa-pen" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                       <path class="" fill="currentColor" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"></path>
                                    </svg>
                                    Edit
                                 </button>
                              </div>
                           </td>
                           <!----><!----><!---->
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
                              <div data-v-f15ab7a3="" class="sm-badge sm-google"><i data-v-f15ab7a3=""></i></div>
                           </td>
                           <td data-v-f15ab7a3="" class="p-10px w-full">
                              <!---->
                              <div data-v-f15ab7a3="" class="comment border-l-5 border-blue-500 py-9px px-18px mb-5px">
                                 <p data-v-f15ab7a3="">So my 16 year old ac system finally departed this earth,so I went A/C company shopping online and found HALES AIR CONDITIONING &amp; HEATING. Let me just say from the initial Sales Rep call to the final install it was a true pleasure. Mike and Nick {INSTALL TECHS} did a fantastic job installing the system and replacing the garage duct work to code. I highly recommend this company,they truly go above and beyond .</p>
                              </div>
                              <div data-v-f15ab7a3="" class="info flex flex-wrap">
                                 <!----><!----><!----><!---->
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Date:</span> 2024-07-10</p>
                                 </div>
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Campaign:</span> Hales AC Service</p>
                                 </div>
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Department:</span> General</p>
                                 </div>
                              </div>
                              <div data-v-f15ab7a3="" class="ratings flex flex-wrap"></div>
                           </td>
                           <td data-v-f15ab7a3="" class="p-10px w-200px">
                              <div data-v-f15ab7a3="" class="flex flex-col items-center justify-center h-full">
                                 <button data-v-f15ab7a3="" class="btn w-full mb-5px btn-green">
                                    <svg data-v-f15ab7a3="" class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                       <path class="" fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                    </svg>
                                    Approve
                                 </button>
                                 <button data-v-f15ab7a3="" class="btn btn-blue w-full mb-5px">
                                    <svg data-v-f15ab7a3="" class="svg-inline--fa fa-box-archive" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="box-archive" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                       <path class="" fill="currentColor" d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"></path>
                                    </svg>
                                    Archive
                                 </button>
                                 <button data-v-f15ab7a3="" class="btn btn-blue w-full">
                                    <svg data-v-f15ab7a3="" class="svg-inline--fa fa-pen" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                       <path class="" fill="currentColor" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"></path>
                                    </svg>
                                    Edit
                                 </button>
                              </div>
                           </td>
                           <!----><!----><!---->
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
                                 <p data-v-f15ab7a3="">9.9</p>
                              </div>
                           </td>
                           <td data-v-f15ab7a3="" class="p-10px w-full">
                              <!---->
                              <div data-v-f15ab7a3="" class="comment border-l-5 border-blue-500 py-9px px-18px mb-5px">
                                 <p data-v-f15ab7a3="">Aaron Krasnow was my technician today from Hales AC.It was as usual a complete pleasure to have him as my technician to not only clean and check my AC system but also install a ultra violet system to maintain my system.Hales can be proud to have such a professional and courteous employee represent their company.</p>
                              </div>
                              <div data-v-f15ab7a3="" class="info flex flex-wrap">
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer:</span> Kevin Cowan</p>
                                 </div>
                                 <!---->
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer Email:</span> kcowlan@gmail.com</p>
                                 </div>
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer Address:</span> 5385 - 26th Ave N</p>
                                 </div>
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Date:</span> 2024-07-10</p>
                                 </div>
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Campaign:</span> Aaron Krasnow</p>
                                 </div>
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Department:</span> Service Technician</p>
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
                              <div data-v-f15ab7a3="" class="flex flex-col items-center justify-center h-full">
                                 <button data-v-f15ab7a3="" class="btn w-full mb-5px btn-green">
                                    <svg data-v-f15ab7a3="" class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                       <path class="" fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                    </svg>
                                    Approve
                                 </button>
                                 <button data-v-f15ab7a3="" class="btn btn-blue w-full mb-5px">
                                    <svg data-v-f15ab7a3="" class="svg-inline--fa fa-box-archive" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="box-archive" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                       <path class="" fill="currentColor" d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"></path>
                                    </svg>
                                    Archive
                                 </button>
                                 <button data-v-f15ab7a3="" class="btn btn-blue w-full">
                                    <svg data-v-f15ab7a3="" class="svg-inline--fa fa-pen" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                       <path class="" fill="currentColor" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"></path>
                                    </svg>
                                    Edit
                                 </button>
                              </div>
                           </td>
                           <!----><!----><!---->
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
                              <div data-v-f15ab7a3="" class="sm-badge sm-google"><i data-v-f15ab7a3=""></i></div>
                           </td>
                           <td data-v-f15ab7a3="" class="p-10px w-full">
                              <!----><!---->
                              <div data-v-f15ab7a3="" class="info flex flex-wrap">
                                 <!----><!----><!----><!---->
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Date:</span> 2024-07-10</p>
                                 </div>
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Campaign:</span> Hales AC Service</p>
                                 </div>
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Department:</span> General</p>
                                 </div>
                              </div>
                              <div data-v-f15ab7a3="" class="ratings flex flex-wrap"></div>
                           </td>
                           <td data-v-f15ab7a3="" class="p-10px w-200px">
                              <div data-v-f15ab7a3="" class="flex flex-col items-center justify-center h-full">
                                 <button data-v-f15ab7a3="" class="btn w-full mb-5px btn-green">
                                    <svg data-v-f15ab7a3="" class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                       <path class="" fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                    </svg>
                                    Approve
                                 </button>
                                 <button data-v-f15ab7a3="" class="btn btn-blue w-full mb-5px">
                                    <svg data-v-f15ab7a3="" class="svg-inline--fa fa-box-archive" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="box-archive" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                       <path class="" fill="currentColor" d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"></path>
                                    </svg>
                                    Archive
                                 </button>
                                 <button data-v-f15ab7a3="" class="btn btn-blue w-full">
                                    <svg data-v-f15ab7a3="" class="svg-inline--fa fa-pen" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                       <path class="" fill="currentColor" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"></path>
                                    </svg>
                                    Edit
                                 </button>
                              </div>
                           </td>
                           <!----><!----><!---->
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
                              <div data-v-f15ab7a3="" class="sm-badge sm-google"><i data-v-f15ab7a3=""></i></div>
                           </td>
                           <td data-v-f15ab7a3="" class="p-10px w-full">
                              <!---->
                              <div data-v-f15ab7a3="" class="comment border-l-5 border-blue-500 py-9px px-18px mb-5px">
                                 <p data-v-f15ab7a3="">Hales did a great job today and Aaron Krasnow was the reason! Thx Aaron</p>
                              </div>
                              <div data-v-f15ab7a3="" class="info flex flex-wrap">
                                 <!----><!----><!----><!---->
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Date:</span> 2024-07-10</p>
                                 </div>
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Campaign:</span> Hales AC Service</p>
                                 </div>
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Department:</span> General</p>
                                 </div>
                              </div>
                              <div data-v-f15ab7a3="" class="ratings flex flex-wrap"></div>
                           </td>
                           <td data-v-f15ab7a3="" class="p-10px w-200px">
                              <div data-v-f15ab7a3="" class="flex flex-col items-center justify-center h-full">
                                 <button data-v-f15ab7a3="" class="btn w-full mb-5px btn-green">
                                    <svg data-v-f15ab7a3="" class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                       <path class="" fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                    </svg>
                                    Approve
                                 </button>
                                 <button data-v-f15ab7a3="" class="btn btn-blue w-full mb-5px">
                                    <svg data-v-f15ab7a3="" class="svg-inline--fa fa-box-archive" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="box-archive" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                       <path class="" fill="currentColor" d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"></path>
                                    </svg>
                                    Archive
                                 </button>
                                 <button data-v-f15ab7a3="" class="btn btn-blue w-full">
                                    <svg data-v-f15ab7a3="" class="svg-inline--fa fa-pen" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                       <path class="" fill="currentColor" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"></path>
                                    </svg>
                                    Edit
                                 </button>
                              </div>
                           </td>
                           <!----><!----><!---->
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
                                 <p data-v-f15ab7a3="">9.9</p>
                              </div>
                           </td>
                           <td data-v-f15ab7a3="" class="p-10px w-full">
                              <!---->
                              <div data-v-f15ab7a3="" class="comment border-l-5 border-blue-500 py-9px px-18px mb-5px">
                                 <p data-v-f15ab7a3="">He was very helpful</p>
                              </div>
                              <div data-v-f15ab7a3="" class="info flex flex-wrap">
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer:</span> Todd Johnson</p>
                                 </div>
                                 <!---->
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer Email:</span> todd2464@yahoo.com</p>
                                 </div>
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer Address:</span> 6916 Stones Throw CirN #9208</p>
                                 </div>
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Date:</span> 2024-07-10</p>
                                 </div>
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Campaign:</span> Paul Hoang</p>
                                 </div>
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Department:</span> Service Technician</p>
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
                              <div data-v-f15ab7a3="" class="flex flex-col items-center justify-center h-full">
                                 <button data-v-f15ab7a3="" class="btn w-full mb-5px btn-green">
                                    <svg data-v-f15ab7a3="" class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                       <path class="" fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                    </svg>
                                    Approve
                                 </button>
                                 <button data-v-f15ab7a3="" class="btn btn-blue w-full mb-5px">
                                    <svg data-v-f15ab7a3="" class="svg-inline--fa fa-box-archive" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="box-archive" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                       <path class="" fill="currentColor" d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"></path>
                                    </svg>
                                    Archive
                                 </button>
                                 <button data-v-f15ab7a3="" class="btn btn-blue w-full">
                                    <svg data-v-f15ab7a3="" class="svg-inline--fa fa-pen" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                       <path class="" fill="currentColor" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"></path>
                                    </svg>
                                    Edit
                                 </button>
                              </div>
                           </td>
                           <!----><!----><!---->
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
                              <div data-v-f15ab7a3="" class="sm-badge sm-google"><i data-v-f15ab7a3=""></i></div>
                           </td>
                           <td data-v-f15ab7a3="" class="p-10px w-full">
                              <!---->
                              <div data-v-f15ab7a3="" class="comment border-l-5 border-blue-500 py-9px px-18px mb-5px">
                                 <p data-v-f15ab7a3="">Paul from Hales was outstanding. Paul came on the Sat. of Fathers day weekend to diagnose my AC problem. Paul was extremely thorough &amp; very knowledgeable. Paul explained everything in layman’s terms. Why it happened, how it happened, &amp; what we need to fix it. Unfortunately it was the worst. Had to replace the whole system. The old one is over 20 years old. I am a disabled vet. of 26 years. Unfortunately I have numerous medical conditions that require a temperature controlled environment. Fortunately Paul went above and to ensure parts &amp; labor would be ready to start Mon. morning. Thank you Paul &amp; Hales</p>
                              </div>
                              <div data-v-f15ab7a3="" class="info flex flex-wrap">
                                 <!----><!----><!----><!---->
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Date:</span> 2024-07-09</p>
                                 </div>
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Campaign:</span> Hales AC Service</p>
                                 </div>
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Department:</span> General</p>
                                 </div>
                              </div>
                              <div data-v-f15ab7a3="" class="ratings flex flex-wrap"></div>
                           </td>
                           <td data-v-f15ab7a3="" class="p-10px w-200px">
                              <div data-v-f15ab7a3="" class="flex flex-col items-center justify-center h-full">
                                 <button data-v-f15ab7a3="" class="btn w-full mb-5px btn-gray">
                                    <svg data-v-f15ab7a3="" class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                       <path class="" fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                    </svg>
                                    Approved
                                 </button>
                                 <button data-v-f15ab7a3="" class="btn btn-blue w-full mb-5px">
                                    <svg data-v-f15ab7a3="" class="svg-inline--fa fa-box-archive" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="box-archive" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                       <path class="" fill="currentColor" d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"></path>
                                    </svg>
                                    Archive
                                 </button>
                                 <button data-v-f15ab7a3="" class="btn btn-blue w-full">
                                    <svg data-v-f15ab7a3="" class="svg-inline--fa fa-pen" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                       <path class="" fill="currentColor" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"></path>
                                    </svg>
                                    Edit
                                 </button>
                              </div>
                           </td>
                           <!----><!----><!---->
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
                                 <p data-v-f15ab7a3="">9.8</p>
                              </div>
                           </td>
                           <td data-v-f15ab7a3="" class="p-10px w-full">
                              <!---->
                              <div data-v-f15ab7a3="" class="comment border-l-5 border-blue-500 py-9px px-18px mb-5px">
                                 <p data-v-f15ab7a3="">I said yesterday the work was done well and professionally.</p>
                              </div>
                              <div data-v-f15ab7a3="" class="info flex flex-wrap">
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer:</span> Jim &amp; Sara Mehltretter</p>
                                 </div>
                                 <!---->
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer Email:</span> sara@mcengineers.com</p>
                                 </div>
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer Address:</span> 16124 4th St E</p>
                                 </div>
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Date:</span> 2024-07-09</p>
                                 </div>
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Campaign:</span> Kiefer Hutcheson</p>
                                 </div>
                                 <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                                    <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Department:</span> Duct Cleaning </p>
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
                                    <div data-v-f15ab7a3="" class="rating rounded-1/2 w-20px h-20px text-white flex justify-center items-center p-13px ml-10px bg-green-500">9</div>
                                 </div>
                              </div>
                           </td>
                           <!----><!----><!---->
                        </tr>
                     </table>
                     <div data-v-428084ba="" class="pagination flex justify-between items-center">
                        <div data-v-428084ba="" class="pagination-links grid grid-rows-1 grid-flow-col gap-5px">
                           <button data-v-428084ba="" class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100">
                              <svg data-v-428084ba="" class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                 <path class="" fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                              </svg>
                           </button>
                           <button data-v-428084ba="" class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100" disabled="">
                              <svg data-v-428084ba="" class="svg-inline--fa fa-caret-left" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                                 <path class="" fill="currentColor" d="M9.4 278.6c-12.5-12.5-12.5-32.8 0-45.3l128-128c9.2-9.2 22.9-11.9 34.9-6.9s19.8 16.6 19.8 29.6l0 256c0 12.9-7.8 24.6-19.8 29.6s-25.7 2.2-34.9-6.9l-128-128z"></path>
                              </svg>
                           </button>
                           <button data-v-428084ba="" class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-blue-500 text-white">1</button><button data-v-428084ba="" class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100">2</button><button data-v-428084ba="" class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100">3</button><button data-v-428084ba="" class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100">4</button><button data-v-428084ba="" class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100">5</button>
                           <button data-v-428084ba="" class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100">
                              <svg data-v-428084ba="" class="svg-inline--fa fa-caret-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                                 <path class="" fill="currentColor" d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z"></path>
                              </svg>
                           </button>
                           <button data-v-428084ba="" class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100">
                              <svg data-v-428084ba="" class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                 <path class="" fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                              </svg>
                           </button>
                        </div>
                     </div>
                  </div>
                  <!----><!---->
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?= $this->endSection() ?>