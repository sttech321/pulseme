<!-- app/Views/reviews.php -->
<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<style>
    i.fa.fa-star {
        font-size: 24px;
        color: #f09737;
    }
</style>
<div class="headerTop">
    <div class="dropMenuWrap flexBetween">
        <div class="pageNameWrap">
            <h3 class="secTitle">Dispatching </h3>
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
        <div data-v-1ee66579="" class="dispatch">
            <!-- <header data-v-1ee66579="" class="w-full h-[100px] bg-white flex items-center pl-4">
                <h1 data-v-1ee66579="" class="text-2xl">Dispatching</h1>
            </header> -->
            <div data-v-1ee66579="" class="wrap py-20px text-sm">
                <div data-v-04366469="" data-v-1ee66579="" id="panel-contain" class="grid grid-cols-3 <lg:grid-cols-1 grid-flow-row auto-rows-auto gap-x-5 gap-y-8 h-full relative">
                    <div data-v-04366469="" class="flex justify-between items-center col-span-3 <lg:col-span-1">
                        <p data-v-04366469="" class=""></p>
                        <div data-v-04366469="" class="filter flex justify-end items-baseline">
                            <svg class="svg-inline--fa fa-calendar-day mr-3" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="calendar-day" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path class="" fill="currentColor" d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm80 64c-8.8 0-16 7.2-16 16v96c0 8.8 7.2 16 16 16h96c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80z"></path>
                            </svg>
                            <p class="font-bold mr-3">From</p>
                            <input min="2024-01-31" class="p-1" type="date" name="" id="" />
                            <p class="font-bold mx-10">To</p>
                            <input class="p-1 mr-3" type="date" name="" id="" />
                            <button class="btn btn-blue">
                                <svg class="svg-inline--fa fa-rotate pr-1 " aria-hidden="true" focusable="false" data-prefix="fas" data-icon="rotate" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path class="" fill="currentColor" d="M142.9 142.9c62.2-62.2 162.7-62.5 225.3-1L327 183c-6.9 6.9-8.9 17.2-5.2 26.2s12.5 14.8 22.2 14.8H463.5c0 0 0 0 0 0H472c13.3 0 24-10.7 24-24V72c0-9.7-5.8-18.5-14.8-22.2s-19.3-1.7-26.2 5.2L413.4 96.6c-87.6-86.5-228.7-86.2-315.8 1C73.2 122 55.6 150.7 44.8 181.4c-5.9 16.7 2.9 34.9 19.5 40.8s34.9-2.9 40.8-19.5c7.7-21.8 20.2-42.3 37.8-59.8zM16 312v7.6 .7V440c0 9.7 5.8 18.5 14.8 22.2s19.3 1.7 26.2-5.2l41.6-41.6c87.6 86.5 228.7 86.2 315.8-1c24.4-24.4 42.1-53.1 52.9-83.7c5.9-16.7-2.9-34.9-19.5-40.8s-34.9 2.9-40.8 19.5c-7.7 21.8-20.2 42.3-37.8 59.8c-62.2 62.2-162.7 62.5-225.3 1L185 329c6.9-6.9 8.9-17.2 5.2-26.2s-12.5-14.8-22.2-14.8H48.4h-.7H40c-13.3 0-24 10.7-24 24z"></path>
                                </svg>
                                Update
                            </button>
                        </div>
                    </div>
                    <div data-v-ecf6f3dc="" data-v-04366469="">
                        <div data-v-4c587d70="" data-v-ecf6f3dc="" class="panel bg-white w-full h-full flex flex-col items-stretch col-span-1">
                            <div data-v-4c587d70="" class="panel-header">Customer Engagement</div>
                            <div data-v-4c587d70="" class="panel-body flex-grow flex flex-col justify-center items-stretch">
                                <table data-v-ecf6f3dc="" class="my-4 w-full border-collapse text-gray-500 text-sm">
                                    <tbody data-v-ecf6f3dc="">
                                        <tr data-v-ecf6f3dc="" class="alternate-row flex items-center">
                                            <td data-v-ecf6f3dc="" class="p-1 h-20 flex items-center">
                                                <img data-v-ecf6f3dc="" class="w-35px h-35px ml-2" src="data:image/png;base64,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" />
                                            </td>
                                            <td data-v-ecf6f3dc="" class="p-1 h-20 flex items-center">
                                                <div data-v-ecf6f3dc="" class="text-xl ml-2 font-bold">211</div>
                                            </td>
                                            <td data-v-ecf6f3dc="" class="flex items-center justify-between p-1 h-20">
                                                <div data-v-ecf6f3dc="" class="flex items-center">
                                                    <div data-v-ecf6f3dc="" class="ml-2 text-sm">pulseCheck Participant Count</div>
                                                    <div data-v-ecf6f3dc="" class="relative">
                                                        <img data-v-ecf6f3dc="" class="w-15px h-15px text-gray-200 ml-2" src="/assets/circle-info-regular-891f9a39.svg" />
                                                        <div data-v-ecf6f3dc="" class="absolute z-10 w-64 p-2 mt-2 text-sm bg-white border rounded shadow-md" style="display: none;">the number of pulseChecks that were submitted</div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr data-v-ecf6f3dc="" class="flex items-center">
                                            <td data-v-ecf6f3dc="" class="p-1 h-20 flex items-center">
                                                <img data-v-ecf6f3dc="" class="w-35px h-35px ml-2" src="data:image/png;base64,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" />
                                            </td>
                                            <td data-v-ecf6f3dc="" class="p-1 h-20 flex items-center">
                                                <div data-v-ecf6f3dc="" class="text-xl ml-2 font-bold">8.9</div>
                                            </td>
                                            <td data-v-ecf6f3dc="" class="flex items-center justify-between p-1 h-20">
                                                <div data-v-ecf6f3dc="" class="flex items-center">
                                                    <div data-v-ecf6f3dc="" class="ml-2 text-sm">pulseM Index</div>
                                                    <div data-v-ecf6f3dc="" class="relative">
                                                        <img data-v-ecf6f3dc="" class="w-15px h-15px text-gray-200 ml-2" src="/assets/circle-info-regular-891f9a39.svg" />
                                                        <div data-v-ecf6f3dc="" class="absolute z-10 w-64 p-2 mt-2 text-sm bg-white border rounded shadow-md" style="display: none;">
                                                            average of the overall review rating for all reviews in the date range
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr data-v-ecf6f3dc="" class="alternate-row flex items-center">
                                            <td data-v-ecf6f3dc="" class="p-1 h-20 flex items-center">
                                                <img data-v-ecf6f3dc="" class="w-35px h-35px ml-2" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAhCAYAAABX5MJvAAAABmJLR0QA/wD/AP+gvaeTAAAFbklEQVRYw7VXW2wUVRjeKkhAMNrEB2OiyIuJEUMkXkh8MPqgCGJntovxSi87s21DS9udmW01hkndOWdboI0VxRpFNAimaZXEuirUdme3F+glWKTFB1vCTaVp0nsk8XL8zmwpadidzkI7yZ85M3PO/3/z/ZfzH5crhUtSjXWSSqu9Cmn0quSEV6MDlqh0QFKMdlkl38gKqfGVk4dcC3nJct1SWaPvSAppkzQyifuQpJII5JBXI+95tVANAHyA91/w9wByFvcJSTM6pQAp1XV9yU0B8Cmh12XV6IaBMSgNg4EiWddX2K3x6PptshLyAchRgBvF2h4pYGxN2ThHj8UfQybhgt5clT5/Iz+Rp1U+brGmkFGvatRxgI4WvqHsuh2UNmPxGO4UgG65GTY9nvpbZTVoQNcI5PvCwtplThj4AQAu5/ppwYLGlj+4DXr/lBT6I4+zpBO9Cv2cM+BTjTddi3Ahi16B/mHIR4kn+CtFfBxHRNc6VcratqxiUfFnFnPnOAai0SrEx2ieQoU5H0pKqpcjv0/yIOI+dAwiKhZDGIsJ4VRixKsYJmz1zklfFJ4yvJySSsnmVOgFgO8gIywm/s6inrsdx0c5eUJWjHH8eNFVVWm8sADI0ZQAdHjSYfwii7rrmSmOYbwzteobPAa3dFoPOcVkAyL2ihwg+SmBMMWdlvEWz4Ngw4T8lBoImsXrULYfJd7aC1RyKatYvzMlEDGhGRKZGVMwMsJOeB5wur5A11ciBC7ANnVJGm3CntCS0FAkM5uZQhTSCyM9cRFPQwYgExAj7prN92I8DPkN7JzB/dp8U+iAHEjCRivf9PigE4OvEoJo2bIJCoeg+ArSsBvjg/B9nSVRsZa1elbOzm13F137JhyAHLGCNipOgam9CUHEN72oCwB+4ftEUtq7X10DRRH8zQgzM3YzNn8ZZ9HMZ8FCP8CfBZg8m5qxDySc5oNBviXbKg1vXAZl+8HGOMBEAOqehPOYK43FMnUYH2am+yQ7nrHeNjgDtBpMnOHuOAUQnzgLRrEAAM5BuhIzIOyB8UncDyGFl8+bIehDEJh9Lqsj0sjhFFITBUqIJQbh3gOAl1hs012O0hR2EQ7HXbJmNPEodQSg58UVMAI/ix/Gn+WlzMwM8LiJA/SsBRNTLOIuclYryDHYbsAgtEtW6R+5JXq6gzKdZWVKm/AUMmMdntshf1sBaLp3zDDVjbhpnE9Xjla5Ciych1S6tgdCa4Fo2knFZBHhMOKiDwbfjseGMIB3EtzwLWQK4MK4NyCAf+Us2e4fGt3OK+Y2f8X6q7R0IS6abQEgNWHgFIxftig3xa9Zx3Pps1kRFcshF+L7ifgPAL40T1CGfbxGzKJSaQl8Y7uLsnZhA5SjaImDAJOQNdb68sOYE4P8i3lJMy7Hb2zkLCAz3prb1qGhlRVqJmvReW2AfMZaM1bbMtb69BIWzagAW0k6bOza8ea367o2T/LT1/BhnOeuaxEvtHi7sYVPgH1PshPWPt5jAsjWRQGgkWzot9p/29MWJvXz09UiAbjIu3nbFhLtFj85TWNB7sKZZ2noKas4A2iewryPSI50h/EIJg4hYpv5Qv4uv6xmDW968pR3n7kx/5MX+FZtuViln9oykFdGV2NiH3eFHAjdl11sPMrPBpBzXuucYEzjHMobkPzCQv0OO8P8u6QES/lpC7E1yc+yPo2I87fgGg6tKvlvprfotzpv7j+V1Of6g/ejM1Z58wNAf+HdJUgbxl8i0usw/32M92JtPcBGMD6Pbm0aa2K8Djg8fyJvuSIt1AglDQC0X1aCxdfvJZjnr3iMpxj+sAlGOzhzMDQ4A74LQI+g1lR5SyufTMVt/wOcl5ZpJqKG3AAAAABJRU5ErkJggg==" />
                                            </td>
                                            <td data-v-ecf6f3dc="" class="p-1 h-20 flex items-center">
                                                <div data-v-ecf6f3dc="" class="text-xl ml-2 font-bold">102</div>
                                            </td>
                                            <td data-v-ecf6f3dc="" class="flex items-center justify-between p-1 h-20">
                                                <div data-v-ecf6f3dc="" class="flex items-center">
                                                    <div data-v-ecf6f3dc="" class="ml-2 text-sm">Review Leads Generated</div>
                                                    <div data-v-ecf6f3dc="" class="relative">
                                                        <img data-v-ecf6f3dc="" class="w-15px h-15px text-gray-200 ml-2" src="/assets/circle-info-regular-891f9a39.svg" />
                                                        <div data-v-ecf6f3dc="" class="absolute z-10 w-64 p-2 mt-2 text-sm bg-white border rounded shadow-md" style="display: none;">
                                                            represents the number of customers routed to one of your social media pages from the pulseCheck
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div data-v-4c587d70="" class="panel-footer"></div>
                        </div>
                    </div>
                    <div data-v-4065c71e="" data-v-04366469="">
                        <div data-v-4c587d70="" data-v-4065c71e="" class="panel bg-white w-full h-full flex flex-col items-stretch col-span-1">
                            <div data-v-4c587d70="" class="panel-header">Ratings</div>
                            <div data-v-4c587d70="" class="panel-body flex-grow flex flex-col justify-center items-stretch">
                                <table data-v-4065c71e="" class="my-4 w-full border-collapse text-gray-500 text-sm">
                                    <tbody data-v-4065c71e="">
                                        <tr data-v-4065c71e="" class="alternate-row">
                                            <td data-v-4065c71e="" class="flex items-center justify-between p-1 h-20">
                                                <div data-v-4065c71e="">
                                                    <div data-v-4065c71e="" class="text-xl ml-2 font-bold"><?= $ratepoint2 ?></div>
                                                    <div data-v-4065c71e="" class="ml-2 text-sm"><?= $ratetext2 ?></div>
                                                </div>
                                                <div data-v-4065c71e="" class="flex justify-evenly items-center">
                                                    <?= $starRating2 ?>
                                                    <!-- <div class="flex text-xl relative">
                                                        <svg class="svg-inline--fa fa-star icon-style text-lg text-gray-300" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                            <path class="" fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                                        </svg>
                                                        <svg class="svg-inline--fa fa-star icon-style text-lg text-gray-300" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                            <path class="" fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                                        </svg>
                                                        <svg class="svg-inline--fa fa-star icon-style text-lg text-gray-300" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                            <path class="" fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                                        </svg>
                                                        <svg class="svg-inline--fa fa-star icon-style text-lg text-gray-300" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                            <path class="" fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                                        </svg>
                                                        <svg class="svg-inline--fa fa-star icon-style text-lg text-gray-300" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                            <path class="" fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                                        </svg>
                                                        <div class="flex absolute overflow-hidden text-xl top-0 left-0" style="width: 94%; color: rgb(240, 151, 55);">
                                                            <svg class="svg-inline--fa fa-star icon-style text-xl" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                                <path class="" fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                                            </svg>
                                                            <svg class="svg-inline--fa fa-star icon-style text-xl" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                                <path class="" fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                                            </svg>
                                                            <svg class="svg-inline--fa fa-star icon-style text-xl" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                                <path class="" fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                                            </svg>
                                                            <svg class="svg-inline--fa fa-star icon-style text-xl" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                                <path class="" fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                                            </svg>
                                                            <svg class="svg-inline--fa fa-star icon-style text-xl" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                                <path class="" fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                                            </svg>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr data-v-4065c71e="" class="">
                                            <td data-v-4065c71e="" class="flex items-center justify-between p-1 h-20">
                                                <div data-v-4065c71e="">
                                                    <div data-v-4065c71e="" class="text-xl ml-2 font-bold"><?= $ratepoint1 ?></div>
                                                    <div data-v-4065c71e="" class="ml-2 text-sm"><?= $ratetext1 ?></div>
                                                </div>
                                                <div data-v-4065c71e="" class="flex justify-evenly items-center">
                                                    <?= $starRating1 ?>
                                                    <!-- <div class="flex text-xl relative">
                                                        <svg class="svg-inline--fa fa-star icon-style text-lg text-gray-300" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                            <path class="" fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                                        </svg>
                                                        <svg class="svg-inline--fa fa-star icon-style text-lg text-gray-300" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                            <path class="" fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                                        </svg>
                                                        <svg class="svg-inline--fa fa-star icon-style text-lg text-gray-300" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                            <path class="" fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                                        </svg>
                                                        <svg class="svg-inline--fa fa-star icon-style text-lg text-gray-300" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                            <path class="" fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                                        </svg>
                                                        <svg class="svg-inline--fa fa-star icon-style text-lg text-gray-300" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                            <path class="" fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                                        </svg>
                                                        <div class="flex absolute overflow-hidden text-xl top-0 left-0" style="width: 92%; color: rgb(240, 151, 55);">
                                                            <svg class="svg-inline--fa fa-star icon-style text-xl" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                                <path class="" fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                                            </svg>
                                                            <svg class="svg-inline--fa fa-star icon-style text-xl" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                                <path class="" fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                                            </svg>
                                                            <svg class="svg-inline--fa fa-star icon-style text-xl" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                                <path class="" fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                                            </svg>
                                                            <svg class="svg-inline--fa fa-star icon-style text-xl" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                                <path class="" fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                                            </svg>
                                                            <svg class="svg-inline--fa fa-star icon-style text-xl" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                                <path class="" fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                                            </svg>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr data-v-4065c71e="" class="alternate-row">
                                            <td data-v-4065c71e="" class="flex items-center justify-between p-1 h-20">
                                                <div data-v-4065c71e="">
                                                    <div data-v-4065c71e="" class="text-xl ml-2 font-bold"><?= $ratepoint3 ?></div>
                                                    <div data-v-4065c71e="" class="ml-2 text-sm"><?= $ratetext3 ?></div>
                                                </div>
                                                <div data-v-4065c71e="" class="flex justify-evenly items-center">
                                                    <?= $starRating3 ?>
                                                    <!-- <div class="flex text-xl relative">
                                                        <svg class="svg-inline--fa fa-star icon-style text-lg text-gray-300" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                            <path class="" fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                                        </svg>
                                                        <svg class="svg-inline--fa fa-star icon-style text-lg text-gray-300" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                            <path class="" fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                                        </svg>
                                                        <svg class="svg-inline--fa fa-star icon-style text-lg text-gray-300" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                            <path class="" fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                                        </svg>
                                                        <svg class="svg-inline--fa fa-star icon-style text-lg text-gray-300" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                            <path class="" fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                                        </svg>
                                                        <svg class="svg-inline--fa fa-star icon-style text-lg text-gray-300" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                            <path class="" fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                                        </svg>
                                                        <div class="flex absolute overflow-hidden text-xl top-0 left-0" style="width: 92%; color: rgb(240, 151, 55);">
                                                            <svg class="svg-inline--fa fa-star icon-style text-xl" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                                <path class="" fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                                            </svg>
                                                            <svg class="svg-inline--fa fa-star icon-style text-xl" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                                <path class="" fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                                            </svg>
                                                            <svg class="svg-inline--fa fa-star icon-style text-xl" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                                <path class="" fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                                            </svg>
                                                            <svg class="svg-inline--fa fa-star icon-style text-xl" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                                <path class="" fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                                            </svg>
                                                            <svg class="svg-inline--fa fa-star icon-style text-xl" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                                <path class="" fill="currentColor" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"></path>
                                                            </svg>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div data-v-4c587d70="" class="panel-footer"></div>
                        </div>
                    </div>
                    <div data-v-b59c33b2="" data-v-04366469="">
                        <div data-v-4c587d70="" data-v-b59c33b2="" class="panel bg-white w-full h-full flex flex-col items-stretch col-span-1">
                            <div data-v-4c587d70="" class="panel-header">Customer Sentiment</div>
                            <div data-v-4c587d70="" class="panel-body flex-grow flex flex-col justify-center items-stretch">
                                <table data-v-b59c33b2="" class="my-4 w-full border-collapse text-gray-500 text-sm">
                                    <tbody data-v-b59c33b2="">
                                        <tr data-v-b59c33b2="" class="alternate-row">
                                            <td data-v-b59c33b2="" class="flex items-center justify-between p-1 h-20">
                                                <div data-v-b59c33b2="">
                                                    <div data-v-b59c33b2="" class="text-xl ml-2 font-bold"><?= $happyPercentage ?>%</div>
                                                    <div data-v-b59c33b2="" class="ml-2 text-sm">Happy Customer Count</div>
                                                </div>
                                                <div data-v-b59c33b2="" class="flex justify-evenly items-center">
                                                    <div class="flex text-xl relative">
                                                        <svg class="svg-inline--fa fa-face-smile icon-style text-lg text-gray-300" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-smile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM164.1 325.5C182 346.2 212.6 368 256 368s74-21.8 91.9-42.5c5.8-6.7 15.9-7.4 22.6-1.6s7.4 15.9 1.6 22.6C349.8 372.1 311.1 400 256 400s-93.8-27.9-116.1-53.5c-5.8-6.7-5.1-16.8 1.6-22.6s16.8-5.1 22.6 1.6zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                                                        </svg>
                                                        <svg class="svg-inline--fa fa-face-smile icon-style text-lg text-gray-300" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-smile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM164.1 325.5C182 346.2 212.6 368 256 368s74-21.8 91.9-42.5c5.8-6.7 15.9-7.4 22.6-1.6s7.4 15.9 1.6 22.6C349.8 372.1 311.1 400 256 400s-93.8-27.9-116.1-53.5c-5.8-6.7-5.1-16.8 1.6-22.6s16.8-5.1 22.6 1.6zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                                                        </svg>
                                                        <svg class="svg-inline--fa fa-face-smile icon-style text-lg text-gray-300" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-smile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM164.1 325.5C182 346.2 212.6 368 256 368s74-21.8 91.9-42.5c5.8-6.7 15.9-7.4 22.6-1.6s7.4 15.9 1.6 22.6C349.8 372.1 311.1 400 256 400s-93.8-27.9-116.1-53.5c-5.8-6.7-5.1-16.8 1.6-22.6s16.8-5.1 22.6 1.6zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                                                        </svg>
                                                        <svg class="svg-inline--fa fa-face-smile icon-style text-lg text-gray-300" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-smile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM164.1 325.5C182 346.2 212.6 368 256 368s74-21.8 91.9-42.5c5.8-6.7 15.9-7.4 22.6-1.6s7.4 15.9 1.6 22.6C349.8 372.1 311.1 400 256 400s-93.8-27.9-116.1-53.5c-5.8-6.7-5.1-16.8 1.6-22.6s16.8-5.1 22.6 1.6zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                                                        </svg>
                                                        <svg class="svg-inline--fa fa-face-smile icon-style text-lg text-gray-300" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-smile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM164.1 325.5C182 346.2 212.6 368 256 368s74-21.8 91.9-42.5c5.8-6.7 15.9-7.4 22.6-1.6s7.4 15.9 1.6 22.6C349.8 372.1 311.1 400 256 400s-93.8-27.9-116.1-53.5c-5.8-6.7-5.1-16.8 1.6-22.6s16.8-5.1 22.6 1.6zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                                                        </svg>
                                                        <div class="flex absolute overflow-hidden text-xl top-0 left-0" style="width: 95.7%; color: rgb(82, 179, 101);">
                                                            <svg class="svg-inline--fa fa-face-smile icon-style text-xl" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-smile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM164.1 325.5C182 346.2 212.6 368 256 368s74-21.8 91.9-42.5c5.8-6.7 15.9-7.4 22.6-1.6s7.4 15.9 1.6 22.6C349.8 372.1 311.1 400 256 400s-93.8-27.9-116.1-53.5c-5.8-6.7-5.1-16.8 1.6-22.6s16.8-5.1 22.6 1.6zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                                                            </svg>
                                                            <svg class="svg-inline--fa fa-face-smile icon-style text-xl" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-smile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM164.1 325.5C182 346.2 212.6 368 256 368s74-21.8 91.9-42.5c5.8-6.7 15.9-7.4 22.6-1.6s7.4 15.9 1.6 22.6C349.8 372.1 311.1 400 256 400s-93.8-27.9-116.1-53.5c-5.8-6.7-5.1-16.8 1.6-22.6s16.8-5.1 22.6 1.6zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                                                            </svg>
                                                            <svg class="svg-inline--fa fa-face-smile icon-style text-xl" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-smile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM164.1 325.5C182 346.2 212.6 368 256 368s74-21.8 91.9-42.5c5.8-6.7 15.9-7.4 22.6-1.6s7.4 15.9 1.6 22.6C349.8 372.1 311.1 400 256 400s-93.8-27.9-116.1-53.5c-5.8-6.7-5.1-16.8 1.6-22.6s16.8-5.1 22.6 1.6zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                                                            </svg>
                                                            <svg class="svg-inline--fa fa-face-smile icon-style text-xl" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-smile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM164.1 325.5C182 346.2 212.6 368 256 368s74-21.8 91.9-42.5c5.8-6.7 15.9-7.4 22.6-1.6s7.4 15.9 1.6 22.6C349.8 372.1 311.1 400 256 400s-93.8-27.9-116.1-53.5c-5.8-6.7-5.1-16.8 1.6-22.6s16.8-5.1 22.6 1.6zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                                                            </svg>
                                                            <svg class="svg-inline--fa fa-face-smile icon-style text-xl" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-smile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM164.1 325.5C182 346.2 212.6 368 256 368s74-21.8 91.9-42.5c5.8-6.7 15.9-7.4 22.6-1.6s7.4 15.9 1.6 22.6C349.8 372.1 311.1 400 256 400s-93.8-27.9-116.1-53.5c-5.8-6.7-5.1-16.8 1.6-22.6s16.8-5.1 22.6 1.6zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- <tr data-v-b59c33b2="" class="">
                                            <td data-v-b59c33b2="" class="flex items-center justify-between p-1 h-20">
                                                <div data-v-b59c33b2="">
                                                    <div data-v-b59c33b2="" class="text-xl ml-2 font-bold">0.9%</div>
                                                    <div data-v-b59c33b2="" class="ml-2 text-sm">Neutral Customer Count</div>
                                                </div> -->
                                        <!-- <div data-v-b59c33b2="" class="flex justify-evenly items-center"> -->
                                        <!-- <div class="flex text-xl relative">
                                                        <svg class="svg-inline--fa fa-face-meh icon-style text-lg text-gray-300" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-meh" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM176.4 176a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm128 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM160 336H352c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"></path>
                                                        </svg>
                                                        <svg class="svg-inline--fa fa-face-meh icon-style text-lg text-gray-300" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-meh" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM176.4 176a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm128 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM160 336H352c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"></path>
                                                        </svg>
                                                        <svg class="svg-inline--fa fa-face-meh icon-style text-lg text-gray-300" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-meh" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM176.4 176a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm128 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM160 336H352c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"></path>
                                                        </svg>
                                                        <svg class="svg-inline--fa fa-face-meh icon-style text-lg text-gray-300" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-meh" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM176.4 176a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm128 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM160 336H352c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"></path>
                                                        </svg>
                                                        <svg class="svg-inline--fa fa-face-meh icon-style text-lg text-gray-300" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-meh" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM176.4 176a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm128 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM160 336H352c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"></path>
                                                        </svg>
                                                        <div class="flex absolute overflow-hidden text-xl top-0 left-0" style="width: 0.9%; color: rgb(240, 151, 55);">
                                                            <svg class="svg-inline--fa fa-face-meh icon-style text-xl" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-meh" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM176.4 176a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm128 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM160 336H352c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"></path>
                                                            </svg>
                                                            <svg class="svg-inline--fa fa-face-meh icon-style text-xl" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-meh" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM176.4 176a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm128 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM160 336H352c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"></path>
                                                            </svg>
                                                            <svg class="svg-inline--fa fa-face-meh icon-style text-xl" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-meh" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM176.4 176a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm128 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM160 336H352c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"></path>
                                                            </svg>
                                                            <svg class="svg-inline--fa fa-face-meh icon-style text-xl" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-meh" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM176.4 176a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm128 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM160 336H352c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"></path>
                                                            </svg>
                                                            <svg class="svg-inline--fa fa-face-meh icon-style text-xl" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-meh" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM176.4 176a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm128 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM160 336H352c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"></path>
                                                            </svg>
                                                        </div>
                                                    </div> -->
                                        <!-- </div>
                                            </td>
                                        </tr> -->
                                        <tr data-v-b59c33b2="" class="alternate-row">
                                            <td data-v-b59c33b2="" class="flex items-center justify-between p-1 h-20">
                                                <div data-v-b59c33b2="">
                                                    <div data-v-b59c33b2="" class="text-xl ml-2 font-bold"><?= $unhappyPercentage ?>%</div>
                                                    <div data-v-b59c33b2="" class="ml-2 text-sm">Unhappy Customer Count</div>
                                                </div>
                                                <div data-v-b59c33b2="" class="flex justify-evenly items-center">
                                                    <div class="flex text-xl relative">
                                                        <svg class="svg-inline--fa fa-face-angry icon-style text-lg text-gray-300" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-angry" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path class="" fill="currentColor" d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM338.7 395.9c6.6-5.9 7.1-16 1.2-22.6C323.8 355.4 295.7 336 256 336s-67.8 19.4-83.9 37.3c-5.9 6.6-5.4 16.7 1.2 22.6s16.7 5.4 22.6-1.2c11.7-13 31.6-26.7 60.1-26.7s48.4 13.7 60.1 26.7c5.9 6.6 16 7.1 22.6 1.2zM176.4 272c17.7 0 32-14.3 32-32c0-1.5-.1-3-.3-4.4l10.9 3.6c8.4 2.8 17.4-1.7 20.2-10.1s-1.7-17.4-10.1-20.2l-96-32c-8.4-2.8-17.4 1.7-20.2 10.1s1.7 17.4 10.1 20.2l30.7 10.2c-5.8 5.8-9.3 13.8-9.3 22.6c0 17.7 14.3 32 32 32zm192-32c0-8.9-3.6-17-9.5-22.8l30.2-10.1c8.4-2.8 12.9-11.9 10.1-20.2s-11.9-12.9-20.2-10.1l-96 32c-8.4 2.8-12.9 11.9-10.1 20.2s11.9 12.9 20.2 10.1l11.7-3.9c-.2 1.5-.3 3.1-.3 4.7c0 17.7 14.3 32 32 32s32-14.3 32-32z"></path>
                                                        </svg>
                                                        <svg class="svg-inline--fa fa-face-angry icon-style text-lg text-gray-300" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-angry" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path class="" fill="currentColor" d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM338.7 395.9c6.6-5.9 7.1-16 1.2-22.6C323.8 355.4 295.7 336 256 336s-67.8 19.4-83.9 37.3c-5.9 6.6-5.4 16.7 1.2 22.6s16.7 5.4 22.6-1.2c11.7-13 31.6-26.7 60.1-26.7s48.4 13.7 60.1 26.7c5.9 6.6 16 7.1 22.6 1.2zM176.4 272c17.7 0 32-14.3 32-32c0-1.5-.1-3-.3-4.4l10.9 3.6c8.4 2.8 17.4-1.7 20.2-10.1s-1.7-17.4-10.1-20.2l-96-32c-8.4-2.8-17.4 1.7-20.2 10.1s1.7 17.4 10.1 20.2l30.7 10.2c-5.8 5.8-9.3 13.8-9.3 22.6c0 17.7 14.3 32 32 32zm192-32c0-8.9-3.6-17-9.5-22.8l30.2-10.1c8.4-2.8 12.9-11.9 10.1-20.2s-11.9-12.9-20.2-10.1l-96 32c-8.4 2.8-12.9 11.9-10.1 20.2s11.9 12.9 20.2 10.1l11.7-3.9c-.2 1.5-.3 3.1-.3 4.7c0 17.7 14.3 32 32 32s32-14.3 32-32z"></path>
                                                        </svg>
                                                        <svg class="svg-inline--fa fa-face-angry icon-style text-lg text-gray-300" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-angry" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path class="" fill="currentColor" d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM338.7 395.9c6.6-5.9 7.1-16 1.2-22.6C323.8 355.4 295.7 336 256 336s-67.8 19.4-83.9 37.3c-5.9 6.6-5.4 16.7 1.2 22.6s16.7 5.4 22.6-1.2c11.7-13 31.6-26.7 60.1-26.7s48.4 13.7 60.1 26.7c5.9 6.6 16 7.1 22.6 1.2zM176.4 272c17.7 0 32-14.3 32-32c0-1.5-.1-3-.3-4.4l10.9 3.6c8.4 2.8 17.4-1.7 20.2-10.1s-1.7-17.4-10.1-20.2l-96-32c-8.4-2.8-17.4 1.7-20.2 10.1s1.7 17.4 10.1 20.2l30.7 10.2c-5.8 5.8-9.3 13.8-9.3 22.6c0 17.7 14.3 32 32 32zm192-32c0-8.9-3.6-17-9.5-22.8l30.2-10.1c8.4-2.8 12.9-11.9 10.1-20.2s-11.9-12.9-20.2-10.1l-96 32c-8.4 2.8-12.9 11.9-10.1 20.2s11.9 12.9 20.2 10.1l11.7-3.9c-.2 1.5-.3 3.1-.3 4.7c0 17.7 14.3 32 32 32s32-14.3 32-32z"></path>
                                                        </svg>
                                                        <svg class="svg-inline--fa fa-face-angry icon-style text-lg text-gray-300" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-angry" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path class="" fill="currentColor" d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM338.7 395.9c6.6-5.9 7.1-16 1.2-22.6C323.8 355.4 295.7 336 256 336s-67.8 19.4-83.9 37.3c-5.9 6.6-5.4 16.7 1.2 22.6s16.7 5.4 22.6-1.2c11.7-13 31.6-26.7 60.1-26.7s48.4 13.7 60.1 26.7c5.9 6.6 16 7.1 22.6 1.2zM176.4 272c17.7 0 32-14.3 32-32c0-1.5-.1-3-.3-4.4l10.9 3.6c8.4 2.8 17.4-1.7 20.2-10.1s-1.7-17.4-10.1-20.2l-96-32c-8.4-2.8-17.4 1.7-20.2 10.1s1.7 17.4 10.1 20.2l30.7 10.2c-5.8 5.8-9.3 13.8-9.3 22.6c0 17.7 14.3 32 32 32zm192-32c0-8.9-3.6-17-9.5-22.8l30.2-10.1c8.4-2.8 12.9-11.9 10.1-20.2s-11.9-12.9-20.2-10.1l-96 32c-8.4 2.8-12.9 11.9-10.1 20.2s11.9 12.9 20.2 10.1l11.7-3.9c-.2 1.5-.3 3.1-.3 4.7c0 17.7 14.3 32 32 32s32-14.3 32-32z"></path>
                                                        </svg>
                                                        <svg class="svg-inline--fa fa-face-angry icon-style text-lg text-gray-300" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-angry" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path class="" fill="currentColor" d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM338.7 395.9c6.6-5.9 7.1-16 1.2-22.6C323.8 355.4 295.7 336 256 336s-67.8 19.4-83.9 37.3c-5.9 6.6-5.4 16.7 1.2 22.6s16.7 5.4 22.6-1.2c11.7-13 31.6-26.7 60.1-26.7s48.4 13.7 60.1 26.7c5.9 6.6 16 7.1 22.6 1.2zM176.4 272c17.7 0 32-14.3 32-32c0-1.5-.1-3-.3-4.4l10.9 3.6c8.4 2.8 17.4-1.7 20.2-10.1s-1.7-17.4-10.1-20.2l-96-32c-8.4-2.8-17.4 1.7-20.2 10.1s1.7 17.4 10.1 20.2l30.7 10.2c-5.8 5.8-9.3 13.8-9.3 22.6c0 17.7 14.3 32 32 32zm192-32c0-8.9-3.6-17-9.5-22.8l30.2-10.1c8.4-2.8 12.9-11.9 10.1-20.2s-11.9-12.9-20.2-10.1l-96 32c-8.4 2.8-12.9 11.9-10.1 20.2s11.9 12.9 20.2 10.1l11.7-3.9c-.2 1.5-.3 3.1-.3 4.7c0 17.7 14.3 32 32 32s32-14.3 32-32z"></path>
                                                        </svg>
                                                        <div class="flex absolute overflow-hidden text-xl top-0 left-0" style="width: 3.3%; color: rgb(237, 52, 52);">
                                                            <svg class="svg-inline--fa fa-face-angry icon-style text-xl" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-angry" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path class="" fill="currentColor" d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM338.7 395.9c6.6-5.9 7.1-16 1.2-22.6C323.8 355.4 295.7 336 256 336s-67.8 19.4-83.9 37.3c-5.9 6.6-5.4 16.7 1.2 22.6s16.7 5.4 22.6-1.2c11.7-13 31.6-26.7 60.1-26.7s48.4 13.7 60.1 26.7c5.9 6.6 16 7.1 22.6 1.2zM176.4 272c17.7 0 32-14.3 32-32c0-1.5-.1-3-.3-4.4l10.9 3.6c8.4 2.8 17.4-1.7 20.2-10.1s-1.7-17.4-10.1-20.2l-96-32c-8.4-2.8-17.4 1.7-20.2 10.1s1.7 17.4 10.1 20.2l30.7 10.2c-5.8 5.8-9.3 13.8-9.3 22.6c0 17.7 14.3 32 32 32zm192-32c0-8.9-3.6-17-9.5-22.8l30.2-10.1c8.4-2.8 12.9-11.9 10.1-20.2s-11.9-12.9-20.2-10.1l-96 32c-8.4 2.8-12.9 11.9-10.1 20.2s11.9 12.9 20.2 10.1l11.7-3.9c-.2 1.5-.3 3.1-.3 4.7c0 17.7 14.3 32 32 32s32-14.3 32-32z"></path>
                                                            </svg>
                                                            <svg class="svg-inline--fa fa-face-angry icon-style text-xl" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-angry" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path class="" fill="currentColor" d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM338.7 395.9c6.6-5.9 7.1-16 1.2-22.6C323.8 355.4 295.7 336 256 336s-67.8 19.4-83.9 37.3c-5.9 6.6-5.4 16.7 1.2 22.6s16.7 5.4 22.6-1.2c11.7-13 31.6-26.7 60.1-26.7s48.4 13.7 60.1 26.7c5.9 6.6 16 7.1 22.6 1.2zM176.4 272c17.7 0 32-14.3 32-32c0-1.5-.1-3-.3-4.4l10.9 3.6c8.4 2.8 17.4-1.7 20.2-10.1s-1.7-17.4-10.1-20.2l-96-32c-8.4-2.8-17.4 1.7-20.2 10.1s1.7 17.4 10.1 20.2l30.7 10.2c-5.8 5.8-9.3 13.8-9.3 22.6c0 17.7 14.3 32 32 32zm192-32c0-8.9-3.6-17-9.5-22.8l30.2-10.1c8.4-2.8 12.9-11.9 10.1-20.2s-11.9-12.9-20.2-10.1l-96 32c-8.4 2.8-12.9 11.9-10.1 20.2s11.9 12.9 20.2 10.1l11.7-3.9c-.2 1.5-.3 3.1-.3 4.7c0 17.7 14.3 32 32 32s32-14.3 32-32z"></path>
                                                            </svg>
                                                            <svg class="svg-inline--fa fa-face-angry icon-style text-xl" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-angry" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path class="" fill="currentColor" d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM338.7 395.9c6.6-5.9 7.1-16 1.2-22.6C323.8 355.4 295.7 336 256 336s-67.8 19.4-83.9 37.3c-5.9 6.6-5.4 16.7 1.2 22.6s16.7 5.4 22.6-1.2c11.7-13 31.6-26.7 60.1-26.7s48.4 13.7 60.1 26.7c5.9 6.6 16 7.1 22.6 1.2zM176.4 272c17.7 0 32-14.3 32-32c0-1.5-.1-3-.3-4.4l10.9 3.6c8.4 2.8 17.4-1.7 20.2-10.1s-1.7-17.4-10.1-20.2l-96-32c-8.4-2.8-17.4 1.7-20.2 10.1s1.7 17.4 10.1 20.2l30.7 10.2c-5.8 5.8-9.3 13.8-9.3 22.6c0 17.7 14.3 32 32 32zm192-32c0-8.9-3.6-17-9.5-22.8l30.2-10.1c8.4-2.8 12.9-11.9 10.1-20.2s-11.9-12.9-20.2-10.1l-96 32c-8.4 2.8-12.9 11.9-10.1 20.2s11.9 12.9 20.2 10.1l11.7-3.9c-.2 1.5-.3 3.1-.3 4.7c0 17.7 14.3 32 32 32s32-14.3 32-32z"></path>
                                                            </svg>
                                                            <svg class="svg-inline--fa fa-face-angry icon-style text-xl" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-angry" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path class="" fill="currentColor" d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM338.7 395.9c6.6-5.9 7.1-16 1.2-22.6C323.8 355.4 295.7 336 256 336s-67.8 19.4-83.9 37.3c-5.9 6.6-5.4 16.7 1.2 22.6s16.7 5.4 22.6-1.2c11.7-13 31.6-26.7 60.1-26.7s48.4 13.7 60.1 26.7c5.9 6.6 16 7.1 22.6 1.2zM176.4 272c17.7 0 32-14.3 32-32c0-1.5-.1-3-.3-4.4l10.9 3.6c8.4 2.8 17.4-1.7 20.2-10.1s-1.7-17.4-10.1-20.2l-96-32c-8.4-2.8-17.4 1.7-20.2 10.1s1.7 17.4 10.1 20.2l30.7 10.2c-5.8 5.8-9.3 13.8-9.3 22.6c0 17.7 14.3 32 32 32zm192-32c0-8.9-3.6-17-9.5-22.8l30.2-10.1c8.4-2.8 12.9-11.9 10.1-20.2s-11.9-12.9-20.2-10.1l-96 32c-8.4 2.8-12.9 11.9-10.1 20.2s11.9 12.9 20.2 10.1l11.7-3.9c-.2 1.5-.3 3.1-.3 4.7c0 17.7 14.3 32 32 32s32-14.3 32-32z"></path>
                                                            </svg>
                                                            <svg class="svg-inline--fa fa-face-angry icon-style text-xl" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-angry" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <path class="" fill="currentColor" d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM338.7 395.9c6.6-5.9 7.1-16 1.2-22.6C323.8 355.4 295.7 336 256 336s-67.8 19.4-83.9 37.3c-5.9 6.6-5.4 16.7 1.2 22.6s16.7 5.4 22.6-1.2c11.7-13 31.6-26.7 60.1-26.7s48.4 13.7 60.1 26.7c5.9 6.6 16 7.1 22.6 1.2zM176.4 272c17.7 0 32-14.3 32-32c0-1.5-.1-3-.3-4.4l10.9 3.6c8.4 2.8 17.4-1.7 20.2-10.1s-1.7-17.4-10.1-20.2l-96-32c-8.4-2.8-17.4 1.7-20.2 10.1s1.7 17.4 10.1 20.2l30.7 10.2c-5.8 5.8-9.3 13.8-9.3 22.6c0 17.7 14.3 32 32 32zm192-32c0-8.9-3.6-17-9.5-22.8l30.2-10.1c8.4-2.8 12.9-11.9 10.1-20.2s-11.9-12.9-20.2-10.1l-96 32c-8.4 2.8-12.9 11.9-10.1 20.2s11.9 12.9 20.2 10.1l11.7-3.9c-.2 1.5-.3 3.1-.3 4.7c0 17.7 14.3 32 32 32s32-14.3 32-32z"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div data-v-4c587d70="" class="panel-footer"></div>
                        </div>
                    </div>
                    <p data-v-04366469="" class="col-span-3 <lg:col-span-1">Usage</p>
                    <div data-v-04366469="">
                        <div data-v-4c587d70="" class="panel bg-white w-full h-full flex flex-col items-stretch col-span-1">
                            <div data-v-4c587d70="" class="panel-header">Bios</div>
                            <div data-v-4c587d70="" class="panel-body flex-grow flex flex-col justify-center items-stretch">
                                <?= view('layouts/bios-chart') ?>
                            </div>
                            <div data-v-4c587d70="" class="panel-footer"></div>
                        </div>
                    </div>
                    <div data-v-1e6cb5de="" data-v-04366469="" class="">
                        <div data-v-4c587d70="" data-v-1e6cb5de="" class="panel bg-white w-full h-full flex flex-col items-stretch col-span-1">
                            <div data-v-4c587d70="" class="panel-header">pulseChecks</div>
                            <div data-v-4c587d70="" class="panel-body flex-grow flex flex-col justify-center items-stretch">
                                <?= view('layouts/pulse-check-chart') ?>
                            </div>
                            <div data-v-4c587d70="" class="panel-footer"></div>
                        </div>
                    </div>
                    <div data-v-6b4913b0="" data-v-04366469="">
                        <div data-v-4c587d70="" data-v-6b4913b0="" class="panel bg-white w-full h-full flex flex-col items-stretch col-span-1">
                            <div data-v-4c587d70="" class="panel-header">Contact Card</div>
                            <div data-v-4c587d70="" class="panel-body flex-grow flex flex-col justify-center items-stretch">
                                <div data-v-6b4913b0="" class="flex mt-[60px]">
                                    <div data-v-6b4913b0="" class="flex-grow w-1/2 border-right-2 -mt-10 pt-10">
                                        <div data-v-6b4913b0="" class="flex flex-col items-center">
                                            <div data-v-6b4913b0="" class="flex flex-col items-center justify-center">
                                                <div class="w-80px h-80px bg-gray-100 flex items-center justify-center"><img src="/image/mailicon.png" /></div>
                                                <p class="text-2xl font-bold">463</p>
                                                <p class="text-sm text-gray-500 text-center">
                                                    Number of<br data-v-6b4913b0="" />
                                                    Contact Cards Sent
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-6b4913b0="" class="flex-grow">
                                        <div data-v-6b4913b0="" class="mb-6 relative">
                                            <?= view('layouts/contact-card-chart') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-4c587d70="" class="panel-footer"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>