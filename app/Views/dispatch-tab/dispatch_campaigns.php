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
            <div class="sidebarRightContent">
                <div class="flex-grow flex flex-col items-stretch bg-gray-100 h-auto">
                    <div class="headline bg-white p-20px border-b border-gray-200">
                        <h1 class="text-2xl">Manage Your Account</h1>
                    </div>
                    <div class="flex flex-grow justify-start">
                        <div class="w-1/4 max-w-200px flex flex-shrink-0 justify-start items-start flex-col">
                            <h2 class="text-xl p-15px pt-30px">Company Settings</h2>
                            <div class="p-15px">
                                <div class="links flex flex-col border-l border-gray-400"><a href="/settings/general/connect-social-media" class="p-15px">
                                        <svg class="svg-inline--fa fa-chart-line mr-5px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chart-line" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path class="" fill="currentColor" d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z">
                                            </path>
                                        </svg> General </a><a href="/settings/dispatch" class="border-blue-500 text-blue-500 border-l-2 p-15px"><svg class="svg-inline--fa fa-arrow-right-arrow-left mr-5px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right-arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path class="" fill="currentColor" d="M438.6 150.6c12.5-12.5 12.5-32.8 0-45.3l-96-96c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.7 96 32 96C14.3 96 0 110.3 0 128s14.3 32 32 32l306.7 0-41.4 41.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l96-96zm-333.3 352c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 416 416 416c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0 41.4-41.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-96 96c-12.5 12.5-12.5 32.8 0 45.3l96 96z">
                                            </path>
                                        </svg> Dispatch </a><!----><a href="/settings/contact-card" class="p-15px"><svg class="svg-inline--fa fa-address-card mr-5px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="address-card" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 256h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zm256-32H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16z">
                                            </path>
                                        </svg> Contact Card </a><!----><a href="/settings/billing" class="p-15px"><svg class="svg-inline--fa fa-credit-card mr-5px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="credit-card" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96v32H576V96c0-35.3-28.7-64-64-64H64zM576 224H0V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V224zM112 352h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm112 16c0-8.8 7.2-16 16-16H368c8.8 0 16 7.2 16 16s-7.2 16-16 16H240c-8.8 0-16-7.2-16-16z">
                                            </path>
                                        </svg> Billing </a></div>
                            </div>
                        </div>
                        <div class="flex-grow pt-20px">
                            <div class="flex flex-col">
                                <div class="sub-menu-bar pl-25px">
                                    <div class="flex justify-start items-center border-b border-gray-300"><a href="/settings/dispatch/campaigns" class="border-b-2 border-blue-500 text-blue-500 router-link-exact-active p-15px" aria-current="page">Campaigns</a><a href="/settings/dispatch/notifications" class="p-15px">Notifications</a><a href="/settings/dispatch/web-widget" class="p-15px">Web
                                            Widget</a><a href="/settings/dispatch/review-widget" class="p-15px">Review Widget</a></div>
                                </div>
                                <div class="p-25px campaigns">
                                    <div data-v-24df4780="" class="flex flex-col items-stretch"><!---->
                                        <div data-v-24df4780="" class="main p-20px bg-white rounded"><!----><!---->
                                            <div data-v-24df4780="" class="search flex w-full mb-20px flex justify-between items-center">
                                                <div data-v-24df4780="" class="search-input border border-gray-400 rounded-4px p-10px flex items-center">
                                                    <svg data-v-24df4780="" class="svg-inline--fa fa-magnifying-glass" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path class="" fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                                                        </path>
                                                    </svg><input data-v-24df4780="" class="border-0 ml-10px w-300px outline-none" type="search" name="search" id="search" placeholder="Search by name or department">
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
                                                                        <li class="nav-item" role="presentation">
                                                                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">General</button>
                                                                        </li>
                                                                        <li class="nav-item" role="presentation">
                                                                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#youtube-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Youtube</button>
                                                                        </li>
                                                                        <li class="nav-item" role="presentation">
                                                                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Templates</button>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="tab-content" id="pills-tabContent">
                                                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                                            <form method="post" action="" enctype="multipart/form-data">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Create campaign</h5>
                                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <div class="grid grid-cols-2 gap-20px auto-rows-auto">
                                                                                        <div class="flex w-full flex-col row-span-3">
                                                                                            <img class="w-200px h-auto" src="https://kiliassets.speetra.com/prod/account_images/15407/campaign/1B85A09AA6CF1/1711571243_original.jpg" alt="Aaron Krasnow">
                                                                                            <p class="text-md">Upload your image</p>
                                                                                            <p class="text-sm mb-3">The preferred size is 200x200</p>
                                                                                            <input id="logo-upload" hidden="" type="file">
                                                                                            <button class="btn btn-blue w-full mb-2">
                                                                                                <input type="file" id="profile-image-upload-1" name="image" style="display: block;" accept="image/*">
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="input-group">
                                                                                            <label class="font-bold text-sm" for="campaignName">Campaign Name</label>
                                                                                            <input class="w-full p-5px outline-none border-b focus:border-blue-500" type="text" name="Campaign_name" id="campaignName">
                                                                                        </div>
                                                                                        <div class="input-group row-span-2">
                                                                                            <label class="font-bold text-sm" for="description">Campaign Description</label>
                                                                                            <textarea class="w-full p-5px outline-none border-b focus:border-blue-500" type="text" name="campaign_description" rows="5" id="description"></textarea>
                                                                                        </div>
                                                                                        <div class="input-group">
                                                                                            <label class="font-bold text-sm" for="department">Department</label>
                                                                                            <input class="w-full p-5px outline-none border-b focus:border-blue-500" type="text" name="campaign_department" id="department">
                                                                                        </div>
                                                                                        <div class="input-group">
                                                                                            <label class="font-bold text-sm" for="license">License</label>
                                                                                            <input class="w-full p-5px outline-none border-b focus:border-blue-500" type="text" name="license" id="license">
                                                                                        </div>
                                                                                        <div class="input-group">
                                                                                            <label class="font-bold text-sm" for="employeeID">Employee ID <span class="text-xs">(Useful for API Integrations)</span></label>
                                                                                            <input class="w-full p-5px outline-none border-b focus:border-blue-500" type="text" name="employee_id" id="employeeID">
                                                                                        </div>
                                                                                        <div class="input-group">
                                                                                            <label class="font-bold text-sm" for="email">Email <span class="text-xs">(descriptor)</span></label>
                                                                                            <input class="w-full p-5px outline-none border-b focus:border-blue-500" type="text" name="email" id="email">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-secondary btn-md" data-bs-dismiss="modal">Cancel</button>
                                                                                        <button type="submit" class="btn btn-primary btn-md">Submit changes</button>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
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
                                                        <button type="button" class="btn btn-secondary btn-md ml-2" data-bs-toggle="modal" data-bs-target="#editdefaultModal">
                                                            <i class="fa fa-plus mr-3" aria-hidden="true"></i> Edit Defaults
                                                        </button>
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
                                                    </div>    
                                                </div>
                                            </div>
                                            <div data-v-24df4780="" class="list">
                                                <table data-v-24df4780="" class="campaigns w-full">
                                                    <tr class="flex odd:bg-sky-100 odd:bg-opacity-50 py-15px px-10px">
                                                        <td class="employee flex items-center px-10px py-20px flex-shrink-0 w-1/12">
                                                            <div class="profile-img w-full h-auto mr-10px flex justify-center items-center">
                                                                <img w-full="" src="https://kiliassets.speetra.com/prod/account_images/15407/campaign/1B85A09AA6CF1/1711571243_original.jpg" alt="">
                                                            </div>
                                                        </td>
                                                        <td class="employee flex items-center px-10px flex-shrink-0 w-1/6">
                                                            <div class="">
                                                                <p class="name font-17px font-bold">Aaron Krasnow</p>
                                                                <p class="department font-14px text-gray-500">Service Technician</p>
                                                            </div>
                                                        </td>
                                                        <td class="recipient-info col-span-6 flex flex-col w-1/2 justify-center items-start px-10px">
                                                            <p class="description">With over 15 years of experience and a passion for
                                                                being a great dad and husband, Aaron is not just any technician; he is
                                                                an HVAC wizard, ready to tackle your home comfort challenges. Known for
                                                                his expert skills in indoor air quality improvements. Whether it’s
                                                                maintaining optimal temperature or ensuring your system’s efficiency,
                                                                Aaron is excited to bring his wealth of knowledge and friendly advice
                                                                right to your doorstep. Welcome him into your home for a service
                                                                experience that’s not only reliable but also genuinely cares about your
                                                                comfort and safety.</p>
                                                        </td>
                                                        <td class="flex flex-col justify-center items-end col-span-3 flex-shrink-0 px-10px w-1/4">
                                                            <div class="grid grid-rows-2 grid-flow-col gap-10px"><button class="btn btn-blue w-full rounded-2px" id="editCampaign-undefined"><svg class="svg-inline--fa fa-face-grin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                        <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z">
                                                                        </path>
                                                                    </svg> Edit Campaign </button><button class="btn btn-blue w-full rounded-2px" id="showFieldOps-AARON"><svg class="svg-inline--fa fa-mobile-screen-button" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-screen-button" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                        <path class="" fill="currentColor" d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z">
                                                                        </path>
                                                                    </svg> FieldOps App </button><button class="btn btn-red rounded-2px" id="showFieldOps-AARON"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                                        </path>
                                                                    </svg></button><button class="btn btn-blue rounded-2px" id="showSample-AARON"><svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                                                        </path>
                                                                    </svg></button></div>
                                                        </td>
                                                    </tr><!----><!----><!----><!---->
                                                    <tr class="flex odd:bg-sky-100 odd:bg-opacity-50 py-15px px-10px">
                                                        <td class="employee flex items-center px-10px py-20px flex-shrink-0 w-1/12">
                                                            <div class="profile-img w-full h-auto mr-10px flex justify-center items-center">
                                                                <img w-full="" src="https://kiliassets.speetra.com/prod/account_images/15407/campaign/1D24325B63641/1715613782_original.png" alt="">
                                                            </div>
                                                        </td>
                                                        <td class="employee flex items-center px-10px flex-shrink-0 w-1/6">
                                                            <div class="">
                                                                <p class="name font-17px font-bold">Angelo Vazquez</p>
                                                                <p class="department font-14px text-gray-500">Service Technician</p>
                                                            </div>
                                                        </td>
                                                        <td class="recipient-info col-span-6 flex flex-col w-1/2 justify-center items-start px-10px">
                                                            <p class="description">Meet Angelo, your go-to service technician at Hales
                                                                AC! With a toolbox in one hand and a fishing rod in the other, Angelo
                                                                has been keeping homes cozy and cool for over six years. A proud father
                                                                of two energetic boys, he’s mastered the art of turning up the fun
                                                                whether he’s striking out at the bowling alley or reeling in a big
                                                                catch. Angelo's passion for making families comfortable shines through
                                                                in every service call. He’s not just about fixing problems—Angelo is
                                                                dedicated to bringing smiles and ensuring every family feels like
                                                                they're in good hands. When Angelo knocks on your door, rest assured,
                                                                comfort is on the way!</p>
                                                        </td>
                                                        <td class="flex flex-col justify-center items-end col-span-3 flex-shrink-0 px-10px w-1/4">
                                                            <div class="grid grid-rows-2 grid-flow-col gap-10px"><button class="btn btn-blue w-full rounded-2px" id="editCampaign-undefined"><svg class="svg-inline--fa fa-face-grin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                        <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z">
                                                                        </path>
                                                                    </svg> Edit Campaign </button><button class="btn btn-blue w-full rounded-2px" id="showFieldOps-AARON"><svg class="svg-inline--fa fa-mobile-screen-button" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-screen-button" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                        <path class="" fill="currentColor" d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z">
                                                                        </path>
                                                                    </svg> FieldOps App </button><button class="btn btn-red rounded-2px" id="showFieldOps-AARON"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                                        </path>
                                                                    </svg></button><button class="btn btn-blue rounded-2px" id="showSample-AARON"><svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                                                        </path>
                                                                    </svg></button></div>
                                                        </td>
                                                    </tr><!----><!----><!----><!---->
                                                    <tr class="flex odd:bg-sky-100 odd:bg-opacity-50 py-15px px-10px">
                                                        <td class="employee flex items-center px-10px py-20px flex-shrink-0 w-1/12">
                                                            <div class="profile-img w-full h-auto mr-10px flex justify-center items-center">
                                                                <img w-full="" src="https://kiliassets.speetra.com/prod/account_images/15407/campaign/1C14AED7C0389/1711655622_original.jpg" alt="">
                                                            </div>
                                                        </td>
                                                        <td class="employee flex items-center px-10px flex-shrink-0 w-1/6">
                                                            <div class="">
                                                                <p class="name font-17px font-bold">Austin Harper</p>
                                                                <p class="department font-14px text-gray-500">Install Team</p>
                                                            </div>
                                                        </td>
                                                        <td class="recipient-info col-span-6 flex flex-col w-1/2 justify-center items-start px-10px">
                                                            <p class="description">With over 6 years of experience and a passion for
                                                                cars, Austin is not just any technician; he is an HVAC wizard, ready to
                                                                tackle your home comfort challenges. Known for his expert skills in
                                                                energy-efficient installations. Whether it’s maintaining optimal
                                                                temperature or ensuring your system’s efficiency, Austin is excited to
                                                                bring his wealth of knowledge and friendly advice right to your
                                                                doorstep. Welcome him into your home for a service experience that’s not
                                                                only reliable but also genuinely cares about your comfort and safety.
                                                            </p>
                                                        </td>
                                                        <td class="flex flex-col justify-center items-end col-span-3 flex-shrink-0 px-10px w-1/4">
                                                            <div class="grid grid-rows-2 grid-flow-col gap-10px"><button class="btn btn-blue w-full rounded-2px" id="editCampaign-undefined"><svg class="svg-inline--fa fa-face-grin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                        <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z">
                                                                        </path>
                                                                    </svg> Edit Campaign </button><button class="btn btn-blue w-full rounded-2px" id="showFieldOps-Austin"><svg class="svg-inline--fa fa-mobile-screen-button" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-screen-button" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                        <path class="" fill="currentColor" d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z">
                                                                        </path>
                                                                    </svg> FieldOps App </button><button class="btn btn-red rounded-2px" id="showFieldOps-Austin"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                                        </path>
                                                                    </svg></button><button class="btn btn-blue rounded-2px" id="showSample-Austin"><svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                                                        </path>
                                                                    </svg></button></div>
                                                        </td>
                                                    </tr><!----><!----><!----><!---->
                                                    <tr class="flex odd:bg-sky-100 odd:bg-opacity-50 py-15px px-10px">
                                                        <td class="employee flex items-center px-10px py-20px flex-shrink-0 w-1/12">
                                                            <div class="profile-img w-full h-auto mr-10px flex justify-center items-center">
                                                                <img w-full="" src="https://kiliassets.speetra.com/prod/account_images/15407/campaign/1D42E41457559/1716232132_original.png" alt="">
                                                            </div>
                                                        </td>
                                                        <td class="employee flex items-center px-10px flex-shrink-0 w-1/6">
                                                            <div class="">
                                                                <p class="name font-17px font-bold">Casey Evett</p>
                                                                <p class="department font-14px text-gray-500">Install Team</p>
                                                            </div>
                                                        </td>
                                                        <td class="recipient-info col-span-6 flex flex-col w-1/2 justify-center items-start px-10px">
                                                            <p class="description">New to the HVAC world, Casey came from working in
                                                                Solar. </p>
                                                        </td>
                                                        <td class="flex flex-col justify-center items-end col-span-3 flex-shrink-0 px-10px w-1/4">
                                                            <div class="grid grid-rows-2 grid-flow-col gap-10px"><button class="btn btn-blue w-full rounded-2px" id="editCampaign-undefined"><svg class="svg-inline--fa fa-face-grin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                        <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z">
                                                                        </path>
                                                                    </svg> Edit Campaign </button><button class="btn btn-blue w-full rounded-2px" id="showFieldOps-CASEVE"><svg class="svg-inline--fa fa-mobile-screen-button" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-screen-button" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                        <path class="" fill="currentColor" d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z">
                                                                        </path>
                                                                    </svg> FieldOps App </button><button class="btn btn-red rounded-2px" id="showFieldOps-CASEVE"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                                        </path>
                                                                    </svg></button><button class="btn btn-blue rounded-2px" id="showSample-CASEVE"><svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                                                        </path>
                                                                    </svg></button></div>
                                                        </td>
                                                    </tr><!----><!----><!----><!---->
                                                    <tr class="flex odd:bg-sky-100 odd:bg-opacity-50 py-15px px-10px">
                                                        <td class="employee flex items-center px-10px py-20px flex-shrink-0 w-1/12">
                                                            <div class="profile-img w-full h-auto mr-10px flex justify-center items-center">
                                                                <img w-full="" src="https://kiliassets.speetra.com/prod/account_images/15407/campaign/1C12F272792B9/1711655796_original.jpg" alt="">
                                                            </div>
                                                        </td>
                                                        <td class="employee flex items-center px-10px flex-shrink-0 w-1/6">
                                                            <div class="">
                                                                <p class="name font-17px font-bold">Chad Carncross</p>
                                                                <p class="department font-14px text-gray-500">Install Team</p>
                                                            </div>
                                                        </td>
                                                        <td class="recipient-info col-span-6 flex flex-col w-1/2 justify-center items-start px-10px">
                                                            <p class="description">With 10+ years of experience and a passion for the
                                                                outdoors, Chad is not just any technician; he is an HVAC wizard, ready
                                                                to tackle your home comfort challenges. Known for his expert skills in
                                                                energy-efficient installations. Whether it’s maintaining optimal
                                                                temperature or ensuring your system’s efficiency, Chad is excited to
                                                                bring his wealth of knowledge and friendly advice right to your
                                                                doorstep. Welcome him into your home for a service experience that’s not
                                                                only reliable but also genuinely cares about your comfort and safety.
                                                            </p>
                                                        </td>
                                                        <td class="flex flex-col justify-center items-end col-span-3 flex-shrink-0 px-10px w-1/4">
                                                            <div class="grid grid-rows-2 grid-flow-col gap-10px"><button class="btn btn-blue w-full rounded-2px" id="editCampaign-undefined"><svg class="svg-inline--fa fa-face-grin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                        <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z">
                                                                        </path>
                                                                    </svg> Edit Campaign </button><button class="btn btn-blue w-full rounded-2px" id="showFieldOps-CHACAR"><svg class="svg-inline--fa fa-mobile-screen-button" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-screen-button" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                        <path class="" fill="currentColor" d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z">
                                                                        </path>
                                                                    </svg> FieldOps App </button><button class="btn btn-red rounded-2px" id="showFieldOps-CHACAR"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                                        </path>
                                                                    </svg></button><button class="btn btn-blue rounded-2px" id="showSample-CHACAR"><svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                                                        </path>
                                                                    </svg></button></div>
                                                        </td>
                                                    </tr><!----><!----><!----><!---->
                                                    <tr class="flex odd:bg-sky-100 odd:bg-opacity-50 py-15px px-10px">
                                                        <td class="employee flex items-center px-10px py-20px flex-shrink-0 w-1/12">
                                                            <div class="profile-img w-full h-auto mr-10px flex justify-center items-center">
                                                                <img w-full="" src="https://kiliassets.speetra.com/prod/account_images/15407/campaign/1DE1BA473C7B1/1718740314_original.png" alt="">
                                                            </div>
                                                        </td>
                                                        <td class="employee flex items-center px-10px flex-shrink-0 w-1/6">
                                                            <div class="">
                                                                <p class="name font-17px font-bold">Dave Smith</p>
                                                                <p class="department font-14px text-gray-500">Service Technician</p>
                                                            </div>
                                                        </td>
                                                        <td class="recipient-info col-span-6 flex flex-col w-1/2 justify-center items-start px-10px">
                                                            <p class="description">With almost 30 years of experience in the HVAC
                                                                industry, Dave is a dedicated Service Technician at Hales AC. With a
                                                                passion for Indoor Air Quality (IAQ) and a genuine love for helping
                                                                customers, Dave brings a wealth of experience and enthusiasm to every
                                                                service call. His commitment to ensuring customer satisfaction and
                                                                improving air quality in homes makes him a valued member of the Hales AC
                                                                team. Dave is always ready to assist and provide top-notch service with
                                                                a smile.</p>
                                                        </td>
                                                        <td class="flex flex-col justify-center items-end col-span-3 flex-shrink-0 px-10px w-1/4">
                                                            <div class="grid grid-rows-2 grid-flow-col gap-10px"><button class="btn btn-blue w-full rounded-2px" id="editCampaign-undefined"><svg class="svg-inline--fa fa-face-grin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                        <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z">
                                                                        </path>
                                                                    </svg> Edit Campaign </button><button class="btn btn-blue w-full rounded-2px" id="showFieldOps-DAVSMI"><svg class="svg-inline--fa fa-mobile-screen-button" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-screen-button" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                        <path class="" fill="currentColor" d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z">
                                                                        </path>
                                                                    </svg> FieldOps App </button><button class="btn btn-red rounded-2px" id="showFieldOps-DAVSMI"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                                        </path>
                                                                    </svg></button><button class="btn btn-blue rounded-2px" id="showSample-DAVSMI"><svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                                                        </path>
                                                                    </svg></button></div>
                                                        </td>
                                                    </tr><!----><!----><!----><!---->
                                                    <tr class="flex odd:bg-sky-100 odd:bg-opacity-50 py-15px px-10px">
                                                        <td class="employee flex items-center px-10px py-20px flex-shrink-0 w-1/12">
                                                            <div class="profile-img w-full h-auto mr-10px flex justify-center items-center">
                                                                <img w-full="" src="https://kiliassets.speetra.com/prod/account_images/15407/campaign/1D5FD968043A1/1717791207_original.jpg" alt="">
                                                            </div>
                                                        </td>
                                                        <td class="employee flex items-center px-10px flex-shrink-0 w-1/6">
                                                            <div class="">
                                                                <p class="name font-17px font-bold">Derek Kijowski</p>
                                                                <p class="department font-14px text-gray-500">Service Technician</p>
                                                            </div>
                                                        </td>
                                                        <td class="recipient-info col-span-6 flex flex-col w-1/2 justify-center items-start px-10px">
                                                            <p class="description">With over 4 years of experience and a passion for
                                                                being a great dad, Derek is not just any technician; he is an HVAC
                                                                wizard, ready to tackle your home comfort challenges. Known for his
                                                                expert skills in indoor air quality improvements. Whether it’s
                                                                maintaining optimal temperature or ensuring your system’s efficiency,
                                                                Derek is excited to bring his wealth of knowledge and friendly advice
                                                                right to your doorstep. Welcome him into your home for a service
                                                                experience that’s not only reliable but also genuinely cares about your
                                                                comfort and safety.</p>
                                                        </td>
                                                        <td class="flex flex-col justify-center items-end col-span-3 flex-shrink-0 px-10px w-1/4">
                                                            <div class="grid grid-rows-2 grid-flow-col gap-10px"><button class="btn btn-blue w-full rounded-2px" id="editCampaign-undefined"><svg class="svg-inline--fa fa-face-grin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                        <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z">
                                                                        </path>
                                                                    </svg> Edit Campaign </button><button class="btn btn-blue w-full rounded-2px" id="showFieldOps-DERKIJ"><svg class="svg-inline--fa fa-mobile-screen-button" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-screen-button" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                        <path class="" fill="currentColor" d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z">
                                                                        </path>
                                                                    </svg> FieldOps App </button><button class="btn btn-red rounded-2px" id="showFieldOps-DERKIJ"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                                        </path>
                                                                    </svg></button><button class="btn btn-blue rounded-2px" id="showSample-DERKIJ"><svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                                                        </path>
                                                                    </svg></button></div>
                                                        </td>
                                                    </tr><!----><!----><!----><!---->
                                                    <tr class="flex odd:bg-sky-100 odd:bg-opacity-50 py-15px px-10px">
                                                        <td class="employee flex items-center px-10px py-20px flex-shrink-0 w-1/12">
                                                            <div class="profile-img w-full h-auto mr-10px flex justify-center items-center">
                                                                <img w-full="" src="https://kiliassets.speetra.com/prod/account_images/15407/campaign/1B8877CC03CD1/1713973037_original.jpg" alt="">
                                                            </div>
                                                        </td>
                                                        <td class="employee flex items-center px-10px flex-shrink-0 w-1/6">
                                                            <div class="">
                                                                <p class="name font-17px font-bold">George McPherson</p>
                                                                <p class="department font-14px text-gray-500">Management</p>
                                                            </div>
                                                        </td>
                                                        <td class="recipient-info col-span-6 flex flex-col w-1/2 justify-center items-start px-10px">
                                                            <p class="description">George is a dedicated and skilled Florida Licensed
                                                                Refrigeration Contractor with over a decade of experience in the field.
                                                                At Hales AC, he brings a wealth of knowledge and expertise in cooling
                                                                systems, ensuring optimal performance and reliability for every project.
                                                                Outside of work, George is a proud father of two boys, an enthusiastic
                                                                amateur chef, an avid hockey player, and a passionate lover of all
                                                                water-related activities. His diverse interests and commitment to
                                                                excellence make him a valuable member of the Hales AC team.</p>
                                                        </td>
                                                        <td class="flex flex-col justify-center items-end col-span-3 flex-shrink-0 px-10px w-1/4">
                                                            <div class="grid grid-rows-2 grid-flow-col gap-10px"><button class="btn btn-blue w-full rounded-2px" id="editCampaign-undefined"><svg class="svg-inline--fa fa-face-grin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                        <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z">
                                                                        </path>
                                                                    </svg> Edit Campaign </button><button class="btn btn-blue w-full rounded-2px" id="showFieldOps-GEOMCP"><svg class="svg-inline--fa fa-mobile-screen-button" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-screen-button" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                        <path class="" fill="currentColor" d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z">
                                                                        </path>
                                                                    </svg> FieldOps App </button><button class="btn btn-red rounded-2px" id="showFieldOps-GEOMCP"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                                        </path>
                                                                    </svg></button><button class="btn btn-blue rounded-2px" id="showSample-GEOMCP"><svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                                                        </path>
                                                                    </svg></button></div>
                                                        </td>
                                                    </tr><!----><!----><!----><!---->
                                                    <tr class="flex odd:bg-sky-100 odd:bg-opacity-50 py-15px px-10px">
                                                        <td class="employee flex items-center px-10px py-20px flex-shrink-0 w-1/12">
                                                            <div class="profile-img w-full h-auto mr-10px flex justify-center items-center">
                                                                <img w-full="" src="https://kiliassets.speetra.com/prod/account_images/15407/campaign/1DAE0B68A7A69/1718124834_original.png" alt="">
                                                            </div>
                                                        </td>
                                                        <td class="employee flex items-center px-10px flex-shrink-0 w-1/6">
                                                            <div class="">
                                                                <p class="name font-17px font-bold">Greg Bark </p>
                                                                <p class="department font-14px text-gray-500">Management</p>
                                                            </div>
                                                        </td>
                                                        <td class="recipient-info col-span-6 flex flex-col w-1/2 justify-center items-start px-10px">
                                                            <p class="description">Greg has been in the HVAC business for over 18 years!
                                                                On his downtime, he likes to ride his mountain bike, go to the beach,
                                                                and anything sports!</p>
                                                        </td>
                                                        <td class="flex flex-col justify-center items-end col-span-3 flex-shrink-0 px-10px w-1/4">
                                                            <div class="grid grid-rows-2 grid-flow-col gap-10px"><button class="btn btn-blue w-full rounded-2px" id="editCampaign-undefined"><svg class="svg-inline--fa fa-face-grin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                        <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z">
                                                                        </path>
                                                                    </svg> Edit Campaign </button><button class="btn btn-blue w-full rounded-2px" id="showFieldOps-GREBAR"><svg class="svg-inline--fa fa-mobile-screen-button" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-screen-button" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                        <path class="" fill="currentColor" d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z">
                                                                        </path>
                                                                    </svg> FieldOps App </button><button class="btn btn-red rounded-2px" id="showFieldOps-GREBAR"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                                        </path>
                                                                    </svg></button><button class="btn btn-blue rounded-2px" id="showSample-GREBAR"><svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                                                        </path>
                                                                    </svg></button></div>
                                                        </td>
                                                    </tr><!----><!----><!----><!---->
                                                    <tr class="flex odd:bg-sky-100 odd:bg-opacity-50 py-15px px-10px !bg-gray-300">
                                                        <td class="employee flex items-center px-10px py-20px flex-shrink-0 w-1/12">
                                                            <div class="profile-img w-full h-auto mr-10px flex justify-center items-center">
                                                                <img w-full="" src="https://kiliassets.speetra.com/prod/account_images/15407/logo/1709862934_original.png" alt="">
                                                            </div>
                                                        </td>
                                                        <td class="employee flex items-center px-10px flex-shrink-0 w-1/6">
                                                            <div class="">
                                                                <p class="name font-17px font-bold">Hales AC Service</p>
                                                                <p class="department font-14px text-gray-500">General</p>
                                                            </div>
                                                        </td>
                                                        <td class="recipient-info col-span-6 flex flex-col w-1/2 justify-center items-start px-10px">
                                                            <p class="description">We are looking forward to serving you.</p>
                                                        </td>
                                                        <td class="flex flex-col justify-center items-end col-span-3 flex-shrink-0 px-10px w-1/4">
                                                            <div class="grid grid-rows-2 grid-flow-col gap-10px"><button class="btn btn-blue w-full rounded-2px" id="editCampaign-undefined"><svg class="svg-inline--fa fa-face-grin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                        <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z">
                                                                        </path>
                                                                    </svg> Edit Campaign </button><button class="btn btn-blue w-full rounded-2px" id="showFieldOps-null"><svg class="svg-inline--fa fa-mobile-screen-button" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-screen-button" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                        <path class="" fill="currentColor" d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z">
                                                                        </path>
                                                                    </svg> FieldOps App </button><!----><button class="btn btn-blue rounded-2px" id="showSample-null"><svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                                                        </path>
                                                                    </svg></button></div>
                                                        </td>
                                                    </tr><!----><!----><!----><!---->
                                                    <tr class="flex odd:bg-sky-100 odd:bg-opacity-50 py-15px px-10px">
                                                        <td class="employee flex items-center px-10px py-20px flex-shrink-0 w-1/12">
                                                            <div class="profile-img w-full h-auto mr-10px flex justify-center items-center">
                                                                <img w-full="" src="https://kiliassets.speetra.com/prod/account_images/15407/campaign/1E3CDD0C4EA59/1720630025_original.png" alt="">
                                                            </div>
                                                        </td>
                                                        <td class="employee flex items-center px-10px flex-shrink-0 w-1/6">
                                                            <div class="">
                                                                <p class="name font-17px font-bold">Jesse Smith</p>
                                                                <p class="department font-14px text-gray-500">Service Technician </p>
                                                            </div>
                                                        </td>
                                                        <td class="recipient-info col-span-6 flex flex-col w-1/2 justify-center items-start px-10px">
                                                            <p class="description">Jesse is not just any technician; he is an HVAC
                                                                wizard, ready to tackle your home comfort challenges. Known for his
                                                                expert skills in indoor air quality improvements. Whether it’s
                                                                maintaining optimal temperature or ensuring your system’s efficiency,
                                                                Jesse is excited to bring his wealth of knowledge and friendly advice
                                                                right to your doorstep. Welcome him into your home for a service
                                                                experience that’s not only reliable but also genuinely cares about your
                                                                comfort and safety.
                                                            </p>
                                                        </td>
                                                        <td class="flex flex-col justify-center items-end col-span-3 flex-shrink-0 px-10px w-1/4">
                                                            <div class="grid grid-rows-2 grid-flow-col gap-10px"><button class="btn btn-blue w-full rounded-2px" id="editCampaign-undefined"><svg class="svg-inline--fa fa-face-grin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                        <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z">
                                                                        </path>
                                                                    </svg> Edit Campaign </button><button class="btn btn-blue w-full rounded-2px" id="showFieldOps-JESSMI"><svg class="svg-inline--fa fa-mobile-screen-button" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-screen-button" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                        <path class="" fill="currentColor" d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z">
                                                                        </path>
                                                                    </svg> FieldOps App </button><button class="btn btn-red rounded-2px" id="showFieldOps-JESSMI"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                                        </path>
                                                                    </svg></button><button class="btn btn-blue rounded-2px" id="showSample-JESSMI"><svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                                                        </path>
                                                                    </svg></button></div>
                                                        </td>
                                                    </tr><!----><!----><!----><!---->
                                                    <tr class="flex odd:bg-sky-100 odd:bg-opacity-50 py-15px px-10px">
                                                        <td class="employee flex items-center px-10px py-20px flex-shrink-0 w-1/12">
                                                            <div class="profile-img w-full h-auto mr-10px flex justify-center items-center">
                                                                <img w-full="" src="https://kiliassets.speetra.com/prod/account_images/15407/campaign/1DD593824B201/1718547772_original.png" alt="">
                                                            </div>
                                                        </td>
                                                        <td class="employee flex items-center px-10px flex-shrink-0 w-1/6">
                                                            <div class="">
                                                                <p class="name font-17px font-bold">Johnathan Jordan</p>
                                                                <p class="department font-14px text-gray-500">Service Technician</p>
                                                            </div>
                                                        </td>
                                                        <td class="recipient-info col-span-6 flex flex-col w-1/2 justify-center items-start px-10px">
                                                            <p class="description">Johnathan (JJ) is a dedicated Service Technician at
                                                                Hales AC. With a passion for Indoor Air Quality (IAQ) and a genuine love
                                                                for helping customers, JJ brings a wealth of experience and enthusiasm
                                                                to every service call. His commitment to ensuring customer satisfaction
                                                                and improving air quality in homes makes him a valued member of the
                                                                Hales AC team. JJ is always ready to assist and provide top-notch
                                                                service with a smile.</p>
                                                        </td>
                                                        <td class="flex flex-col justify-center items-end col-span-3 flex-shrink-0 px-10px w-1/4">
                                                            <div class="grid grid-rows-2 grid-flow-col gap-10px"><button class="btn btn-blue w-full rounded-2px" id="editCampaign-undefined"><svg class="svg-inline--fa fa-face-grin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                        <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z">
                                                                        </path>
                                                                    </svg> Edit Campaign </button><button class="btn btn-blue w-full rounded-2px" id="showFieldOps-JOHJOR"><svg class="svg-inline--fa fa-mobile-screen-button" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-screen-button" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                        <path class="" fill="currentColor" d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z">
                                                                        </path>
                                                                    </svg> FieldOps App </button><button class="btn btn-red rounded-2px" id="showFieldOps-JOHJOR"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                                        </path>
                                                                    </svg></button><button class="btn btn-blue rounded-2px" id="showSample-JOHJOR"><svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                                                        </path>
                                                                    </svg></button></div>
                                                        </td>
                                                    </tr><!----><!----><!----><!---->
                                                    <tr class="flex odd:bg-sky-100 odd:bg-opacity-50 py-15px px-10px">
                                                        <td class="employee flex items-center px-10px py-20px flex-shrink-0 w-1/12">
                                                            <div class="profile-img w-full h-auto mr-10px flex justify-center items-center">
                                                                <img w-full="" src="https://kiliassets.speetra.com/prod/account_images/15407/campaign/1D430C7AA39C9/1716232747_original.png" alt="">
                                                            </div>
                                                        </td>
                                                        <td class="employee flex items-center px-10px flex-shrink-0 w-1/6">
                                                            <div class="">
                                                                <p class="name font-17px font-bold">Kiefer Hutcheson</p>
                                                                <p class="department font-14px text-gray-500">Duct Cleaning </p>
                                                            </div>
                                                        </td>
                                                        <td class="recipient-info col-span-6 flex flex-col w-1/2 justify-center items-start px-10px">
                                                            <p class="description">Kiefer has been doing duct cleanings for over a year,
                                                                previously working in the carpet cleaning industry. he has an eye for
                                                                cleanliness.</p>
                                                        </td>
                                                        <td class="flex flex-col justify-center items-end col-span-3 flex-shrink-0 px-10px w-1/4">
                                                            <div class="grid grid-rows-2 grid-flow-col gap-10px"><button class="btn btn-blue w-full rounded-2px" id="editCampaign-undefined"><svg class="svg-inline--fa fa-face-grin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                        <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z">
                                                                        </path>
                                                                    </svg> Edit Campaign </button><button class="btn btn-blue w-full rounded-2px" id="showFieldOps-KIEHUT"><svg class="svg-inline--fa fa-mobile-screen-button" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-screen-button" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                        <path class="" fill="currentColor" d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z">
                                                                        </path>
                                                                    </svg> FieldOps App </button><button class="btn btn-red rounded-2px" id="showFieldOps-KIEHUT"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                                        </path>
                                                                    </svg></button><button class="btn btn-blue rounded-2px" id="showSample-KIEHUT"><svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                                                        </path>
                                                                    </svg></button></div>
                                                        </td>
                                                    </tr><!----><!----><!----><!---->
                                                    <tr class="flex odd:bg-sky-100 odd:bg-opacity-50 py-15px px-10px">
                                                        <td class="employee flex items-center px-10px py-20px flex-shrink-0 w-1/12">
                                                            <div class="profile-img w-full h-auto mr-10px flex justify-center items-center">
                                                                <img w-full="" src="https://kiliassets.speetra.com/prod/account_images/15407/campaign/1C13D0A51CB21/1711652566_original.jpg" alt="">
                                                            </div>
                                                        </td>
                                                        <td class="employee flex items-center px-10px flex-shrink-0 w-1/6">
                                                            <div class="">
                                                                <p class="name font-17px font-bold">Paul Hoang</p>
                                                                <p class="department font-14px text-gray-500">Service Technician</p>
                                                            </div>
                                                        </td>
                                                        <td class="recipient-info col-span-6 flex flex-col w-1/2 justify-center items-start px-10px">
                                                            <p class="description">Paul is not just any technician; he is an HVAC
                                                                wizard, ready to tackle your home comfort challenges. Known for his
                                                                expert skills in .indoor air quality. Whether it’s maintaining optimal
                                                                temperature or ensuring your system’s efficiency, Paul is excited to
                                                                bring his wealth of knowledge and friendly advice right to your
                                                                doorstep. Welcome him into your home for a service experience that’s not
                                                                only reliable but also genuinely cares about your comfort and safety.
                                                            </p>
                                                        </td>
                                                        <td class="flex flex-col justify-center items-end col-span-3 flex-shrink-0 px-10px w-1/4">
                                                            <div class="grid grid-rows-2 grid-flow-col gap-10px"><button class="btn btn-blue w-full rounded-2px" id="editCampaign-undefined"><svg class="svg-inline--fa fa-face-grin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                        <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z">
                                                                        </path>
                                                                    </svg> Edit Campaign </button><button class="btn btn-blue w-full rounded-2px" id="showFieldOps-PAUHOA"><svg class="svg-inline--fa fa-mobile-screen-button" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-screen-button" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                        <path class="" fill="currentColor" d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z">
                                                                        </path>
                                                                    </svg> FieldOps App </button><button class="btn btn-red rounded-2px" id="showFieldOps-PAUHOA"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                                        </path>
                                                                    </svg></button><button class="btn btn-blue rounded-2px" id="showSample-PAUHOA"><svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                                                        </path>
                                                                    </svg></button></div>
                                                        </td>
                                                    </tr><!----><!----><!----><!---->
                                                    <tr class="flex odd:bg-sky-100 odd:bg-opacity-50 py-15px px-10px">
                                                        <td class="employee flex items-center px-10px py-20px flex-shrink-0 w-1/12">
                                                            <div class="profile-img w-full h-auto mr-10px flex justify-center items-center">
                                                                <img w-full="" src="https://kiliassets.speetra.com/prod/account_images/15407/campaign/1D8A897F9D3F9/1717590783_original.jpg" alt="">
                                                            </div>
                                                        </td>
                                                        <td class="employee flex items-center px-10px flex-shrink-0 w-1/6">
                                                            <div class="">
                                                                <p class="name font-17px font-bold">Scott Neubert</p>
                                                                <p class="department font-14px text-gray-500">Service Technician</p>
                                                            </div>
                                                        </td>
                                                        <td class="recipient-info col-span-6 flex flex-col w-1/2 justify-center items-start px-10px">
                                                            <p class="description">Scott Neubert is a dedicated Service Technician at
                                                                Hales AC. With a passion for Indoor Air Quality (IAQ) and a genuine love
                                                                for helping customers, Scott brings a wealth of experience and
                                                                enthusiasm to every service call. His commitment to ensuring customer
                                                                satisfaction and improving air quality in homes makes him a valued
                                                                member of the Hales AC team. Scott is always ready to assist and provide
                                                                top-notch service with a smile.</p>
                                                        </td>
                                                        <td class="flex flex-col justify-center items-end col-span-3 flex-shrink-0 px-10px w-1/4">
                                                            <div class="grid grid-rows-2 grid-flow-col gap-10px"><button class="btn btn-blue w-full rounded-2px" id="editCampaign-undefined"><svg class="svg-inline--fa fa-face-grin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                        <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z">
                                                                        </path>
                                                                    </svg> Edit Campaign </button><button class="btn btn-blue w-full rounded-2px" id="showFieldOps-SCONEU"><svg class="svg-inline--fa fa-mobile-screen-button" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-screen-button" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                        <path class="" fill="currentColor" d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z">
                                                                        </path>
                                                                    </svg> FieldOps App </button><button class="btn btn-red rounded-2px" id="showFieldOps-SCONEU"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                                        </path>
                                                                    </svg></button><button class="btn btn-blue rounded-2px" id="showSample-SCONEU"><svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                                                        </path>
                                                                    </svg></button></div>
                                                        </td>
                                                    </tr><!----><!----><!----><!---->
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
    </div>
    </div>
    <?= $this->endsection('content') ?>