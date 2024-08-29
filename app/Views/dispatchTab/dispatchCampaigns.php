<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<style>
   .tab-link.active {
      font-weight: bold;
      color: #1a73e8;
      /* Example color */
   }
</style>
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
</div>
<div class="sidebarRightContent">
   <div class="flex-grow flex flex-col items-stretch bg-gray-100 h-auto">
      <div class="headline bg-white p-20px border-b border-gray-200">
         <h1 class="text-2xl">Manage Your Account</h1>
      </div>
      <div class="flex flex-grow justify-start">
         <div class="w-1/4 max-w-200px flex flex-shrink-0 justify-start items-start flex-col">
            <h2 class="text-xl p-15px pt-30px">Company Settings</h2>
            <div class="p-15px">
               <div class="links flex flex-col border-l border-gray-400">
                  <!-- <a href="/settings/general/connect-social-media" class="p-15px">
                     <svg class="svg-inline--fa fa-chart-line mr-5px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chart-line" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path class="" fill="currentColor" d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z">
                        </path>
                     </svg>
                     General 
                  </a> -->
                  <a href="<?= base_url('/settings/dispatch/campaigns') ?>" class="tab-link border-blue-500 text-blue-500 border-l-2 p-15px">
                     <svg class="svg-inline--fa fa-arrow-right-arrow-left mr-5px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right-arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path class="" fill="currentColor" d="M438.6 150.6c12.5-12.5 12.5-32.8 0-45.3l-96-96c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.7 96 32 96C14.3 96 0 110.3 0 128s14.3 32 32 32l306.7 0-41.4 41.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l96-96zm-333.3 352c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 416 416 416c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0 41.4-41.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-96 96c-12.5 12.5-12.5 32.8 0 45.3l96 96z">
                        </path>
                     </svg>
                     Dispatch
                  </a>
                  <!---->
                  <a href="<?= base_url('/settings/contact-card/contact-information') ?>" class="p-15px">
                     <svg class="svg-inline--fa fa-address-card mr-5px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="address-card" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 256h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zm256-32H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16z">
                        </path>
                     </svg>
                     Contact Card
                  </a>
                  <!---->
                  <!-- <a href="/settings/billing/billing_subscription" class="p-15px">
                     <svg class="svg-inline--fa fa-credit-card mr-5px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="credit-card" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96v32H576V96c0-35.3-28.7-64-64-64H64zM576 224H0V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V224zM112 352h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm112 16c0-8.8 7.2-16 16-16H368c8.8 0 16 7.2 16 16s-7.2 16-16 16H240c-8.8 0-16-7.2-16-16z">
                        </path>
                     </svg>
                     Billing 
                  </a> -->
               </div>
            </div>
         </div>
         <div class="flex-grow pt-20px">
            <div class="flex flex-col">
               <div class="sub-menu-bar pl-25px">
                  <div class="flex justify-start items-center border-b border-gray-300">
                     <a href="<?= base_url('/settings/dispatch/campaigns') ?>" class="tab-link active border-b-2 border-blue-500 text-blue-500 router-link-exact-active p-15px" aria-current="page">Campaigns</a>
                     <!-- <a href="<?= base_url('/settings/dispatch/notifications') ?>" class="p-15px">Notifications</a>
                  <a href="<?= base_url('/settings/dispatch/web-widget') ?>" class="p-15px">WebWidget</a>
                  <a href="<?= base_url('/settings/dispatch/review-widget') ?>" class="p-15px">Review Widget</a> -->
                  </div>
               </div>
               <div class="p-25px campaigns">
                  <div data-v-24df4780="" class="flex flex-col items-stretch" class="lists">
                     <!---->
                     <div data-v-24df4780="" class="main p-20px bg-white rounded">
                        <!----><!---->
                        <div data-v-24df4780="" class="search flex w-full mb-20px flex justify-between items-center">
                           <div data-v-24df4780="" class="search-input border border-gray-400 rounded-4px p-10px flex items-center">
                              <svg data-v-24df4780="" class="svg-inline--fa fa-magnifying-glass" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                 <path class="" fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                                 </path>
                              </svg>
                              <input data-v-24df4780="" class="border-0 ml-10px w-300px outline-none" type="search" name="search" id="search" placeholder="Search by name or department">
                           </div>
                           <div data-v-24df4780="" class="batch-send flex-center">
                              <div class="leftSec">
                                 <!-- Button trigger modal -->
                                 <button type="button" class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#campaignModal">
                                    <i class="fa fa-plus mr-3" aria-hidden="true"></i> Create Campaign
                                 </button>
                                 <div class="modal fade" id="campaignModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <!-- Modal -->
                                    <div class="modal-dialog modalContent mx-700">
                                       <div class="modal-content">
                                          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                             <!-- <li class="nav-item" role="presentation" style="display:none;">
                                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">General</button>
                                             </li>
                                             <li class="nav-item" role="presentation" style="display:none;">
                                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#youtube-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Youtube</button>
                                             </li>
                                             <li class="nav-item" role="presentation" style="display:none;">
                                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Templates</button>
                                             </li> -->
                                          </ul>
                                          <div class="tab-content" id="pills-tabContent">
                                             <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                <form id="campaignForm" enctype="multipart/form-data">
                                                   <div class="modal-header">
                                                      <h5 class="modal-title" id="exampleModalLabel">Create campaign</h5>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                   </div>
                                                   <div class="modal-body">
                                                      <div class="grid grid-cols-2 gap-20px auto-rows-auto">
                                                         <div class="flex w-full flex-col row-span-3">
                                                            <img id="preview" class="preview-image w-200px h-auto" src="/image/campaignProfile.jpg" alt="Image Preview">
                                                            <p class="text-md">Upload your image</p>
                                                            <p class="text-sm mb-3">The preferred size is 200x200</p>
                                                            <!-- <input id="logo-upload" hidden="" type="file"> -->
                                                            <button class="btn btn-blue w-full mb-2" type="button">
                                                               <input type="file" id="profile-image-upload-1" name="campaignImage" style="display: block;" accept="image/*" onchange="previewImage(event)">
                                                            </button>
                                                         </div>
                                                         <div class="input-group">
                                                            <label class="font-bold text-sm" for="campaignName">Campaign Name</label>
                                                            
                                                            <input class="w-full p-5px outline-none border-b focus:border-blue-500" type="text" name="CampaignName" id="campaignName" value="">

                                                         </div>
                                                         <div class="input-group row-span-2">
                                                            <label class="font-bold text-sm" for="description">Campaign Description</label>
                                                            <textarea class="w-full p-5px outline-none border-b focus:border-blue-500 h-100" type="text" name="campaignDescription" rows="5" id="description"></textarea>
                                                         </div>
                                                         <div class="input-group">
                                                            <label class="font-bold text-sm" for="department">Department</label>
                                                            <input class="w-full p-5px outline-none border-b focus:border-blue-500" type="text" name="campaignDepartment" id="department" value="">
                                                         </div>
                                                         <div class="input-group">
                                                            <label class="font-bold text-sm" for="license">License</label>
                                                            <input class="w-full p-5px outline-none border-b focus:border-blue-500" type="text" name="license" id="license" value="">
                                                         </div>
                                                         <div class="input-group">
                                                            <label class="font-bold text-sm" for="employeeID">Employee ID <span class="text-xs">(Useful for API Integrations)</span></label>
                                                            <input class="w-full p-5px outline-none border-b focus:border-blue-500" type="text" name="employeeId" id="employeeID" value="">
                                                         </div>
                                                         <div class="input-group">
                                                            <label class="font-bold text-sm" for="email">Email <span class="text-xs">(descriptor)</span></label>
                                                            <input class="w-full p-5px outline-none border-b focus:border-blue-500" type="email" name="email" id="email" value="">
                                                         </div>
                                                         <div class="input-group">
                                                            <label class="font-bold text-sm" for="device">Device ID <span class="text-xs">(deviceId)</span></label>
                                                            <input class="w-full p-5px outline-none border-b focus:border-blue-500" type="text" name="deviceId" id="device" value="">
                                                         </div>
                                                         <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary btn-md" data-bs-dismiss="modal">Cancel</button>
                                                            <button type="submit" class="btn btn-primary btn-md">Submit changes</button>
                                                         </div>
                                                      </div>
                                                </form>
                                             </div>
                                             <?php /*
                                                   <div class="tab-pane fade" id="youtube-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                   <div class="modal-body p-30px container">
                                                       <div class="mb-20px">
                                                               <h2 class="text-23px">Create Campaign</h2>
                                                               <p></p>
                                                           </div>
                                                           <!---->
                                                           <div class="row flex w-full mb-20px">
                                                               <div class="flex w-full flex-col justify-start items-start">
                                                                   <div class="input-group w-full"><label class="font-bold text-sm" for="youtube">Youtube Video Link</label><input class="w-full p-5px border-b outline-none focus:border-blue-500" type="text" name="youtube" id="youtube" /></div>
                                                               </div>
                                                           </div>
                                                           <!----><!---->
                                                           <!-- <div class="flex justify-end mt-20px"><button class="btn text-sm btn-blue">Add Campaign</button><button class="btn btn-gray text-sm ml-10px">Close</button></div> -->
                                                       </div>
                                                   </div>
                                                   <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                   <div class="modal-body p-30px container">
                                                           <div class="mb-20px">
                                                               <h2 class="text-23px">Create Campaign</h2>
                                                               <p></p>
                                                           </div>
                                                           <!----><!---->
                                                           <div class="row">
                                                               <h3 class="text-md">SMS Templates</h3>
                                                               <div class="input-group mb-5">
                                                                   <label class="font-bold text-sm" for="sms-pulse-check">Pulse Check</label>
                                                                   <textarea class="w-full p-5px" placeholder="(Optional) Override Pulse SMS Templates" type="text" name="sms-pulse-check" rows="4" id="sms-pulse-check"></textarea>
                                                               </div>
                                                               <div class="input-group mb-5">
                                                                   <label class="font-bold text-sm" for="sms-bio-template">Bio Template</label>
                                                                   <textarea class="w-full p-5px" placeholder="(Optional) Override Bio SMS Templates" type="text" name="sms-bio-template" rows="4" id="sms-bio-template"></textarea>
                                                               </div>
                                                               <h3 class="text-md">Email Templates</h3>
                                                               <div class="input-group w-full mb-5">
                                                                   <label class="font-bold text-sm" for="email-pulse-check">Pulse Check Template Name</label>
                                                                   <input class="w-full p-5px" type="text" placeholder="(Optional) Override Pulse Check Email Template Name" name="email-pulse-check" id="email-pulse-check" />
                                                               </div>
                                                               <div class="input-group w-full mb-5">
                                                                   <label class="font-bold text-sm" for="email-bio-template">Bio Template Name</label>
                                                                   <input class="w-full p-5px" type="text" placeholder="(Optional) Override Bio Email Template Name" name="email-bio-template" id="email-bio-template" />
                                                               </div>
                                                           </div>
                                                           <!---->
                                                       <div class="flex justify-end mt-20px"><button class="btn text-sm btn-blue">Add Campaign</button><button class="btn btn-gray text-sm ml-10px">Close</button>
                                                       </div>
                                                       </div>
                                                   
                                                   */ ?>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- <button data-v-24df4780="" class="btn btn-green ml-2"><svg data-v-24df4780="" class="svg-inline--fa fa-pen" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                 <path class="" fill="currentColor" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z">
                                 </path>
                                 </svg> </button> -->
                           <div class="rightSec">
                              <!-- <button type="button" class="btn btn-secondary btn-md ml-2" data-bs-toggle="modal" data-bs-target="#editdefaultModal">
                                 <i class="fa fa-plus mr-3" aria-hidden="true"></i> Edit Defaults
                                 </button> -->
                              <div class="modal fade" id="editdefaultModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                 <!-- Modal -->
                                 <div class="modal-dialog modalContent mx-700">
                                    <div class="modal-content">
                                       <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                          <li class="nav-item" role="presentation">
                                             <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home1" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Templates</button>
                                          </li>
                                          <li class="nav-item" role="presentation">
                                             <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile1" type="button" role="tab" aria-controls="pills-profile1" aria-selected="false">Social Media</button>
                                          </li>
                                       </ul>
                                       <div class="tab-content" id="pills-tabContent">
                                          <div class="tab-pane fade show active" id="pills-home1" role="tabpanel" aria-labelledby="pills-home-tab">
                                             <form method="post" action="<?= base_url('demo_test'); ?>" enctype="multipart/form-data">
                                                <div class="modal-header">
                                                   <!-- <h5 class="modal-title" id="exampleModalLabel">Create campaign</h5> -->
                                                   <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">close</button> -->
                                                </div>
                                                <div class="modal-body p-30px container">
                                                   <h2 class="text-23px mb-3">Edit Defaults</h2>
                                                   <div class="row">
                                                      <h3 class="text-md">SMS Templates</h3>
                                                      <div class="input-group mb-5">
                                                         <label class="font-bold text-sm" for="sms-pulse-check">Pulse Check</label>
                                                         <textarea class="w-full p-5px border-b border-gray-200 outline-none focus:border-blue-500 focus:border-b-2 resize-none" placeholder="(Optional) Override Pulse SMS Templates" type="text" name="sms-pulse-check" rows="4" id="sms-pulse-check"></textarea>
                                                         <!---->
                                                      </div>
                                                      <div class="input-group mb-5">
                                                         <label class="font-bold text-sm" for="sms-bio-template">Bio Template</label>
                                                         <textarea class="w-full p-5px border-b border-gray-200 outline-none focus:border-blue-500 focus:border-b-2 resize-none" placeholder="(Optional) Override Bio SMS Templates" type="text" name="sms-bio-template" rows="4" id="sms-bio-template"></textarea>
                                                         <!---->
                                                      </div>
                                                      <h3 class="text-md">Email Templates</h3>
                                                      <div class="input-group w-full mb-5"><label class="font-bold text-sm" for="email-pulse-check">Pulse Check Template Name</label><input class="w-full p-5px border-b border-gray-200 outline-none focus:border-blue-500 focus:border-b-2" type="text" placeholder="(Optional) Override Pulse Check Email Template Name" name="email-pulse-check" id="email-pulse-check"></div>
                                                      <div class="input-group w-full mb-5"><label class="font-bold text-sm" for="email-bio-template">Bio Template Name</label><input class="w-full p-5px border-b border-gray-200 outline-none focus:border-blue-500 focus:border-b-2" type="text" placeholder="(Optional) Override Bio Email Template Name" name="email-bio-template" id="email-bio-template"></div>
                                                   </div>
                                                   <!---->
                                                   <div class="row flex justify-end"><button class="btn text-sm btn-blue" id="save-button"> Save Defaults </button><button class="btn bg-gray text-sm ml-10px" id="close-button"> Close </button>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                          <div class="tab-pane fade" id="pills-profile1" role="tabpanel" aria-labelledby="pills-profile-tab">
                                             sFDA
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <?php foreach ($campaigns as $campaign) : ?>
                                 <input type="hidden" name="id" id="campaignid" value="<?= $campaign['ID'] ?>">
                                 <!-- Modal for editing a campaign -->
                                 <div class="modal fade" id="EDITcampaignModal-<?= $campaign['ID'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modalContent mx-700">
                                       <div class="modal-content">
                                          <form method="post" action="<?= base_url('/settings/dispatch/campaigns/update/' . $campaign['ID']) ?>" enctype="multipart/form-data" data-ajax="true">
                                             <input type="hidden" name="id" value="<?= $campaign['ID'] ?>">
                                             <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit campaign</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                             </div>
                                             <div class="modal-body">
                                                <div class="grid grid-cols-2 gap-20px auto-rows-auto">
                                                   <div class="flex w-full flex-col row-span-3 uploadImgBox">
                                                      <img id="preview" class="preview-image w-200px h-auto" src="<?= esc($campaign['image']) ?>" alt="Image Preview">
                                                      <p class="text-md">Upload your image</p>
                                                      <p class="text-sm mb-3">The preferred size is 200x200</p>
                                                      <button class="btn w-full mb-2 uploadBtnWrap" type="button">
                                                         <label for="profile-image-upload-1" class="upload-label">Upload your file</label>

                                                         <!-- <input type="file" id="profile-image-upload-1" name="campaignImage" accept="image/*" onchange="previewImage(event)" class="upload-input"> -->

                                                         <!-- <input type="file" id="profile-image-upload-1" name="campaignimg" accept="image/*" onchange="previewImage(event)" > -->


                                                      </button>
                                                   </div>
                                                   <div class="input-group">
                                                      <label class="font-bold text-sm" for="campaignName">Campaign Name</label>
                                                      <input class="w-full p-5px outline-none border-b focus:border-blue-500" type="text" name="CampaignName" id="campaignName" value="<?= esc($campaign['name']) ?>">
                                                   </div>
                                                   <div class="input-group row-span-2">
                                                      <label class="font-bold text-sm" for="description">Campaign Description</label>
                                                      <textarea class="w-full p-5px outline-none border-b focus:border-blue-500 h-100" name="campaignDescription" id="description"><?= esc($campaign['description']) ?></textarea>
                                                   </div>
                                                   <div class="input-group">
                                                      <label class="font-bold text-sm" for="department">Department</label>
                                                      <input class="w-full p-5px outline-none border-b focus:border-blue-500" type="text" name="campaignDepartment" id="department" value="<?= esc($campaign['department']) ?>">
                                                   </div>
                                                   <div class="input-group">
                                                      <label class="font-bold text-sm" for="license">License</label>
                                                      <input class="w-full p-5px outline-none border-b focus:border-blue-500" type="text" name="license" id="license" value="<?= esc($campaign['license']) ?>">
                                                   </div>
                                                   <div class="input-group">
                                                      <label class="font-bold text-sm" for="employeeID">Employee ID <span class="text-xs">(Useful for API Integrations)</span></label>
                                                      <input class="w-full p-5px outline-none border-b focus:border-blue-500" type="text" name="employeeId" id="employeeId" value="<?= esc($campaign['employeeId']) ?>">
                                                   </div>
                                                   <div class="input-group">
                                                      <label class="font-bold text-sm" for="email">Email <span class="text-xs">(descriptor)</span></label>
                                                      <input class="w-full p-5px outline-none border-b focus:border-blue-500" type="email" name="email" id="email" value="<?= esc($campaign['email']) ?>">
                                                   </div>
                                                   <div class="input-group">
                                                      <label class="font-bold text-sm" for="device">Device ID <span class="text-xs">(deviceId)</span></label>
                                                      <input class="w-full p-5px outline-none border-b focus:border-blue-500" type="text" name="deviceId" id="deviceId" value="<?= esc($campaign['deviceId']) ?>">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="modal-footer">
                                                <button type="submit" class="btn btn-green">Update Campaign</button>
                                                <button type="button" class="btn btn-red" data-bs-dismiss="modal">Close</button>
                                             </div>
                                          </form>

                                       </div>
                                    </div>
                                 </div>
                                 <div class="modal fade" id="EDITDefault" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modalContent mx-700">
                                       <div class="modal-content">
                                          <div class="modal-body bg-white w-600px my-30px rounded-4px shadow p-30px text-center flex flex-col items-stretch">
                                             <h1 class="text-30px font-bold mb-15px">FieldOps App</h1>
                                             <p class="text-18px font-light mb-20px leading-tight">Enter the email or phone number of your technician. We will send them instructions on how to download the FieldOps App for their device!</p>
                                             <div class="mb-20px text-left">
                                                <input class="w-full mb-5px border border-gray-400 focus:border-black p-10px outline-none rounded-3px" type="email" name="email" id="email" placeholder="Email" />
                                                <!---->
                                             </div>
                                             <div class="mb-20px text-left">
                                                <input class="w-full mb-5px border border-gray-400 focus:border-black p-10px outline-none rounded-3px" type="number" name="phone" id="phone" placeholder="Phone Number" />
                                                <!---->
                                             </div>
                                             <div class="flex justify-center">
                                                <button id="ok-button" type="submit" class="btn btn-blue mr-10px">OK</button>
                                                <button id="cancel-button" class="btn bg-gray" type="button" data-bs-dismiss="modal">Cancel</button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="modal fade" id="EDITscampaignModal-<?= $campaign['employeeId'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modalContent mx-700">
                                       <div class="modal-content">
                                          <div class="modal-body bg-white relative  my-30px rounded-4px shadow p-30px text-center flex flex-col items-center">
                                             <div class="img mb-5 "><img class="rounded" src="<?= esc($campaign['image']) ?>" alt=""></div>
                                             <h1 class="text-30px font-bold mb-15px">What would you like to see?</h1>
                                             <button type="button" class="btn-close text-gray-400 hover:text-black absolute top-20px right-10px" data-bs-dismiss="modal" aria-label="Close">
                                                <svg class="svg-inline--fa fa-xmark text-30px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                   <path class="" fill="currentColor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"></path>
                                                </svg>
                                             </button>
                                             <div class="flex">
                                                <a href="<?= base_url('application/bio/' . $campaign['ID']) ?>" target="_blank" id="bio-button" class="btn btn-blue mr-10px">Bio</a>
                                                <a href="<?= base_url('application/pulsecheck/' . $campaign['employeeId']) ?>" target="_blank" id="pulse-check-button" class="btn btn-green">Pulse Check</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div data-v-24df4780="" class="list">
                     <table data-v-24df4780="" class="campaigns w-full" id="technician-list">

                        <tr class="flex odd:bg-sky-100 odd:bg-opacity-50 py-15px px-10px">
                           <td class="employee flex items-center px-10px py-20px flex-shrink-0 w-1/12">
                              <div class="profile-img w-full h-auto mr-10px flex justify-center items-center">
                                 <img w-full="" src="<?= base_url($campaign['image']) ?>" alt="">
                              </div>
                           </td>
                           <td class="employee flex items-center px-10px flex-shrink-0 w-1/6">
                              <div class="">
                                 <p class="name font-17px font-bold"><?= esc($campaign['name']) ?></p>
                                 <p class="department font-14px text-gray-500"><?= esc($campaign['department']) ?></p>
                              </div>
                           </td>
                           <td class="recipient-info col-span-6 flex flex-col w-1/2 justify-center items-start px-10px">
                              <p class="description"><?= esc($campaign['description']) ?></p>
                           </td>
                           <td class="flex flex-col justify-center items-end col-span-3 flex-shrink-0 px-10px w-1/4">
                              <div class="grid grid-rows-2 grid-flow-col gap-10px">
                                 <!-- <a href="<?= base_url('/settings/dispatch/campaigns/' . $campaign['ID']) ?>" class="btn btn-blue w-full rounded-2px"> -->
                                 <button data-bs-toggle="modal" data-bs-target="#EDITcampaignModal-<?= $campaign['ID'] ?>" class="btn btn-blue w-full rounded-2px" id="editCampaign-<?= esc($campaign['ID']) ?>">
                                    <svg class="svg-inline--fa fa-face-grin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                       <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z">
                                       </path>
                                    </svg>
                                    Edit Campaign
                                 </button>
                                 <!-- </a> -->
                                 <!-- <button data-bs-toggle="modal" data-bs-target="#EDITDefault" class="btn btn-blue w-full rounded-2px" id="showFieldOps-<?= esc($campaign['employeeId']) ?>">
                                       <svg class="svg-inline--fa fa-mobile-screen-button" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-screen-button" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                          <path class="" fill="currentColor" d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z">
                                          </path>
                                       </svg>
                                       FieldOps App 
                                    </button> -->
                                 <a href="<?= base_url('/settings/dispatch/campaigns/delete/' . $campaign['ID']) ?>" class="delete-campaign-btn btn btn-red w-full rounded-2px showFieldOps">
                                    <button class="btn btn-red rounded-2px" id="showFieldOps-<?= esc($campaign['ID']) ?>">
                                       <svg class="showFieldOps svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                          <path class="" fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                          </path>
                                       </svg>
                                    </button>
                                 </a>
                                 <button data-bs-toggle="modal" data-bs-target="#EDITscampaignModal-<?php echo $campaign['employeeId']; ?>" class="btn btn-blue rounded-2px" id="showSample-<?= esc($campaign['employeeId']) ?>">
                                    <svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                       <path class="" fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                       </path>
                                    </svg>
                                 </button>
                              </div>
                           </td>
                        </tr>
                        <!----><!----><!----><!---->
                     <?php endforeach; ?>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<style>
   img#preview {
      height: 300px;
      object-fit: cover;
      width: 250px;
      margin: auto;
   }
