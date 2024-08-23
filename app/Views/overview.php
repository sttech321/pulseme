<!-- app/Views/reviews.php -->
<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
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

<!-- <div class="container-fluid"> -->
<div class="sidebarRightContentWrap">
    <div class="flex-grow flex flex-col items-stretch bg-gray-100 h-auto">
        <div class="center w-full p-25px">
            <div class="grid grid-cols-2 gap-4 w-full max-w-960px m-auto">
                <div class="bg-white rounded m-auto p-6 w-full col-span-2">
                    <div class="top flex justify-between items-center mb-2">
                        <div class="title flex items-center">
                            <svg class="svg-inline--fa fa-compass w-36px h-auto" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="compass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    class=""
                                    fill="currentColor"
                                    d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm50.7-186.9L162.4 380.6c-19.4 7.5-38.5-11.6-31-31l55.5-144.3c3.3-8.5 9.9-15.1 18.4-18.4l144.3-55.5c19.4-7.5 38.5 11.6 31 31L325.1 306.7c-3.2 8.5-9.9 15.1-18.4 18.4zM288 256a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"></path>
                            </svg>
                            <h2 class="mx-3 text-2xl antialiased font-light">Reviews &amp; Ratings Growth</h2>
                            <p class="text-lg -mb-1 antialiased">Google, Last Year</p>
                        </div>
                        <div class="relative">
                            <svg
                                class="svg-inline--fa fa-ellipsis-vertical fa-xl cursor-pointer text-blue-500"
                                aria-hidden="true"
                                focusable="false"
                                data-prefix="fas"
                                data-icon="ellipsis-vertical"
                                role="img"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 128 512">
                                <path class="" fill="currentColor" d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z"></path>
                            </svg>
                            <!---->
                        </div>
                    </div>
                    <?= view('layouts/rating-growth-chart') ?>
                </div>
                <div class="bg-white rounded p-6 flex flex-col">
                    <div class="top flex items-center mb-6">
                        <div class="title flex items-center">
                            <svg class="svg-inline--fa fa-comments w-42px h-auto text-blue-500" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="comments" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                <path
                                    class=""
                                    fill="currentColor"
                                    d="M208 352c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176c0 38.6 14.7 74.3 39.6 103.4c-3.5 9.4-8.7 17.7-14.2 24.7c-4.8 6.2-9.7 11-13.3 14.3c-1.8 1.6-3.3 2.9-4.3 3.7c-.5 .4-.9 .7-1.1 .8l-.2 .2 0 0 0 0C1 327.2-1.4 334.4 .8 340.9S9.1 352 16 352c21.8 0 43.8-5.6 62.1-12.5c9.2-3.5 17.8-7.4 25.3-11.4C134.1 343.3 169.8 352 208 352zM448 176c0 112.3-99.1 196.9-216.5 207C255.8 457.4 336.4 512 432 512c38.2 0 73.9-8.7 104.7-23.9c7.5 4 16 7.9 25.2 11.4c18.3 6.9 40.3 12.5 62.1 12.5c6.9 0 13.1-4.5 15.2-11.1c2.1-6.6-.2-13.8-5.8-17.9l0 0 0 0-.2-.2c-.2-.2-.6-.4-1.1-.8c-1-.8-2.5-2-4.3-3.7c-3.6-3.3-8.5-8.1-13.3-14.3c-5.5-7-10.7-15.4-14.2-24.7c24.9-29 39.6-64.7 39.6-103.4c0-92.8-84.9-168.9-192.6-175.5c.4 5.1 .6 10.3 .6 15.5z"></path>
                            </svg>
                            <h2 class="mx-3 text-2xl antialiased font-light">Reviews</h2>
                        </div>
                    </div>
                    <div class="flex flex-col flex-grow items-stretch">
                        <div class="count mb-4">
                            <h3><span class="font-bold text-60px mr-2">578</span><span class="text-xl antialiased">Total Reviews</span></h3>
                        </div>
                        <div class="flex flex-col flex-grow justify-center items-stretch">
                            <div class="flex items-center mb-2">
                                <div class="w-40px flex justify-center mr-10px">
                                    <svg class="svg-inline--fa fa-google platform-logo w-auto h-30px" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
                                        <path
                                            class=""
                                            fill="currentColor"
                                            d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path>
                                    </svg>
                                </div>
                                <div class="flex flex-col w-full">
                                    <p class="antialiased">578 (+ 141 since joining)</p>
                                    <div class="rounded-lg bg-gray-300 relative overflow-hidden h-12px">
                                        <div class="absolute h-12px bg-blue-500 left-0 top-0 rounded-r-lg z-2" style="width: 67.5%;"></div>
                                        <div class="absolute h-12px bg-green-500 left-0 top-0 rounded-r-lg z-1" style="width: 97.5%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center mb-2">
                                <div class="w-40px flex justify-center mr-10px">
                                    <svg
                                        class="svg-inline--fa fa-facebook-f platform-logo w-auto h-30px"
                                        aria-hidden="true"
                                        focusable="false"
                                        data-prefix="fab"
                                        data-icon="facebook-f"
                                        role="img"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 320 512">
                                        <path
                                            class=""
                                            fill="currentColor"
                                            d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
                                    </svg>
                                </div>
                                <div class="flex flex-col w-full">
                                    <p class="antialiased">0 (+ -55 since joining)</p>
                                    <div class="rounded-lg bg-gray-300 relative overflow-hidden h-12px">
                                        <div class="absolute h-12px bg-blue-500 left-0 top-0 rounded-r-lg z-2" style="width: 100%;"></div>
                                        <div class="absolute h-12px bg-green-500 left-0 top-0 rounded-r-lg z-1" style="width: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded p-6 flex flex-col">
                    <div class="top flex items-center mb-6">
                        <div class="title flex items-center">
                            <svg class="svg-inline--fa fa-star w-42px h-auto text-blue-500" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path
                                    class=""
                                    fill="currentColor"
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                            </svg>
                            <h2 class="mx-3 text-2xl antialiased font-light">Ratings</h2>
                        </div>
                    </div>
                    <div class="flex flex-col flex-grow items-stretch">
                        <div class="count mb-4">
                            <h3><span class="font-bold text-60px mr-2">4.6</span><span class="text-xl antialiased">Overall Rating</span></h3>
                        </div>
                        <div class="flex flex-col flex-grow justify-center items-stretch">
                            <div class="flex items-center mb-2">
                                <div class="w-40px flex justify-center mr-10px">
                                    <svg class="svg-inline--fa fa-google platform-logo w-auto h-30px" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
                                        <path
                                            class=""
                                            fill="currentColor"
                                            d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path>
                                    </svg>
                                </div>
                                <div class="flex flex-col w-full">
                                    <p class="antialiased">4.6 (+ 0.1 since joining)</p>
                                    <div class="rounded-lg bg-gray-300 relative overflow-hidden h-12px">
                                        <div class="absolute h-12px bg-blue-500 left-0 top-0 rounded-r-lg z-2" style="width: 100%;"></div>
                                        <div class="absolute h-12px bg-green-500 left-0 top-0 rounded-r-lg z-1" style="width: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center mb-2">
                                <div class="w-40px flex justify-center mr-10px">
                                    <svg
                                        class="svg-inline--fa fa-facebook-f platform-logo w-auto h-30px"
                                        aria-hidden="true"
                                        focusable="false"
                                        data-prefix="fab"
                                        data-icon="facebook-f"
                                        role="img"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 320 512">
                                        <path
                                            class=""
                                            fill="currentColor"
                                            d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
                                    </svg>
                                </div>
                                <div class="flex flex-col w-full">
                                    <p class="antialiased">0 (+ -4.8 since joining)</p>
                                    <div class="rounded-lg bg-gray-300 relative overflow-hidden h-12px">
                                        <div class="absolute h-12px bg-blue-500 left-0 top-0 rounded-r-lg z-2" style="width: 100%;"></div>
                                        <div class="absolute h-12px bg-green-500 left-0 top-0 rounded-r-lg z-1" style="width: 100%;"></div>
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
<?= $this->endSection() ?>