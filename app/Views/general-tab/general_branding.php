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
<div class="p-25px branding">
   <div data-v-79091fe0="" class="main grid xl:grid-cols-2 gap-20px">
      <div data-v-79091fe0="" class="card bg-white rounded-4px p-4 shadow flex flex-col items-stretch">
         <div class="headline mb-30px">
            <h1 class="text-2rem font-light">Name, Address, Phone and Website</h1>
            <p class="subheadline text-sm text-gray-500">These changes will reflect on your default campaign.</p>
         </div>
         <div class="row mb-25px flex w-full">
            <div class="input-group flex flex-col w-full"><label for="companyName">Company Name</label><input type="text" name="companyName" id="companyName"></div>
         </div>
         <div class="row mb-25px flex <md:flex-col w-full">
            <div class="input-group flex flex-col md:w-2/3 md:mr-20px <md:mb-25px"><label for="companyAddress">Company Address</label><input type="text" name="companyAddress" id="companyAddress"></div>
            <div class="input-group flex flex-col md:w-1/3"><label for="city">City</label><input type="text" name="city" id="city"></div>
         </div>
         <div class="row mb-25px flex <md:flex-col w-full">
            <div class="input-group flex flex-col md:w-1/3 <md:mb-25px"><label for="state">State</label><input type="text" name="state" id="state"></div>
            <div class="input-group flex flex-col md:w-1/3 md:mx-20px <md:mb-25px"><label for="country">Country</label><input type="text" name="country" id="country"></div>
            <div class="input-group flex flex-col md:w-1/3"><label for="zip">Zipcode</label><input type="text" name="zip" id="zip"></div>
         </div>
         <div class="row mb-25px flex w-full">
            <div class="input-group flex flex-col w-2/3"><label for="phone">Company Phone Number</label><input type="tel" name="phone" id="phone"></div>
         </div>
         <div class="row mb-25px flex w-full">
            <div class="input-group flex flex-col w-2/3"><label for="website">Company Website</label><input type="tel" name="website" id="website"></div>
         </div>
         <div class="row flex w-full">
            <button class="btn btn-green mr-10px font-light">
               <svg class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                  <path class="" fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                  </path>
               </svg>
               Save Changes
            </button>
            <button class="btn btn-gray font-light">Cancel</button>
         </div>
      </div>
      <div data-v-79091fe0="" class="card bg-white rounded-4px p-4 shadow flex flex-col items-stretch">
         <div class="headline mb-30px">
            <h1 class="text-2rem font-light">Logo &amp; Color</h1>
         </div>
         <div class="row mb-25px flex <md:flex-col w-full">
            <div class="column w-full flex flex-col justify-start items-start mr-20px">
               <div class="headline my-10px">
                  <h2>Logo Image</h2>
                  <p class="subheadline text-sm text-gray-500">This change will reflect on your default campaign.
                  </p>
               </div>
               <div class="brand-img min-h-100px min-w-200px p-20px my-10px overflow-hidden flex justify-center items-center" style="background-color: rgb(255, 255, 255);"><img src="https://kiliassets.speetra.com/prod/account_images/15407/logo/1709862934_original.png" alt="Uploaded Image"></div>
               <div class="buttons flex flex-col">
                  <button class="btn btn-blue my-7px">
                     <svg class="svg-inline--fa fa-upload" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="upload" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path class="" fill="currentColor" d="M288 109.3V352c0 17.7-14.3 32-32 32s-32-14.3-32-32V109.3l-73.4 73.4c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l128-128c12.5-12.5 32.8-12.5 45.3 0l128 128c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L288 109.3zM64 352H192c0 35.3 28.7 64 64 64s64-28.7 64-64H448c35.3 0 64 28.7 64 64v32c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V416c0-35.3 28.7-64 64-64zM432 456a24 24 0 1 0 0-48 24 24 0 1 0 0 48z">
                        </path>
                     </svg>
                     I have the Image File 
                  </button>
                  <input id="logo-upload" hidden="" type="file">
               </div>
            </div>
            <div class="column w-full flex flex-col justify-start items-start">
               <div class="headline my-10px">
                  <h2>Logo Background Color</h2>
               </div>
               <div class="color-wheel">
                  <div class="vacp-color-picker" style="--vacp-hsl-h: 0; --vacp-hsl-s: 0; --vacp-hsl-l: 1; --vacp-hsl-a: 1;">
                     <div class="vacp-color-space" style="position: relative; background-color: hsl(calc(var(--vacp-hsl-h) * 360) 100% 50%); background-image: linear-gradient(to top, rgb(0, 0, 0), transparent), linear-gradient(to right, rgb(255, 255, 255), transparent);">
                        <div class="vacp-color-space-thumb" tabindex="0" aria-label="Color space thumb" style="box-sizing: border-box; position: absolute; left: 0%; bottom: 100%;"></div>
                     </div>
                     <div class="vacp-range-input-group">
                        <label class="vacp-range-input-label vacp-range-input-label--hue" for="color-picker-hue-slider"><span class="vacp-range-input-label-text vacp-range-input-label-text--hue">Hue</span><input id="color-picker-hue-slider" class="vacp-range-input vacp-range-input--hue" type="range" min="0" max="360" step="1"></label><!--v-if-->
                     </div>
                     <button class="vacp-copy-button" type="button">
                        <span class="vacp-visually-hidden">Copy
                        color</span>
                        <svg class="vacp-icon" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" width="24" height="24" viewBox="0 0 32 32">
                           <path d="M25.313 28v-18.688h-14.625v18.688h14.625zM25.313 6.688c1.438 0 2.688 1.188 2.688 2.625v18.688c0 1.438-1.25 2.688-2.688 2.688h-14.625c-1.438 0-2.688-1.25-2.688-2.688v-18.688c0-1.438 1.25-2.625 2.688-2.625h14.625zM21.313 1.313v2.688h-16v18.688h-2.625v-18.688c0-1.438 1.188-2.688 2.625-2.688h16z" fill="currentColor"></path>
                        </svg>
                     </button>
                     <div class="vacp-color-inputs">
                        <div class="vacp-color-input-group"><label class="vacp-color-input-label" for="color-picker-color-hex"><span class="vacp-color-input-label-text"> Hex
                           </span><input id="color-picker-color-hex" class="vacp-color-input" type="text"></label>
                        </div>
                        <button class="vacp-format-switch-button" type="button">
                           <span class="vacp-visually-hidden">Switch format</span>
                           <svg class="vacp-icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="16" height="15">
                              <path d="M8 15l5-5-1-1-4 2-4-2-1 1zm4-9l1-1-5-5-5 5 1 1 4-2z" fill="currentColor"></path>
                           </svg>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row mb-25px flex w-full">
            <button class="btn btn-green mr-10px">
               <svg class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                  <path class="" fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z">
                  </path>
               </svg>
               Save Logo and Color
            </button>
            <button class="btn btn-gray font-light">Cancel</button>
         </div>
         <!---->
      </div>
   </div>
</div>
<?= $this->endsection('content') ?>