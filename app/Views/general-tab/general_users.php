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
</div>
<!-- <div class="container-fluid"> -->
<div class="flex-grow flex flex-col items-stretch bg-gray-100 h-auto">
<div class="headline bg-white p-20px border-b border-gray-200">
   <h1 class="text-2xl">Manage Your Account</h1>
</div>
<div class="flex flex-grow justify-start">
<div class="w-1/4 max-w-200px flex flex-shrink-0 justify-start items-start flex-col">
   <h2 class="text-xl p-15px pt-30px">Company Settings</h2>
   <div class="p-15px">
      <div class="links flex flex-col border-l border-gray-400">
         <a href="/settings/general/connect-social-media" class="border-blue-500 text-blue-500 border-l-2 p-15px">
            <svg class="svg-inline--fa fa-chart-line mr-5px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chart-line" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
               <path class="" fill="currentColor" d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z"></path>
            </svg>
            General 
         </a>
         <a href="/settings/dispatch/campaigns" class="p-15px" tabindex="0">
            <svg class="svg-inline--fa fa-arrow-right-arrow-left mr-5px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right-arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
               <path class="" fill="currentColor" d="M438.6 150.6c12.5-12.5 12.5-32.8 0-45.3l-96-96c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.7 96 32 96C14.3 96 0 110.3 0 128s14.3 32 32 32l306.7 0-41.4 41.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l96-96zm-333.3 352c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 416 416 416c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0 41.4-41.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-96 96c-12.5 12.5-12.5 32.8 0 45.3l96 96z"></path>
            </svg>
            Dispatch 
         </a>
         <!---->
         <a href="/settings/contact-card/contact-information" class="p-15px">
            <svg class="svg-inline--fa fa-address-card mr-5px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="address-card" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
               <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 256h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zm256-32H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16z"></path>
            </svg>
            Contact Card 
         </a>
         <!---->
         <a href="/settings/billing/billing_subscription" class="p-15px">
            <svg class="svg-inline--fa fa-credit-card mr-5px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="credit-card" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
               <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96v32H576V96c0-35.3-28.7-64-64-64H64zM576 224H0V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V224zM112 352h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm112 16c0-8.8 7.2-16 16-16H368c8.8 0 16 7.2 16 16s-7.2 16-16 16H240c-8.8 0-16-7.2-16-16z"></path>
            </svg>
            Billing 
         </a>
      </div>
   </div>
</div>
<div class="flex-grow pt-20px">
<div class="flex flex-col">
<div class="sub-menu-bar pl-25px">
   <div class="flex justify-start items-center border-b border-gray-300"><a aria-current="page" href="/settings/general/connect-social-media" class="border-b-2 border-blue-500 text-blue-500 router-link-exact-active p-15px">Connect Social Media</a><a href="/settings/general/branding" class="p-15px">Branding</a><a href="/settings/general/users" class="p-15px">Users</a><a href="/settings/general/reporting" class="p-15px">Reporting</a>
   </div>
