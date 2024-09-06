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
<div class="sidebarRightContentWrap">
    <div class="profile-info p-25px bg-white rounded-4px hover:shadow flex flex-col items-stretch">
        <div class="flex justify-between items-center mb-20px">
            <h1 class="text-30px font-light">Profile &amp; Preferences</h1>
            <div class="password relative">
                <button class="flex">
                    <svg class="svg-inline--fa fa-ellipsis-vertical text-blue-500 text-2xl" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-vertical" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512">
                    <path class="" fill="currentColor" d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z"></path>
                    </svg>
                </button>
                <!---->
            </div>
        </div>
        <?php foreach ($admin as $adminid){ ?> 
         <form action="<?= base_url('/user-preferences/update/'.$adminid['id']) ?>" method="post">
            <div class="name flex flex-col items-start mb-15px">
                <p class="mb-10px text-20px text-light">Name</p>
                <div class="inputs grid grid-cols-2 gap-20px">
                    <input class="py-8px px-15px border hover:border-blue-500 focus:border-blue-500 outline-none rounded-4px" type="text" name="first_name" id="first_name" placeholder="First" value = "<?= esc($adminid['first_name'])?>">
                    <input class="py-8px px-15px border hover:border-blue-500 focus:border-blue-500 outline-none rounded-4px" type="text" name="last_name" id="last_name" placeholder="Last"value = "<?= esc($adminid['last_name'])?>">
                </div>
            </div>
            <div class="contact flex flex-col items-start mb-15px">
                <p class="mb-10px text-20px text-light">Contact Information</p>
                <div class="inputs grid grid-cols-2 gap-20px">
                    <input class="py-8px px-15px border hover:border-blue-500 focus:border-blue-500 outline-none rounded-4px" type="email" name="email" id="email" placeholder="Email " value="<?= esc($adminid['email'])?>">
                </div>
            </div>
            <div class="save flex justify-end">
                <button type="submit" class="btn btn-blue">Save Profile</button>
            </div>
        </form>
        <?php } ?>
    </div>
</div>
<?= $this->endsection('content') ?>