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
   <div class="flex justify-start items-center border-b border-gray-300"><a aria-current="page" href="/settings/billing/subscriptions" class="border-b-2 border-blue-500 text-blue-500 router-link-exact-active p-15px">Subscriptions</a>
   </div>
</div>
<div class="p-25px flex flex-col justify-start items-stretch">
   <div class="card p-20px bg-white rounded-4px shadow">
      <div class="subscription">
         <h2 class="text-1.7rem mb-25px">Your Subscription</h2>
         <div class="flex justify-between items-center mb-30px relative">
            <div class="p-20px border rounded-4px border-yellow-500">
               <div class="grid grid-flow-col auto-cols-auto gap-10px">
                  <p class="flex items-center"> Custom pulseM Plan <span class="p-5px bg-green-100 text-green-500 text-12px ml-5px">Active</span></p>
                  <p class="flex items-center"> Your Technicians: 15</p>
               </div>
            </div>
            <!---->
         </div>
      </div>
      <div class="upgrades mb-30px">
         <div class="flex justify-between items-center mb-25px">
            <h2 class="text-1.7rem">Upgrade your plan</h2>
            <!---->
         </div>
         <div class="flex justify-start items-start">
            <div class="border-1 border-gray-300 rounded-4px px-12px py-20px grid grid-cols-3 grid-flow-row auto-rows-auto gap-15px">
               <button class="btn btn-blue"> Request Upgrade </button>
               <p class="col-span-2 text-blue-500 p-10px bg-blue-100"> Our customer support team will contact you regarding your upgrade request. </p>
               <p class="col-span-3 leading-24px"> Need help deciding which plan is right for you, or would you like to build a custom plan?<br>Call <a href="tel:8446076319" class="text-blue-500">844-607-6319</a> or send an email to <a href="mailto:support@pulsem.me" class="text-blue-500">support@pulsem.me</a>. </p>
            </div>
         </div>
      </div>
      <div class="add-ons">
         <div class="flex justify-start items-baseline mb-25px">
            <h2 class="text-1.7rem mr-10px">Add-ons</h2>
            <p class="text-gray-400"> Request an upgrade to discuss add-ons that fit your business. </p>
         </div>
         <div class="grid grid-cols-2 grid-flow-row auto-rows-auto gap-20px">
            <div class="card rounded-4px px-12px py-20px flex justify-between relative border border-gray-300">
               <div class="grid grid-flow-row auto-rows-auto gap-y-15px w-3/4">
                  <h3 class="text-1.7rem">Contact Card</h3>
                  <p> Make it easy for customers to keep your business information handy by automatically sending a branded contact card for quick save and access on their phones. <a id="nitro-contact-card-learn-more" class="text-blue-500" target="_blank" href="https://know.pulsem.me/contact-card?utm_campaign=dashboard-upsell&amp;utm_source=marketplace&amp;utm_medium=web&amp;utm_content=contact-card">Learn more</a></p>
                  <div class=""><button class="btn border border-gray-300 rounded-4px text-gray-500 cursor-not-allowed"> Subscribed </button></div>
               </div>
               <div class="image"><img class="h-full max-h-200px absolute bottom-0 right-10" src="/assets/contact-card-bdcd1f0a.png" alt="contact card hand"></div>
            </div>
            <div class="card rounded-4px px-12px py-20px flex justify-between relative border border-gray-300">
               <div class="grid grid-flow-row auto-rows-auto gap-y-15px w-3/4">
                  <h3 class="text-1.7rem">Employee Rewards</h3>
                  <p> Foster a motivated team environment with a structured reward program, using incentives to recognize and appreciate employee achievements. <a id="nitro-employee-rewards-learn-more" class="text-blue-500" target="_blank" href="https://know.pulsem.me/employee-rewards">Learn more</a></p>
                  <div class=""><button id="nitro-employee-rewards-request-upgrade" class="btn border border-blue-500 rounded-4px text-blue-500"> Request Upgrade </button></div>
               </div>
               <div class="image"><img class="h-full max-h-200px" src="/assets/employee-rewards-dca4a256.svg" alt="contact card hand"></div>
            </div>
            <div class="card rounded-4px px-12px py-20px flex justify-between relative border border-gray-300">
               <div class="grid grid-flow-row auto-rows-auto gap-y-15px w-3/4">
                  <h3 class="text-1.7rem">Two-Way Messaging</h3>
                  <p> Streamline your communication by managing and responding to customer messages from various channels in one unified platform. <a id="nitro-twm-learn-more" class="text-blue-500" target="_blank" href="https://know.pulsem.me/two-way-messaging?utm_campaign=dashboard-upsell&amp;utm_source=marketplace&amp;utm_medium=web&amp;utm_content=twm">Learn more</a></p>
                  <div class=""><button id="nitro-twm-request-upgrade" class="btn border border-blue-500 rounded-4px text-blue-500"> Request Upgrade </button></div>
               </div>
               <div class="image"><img class="h-full max-h-200px" src="/assets/twm-320b84ed.png" alt="contact card hand"></div>
            </div>
            <div class="card rounded-4px px-12px py-20px flex justify-between relative border border-gray-300">
               <div class="grid grid-flow-row auto-rows-auto gap-y-15px w-3/4">
                  <h3 class="text-1.7rem">Chat Widget</h3>
                  <p> Enhance customer engagement and lead conversion by initiating conversations with website visitors through a user-friendly text messaging widget <a id="nitro-chat-widget-learn-more" class="text-blue-500" target="_blank" href="https://know.pulsem.me/chat-widget?utm_campaign=dashboard-upsell&amp;utm_source=marketplace&amp;utm_medium=web&amp;utm_content=web-chat">Learn more</a></p>
                  <div class=""><button id="nitro-chat-widget-request-upgrade" class="btn border border-blue-500 rounded-4px text-blue-500"> Request Upgrade </button></div>
               </div>
               <div class="image"><img class="h-full max-h-200px" src="/assets/chat-widget-2f6c9ba7.png" alt="contact card hand"></div>
            </div>
         </div>
      </div>
      <!----><!---->
   </div>
</div>
<?= $this->endsection('content') ?>