</div>
<div class="p-25px user">
   <div data-v-b35b887f="" class="main p-20px rounded-4px bg-white relative shadow">
      <!---->
      <div data-v-b35b887f="" class="search-bar flex justify-between items-center mb-30px">
         <div data-v-b35b887f="" class="search-input p-2 rounded-4px border border-gray-400">
            <svg data-v-b35b887f="" class="svg-inline--fa fa-magnifying-glass" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
               <path class="" fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
            </svg>
            <input data-v-b35b887f="" class="ml-10px w-250px" type="search" placeholder="Search by Email" name="search" id="search">
         </div>
         <div data-v-b35b887f="" class="create-user-button">
            <button data-v-b35b887f="" class="btn btn-blue">
               <svg data-v-b35b887f="" class="svg-inline--fa fa-user-plus" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                  <path class="" fill="currentColor" d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"></path>
               </svg>
               Create User
            </button>
         </div>
      </div>
      <table data-v-b35b887f="" class="w-full mb-20px">
         <thead data-v-b35b887f="">
            <tr data-v-b35b887f="">
               <th data-v-b35b887f="" class="p-20px text-left cursor-pointer">
                  User 
                  <svg data-v-b35b887f="" class="svg-inline--fa fa-arrow-down" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                     <path class="" fill="currentColor" d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path>
                  </svg>
               </th>
               <th data-v-b35b887f="" class="p-20px text-left">Role</th>
               <th data-v-b35b887f="" class="p-20px text-left">Access Type</th>
               <th data-v-b35b887f="" class="p-20px text-center">Enable/Disable</th>
               <th data-v-b35b887f="" class="p-20px text-left">Permissions</th>
            </tr>
         </thead>
         <tbody data-v-b35b887f="">
            <tr data-v-b35b887f="" class="table-row py-3">
               <td class="p-20px">caitlyn.seidel@halesac.com</td>
               <td class="p-20px">Admin</td>
               <td class="p-20px">Location</td>
               <td class="p-20px">
                  <div class="w-full h-full flex justify-center items-center">
                     <button disabled="" class="btn text-14px btn-gray cursor-not-allowed opacity-50 hover:bg-gray-400">
                        <svg class="svg-inline--fa fa-mobile" aria-hidden="true" focusable="false" data-prefix="far" data-icon="mobile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                           <path class="" fill="currentColor" d="M80 48c-8.8 0-16 7.2-16 16V448c0 8.8 7.2 16 16 16H304c8.8 0 16-7.2 16-16V64c0-8.8-7.2-16-16-16H80zM16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM160 400h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"></path>
                        </svg>
                        Disable
                     </button>
                  </div>
               </td>
               <td class="p-20px flex justify-start items-stretch">
                  <div class="grid grid-rows-1 grid-flow-col gap-15px">
                     <!---->
                     <div class="flex items-center">
                        <div class="flex justify-start items-center col-span-3 opacity-50 cursor-not-allowed">
                           <svg class="svg-inline--fa fa-square-check text-green-500 mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"></path>
                           </svg>
                           <p>Operate</p>
                        </div>
                     </div>
                     <div class="flex items-center">
                        <div class="flex justify-start items-center col-span-3 opacity-50 cursor-not-allowed">
                           <svg class="svg-inline--fa fa-square-check text-green-500 mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"></path>
                           </svg>
                           <p>Analytics</p>
                        </div>
                     </div>
                     <div class="flex items-center">
                        <div class="flex justify-start items-center col-span-3 opacity-50 cursor-not-allowed">
                           <svg class="svg-inline--fa fa-square-check text-green-500 mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"></path>
                           </svg>
                           <p>Settings</p>
                        </div>
                     </div>
                  </div>
               </td>
            </tr>
            <tr data-v-b35b887f="" class="table-row py-3">
               <td class="p-20px">carl.sylvain@my-ccs.com</td>
               <td class="p-20px">Admin</td>
               <td class="p-20px">Location</td>
               <td class="p-20px">
                  <div class="w-full h-full flex justify-center items-center">
                     <button disabled="" class="btn text-14px btn-gray cursor-not-allowed opacity-50 hover:bg-gray-400">
                        <svg class="svg-inline--fa fa-mobile" aria-hidden="true" focusable="false" data-prefix="far" data-icon="mobile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                           <path class="" fill="currentColor" d="M80 48c-8.8 0-16 7.2-16 16V448c0 8.8 7.2 16 16 16H304c8.8 0 16-7.2 16-16V64c0-8.8-7.2-16-16-16H80zM16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM160 400h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"></path>
                        </svg>
                        Disable
                     </button>
                  </div>
               </td>
               <td class="p-20px flex justify-start items-stretch">
                  <div class="grid grid-rows-1 grid-flow-col gap-15px">
                     <!---->
                     <div class="flex items-center">
                        <div class="flex justify-start items-center col-span-3 opacity-50 cursor-not-allowed">
                           <svg class="svg-inline--fa fa-square-check text-green-500 mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"></path>
                           </svg>
                           <p>Operate</p>
                        </div>
                     </div>
                     <div class="flex items-center">
                        <div class="flex justify-start items-center col-span-3 opacity-50 cursor-not-allowed">
                           <svg class="svg-inline--fa fa-square-check text-green-500 mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"></path>
                           </svg>
                           <p>Analytics</p>
                        </div>
                     </div>
                     <div class="flex items-center">
                        <div class="flex justify-start items-center col-span-3 opacity-50 cursor-not-allowed">
                           <svg class="svg-inline--fa fa-square-check text-green-500 mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"></path>
                           </svg>
                           <p>Settings</p>
                        </div>
                     </div>
                  </div>
               </td>
            </tr>
            <tr data-v-b35b887f="" class="table-row py-3">
               <td class="p-20px">Casey.Evett@halesac.com</td>
               <td class="p-20px">User</td>
               <td class="p-20px">Location</td>
               <td class="p-20px">
                  <div class="w-full h-full flex justify-center items-center">
                     <button disabled="" class="btn text-14px btn-green cursor-not-allowed opacity-50 hover:bg-gray-400">
                        <svg class="svg-inline--fa fa-mobile" aria-hidden="true" focusable="false" data-prefix="far" data-icon="mobile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                           <path class="" fill="currentColor" d="M80 48c-8.8 0-16 7.2-16 16V448c0 8.8 7.2 16 16 16H304c8.8 0 16-7.2 16-16V64c0-8.8-7.2-16-16-16H80zM16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM160 400h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"></path>
                        </svg>
                        Enable
                     </button>
                  </div>
               </td>
               <td class="p-20px flex justify-start items-stretch">
                  <div class="grid grid-rows-1 grid-flow-col gap-15px">
                     <!---->
                     <div class="flex items-center">
                        <div class="flex justify-start items-center col-span-3 opacity-50 cursor-not-allowed">
                           <svg class="svg-inline--fa fa-square-check text-green-500 mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"></path>
                           </svg>
                           <p>Operate</p>
                        </div>
                     </div>
                     <div class="flex items-center">
                        <div class="flex justify-start items-center col-span-3 opacity-50 cursor-not-allowed">
                           <svg class="svg-inline--fa fa-square-check text-green-500 mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"></path>
                           </svg>
                           <p>Analytics</p>
                        </div>
                     </div>
                     <div class="flex items-center">
                        <div class="flex justify-start items-center col-span-3 opacity-50 cursor-not-allowed">
                           <svg class="svg-inline--fa fa-square-check text-green-500 mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"></path>
                           </svg>
                           <p>Settings</p>
                        </div>
                     </div>
                  </div>
               </td>
            </tr>
            <tr data-v-b35b887f="" class="table-row py-3">
               <td class="p-20px">Christopher.Maggiolo@halesac.com</td>
               <td class="p-20px">User</td>
               <td class="p-20px">Location</td>
               <td class="p-20px">
                  <div class="w-full h-full flex justify-center items-center">
                     <button disabled="" class="btn text-14px btn-green cursor-not-allowed opacity-50 hover:bg-gray-400">
                        <svg class="svg-inline--fa fa-mobile" aria-hidden="true" focusable="false" data-prefix="far" data-icon="mobile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                           <path class="" fill="currentColor" d="M80 48c-8.8 0-16 7.2-16 16V448c0 8.8 7.2 16 16 16H304c8.8 0 16-7.2 16-16V64c0-8.8-7.2-16-16-16H80zM16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM160 400h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"></path>
                        </svg>
                        Enable
                     </button>
                  </div>
               </td>
               <td class="p-20px flex justify-start items-stretch">
                  <div class="grid grid-rows-1 grid-flow-col gap-15px">
                     <!---->
                     <div class="flex items-center">
                        <div class="flex justify-start items-center col-span-3 opacity-50 cursor-not-allowed">
                           <svg class="svg-inline--fa fa-square-check text-green-500 mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"></path>
                           </svg>
                           <p>Operate</p>
                        </div>
                     </div>
                     <div class="flex items-center">
                        <div class="flex justify-start items-center col-span-3 opacity-50 cursor-not-allowed">
                           <svg class="svg-inline--fa fa-square-check text-green-500 mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"></path>
                           </svg>
                           <p>Analytics</p>
                        </div>
                     </div>
                     <div class="flex items-center">
                        <div class="flex justify-start items-center col-span-3 opacity-50 cursor-not-allowed">
                           <svg class="svg-inline--fa fa-square-check text-green-500 mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"></path>
                           </svg>
                           <p>Settings</p>
                        </div>
                     </div>
                  </div>
               </td>
            </tr>
            <tr data-v-b35b887f="" class="table-row py-3">
               <td class="p-20px">george.mcpherson@halesac.com</td>
               <td class="p-20px">User</td>
               <td class="p-20px">Location</td>
               <td class="p-20px">
                  <div class="w-full h-full flex justify-center items-center">
                     <button disabled="" class="btn text-14px btn-gray cursor-not-allowed opacity-50 hover:bg-gray-400">
                        <svg class="svg-inline--fa fa-mobile" aria-hidden="true" focusable="false" data-prefix="far" data-icon="mobile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                           <path class="" fill="currentColor" d="M80 48c-8.8 0-16 7.2-16 16V448c0 8.8 7.2 16 16 16H304c8.8 0 16-7.2 16-16V64c0-8.8-7.2-16-16-16H80zM16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM160 400h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"></path>
                        </svg>
                        Disable
                     </button>
                  </div>
               </td>
               <td class="p-20px flex justify-start items-stretch">
                  <div class="grid grid-rows-1 grid-flow-col gap-15px">
                     <!---->
                     <div class="flex items-center">
                        <div class="flex justify-start items-center col-span-3 opacity-50 cursor-not-allowed">
                           <svg class="svg-inline--fa fa-square-check text-green-500 mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"></path>
                           </svg>
                           <p>Operate</p>
                        </div>
                     </div>
                     <div class="flex items-center">
                        <div class="flex justify-start items-center col-span-3 opacity-50 cursor-not-allowed">
                           <svg class="svg-inline--fa fa-square-check text-green-500 mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"></path>
                           </svg>
                           <p>Analytics</p>
                        </div>
                     </div>
                     <div class="flex items-center">
                        <div class="flex justify-start items-center col-span-3 opacity-50 cursor-not-allowed">
                           <svg class="svg-inline--fa fa-square-check text-green-500 mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"></path>
                           </svg>
                           <p>Settings</p>
                        </div>
                     </div>
                  </div>
               </td>
            </tr>
            <tr data-v-b35b887f="" class="table-row py-3">
               <td class="p-20px">george.mcpherson@rightawaygroup.com</td>
               <td class="p-20px">Admin</td>
               <td class="p-20px">Location</td>
               <td class="p-20px">
                  <div class="w-full h-full flex justify-center items-center">
                     <button disabled="" class="btn text-14px btn-gray cursor-not-allowed opacity-50 hover:bg-gray-400">
                        <svg class="svg-inline--fa fa-mobile" aria-hidden="true" focusable="false" data-prefix="far" data-icon="mobile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                           <path class="" fill="currentColor" d="M80 48c-8.8 0-16 7.2-16 16V448c0 8.8 7.2 16 16 16H304c8.8 0 16-7.2 16-16V64c0-8.8-7.2-16-16-16H80zM16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM160 400h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"></path>
                        </svg>
                        Disable
                     </button>
                  </div>
               </td>
               <td class="p-20px flex justify-start items-stretch">
                  <div class="grid grid-rows-1 grid-flow-col gap-15px">
                     <!---->
                     <div class="flex items-center">
                        <div class="flex justify-start items-center col-span-3 opacity-50 cursor-not-allowed">
                           <svg class="svg-inline--fa fa-square-check text-green-500 mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"></path>
                           </svg>
                           <p>Operate</p>
                        </div>
                     </div>
                     <div class="flex items-center">
                        <div class="flex justify-start items-center col-span-3 opacity-50 cursor-not-allowed">
                           <svg class="svg-inline--fa fa-square-check text-green-500 mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"></path>
                           </svg>
                           <p>Analytics</p>
                        </div>
                     </div>
                     <div class="flex items-center">
                        <div class="flex justify-start items-center col-span-3 opacity-50 cursor-not-allowed">
                           <svg class="svg-inline--fa fa-square-check text-green-500 mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"></path>
                           </svg>
                           <p>Settings</p>
                        </div>
                     </div>
                  </div>
               </td>
            </tr>
            <tr data-v-b35b887f="" class="table-row py-3">
               <td class="p-20px">greg.bark@halesac.com</td>
               <td class="p-20px">User</td>
               <td class="p-20px">Location</td>
               <td class="p-20px">
                  <div class="w-full h-full flex justify-center items-center">
                     <button disabled="" class="btn text-14px btn-gray cursor-not-allowed opacity-50 hover:bg-gray-400">
                        <svg class="svg-inline--fa fa-mobile" aria-hidden="true" focusable="false" data-prefix="far" data-icon="mobile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                           <path class="" fill="currentColor" d="M80 48c-8.8 0-16 7.2-16 16V448c0 8.8 7.2 16 16 16H304c8.8 0 16-7.2 16-16V64c0-8.8-7.2-16-16-16H80zM16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM160 400h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"></path>
                        </svg>
                        Disable
                     </button>
                  </div>
               </td>
               <td class="p-20px flex justify-start items-stretch">
                  <div class="grid grid-rows-1 grid-flow-col gap-15px">
                     <!---->
                     <div class="flex items-center">
                        <div class="flex justify-start items-center col-span-3 opacity-50 cursor-not-allowed">
                           <svg class="svg-inline--fa fa-square-check text-green-500 mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"></path>
                           </svg>
                           <p>Operate</p>
                        </div>
                     </div>
                     <div class="flex items-center">
                        <div class="flex justify-start items-center col-span-3 opacity-50 cursor-not-allowed">
                           <svg class="svg-inline--fa fa-square-check text-green-500 mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"></path>
                           </svg>
                           <p>Analytics</p>
                        </div>
                     </div>
                     <div class="flex items-center">
                        <div class="flex justify-start items-center col-span-3 opacity-50 cursor-not-allowed">
                           <svg class="svg-inline--fa fa-square-check text-green-500 mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"></path>
                           </svg>
                           <p>Settings</p>
                        </div>
                     </div>
                  </div>
               </td>
            </tr>
            <tr data-v-b35b887f="" class="table-row py-3">
               <td class="p-20px">jeremy.hetherington@rightawaygroup.com</td>
               <td class="p-20px">Owner</td>
               <td class="p-20px">Owner</td>
               <td class="p-20px">
                  <div class="w-full h-full flex justify-center items-center">
                     <button disabled="" class="btn text-14px btn-gray cursor-not-allowed opacity-50 hover:bg-gray-400">
                        <svg class="svg-inline--fa fa-mobile" aria-hidden="true" focusable="false" data-prefix="far" data-icon="mobile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                           <path class="" fill="currentColor" d="M80 48c-8.8 0-16 7.2-16 16V448c0 8.8 7.2 16 16 16H304c8.8 0 16-7.2 16-16V64c0-8.8-7.2-16-16-16H80zM16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM160 400h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"></path>
                        </svg>
                        Disable
                     </button>
                  </div>
               </td>
               <td class="p-20px flex justify-start items-stretch">
                  <div class="grid grid-rows-1 grid-flow-col gap-15px">
                     <!---->
                     <div class="flex items-center">
                        <div class="flex justify-start items-center col-span-3 opacity-50 cursor-not-allowed">
                           <svg class="svg-inline--fa fa-square-check text-green-500 mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"></path>
                           </svg>
                           <p>Operate</p>
                        </div>
                     </div>
                     <div class="flex items-center">
                        <div class="flex justify-start items-center col-span-3 opacity-50 cursor-not-allowed">
                           <svg class="svg-inline--fa fa-square-check text-green-500 mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"></path>
                           </svg>
                           <p>Analytics</p>
                        </div>
                     </div>
                     <div class="flex items-center">
                        <div class="flex justify-start items-center col-span-3 opacity-50 cursor-not-allowed">
                           <svg class="svg-inline--fa fa-square-check text-green-500 mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"></path>
                           </svg>
                           <p>Settings</p>
                        </div>
                     </div>
                  </div>
               </td>
            </tr>
            <tr data-v-b35b887f="" class="table-row py-3">
               <td class="p-20px">megan.finch@halesac.com</td>
               <td class="p-20px">User</td>
               <td class="p-20px">Location</td>
               <td class="p-20px">
                  <div class="w-full h-full flex justify-center items-center">
                     <button disabled="" class="btn text-14px btn-gray cursor-not-allowed opacity-50 hover:bg-gray-400">
                        <svg class="svg-inline--fa fa-mobile" aria-hidden="true" focusable="false" data-prefix="far" data-icon="mobile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                           <path class="" fill="currentColor" d="M80 48c-8.8 0-16 7.2-16 16V448c0 8.8 7.2 16 16 16H304c8.8 0 16-7.2 16-16V64c0-8.8-7.2-16-16-16H80zM16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM160 400h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"></path>
                        </svg>
                        Disable
                     </button>
                  </div>
               </td>
               <td class="p-20px flex justify-start items-stretch">
                  <div class="grid grid-rows-1 grid-flow-col gap-15px">
                     <!---->
                     <div class="flex items-center">
                        <div class="flex justify-start items-center col-span-3 opacity-50 cursor-not-allowed">
                           <svg class="svg-inline--fa fa-square-check text-green-500 mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"></path>
                           </svg>
                           <p>Operate</p>
                        </div>
                     </div>
                     <div class="flex items-center">
                        <div class="flex justify-start items-center col-span-3 opacity-50 cursor-not-allowed">
                           <svg class="svg-inline--fa fa-square-check text-green-500 mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"></path>
                           </svg>
                           <p>Analytics</p>
                        </div>
                     </div>
                     <div class="flex items-center">
                        <div class="flex justify-start items-center col-span-3 opacity-50 cursor-not-allowed">
                           <svg class="svg-inline--fa fa-square-check text-green-500 mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"></path>
                           </svg>
                           <p>Settings</p>
                        </div>
                     </div>
                  </div>
               </td>
            </tr>
            <tr data-v-b35b887f="" class="table-row py-3">
               <td class="p-20px">patrick.ouellet@halesac.com</td>
               <td class="p-20px">User</td>
               <td class="p-20px">Location</td>
               <td class="p-20px">
                  <div class="w-full h-full flex justify-center items-center">
                     <button disabled="" class="btn text-14px btn-green cursor-not-allowed opacity-50 hover:bg-gray-400">
                        <svg class="svg-inline--fa fa-mobile" aria-hidden="true" focusable="false" data-prefix="far" data-icon="mobile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                           <path class="" fill="currentColor" d="M80 48c-8.8 0-16 7.2-16 16V448c0 8.8 7.2 16 16 16H304c8.8 0 16-7.2 16-16V64c0-8.8-7.2-16-16-16H80zM16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM160 400h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"></path>
                        </svg>
                        Enable
                     </button>
                  </div>
               </td>
               <td class="p-20px flex justify-start items-stretch">
                  <div class="grid grid-rows-1 grid-flow-col gap-15px">
                     <!---->
                     <div class="flex items-center">
                        <div class="flex justify-start items-center col-span-3 opacity-50 cursor-not-allowed">
                           <svg class="svg-inline--fa fa-square-check text-green-500 mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"></path>
                           </svg>
                           <p>Operate</p>
                        </div>
                     </div>
                     <div class="flex items-center">
                        <div class="flex justify-start items-center col-span-3 opacity-50 cursor-not-allowed">
                           <svg class="svg-inline--fa fa-square-check text-green-500 mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"></path>
                           </svg>
                           <p>Analytics</p>
                        </div>
                     </div>
                     <div class="flex items-center">
                        <div class="flex justify-start items-center col-span-3 opacity-50 cursor-not-allowed">
                           <svg class="svg-inline--fa fa-square-check text-green-500 mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"></path>
                           </svg>
                           <p>Settings</p>
                        </div>
                     </div>
                  </div>
               </td>
            </tr>
         </tbody>
      </table>
      <div data-v-b35b887f="" class="pagination flex justify-between items-center">
         <div data-v-b35b887f="" class="pagination-links grid grid-rows-1 grid-flow-col gap-5px">
            <button data-v-b35b887f="" class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100">
               <svg data-v-b35b887f="" class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                  <path class="" fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
               </svg>
            </button>
            <button data-v-b35b887f="" class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100" disabled="">
               <svg data-v-b35b887f="" class="svg-inline--fa fa-caret-left" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                  <path class="" fill="currentColor" d="M9.4 278.6c-12.5-12.5-12.5-32.8 0-45.3l128-128c9.2-9.2 22.9-11.9 34.9-6.9s19.8 16.6 19.8 29.6l0 256c0 12.9-7.8 24.6-19.8 29.6s-25.7 2.2-34.9-6.9l-128-128z"></path>
               </svg>
            </button>
            <button data-v-b35b887f="" class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-blue-500 text-white">1</button><button data-v-b35b887f="" class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100">2</button>
            <button data-v-b35b887f="" class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100">
               <svg data-v-b35b887f="" class="svg-inline--fa fa-caret-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                  <path class="" fill="currentColor" d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z"></path>
               </svg>
            </button>
            <button data-v-b35b887f="" class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100">
               <svg data-v-b35b887f="" class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                  <path class="" fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
               </svg>
            </button>
         </div>
         <div data-v-b35b887f="" class="display-pages px-30px py-7px border rounded-full"> Showing 1 to 10 of 12 entries </div>
      </div>
   </div>
   <!---->
</div>
<?= $this->endsection('content') ?>