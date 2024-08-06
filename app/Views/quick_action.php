<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="headerTop">
                <div class="dropMenuWrap flexBetween">
                    <div class="pageNameWrap">
                        <h3 class="secTitle">Quick Actions</h3>
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
    <div class="sub-menu-bar flex flex-col items-stretch h-full">
    <div class="bg-white p-20px">
        <h2 class="text-2xl">Quick Actions</h2>
    </div>
    <div class="bg-white px-15px flex justify-start items-center"><a aria-current="page" href="/operate/dispatch"
            class="border-b-2 border-blue-500 router-link-exact-active p-10px" id="dispatch-link">Dispatch</a><a
            href="/operate/contact-card" class="p-10px" id="contact-card-link">Contact Card</a><a
            href="/operate/quick-actions" class="p-10px" id="quick-actions-link">Quick Actions</a>
    </div>
<?= $this->endsection('content') ?> 