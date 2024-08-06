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
<div class="flex flex-col">
<div class="sub-menu-bar pl-25px">
   <div class="flex justify-start items-center border-b border-gray-300"><a href="/settings/contact-card/contact-information" class="p-15px">Contact Information</a><a aria-current="page" href="/settings/contact-card/templates" class="border-b-2 border-blue-500 text-blue-500 router-link-exact-active p-15px">Templates</a>
   </div>
</div>
<div class="p-25px flex flex-col justify-start items-stretch contact-template">
   <div class="relative">
      <div class="main flex justify-center">
         <div class="card p-20px bg-white rounded-4px shadow max-w-1000px min-w-600px">
            <div class="grid grid-cols-1 gap-25px text-left">
               <h2 class="text-3xl font-light">Demo SMS Template</h2>
               <p class="text-gray-400"> Send a test SMS message to a phone number of your choice. The information
                  that will be sent includes your standalone message above and your company's contact card. 
               </p>
               <div class="relative">
                  <div
                     class="border border-blue-500 rounded-4px px-1.25rem py-1rem flex justify-between items-center text-blue-500 cursor-pointer">
                     <p>Select Demo Type</p>
                     <svg class="svg-inline--fa fa-caret-down text-blue-500"
                        aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path class="" fill="currentColor"
                           d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z">
                        </path>
                     </svg>
                  </div>
                  <!---->
               </div>
               <!---->
               <div class="flex flex-col">
                  <p class="mb-10px">Test with a phone number</p>
                  <div class="flex justify-between items-stretch"><input type="tel"
                     class="flex-grow mr-20px outline-none border rounded-4px focus:border-blue-500 px-1rem"
                     name="demo-phone" id="demo-phone" placeholder="Phone Number"><button
                     class="btn btn-blue"> Send test SMS </button></div>
               </div>
            </div>
         </div>
      </div>
      <!---->
   </div>
</div>
<?= $this->endsection('content') ?>