</style>
<script>
   function previewImage(event) {
      var reader = new FileReader();
      reader.onload = function() {
         var output = document.getElementById('preview');
         output.src = reader.result;
      }
      reader.readAsDataURL(event.target.files[0]);
   }
</script>
<script>
   $('#campaignForm').on('submit', function(e) {
      e.preventDefault();
      var formData = new FormData(this);

      $.ajax({
         url: "<?= base_url('/settings/dispatch/campaigns/create') ?>",
         type: "POST",
         data: formData,
         contentType: false,
         processData: false,
         success: function(response) {
            if (response.success) {
               // Close the modal
               $('#campaignModal').modal('hide');
               // Show success message or redirect
               alert('Campaign saved successfully!');
            } else {
               // Display validation errors
               $('#validation-errors').html('');
               $.each(response.validation, function(key, value) {
                  $('#validation-errors').append('<p style="color: red;">' + value + '</p>');
               });
            }
         },
         error: function(xhr, status, error) {
            console.log(xhr.responseText);
            alert('An error occurred. Please try again.');
         }
      });
   });

   $(document).ready(function() {
      // Bind the form submit event
      $(document).on('submit', 'form[data-ajax="true"]', function(event) {
         event.preventDefault(); // Prevent default form submission

         var form = $(this);
         var formData = new FormData(form[0]); // Get form data

         $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: formData,
            processData: false, // Important: prevent jQuery from automatically transforming the data into a query string
            contentType: false, // Important: prevent jQuery from setting the content-type header
            success: function(response) {
               // Handle success response here
               if (response.success) {
                  alert('Campaign updated successfully.');
                  // Optionally, refresh the page or update the UI
                  // location.reload(); // Reload page to see changes
               } else {
                  // Handle validation errors or other response data
                  alert('Failed to update campaign: ' + response.message);
               }
            },
            error: function(xhr, status, error) {
               // Handle AJAX errors here
               alert('An error occurred: ' + error);
            }
         });
      });
   });

   $(document).ready(function() {
      // Bind the click event for delete buttons
      $(document).on('click', '.delete-campaign-btn', function(event) {
         event.preventDefault(); // Prevent default link behavior

         if (confirm('Are you sure you want to delete this campaign?')) {
            var button = $(this);
            var url = button.attr('href'); // Get URL from the button's href attribute

            $.ajax({
               url: url,
               type: 'GET',
               success: function(response) {
                  // Handle success response here
                  if (response.success) {
                     alert('Campaign deleted successfully.');
                     location.reload();
                     // Optionally, remove the campaign from the UI
                     button.closest('.campaign-item').remove();
                  } else {
                     alert('Failed to delete campaign: ' + response.message);
                  }
               },
               error: function(xhr, status, error) {
                  // Handle AJAX errors here
                  alert('An error occurred: ' + error);
               }
            });
         }
      });
   });

   $(document).ready(function() {
      // Handle input changes in the search bar
      $('#search').on('input', function() {
         var query = $(this).val();
         if (query) {
            loadTechnicians(query);
         } else {
            loadTechnicians();
         }
      });

      function loadTechnicians(query = '') {
         var url = query ? '<?= base_url('/searchbar') ?>' : '<?= base_url('/getAllTechnicians') ?>';

         $.ajax({
            url: url,
            type: 'post',
            data: {
               query: query
            },
            success: function(data) {
               var resultsContainer = $('.list');
               resultsContainer.empty(); // Clear previous results

               if (data.length > 0) {
                  var table = $('<table class="w-full"></table>');
                  $.each(data, function(index, technician) {
                     var row =
                        `<tr class="flex odd:bg-sky-100 odd:bg-opacity-50 py-15px px-10px"><td class="employee flex items-center px-10px py-20px flex-shrink-0 w-1/12"><div class="profile-img w-full h-auto mr-10px flex justify-center items-center"> <img w-full="" src="http://localhost:8080${technician.image}" alt=""> </div> </td><td class="employee flex items-center px-10px flex-shrink-0 w-1/6"><div class=""><p class="name font-17px font-bold">${technician.name}</p> <p class="department font-14px text-gray-500">${technician.department}</p> </div></td><td class="recipient-info col-span-6 flex flex-col w-1/2 justify-center items-start px-10px"><p class="description">${technician.description}</p></td><td class="flex flex-col justify-center items-end col-span-3 flex-shrink-0 px-10px w-1/4"><div class="grid grid-rows-2 grid-flow-col gap-10px"><button data-bs-toggle="modal" data-bs-target="#EDITcampaignModal-${technician.ID}" class="btn btn-blue w-full rounded-2px" id="editCampaign-${technician.employeeId}" ><svg class="svg-inline--fa fa-face-grin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"> </path> </svg> Edit Campaign  </button><a href="http://localhost:8080/settings/dispatch/campaigns/delete/${technician.ID}" class="delete-campaign-btn btn btn-red w-full rounded-2px showFieldOps" > <button class="btn btn-red rounded-2px" id="showFieldOps-${technician.ID}"><svg class="showFieldOps svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> <path class="" fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path></svg> </button></a><button data-bs-toggle="modal" data-bs-target="#EDITscampaignModal-${technician.employeeId}" class="btn btn-blue rounded-2px" id="showSample-${technician.employeeId}"> <svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path class="" fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"></path></svg></button></div></td></tr>`;
                     table.append(row);

                     var modal = `
                  <div class="modal fade" id="EDITcampaignModal-${technician.ID}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog modalContent mx-700">
                        <div class="modal-content">
                           <form method="post" action="<?= base_url('/settings/dispatch/campaigns/update/') ?>${technician.ID}" enctype="multipart/form-data" data-ajax="true">
                              <input type="hidden" name="id" value="${technician.ID}">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Edit campaign</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                 <div class="grid grid-cols-2 gap-20px auto-rows-auto">
                                    <div class="flex w-full flex-col row-span-3 uploadImgBox">
                                       <img id="preview" class="preview-image w-200px h-auto" src="${technician.image}" alt="Image Preview">
                                       <p class="text-md">Upload your image</p>
                                       <p class="text-sm mb-3">The preferred size is 200x200</p>
                                          <button class="btn w-full mb-2 uploadBtnWrap" type="button">
                                             <label for="profile-image-upload-1" class="upload-label">Upload your file</label>
                                             <input type="file" id="profile-image-upload-1" name="campaignimg" accept="image/*" onchange="previewImage(event)" >
                                          </button>
                                    </div>
                                    <div class="input-group">
                                       <label class="font-bold text-sm" for="campaignName">Campaign Name</label>
                                       <input class="w-full p-5px outline-none border-b focus:border-blue-500" type="text" name="CampaignName" id="campaignName-${technician.ID}" value="${technician.name}">
                                    </div>
                                    <div class="input-group row-span-2">
                                       <label class="font-bold text-sm" for="description">Campaign Description</label>
                                       <textarea class="w-full p-5px outline-none border-b focus:border-blue-500 h-100" name="campaignDescription" id="description-${technician.ID}">${technician.description}</textarea>
                                    </div>
                                    <div class="input-group">
                                       <label class="font-bold text-sm" for="department">Department</label>
                                       <input class="w-full p-5px outline-none border-b focus:border-blue-500" type="text" name="campaignDepartment" id="department-${technician.ID}" value="${technician.department}">
                                    </div>
                                    <div class="input-group">
                                       <label class="font-bold text-sm" for="license">License</label>
                                       <input class="w-full p-5px outline-none border-b focus:border-blue-500" type="text" name="license" id="license-${technician.ID}" value="${technician.license}">
                                    </div>
                                    <div class="input-group">
                                       <label class="font-bold text-sm" for="employeeID">Employee ID <span class="text-xs">(Useful for API Integrations)</span></label>
                                       <input class="w-full p-5px outline-none border-b focus:border-blue-500" type="text" name="employeeId" id="employeeId-${technician.ID}" value="${technician.employeeId}">
                                    </div>
                                 </div>
                              </div>
                              <div class="modal-footer">
                                 <button type="submit" class="btn btn-green">Update Campaign</button>
                                 <button type="button" class="btn btn-red" data-bs-dismiss="modal">Close</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>`;

                     resultsContainer.append(modal);

                     var biomodal = `
                  <div class="modal fade" id="EDITscampaignModal-${technician.employeeId}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog modalContent mx-700">
                           <div class="modal-content">
                           <div class="modal-body bg-white relative  my-30px rounded-4px shadow p-30px text-center flex flex-col items-center">
                                    <div class="img"><img src="${technician.image}" alt=""></div>
                                    <h1 class="text-30px font-bold mb-15px">What would you like to see?</h1>
                                    <button type="button" class="btn-close text-gray-400 hover:text-black absolute top-10px right-10px" data-bs-dismiss="modal" aria-label="Close">  
                                       <svg class="svg-inline--fa fa-xmark text-30px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                          <path class="" fill="currentColor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"></path>
                                       </svg>
                                    </button>
                                    <div class="flex">
                                    <a href="<?= base_url('application/bio/') ?>${technician.ID}" target="_blank" id="bio-button" class="btn btn-blue mr-10px">Bio</a>
                                    <a href="<?= base_url('application/pulsecheck/') ?>${technician.employeeId}" target="_blank" id="pulse-check-button" class="btn btn-green">Pulse Check</a>
                                    </div>
                                 </div>
                           </div>
                     </div>
                  </div>`;

                     resultsContainer.append(biomodal);

                  });
                  resultsContainer.append(table);
               } else {
                  resultsContainer.append('<p>No results found.</p>');
               }
            },
            error: function(xhr, status, error) {
               console.error('Error fetching technicians:', status, error);
            }
         });
      }

      // Initial load of technicians
      loadTechnicians();
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
<?= $this->endsection('content') ?>