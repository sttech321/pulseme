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
   <div class="flex justify-start items-center border-b border-gray-300"><a href="/settings/dispatch/campaigns" class="border-b-2 border-blue-500 text-blue-500 router-link-exact-active p-15px" aria-current="page">Campaigns</a><a href="/settings/dispatch/notifications" class="p-15px">Notifications</a><a href="/settings/dispatch/web_widget" class="p-15px">Web
      Widget</a><a href="/settings/dispatch/review-widget" class="p-15px">Review Widget</a>
   </div>
</div>
<div class="p-25px notification">
   <div data-v-e3e752fc="" class="page grid grid-cols-2 <lg:grid-cols-1 gap-10px">
      <div data-v-e3e752fc="" class="flex flex-col justify-start items-stretch bg-white shadow rounded-4px w-full p-30px">
         <div class="row flex justify-between items-center mb-20px">
            <h2 class="text-2xl font-light">Positive Feedback</h2>
            <svg class="svg-inline--fa fa-face-smile text-4xl text-lime-400" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-smile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
               <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM164.1 325.5C182 346.2 212.6 368 256 368s74-21.8 91.9-42.5c5.8-6.7 15.9-7.4 22.6-1.6s7.4 15.9 1.6 22.6C349.8 372.1 311.1 400 256 400s-93.8-27.9-116.1-53.5c-5.8-6.7-5.1-16.8 1.6-22.6s16.8-5.1 22.6 1.6zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
            </svg>
         </div>
         <div class="row mb-20px input-group flex-grow">
            <div class="labels flex w-full justify-between items-center mb-15px">
               <h3 class="text-17px font-bold" for="positive-email">Email</h3>
               <!---->
            </div>
            <!---->
            <div class="input flex justify-between items-center">
               <p>caitlyn.seidel@halesac.com</p>
               <div class="grid grid-cols-1 gap-10px">
                  <button class="btn btn-red">
                     <svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path class="" fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path>
                     </svg>
                     Delete Email
                  </button>
                  <!---->
               </div>
            </div>
         </div>
      </div>
      <div data-v-e3e752fc="" class="flex flex-col justify-start items-stretch bg-white shadow rounded-4px w-full p-30px">
         <div class="flex justify-between items-center mb-20px">
            <h2 class="text-2xl font-light">Neutral Feedback</h2>
            <svg class="svg-inline--fa fa-face-meh text-4xl text-cyan-400" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-meh" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
               <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM176.4 176a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm128 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM160 336H352c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"></path>
            </svg>
         </div>
         <div class="mb-20px input-group">
            <div class="labels flex w-full justify-between items-center mb-15px">
               <h3 class="text-17px font-bold" for="neutral-sms">SMS</h3>
            </div>
            <div class="flex justify-between"><input class="w-full mr-10px outline-none border-b focus:border-gray-400" type="tel" name="neutral-sms" id="neutral-sms" placeholder="(555) 555-5555"><button id="update-sms-button" class="btn btn-blue w-1/3"> Update SMS </button></div>
         </div>
         <div class="mb-20px input-group">
            <div class="labels flex w-full justify-between items-center mb-15px">
               <h3 class="text-17px font-bold" for="positive-email">Email</h3>
               <!---->
            </div>
            <!---->
            <div class="input flex justify-between items-center">
               <p>caitlyn.seidel@halesac.com</p>
               <div class="grid grid-cols-1 gap-10px">
                  <button class="btn btn-red" id="delete-email-button">
                     <svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path class="" fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path>
                     </svg>
                     Delete Email 
                  </button>
                  <!---->
               </div>
            </div>
         </div>
         <!---->
      </div>
      <div data-v-e3e752fc="" class="flex flex-col justify-start items-stretch bg-white shadow rounded-4px w-full p-30px">
         <div class="flex justify-between items-center mb-20px">
            <h2 class="text-2xl font-light">Negative Feedback</h2>
            <svg class="svg-inline--fa fa-face-frown text-4xl text-red-500" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-frown" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
               <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM159.3 388.7c-2.6 8.4-11.6 13.2-20 10.5s-13.2-11.6-10.5-20C145.2 326.1 196.3 288 256 288s110.8 38.1 127.3 91.3c2.6 8.4-2.1 17.4-10.5 20s-17.4-2.1-20-10.5C340.5 349.4 302.1 320 256 320s-84.5 29.4-96.7 68.7zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
            </svg>
         </div>
         <div class="mb-20px input-group">
            <div class="labels flex w-full justify-between items-center mb-15px">
               <h3 class="text-17px font-bold" for="negative-sms">SMS</h3>
            </div>
            <div class="flex justify-between"><input class="w-full mr-10px outline-none border-b focus:border-gray-400" type="tel" name="negative-sms" id="negative-sms" placeholder="(555) 555-5555"><button id="update-sms-button" class="btn btn-blue w-1/3"> Update SMS </button></div>
         </div>
         <div class="mb-20px input-group">
            <div class="labels flex w-full justify-between items-center mb-15px">
               <h3 class="text-17px font-bold" for="positive-email">Email</h3>
               <!---->
            </div>
            <!---->
            <div class="input flex justify-between items-center">
               <p>caitlyn.seidel@halesac.com</p>
               <div class="grid grid-cols-1 gap-10px">
                  <button id="delete-email-button-0" class="btn btn-red">
                     <svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path class="" fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path>
                     </svg>
                     Delete Email 
                  </button>
                  <!---->
               </div>
            </div>
         </div>
         <!---->
      </div>
   </div>
</div>
<?= $this->endsection('content') ?>