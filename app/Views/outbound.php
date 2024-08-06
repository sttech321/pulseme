
<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
    <div class="headerTop">
    <div class="dropMenuWrap flexBetween">
        <div class="pageNameWrap">
            <h3 class="secTitle">Logs</h3>
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
        <div class="sidebarRightContent">
            <div class="flex-grow flex flex-col items-stretch bg-gray-100 h-auto">
                <div class="sub-menu-bar flex flex-col items-stretch h-full">
                    <div class="p-20px bg-white">
                        <h2 class="text-2xl">Logs</h2>
                    </div>
                    <div class="px-15px bg-white flex justify-start items-center"><a href="/logs/outbound" class="border-b-2 border-blue-500 router-link-exact-active p-10px" aria-current="page">Outbound</a><a href="/logs/opt-outs" class="p-10px">Opt-Outs</a><a href="/logs/api-tasks" class="p-10px">Api Tasks</a><a href="/logs/api-tasks-v2" class="p-10px">Api Tasks v2</a><a href="/logs/email-jobs" class="p-10px">Email Jobs</a><a href="/logs/sms-jobs" class="p-10px">SMS Jobs</a></div>
                    <div class="flex-grow pt-3">
                        <div class="p-20px bg-white rounded-4px shadow w-full">
                            <div class="relative w-full flex justify-end items-center mb-20px" filename="outbound_logs_2024-07-05T15:14:00.667Z"><button><svg class="svg-inline--fa fa-bars text-xl text-gray-400 hover:text-blue-500" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path class="" fill="currentColor" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"></path>
                                    </svg></button><!----></div>
                            <div class="filter flex justify-end items-baseline mb-20px"><svg class="svg-inline--fa fa-calendar-day" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="calendar-day" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path class="" fill="currentColor" d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm80 64c-8.8 0-16 7.2-16 16v96c0 8.8 7.2 16 16 16h96c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80z"></path>
                                </svg>
                                <p class="font-bold">From</p><input min="2021-06-30" class="p-1" type="date" name="" id="">
                                <p class="font-bold">To</p><input class="p-1" type="date" name="" id=""><button class="btn btn-blue"><svg class="svg-inline--fa fa-rotate pr-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="rotate" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path class="" fill="currentColor" d="M142.9 142.9c62.2-62.2 162.7-62.5 225.3-1L327 183c-6.9 6.9-8.9 17.2-5.2 26.2s12.5 14.8 22.2 14.8H463.5c0 0 0 0 0 0H472c13.3 0 24-10.7 24-24V72c0-9.7-5.8-18.5-14.8-22.2s-19.3-1.7-26.2 5.2L413.4 96.6c-87.6-86.5-228.7-86.2-315.8 1C73.2 122 55.6 150.7 44.8 181.4c-5.9 16.7 2.9 34.9 19.5 40.8s34.9-2.9 40.8-19.5c7.7-21.8 20.2-42.3 37.8-59.8zM16 312v7.6 .7V440c0 9.7 5.8 18.5 14.8 22.2s19.3 1.7 26.2-5.2l41.6-41.6c87.6 86.5 228.7 86.2 315.8-1c24.4-24.4 42.1-53.1 52.9-83.7c5.9-16.7-2.9-34.9-19.5-40.8s-34.9 2.9-40.8 19.5c-7.7 21.8-20.2 42.3-37.8 59.8c-62.2 62.2-162.7 62.5-225.3 1L185 329c6.9-6.9 8.9-17.2 5.2-26.2s-12.5-14.8-22.2-14.8H48.4h-.7H40c-13.3 0-24 10.7-24 24z"></path>
                                    </svg>Update </button>
                            </div>
                            <div class="flex justify-between items-center mb-20px">
                                <div class="flex justify-start items-center p-10px border border-gray-300 rounded-4px w-300px"><svg class="svg-inline--fa fa-magnifying-glass mr-10px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path class="" fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                                    </svg><input class="!outline-none !border-none w-full !ring-transparent p-0" type="search" name="search" id="search" placeholder="Search"></div>
                                <div class="flex justify-between items-center"><button class="btn btn-blue mr-10px">Pull next 500 logs</button>
                                    <p class="px-16px py-8px border rounded-4px">Loaded 500 of 750 entries</p>
                                </div>
                            </div>
                            <div class="flex flex-col w-full overflow-x-auto items-stretch">
                                <table class="mb-15px">
                                    <thead>
                                        <tr>
                                            <th class="text-left px-20px py-10px cursor-pointer">ID <!----></th>
                                            <th class="text-left px-20px py-10px cursor-pointer">Date <svg class="svg-inline--fa fa-angle-down" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path class="" fill="currentColor" d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path>
                                                </svg></th>
                                            <th class="text-left px-20px py-10px cursor-pointer">Customer <!----></th>
                                            <th class="text-left px-20px py-10px cursor-pointer">Channel <!----></th>
                                            <th class="text-left px-20px py-10px cursor-pointer">Service <!----></th>
                                            <th class="text-left px-20px py-10px cursor-pointer">Status <!----></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="!bg-opacity-50 odd:bg-sky-100">
                                            <td class="px-20px py-15px">e_77374799</td>
                                            <td class="px-20px py-15px">Fri, 05 Jul 2024 15:58:51 GMT</td>
                                            <td class="px-20px py-15px">Tara Eisenbeis</td>
                                            <td class="px-20px py-15px">tarakastnerm@hotmail.com</td>
                                            <td class="px-20px py-15px">pulseCheck</td>
                                            <td class="px-20px py-15px">Not Sent</td>
                                        </tr>
                                        <tr class="!bg-opacity-50 odd:bg-sky-100">
                                            <td class="px-20px py-15px">s_77745610</td>
                                            <td class="px-20px py-15px">Fri, 05 Jul 2024 15:58:51 GMT</td>
                                            <td class="px-20px py-15px">Tara Eisenbeis</td>
                                            <td class="px-20px py-15px">+17273326960</td>
                                            <td class="px-20px py-15px">pulseCheck</td>
                                            <td class="px-20px py-15px">Sent</td>
                                        </tr>
                                        <tr class="!bg-opacity-50 odd:bg-sky-100">
                                            <td class="px-20px py-15px">s_77742294</td>
                                            <td class="px-20px py-15px">Fri, 05 Jul 2024 15:30:45 GMT</td>
                                            <td class="px-20px py-15px">Beachtime Rentals</td>
                                            <td class="px-20px py-15px">+18134847433</td>
                                            <td class="px-20px py-15px">Contact Card After pulseCheck</td>
                                            <td class="px-20px py-15px">Sent</td>
                                        </tr>
                                        <tr class="!bg-opacity-50 odd:bg-sky-100">
                                            <td class="px-20px py-15px">s_77741811</td>
                                            <td class="px-20px py-15px">Fri, 05 Jul 2024 15:25:20 GMT</td>
                                            <td class="px-20px py-15px">Debbie Morroney</td>
                                            <td class="px-20px py-15px">+19417302572</td>
                                            <td class="px-20px py-15px">Contact Card After pulseCheck</td>
                                            <td class="px-20px py-15px">Sent</td>
                                        </tr>
                                        <tr class="!bg-opacity-50 odd:bg-sky-100">
                                            <td class="px-20px py-15px">e_77371614</td>
                                            <td class="px-20px py-15px">Fri, 05 Jul 2024 15:25:19 GMT</td>
                                            <td class="px-20px py-15px"></td>
                                            <td class="px-20px py-15px">caitlyn.seidel@halesac.com</td>
                                            <td class="px-20px py-15px">pulseCheck Notification</td>
                                            <td class="px-20px py-15px">Sent</td>
                                        </tr>
                                        <tr class="!bg-opacity-50 odd:bg-sky-100">
                                            <td class="px-20px py-15px">s_77741546</td>
                                            <td class="px-20px py-15px">Fri, 05 Jul 2024 15:23:53 GMT</td>
                                            <td class="px-20px py-15px">Debbie Morroney</td>
                                            <td class="px-20px py-15px">+19417302572</td>
                                            <td class="px-20px py-15px">Adhoc</td>
                                            <td class="px-20px py-15px">Sent</td>
                                        </tr>
                                        <tr class="!bg-opacity-50 odd:bg-sky-100">
                                            <td class="px-20px py-15px">e_77371297</td>
                                            <td class="px-20px py-15px">Fri, 05 Jul 2024 15:23:23 GMT</td>
                                            <td class="px-20px py-15px"></td>
                                            <td class="px-20px py-15px">caitlyn.seidel@halesac.com</td>
                                            <td class="px-20px py-15px">Social Media Notification</td>
                                            <td class="px-20px py-15px">Sent</td>
                                        </tr>
                                        <tr class="!bg-opacity-50 odd:bg-sky-100">
                                            <td class="px-20px py-15px">s_77741035</td>
                                            <td class="px-20px py-15px">Fri, 05 Jul 2024 15:19:19 GMT</td>
                                            <td class="px-20px py-15px">Larry morroney </td>
                                            <td class="px-20px py-15px">+19417302568</td>
                                            <td class="px-20px py-15px">Contact Card After pulseCheck</td>
                                            <td class="px-20px py-15px">Sent</td>
                                        </tr>
                                        <tr class="!bg-opacity-50 odd:bg-sky-100">
                                            <td class="px-20px py-15px">s_77738995</td>
                                            <td class="px-20px py-15px">Fri, 05 Jul 2024 14:59:38 GMT</td>
                                            <td class="px-20px py-15px">Beachtime Rentals</td>
                                            <td class="px-20px py-15px">+18134847433</td>
                                            <td class="px-20px py-15px">pulseCheck</td>
                                            <td class="px-20px py-15px">Sent</td>
                                        </tr>
                                        <tr class="!bg-opacity-50 odd:bg-sky-100">
                                            <td class="px-20px py-15px">e_77369319</td>
                                            <td class="px-20px py-15px">Fri, 05 Jul 2024 14:59:38 GMT</td>
                                            <td class="px-20px py-15px">Beachtime Rentals</td>
                                            <td class="px-20px py-15px">reservations@beachtimerentals.com</td>
                                            <td class="px-20px py-15px">pulseCheck</td>
                                            <td class="px-20px py-15px">Sent</td>
                                        </tr>
                                        <tr class="!bg-opacity-50 odd:bg-sky-100">
                                            <td class="px-20px py-15px">s_77738743</td>
                                            <td class="px-20px py-15px">Fri, 05 Jul 2024 14:57:20 GMT</td>
                                            <td class="px-20px py-15px">Tom Byerbic</td>
                                            <td class="px-20px py-15px">+17279340323</td>
                                            <td class="px-20px py-15px">Contact Card After pulseCheck</td>
                                            <td class="px-20px py-15px">Sent</td>
                                        </tr>
                                        <tr class="!bg-opacity-50 odd:bg-sky-100">
                                            <td class="px-20px py-15px">e_77369007</td>
                                            <td class="px-20px py-15px">Fri, 05 Jul 2024 14:55:37 GMT</td>
                                            <td class="px-20px py-15px">Rick Hendrickson</td>
                                            <td class="px-20px py-15px">rick_hendrickson@msn.com</td>
                                            <td class="px-20px py-15px">Bio</td>
                                            <td class="px-20px py-15px">Sent</td>
                                        </tr>
                                        <tr class="!bg-opacity-50 odd:bg-sky-100">
                                            <td class="px-20px py-15px">s_77738606</td>
                                            <td class="px-20px py-15px">Fri, 05 Jul 2024 14:55:37 GMT</td>
                                            <td class="px-20px py-15px">Rick Hendrickson</td>
                                            <td class="px-20px py-15px">+17274805641</td>
                                            <td class="px-20px py-15px">Bio</td>
                                            <td class="px-20px py-15px">Sent</td>
                                        </tr>
                                        <tr class="!bg-opacity-50 odd:bg-sky-100">
                                            <td class="px-20px py-15px">e_77368860</td>
                                            <td class="px-20px py-15px">Fri, 05 Jul 2024 14:54:20 GMT</td>
                                            <td class="px-20px py-15px">Debbie Morroney</td>
                                            <td class="px-20px py-15px">morroney@aol.com</td>
                                            <td class="px-20px py-15px">pulseCheck</td>
                                            <td class="px-20px py-15px">Sent</td>
                                        </tr>
                                        <tr class="!bg-opacity-50 odd:bg-sky-100">
                                            <td class="px-20px py-15px">s_77738447</td>
                                            <td class="px-20px py-15px">Fri, 05 Jul 2024 14:54:19 GMT</td>
                                            <td class="px-20px py-15px">Debbie Morroney</td>
                                            <td class="px-20px py-15px">+19417302572</td>
                                            <td class="px-20px py-15px">pulseCheck</td>
                                            <td class="px-20px py-15px">Sent</td>
                                        </tr>
                                        <tr class="!bg-opacity-50 odd:bg-sky-100">
                                            <td class="px-20px py-15px">e_77368510</td>
                                            <td class="px-20px py-15px">Fri, 05 Jul 2024 14:52:13 GMT</td>
                                            <td class="px-20px py-15px"></td>
                                            <td class="px-20px py-15px">caitlyn.seidel@halesac.com</td>
                                            <td class="px-20px py-15px">pulseCheck Notification</td>
                                            <td class="px-20px py-15px">Sent</td>
                                        </tr>
                                        <tr class="!bg-opacity-50 odd:bg-sky-100">
                                            <td class="px-20px py-15px">e_77368340</td>
                                            <td class="px-20px py-15px">Fri, 05 Jul 2024 14:50:16 GMT</td>
                                            <td class="px-20px py-15px"></td>
                                            <td class="px-20px py-15px">caitlyn.seidel@halesac.com</td>
                                            <td class="px-20px py-15px">Social Media Notification</td>
                                            <td class="px-20px py-15px">Sent</td>
                                        </tr>
                                        <tr class="!bg-opacity-50 odd:bg-sky-100">
                                            <td class="px-20px py-15px">s_77737649</td>
                                            <td class="px-20px py-15px">Fri, 05 Jul 2024 14:48:06 GMT</td>
                                            <td class="px-20px py-15px">Larry morroney </td>
                                            <td class="px-20px py-15px">+19417302568</td>
                                            <td class="px-20px py-15px">pulseCheck</td>
                                            <td class="px-20px py-15px">Sent</td>
                                        </tr>
                                        <tr class="!bg-opacity-50 odd:bg-sky-100">
                                            <td class="px-20px py-15px">s_77735665</td>
                                            <td class="px-20px py-15px">Fri, 05 Jul 2024 14:26:33 GMT</td>
                                            <td class="px-20px py-15px">Terry Cross</td>
                                            <td class="px-20px py-15px">+19412430242</td>
                                            <td class="px-20px py-15px">Bio</td>
                                            <td class="px-20px py-15px">Sent</td>
                                        </tr>
                                        <tr class="!bg-opacity-50 odd:bg-sky-100">
                                            <td class="px-20px py-15px">e_77366593</td>
                                            <td class="px-20px py-15px">Fri, 05 Jul 2024 14:26:33 GMT</td>
                                            <td class="px-20px py-15px">Terry Cross</td>
                                            <td class="px-20px py-15px">terryc@wcmanagment.info</td>
                                            <td class="px-20px py-15px">Bio</td>
                                            <td class="px-20px py-15px">Sent</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="pagination flex justify-between items-center">
                                    <div class="pagination-links grid grid-rows-1 grid-flow-col gap-5px"><button class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100"><svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path class="" fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                            </svg></button><button class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100" disabled=""><svg class="svg-inline--fa fa-caret-left" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                                                <path class="" fill="currentColor" d="M9.4 278.6c-12.5-12.5-12.5-32.8 0-45.3l128-128c9.2-9.2 22.9-11.9 34.9-6.9s19.8 16.6 19.8 29.6l0 256c0 12.9-7.8 24.6-19.8 29.6s-25.7 2.2-34.9-6.9l-128-128z"></path>
                                            </svg></button><button class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-blue-500 text-white">1</button><button class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100">2</button><button class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100">3</button><button class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100">4</button><button class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100">5</button><button class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100"><svg class="svg-inline--fa fa-caret-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                                                <path class="" fill="currentColor" d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z"></path>
                                            </svg></button><button class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100"><svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path class="" fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                            </svg></button></div>
                                    <div class="display-pages px-30px py-7px border rounded-full"> Showing 1 to 20 of 500 entries </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- page-content" -->
</div>
<!-- page-wrapper -->
<?= $this->endsection('content') ?>