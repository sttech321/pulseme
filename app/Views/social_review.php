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
   <div class="p-20px bg-white">
         <h2 class="text-2xl">Reviews</h2>
      </div>
      <div class="px-15px bg-white flex justify-start items-center">
         <a href="/analyze/reviews" class="border-b-2 border-blue-500 router-link-exact-active p-10px" aria-current="page">Reviews</a>
         <a href="/analyze/reviews/social-reviews" class="p-10px">Social Reviews</a>
      </div>
</div>
<!-- <div class="container-fluid"> -->
<div class="sidebarRightContent">
<div class="flex-grow flex flex-col items-stretch bg-gray-100 h-auto">
<div class="sub-menu-bar flex flex-col items-stretch h-full">
   <div class="bg-white p-25px rounded hover:shadow transition-shadow duration-150">
   <div class="flex justify-between items-center">
      <h1 class="text-3xl mb-6">
         <svg class="svg-inline--fa fa-message text-3xl mr-5px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="message" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="color: rgb(52, 144, 220);">
            <path class="" fill="currentColor" d="M64 0C28.7 0 0 28.7 0 64V352c0 35.3 28.7 64 64 64h96v80c0 6.1 3.4 11.6 8.8 14.3s11.9 2.1 16.8-1.5L309.3 416H448c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64z"></path>
         </svg>
         Social Reviews
      </h1>
      <div class="relative">
         <button class="p-10px">
            <svg class="svg-inline--fa fa-ellipsis-vertical text-32px text-blue-500" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-vertical" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512">
               <path class="" fill="currentColor" d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z"></path>
            </svg>
         </button>
         <!---->
      </div>
   </div>
   <div class="flex"><button class="btn btn-blue rounded-full mr-3">Give Credit</button><a href="https://business.google.com/reviews" target="_blank" class="btn border rounded-full text-gray-500">Google Reply</a></div>
</div>


</div>
<h1>hgggjhg</h1>
<?= $this->endsection('content') ?>