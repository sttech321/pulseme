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

<!-- <div class="container-fluid"> -->
<div class="sidebarRightContentWrap">
<div class="flex-grow flex flex-col items-stretch bg-gray-100 h-auto">
    <div data-v-1ee66579="" class="dispatch">
        <header data-v-1ee66579="" class="w-full h-[100px] bg-white flex items-center pl-4"><h1 data-v-1ee66579="" class="text-2xl">Dispatching</h1></header>
        <div data-v-1ee66579="" class="wrap p-20px text-sm">
            <div data-v-04366469="" data-v-1ee66579="" id="panel-contain" class="grid grid-cols-3 <lg:grid-cols-1 grid-flow-row auto-rows-auto gap-x-5 gap-y-8 h-full relative">
                <div data-v-04366469="" class="flex justify-between items-center col-span-3 <lg:col-span-1">
                    <p data-v-04366469="" class="">Overview</p>
                    <div data-v-04366469="" class="filter flex justify-end items-baseline">
                        <svg class="svg-inline--fa fa-calendar-day" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="calendar-day" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path
                                class=""
                                fill="currentColor"
                                d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm80 64c-8.8 0-16 7.2-16 16v96c0 8.8 7.2 16 16 16h96c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80z"
                            ></path>
                        </svg>
                        <p class="font-bold">From</p>
                        <input min="2024-01-31" class="p-1" type="date" name="" id="" />
                        <p class="font-bold">To</p>
                        <input class="p-1" type="date" name="" id="" />
                        <button class="btn btn-blue">
                            <svg class="svg-inline--fa fa-rotate pr-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="rotate" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    class=""
                                    fill="currentColor"
                                    d="M142.9 142.9c62.2-62.2 162.7-62.5 225.3-1L327 183c-6.9 6.9-8.9 17.2-5.2 26.2s12.5 14.8 22.2 14.8H463.5c0 0 0 0 0 0H472c13.3 0 24-10.7 24-24V72c0-9.7-5.8-18.5-14.8-22.2s-19.3-1.7-26.2 5.2L413.4 96.6c-87.6-86.5-228.7-86.2-315.8 1C73.2 122 55.6 150.7 44.8 181.4c-5.9 16.7 2.9 34.9 19.5 40.8s34.9-2.9 40.8-19.5c7.7-21.8 20.2-42.3 37.8-59.8zM16 312v7.6 .7V440c0 9.7 5.8 18.5 14.8 22.2s19.3 1.7 26.2-5.2l41.6-41.6c87.6 86.5 228.7 86.2 315.8-1c24.4-24.4 42.1-53.1 52.9-83.7c5.9-16.7-2.9-34.9-19.5-40.8s-34.9 2.9-40.8 19.5c-7.7 21.8-20.2 42.3-37.8 59.8c-62.2 62.2-162.7 62.5-225.3 1L185 329c6.9-6.9 8.9-17.2 5.2-26.2s-12.5-14.8-22.2-14.8H48.4h-.7H40c-13.3 0-24 10.7-24 24z"
                                ></path>
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
                                            <img
                                                data-v-ecf6f3dc=""
                                                class="w-35px h-35px ml-2"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAhCAYAAABX5MJvAAAABmJLR0QA/wD/AP+gvaeTAAAF40lEQVRYw61YW2wUVRguiSiIN7xfEk3ASxQFvCWamPhC4kNjYme7oqa1pezMtDWN3XZmttUYV2HPmW2BhxoTfYGgojxUEig1EpS6u61PFSntCiW1woPp1bZiW15Mxu8/s1NndnbbXXSSk7Nn5pzzf+f/v/9ytqSkiKeuha+XDT4pa3w+X1N0c4rmlfxfTzQavaZSa1/njBW9baOi80VV46xW59XZTdXND/D9Cs1z1tQY8RsV5dPVVwWgoSF6k2Lws9h0ot6IP+oGoUTMF3KtUY34M24QajN7DJoZwz5DWHNz8QB0NkiqxabnsckkAVEj5pZCQMh6bKsNgE9g7TD6qaKAeACEzSdoITZJyzr7A+//VHU+rTTG7nHmh8P71jq/d7SyO0ggzIV5dADz/Fut7LYMoMKAZANY4oIN5LCsm7sUg1UBSDdAjcoam8X8BeppDCHHZYNVKkb8Q8UwvyYAS1oqBEiGAwOqwacboHbvV2sViFeDTS4BwAL6IdUw92O+Lmux16gXY42nhbl08zfF2F2VLaPm7fgjwkQ6P+fzIPICIqFQtUsD9FRHo2tg6246MVR8YmcLf3A5bap620MQclIhsBo/1tDQcZ3nu6MRnQ+S3KUP9dHoDXg5Dj8f3hned6vb3jjVz1D1rNzEA8WQO6Tz7dhzDut/cgOxTc5/kXWQHXI9i+SmvQ/jtONYdEFp3nM7mcDWgAl7t229Gjevbdn7pA2EHaUxxRxVM08T52q12OM5F5EbYsE0kcrmAEzQzMqXE2T1v3y9lSxn1o/BtXnMsx2mXlAjsQqY+wtwbsaJO55QjLaBWkiLbcakOYqIOMFFsP7blU5rpcqarKT0N1prXp5o/Hsc6KLSFH8X+14mOY5MQVDKBSDQotOInHVGvIrQr0RCASIpnbGSgUX0I5ZVsirXHPIK4VWa+YZC5HfJg5zpEvyYB+t3hZr509RqtfY78eEbcsMVAfRJD1gpacH6QWIAsWidkkrzzSX3BR+OIZfcCwfYJlozE7lGgKjVmOwhKQJPbYQfsFKBQ9j8pGgJ6YiVKvX4NoR34P2k1a+sBphBzOsV73uCd0M7XUtrU9IhaOIgCDnilcMD+UEgAqoRpmHxEStRlrSbNIvxx1mmGEXrtAGVyRA8b/W9shHzUmgTS2uTgU5wrRUgZgoCYccGjlBsvpolcD/amJUOXivGvdJzGF+x+oLPizHeY/y7lQgAWNkCBL/k9RL+OnkbBb+CNAGOzCBjah4QvcH7xUkTkpoB1UmayAL6ke0pZV9lcwIcaAXXZgo2Byb/CuQHcnhCAkDSggPEhaTU4XXX0vVw2U+sE5Xr/MRkn0ET+Tnh9g5KxyBmN0Ck/TEhsE14QULaI7wiFdhQaPREBqZQfTT0TuwuRxZAGQJEdpygkApXqhBRDsnIByQhXRBxISWdKTiPNFIk5gsh3XxT1CWeuMSmfRETwv/K2O8SZUO/ScrCwu695VqhIKDVHpx6FLnIpFxCFZonYmbnDortmPi5qsV35PSSnuo18IwY5YyCAGixCtqHcgf6ToqYvtyRXXAA9SCl20yUO05ZlLLh1WTR+hb+LDQwR3WFqE0ao7dAwyKN+7Jopp6YVDWWdgA4BQ0WnSYVUn1QDABbA2wOmu131xNUr1DdgsOOeeoJUVkhVxApqa7wV1asS1RKhvkdaWxlEpqnxHzUEdmVVZ3WvlmUCzof8FRW3oKDT8kRc5PPz1EzUu2o2qxO4zQHccpISERCs4XiALkheZUgITjgc9OwuSlT2p11azxHsWsO0T3DrRGqmiG4M6Tx98h9ocouxJYRbDYjhAoysxHKkiEIp6ocrvilW5CjAXU5APmA2ADYcOYidFn0ovz711xL5Vx4933O/UShHuU97VcUAB8QEmjfoMadGxiCG655sadyR0X2ol3KmVvsUhHrNXauaABZVfGQYLHrLloICOcuagMR94yBogEsdyu3QYiYH/Q1jb/vBuG4v88L/stDIVa48bL/T/CJYv+f+AdSYrJqhdIlUAAAAABJRU5ErkJggg=="
                                            />
                                        </td>
                                        <td data-v-ecf6f3dc="" class="p-1 h-20 flex items-center"><div data-v-ecf6f3dc="" class="text-xl ml-2 font-bold">211</div></td>
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
                                            <img
                                                data-v-ecf6f3dc=""
                                                class="w-35px h-35px ml-2"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAhCAYAAABX5MJvAAAABmJLR0QA/wD/AP+gvaeTAAAFnElEQVRYhbWXfXBU5RWHn/Puze4SICMwMBqRhjrqVKozygwzLRDoYG21tcriqtiKgMkGadMKdjemaLm0NptEkdr4AUlglKnKGGaxTCuDOk1DaJ1xbERahzIVdMqQjFBoi/nm3vf0D0gqyWa7m8jvr/uec95znnvfzyuMQtoSnYn476MI0IXhGJbDGN3Bp71vyq17+nLJZ0YDgbHTgBCq6zA8j5p2hDlY2cmE/BPaEklp6+Krs03njApiEMZ5ReY3nRxo6luLpxCkDKEElfe1JfJ7znor5abdn2RMMyaIIZKbdp2S4lQV81NXglmBcAPBvMPacvuyjP2ySe66rnO8M7TQGLNS1RZePaVzxkNf+VtRx5mpV1xx2+bjI/XTP0XH4dl64E5EtzMvtUoEHRqXcThWVFZNdTx5ur1TbxEh32KPCBx3jG1XlZkH/ulMzPiGX23qAe7T5kgLAZ6mNTJFNRUdCpIWwnVd094ZqsZjFdCjYjbKWX9rwy/XdQDsfeEHDwBzMwFcAPO1VKO2RE8g/ivsj2yGVFlGiNWuO6G9O7QH4QYRngn2jF9fV/fDnJZcWpAFTbt1X+RHKHXacvsfZcFvtqeFKC93C/q6wm2gl+TlBYqfrUq0jbX4BSDFqUbdF1mIOL/St76zd2DVDK6OaPTVQF849AboRE/M9Z83wKCcQCnQTdDZOmAahJhU9GEdwqyAOl/fVlvRflEAOD9Z1cZBFmnLkqvg/HDEKqpniNXlij7y/JPxg6MtoK2RF0HuSe/UZilOfROA4l0v0xp5HKPVwJJzc8LqFoUThfn9z4wWAADPrseR36b1+eYvA48iqLayFZUf6+u3hJzlD7mXILpQIea6rh0ThHP2P5B3NK0vaE9f0DZajyePMj5/kRMMhtejNiyYx8riydmitnHzk+v+OjqK8BaUO9K6fN4GFgw0Ze6uE7ovcgyxdzso16FyCKMHVSWqYh6MJZKnUPaL2C2nP7rqD01Nd/lZMXSYpVzWXZDWN+7yzmE25TDIlxxUvyDwxpbayu8DlFZUzxJYhuq3FfP6pKIjPWXx5EGEXwd7+nbU1blnRmKQu5p84F9ZAQMY3kN5QGLx6pOI1NbXVjwxNKYkUTPdYJeKyp2KXneukh4qnNh7pHzO36Pvtk++Ga/vw6yLAoXTurq/PPlM/7kvEfoe8AuJxau7Qe+vf6KyKVPn8nK3oDs4brFj7DKEefmOF6y9+QCS1Tn8PwmoEbzPmPocRHvBXPb/Op8fhhfLEslLLcwLB/0dzUen/S4XgA9OTio9q3J5fO4Hdw8aPU45qJwWtddkk6Qskayw8DOFqqTrbkjmQgDE4sn7VTkm81/782ftBtUOC9fmAtBYW7khx/rnJMxA+MdQsxGxO0WYHXXd4MUEKEnUTEe1CALbhkH4eewAggWd4W9cLAAAgy0B6fr3x0X7h/kaq9Z9ArQFRGtGAhBIjgVgueuGgdUou9NtfAbAVycm8MXSh5PfTQdQX1vpjhYAIK8z/HNRQr4fWpvOP7jKY/HkTkUW5fne9b4TuPfzAliVeHyOEmi2vj7VsPEnj6WLGbzUjPdC9wl60gs4B1RxFarGClCSqJnuq7MHyzsNGyt/OlLcIMSmTWt7PDELBS1QpDvo+cNmcS568JHkbKP6nsApndD3LZBh/xsDGrbprkzUFDrYZlGmWkt5w8bKl3IpHo2+Gpg086O1qF0vaFtgfP+tz7nu8BM0EwTAmjVPjesM9G4XkduAo75KxZkJvXubXLd/pEQx183XrtA9AhuAyVakfnp+78PZXJQyHj+la6pniWMbULkRoR+0TZBDqnpYxHYggSJVnQnciMgsUUThTeP5qzdvenTE38OcIAa0orJqap4fWCrYJdZSKMIUkDDQpaqnRfjYIi9ZkV3bais+zbb4gP4LPXNf4Fk96v0AAAAASUVORK5CYII="
                                            />
                                        </td>
                                        <td data-v-ecf6f3dc="" class="p-1 h-20 flex items-center"><div data-v-ecf6f3dc="" class="text-xl ml-2 font-bold">8.9</div></td>
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
                                            <img
                                                data-v-ecf6f3dc=""
                                                class="w-35px h-35px ml-2"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAhCAYAAABX5MJvAAAABmJLR0QA/wD/AP+gvaeTAAAFbklEQVRYw7VXW2wUVRjeKkhAMNrEB2OiyIuJEUMkXkh8MPqgCGJntovxSi87s21DS9udmW01hkndOWdboI0VxRpFNAimaZXEuirUdme3F+glWKTFB1vCTaVp0nsk8XL8zmwpadidzkI7yZ85M3PO/3/z/ZfzH5crhUtSjXWSSqu9Cmn0quSEV6MDlqh0QFKMdlkl38gKqfGVk4dcC3nJct1SWaPvSAppkzQyifuQpJII5JBXI+95tVANAHyA91/w9wByFvcJSTM6pQAp1XV9yU0B8Cmh12XV6IaBMSgNg4EiWddX2K3x6PptshLyAchRgBvF2h4pYGxN2ThHj8UfQybhgt5clT5/Iz+Rp1U+brGmkFGvatRxgI4WvqHsuh2UNmPxGO4UgG65GTY9nvpbZTVoQNcI5PvCwtplThj4AQAu5/ppwYLGlj+4DXr/lBT6I4+zpBO9Cv2cM+BTjTddi3Ahi16B/mHIR4kn+CtFfBxHRNc6VcratqxiUfFnFnPnOAai0SrEx2ieQoU5H0pKqpcjv0/yIOI+dAwiKhZDGIsJ4VRixKsYJmz1zklfFJ4yvJySSsnmVOgFgO8gIywm/s6inrsdx0c5eUJWjHH8eNFVVWm8sADI0ZQAdHjSYfwii7rrmSmOYbwzteobPAa3dFoPOcVkAyL2ihwg+SmBMMWdlvEWz4Ngw4T8lBoImsXrULYfJd7aC1RyKatYvzMlEDGhGRKZGVMwMsJOeB5wur5A11ciBC7ANnVJGm3CntCS0FAkM5uZQhTSCyM9cRFPQwYgExAj7prN92I8DPkN7JzB/dp8U+iAHEjCRivf9PigE4OvEoJo2bIJCoeg+ArSsBvjg/B9nSVRsZa1elbOzm13F137JhyAHLGCNipOgam9CUHEN72oCwB+4ftEUtq7X10DRRH8zQgzM3YzNn8ZZ9HMZ8FCP8CfBZg8m5qxDySc5oNBviXbKg1vXAZl+8HGOMBEAOqehPOYK43FMnUYH2am+yQ7nrHeNjgDtBpMnOHuOAUQnzgLRrEAAM5BuhIzIOyB8UncDyGFl8+bIehDEJh9Lqsj0sjhFFITBUqIJQbh3gOAl1hs012O0hR2EQ7HXbJmNPEodQSg58UVMAI/ix/Gn+WlzMwM8LiJA/SsBRNTLOIuclYryDHYbsAgtEtW6R+5JXq6gzKdZWVKm/AUMmMdntshf1sBaLp3zDDVjbhpnE9Xjla5Ciych1S6tgdCa4Fo2knFZBHhMOKiDwbfjseGMIB3EtzwLWQK4MK4NyCAf+Us2e4fGt3OK+Y2f8X6q7R0IS6abQEgNWHgFIxftig3xa9Zx3Pps1kRFcshF+L7ifgPAL40T1CGfbxGzKJSaQl8Y7uLsnZhA5SjaImDAJOQNdb68sOYE4P8i3lJMy7Hb2zkLCAz3prb1qGhlRVqJmvReW2AfMZaM1bbMtb69BIWzagAW0k6bOza8ea367o2T/LT1/BhnOeuaxEvtHi7sYVPgH1PshPWPt5jAsjWRQGgkWzot9p/29MWJvXz09UiAbjIu3nbFhLtFj85TWNB7sKZZ2noKas4A2iewryPSI50h/EIJg4hYpv5Qv4uv6xmDW968pR3n7kx/5MX+FZtuViln9oykFdGV2NiH3eFHAjdl11sPMrPBpBzXuucYEzjHMobkPzCQv0OO8P8u6QES/lpC7E1yc+yPo2I87fgGg6tKvlvprfotzpv7j+V1Of6g/ejM1Z58wNAf+HdJUgbxl8i0usw/32M92JtPcBGMD6Pbm0aa2K8Djg8fyJvuSIt1AglDQC0X1aCxdfvJZjnr3iMpxj+sAlGOzhzMDQ4A74LQI+g1lR5SyufTMVt/wOcl5ZpJqKG3AAAAABJRU5ErkJggg=="
                                            />
                                        </td>
                                        <td data-v-ecf6f3dc="" class="p-1 h-20 flex items-center"><div data-v-ecf6f3dc="" class="text-xl ml-2 font-bold">102</div></td>
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
                                                <div data-v-4065c71e="" class="text-xl ml-2 font-bold">4.7</div>
                                                <div data-v-4065c71e="" class="ml-2 text-sm">Professionalism</div>
                                            </div>
                                            <div data-v-4065c71e="" class="flex justify-evenly items-center">
                                                <div class="flex text-xl relative">
                                                    <svg
                                                        class="svg-inline--fa fa-star icon-style text-lg text-gray-300"
                                                        aria-hidden="true"
                                                        focusable="false"
                                                        data-prefix="fas"
                                                        data-icon="star"
                                                        role="img"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 576 512"
                                                    >
                                                        <path
                                                            class=""
                                                            fill="currentColor"
                                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                                                        ></path>
                                                    </svg>
                                                    <svg
                                                        class="svg-inline--fa fa-star icon-style text-lg text-gray-300"
                                                        aria-hidden="true"
                                                        focusable="false"
                                                        data-prefix="fas"
                                                        data-icon="star"
                                                        role="img"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 576 512"
                                                    >
                                                        <path
                                                            class=""
                                                            fill="currentColor"
                                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                                                        ></path>
                                                    </svg>
                                                    <svg
                                                        class="svg-inline--fa fa-star icon-style text-lg text-gray-300"
                                                        aria-hidden="true"
                                                        focusable="false"
                                                        data-prefix="fas"
                                                        data-icon="star"
                                                        role="img"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 576 512"
                                                    >
                                                        <path
                                                            class=""
                                                            fill="currentColor"
                                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                                                        ></path>
                                                    </svg>
                                                    <svg
                                                        class="svg-inline--fa fa-star icon-style text-lg text-gray-300"
                                                        aria-hidden="true"
                                                        focusable="false"
                                                        data-prefix="fas"
                                                        data-icon="star"
                                                        role="img"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 576 512"
                                                    >
                                                        <path
                                                            class=""
                                                            fill="currentColor"
                                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                                                        ></path>
                                                    </svg>
                                                    <svg
                                                        class="svg-inline--fa fa-star icon-style text-lg text-gray-300"
                                                        aria-hidden="true"
                                                        focusable="false"
                                                        data-prefix="fas"
                                                        data-icon="star"
                                                        role="img"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 576 512"
                                                    >
                                                        <path
                                                            class=""
                                                            fill="currentColor"
                                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                                                        ></path>
                                                    </svg>
                                                    <div class="flex absolute overflow-hidden text-xl top-0 left-0" style="width: 94%; color: rgb(240, 151, 55);">
                                                        <svg
                                                            class="svg-inline--fa fa-star icon-style text-xl"
                                                            aria-hidden="true"
                                                            focusable="false"
                                                            data-prefix="fas"
                                                            data-icon="star"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 576 512"
                                                        >
                                                            <path
                                                                class=""
                                                                fill="currentColor"
                                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                                                            ></path>
                                                        </svg>
                                                        <svg
                                                            class="svg-inline--fa fa-star icon-style text-xl"
                                                            aria-hidden="true"
                                                            focusable="false"
                                                            data-prefix="fas"
                                                            data-icon="star"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 576 512"
                                                        >
                                                            <path
                                                                class=""
                                                                fill="currentColor"
                                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                                                            ></path>
                                                        </svg>
                                                        <svg
                                                            class="svg-inline--fa fa-star icon-style text-xl"
                                                            aria-hidden="true"
                                                            focusable="false"
                                                            data-prefix="fas"
                                                            data-icon="star"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 576 512"
                                                        >
                                                            <path
                                                                class=""
                                                                fill="currentColor"
                                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                                                            ></path>
                                                        </svg>
                                                        <svg
                                                            class="svg-inline--fa fa-star icon-style text-xl"
                                                            aria-hidden="true"
                                                            focusable="false"
                                                            data-prefix="fas"
                                                            data-icon="star"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 576 512"
                                                        >
                                                            <path
                                                                class=""
                                                                fill="currentColor"
                                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                                                            ></path>
                                                        </svg>
                                                        <svg
                                                            class="svg-inline--fa fa-star icon-style text-xl"
                                                            aria-hidden="true"
                                                            focusable="false"
                                                            data-prefix="fas"
                                                            data-icon="star"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 576 512"
                                                        >
                                                            <path
                                                                class=""
                                                                fill="currentColor"
                                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                                                            ></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-v-4065c71e="" class="">
                                        <td data-v-4065c71e="" class="flex items-center justify-between p-1 h-20">
                                            <div data-v-4065c71e="">
                                                <div data-v-4065c71e="" class="text-xl ml-2 font-bold">4.6</div>
                                                <div data-v-4065c71e="" class="ml-2 text-sm">How likely are you to recommend us?</div>
                                            </div>
                                            <div data-v-4065c71e="" class="flex justify-evenly items-center">
                                                <div class="flex text-xl relative">
                                                    <svg
                                                        class="svg-inline--fa fa-star icon-style text-lg text-gray-300"
                                                        aria-hidden="true"
                                                        focusable="false"
                                                        data-prefix="fas"
                                                        data-icon="star"
                                                        role="img"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 576 512"
                                                    >
                                                        <path
                                                            class=""
                                                            fill="currentColor"
                                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                                                        ></path>
                                                    </svg>
                                                    <svg
                                                        class="svg-inline--fa fa-star icon-style text-lg text-gray-300"
                                                        aria-hidden="true"
                                                        focusable="false"
                                                        data-prefix="fas"
                                                        data-icon="star"
                                                        role="img"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 576 512"
                                                    >
                                                        <path
                                                            class=""
                                                            fill="currentColor"
                                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                                                        ></path>
                                                    </svg>
                                                    <svg
                                                        class="svg-inline--fa fa-star icon-style text-lg text-gray-300"
                                                        aria-hidden="true"
                                                        focusable="false"
                                                        data-prefix="fas"
                                                        data-icon="star"
                                                        role="img"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 576 512"
                                                    >
                                                        <path
                                                            class=""
                                                            fill="currentColor"
                                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                                                        ></path>
                                                    </svg>
                                                    <svg
                                                        class="svg-inline--fa fa-star icon-style text-lg text-gray-300"
                                                        aria-hidden="true"
                                                        focusable="false"
                                                        data-prefix="fas"
                                                        data-icon="star"
                                                        role="img"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 576 512"
                                                    >
                                                        <path
                                                            class=""
                                                            fill="currentColor"
                                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                                                        ></path>
                                                    </svg>
                                                    <svg
                                                        class="svg-inline--fa fa-star icon-style text-lg text-gray-300"
                                                        aria-hidden="true"
                                                        focusable="false"
                                                        data-prefix="fas"
                                                        data-icon="star"
                                                        role="img"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 576 512"
                                                    >
                                                        <path
                                                            class=""
                                                            fill="currentColor"
                                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                                                        ></path>
                                                    </svg>
                                                    <div class="flex absolute overflow-hidden text-xl top-0 left-0" style="width: 92%; color: rgb(240, 151, 55);">
                                                        <svg
                                                            class="svg-inline--fa fa-star icon-style text-xl"
                                                            aria-hidden="true"
                                                            focusable="false"
                                                            data-prefix="fas"
                                                            data-icon="star"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 576 512"
                                                        >
                                                            <path
                                                                class=""
                                                                fill="currentColor"
                                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                                                            ></path>
                                                        </svg>
                                                        <svg
                                                            class="svg-inline--fa fa-star icon-style text-xl"
                                                            aria-hidden="true"
                                                            focusable="false"
                                                            data-prefix="fas"
                                                            data-icon="star"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 576 512"
                                                        >
                                                            <path
                                                                class=""
                                                                fill="currentColor"
                                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                                                            ></path>
                                                        </svg>
                                                        <svg
                                                            class="svg-inline--fa fa-star icon-style text-xl"
                                                            aria-hidden="true"
                                                            focusable="false"
                                                            data-prefix="fas"
                                                            data-icon="star"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 576 512"
                                                        >
                                                            <path
                                                                class=""
                                                                fill="currentColor"
                                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                                                            ></path>
                                                        </svg>
                                                        <svg
                                                            class="svg-inline--fa fa-star icon-style text-xl"
                                                            aria-hidden="true"
                                                            focusable="false"
                                                            data-prefix="fas"
                                                            data-icon="star"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 576 512"
                                                        >
                                                            <path
                                                                class=""
                                                                fill="currentColor"
                                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                                                            ></path>
                                                        </svg>
                                                        <svg
                                                            class="svg-inline--fa fa-star icon-style text-xl"
                                                            aria-hidden="true"
                                                            focusable="false"
                                                            data-prefix="fas"
                                                            data-icon="star"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 576 512"
                                                        >
                                                            <path
                                                                class=""
                                                                fill="currentColor"
                                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                                                            ></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-v-4065c71e="" class="alternate-row">
                                        <td data-v-4065c71e="" class="flex items-center justify-between p-1 h-20">
                                            <div data-v-4065c71e="">
                                                <div data-v-4065c71e="" class="text-xl ml-2 font-bold">4.6</div>
                                                <div data-v-4065c71e="" class="ml-2 text-sm">Quality of Service</div>
                                            </div>
                                            <div data-v-4065c71e="" class="flex justify-evenly items-center">
                                                <div class="flex text-xl relative">
                                                    <svg
                                                        class="svg-inline--fa fa-star icon-style text-lg text-gray-300"
                                                        aria-hidden="true"
                                                        focusable="false"
                                                        data-prefix="fas"
                                                        data-icon="star"
                                                        role="img"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 576 512"
                                                    >
                                                        <path
                                                            class=""
                                                            fill="currentColor"
                                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                                                        ></path>
                                                    </svg>
                                                    <svg
                                                        class="svg-inline--fa fa-star icon-style text-lg text-gray-300"
                                                        aria-hidden="true"
                                                        focusable="false"
                                                        data-prefix="fas"
                                                        data-icon="star"
                                                        role="img"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 576 512"
                                                    >
                                                        <path
                                                            class=""
                                                            fill="currentColor"
                                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                                                        ></path>
                                                    </svg>
                                                    <svg
                                                        class="svg-inline--fa fa-star icon-style text-lg text-gray-300"
                                                        aria-hidden="true"
                                                        focusable="false"
                                                        data-prefix="fas"
                                                        data-icon="star"
                                                        role="img"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 576 512"
                                                    >
                                                        <path
                                                            class=""
                                                            fill="currentColor"
                                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                                                        ></path>
                                                    </svg>
                                                    <svg
                                                        class="svg-inline--fa fa-star icon-style text-lg text-gray-300"
                                                        aria-hidden="true"
                                                        focusable="false"
                                                        data-prefix="fas"
                                                        data-icon="star"
                                                        role="img"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 576 512"
                                                    >
                                                        <path
                                                            class=""
                                                            fill="currentColor"
                                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                                                        ></path>
                                                    </svg>
                                                    <svg
                                                        class="svg-inline--fa fa-star icon-style text-lg text-gray-300"
                                                        aria-hidden="true"
                                                        focusable="false"
                                                        data-prefix="fas"
                                                        data-icon="star"
                                                        role="img"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 576 512"
                                                    >
                                                        <path
                                                            class=""
                                                            fill="currentColor"
                                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                                                        ></path>
                                                    </svg>
                                                    <div class="flex absolute overflow-hidden text-xl top-0 left-0" style="width: 92%; color: rgb(240, 151, 55);">
                                                        <svg
                                                            class="svg-inline--fa fa-star icon-style text-xl"
                                                            aria-hidden="true"
                                                            focusable="false"
                                                            data-prefix="fas"
                                                            data-icon="star"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 576 512"
                                                        >
                                                            <path
                                                                class=""
                                                                fill="currentColor"
                                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                                                            ></path>
                                                        </svg>
                                                        <svg
                                                            class="svg-inline--fa fa-star icon-style text-xl"
                                                            aria-hidden="true"
                                                            focusable="false"
                                                            data-prefix="fas"
                                                            data-icon="star"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 576 512"
                                                        >
                                                            <path
                                                                class=""
                                                                fill="currentColor"
                                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                                                            ></path>
                                                        </svg>
                                                        <svg
                                                            class="svg-inline--fa fa-star icon-style text-xl"
                                                            aria-hidden="true"
                                                            focusable="false"
                                                            data-prefix="fas"
                                                            data-icon="star"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 576 512"
                                                        >
                                                            <path
                                                                class=""
                                                                fill="currentColor"
                                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                                                            ></path>
                                                        </svg>
                                                        <svg
                                                            class="svg-inline--fa fa-star icon-style text-xl"
                                                            aria-hidden="true"
                                                            focusable="false"
                                                            data-prefix="fas"
                                                            data-icon="star"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 576 512"
                                                        >
                                                            <path
                                                                class=""
                                                                fill="currentColor"
                                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                                                            ></path>
                                                        </svg>
                                                        <svg
                                                            class="svg-inline--fa fa-star icon-style text-xl"
                                                            aria-hidden="true"
                                                            focusable="false"
                                                            data-prefix="fas"
                                                            data-icon="star"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 576 512"
                                                        >
                                                            <path
                                                                class=""
                                                                fill="currentColor"
                                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                                                            ></path>
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
                <div data-v-b59c33b2="" data-v-04366469="">
                    <div data-v-4c587d70="" data-v-b59c33b2="" class="panel bg-white w-full h-full flex flex-col items-stretch col-span-1">
                        <div data-v-4c587d70="" class="panel-header">Customer Sentiment</div>
                        <div data-v-4c587d70="" class="panel-body flex-grow flex flex-col justify-center items-stretch">
                            <table data-v-b59c33b2="" class="my-4 w-full border-collapse text-gray-500 text-sm">
                                <tbody data-v-b59c33b2="">
                                    <tr data-v-b59c33b2="" class="alternate-row">
                                        <td data-v-b59c33b2="" class="flex items-center justify-between p-1 h-20">
                                            <div data-v-b59c33b2="">
                                                <div data-v-b59c33b2="" class="text-xl ml-2 font-bold">95.7%</div>
                                                <div data-v-b59c33b2="" class="ml-2 text-sm">Happy Customer Count</div>
                                            </div>
                                            <div data-v-b59c33b2="" class="flex justify-evenly items-center">
                                                <div class="flex text-xl relative">
                                                    <svg
                                                        class="svg-inline--fa fa-face-smile icon-style text-lg text-gray-300"
                                                        aria-hidden="true"
                                                        focusable="false"
                                                        data-prefix="fas"
                                                        data-icon="face-smile"
                                                        role="img"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512"
                                                    >
                                                        <path
                                                            class=""
                                                            fill="currentColor"
                                                            d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM164.1 325.5C182 346.2 212.6 368 256 368s74-21.8 91.9-42.5c5.8-6.7 15.9-7.4 22.6-1.6s7.4 15.9 1.6 22.6C349.8 372.1 311.1 400 256 400s-93.8-27.9-116.1-53.5c-5.8-6.7-5.1-16.8 1.6-22.6s16.8-5.1 22.6 1.6zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"
                                                        ></path>
                                                    </svg>
                                                    <svg
                                                        class="svg-inline--fa fa-face-smile icon-style text-lg text-gray-300"
                                                        aria-hidden="true"
                                                        focusable="false"
                                                        data-prefix="fas"
                                                        data-icon="face-smile"
                                                        role="img"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512"
                                                    >
                                                        <path
                                                            class=""
                                                            fill="currentColor"
                                                            d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM164.1 325.5C182 346.2 212.6 368 256 368s74-21.8 91.9-42.5c5.8-6.7 15.9-7.4 22.6-1.6s7.4 15.9 1.6 22.6C349.8 372.1 311.1 400 256 400s-93.8-27.9-116.1-53.5c-5.8-6.7-5.1-16.8 1.6-22.6s16.8-5.1 22.6 1.6zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"
                                                        ></path>
                                                    </svg>
                                                    <svg
                                                        class="svg-inline--fa fa-face-smile icon-style text-lg text-gray-300"
                                                        aria-hidden="true"
                                                        focusable="false"
                                                        data-prefix="fas"
                                                        data-icon="face-smile"
                                                        role="img"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512"
                                                    >
                                                        <path
                                                            class=""
                                                            fill="currentColor"
                                                            d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM164.1 325.5C182 346.2 212.6 368 256 368s74-21.8 91.9-42.5c5.8-6.7 15.9-7.4 22.6-1.6s7.4 15.9 1.6 22.6C349.8 372.1 311.1 400 256 400s-93.8-27.9-116.1-53.5c-5.8-6.7-5.1-16.8 1.6-22.6s16.8-5.1 22.6 1.6zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"
                                                        ></path>
                                                    </svg>
                                                    <svg
                                                        class="svg-inline--fa fa-face-smile icon-style text-lg text-gray-300"
                                                        aria-hidden="true"
                                                        focusable="false"
                                                        data-prefix="fas"
                                                        data-icon="face-smile"
                                                        role="img"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512"
                                                    >
                                                        <path
                                                            class=""
                                                            fill="currentColor"
                                                            d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM164.1 325.5C182 346.2 212.6 368 256 368s74-21.8 91.9-42.5c5.8-6.7 15.9-7.4 22.6-1.6s7.4 15.9 1.6 22.6C349.8 372.1 311.1 400 256 400s-93.8-27.9-116.1-53.5c-5.8-6.7-5.1-16.8 1.6-22.6s16.8-5.1 22.6 1.6zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"
                                                        ></path>
                                                    </svg>
                                                    <svg
                                                        class="svg-inline--fa fa-face-smile icon-style text-lg text-gray-300"
                                                        aria-hidden="true"
                                                        focusable="false"
                                                        data-prefix="fas"
                                                        data-icon="face-smile"
                                                        role="img"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512"
                                                    >
                                                        <path
                                                            class=""
                                                            fill="currentColor"
                                                            d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM164.1 325.5C182 346.2 212.6 368 256 368s74-21.8 91.9-42.5c5.8-6.7 15.9-7.4 22.6-1.6s7.4 15.9 1.6 22.6C349.8 372.1 311.1 400 256 400s-93.8-27.9-116.1-53.5c-5.8-6.7-5.1-16.8 1.6-22.6s16.8-5.1 22.6 1.6zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"
                                                        ></path>
                                                    </svg>
                                                    <div class="flex absolute overflow-hidden text-xl top-0 left-0" style="width: 95.7%; color: rgb(82, 179, 101);">
                                                        <svg
                                                            class="svg-inline--fa fa-face-smile icon-style text-xl"
                                                            aria-hidden="true"
                                                            focusable="false"
                                                            data-prefix="fas"
                                                            data-icon="face-smile"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 512 512"
                                                        >
                                                            <path
                                                                class=""
                                                                fill="currentColor"
                                                                d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM164.1 325.5C182 346.2 212.6 368 256 368s74-21.8 91.9-42.5c5.8-6.7 15.9-7.4 22.6-1.6s7.4 15.9 1.6 22.6C349.8 372.1 311.1 400 256 400s-93.8-27.9-116.1-53.5c-5.8-6.7-5.1-16.8 1.6-22.6s16.8-5.1 22.6 1.6zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"
                                                            ></path>
                                                        </svg>
                                                        <svg
                                                            class="svg-inline--fa fa-face-smile icon-style text-xl"
                                                            aria-hidden="true"
                                                            focusable="false"
                                                            data-prefix="fas"
                                                            data-icon="face-smile"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 512 512"
                                                        >
                                                            <path
                                                                class=""
                                                                fill="currentColor"
                                                                d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM164.1 325.5C182 346.2 212.6 368 256 368s74-21.8 91.9-42.5c5.8-6.7 15.9-7.4 22.6-1.6s7.4 15.9 1.6 22.6C349.8 372.1 311.1 400 256 400s-93.8-27.9-116.1-53.5c-5.8-6.7-5.1-16.8 1.6-22.6s16.8-5.1 22.6 1.6zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"
                                                            ></path>
                                                        </svg>
                                                        <svg
                                                            class="svg-inline--fa fa-face-smile icon-style text-xl"
                                                            aria-hidden="true"
                                                            focusable="false"
                                                            data-prefix="fas"
                                                            data-icon="face-smile"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 512 512"
                                                        >
                                                            <path
                                                                class=""
                                                                fill="currentColor"
                                                                d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM164.1 325.5C182 346.2 212.6 368 256 368s74-21.8 91.9-42.5c5.8-6.7 15.9-7.4 22.6-1.6s7.4 15.9 1.6 22.6C349.8 372.1 311.1 400 256 400s-93.8-27.9-116.1-53.5c-5.8-6.7-5.1-16.8 1.6-22.6s16.8-5.1 22.6 1.6zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"
                                                            ></path>
                                                        </svg>
                                                        <svg
                                                            class="svg-inline--fa fa-face-smile icon-style text-xl"
                                                            aria-hidden="true"
                                                            focusable="false"
                                                            data-prefix="fas"
                                                            data-icon="face-smile"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 512 512"
                                                        >
                                                            <path
                                                                class=""
                                                                fill="currentColor"
                                                                d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM164.1 325.5C182 346.2 212.6 368 256 368s74-21.8 91.9-42.5c5.8-6.7 15.9-7.4 22.6-1.6s7.4 15.9 1.6 22.6C349.8 372.1 311.1 400 256 400s-93.8-27.9-116.1-53.5c-5.8-6.7-5.1-16.8 1.6-22.6s16.8-5.1 22.6 1.6zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"
                                                            ></path>
                                                        </svg>
                                                        <svg
                                                            class="svg-inline--fa fa-face-smile icon-style text-xl"
                                                            aria-hidden="true"
                                                            focusable="false"
                                                            data-prefix="fas"
                                                            data-icon="face-smile"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 512 512"
                                                        >
                                                            <path
                                                                class=""
                                                                fill="currentColor"
                                                                d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM164.1 325.5C182 346.2 212.6 368 256 368s74-21.8 91.9-42.5c5.8-6.7 15.9-7.4 22.6-1.6s7.4 15.9 1.6 22.6C349.8 372.1 311.1 400 256 400s-93.8-27.9-116.1-53.5c-5.8-6.7-5.1-16.8 1.6-22.6s16.8-5.1 22.6 1.6zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"
                                                            ></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-v-b59c33b2="" class="">
                                        <td data-v-b59c33b2="" class="flex items-center justify-between p-1 h-20">
                                            <div data-v-b59c33b2="">
                                                <div data-v-b59c33b2="" class="text-xl ml-2 font-bold">0.9%</div>
                                                <div data-v-b59c33b2="" class="ml-2 text-sm">Neutral Customer Count</div>
                                            </div>
                                            <div data-v-b59c33b2="" class="flex justify-evenly items-center">
                                                <div class="flex text-xl relative">
                                                    <svg
                                                        class="svg-inline--fa fa-face-meh icon-style text-lg text-gray-300"
                                                        aria-hidden="true"
                                                        focusable="false"
                                                        data-prefix="fas"
                                                        data-icon="face-meh"
                                                        role="img"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512"
                                                    >
                                                        <path
                                                            class=""
                                                            fill="currentColor"
                                                            d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM176.4 176a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm128 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM160 336H352c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"
                                                        ></path>
                                                    </svg>
                                                    <svg
                                                        class="svg-inline--fa fa-face-meh icon-style text-lg text-gray-300"
                                                        aria-hidden="true"
                                                        focusable="false"
                                                        data-prefix="fas"
                                                        data-icon="face-meh"
                                                        role="img"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512"
                                                    >
                                                        <path
                                                            class=""
                                                            fill="currentColor"
                                                            d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM176.4 176a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm128 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM160 336H352c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"
                                                        ></path>
                                                    </svg>
                                                    <svg
                                                        class="svg-inline--fa fa-face-meh icon-style text-lg text-gray-300"
                                                        aria-hidden="true"
                                                        focusable="false"
                                                        data-prefix="fas"
                                                        data-icon="face-meh"
                                                        role="img"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512"
                                                    >
                                                        <path
                                                            class=""
                                                            fill="currentColor"
                                                            d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM176.4 176a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm128 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM160 336H352c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"
                                                        ></path>
                                                    </svg>
                                                    <svg
                                                        class="svg-inline--fa fa-face-meh icon-style text-lg text-gray-300"
                                                        aria-hidden="true"
                                                        focusable="false"
                                                        data-prefix="fas"
                                                        data-icon="face-meh"
                                                        role="img"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512"
                                                    >
                                                        <path
                                                            class=""
                                                            fill="currentColor"
                                                            d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM176.4 176a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm128 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM160 336H352c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"
                                                        ></path>
                                                    </svg>
                                                    <svg
                                                        class="svg-inline--fa fa-face-meh icon-style text-lg text-gray-300"
                                                        aria-hidden="true"
                                                        focusable="false"
                                                        data-prefix="fas"
                                                        data-icon="face-meh"
                                                        role="img"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512"
                                                    >
                                                        <path
                                                            class=""
                                                            fill="currentColor"
                                                            d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM176.4 176a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm128 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM160 336H352c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"
                                                        ></path>
                                                    </svg>
                                                    <div class="flex absolute overflow-hidden text-xl top-0 left-0" style="width: 0.9%; color: rgb(240, 151, 55);">
                                                        <svg
                                                            class="svg-inline--fa fa-face-meh icon-style text-xl"
                                                            aria-hidden="true"
                                                            focusable="false"
                                                            data-prefix="fas"
                                                            data-icon="face-meh"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 512 512"
                                                        >
                                                            <path
                                                                class=""
                                                                fill="currentColor"
                                                                d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM176.4 176a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm128 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM160 336H352c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"
                                                            ></path>
                                                        </svg>
                                                        <svg
                                                            class="svg-inline--fa fa-face-meh icon-style text-xl"
                                                            aria-hidden="true"
                                                            focusable="false"
                                                            data-prefix="fas"
                                                            data-icon="face-meh"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 512 512"
                                                        >
                                                            <path
                                                                class=""
                                                                fill="currentColor"
                                                                d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM176.4 176a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm128 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM160 336H352c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"
                                                            ></path>
                                                        </svg>
                                                        <svg
                                                            class="svg-inline--fa fa-face-meh icon-style text-xl"
                                                            aria-hidden="true"
                                                            focusable="false"
                                                            data-prefix="fas"
                                                            data-icon="face-meh"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 512 512"
                                                        >
                                                            <path
                                                                class=""
                                                                fill="currentColor"
                                                                d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM176.4 176a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm128 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM160 336H352c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"
                                                            ></path>
                                                        </svg>
                                                        <svg
                                                            class="svg-inline--fa fa-face-meh icon-style text-xl"
                                                            aria-hidden="true"
                                                            focusable="false"
                                                            data-prefix="fas"
                                                            data-icon="face-meh"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 512 512"
                                                        >
                                                            <path
                                                                class=""
                                                                fill="currentColor"
                                                                d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM176.4 176a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm128 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM160 336H352c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"
                                                            ></path>
                                                        </svg>
                                                        <svg
                                                            class="svg-inline--fa fa-face-meh icon-style text-xl"
                                                            aria-hidden="true"
                                                            focusable="false"
                                                            data-prefix="fas"
                                                            data-icon="face-meh"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 512 512"
                                                        >
                                                            <path
                                                                class=""
                                                                fill="currentColor"
                                                                d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM176.4 176a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm128 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM160 336H352c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"
                                                            ></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-v-b59c33b2="" class="alternate-row">
                                        <td data-v-b59c33b2="" class="flex items-center justify-between p-1 h-20">
                                            <div data-v-b59c33b2="">
                                                <div data-v-b59c33b2="" class="text-xl ml-2 font-bold">3.3%</div>
                                                <div data-v-b59c33b2="" class="ml-2 text-sm">Unhappy Customer Count</div>
                                            </div>
                                            <div data-v-b59c33b2="" class="flex justify-evenly items-center">
                                                <div class="flex text-xl relative">
                                                    <svg
                                                        class="svg-inline--fa fa-face-angry icon-style text-lg text-gray-300"
                                                        aria-hidden="true"
                                                        focusable="false"
                                                        data-prefix="fas"
                                                        data-icon="face-angry"
                                                        role="img"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512"
                                                    >
                                                        <path
                                                            class=""
                                                            fill="currentColor"
                                                            d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM338.7 395.9c6.6-5.9 7.1-16 1.2-22.6C323.8 355.4 295.7 336 256 336s-67.8 19.4-83.9 37.3c-5.9 6.6-5.4 16.7 1.2 22.6s16.7 5.4 22.6-1.2c11.7-13 31.6-26.7 60.1-26.7s48.4 13.7 60.1 26.7c5.9 6.6 16 7.1 22.6 1.2zM176.4 272c17.7 0 32-14.3 32-32c0-1.5-.1-3-.3-4.4l10.9 3.6c8.4 2.8 17.4-1.7 20.2-10.1s-1.7-17.4-10.1-20.2l-96-32c-8.4-2.8-17.4 1.7-20.2 10.1s1.7 17.4 10.1 20.2l30.7 10.2c-5.8 5.8-9.3 13.8-9.3 22.6c0 17.7 14.3 32 32 32zm192-32c0-8.9-3.6-17-9.5-22.8l30.2-10.1c8.4-2.8 12.9-11.9 10.1-20.2s-11.9-12.9-20.2-10.1l-96 32c-8.4 2.8-12.9 11.9-10.1 20.2s11.9 12.9 20.2 10.1l11.7-3.9c-.2 1.5-.3 3.1-.3 4.7c0 17.7 14.3 32 32 32s32-14.3 32-32z"
                                                        ></path>
                                                    </svg>
                                                    <svg
                                                        class="svg-inline--fa fa-face-angry icon-style text-lg text-gray-300"
                                                        aria-hidden="true"
                                                        focusable="false"
                                                        data-prefix="fas"
                                                        data-icon="face-angry"
                                                        role="img"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512"
                                                    >
                                                        <path
                                                            class=""
                                                            fill="currentColor"
                                                            d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM338.7 395.9c6.6-5.9 7.1-16 1.2-22.6C323.8 355.4 295.7 336 256 336s-67.8 19.4-83.9 37.3c-5.9 6.6-5.4 16.7 1.2 22.6s16.7 5.4 22.6-1.2c11.7-13 31.6-26.7 60.1-26.7s48.4 13.7 60.1 26.7c5.9 6.6 16 7.1 22.6 1.2zM176.4 272c17.7 0 32-14.3 32-32c0-1.5-.1-3-.3-4.4l10.9 3.6c8.4 2.8 17.4-1.7 20.2-10.1s-1.7-17.4-10.1-20.2l-96-32c-8.4-2.8-17.4 1.7-20.2 10.1s1.7 17.4 10.1 20.2l30.7 10.2c-5.8 5.8-9.3 13.8-9.3 22.6c0 17.7 14.3 32 32 32zm192-32c0-8.9-3.6-17-9.5-22.8l30.2-10.1c8.4-2.8 12.9-11.9 10.1-20.2s-11.9-12.9-20.2-10.1l-96 32c-8.4 2.8-12.9 11.9-10.1 20.2s11.9 12.9 20.2 10.1l11.7-3.9c-.2 1.5-.3 3.1-.3 4.7c0 17.7 14.3 32 32 32s32-14.3 32-32z"
                                                        ></path>
                                                    </svg>
                                                    <svg
                                                        class="svg-inline--fa fa-face-angry icon-style text-lg text-gray-300"
                                                        aria-hidden="true"
                                                        focusable="false"
                                                        data-prefix="fas"
                                                        data-icon="face-angry"
                                                        role="img"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512"
                                                    >
                                                        <path
                                                            class=""
                                                            fill="currentColor"
                                                            d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM338.7 395.9c6.6-5.9 7.1-16 1.2-22.6C323.8 355.4 295.7 336 256 336s-67.8 19.4-83.9 37.3c-5.9 6.6-5.4 16.7 1.2 22.6s16.7 5.4 22.6-1.2c11.7-13 31.6-26.7 60.1-26.7s48.4 13.7 60.1 26.7c5.9 6.6 16 7.1 22.6 1.2zM176.4 272c17.7 0 32-14.3 32-32c0-1.5-.1-3-.3-4.4l10.9 3.6c8.4 2.8 17.4-1.7 20.2-10.1s-1.7-17.4-10.1-20.2l-96-32c-8.4-2.8-17.4 1.7-20.2 10.1s1.7 17.4 10.1 20.2l30.7 10.2c-5.8 5.8-9.3 13.8-9.3 22.6c0 17.7 14.3 32 32 32zm192-32c0-8.9-3.6-17-9.5-22.8l30.2-10.1c8.4-2.8 12.9-11.9 10.1-20.2s-11.9-12.9-20.2-10.1l-96 32c-8.4 2.8-12.9 11.9-10.1 20.2s11.9 12.9 20.2 10.1l11.7-3.9c-.2 1.5-.3 3.1-.3 4.7c0 17.7 14.3 32 32 32s32-14.3 32-32z"
                                                        ></path>
                                                    </svg>
                                                    <svg
                                                        class="svg-inline--fa fa-face-angry icon-style text-lg text-gray-300"
                                                        aria-hidden="true"
                                                        focusable="false"
                                                        data-prefix="fas"
                                                        data-icon="face-angry"
                                                        role="img"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512"
                                                    >
                                                        <path
                                                            class=""
                                                            fill="currentColor"
                                                            d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM338.7 395.9c6.6-5.9 7.1-16 1.2-22.6C323.8 355.4 295.7 336 256 336s-67.8 19.4-83.9 37.3c-5.9 6.6-5.4 16.7 1.2 22.6s16.7 5.4 22.6-1.2c11.7-13 31.6-26.7 60.1-26.7s48.4 13.7 60.1 26.7c5.9 6.6 16 7.1 22.6 1.2zM176.4 272c17.7 0 32-14.3 32-32c0-1.5-.1-3-.3-4.4l10.9 3.6c8.4 2.8 17.4-1.7 20.2-10.1s-1.7-17.4-10.1-20.2l-96-32c-8.4-2.8-17.4 1.7-20.2 10.1s1.7 17.4 10.1 20.2l30.7 10.2c-5.8 5.8-9.3 13.8-9.3 22.6c0 17.7 14.3 32 32 32zm192-32c0-8.9-3.6-17-9.5-22.8l30.2-10.1c8.4-2.8 12.9-11.9 10.1-20.2s-11.9-12.9-20.2-10.1l-96 32c-8.4 2.8-12.9 11.9-10.1 20.2s11.9 12.9 20.2 10.1l11.7-3.9c-.2 1.5-.3 3.1-.3 4.7c0 17.7 14.3 32 32 32s32-14.3 32-32z"
                                                        ></path>
                                                    </svg>
                                                    <svg
                                                        class="svg-inline--fa fa-face-angry icon-style text-lg text-gray-300"
                                                        aria-hidden="true"
                                                        focusable="false"
                                                        data-prefix="fas"
                                                        data-icon="face-angry"
                                                        role="img"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512"
                                                    >
                                                        <path
                                                            class=""
                                                            fill="currentColor"
                                                            d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM338.7 395.9c6.6-5.9 7.1-16 1.2-22.6C323.8 355.4 295.7 336 256 336s-67.8 19.4-83.9 37.3c-5.9 6.6-5.4 16.7 1.2 22.6s16.7 5.4 22.6-1.2c11.7-13 31.6-26.7 60.1-26.7s48.4 13.7 60.1 26.7c5.9 6.6 16 7.1 22.6 1.2zM176.4 272c17.7 0 32-14.3 32-32c0-1.5-.1-3-.3-4.4l10.9 3.6c8.4 2.8 17.4-1.7 20.2-10.1s-1.7-17.4-10.1-20.2l-96-32c-8.4-2.8-17.4 1.7-20.2 10.1s1.7 17.4 10.1 20.2l30.7 10.2c-5.8 5.8-9.3 13.8-9.3 22.6c0 17.7 14.3 32 32 32zm192-32c0-8.9-3.6-17-9.5-22.8l30.2-10.1c8.4-2.8 12.9-11.9 10.1-20.2s-11.9-12.9-20.2-10.1l-96 32c-8.4 2.8-12.9 11.9-10.1 20.2s11.9 12.9 20.2 10.1l11.7-3.9c-.2 1.5-.3 3.1-.3 4.7c0 17.7 14.3 32 32 32s32-14.3 32-32z"
                                                        ></path>
                                                    </svg>
                                                    <div class="flex absolute overflow-hidden text-xl top-0 left-0" style="width: 3.3%; color: rgb(237, 52, 52);">
                                                        <svg
                                                            class="svg-inline--fa fa-face-angry icon-style text-xl"
                                                            aria-hidden="true"
                                                            focusable="false"
                                                            data-prefix="fas"
                                                            data-icon="face-angry"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 512 512"
                                                        >
                                                            <path
                                                                class=""
                                                                fill="currentColor"
                                                                d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM338.7 395.9c6.6-5.9 7.1-16 1.2-22.6C323.8 355.4 295.7 336 256 336s-67.8 19.4-83.9 37.3c-5.9 6.6-5.4 16.7 1.2 22.6s16.7 5.4 22.6-1.2c11.7-13 31.6-26.7 60.1-26.7s48.4 13.7 60.1 26.7c5.9 6.6 16 7.1 22.6 1.2zM176.4 272c17.7 0 32-14.3 32-32c0-1.5-.1-3-.3-4.4l10.9 3.6c8.4 2.8 17.4-1.7 20.2-10.1s-1.7-17.4-10.1-20.2l-96-32c-8.4-2.8-17.4 1.7-20.2 10.1s1.7 17.4 10.1 20.2l30.7 10.2c-5.8 5.8-9.3 13.8-9.3 22.6c0 17.7 14.3 32 32 32zm192-32c0-8.9-3.6-17-9.5-22.8l30.2-10.1c8.4-2.8 12.9-11.9 10.1-20.2s-11.9-12.9-20.2-10.1l-96 32c-8.4 2.8-12.9 11.9-10.1 20.2s11.9 12.9 20.2 10.1l11.7-3.9c-.2 1.5-.3 3.1-.3 4.7c0 17.7 14.3 32 32 32s32-14.3 32-32z"
                                                            ></path>
                                                        </svg>
                                                        <svg
                                                            class="svg-inline--fa fa-face-angry icon-style text-xl"
                                                            aria-hidden="true"
                                                            focusable="false"
                                                            data-prefix="fas"
                                                            data-icon="face-angry"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 512 512"
                                                        >
                                                            <path
                                                                class=""
                                                                fill="currentColor"
                                                                d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM338.7 395.9c6.6-5.9 7.1-16 1.2-22.6C323.8 355.4 295.7 336 256 336s-67.8 19.4-83.9 37.3c-5.9 6.6-5.4 16.7 1.2 22.6s16.7 5.4 22.6-1.2c11.7-13 31.6-26.7 60.1-26.7s48.4 13.7 60.1 26.7c5.9 6.6 16 7.1 22.6 1.2zM176.4 272c17.7 0 32-14.3 32-32c0-1.5-.1-3-.3-4.4l10.9 3.6c8.4 2.8 17.4-1.7 20.2-10.1s-1.7-17.4-10.1-20.2l-96-32c-8.4-2.8-17.4 1.7-20.2 10.1s1.7 17.4 10.1 20.2l30.7 10.2c-5.8 5.8-9.3 13.8-9.3 22.6c0 17.7 14.3 32 32 32zm192-32c0-8.9-3.6-17-9.5-22.8l30.2-10.1c8.4-2.8 12.9-11.9 10.1-20.2s-11.9-12.9-20.2-10.1l-96 32c-8.4 2.8-12.9 11.9-10.1 20.2s11.9 12.9 20.2 10.1l11.7-3.9c-.2 1.5-.3 3.1-.3 4.7c0 17.7 14.3 32 32 32s32-14.3 32-32z"
                                                            ></path>
                                                        </svg>
                                                        <svg
                                                            class="svg-inline--fa fa-face-angry icon-style text-xl"
                                                            aria-hidden="true"
                                                            focusable="false"
                                                            data-prefix="fas"
                                                            data-icon="face-angry"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 512 512"
                                                        >
                                                            <path
                                                                class=""
                                                                fill="currentColor"
                                                                d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM338.7 395.9c6.6-5.9 7.1-16 1.2-22.6C323.8 355.4 295.7 336 256 336s-67.8 19.4-83.9 37.3c-5.9 6.6-5.4 16.7 1.2 22.6s16.7 5.4 22.6-1.2c11.7-13 31.6-26.7 60.1-26.7s48.4 13.7 60.1 26.7c5.9 6.6 16 7.1 22.6 1.2zM176.4 272c17.7 0 32-14.3 32-32c0-1.5-.1-3-.3-4.4l10.9 3.6c8.4 2.8 17.4-1.7 20.2-10.1s-1.7-17.4-10.1-20.2l-96-32c-8.4-2.8-17.4 1.7-20.2 10.1s1.7 17.4 10.1 20.2l30.7 10.2c-5.8 5.8-9.3 13.8-9.3 22.6c0 17.7 14.3 32 32 32zm192-32c0-8.9-3.6-17-9.5-22.8l30.2-10.1c8.4-2.8 12.9-11.9 10.1-20.2s-11.9-12.9-20.2-10.1l-96 32c-8.4 2.8-12.9 11.9-10.1 20.2s11.9 12.9 20.2 10.1l11.7-3.9c-.2 1.5-.3 3.1-.3 4.7c0 17.7 14.3 32 32 32s32-14.3 32-32z"
                                                            ></path>
                                                        </svg>
                                                        <svg
                                                            class="svg-inline--fa fa-face-angry icon-style text-xl"
                                                            aria-hidden="true"
                                                            focusable="false"
                                                            data-prefix="fas"
                                                            data-icon="face-angry"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 512 512"
                                                        >
                                                            <path
                                                                class=""
                                                                fill="currentColor"
                                                                d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM338.7 395.9c6.6-5.9 7.1-16 1.2-22.6C323.8 355.4 295.7 336 256 336s-67.8 19.4-83.9 37.3c-5.9 6.6-5.4 16.7 1.2 22.6s16.7 5.4 22.6-1.2c11.7-13 31.6-26.7 60.1-26.7s48.4 13.7 60.1 26.7c5.9 6.6 16 7.1 22.6 1.2zM176.4 272c17.7 0 32-14.3 32-32c0-1.5-.1-3-.3-4.4l10.9 3.6c8.4 2.8 17.4-1.7 20.2-10.1s-1.7-17.4-10.1-20.2l-96-32c-8.4-2.8-17.4 1.7-20.2 10.1s1.7 17.4 10.1 20.2l30.7 10.2c-5.8 5.8-9.3 13.8-9.3 22.6c0 17.7 14.3 32 32 32zm192-32c0-8.9-3.6-17-9.5-22.8l30.2-10.1c8.4-2.8 12.9-11.9 10.1-20.2s-11.9-12.9-20.2-10.1l-96 32c-8.4 2.8-12.9 11.9-10.1 20.2s11.9 12.9 20.2 10.1l11.7-3.9c-.2 1.5-.3 3.1-.3 4.7c0 17.7 14.3 32 32 32s32-14.3 32-32z"
                                                            ></path>
                                                        </svg>
                                                        <svg
                                                            class="svg-inline--fa fa-face-angry icon-style text-xl"
                                                            aria-hidden="true"
                                                            focusable="false"
                                                            data-prefix="fas"
                                                            data-icon="face-angry"
                                                            role="img"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 512 512"
                                                        >
                                                            <path
                                                                class=""
                                                                fill="currentColor"
                                                                d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM338.7 395.9c6.6-5.9 7.1-16 1.2-22.6C323.8 355.4 295.7 336 256 336s-67.8 19.4-83.9 37.3c-5.9 6.6-5.4 16.7 1.2 22.6s16.7 5.4 22.6-1.2c11.7-13 31.6-26.7 60.1-26.7s48.4 13.7 60.1 26.7c5.9 6.6 16 7.1 22.6 1.2zM176.4 272c17.7 0 32-14.3 32-32c0-1.5-.1-3-.3-4.4l10.9 3.6c8.4 2.8 17.4-1.7 20.2-10.1s-1.7-17.4-10.1-20.2l-96-32c-8.4-2.8-17.4 1.7-20.2 10.1s1.7 17.4 10.1 20.2l30.7 10.2c-5.8 5.8-9.3 13.8-9.3 22.6c0 17.7 14.3 32 32 32zm192-32c0-8.9-3.6-17-9.5-22.8l30.2-10.1c8.4-2.8 12.9-11.9 10.1-20.2s-11.9-12.9-20.2-10.1l-96 32c-8.4 2.8-12.9 11.9-10.1 20.2s11.9 12.9 20.2 10.1l11.7-3.9c-.2 1.5-.3 3.1-.3 4.7c0 17.7 14.3 32 32 32s32-14.3 32-32z"
                                                            ></path>
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
                            <div class="vue-apexcharts" style="min-height: 380.839px;">
                                <div id="apexchartsbios" class="apexcharts-canvas apexchartsbios apexcharts-theme-light" style="width: 589px; height: 365.839px;">
                                    <svg
                                        id="SvgjsSvg1438"
                                        width="589"
                                        height="365.83850931677017"
                                        xmlns="http://www.w3.org/2000/svg"
                                        version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg apexcharts-zoomable"
                                        xmlns:data="ApexChartsNS"
                                        transform="translate(0, 0)"
                                        style="background: transparent;"
                                    >
                                        <foreignObject x="0" y="0" width="589" height="365.83850931677017">
                                            <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 1px; position: absolute; max-height: 182.919px;">
                                                <div class="apexcharts-legend-series" rel="1" seriesname="Emails" data:collapsed="false" style="margin: 2px 5px;">
                                                    <span
                                                        class="apexcharts-legend-marker"
                                                        rel="1"
                                                        data:collapsed="false"
                                                        style="
                                                            background: rgb(61, 142, 240) !important;
                                                            color: rgb(61, 142, 240);
                                                            height: 12px;
                                                            width: 12px;
                                                            left: 0px;
                                                            top: 0px;
                                                            border-width: 0px;
                                                            border-color: rgb(255, 255, 255);
                                                            border-radius: 12px;
                                                        "
                                                    ></span>
                                                    <span
                                                        class="apexcharts-legend-text"
                                                        rel="1"
                                                        i="0"
                                                        data:default-text="Emails"
                                                        data:collapsed="false"
                                                        style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;"
                                                    >
                                                        Emails
                                                    </span>
                                                </div>
                                                <div class="apexcharts-legend-series" rel="2" seriesname="SMS" data:collapsed="false" style="margin: 2px 5px;">
                                                    <span
                                                        class="apexcharts-legend-marker"
                                                        rel="2"
                                                        data:collapsed="false"
                                                        style="
                                                            background: rgb(82, 179, 101) !important;
                                                            color: rgb(82, 179, 101);
                                                            height: 12px;
                                                            width: 12px;
                                                            left: 0px;
                                                            top: 0px;
                                                            border-width: 0px;
                                                            border-color: rgb(255, 255, 255);
                                                            border-radius: 12px;
                                                        "
                                                    ></span>
                                                    <span
                                                        class="apexcharts-legend-text"
                                                        rel="2"
                                                        i="1"
                                                        data:default-text="SMS"
                                                        data:collapsed="false"
                                                        style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;"
                                                    >
                                                        SMS
                                                    </span>
                                                </div>
                                            </div>
                                            <style type="text/css">
                                                .apexcharts-legend {
                                                    display: flex;
                                                    overflow: auto;
                                                    padding: 0 10px;
                                                }
                                                .apexcharts-legend.apx-legend-position-bottom,
                                                .apexcharts-legend.apx-legend-position-top {
                                                    flex-wrap: wrap;
                                                }
                                                .apexcharts-legend.apx-legend-position-right,
                                                .apexcharts-legend.apx-legend-position-left {
                                                    flex-direction: column;
                                                    bottom: 0;
                                                }
                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                .apexcharts-legend.apx-legend-position-right,
                                                .apexcharts-legend.apx-legend-position-left {
                                                    justify-content: flex-start;
                                                }
                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                    justify-content: center;
                                                }
                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                    justify-content: flex-end;
                                                }
                                                .apexcharts-legend-series {
                                                    cursor: pointer;
                                                    line-height: normal;
                                                }
                                                .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                                .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                    display: flex;
                                                    align-items: center;
                                                }
                                                .apexcharts-legend-text {
                                                    position: relative;
                                                    font-size: 14px;
                                                }
                                                .apexcharts-legend-text *,
                                                .apexcharts-legend-marker * {
                                                    pointer-events: none;
                                                }
                                                .apexcharts-legend-marker {
                                                    position: relative;
                                                    display: inline-block;
                                                    cursor: pointer;
                                                    margin-right: 3px;
                                                    border-style: solid;
                                                }

                                                .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                                .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                    display: inline-block;
                                                }
                                                .apexcharts-legend-series.apexcharts-no-click {
                                                    cursor: auto;
                                                }
                                                .apexcharts-legend .apexcharts-hidden-zero-series,
                                                .apexcharts-legend .apexcharts-hidden-null-series {
                                                    display: none !important;
                                                }
                                                .apexcharts-inactive-legend {
                                                    opacity: 0.45;
                                                }
                                            </style>
                                        </foreignObject>
                                        <rect id="SvgjsRect1444" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                        <g id="SvgjsG1607" class="apexcharts-yaxis" rel="0" transform="translate(12.7861328125, 0)">
                                            <g id="SvgjsG1608" class="apexcharts-yaxis-texts-g">
                                                <text
                                                    id="SvgjsText1610"
                                                    font-family="Helvetica, Arial, sans-serif"
                                                    x="20"
                                                    y="31.4"
                                                    text-anchor="end"
                                                    dominant-baseline="auto"
                                                    font-size="11px"
                                                    font-weight="400"
                                                    fill="#667587"
                                                    class="apexcharts-text apexcharts-yaxis-label"
                                                    style="font-family: Helvetica, Arial, sans-serif;"
                                                >
                                                    <tspan id="SvgjsTspan1611">28</tspan>
                                                    <title>28</title>
                                                </text>
                                                <text
                                                    id="SvgjsText1613"
                                                    font-family="Helvetica, Arial, sans-serif"
                                                    x="20"
                                                    y="89.3764256690363"
                                                    text-anchor="end"
                                                    dominant-baseline="auto"
                                                    font-size="11px"
                                                    font-weight="400"
                                                    fill="#667587"
                                                    class="apexcharts-text apexcharts-yaxis-label"
                                                    style="font-family: Helvetica, Arial, sans-serif;"
                                                >
                                                    <tspan id="SvgjsTspan1614">21</tspan>
                                                    <title>21</title>
                                                </text>
                                                <text
                                                    id="SvgjsText1616"
                                                    font-family="Helvetica, Arial, sans-serif"
                                                    x="20"
                                                    y="147.35285133807258"
                                                    text-anchor="end"
                                                    dominant-baseline="auto"
                                                    font-size="11px"
                                                    font-weight="400"
                                                    fill="#667587"
                                                    class="apexcharts-text apexcharts-yaxis-label"
                                                    style="font-family: Helvetica, Arial, sans-serif;"
                                                >
                                                    <tspan id="SvgjsTspan1617">14</tspan>
                                                    <title>14</title>
                                                </text>
                                                <text
                                                    id="SvgjsText1619"
                                                    font-family="Helvetica, Arial, sans-serif"
                                                    x="20"
                                                    y="205.32927700710886"
                                                    text-anchor="end"
                                                    dominant-baseline="auto"
                                                    font-size="11px"
                                                    font-weight="400"
                                                    fill="#667587"
                                                    class="apexcharts-text apexcharts-yaxis-label"
                                                    style="font-family: Helvetica, Arial, sans-serif;"
                                                >
                                                    <tspan id="SvgjsTspan1620">7</tspan>
                                                    <title>7</title>
                                                </text>
                                                <text
                                                    id="SvgjsText1622"
                                                    font-family="Helvetica, Arial, sans-serif"
                                                    x="20"
                                                    y="263.30570267614513"
                                                    text-anchor="end"
                                                    dominant-baseline="auto"
                                                    font-size="11px"
                                                    font-weight="400"
                                                    fill="#667587"
                                                    class="apexcharts-text apexcharts-yaxis-label"
                                                    style="font-family: Helvetica, Arial, sans-serif;"
                                                >
                                                    <tspan id="SvgjsTspan1623">0</tspan>
                                                    <title>0</title>
                                                </text>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1440" class="apexcharts-inner apexcharts-graphical" transform="translate(42.7861328125, 30)">
                                            <defs id="SvgjsDefs1439">
                                                <clipPath id="gridRectMask2g7fbkk3">
                                                    <rect id="SvgjsRect1446" width="545.2138671875" height="255.90570267614515" x="-7" y="-12" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMask2g7fbkk3"></clipPath>
                                                <clipPath id="nonForecastMask2g7fbkk3"></clipPath>
                                                <clipPath id="gridRectMarkerMask2g7fbkk3">
                                                    <rect id="SvgjsRect1447" width="540.2138671875" height="235.90570267614515" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient1452" x1="0" y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1453" stop-opacity="0.8" stop-color="rgba(158,199,248,0.8)" offset="0"></stop>
                                                    <stop id="SvgjsStop1454" stop-opacity="0.4" stop-color="rgba(61,142,240,0.4)" offset="1"></stop>
                                                    <stop id="SvgjsStop1455" stop-opacity="0.4" stop-color="rgba(61,142,240,0.4)" offset="1"></stop>
                                                </linearGradient>
                                                <linearGradient id="SvgjsLinearGradient1461" x1="0" y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1462" stop-opacity="0.8" stop-color="rgba(169,217,178,0.8)" offset="0"></stop>
                                                    <stop id="SvgjsStop1463" stop-opacity="0.4" stop-color="rgba(82,179,101,0.4)" offset="1"></stop>
                                                    <stop id="SvgjsStop1464" stop-opacity="0.4" stop-color="rgba(82,179,101,0.4)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <line
                                                id="SvgjsLine1445"
                                                x1="0"
                                                y1="0"
                                                x2="0"
                                                y2="231.90570267614515"
                                                stroke="#b6b6b6"
                                                stroke-dasharray="3"
                                                stroke-linecap="butt"
                                                class="apexcharts-xcrosshairs"
                                                x="0"
                                                y="0"
                                                width="1"
                                                height="231.90570267614515"
                                                fill="#b1b9c4"
                                                filter="none"
                                                fill-opacity="0.9"
                                                stroke-width="1"
                                            ></line>
                                            <line id="SvgjsLine1471" x1="0" y1="232.90570267614515" x2="0" y2="238.90570267614515" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                            <line
                                                id="SvgjsLine1472"
                                                x1="17.873795572916666"
                                                y1="232.90570267614515"
                                                x2="17.873795572916666"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1473"
                                                x1="35.74759114583333"
                                                y1="232.90570267614515"
                                                x2="35.74759114583333"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1474"
                                                x1="53.62138671875"
                                                y1="232.90570267614515"
                                                x2="53.62138671875"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1475"
                                                x1="71.49518229166667"
                                                y1="232.90570267614515"
                                                x2="71.49518229166667"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1476"
                                                x1="89.36897786458333"
                                                y1="232.90570267614515"
                                                x2="89.36897786458333"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1477"
                                                x1="107.24277343749999"
                                                y1="232.90570267614515"
                                                x2="107.24277343749999"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1478"
                                                x1="125.11656901041665"
                                                y1="232.90570267614515"
                                                x2="125.11656901041665"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1479"
                                                x1="142.99036458333333"
                                                y1="232.90570267614515"
                                                x2="142.99036458333333"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1480"
                                                x1="160.86416015625"
                                                y1="232.90570267614515"
                                                x2="160.86416015625"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1481"
                                                x1="178.73795572916666"
                                                y1="232.90570267614515"
                                                x2="178.73795572916666"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1482"
                                                x1="196.61175130208332"
                                                y1="232.90570267614515"
                                                x2="196.61175130208332"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1483"
                                                x1="214.48554687499998"
                                                y1="232.90570267614515"
                                                x2="214.48554687499998"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1484"
                                                x1="232.35934244791665"
                                                y1="232.90570267614515"
                                                x2="232.35934244791665"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1485"
                                                x1="250.2331380208333"
                                                y1="232.90570267614515"
                                                x2="250.2331380208333"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1486"
                                                x1="268.10693359375"
                                                y1="232.90570267614515"
                                                x2="268.10693359375"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1487"
                                                x1="285.98072916666666"
                                                y1="232.90570267614515"
                                                x2="285.98072916666666"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1488"
                                                x1="303.8545247395833"
                                                y1="232.90570267614515"
                                                x2="303.8545247395833"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1489"
                                                x1="321.7283203125"
                                                y1="232.90570267614515"
                                                x2="321.7283203125"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1490"
                                                x1="339.60211588541665"
                                                y1="232.90570267614515"
                                                x2="339.60211588541665"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1491"
                                                x1="357.4759114583333"
                                                y1="232.90570267614515"
                                                x2="357.4759114583333"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1492"
                                                x1="375.34970703125"
                                                y1="232.90570267614515"
                                                x2="375.34970703125"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1493"
                                                x1="393.22350260416664"
                                                y1="232.90570267614515"
                                                x2="393.22350260416664"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1494"
                                                x1="411.0972981770833"
                                                y1="232.90570267614515"
                                                x2="411.0972981770833"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1495"
                                                x1="428.97109374999997"
                                                y1="232.90570267614515"
                                                x2="428.97109374999997"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1496"
                                                x1="446.84488932291663"
                                                y1="232.90570267614515"
                                                x2="446.84488932291663"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1497"
                                                x1="464.7186848958333"
                                                y1="232.90570267614515"
                                                x2="464.7186848958333"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1498"
                                                x1="482.59248046874995"
                                                y1="232.90570267614515"
                                                x2="482.59248046874995"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1499"
                                                x1="500.4662760416666"
                                                y1="232.90570267614515"
                                                x2="500.4662760416666"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1500"
                                                x1="518.3400716145833"
                                                y1="232.90570267614515"
                                                x2="518.3400716145833"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1501"
                                                x1="536.2138671875"
                                                y1="232.90570267614515"
                                                x2="536.2138671875"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <g id="SvgjsG1467" class="apexcharts-grid">
                                                <g id="SvgjsG1468" class="apexcharts-gridlines-horizontal">
                                                    <line
                                                        id="SvgjsLine1503"
                                                        x1="0"
                                                        y1="57.97642566903629"
                                                        x2="536.2138671875"
                                                        y2="57.97642566903629"
                                                        stroke="#e0e0e0"
                                                        stroke-dasharray="0"
                                                        stroke-linecap="butt"
                                                        class="apexcharts-gridline"
                                                    ></line>
                                                    <line
                                                        id="SvgjsLine1504"
                                                        x1="0"
                                                        y1="115.95285133807258"
                                                        x2="536.2138671875"
                                                        y2="115.95285133807258"
                                                        stroke="#e0e0e0"
                                                        stroke-dasharray="0"
                                                        stroke-linecap="butt"
                                                        class="apexcharts-gridline"
                                                    ></line>
                                                    <line
                                                        id="SvgjsLine1505"
                                                        x1="0"
                                                        y1="173.92927700710885"
                                                        x2="536.2138671875"
                                                        y2="173.92927700710885"
                                                        stroke="#e0e0e0"
                                                        stroke-dasharray="0"
                                                        stroke-linecap="butt"
                                                        class="apexcharts-gridline"
                                                    ></line>
                                                </g>
                                                <g id="SvgjsG1469" class="apexcharts-gridlines-vertical"></g>
                                                <line id="SvgjsLine1508" x1="0" y1="231.90570267614515" x2="536.2138671875" y2="231.90570267614515" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine1507" x1="0" y1="1" x2="0" y2="231.90570267614515" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG1470" class="apexcharts-grid-borders">
                                                <line id="SvgjsLine1502" x1="0" y1="0" x2="536.2138671875" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line
                                                    id="SvgjsLine1506"
                                                    x1="0"
                                                    y1="231.90570267614515"
                                                    x2="536.2138671875"
                                                    y2="231.90570267614515"
                                                    stroke="#e0e0e0"
                                                    stroke-dasharray="0"
                                                    stroke-linecap="butt"
                                                    class="apexcharts-gridline"
                                                ></line>
                                                <line id="SvgjsLine1606" x1="0" y1="232.90570267614515" x2="536.2138671875" y2="232.90570267614515" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG1448" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG1449" class="apexcharts-series" zIndex="0" seriesName="Emails" data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path
                                                        id="SvgjsPath1456"
                                                        d="M 0 231.90570267614515 L 0 74.54111871733238 L 17.873795572916666 91.10581176562846 L 35.74759114583333 149.08223743466476 L 53.621386718749996 66.25877219318434 L 71.49518229166667 207.05866310370104 L 89.36897786458333 173.92927700710885 L 107.24277343749999 41.411732620740196 L 125.11656901041667 66.25877219318434 L 142.99036458333333 107.67050481392454 L 160.86416015625 140.7998909105167 L 178.73795572916666 149.08223743466476 L 196.61175130208332 165.64693048296084 L 214.48554687499998 207.05866310370104 L 232.35934244791665 91.10581176562846 L 250.23313802083334 124.23519786222062 L 268.10693359375 107.67050481392454 L 285.98072916666666 140.7998909105167 L 303.8545247395833 57.9764256690363 L 321.7283203125 157.36458395881277 L 339.60211588541665 198.776316579553 L 357.4759114583333 82.82346524148042 L 375.34970703125 231.90570267614515 L 393.22350260416664 231.90570267614515 L 411.0972981770833 231.90570267614515 L 428.97109374999997 231.90570267614515 L 446.84488932291663 231.90570267614515 L 464.7186848958333 231.90570267614515 L 482.59248046874995 231.90570267614515 L 500.4662760416667 231.90570267614515 L 518.3400716145833 231.90570267614515 L 536.2138671875 231.90570267614515 L 536.2138671875 231.90570267614515M 536.2138671875 231.90570267614515z"
                                                        fill="url(#SvgjsLinearGradient1452)"
                                                        fill-opacity="1"
                                                        stroke-opacity="1"
                                                        stroke-linecap="butt"
                                                        stroke-width="0"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-area"
                                                        index="0"
                                                        clip-path="url(#gridRectMask2g7fbkk3)"
                                                        pathTo="M 0 231.90570267614515 L 0 74.54111871733238 L 17.873795572916666 91.10581176562846 L 35.74759114583333 149.08223743466476 L 53.621386718749996 66.25877219318434 L 71.49518229166667 207.05866310370104 L 89.36897786458333 173.92927700710885 L 107.24277343749999 41.411732620740196 L 125.11656901041667 66.25877219318434 L 142.99036458333333 107.67050481392454 L 160.86416015625 140.7998909105167 L 178.73795572916666 149.08223743466476 L 196.61175130208332 165.64693048296084 L 214.48554687499998 207.05866310370104 L 232.35934244791665 91.10581176562846 L 250.23313802083334 124.23519786222062 L 268.10693359375 107.67050481392454 L 285.98072916666666 140.7998909105167 L 303.8545247395833 57.9764256690363 L 321.7283203125 157.36458395881277 L 339.60211588541665 198.776316579553 L 357.4759114583333 82.82346524148042 L 375.34970703125 231.90570267614515 L 393.22350260416664 231.90570267614515 L 411.0972981770833 231.90570267614515 L 428.97109374999997 231.90570267614515 L 446.84488932291663 231.90570267614515 L 464.7186848958333 231.90570267614515 L 482.59248046874995 231.90570267614515 L 500.4662760416667 231.90570267614515 L 518.3400716145833 231.90570267614515 L 536.2138671875 231.90570267614515 L 536.2138671875 231.90570267614515M 536.2138671875 231.90570267614515z"
                                                        pathFrom="M -1 231.90570267614515 L -1 231.90570267614515 L 17.873795572916666 231.90570267614515 L 35.74759114583333 231.90570267614515 L 53.621386718749996 231.90570267614515 L 71.49518229166667 231.90570267614515 L 89.36897786458333 231.90570267614515 L 107.24277343749999 231.90570267614515 L 125.11656901041667 231.90570267614515 L 142.99036458333333 231.90570267614515 L 160.86416015625 231.90570267614515 L 178.73795572916666 231.90570267614515 L 196.61175130208332 231.90570267614515 L 214.48554687499998 231.90570267614515 L 232.35934244791665 231.90570267614515 L 250.23313802083334 231.90570267614515 L 268.10693359375 231.90570267614515 L 285.98072916666666 231.90570267614515 L 303.8545247395833 231.90570267614515 L 321.7283203125 231.90570267614515 L 339.60211588541665 231.90570267614515 L 357.4759114583333 231.90570267614515 L 375.34970703125 231.90570267614515 L 393.22350260416664 231.90570267614515 L 411.0972981770833 231.90570267614515 L 428.97109374999997 231.90570267614515 L 446.84488932291663 231.90570267614515 L 464.7186848958333 231.90570267614515 L 482.59248046874995 231.90570267614515 L 500.4662760416667 231.90570267614515 L 518.3400716145833 231.90570267614515 L 536.2138671875 231.90570267614515"
                                                    ></path>
                                                    <path
                                                        id="SvgjsPath1457"
                                                        d="M 0 74.54111871733238 L 17.873795572916666 91.10581176562846 L 35.74759114583333 149.08223743466476 L 53.621386718749996 66.25877219318434 L 71.49518229166667 207.05866310370104 L 89.36897786458333 173.92927700710885 L 107.24277343749999 41.411732620740196 L 125.11656901041667 66.25877219318434 L 142.99036458333333 107.67050481392454 L 160.86416015625 140.7998909105167 L 178.73795572916666 149.08223743466476 L 196.61175130208332 165.64693048296084 L 214.48554687499998 207.05866310370104 L 232.35934244791665 91.10581176562846 L 250.23313802083334 124.23519786222062 L 268.10693359375 107.67050481392454 L 285.98072916666666 140.7998909105167 L 303.8545247395833 57.9764256690363 L 321.7283203125 157.36458395881277 L 339.60211588541665 198.776316579553 L 357.4759114583333 82.82346524148042 L 375.34970703125 231.90570267614515 L 393.22350260416664 231.90570267614515 L 411.0972981770833 231.90570267614515 L 428.97109374999997 231.90570267614515 L 446.84488932291663 231.90570267614515 L 464.7186848958333 231.90570267614515 L 482.59248046874995 231.90570267614515 L 500.4662760416667 231.90570267614515 L 518.3400716145833 231.90570267614515 L 536.2138671875 231.90570267614515"
                                                        fill="none"
                                                        fill-opacity="1"
                                                        stroke="#3d8ef0"
                                                        stroke-opacity="1"
                                                        stroke-linecap="butt"
                                                        stroke-width="5"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-area"
                                                        index="0"
                                                        clip-path="url(#gridRectMask2g7fbkk3)"
                                                        pathTo="M 0 74.54111871733238 L 17.873795572916666 91.10581176562846 L 35.74759114583333 149.08223743466476 L 53.621386718749996 66.25877219318434 L 71.49518229166667 207.05866310370104 L 89.36897786458333 173.92927700710885 L 107.24277343749999 41.411732620740196 L 125.11656901041667 66.25877219318434 L 142.99036458333333 107.67050481392454 L 160.86416015625 140.7998909105167 L 178.73795572916666 149.08223743466476 L 196.61175130208332 165.64693048296084 L 214.48554687499998 207.05866310370104 L 232.35934244791665 91.10581176562846 L 250.23313802083334 124.23519786222062 L 268.10693359375 107.67050481392454 L 285.98072916666666 140.7998909105167 L 303.8545247395833 57.9764256690363 L 321.7283203125 157.36458395881277 L 339.60211588541665 198.776316579553 L 357.4759114583333 82.82346524148042 L 375.34970703125 231.90570267614515 L 393.22350260416664 231.90570267614515 L 411.0972981770833 231.90570267614515 L 428.97109374999997 231.90570267614515 L 446.84488932291663 231.90570267614515 L 464.7186848958333 231.90570267614515 L 482.59248046874995 231.90570267614515 L 500.4662760416667 231.90570267614515 L 518.3400716145833 231.90570267614515 L 536.2138671875 231.90570267614515"
                                                        pathFrom="M -1 231.90570267614515 L -1 231.90570267614515 L 17.873795572916666 231.90570267614515 L 35.74759114583333 231.90570267614515 L 53.621386718749996 231.90570267614515 L 71.49518229166667 231.90570267614515 L 89.36897786458333 231.90570267614515 L 107.24277343749999 231.90570267614515 L 125.11656901041667 231.90570267614515 L 142.99036458333333 231.90570267614515 L 160.86416015625 231.90570267614515 L 178.73795572916666 231.90570267614515 L 196.61175130208332 231.90570267614515 L 214.48554687499998 231.90570267614515 L 232.35934244791665 231.90570267614515 L 250.23313802083334 231.90570267614515 L 268.10693359375 231.90570267614515 L 285.98072916666666 231.90570267614515 L 303.8545247395833 231.90570267614515 L 321.7283203125 231.90570267614515 L 339.60211588541665 231.90570267614515 L 357.4759114583333 231.90570267614515 L 375.34970703125 231.90570267614515 L 393.22350260416664 231.90570267614515 L 411.0972981770833 231.90570267614515 L 428.97109374999997 231.90570267614515 L 446.84488932291663 231.90570267614515 L 464.7186848958333 231.90570267614515 L 482.59248046874995 231.90570267614515 L 500.4662760416667 231.90570267614515 L 518.3400716145833 231.90570267614515 L 536.2138671875 231.90570267614515"
                                                        fill-rule="evenodd"
                                                    ></path>
                                                    <g id="SvgjsG1450" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0">
                                                        <g class="apexcharts-series-markers">
                                                            <circle
                                                                id="SvgjsCircle1627"
                                                                r="0"
                                                                cx="0"
                                                                cy="0"
                                                                class="apexcharts-marker wpo4ymgra"
                                                                stroke="#ffffff"
                                                                fill="#3d8ef0"
                                                                fill-opacity="1"
                                                                stroke-width="2"
                                                                stroke-opacity="0.9"
                                                                default-marker-size="0"
                                                            ></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1458" class="apexcharts-series" zIndex="1" seriesName="SMS" data:longestSeries="true" rel="2" data:realIndex="1">
                                                    <path
                                                        id="SvgjsPath1465"
                                                        d="M 0 231.90570267614515 L 0 74.54111871733238 L 17.873795572916666 91.10581176562846 L 35.74759114583333 140.7998909105167 L 53.621386718749996 33.12938609659216 L 71.49518229166667 207.05866310370104 L 89.36897786458333 173.92927700710885 L 107.24277343749999 57.9764256690363 L 125.11656901041667 74.54111871733238 L 142.99036458333333 124.23519786222062 L 160.86416015625 124.23519786222062 L 178.73795572916666 132.51754438636866 L 196.61175130208332 165.64693048296084 L 214.48554687499998 198.776316579553 L 232.35934244791665 107.67050481392454 L 250.23313802083334 140.7998909105167 L 268.10693359375 107.67050481392454 L 285.98072916666666 140.7998909105167 L 303.8545247395833 91.10581176562846 L 321.7283203125 165.64693048296084 L 339.60211588541665 207.05866310370104 L 357.4759114583333 82.82346524148042 L 375.34970703125 115.95285133807258 L 393.22350260416664 82.82346524148042 L 411.0972981770833 74.54111871733238 L 428.97109374999997 8.28234652414804 L 446.84488932291663 182.21162353125692 L 464.7186848958333 223.62335615199711 L 482.59248046874995 49.69407914488826 L 500.4662760416667 33.12938609659216 L 518.3400716145833 41.411732620740196 L 536.2138671875 74.54111871733238 L 536.2138671875 231.90570267614515M 536.2138671875 74.54111871733238z"
                                                        fill="url(#SvgjsLinearGradient1461)"
                                                        fill-opacity="1"
                                                        stroke-opacity="1"
                                                        stroke-linecap="butt"
                                                        stroke-width="0"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-area"
                                                        index="1"
                                                        clip-path="url(#gridRectMask2g7fbkk3)"
                                                        pathTo="M 0 231.90570267614515 L 0 74.54111871733238 L 17.873795572916666 91.10581176562846 L 35.74759114583333 140.7998909105167 L 53.621386718749996 33.12938609659216 L 71.49518229166667 207.05866310370104 L 89.36897786458333 173.92927700710885 L 107.24277343749999 57.9764256690363 L 125.11656901041667 74.54111871733238 L 142.99036458333333 124.23519786222062 L 160.86416015625 124.23519786222062 L 178.73795572916666 132.51754438636866 L 196.61175130208332 165.64693048296084 L 214.48554687499998 198.776316579553 L 232.35934244791665 107.67050481392454 L 250.23313802083334 140.7998909105167 L 268.10693359375 107.67050481392454 L 285.98072916666666 140.7998909105167 L 303.8545247395833 91.10581176562846 L 321.7283203125 165.64693048296084 L 339.60211588541665 207.05866310370104 L 357.4759114583333 82.82346524148042 L 375.34970703125 115.95285133807258 L 393.22350260416664 82.82346524148042 L 411.0972981770833 74.54111871733238 L 428.97109374999997 8.28234652414804 L 446.84488932291663 182.21162353125692 L 464.7186848958333 223.62335615199711 L 482.59248046874995 49.69407914488826 L 500.4662760416667 33.12938609659216 L 518.3400716145833 41.411732620740196 L 536.2138671875 74.54111871733238 L 536.2138671875 231.90570267614515M 536.2138671875 74.54111871733238z"
                                                        pathFrom="M -1 231.90570267614515 L -1 231.90570267614515 L 17.873795572916666 231.90570267614515 L 35.74759114583333 231.90570267614515 L 53.621386718749996 231.90570267614515 L 71.49518229166667 231.90570267614515 L 89.36897786458333 231.90570267614515 L 107.24277343749999 231.90570267614515 L 125.11656901041667 231.90570267614515 L 142.99036458333333 231.90570267614515 L 160.86416015625 231.90570267614515 L 178.73795572916666 231.90570267614515 L 196.61175130208332 231.90570267614515 L 214.48554687499998 231.90570267614515 L 232.35934244791665 231.90570267614515 L 250.23313802083334 231.90570267614515 L 268.10693359375 231.90570267614515 L 285.98072916666666 231.90570267614515 L 303.8545247395833 231.90570267614515 L 321.7283203125 231.90570267614515 L 339.60211588541665 231.90570267614515 L 357.4759114583333 231.90570267614515 L 375.34970703125 231.90570267614515 L 393.22350260416664 231.90570267614515 L 411.0972981770833 231.90570267614515 L 428.97109374999997 231.90570267614515 L 446.84488932291663 231.90570267614515 L 464.7186848958333 231.90570267614515 L 482.59248046874995 231.90570267614515 L 500.4662760416667 231.90570267614515 L 518.3400716145833 231.90570267614515 L 536.2138671875 231.90570267614515"
                                                    ></path>
                                                    <path
                                                        id="SvgjsPath1466"
                                                        d="M 0 74.54111871733238 L 17.873795572916666 91.10581176562846 L 35.74759114583333 140.7998909105167 L 53.621386718749996 33.12938609659216 L 71.49518229166667 207.05866310370104 L 89.36897786458333 173.92927700710885 L 107.24277343749999 57.9764256690363 L 125.11656901041667 74.54111871733238 L 142.99036458333333 124.23519786222062 L 160.86416015625 124.23519786222062 L 178.73795572916666 132.51754438636866 L 196.61175130208332 165.64693048296084 L 214.48554687499998 198.776316579553 L 232.35934244791665 107.67050481392454 L 250.23313802083334 140.7998909105167 L 268.10693359375 107.67050481392454 L 285.98072916666666 140.7998909105167 L 303.8545247395833 91.10581176562846 L 321.7283203125 165.64693048296084 L 339.60211588541665 207.05866310370104 L 357.4759114583333 82.82346524148042 L 375.34970703125 115.95285133807258 L 393.22350260416664 82.82346524148042 L 411.0972981770833 74.54111871733238 L 428.97109374999997 8.28234652414804 L 446.84488932291663 182.21162353125692 L 464.7186848958333 223.62335615199711 L 482.59248046874995 49.69407914488826 L 500.4662760416667 33.12938609659216 L 518.3400716145833 41.411732620740196 L 536.2138671875 74.54111871733238"
                                                        fill="none"
                                                        fill-opacity="1"
                                                        stroke="#52b365"
                                                        stroke-opacity="1"
                                                        stroke-linecap="butt"
                                                        stroke-width="5"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-area"
                                                        index="1"
                                                        clip-path="url(#gridRectMask2g7fbkk3)"
                                                        pathTo="M 0 74.54111871733238 L 17.873795572916666 91.10581176562846 L 35.74759114583333 140.7998909105167 L 53.621386718749996 33.12938609659216 L 71.49518229166667 207.05866310370104 L 89.36897786458333 173.92927700710885 L 107.24277343749999 57.9764256690363 L 125.11656901041667 74.54111871733238 L 142.99036458333333 124.23519786222062 L 160.86416015625 124.23519786222062 L 178.73795572916666 132.51754438636866 L 196.61175130208332 165.64693048296084 L 214.48554687499998 198.776316579553 L 232.35934244791665 107.67050481392454 L 250.23313802083334 140.7998909105167 L 268.10693359375 107.67050481392454 L 285.98072916666666 140.7998909105167 L 303.8545247395833 91.10581176562846 L 321.7283203125 165.64693048296084 L 339.60211588541665 207.05866310370104 L 357.4759114583333 82.82346524148042 L 375.34970703125 115.95285133807258 L 393.22350260416664 82.82346524148042 L 411.0972981770833 74.54111871733238 L 428.97109374999997 8.28234652414804 L 446.84488932291663 182.21162353125692 L 464.7186848958333 223.62335615199711 L 482.59248046874995 49.69407914488826 L 500.4662760416667 33.12938609659216 L 518.3400716145833 41.411732620740196 L 536.2138671875 74.54111871733238"
                                                        pathFrom="M -1 231.90570267614515 L -1 231.90570267614515 L 17.873795572916666 231.90570267614515 L 35.74759114583333 231.90570267614515 L 53.621386718749996 231.90570267614515 L 71.49518229166667 231.90570267614515 L 89.36897786458333 231.90570267614515 L 107.24277343749999 231.90570267614515 L 125.11656901041667 231.90570267614515 L 142.99036458333333 231.90570267614515 L 160.86416015625 231.90570267614515 L 178.73795572916666 231.90570267614515 L 196.61175130208332 231.90570267614515 L 214.48554687499998 231.90570267614515 L 232.35934244791665 231.90570267614515 L 250.23313802083334 231.90570267614515 L 268.10693359375 231.90570267614515 L 285.98072916666666 231.90570267614515 L 303.8545247395833 231.90570267614515 L 321.7283203125 231.90570267614515 L 339.60211588541665 231.90570267614515 L 357.4759114583333 231.90570267614515 L 375.34970703125 231.90570267614515 L 393.22350260416664 231.90570267614515 L 411.0972981770833 231.90570267614515 L 428.97109374999997 231.90570267614515 L 446.84488932291663 231.90570267614515 L 464.7186848958333 231.90570267614515 L 482.59248046874995 231.90570267614515 L 500.4662760416667 231.90570267614515 L 518.3400716145833 231.90570267614515 L 536.2138671875 231.90570267614515"
                                                        fill-rule="evenodd"
                                                    ></path>
                                                    <g id="SvgjsG1459" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="1">
                                                        <g class="apexcharts-series-markers">
                                                            <circle
                                                                id="SvgjsCircle1628"
                                                                r="0"
                                                                cx="0"
                                                                cy="0"
                                                                class="apexcharts-marker w5s7i3pj7k"
                                                                stroke="#ffffff"
                                                                fill="#52b365"
                                                                fill-opacity="1"
                                                                stroke-width="2"
                                                                stroke-opacity="0.9"
                                                                default-marker-size="0"
                                                            ></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1451" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                <g id="SvgjsG1460" class="apexcharts-datalabels" data:realIndex="1"></g>
                                            </g>
                                            <line id="SvgjsLine1509" x1="0" y1="0" x2="536.2138671875" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1510" x1="0" y1="0" x2="536.2138671875" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1511" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1512" class="apexcharts-xaxis-texts-g" transform="translate(0, -10)">
                                                    <text
                                                        id="SvgjsText1514"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="0"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1.10498046875 248.90570068359375)"
                                                    >
                                                        <tspan id="SvgjsTspan1515">07/02/24</tspan>
                                                        <title>07/02/24</title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1517"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="17.87379557291667"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1518"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1520"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="35.74759114583334"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1521"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1523"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="53.62138671875"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1524"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1526"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="71.49518229166667"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1527"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1529"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="89.36897786458333"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1530"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1532"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="107.24277343749999"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 108.34776306152344 248.90570068359375)"
                                                    >
                                                        <tspan id="SvgjsTspan1533">07/08/24</tspan>
                                                        <title>07/08/24</title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1535"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="125.11656901041667"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1536"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1538"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="142.99036458333333"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1539"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1541"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="160.86416015625"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1542"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1544"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="178.73795572916666"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1545"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1547"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="196.61175130208332"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1548"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1550"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="214.48554687499998"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 215.59054565429688 248.90570068359375)"
                                                    >
                                                        <tspan id="SvgjsTspan1551">07/14/24</tspan>
                                                        <title>07/14/24</title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1553"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="232.35934244791665"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1554"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1556"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="250.2331380208333"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1557"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1559"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="268.10693359374994"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1560"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1562"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="285.9807291666666"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1563"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1565"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="303.85452473958327"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1566"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1568"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="321.72832031249993"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 322.83331298828125 248.90570068359375)"
                                                    >
                                                        <tspan id="SvgjsTspan1569">07/20/24</tspan>
                                                        <title>07/20/24</title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1571"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="339.6021158854166"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1572"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1574"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="357.47591145833326"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1575"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1577"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="375.3497070312499"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1578"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1580"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="393.2235026041666"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1581"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1583"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="411.09729817708325"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1584"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1586"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="428.9710937499999"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 430.0760803222656 248.90570068359375)"
                                                    >
                                                        <tspan id="SvgjsTspan1587">07/26/24</tspan>
                                                        <title>07/26/24</title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1589"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="446.8448893229166"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1590"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1592"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="464.71868489583323"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1593"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1595"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="482.5924804687499"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1596"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1598"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="500.46627604166656"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1599"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1601"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="518.3400716145833"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1602"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1604"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="536.2138671875"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 537.31884765625 248.90570068359375)"
                                                    >
                                                        <tspan id="SvgjsTspan1605">08/01/24</tspan>
                                                        <title>08/01/24</title>
                                                    </text>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1624" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1625" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1626" class="apexcharts-point-annotations"></g>
                                            <rect id="SvgjsRect1629" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                            <rect id="SvgjsRect1630" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                        </g>
                                    </svg>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                            <span class="apexcharts-tooltip-marker" style="background-color: rgb(61, 142, 240);"></span>
                                            <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 2;">
                                            <span class="apexcharts-tooltip-marker" style="background-color: rgb(82, 179, 101);"></span>
                                            <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                        <div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    </div>
                                    <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div>
                                </div>
                            </div>
                        </div>
                        <div data-v-4c587d70="" class="panel-footer"></div>
                    </div>
                </div>
                <div data-v-1e6cb5de="" data-v-04366469="" class="">
                    <div data-v-4c587d70="" data-v-1e6cb5de="" class="panel bg-white w-full h-full flex flex-col items-stretch col-span-1">
                        <div data-v-4c587d70="" class="panel-header">pulseChecks</div>
                        <div data-v-4c587d70="" class="panel-body flex-grow flex flex-col justify-center items-stretch">
                            <div data-v-1e6cb5de="" class="vue-apexcharts" style="min-height: 380.839px;">
                                <div id="apexchartspulseChecks" class="apexcharts-canvas apexchartspulseChecks apexcharts-theme-light" style="width: 589px; height: 365.839px;">
                                    <svg
                                        id="SvgjsSvg1633"
                                        width="589"
                                        height="365.83850931677017"
                                        xmlns="http://www.w3.org/2000/svg"
                                        version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg apexcharts-zoomable"
                                        xmlns:data="ApexChartsNS"
                                        transform="translate(0, 0)"
                                        style="background: transparent;"
                                    >
                                        <foreignObject x="0" y="0" width="589" height="365.83850931677017">
                                            <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 1px; position: absolute; max-height: 182.919px;">
                                                <div class="apexcharts-legend-series" rel="1" seriesname="Emails" data:collapsed="false" style="margin: 2px 5px;">
                                                    <span
                                                        class="apexcharts-legend-marker"
                                                        rel="1"
                                                        data:collapsed="false"
                                                        style="
                                                            background: rgb(61, 142, 240) !important;
                                                            color: rgb(61, 142, 240);
                                                            height: 12px;
                                                            width: 12px;
                                                            left: 0px;
                                                            top: 0px;
                                                            border-width: 0px;
                                                            border-color: rgb(255, 255, 255);
                                                            border-radius: 12px;
                                                        "
                                                    ></span>
                                                    <span
                                                        class="apexcharts-legend-text"
                                                        rel="1"
                                                        i="0"
                                                        data:default-text="Emails"
                                                        data:collapsed="false"
                                                        style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;"
                                                    >
                                                        Emails
                                                    </span>
                                                </div>
                                                <div class="apexcharts-legend-series" rel="2" seriesname="SMS" data:collapsed="false" style="margin: 2px 5px;">
                                                    <span
                                                        class="apexcharts-legend-marker"
                                                        rel="2"
                                                        data:collapsed="false"
                                                        style="
                                                            background: rgb(82, 179, 101) !important;
                                                            color: rgb(82, 179, 101);
                                                            height: 12px;
                                                            width: 12px;
                                                            left: 0px;
                                                            top: 0px;
                                                            border-width: 0px;
                                                            border-color: rgb(255, 255, 255);
                                                            border-radius: 12px;
                                                        "
                                                    ></span>
                                                    <span
                                                        class="apexcharts-legend-text"
                                                        rel="2"
                                                        i="1"
                                                        data:default-text="SMS"
                                                        data:collapsed="false"
                                                        style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;"
                                                    >
                                                        SMS
                                                    </span>
                                                </div>
                                            </div>
                                            <style type="text/css">
                                                .apexcharts-legend {
                                                    display: flex;
                                                    overflow: auto;
                                                    padding: 0 10px;
                                                }
                                                .apexcharts-legend.apx-legend-position-bottom,
                                                .apexcharts-legend.apx-legend-position-top {
                                                    flex-wrap: wrap;
                                                }
                                                .apexcharts-legend.apx-legend-position-right,
                                                .apexcharts-legend.apx-legend-position-left {
                                                    flex-direction: column;
                                                    bottom: 0;
                                                }
                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                .apexcharts-legend.apx-legend-position-right,
                                                .apexcharts-legend.apx-legend-position-left {
                                                    justify-content: flex-start;
                                                }
                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                    justify-content: center;
                                                }
                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                    justify-content: flex-end;
                                                }
                                                .apexcharts-legend-series {
                                                    cursor: pointer;
                                                    line-height: normal;
                                                }
                                                .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                                .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                    display: flex;
                                                    align-items: center;
                                                }
                                                .apexcharts-legend-text {
                                                    position: relative;
                                                    font-size: 14px;
                                                }
                                                .apexcharts-legend-text *,
                                                .apexcharts-legend-marker * {
                                                    pointer-events: none;
                                                }
                                                .apexcharts-legend-marker {
                                                    position: relative;
                                                    display: inline-block;
                                                    cursor: pointer;
                                                    margin-right: 3px;
                                                    border-style: solid;
                                                }

                                                .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                                .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                    display: inline-block;
                                                }
                                                .apexcharts-legend-series.apexcharts-no-click {
                                                    cursor: auto;
                                                }
                                                .apexcharts-legend .apexcharts-hidden-zero-series,
                                                .apexcharts-legend .apexcharts-hidden-null-series {
                                                    display: none !important;
                                                }
                                                .apexcharts-inactive-legend {
                                                    opacity: 0.45;
                                                }
                                            </style>
                                        </foreignObject>
                                        <rect id="SvgjsRect1639" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                        <g id="SvgjsG1803" class="apexcharts-yaxis" rel="0" transform="translate(12.7861328125, 0)">
                                            <g id="SvgjsG1804" class="apexcharts-yaxis-texts-g">
                                                <text
                                                    id="SvgjsText1806"
                                                    font-family="Helvetica, Arial, sans-serif"
                                                    x="20"
                                                    y="31.5"
                                                    text-anchor="end"
                                                    dominant-baseline="auto"
                                                    font-size="11px"
                                                    font-weight="400"
                                                    fill="#667587"
                                                    class="apexcharts-text apexcharts-yaxis-label"
                                                    style="font-family: Helvetica, Arial, sans-serif;"
                                                >
                                                    <tspan id="SvgjsTspan1807">50</tspan>
                                                    <title>50</title>
                                                </text>
                                                <text
                                                    id="SvgjsText1809"
                                                    font-family="Helvetica, Arial, sans-serif"
                                                    x="20"
                                                    y="77.88114053522904"
                                                    text-anchor="end"
                                                    dominant-baseline="auto"
                                                    font-size="11px"
                                                    font-weight="400"
                                                    fill="#667587"
                                                    class="apexcharts-text apexcharts-yaxis-label"
                                                    style="font-family: Helvetica, Arial, sans-serif;"
                                                >
                                                    <tspan id="SvgjsTspan1810">40</tspan>
                                                    <title>40</title>
                                                </text>
                                                <text
                                                    id="SvgjsText1812"
                                                    font-family="Helvetica, Arial, sans-serif"
                                                    x="20"
                                                    y="124.26228107045807"
                                                    text-anchor="end"
                                                    dominant-baseline="auto"
                                                    font-size="11px"
                                                    font-weight="400"
                                                    fill="#667587"
                                                    class="apexcharts-text apexcharts-yaxis-label"
                                                    style="font-family: Helvetica, Arial, sans-serif;"
                                                >
                                                    <tspan id="SvgjsTspan1813">30</tspan>
                                                    <title>30</title>
                                                </text>
                                                <text
                                                    id="SvgjsText1815"
                                                    font-family="Helvetica, Arial, sans-serif"
                                                    x="20"
                                                    y="170.6434216056871"
                                                    text-anchor="end"
                                                    dominant-baseline="auto"
                                                    font-size="11px"
                                                    font-weight="400"
                                                    fill="#667587"
                                                    class="apexcharts-text apexcharts-yaxis-label"
                                                    style="font-family: Helvetica, Arial, sans-serif;"
                                                >
                                                    <tspan id="SvgjsTspan1816">20</tspan>
                                                    <title>20</title>
                                                </text>
                                                <text
                                                    id="SvgjsText1818"
                                                    font-family="Helvetica, Arial, sans-serif"
                                                    x="20"
                                                    y="217.02456214091615"
                                                    text-anchor="end"
                                                    dominant-baseline="auto"
                                                    font-size="11px"
                                                    font-weight="400"
                                                    fill="#667587"
                                                    class="apexcharts-text apexcharts-yaxis-label"
                                                    style="font-family: Helvetica, Arial, sans-serif;"
                                                >
                                                    <tspan id="SvgjsTspan1819">10</tspan>
                                                    <title>10</title>
                                                </text>
                                                <text
                                                    id="SvgjsText1821"
                                                    font-family="Helvetica, Arial, sans-serif"
                                                    x="20"
                                                    y="263.40570267614515"
                                                    text-anchor="end"
                                                    dominant-baseline="auto"
                                                    font-size="11px"
                                                    font-weight="400"
                                                    fill="#667587"
                                                    class="apexcharts-text apexcharts-yaxis-label"
                                                    style="font-family: Helvetica, Arial, sans-serif;"
                                                >
                                                    <tspan id="SvgjsTspan1822">0</tspan>
                                                    <title>0</title>
                                                </text>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1635" class="apexcharts-inner apexcharts-graphical" transform="translate(42.7861328125, 30)">
                                            <defs id="SvgjsDefs1634">
                                                <clipPath id="gridRectMaskv8gzeydq">
                                                    <rect id="SvgjsRect1641" width="545.2138671875" height="255.90570267614515" x="-7" y="-12" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskv8gzeydq"></clipPath>
                                                <clipPath id="nonForecastMaskv8gzeydq"></clipPath>
                                                <clipPath id="gridRectMarkerMaskv8gzeydq">
                                                    <rect id="SvgjsRect1642" width="540.2138671875" height="235.90570267614515" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient1647" x1="0" y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1648" stop-opacity="0.8" stop-color="rgba(158,199,248,0.8)" offset="0"></stop>
                                                    <stop id="SvgjsStop1649" stop-opacity="0.4" stop-color="rgba(61,142,240,0.4)" offset="1"></stop>
                                                    <stop id="SvgjsStop1650" stop-opacity="0.4" stop-color="rgba(61,142,240,0.4)" offset="1"></stop>
                                                </linearGradient>
                                                <linearGradient id="SvgjsLinearGradient1656" x1="0" y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1657" stop-opacity="0.8" stop-color="rgba(169,217,178,0.8)" offset="0"></stop>
                                                    <stop id="SvgjsStop1658" stop-opacity="0.4" stop-color="rgba(82,179,101,0.4)" offset="1"></stop>
                                                    <stop id="SvgjsStop1659" stop-opacity="0.4" stop-color="rgba(82,179,101,0.4)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <line
                                                id="SvgjsLine1640"
                                                x1="0"
                                                y1="0"
                                                x2="0"
                                                y2="231.90570267614515"
                                                stroke="#b6b6b6"
                                                stroke-dasharray="3"
                                                stroke-linecap="butt"
                                                class="apexcharts-xcrosshairs"
                                                x="0"
                                                y="0"
                                                width="1"
                                                height="231.90570267614515"
                                                fill="#b1b9c4"
                                                filter="none"
                                                fill-opacity="0.9"
                                                stroke-width="1"
                                            ></line>
                                            <line id="SvgjsLine1666" x1="0" y1="232.90570267614515" x2="0" y2="238.90570267614515" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                            <line
                                                id="SvgjsLine1667"
                                                x1="17.873795572916666"
                                                y1="232.90570267614515"
                                                x2="17.873795572916666"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1668"
                                                x1="35.74759114583333"
                                                y1="232.90570267614515"
                                                x2="35.74759114583333"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1669"
                                                x1="53.62138671875"
                                                y1="232.90570267614515"
                                                x2="53.62138671875"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1670"
                                                x1="71.49518229166667"
                                                y1="232.90570267614515"
                                                x2="71.49518229166667"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1671"
                                                x1="89.36897786458333"
                                                y1="232.90570267614515"
                                                x2="89.36897786458333"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1672"
                                                x1="107.24277343749999"
                                                y1="232.90570267614515"
                                                x2="107.24277343749999"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1673"
                                                x1="125.11656901041665"
                                                y1="232.90570267614515"
                                                x2="125.11656901041665"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1674"
                                                x1="142.99036458333333"
                                                y1="232.90570267614515"
                                                x2="142.99036458333333"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1675"
                                                x1="160.86416015625"
                                                y1="232.90570267614515"
                                                x2="160.86416015625"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1676"
                                                x1="178.73795572916666"
                                                y1="232.90570267614515"
                                                x2="178.73795572916666"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1677"
                                                x1="196.61175130208332"
                                                y1="232.90570267614515"
                                                x2="196.61175130208332"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1678"
                                                x1="214.48554687499998"
                                                y1="232.90570267614515"
                                                x2="214.48554687499998"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1679"
                                                x1="232.35934244791665"
                                                y1="232.90570267614515"
                                                x2="232.35934244791665"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1680"
                                                x1="250.2331380208333"
                                                y1="232.90570267614515"
                                                x2="250.2331380208333"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1681"
                                                x1="268.10693359375"
                                                y1="232.90570267614515"
                                                x2="268.10693359375"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1682"
                                                x1="285.98072916666666"
                                                y1="232.90570267614515"
                                                x2="285.98072916666666"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1683"
                                                x1="303.8545247395833"
                                                y1="232.90570267614515"
                                                x2="303.8545247395833"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1684"
                                                x1="321.7283203125"
                                                y1="232.90570267614515"
                                                x2="321.7283203125"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1685"
                                                x1="339.60211588541665"
                                                y1="232.90570267614515"
                                                x2="339.60211588541665"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1686"
                                                x1="357.4759114583333"
                                                y1="232.90570267614515"
                                                x2="357.4759114583333"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1687"
                                                x1="375.34970703125"
                                                y1="232.90570267614515"
                                                x2="375.34970703125"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1688"
                                                x1="393.22350260416664"
                                                y1="232.90570267614515"
                                                x2="393.22350260416664"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1689"
                                                x1="411.0972981770833"
                                                y1="232.90570267614515"
                                                x2="411.0972981770833"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1690"
                                                x1="428.97109374999997"
                                                y1="232.90570267614515"
                                                x2="428.97109374999997"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1691"
                                                x1="446.84488932291663"
                                                y1="232.90570267614515"
                                                x2="446.84488932291663"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1692"
                                                x1="464.7186848958333"
                                                y1="232.90570267614515"
                                                x2="464.7186848958333"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1693"
                                                x1="482.59248046874995"
                                                y1="232.90570267614515"
                                                x2="482.59248046874995"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1694"
                                                x1="500.4662760416666"
                                                y1="232.90570267614515"
                                                x2="500.4662760416666"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1695"
                                                x1="518.3400716145833"
                                                y1="232.90570267614515"
                                                x2="518.3400716145833"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <line
                                                id="SvgjsLine1696"
                                                x1="536.2138671875"
                                                y1="232.90570267614515"
                                                x2="536.2138671875"
                                                y2="238.90570267614515"
                                                stroke="#e0e0e0"
                                                stroke-dasharray="0"
                                                stroke-linecap="butt"
                                                class="apexcharts-xaxis-tick"
                                            ></line>
                                            <g id="SvgjsG1662" class="apexcharts-grid">
                                                <g id="SvgjsG1663" class="apexcharts-gridlines-horizontal">
                                                    <line
                                                        id="SvgjsLine1698"
                                                        x1="0"
                                                        y1="46.38114053522903"
                                                        x2="536.2138671875"
                                                        y2="46.38114053522903"
                                                        stroke="#e0e0e0"
                                                        stroke-dasharray="0"
                                                        stroke-linecap="butt"
                                                        class="apexcharts-gridline"
                                                    ></line>
                                                    <line
                                                        id="SvgjsLine1699"
                                                        x1="0"
                                                        y1="92.76228107045806"
                                                        x2="536.2138671875"
                                                        y2="92.76228107045806"
                                                        stroke="#e0e0e0"
                                                        stroke-dasharray="0"
                                                        stroke-linecap="butt"
                                                        class="apexcharts-gridline"
                                                    ></line>
                                                    <line
                                                        id="SvgjsLine1700"
                                                        x1="0"
                                                        y1="139.14342160568708"
                                                        x2="536.2138671875"
                                                        y2="139.14342160568708"
                                                        stroke="#e0e0e0"
                                                        stroke-dasharray="0"
                                                        stroke-linecap="butt"
                                                        class="apexcharts-gridline"
                                                    ></line>
                                                    <line
                                                        id="SvgjsLine1701"
                                                        x1="0"
                                                        y1="185.52456214091612"
                                                        x2="536.2138671875"
                                                        y2="185.52456214091612"
                                                        stroke="#e0e0e0"
                                                        stroke-dasharray="0"
                                                        stroke-linecap="butt"
                                                        class="apexcharts-gridline"
                                                    ></line>
                                                </g>
                                                <g id="SvgjsG1664" class="apexcharts-gridlines-vertical"></g>
                                                <line id="SvgjsLine1704" x1="0" y1="231.90570267614515" x2="536.2138671875" y2="231.90570267614515" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine1703" x1="0" y1="1" x2="0" y2="231.90570267614515" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG1665" class="apexcharts-grid-borders">
                                                <line id="SvgjsLine1697" x1="0" y1="0" x2="536.2138671875" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line
                                                    id="SvgjsLine1702"
                                                    x1="0"
                                                    y1="231.90570267614515"
                                                    x2="536.2138671875"
                                                    y2="231.90570267614515"
                                                    stroke="#e0e0e0"
                                                    stroke-dasharray="0"
                                                    stroke-linecap="butt"
                                                    class="apexcharts-gridline"
                                                ></line>
                                                <line id="SvgjsLine1802" x1="0" y1="232.90570267614515" x2="536.2138671875" y2="232.90570267614515" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG1643" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG1644" class="apexcharts-series" zIndex="0" seriesName="Emails" data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path
                                                        id="SvgjsPath1651"
                                                        d="M 0 231.90570267614515 L 0 27.828684321137416 L 17.873795572916666 125.22907944511837 L 35.74759114583333 180.8864480873932 L 53.621386718749996 64.93359674932063 L 71.49518229166667 185.52456214091612 L 89.36897786458333 194.8007902479619 L 107.24277343749999 92.76228107045804 L 125.11656901041667 78.84793890988934 L 142.99036458333333 102.03850917750387 L 160.86416015625 139.14342160568708 L 178.73795572916666 194.8007902479619 L 196.61175130208332 190.16267619443903 L 214.48554687499998 199.43890430148483 L 232.35934244791665 115.95285133807258 L 250.23313802083334 139.14342160568708 L 268.10693359375 157.6958778197787 L 285.98072916666666 194.8007902479619 L 303.8545247395833 74.20982485636645 L 321.7283203125 194.8007902479619 L 339.60211588541665 190.16267619443903 L 357.4759114583333 153.0577637662558 L 375.34970703125 102.03850917750387 L 393.22350260416664 134.5053075521642 L 411.0972981770833 125.22907944511837 L 428.97109374999997 83.48605296341225 L 446.84488932291663 194.8007902479619 L 464.7186848958333 222.62947456909936 L 482.59248046874995 120.59096539159547 L 500.4662760416667 139.14342160568708 L 518.3400716145833 129.86719349864129 L 536.2138671875 199.43890430148483 L 536.2138671875 231.90570267614515M 536.2138671875 199.43890430148483z"
                                                        fill="url(#SvgjsLinearGradient1647)"
                                                        fill-opacity="1"
                                                        stroke-opacity="1"
                                                        stroke-linecap="butt"
                                                        stroke-width="0"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-area"
                                                        index="0"
                                                        clip-path="url(#gridRectMaskv8gzeydq)"
                                                        pathTo="M 0 231.90570267614515 L 0 27.828684321137416 L 17.873795572916666 125.22907944511837 L 35.74759114583333 180.8864480873932 L 53.621386718749996 64.93359674932063 L 71.49518229166667 185.52456214091612 L 89.36897786458333 194.8007902479619 L 107.24277343749999 92.76228107045804 L 125.11656901041667 78.84793890988934 L 142.99036458333333 102.03850917750387 L 160.86416015625 139.14342160568708 L 178.73795572916666 194.8007902479619 L 196.61175130208332 190.16267619443903 L 214.48554687499998 199.43890430148483 L 232.35934244791665 115.95285133807258 L 250.23313802083334 139.14342160568708 L 268.10693359375 157.6958778197787 L 285.98072916666666 194.8007902479619 L 303.8545247395833 74.20982485636645 L 321.7283203125 194.8007902479619 L 339.60211588541665 190.16267619443903 L 357.4759114583333 153.0577637662558 L 375.34970703125 102.03850917750387 L 393.22350260416664 134.5053075521642 L 411.0972981770833 125.22907944511837 L 428.97109374999997 83.48605296341225 L 446.84488932291663 194.8007902479619 L 464.7186848958333 222.62947456909936 L 482.59248046874995 120.59096539159547 L 500.4662760416667 139.14342160568708 L 518.3400716145833 129.86719349864129 L 536.2138671875 199.43890430148483 L 536.2138671875 231.90570267614515M 536.2138671875 199.43890430148483z"
                                                        pathFrom="M -1 231.90570267614515 L -1 231.90570267614515 L 17.873795572916666 231.90570267614515 L 35.74759114583333 231.90570267614515 L 53.621386718749996 231.90570267614515 L 71.49518229166667 231.90570267614515 L 89.36897786458333 231.90570267614515 L 107.24277343749999 231.90570267614515 L 125.11656901041667 231.90570267614515 L 142.99036458333333 231.90570267614515 L 160.86416015625 231.90570267614515 L 178.73795572916666 231.90570267614515 L 196.61175130208332 231.90570267614515 L 214.48554687499998 231.90570267614515 L 232.35934244791665 231.90570267614515 L 250.23313802083334 231.90570267614515 L 268.10693359375 231.90570267614515 L 285.98072916666666 231.90570267614515 L 303.8545247395833 231.90570267614515 L 321.7283203125 231.90570267614515 L 339.60211588541665 231.90570267614515 L 357.4759114583333 231.90570267614515 L 375.34970703125 231.90570267614515 L 393.22350260416664 231.90570267614515 L 411.0972981770833 231.90570267614515 L 428.97109374999997 231.90570267614515 L 446.84488932291663 231.90570267614515 L 464.7186848958333 231.90570267614515 L 482.59248046874995 231.90570267614515 L 500.4662760416667 231.90570267614515 L 518.3400716145833 231.90570267614515 L 536.2138671875 231.90570267614515"
                                                    ></path>
                                                    <path
                                                        id="SvgjsPath1652"
                                                        d="M 0 27.828684321137416 L 17.873795572916666 125.22907944511837 L 35.74759114583333 180.8864480873932 L 53.621386718749996 64.93359674932063 L 71.49518229166667 185.52456214091612 L 89.36897786458333 194.8007902479619 L 107.24277343749999 92.76228107045804 L 125.11656901041667 78.84793890988934 L 142.99036458333333 102.03850917750387 L 160.86416015625 139.14342160568708 L 178.73795572916666 194.8007902479619 L 196.61175130208332 190.16267619443903 L 214.48554687499998 199.43890430148483 L 232.35934244791665 115.95285133807258 L 250.23313802083334 139.14342160568708 L 268.10693359375 157.6958778197787 L 285.98072916666666 194.8007902479619 L 303.8545247395833 74.20982485636645 L 321.7283203125 194.8007902479619 L 339.60211588541665 190.16267619443903 L 357.4759114583333 153.0577637662558 L 375.34970703125 102.03850917750387 L 393.22350260416664 134.5053075521642 L 411.0972981770833 125.22907944511837 L 428.97109374999997 83.48605296341225 L 446.84488932291663 194.8007902479619 L 464.7186848958333 222.62947456909936 L 482.59248046874995 120.59096539159547 L 500.4662760416667 139.14342160568708 L 518.3400716145833 129.86719349864129 L 536.2138671875 199.43890430148483"
                                                        fill="none"
                                                        fill-opacity="1"
                                                        stroke="#3d8ef0"
                                                        stroke-opacity="1"
                                                        stroke-linecap="butt"
                                                        stroke-width="5"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-area"
                                                        index="0"
                                                        clip-path="url(#gridRectMaskv8gzeydq)"
                                                        pathTo="M 0 27.828684321137416 L 17.873795572916666 125.22907944511837 L 35.74759114583333 180.8864480873932 L 53.621386718749996 64.93359674932063 L 71.49518229166667 185.52456214091612 L 89.36897786458333 194.8007902479619 L 107.24277343749999 92.76228107045804 L 125.11656901041667 78.84793890988934 L 142.99036458333333 102.03850917750387 L 160.86416015625 139.14342160568708 L 178.73795572916666 194.8007902479619 L 196.61175130208332 190.16267619443903 L 214.48554687499998 199.43890430148483 L 232.35934244791665 115.95285133807258 L 250.23313802083334 139.14342160568708 L 268.10693359375 157.6958778197787 L 285.98072916666666 194.8007902479619 L 303.8545247395833 74.20982485636645 L 321.7283203125 194.8007902479619 L 339.60211588541665 190.16267619443903 L 357.4759114583333 153.0577637662558 L 375.34970703125 102.03850917750387 L 393.22350260416664 134.5053075521642 L 411.0972981770833 125.22907944511837 L 428.97109374999997 83.48605296341225 L 446.84488932291663 194.8007902479619 L 464.7186848958333 222.62947456909936 L 482.59248046874995 120.59096539159547 L 500.4662760416667 139.14342160568708 L 518.3400716145833 129.86719349864129 L 536.2138671875 199.43890430148483"
                                                        pathFrom="M -1 231.90570267614515 L -1 231.90570267614515 L 17.873795572916666 231.90570267614515 L 35.74759114583333 231.90570267614515 L 53.621386718749996 231.90570267614515 L 71.49518229166667 231.90570267614515 L 89.36897786458333 231.90570267614515 L 107.24277343749999 231.90570267614515 L 125.11656901041667 231.90570267614515 L 142.99036458333333 231.90570267614515 L 160.86416015625 231.90570267614515 L 178.73795572916666 231.90570267614515 L 196.61175130208332 231.90570267614515 L 214.48554687499998 231.90570267614515 L 232.35934244791665 231.90570267614515 L 250.23313802083334 231.90570267614515 L 268.10693359375 231.90570267614515 L 285.98072916666666 231.90570267614515 L 303.8545247395833 231.90570267614515 L 321.7283203125 231.90570267614515 L 339.60211588541665 231.90570267614515 L 357.4759114583333 231.90570267614515 L 375.34970703125 231.90570267614515 L 393.22350260416664 231.90570267614515 L 411.0972981770833 231.90570267614515 L 428.97109374999997 231.90570267614515 L 446.84488932291663 231.90570267614515 L 464.7186848958333 231.90570267614515 L 482.59248046874995 231.90570267614515 L 500.4662760416667 231.90570267614515 L 518.3400716145833 231.90570267614515 L 536.2138671875 231.90570267614515"
                                                        fill-rule="evenodd"
                                                    ></path>
                                                    <g id="SvgjsG1645" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0">
                                                        <g class="apexcharts-series-markers">
                                                            <circle
                                                                id="SvgjsCircle1826"
                                                                r="0"
                                                                cx="0"
                                                                cy="0"
                                                                class="apexcharts-marker wg98l25v1"
                                                                stroke="#ffffff"
                                                                fill="#3d8ef0"
                                                                fill-opacity="1"
                                                                stroke-width="2"
                                                                stroke-opacity="0.9"
                                                                default-marker-size="0"
                                                            ></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1653" class="apexcharts-series" zIndex="1" seriesName="SMS" data:longestSeries="true" rel="2" data:realIndex="1">
                                                    <path
                                                        id="SvgjsPath1660"
                                                        d="M 0 231.90570267614515 L 0 37.10491242818321 L 17.873795572916666 134.5053075521642 L 35.74759114583333 157.6958778197787 L 53.621386718749996 41.743026481706124 L 71.49518229166667 185.52456214091612 L 89.36897786458333 194.8007902479619 L 107.24277343749999 88.12416701693516 L 125.11656901041667 69.57171080284354 L 142.99036458333333 102.03850917750387 L 160.86416015625 143.78153565921 L 178.73795572916666 190.16267619443903 L 196.61175130208332 190.16267619443903 L 214.48554687499998 194.8007902479619 L 232.35934244791665 102.03850917750387 L 250.23313802083334 148.4196497127329 L 268.10693359375 148.4196497127329 L 285.98072916666666 194.8007902479619 L 303.8545247395833 88.12416701693516 L 321.7283203125 190.16267619443903 L 339.60211588541665 185.52456214091612 L 357.4759114583333 162.3339918733016 L 375.34970703125 115.95285133807258 L 393.22350260416664 139.14342160568708 L 411.0972981770833 129.86719349864129 L 428.97109374999997 97.40039512398096 L 446.84488932291663 190.16267619443903 L 464.7186848958333 222.62947456909936 L 482.59248046874995 125.22907944511837 L 500.4662760416667 125.22907944511837 L 518.3400716145833 115.95285133807258 L 536.2138671875 166.9721059268245 L 536.2138671875 231.90570267614515M 536.2138671875 166.9721059268245z"
                                                        fill="url(#SvgjsLinearGradient1656)"
                                                        fill-opacity="1"
                                                        stroke-opacity="1"
                                                        stroke-linecap="butt"
                                                        stroke-width="0"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-area"
                                                        index="1"
                                                        clip-path="url(#gridRectMaskv8gzeydq)"
                                                        pathTo="M 0 231.90570267614515 L 0 37.10491242818321 L 17.873795572916666 134.5053075521642 L 35.74759114583333 157.6958778197787 L 53.621386718749996 41.743026481706124 L 71.49518229166667 185.52456214091612 L 89.36897786458333 194.8007902479619 L 107.24277343749999 88.12416701693516 L 125.11656901041667 69.57171080284354 L 142.99036458333333 102.03850917750387 L 160.86416015625 143.78153565921 L 178.73795572916666 190.16267619443903 L 196.61175130208332 190.16267619443903 L 214.48554687499998 194.8007902479619 L 232.35934244791665 102.03850917750387 L 250.23313802083334 148.4196497127329 L 268.10693359375 148.4196497127329 L 285.98072916666666 194.8007902479619 L 303.8545247395833 88.12416701693516 L 321.7283203125 190.16267619443903 L 339.60211588541665 185.52456214091612 L 357.4759114583333 162.3339918733016 L 375.34970703125 115.95285133807258 L 393.22350260416664 139.14342160568708 L 411.0972981770833 129.86719349864129 L 428.97109374999997 97.40039512398096 L 446.84488932291663 190.16267619443903 L 464.7186848958333 222.62947456909936 L 482.59248046874995 125.22907944511837 L 500.4662760416667 125.22907944511837 L 518.3400716145833 115.95285133807258 L 536.2138671875 166.9721059268245 L 536.2138671875 231.90570267614515M 536.2138671875 166.9721059268245z"
                                                        pathFrom="M -1 231.90570267614515 L -1 231.90570267614515 L 17.873795572916666 231.90570267614515 L 35.74759114583333 231.90570267614515 L 53.621386718749996 231.90570267614515 L 71.49518229166667 231.90570267614515 L 89.36897786458333 231.90570267614515 L 107.24277343749999 231.90570267614515 L 125.11656901041667 231.90570267614515 L 142.99036458333333 231.90570267614515 L 160.86416015625 231.90570267614515 L 178.73795572916666 231.90570267614515 L 196.61175130208332 231.90570267614515 L 214.48554687499998 231.90570267614515 L 232.35934244791665 231.90570267614515 L 250.23313802083334 231.90570267614515 L 268.10693359375 231.90570267614515 L 285.98072916666666 231.90570267614515 L 303.8545247395833 231.90570267614515 L 321.7283203125 231.90570267614515 L 339.60211588541665 231.90570267614515 L 357.4759114583333 231.90570267614515 L 375.34970703125 231.90570267614515 L 393.22350260416664 231.90570267614515 L 411.0972981770833 231.90570267614515 L 428.97109374999997 231.90570267614515 L 446.84488932291663 231.90570267614515 L 464.7186848958333 231.90570267614515 L 482.59248046874995 231.90570267614515 L 500.4662760416667 231.90570267614515 L 518.3400716145833 231.90570267614515 L 536.2138671875 231.90570267614515"
                                                    ></path>
                                                    <path
                                                        id="SvgjsPath1661"
                                                        d="M 0 37.10491242818321 L 17.873795572916666 134.5053075521642 L 35.74759114583333 157.6958778197787 L 53.621386718749996 41.743026481706124 L 71.49518229166667 185.52456214091612 L 89.36897786458333 194.8007902479619 L 107.24277343749999 88.12416701693516 L 125.11656901041667 69.57171080284354 L 142.99036458333333 102.03850917750387 L 160.86416015625 143.78153565921 L 178.73795572916666 190.16267619443903 L 196.61175130208332 190.16267619443903 L 214.48554687499998 194.8007902479619 L 232.35934244791665 102.03850917750387 L 250.23313802083334 148.4196497127329 L 268.10693359375 148.4196497127329 L 285.98072916666666 194.8007902479619 L 303.8545247395833 88.12416701693516 L 321.7283203125 190.16267619443903 L 339.60211588541665 185.52456214091612 L 357.4759114583333 162.3339918733016 L 375.34970703125 115.95285133807258 L 393.22350260416664 139.14342160568708 L 411.0972981770833 129.86719349864129 L 428.97109374999997 97.40039512398096 L 446.84488932291663 190.16267619443903 L 464.7186848958333 222.62947456909936 L 482.59248046874995 125.22907944511837 L 500.4662760416667 125.22907944511837 L 518.3400716145833 115.95285133807258 L 536.2138671875 166.9721059268245"
                                                        fill="none"
                                                        fill-opacity="1"
                                                        stroke="#52b365"
                                                        stroke-opacity="1"
                                                        stroke-linecap="butt"
                                                        stroke-width="5"
                                                        stroke-dasharray="0"
                                                        class="apexcharts-area"
                                                        index="1"
                                                        clip-path="url(#gridRectMaskv8gzeydq)"
                                                        pathTo="M 0 37.10491242818321 L 17.873795572916666 134.5053075521642 L 35.74759114583333 157.6958778197787 L 53.621386718749996 41.743026481706124 L 71.49518229166667 185.52456214091612 L 89.36897786458333 194.8007902479619 L 107.24277343749999 88.12416701693516 L 125.11656901041667 69.57171080284354 L 142.99036458333333 102.03850917750387 L 160.86416015625 143.78153565921 L 178.73795572916666 190.16267619443903 L 196.61175130208332 190.16267619443903 L 214.48554687499998 194.8007902479619 L 232.35934244791665 102.03850917750387 L 250.23313802083334 148.4196497127329 L 268.10693359375 148.4196497127329 L 285.98072916666666 194.8007902479619 L 303.8545247395833 88.12416701693516 L 321.7283203125 190.16267619443903 L 339.60211588541665 185.52456214091612 L 357.4759114583333 162.3339918733016 L 375.34970703125 115.95285133807258 L 393.22350260416664 139.14342160568708 L 411.0972981770833 129.86719349864129 L 428.97109374999997 97.40039512398096 L 446.84488932291663 190.16267619443903 L 464.7186848958333 222.62947456909936 L 482.59248046874995 125.22907944511837 L 500.4662760416667 125.22907944511837 L 518.3400716145833 115.95285133807258 L 536.2138671875 166.9721059268245"
                                                        pathFrom="M -1 231.90570267614515 L -1 231.90570267614515 L 17.873795572916666 231.90570267614515 L 35.74759114583333 231.90570267614515 L 53.621386718749996 231.90570267614515 L 71.49518229166667 231.90570267614515 L 89.36897786458333 231.90570267614515 L 107.24277343749999 231.90570267614515 L 125.11656901041667 231.90570267614515 L 142.99036458333333 231.90570267614515 L 160.86416015625 231.90570267614515 L 178.73795572916666 231.90570267614515 L 196.61175130208332 231.90570267614515 L 214.48554687499998 231.90570267614515 L 232.35934244791665 231.90570267614515 L 250.23313802083334 231.90570267614515 L 268.10693359375 231.90570267614515 L 285.98072916666666 231.90570267614515 L 303.8545247395833 231.90570267614515 L 321.7283203125 231.90570267614515 L 339.60211588541665 231.90570267614515 L 357.4759114583333 231.90570267614515 L 375.34970703125 231.90570267614515 L 393.22350260416664 231.90570267614515 L 411.0972981770833 231.90570267614515 L 428.97109374999997 231.90570267614515 L 446.84488932291663 231.90570267614515 L 464.7186848958333 231.90570267614515 L 482.59248046874995 231.90570267614515 L 500.4662760416667 231.90570267614515 L 518.3400716145833 231.90570267614515 L 536.2138671875 231.90570267614515"
                                                        fill-rule="evenodd"
                                                    ></path>
                                                    <g id="SvgjsG1654" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="1">
                                                        <g class="apexcharts-series-markers">
                                                            <circle
                                                                id="SvgjsCircle1827"
                                                                r="0"
                                                                cx="0"
                                                                cy="0"
                                                                class="apexcharts-marker wndgngh4k"
                                                                stroke="#ffffff"
                                                                fill="#52b365"
                                                                fill-opacity="1"
                                                                stroke-width="2"
                                                                stroke-opacity="0.9"
                                                                default-marker-size="0"
                                                            ></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1646" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                <g id="SvgjsG1655" class="apexcharts-datalabels" data:realIndex="1"></g>
                                            </g>
                                            <line id="SvgjsLine1705" x1="0" y1="0" x2="536.2138671875" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1706" x1="0" y1="0" x2="536.2138671875" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1707" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1708" class="apexcharts-xaxis-texts-g" transform="translate(0, -10)">
                                                    <text
                                                        id="SvgjsText1710"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="0"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1.10498046875 248.90570068359375)"
                                                    >
                                                        <tspan id="SvgjsTspan1711">07/02/24</tspan>
                                                        <title>07/02/24</title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1713"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="17.87379557291667"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1714"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1716"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="35.74759114583334"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1717"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1719"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="53.62138671875"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1720"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1722"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="71.49518229166667"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1723"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1725"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="89.36897786458333"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1726"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1728"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="107.24277343749999"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 108.34776306152344 248.90570068359375)"
                                                    >
                                                        <tspan id="SvgjsTspan1729">07/08/24</tspan>
                                                        <title>07/08/24</title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1731"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="125.11656901041667"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1732"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1734"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="142.99036458333333"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1735"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1737"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="160.86416015625"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1738"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1740"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="178.73795572916666"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1741"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1743"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="196.61175130208332"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1744"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1746"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="214.48554687499998"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 215.59054565429688 248.90570068359375)"
                                                    >
                                                        <tspan id="SvgjsTspan1747">07/14/24</tspan>
                                                        <title>07/14/24</title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1749"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="232.35934244791665"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1750"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1752"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="250.2331380208333"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1753"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1755"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="268.10693359374994"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1756"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1758"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="285.9807291666666"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1759"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1761"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="303.85452473958327"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1762"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1764"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="321.72832031249993"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 322.83331298828125 248.90570068359375)"
                                                    >
                                                        <tspan id="SvgjsTspan1765">07/20/24</tspan>
                                                        <title>07/20/24</title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1767"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="339.6021158854166"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1768"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1770"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="357.47591145833326"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1771"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1773"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="375.3497070312499"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1774"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1776"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="393.2235026041666"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1777"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1779"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="411.09729817708325"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1780"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1782"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="428.9710937499999"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 430.0760803222656 248.90570068359375)"
                                                    >
                                                        <tspan id="SvgjsTspan1783">07/26/24</tspan>
                                                        <title>07/26/24</title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1785"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="446.8448893229166"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1786"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1788"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="464.71868489583323"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1789"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1791"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="482.5924804687499"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1792"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1794"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="500.46627604166656"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1795"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1797"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="518.3400716145833"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 1 -1)"
                                                    >
                                                        <tspan id="SvgjsTspan1798"></tspan>
                                                        <title></title>
                                                    </text>
                                                    <text
                                                        id="SvgjsText1800"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="536.2138671875"
                                                        y="254.90570267614515"
                                                        text-anchor="end"
                                                        dominant-baseline="auto"
                                                        font-size="12px"
                                                        font-weight="400"
                                                        fill="#667587"
                                                        class="apexcharts-text apexcharts-xaxis-label"
                                                        style="font-family: Helvetica, Arial, sans-serif;"
                                                        transform="rotate(-45 537.31884765625 248.90570068359375)"
                                                    >
                                                        <tspan id="SvgjsTspan1801">08/01/24</tspan>
                                                        <title>08/01/24</title>
                                                    </text>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1823" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1824" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1825" class="apexcharts-point-annotations"></g>
                                            <rect id="SvgjsRect1828" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                            <rect id="SvgjsRect1829" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                        </g>
                                    </svg>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                            <span class="apexcharts-tooltip-marker" style="background-color: rgb(61, 142, 240);"></span>
                                            <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 2;">
                                            <span class="apexcharts-tooltip-marker" style="background-color: rgb(82, 179, 101);"></span>
                                            <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                        <div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    </div>
                                    <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div>
                                </div>
                            </div>
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
                                            <div data-v-6b4913b0="" class="w-80px h-80px bg-gray-100 flex items-center justify-center"><img data-v-6b4913b0="" src="/assets/mailicon-788ec795.svg" /></div>
                                            <p data-v-6b4913b0="" class="text-2xl font-bold">463</p>
                                            <p data-v-6b4913b0="" class="text-sm text-gray-500 text-center">
                                                Number of<br data-v-6b4913b0="" />
                                                Contact Cards Sent
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div data-v-6b4913b0="" class="flex-grow">
                                    <div data-v-6b4913b0="" class="mb-6 relative">
                                        <div data-v-6b4913b0="" class="vue-apexcharts" style="min-height: 215.2px;">
                                            <div id="apexchartsh3xqqv9a" class="apexcharts-canvas apexchartsh3xqqv9a apexcharts-theme-light" style="width: 297px; height: 215.2px;">
                                                <svg
                                                    id="SvgjsSvg1830"
                                                    width="297"
                                                    height="215.20000000000002"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    version="1.1"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.dev"
                                                    class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS"
                                                    transform="translate(0, 0)"
                                                    style="background: transparent;"
                                                >
                                                    <foreignObject x="0" y="0" width="297" height="215.20000000000002">
                                                        <div
                                                            class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom"
                                                            xmlns="http://www.w3.org/1999/xhtml"
                                                            style="inset: auto 0px 1px; position: absolute; max-height: 123.75px;"
                                                        >
                                                            <div class="apexcharts-legend-series" rel="1" seriesname="ContactxCardsxSent" data:collapsed="false" style="margin: 2px 5px;">
                                                                <span
                                                                    class="apexcharts-legend-marker"
                                                                    rel="1"
                                                                    data:collapsed="false"
                                                                    style="
                                                                        background: rgb(61, 142, 240) !important;
                                                                        color: rgb(61, 142, 240);
                                                                        height: 12px;
                                                                        width: 12px;
                                                                        left: 0px;
                                                                        top: 0px;
                                                                        border-width: 0px;
                                                                        border-color: rgb(255, 255, 255);
                                                                        border-radius: 12px;
                                                                    "
                                                                ></span>
                                                                <span
                                                                    class="apexcharts-legend-text"
                                                                    rel="1"
                                                                    i="0"
                                                                    data:default-text="Contact%20Cards%20Sent"
                                                                    data:collapsed="false"
                                                                    style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;"
                                                                >
                                                                    Contact Cards Sent
                                                                </span>
                                                            </div>
                                                            <div class="apexcharts-legend-series" rel="2" seriesname="NumberxofxScans" data:collapsed="false" style="margin: 2px 5px;">
                                                                <span
                                                                    class="apexcharts-legend-marker"
                                                                    rel="2"
                                                                    data:collapsed="false"
                                                                    style="
                                                                        background: rgb(82, 179, 101) !important;
                                                                        color: rgb(82, 179, 101);
                                                                        height: 12px;
                                                                        width: 12px;
                                                                        left: 0px;
                                                                        top: 0px;
                                                                        border-width: 0px;
                                                                        border-color: rgb(255, 255, 255);
                                                                        border-radius: 12px;
                                                                    "
                                                                ></span>
                                                                <span
                                                                    class="apexcharts-legend-text"
                                                                    rel="2"
                                                                    i="1"
                                                                    data:default-text="Number%20of%20Scans"
                                                                    data:collapsed="false"
                                                                    style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;"
                                                                >
                                                                    Number of Scans
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <style type="text/css">
                                                            .apexcharts-legend {
                                                                display: flex;
                                                                overflow: auto;
                                                                padding: 0 10px;
                                                            }
                                                            .apexcharts-legend.apx-legend-position-bottom,
                                                            .apexcharts-legend.apx-legend-position-top {
                                                                flex-wrap: wrap;
                                                            }
                                                            .apexcharts-legend.apx-legend-position-right,
                                                            .apexcharts-legend.apx-legend-position-left {
                                                                flex-direction: column;
                                                                bottom: 0;
                                                            }
                                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                            .apexcharts-legend.apx-legend-position-right,
                                                            .apexcharts-legend.apx-legend-position-left {
                                                                justify-content: flex-start;
                                                            }
                                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                                justify-content: center;
                                                            }
                                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                                justify-content: flex-end;
                                                            }
                                                            .apexcharts-legend-series {
                                                                cursor: pointer;
                                                                line-height: normal;
                                                            }
                                                            .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                                            .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                                display: flex;
                                                                align-items: center;
                                                            }
                                                            .apexcharts-legend-text {
                                                                position: relative;
                                                                font-size: 14px;
                                                            }
                                                            .apexcharts-legend-text *,
                                                            .apexcharts-legend-marker * {
                                                                pointer-events: none;
                                                            }
                                                            .apexcharts-legend-marker {
                                                                position: relative;
                                                                display: inline-block;
                                                                cursor: pointer;
                                                                margin-right: 3px;
                                                                border-style: solid;
                                                            }

                                                            .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                                            .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                                display: inline-block;
                                                            }
                                                            .apexcharts-legend-series.apexcharts-no-click {
                                                                cursor: auto;
                                                            }
                                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                                display: none !important;
                                                            }
                                                            .apexcharts-inactive-legend {
                                                                opacity: 0.45;
                                                            }
                                                        </style>
                                                    </foreignObject>
                                                    <g id="SvgjsG1832" class="apexcharts-inner apexcharts-graphical" transform="translate(12, 0)">
                                                        <defs id="SvgjsDefs1831">
                                                            <clipPath id="gridRectMaskh3xqqv9a">
                                                                <rect id="SvgjsRect1833" width="281" height="196.5" x="-4" y="-6" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaskh3xqqv9a"></clipPath>
                                                            <clipPath id="nonForecastMaskh3xqqv9a"></clipPath>
                                                            <clipPath id="gridRectMarkerMaskh3xqqv9a">
                                                                <rect id="SvgjsRect1834" width="279" height="188.5" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <filter id="SvgjsFilter1843" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                <feFlood id="SvgjsFeFlood1844" flood-color="#000000" flood-opacity="0.45" result="SvgjsFeFlood1844Out" in="SourceGraphic"></feFlood>
                                                                <feComposite id="SvgjsFeComposite1845" in="SvgjsFeFlood1844Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1845Out"></feComposite>
                                                                <feOffset id="SvgjsFeOffset1846" dx="1" dy="1" result="SvgjsFeOffset1846Out" in="SvgjsFeComposite1845Out"></feOffset>
                                                                <feGaussianBlur id="SvgjsFeGaussianBlur1847" stdDeviation="1 " result="SvgjsFeGaussianBlur1847Out" in="SvgjsFeOffset1846Out"></feGaussianBlur>
                                                                <feMerge id="SvgjsFeMerge1848" result="SvgjsFeMerge1848Out" in="SourceGraphic">
                                                                    <feMergeNode id="SvgjsFeMergeNode1849" in="SvgjsFeGaussianBlur1847Out"></feMergeNode>
                                                                    <feMergeNode id="SvgjsFeMergeNode1850" in="[object Arguments]"></feMergeNode>
                                                                </feMerge>
                                                                <feBlend id="SvgjsFeBlend1851" in="SourceGraphic" in2="SvgjsFeMerge1848Out" mode="normal" result="SvgjsFeBlend1851Out"></feBlend>
                                                            </filter>
                                                            <filter id="SvgjsFilter1856" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                <feFlood id="SvgjsFeFlood1857" flood-color="#000000" flood-opacity="0.45" result="SvgjsFeFlood1857Out" in="SourceGraphic"></feFlood>
                                                                <feComposite id="SvgjsFeComposite1858" in="SvgjsFeFlood1857Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1858Out"></feComposite>
                                                                <feOffset id="SvgjsFeOffset1859" dx="1" dy="1" result="SvgjsFeOffset1859Out" in="SvgjsFeComposite1858Out"></feOffset>
                                                                <feGaussianBlur id="SvgjsFeGaussianBlur1860" stdDeviation="1 " result="SvgjsFeGaussianBlur1860Out" in="SvgjsFeOffset1859Out"></feGaussianBlur>
                                                                <feMerge id="SvgjsFeMerge1861" result="SvgjsFeMerge1861Out" in="SourceGraphic">
                                                                    <feMergeNode id="SvgjsFeMergeNode1862" in="SvgjsFeGaussianBlur1860Out"></feMergeNode>
                                                                    <feMergeNode id="SvgjsFeMergeNode1863" in="[object Arguments]"></feMergeNode>
                                                                </feMerge>
                                                                <feBlend id="SvgjsFeBlend1864" in="SourceGraphic" in2="SvgjsFeMerge1861Out" mode="normal" result="SvgjsFeBlend1864Out"></feBlend>
                                                            </filter>
                                                        </defs>
                                                        <g id="SvgjsG1835" class="apexcharts-pie">
                                                            <g id="SvgjsG1836" transform="translate(0, 0) scale(1)">
                                                                <circle id="SvgjsCircle1837" r="58.80000000000001" cx="137.5" cy="92.25" fill="transparent"></circle>
                                                                <g id="SvgjsG1838" class="apexcharts-slices">
                                                                    <g id="SvgjsG1839" class="apexcharts-series apexcharts-pie-series" seriesName="ContactxCardsxSent" rel="1" data:realIndex="0">
                                                                        <path
                                                                            id="SvgjsPath1840"
                                                                            d="M 137.5 8.249999999999986 A 84.00000000000001 84.00000000000001 0 1 1 121.04473461359919 9.877527407129989 L 125.98131422951943 34.58926918499099 A 58.80000000000001 58.80000000000001 0 1 0 137.5 33.44999999999999 L 137.5 8.249999999999986 z "
                                                                            fill="rgba(61,142,240,1)"
                                                                            fill-opacity="1"
                                                                            stroke-opacity="1"
                                                                            stroke-linecap="butt"
                                                                            stroke-width="2"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                                            index="0"
                                                                            j="0"
                                                                            data:angle="348.7029288702929"
                                                                            data:startAngle="0"
                                                                            data:strokeWidth="2"
                                                                            data:value="463"
                                                                            data:pathOrig="M 137.5 8.249999999999986 A 84.00000000000001 84.00000000000001 0 1 1 121.04473461359919 9.877527407129989 L 125.98131422951943 34.58926918499099 A 58.80000000000001 58.80000000000001 0 1 0 137.5 33.44999999999999 L 137.5 8.249999999999986 z "
                                                                            stroke="#ffffff"
                                                                        ></path>
                                                                    </g>
                                                                    <g id="SvgjsG1852" class="apexcharts-series apexcharts-pie-series" seriesName="NumberxofxScans" rel="2" data:realIndex="1">
                                                                        <path
                                                                            id="SvgjsPath1853"
                                                                            d="M 121.04473461359919 9.877527407129989 A 84.00000000000001 84.00000000000001 0 0 1 137.48533923435767 8.250001279393146 L 137.48973746405036 33.4500008955752 A 58.80000000000001 58.80000000000001 0 0 0 125.98131422951943 34.58926918499099 L 121.04473461359919 9.877527407129989 z "
                                                                            fill="rgba(82,179,101,1)"
                                                                            fill-opacity="1"
                                                                            stroke-opacity="1"
                                                                            stroke-linecap="butt"
                                                                            stroke-width="2"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                                            index="0"
                                                                            j="1"
                                                                            data:angle="11.297071129707092"
                                                                            data:startAngle="348.7029288702929"
                                                                            data:strokeWidth="2"
                                                                            data:value="15"
                                                                            data:pathOrig="M 121.04473461359919 9.877527407129989 A 84.00000000000001 84.00000000000001 0 0 1 137.48533923435767 8.250001279393146 L 137.48973746405036 33.4500008955752 A 58.80000000000001 58.80000000000001 0 0 0 125.98131422951943 34.58926918499099 L 121.04473461359919 9.877527407129989 z "
                                                                            stroke="#ffffff"
                                                                        ></path>
                                                                    </g>
                                                                    <g id="SvgjsG1841" class="apexcharts-datalabels">
                                                                        <text
                                                                            id="SvgjsText1842"
                                                                            font-family="Helvetica, Arial, sans-serif"
                                                                            x="144.52761119935926"
                                                                            y="163.3033087254256"
                                                                            text-anchor="middle"
                                                                            dominant-baseline="auto"
                                                                            font-size="12px"
                                                                            font-weight="600"
                                                                            fill="#ffffff"
                                                                            class="apexcharts-text apexcharts-pie-label"
                                                                            filter="url(#SvgjsFilter1843)"
                                                                            style="font-family: Helvetica, Arial, sans-serif;"
                                                                        ></text>
                                                                    </g>
                                                                    <g id="SvgjsG1854" class="apexcharts-datalabels">
                                                                        <text
                                                                            id="SvgjsText1855"
                                                                            font-family="Helvetica, Arial, sans-serif"
                                                                            x="130.47238880064077"
                                                                            y="21.196691274574405"
                                                                            text-anchor="middle"
                                                                            dominant-baseline="auto"
                                                                            font-size="12px"
                                                                            font-weight="600"
                                                                            fill="#ffffff"
                                                                            class="apexcharts-text apexcharts-pie-label"
                                                                            filter="url(#SvgjsFilter1856)"
                                                                            style="font-family: Helvetica, Arial, sans-serif;"
                                                                        ></text>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1865" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)">
                                                                <text
                                                                    id="SvgjsText1866"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="137.5"
                                                                    y="82.25"
                                                                    text-anchor="middle"
                                                                    dominant-baseline="auto"
                                                                    font-size="16px"
                                                                    font-weight="400"
                                                                    fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-datalabel-label"
                                                                    style="font-family: Helvetica, Arial, sans-serif;"
                                                                >
                                                                    Scans
                                                                </text>
                                                                <text
                                                                    id="SvgjsText1867"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="137.5"
                                                                    y="118.25"
                                                                    text-anchor="middle"
                                                                    dominant-baseline="auto"
                                                                    font-size="20px"
                                                                    font-weight="400"
                                                                    fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-datalabel-value"
                                                                    style="font-family: Helvetica, Arial, sans-serif;"
                                                                >
                                                                    15
                                                                </text>
                                                            </g>
                                                        </g>
                                                        <line id="SvgjsLine1868" x1="0" y1="0" x2="275" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine1869" x1="0" y1="0" x2="275" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                    </g>
                                                </svg>
                                                <div class="apexcharts-tooltip apexcharts-theme-dark">
                                                    <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                                        <span class="apexcharts-tooltip-marker" style="background-color: rgb(61, 142, 240);"></span>
                                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group" style="order: 2;">
                                                        <span class="apexcharts-tooltip-marker" style="background-color: rgb(82, 179, 101);"></span>
                                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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