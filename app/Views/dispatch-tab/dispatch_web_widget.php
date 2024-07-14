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
<div class="p-25px web-widget">
   <div data-v-dc04488c="" class="rounded-4px bg-white flex flex-col p-15px">
      <div data-v-dc04488c="" class="menu w-full flex justify-end p-10px relative">
         <button data-v-dc04488c="" class="text-gray-500 relative">
            <svg data-v-dc04488c="" class="svg-inline--fa fa-bars text-xl" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
               <path class="" fill="currentColor" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"></path>
            </svg>
         </button>
         <!---->
      </div>
      <div data-v-dc04488c="" class="intro p-10px">
         <h1 data-v-dc04488c="" class="text-xl">Installation</h1>
         <p data-v-dc04488c=""> This is the only installation you need to do in order to enjoy the features mentioned below! To get started, follow one of the instructions below that is most relevant to you. </p>
      </div>
      <div data-v-dc04488c="" class="installation w-full flex">
         <div data-v-dc04488c="" class="w-1/2 p-10px">
            <h2 data-v-dc04488c="" class="font-bold">Normal Installation</h2>
            <p data-v-dc04488c="" class="py-10px"> This installation requires you to put the following code snippet in the <code data-v-dc04488c="" class="text-red-500 bg-red-50">&lt;head&gt;</code> of your website. It is highly recommended that you install the web widget on all of the pages of your website. We can either give you the code to do it yourself or we can <a data-v-dc04488c="" href="javascript:void(null)">email instructions to your webmaster</a></p>
            <button data-v-dc04488c="" class="btn btn-green w-auto">
               <svg data-v-dc04488c="" class="svg-inline--fa fa-code" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="code" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                  <path class="" fill="currentColor" d="M392.8 1.2c-17-4.9-34.7 5-39.6 22l-128 448c-4.9 17 5 34.7 22 39.6s34.7-5 39.6-22l128-448c4.9-17-5-34.7-22-39.6zm80.6 120.1c-12.5 12.5-12.5 32.8 0 45.3L562.7 256l-89.4 89.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l112-112c12.5-12.5 12.5-32.8 0-45.3l-112-112c-12.5-12.5-32.8-12.5-45.3 0zm-306.7 0c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3l112 112c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256l89.4-89.4c12.5-12.5 12.5-32.8 0-45.3z"></path>
               </svg>
               Get Code 
            </button>
         </div>
         <div data-v-dc04488c="" class="w-1/2 p-10px">
            <h2 data-v-dc04488c="" class="font-bold">Wordpress Installation</h2>
            <p data-v-dc04488c="" class="py-10px"> If you have a wordpress site, we recommend this installation. Download and install our plugin using their instructions manual. In order for this to work, please make sure you have given us the correct <a data-v-dc04488c="" href="https://app.pulsem.me/settings/?tab=branding#napw">link to your page</a>. </p>
            <button data-v-dc04488c="" class="btn btn-blue w-auto"> Wordpress Instructions </button>
         </div>
      </div>
      <div data-v-dc04488c="" class="widgets w-full flex">
         <div data-v-dc04488c="" class="w-1/3 p-10px">
            <h2 data-v-dc04488c="" class="font-bold">1. Google Structured Data</h2>
            <p data-v-dc04488c="" class="py-10px"> Google Structured Data is the fancy term Google came up with which is basically them asking you <strong data-v-dc04488c="">"Let us read your website!"</strong>. The better your structured data, the better they can read the details of your business from your website. This helps you because more potential customers can find you with organic searches. <a data-v-dc04488c="" href="https://developers.google.com/search/docs/guides/intro-structured-data">Want to learn more?</a> Google Structured Data is enabled by default. </p>
         </div>
         <div data-v-dc04488c="" class="w-1/3 p-10px">
            <h2 data-v-dc04488c="" class="font-bold">2. My Dot</h2>
            <p data-v-dc04488c="" class="py-10px"> A floating button for your website, lead generator, game changer. Your dot will give anyone visiting your website quick access to the best reviews you've gotten, your social media, and most importantly, a way to contact you without even closing the dot. </p>
            <button data-v-dc04488c="" class="btn btn-blue w-auto">
               <svg data-v-dc04488c="" class="svg-inline--fa fa-arrow-up-right-from-square" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-up-right-from-square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path class="" fill="currentColor" d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h82.7L201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3V192c0 17.7 14.3 32 32 32s32-14.3 32-32V32c0-17.7-14.3-32-32-32H320zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z"></path>
               </svg>
               My Dot Settings
            </button>
         </div>
         <div data-v-dc04488c="" class="w-1/3 p-10px">
            <h2 data-v-dc04488c="" class="font-bold">3. Web Chat</h2>
            <p data-v-dc04488c="" class="py-10px"> A powerful lead generator. This invites website visitors to chat with you, providing another convenience for potential customers to contact you for service or support. With our Two-way Messaging platform, you are able to convert these leads and provide support on all communication from one place! In order to enable, please contact your Customer Success Manager or email at <a data-v-dc04488c="" class="text-blue-400 hover:underline" href="mailto:support@pulsem.me">support@pulsem.me</a></p>
         </div>
      </div>
      <!----><!----><!----><!----><!---->
   </div>
</div>
<?= $this->endsection('content')?>