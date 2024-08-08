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
                        <div id="chart">
                    <script>
      
        var options = {
            chart: {
                type: 'line',
                height: 350
            },
            series: [{
                name: 'Sales',
                data: [30, 40, 35, 50, 49, 60, 70, 91, 125]
            }],
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep']
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>
    </div>
                        <svg class="svg-inline--fa fa-compass w-36px h-auto" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="compass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path
                                class=""
                                fill="currentColor"
                                d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm50.7-186.9L162.4 380.6c-19.4 7.5-38.5-11.6-31-31l55.5-144.3c3.3-8.5 9.9-15.1 18.4-18.4l144.3-55.5c19.4-7.5 38.5 11.6 31 31L325.1 306.7c-3.2 8.5-9.9 15.1-18.4 18.4zM288 256a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"
                            ></path>
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
                            viewBox="0 0 128 512"
                        >
                            <path class="" fill="currentColor" d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z"></path>
                        </svg>
                        <!---->
                    </div>
                </div>
                <div class="vue-apexcharts w-full" style="min-height: 435px;">
                    <div id="apexchartsdmved37w" class="apexcharts-canvas apexchartsdmved37w apexcharts-theme-light" style="width: 918px; height: 420px;">
                        <svg
                            id="SvgjsSvg1426"
                            width="918"
                            height="420"
                            xmlns="http://www.w3.org/2000/svg"
                            version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.dev"
                            class="apexcharts-svg"
                            xmlns:data="ApexChartsNS"
                            transform="translate(0, 0)"
                            style="background: transparent;"
                        >
                            <foreignObject x="0" y="0" width="918" height="420">
                                <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 1px; position: absolute; max-height: 210px;">
                                    <div class="apexcharts-legend-series" rel="1" seriesname="Reviews" data:collapsed="false" style="margin: 2px 5px;">
                                        <span
                                            class="apexcharts-legend-marker"
                                            rel="1"
                                            data:collapsed="false"
                                            style="
                                                background: rgb(46, 140, 240) !important;
                                                color: rgb(46, 140, 240);
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
                                            data:default-text="Reviews"
                                            data:collapsed="false"
                                            style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;"
                                        >
                                            Reviews
                                        </span>
                                    </div>
                                    <div class="apexcharts-legend-series" rel="2" seriesname="Rating" data:collapsed="false" style="margin: 2px 5px;">
                                        <span
                                            class="apexcharts-legend-marker"
                                            rel="2"
                                            data:collapsed="false"
                                            style="background: rgb(0, 0, 0) !important; color: rgb(0, 0, 0); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"
                                        ></span>
                                        <span
                                            class="apexcharts-legend-text"
                                            rel="2"
                                            i="1"
                                            data:default-text="Rating"
                                            data:collapsed="false"
                                            style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;"
                                        >
                                            Rating
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
                            <g id="SvgjsG1513" class="apexcharts-yaxis" rel="0" transform="translate(50.40559895833333, 0)">
                                <g id="SvgjsG1514" class="apexcharts-yaxis-texts-g">
                                    <text
                                        id="SvgjsText1516"
                                        font-family="Helvetica, Arial, sans-serif"
                                        x="20"
                                        y="31.6"
                                        text-anchor="end"
                                        dominant-baseline="auto"
                                        font-size="11px"
                                        font-weight="400"
                                        fill="#373d3f"
                                        class="apexcharts-text apexcharts-yaxis-label"
                                        style="font-family: Helvetica, Arial, sans-serif;"
                                    >
                                        <tspan id="SvgjsTspan1517">600</tspan>
                                        <title>600</title>
                                    </text>
                                    <text
                                        id="SvgjsText1519"
                                        font-family="Helvetica, Arial, sans-serif"
                                        x="20"
                                        y="86.78533333333331"
                                        text-anchor="end"
                                        dominant-baseline="auto"
                                        font-size="11px"
                                        font-weight="400"
                                        fill="#373d3f"
                                        class="apexcharts-text apexcharts-yaxis-label"
                                        style="font-family: Helvetica, Arial, sans-serif;"
                                    >
                                        <tspan id="SvgjsTspan1520">500</tspan>
                                        <title>500</title>
                                    </text>
                                    <text
                                        id="SvgjsText1522"
                                        font-family="Helvetica, Arial, sans-serif"
                                        x="20"
                                        y="141.97066666666663"
                                        text-anchor="end"
                                        dominant-baseline="auto"
                                        font-size="11px"
                                        font-weight="400"
                                        fill="#373d3f"
                                        class="apexcharts-text apexcharts-yaxis-label"
                                        style="font-family: Helvetica, Arial, sans-serif;"
                                    >
                                        <tspan id="SvgjsTspan1523">400</tspan>
                                        <title>400</title>
                                    </text>
                                    <text
                                        id="SvgjsText1525"
                                        font-family="Helvetica, Arial, sans-serif"
                                        x="20"
                                        y="197.15599999999995"
                                        text-anchor="end"
                                        dominant-baseline="auto"
                                        font-size="11px"
                                        font-weight="400"
                                        fill="#373d3f"
                                        class="apexcharts-text apexcharts-yaxis-label"
                                        style="font-family: Helvetica, Arial, sans-serif;"
                                    >
                                        <tspan id="SvgjsTspan1526">300</tspan>
                                        <title>300</title>
                                    </text>
                                    <text
                                        id="SvgjsText1528"
                                        font-family="Helvetica, Arial, sans-serif"
                                        x="20"
                                        y="252.34133333333327"
                                        text-anchor="end"
                                        dominant-baseline="auto"
                                        font-size="11px"
                                        font-weight="400"
                                        fill="#373d3f"
                                        class="apexcharts-text apexcharts-yaxis-label"
                                        style="font-family: Helvetica, Arial, sans-serif;"
                                    >
                                        <tspan id="SvgjsTspan1529">200</tspan>
                                        <title>200</title>
                                    </text>
                                    <text
                                        id="SvgjsText1531"
                                        font-family="Helvetica, Arial, sans-serif"
                                        x="20"
                                        y="307.52666666666664"
                                        text-anchor="end"
                                        dominant-baseline="auto"
                                        font-size="11px"
                                        font-weight="400"
                                        fill="#373d3f"
                                        class="apexcharts-text apexcharts-yaxis-label"
                                        style="font-family: Helvetica, Arial, sans-serif;"
                                    >
                                        <tspan id="SvgjsTspan1532">100</tspan>
                                        <title>100</title>
                                    </text>
                                    <text
                                        id="SvgjsText1534"
                                        font-family="Helvetica, Arial, sans-serif"
                                        x="20"
                                        y="362.712"
                                        text-anchor="end"
                                        dominant-baseline="auto"
                                        font-size="11px"
                                        font-weight="400"
                                        fill="#373d3f"
                                        class="apexcharts-text apexcharts-yaxis-label"
                                        style="font-family: Helvetica, Arial, sans-serif;"
                                    >
                                        <tspan id="SvgjsTspan1535">0</tspan>
                                        <title>0</title>
                                    </text>
                                </g>
                                <g id="SvgjsG1536" class="apexcharts-yaxis-title">
                                    <text
                                        id="SvgjsText1537"
                                        font-family="Helvetica, Arial, sans-serif"
                                        x="9.551742553710938"
                                        y="195.55599999999998"
                                        text-anchor="end"
                                        dominant-baseline="auto"
                                        font-size="11px"
                                        font-weight="900"
                                        fill="#373d3f"
                                        class="apexcharts-text apexcharts-yaxis-title-text"
                                        style="font-family: Helvetica, Arial, sans-serif;"
                                        transform="rotate(-90 -18.371109008789062 190.55599975585938)"
                                    >
                                        Reviews
                                    </text>
                                </g>
                            </g>
                            <g id="SvgjsG1428" class="apexcharts-inner apexcharts-graphical" transform="translate(160.40911458333332, 30)">
                                <defs id="SvgjsDefs1427">
                                    <clipPath id="gridRectMaskdmved37w">
                                        <rect
                                            id="SvgjsRect1436"
                                            width="768.751953125"
                                            height="351.11199999999997"
                                            x="-82.00351562499999"
                                            y="-10"
                                            rx="0"
                                            ry="0"
                                            opacity="1"
                                            stroke-width="0"
                                            stroke="none"
                                            stroke-dasharray="0"
                                            fill="#fff"
                                        ></rect>
                                    </clipPath>
                                    <clipPath id="forecastMaskdmved37w"></clipPath>
                                    <clipPath id="nonForecastMaskdmved37w"></clipPath>
                                    <clipPath id="gridRectMarkerMaskdmved37w">
                                        <rect id="SvgjsRect1437" width="652.744921875" height="375.11199999999997" x="-22" y="-22" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                </defs>
                                <line
                                    id="SvgjsLine1435"
                                    x1="0"
                                    y1="0"
                                    x2="0"
                                    y2="331.11199999999997"
                                    stroke="#b6b6b6"
                                    stroke-dasharray="3"
                                    stroke-linecap="butt"
                                    class="apexcharts-xcrosshairs"
                                    x="0"
                                    y="0"
                                    width="1"
                                    height="331.11199999999997"
                                    fill="#b1b9c4"
                                    filter="none"
                                    fill-opacity="0.9"
                                    stroke-width="1"
                                ></line>
                                <line id="SvgjsLine1475" x1="0" y1="332.11199999999997" x2="0" y2="338.11199999999997" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine1476" x1="121.748984375" y1="332.11199999999997" x2="121.748984375" y2="338.11199999999997" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine1477" x1="243.49796875" y1="332.11199999999997" x2="243.49796875" y2="338.11199999999997" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine1478" x1="365.246953125" y1="332.11199999999997" x2="365.246953125" y2="338.11199999999997" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine1479" x1="486.9959375" y1="332.11199999999997" x2="486.9959375" y2="338.11199999999997" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                <line id="SvgjsLine1480" x1="608.744921875" y1="332.11199999999997" x2="608.744921875" y2="338.11199999999997" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                <g id="SvgjsG1471" class="apexcharts-grid">
                                    <g id="SvgjsG1472" class="apexcharts-gridlines-horizontal">
                                        <line
                                            id="SvgjsLine1482"
                                            x1="-76.00351562499999"
                                            y1="55.185333333333325"
                                            x2="684.7484375"
                                            y2="55.185333333333325"
                                            stroke="#e0e0e0"
                                            stroke-dasharray="0"
                                            stroke-linecap="butt"
                                            class="apexcharts-gridline"
                                        ></line>
                                        <line
                                            id="SvgjsLine1483"
                                            x1="-76.00351562499999"
                                            y1="110.37066666666665"
                                            x2="684.7484375"
                                            y2="110.37066666666665"
                                            stroke="#e0e0e0"
                                            stroke-dasharray="0"
                                            stroke-linecap="butt"
                                            class="apexcharts-gridline"
                                        ></line>
                                        <line
                                            id="SvgjsLine1484"
                                            x1="-76.00351562499999"
                                            y1="165.55599999999998"
                                            x2="684.7484375"
                                            y2="165.55599999999998"
                                            stroke="#e0e0e0"
                                            stroke-dasharray="0"
                                            stroke-linecap="butt"
                                            class="apexcharts-gridline"
                                        ></line>
                                        <line
                                            id="SvgjsLine1485"
                                            x1="-76.00351562499999"
                                            y1="220.7413333333333"
                                            x2="684.7484375"
                                            y2="220.7413333333333"
                                            stroke="#e0e0e0"
                                            stroke-dasharray="0"
                                            stroke-linecap="butt"
                                            class="apexcharts-gridline"
                                        ></line>
                                        <line
                                            id="SvgjsLine1486"
                                            x1="-76.00351562499999"
                                            y1="275.9266666666666"
                                            x2="684.7484375"
                                            y2="275.9266666666666"
                                            stroke="#e0e0e0"
                                            stroke-dasharray="0"
                                            stroke-linecap="butt"
                                            class="apexcharts-gridline"
                                        ></line>
                                    </g>
                                    <g id="SvgjsG1473" class="apexcharts-gridlines-vertical"></g>
                                    <line id="SvgjsLine1489" x1="0" y1="331.11199999999997" x2="608.744921875" y2="331.11199999999997" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                    <line id="SvgjsLine1488" x1="0" y1="1" x2="0" y2="331.11199999999997" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                </g>
                                <g id="SvgjsG1474" class="apexcharts-grid-borders">
                                    <line id="SvgjsLine1481" x1="-76.00351562499999" y1="0" x2="684.7484375" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line
                                        id="SvgjsLine1487"
                                        x1="-76.00351562499999"
                                        y1="331.11199999999997"
                                        x2="684.7484375"
                                        y2="331.11199999999997"
                                        stroke="#e0e0e0"
                                        stroke-dasharray="0"
                                        stroke-linecap="butt"
                                        class="apexcharts-gridline"
                                    ></line>
                                    <line id="SvgjsLine1512" x1="-76.00351562499999" y1="332.11199999999997" x2="684.7484375" y2="332.11199999999997" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line>
                                </g>
                                <g id="SvgjsG1438" class="apexcharts-bar-series apexcharts-plot-series">
                                    <g id="SvgjsG1439" class="apexcharts-series" rel="1" seriesName="Reviews" data:realIndex="0">
                                        <path
                                            id="SvgjsPath1444"
                                            d="M -42.61214453125 331.11299999999994 L -42.61214453125 84.98641333333333 L 42.61214453125 84.98641333333333 L 42.61214453125 331.11299999999994 Z"
                                            fill="rgba(46,140,240,0.85)"
                                            fill-opacity="1"
                                            stroke-opacity="1"
                                            stroke-linecap="butt"
                                            stroke-width="0"
                                            stroke-dasharray="0"
                                            class="apexcharts-bar-area"
                                            index="0"
                                            clip-path="url(#gridRectMaskdmved37w)"
                                            pathTo="M -42.61214453125 331.11299999999994 L -42.61214453125 84.98641333333333 L 42.61214453125 84.98641333333333 L 42.61214453125 331.11299999999994 Z"
                                            pathFrom="M -42.61214453125 331.11299999999994 L -42.61214453125 331.11299999999994 L 42.61214453125 331.11299999999994 L 42.61214453125 331.11299999999994 L 42.61214453125 331.11299999999994 L 42.61214453125 331.11299999999994 L 42.61214453125 331.11299999999994 L -42.61214453125 331.11299999999994 Z"
                                            cy="84.98541333333333"
                                            cx="42.61214453125"
                                            j="0"
                                            val="446"
                                            barHeight="246.12658666666664"
                                            barWidth="85.2242890625"
                                        ></path>
                                        <path
                                            id="SvgjsPath1446"
                                            d="M 79.13683984375001 331.11299999999994 L 79.13683984375001 77.81232 L 164.36112890625003 77.81232 L 164.36112890625003 331.11299999999994 Z"
                                            fill="rgba(46,140,240,0.85)"
                                            fill-opacity="1"
                                            stroke-opacity="1"
                                            stroke-linecap="butt"
                                            stroke-width="0"
                                            stroke-dasharray="0"
                                            class="apexcharts-bar-area"
                                            index="0"
                                            clip-path="url(#gridRectMaskdmved37w)"
                                            pathTo="M 79.13683984375001 331.11299999999994 L 79.13683984375001 77.81232 L 164.36112890625003 77.81232 L 164.36112890625003 331.11299999999994 Z"
                                            pathFrom="M 79.13683984375001 331.11299999999994 L 79.13683984375001 331.11299999999994 L 164.36112890625003 331.11299999999994 L 164.36112890625003 331.11299999999994 L 164.36112890625003 331.11299999999994 L 164.36112890625003 331.11299999999994 L 164.36112890625003 331.11299999999994 L 79.13683984375001 331.11299999999994 Z"
                                            cy="77.81132"
                                            cx="164.36112890625003"
                                            j="1"
                                            val="459"
                                            barHeight="253.30067999999997"
                                            barWidth="85.2242890625"
                                        ></path>
                                        <path
                                            id="SvgjsPath1448"
                                            d="M 200.88582421875 331.11299999999994 L 200.88582421875 67.32710666666665 L 286.11011328125 67.32710666666665 L 286.11011328125 331.11299999999994 Z"
                                            fill="rgba(46,140,240,0.85)"
                                            fill-opacity="1"
                                            stroke-opacity="1"
                                            stroke-linecap="butt"
                                            stroke-width="0"
                                            stroke-dasharray="0"
                                            class="apexcharts-bar-area"
                                            index="0"
                                            clip-path="url(#gridRectMaskdmved37w)"
                                            pathTo="M 200.88582421875 331.11299999999994 L 200.88582421875 67.32710666666665 L 286.11011328125 67.32710666666665 L 286.11011328125 331.11299999999994 Z"
                                            pathFrom="M 200.88582421875 331.11299999999994 L 200.88582421875 331.11299999999994 L 286.11011328125 331.11299999999994 L 286.11011328125 331.11299999999994 L 286.11011328125 331.11299999999994 L 286.11011328125 331.11299999999994 L 286.11011328125 331.11299999999994 L 200.88582421875 331.11299999999994 Z"
                                            cy="67.32610666666665"
                                            cx="286.11011328125"
                                            j="2"
                                            val="478"
                                            barHeight="263.7858933333333"
                                            barWidth="85.2242890625"
                                        ></path>
                                        <path
                                            id="SvgjsPath1450"
                                            d="M 322.63480859375 331.11299999999994 L 322.63480859375 33.66405333333332 L 407.85909765625 33.66405333333332 L 407.85909765625 331.11299999999994 Z"
                                            fill="rgba(46,140,240,0.85)"
                                            fill-opacity="1"
                                            stroke-opacity="1"
                                            stroke-linecap="butt"
                                            stroke-width="0"
                                            stroke-dasharray="0"
                                            class="apexcharts-bar-area"
                                            index="0"
                                            clip-path="url(#gridRectMaskdmved37w)"
                                            pathTo="M 322.63480859375 331.11299999999994 L 322.63480859375 33.66405333333332 L 407.85909765625 33.66405333333332 L 407.85909765625 331.11299999999994 Z"
                                            pathFrom="M 322.63480859375 331.11299999999994 L 322.63480859375 331.11299999999994 L 407.85909765625 331.11299999999994 L 407.85909765625 331.11299999999994 L 407.85909765625 331.11299999999994 L 407.85909765625 331.11299999999994 L 407.85909765625 331.11299999999994 L 322.63480859375 331.11299999999994 Z"
                                            cy="33.66305333333332"
                                            cx="407.85909765625"
                                            j="3"
                                            val="539"
                                            barHeight="297.44894666666664"
                                            barWidth="85.2242890625"
                                        ></path>
                                        <path
                                            id="SvgjsPath1452"
                                            d="M 444.38379296875 331.11299999999994 L 444.38379296875 16.004746666666644 L 529.60808203125 16.004746666666644 L 529.60808203125 331.11299999999994 Z"
                                            fill="rgba(46,140,240,0.85)"
                                            fill-opacity="1"
                                            stroke-opacity="1"
                                            stroke-linecap="butt"
                                            stroke-width="0"
                                            stroke-dasharray="0"
                                            class="apexcharts-bar-area"
                                            index="0"
                                            clip-path="url(#gridRectMaskdmved37w)"
                                            pathTo="M 444.38379296875 331.11299999999994 L 444.38379296875 16.004746666666644 L 529.60808203125 16.004746666666644 L 529.60808203125 331.11299999999994 Z"
                                            pathFrom="M 444.38379296875 331.11299999999994 L 444.38379296875 331.11299999999994 L 529.60808203125 331.11299999999994 L 529.60808203125 331.11299999999994 L 529.60808203125 331.11299999999994 L 529.60808203125 331.11299999999994 L 529.60808203125 331.11299999999994 L 444.38379296875 331.11299999999994 Z"
                                            cy="16.003746666666643"
                                            cx="529.60808203125"
                                            j="4"
                                            val="571"
                                            barHeight="315.1082533333333"
                                            barWidth="85.2242890625"
                                        ></path>
                                        <path
                                            id="SvgjsPath1454"
                                            d="M 566.13277734375 331.11299999999994 L 566.13277734375 12.141773333333356 L 651.35706640625 12.141773333333356 L 651.35706640625 331.11299999999994 Z"
                                            fill="rgba(46,140,240,0.85)"
                                            fill-opacity="1"
                                            stroke-opacity="1"
                                            stroke-linecap="butt"
                                            stroke-width="0"
                                            stroke-dasharray="0"
                                            class="apexcharts-bar-area"
                                            index="0"
                                            clip-path="url(#gridRectMaskdmved37w)"
                                            pathTo="M 566.13277734375 331.11299999999994 L 566.13277734375 12.141773333333356 L 651.35706640625 12.141773333333356 L 651.35706640625 331.11299999999994 Z"
                                            pathFrom="M 566.13277734375 331.11299999999994 L 566.13277734375 331.11299999999994 L 651.35706640625 331.11299999999994 L 651.35706640625 331.11299999999994 L 651.35706640625 331.11299999999994 L 651.35706640625 331.11299999999994 L 651.35706640625 331.11299999999994 L 566.13277734375 331.11299999999994 Z"
                                            cy="12.140773333333357"
                                            cx="651.35706640625"
                                            j="5"
                                            val="578"
                                            barHeight="318.9712266666666"
                                            barWidth="85.2242890625"
                                        ></path>
                                        <g id="SvgjsG1441" class="apexcharts-bar-goals-markers">
                                            <g id="SvgjsG1443" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskdmved37w)"></g>
                                            <g id="SvgjsG1445" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskdmved37w)"></g>
                                            <g id="SvgjsG1447" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskdmved37w)"></g>
                                            <g id="SvgjsG1449" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskdmved37w)"></g>
                                            <g id="SvgjsG1451" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskdmved37w)"></g>
                                            <g id="SvgjsG1453" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskdmved37w)"></g>
                                        </g>
                                        <g id="SvgjsG1442" class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g>
                                    </g>
                                </g>
                                <g id="SvgjsG1455" class="apexcharts-line-series apexcharts-plot-series">
                                    <g id="SvgjsG1456" class="apexcharts-series" zIndex="1" seriesName="Rating" data:longestSeries="true" rel="1" data:realIndex="1">
                                        <path
                                            id="SvgjsPath1470"
                                            d="M 0 26.48896000000002 L 121.748984375 26.48896000000002 L 243.49796875 26.48896000000002 L 365.246953125 26.48896000000002 L 486.9959375 26.48896000000002 L 608.744921875 26.48896000000002"
                                            fill="none"
                                            fill-opacity="1"
                                            stroke="rgba(0,0,0,0.85)"
                                            stroke-opacity="1"
                                            stroke-linecap="butt"
                                            stroke-width="4"
                                            stroke-dasharray="0"
                                            class="apexcharts-line"
                                            index="1"
                                            clip-path="url(#gridRectMaskdmved37w)"
                                            pathTo="M 0 26.48896000000002 L 121.748984375 26.48896000000002 L 243.49796875 26.48896000000002 L 365.246953125 26.48896000000002 L 486.9959375 26.48896000000002 L 608.744921875 26.48896000000002"
                                            pathFrom="M -1 331.11199999999997 L -1 331.11199999999997 L 121.748984375 331.11199999999997 L 243.49796875 331.11199999999997 L 365.246953125 331.11199999999997 L 486.9959375 331.11199999999997 L 608.744921875 331.11199999999997"
                                            fill-rule="evenodd"
                                        ></path>
                                        <g id="SvgjsG1457" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="1">
                                            <g id="SvgjsG1459" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskdmved37w)">
                                                <circle
                                                    id="SvgjsCircle1460"
                                                    r="7"
                                                    cx="0"
                                                    cy="26.48896000000002"
                                                    class="apexcharts-marker wkolkvzwcg"
                                                    stroke="#ffffff"
                                                    fill="#000000"
                                                    fill-opacity="1"
                                                    stroke-width="3"
                                                    stroke-opacity="0.9"
                                                    rel="0"
                                                    j="0"
                                                    index="1"
                                                    default-marker-size="7"
                                                ></circle>
                                                <circle
                                                    id="SvgjsCircle1461"
                                                    r="7"
                                                    cx="121.748984375"
                                                    cy="26.48896000000002"
                                                    class="apexcharts-marker wsmx2oxh4"
                                                    stroke="#ffffff"
                                                    fill="#000000"
                                                    fill-opacity="1"
                                                    stroke-width="3"
                                                    stroke-opacity="0.9"
                                                    rel="1"
                                                    j="1"
                                                    index="1"
                                                    default-marker-size="7"
                                                ></circle>
                                            </g>
                                            <g id="SvgjsG1462" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskdmved37w)">
                                                <circle
                                                    id="SvgjsCircle1463"
                                                    r="7"
                                                    cx="243.49796875"
                                                    cy="26.48896000000002"
                                                    class="apexcharts-marker w1g1drvpi"
                                                    stroke="#ffffff"
                                                    fill="#000000"
                                                    fill-opacity="1"
                                                    stroke-width="3"
                                                    stroke-opacity="0.9"
                                                    rel="2"
                                                    j="2"
                                                    index="1"
                                                    default-marker-size="7"
                                                ></circle>
                                            </g>
                                            <g id="SvgjsG1464" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskdmved37w)">
                                                <circle
                                                    id="SvgjsCircle1465"
                                                    r="7"
                                                    cx="365.246953125"
                                                    cy="26.48896000000002"
                                                    class="apexcharts-marker w33q6hfl1"
                                                    stroke="#ffffff"
                                                    fill="#000000"
                                                    fill-opacity="1"
                                                    stroke-width="3"
                                                    stroke-opacity="0.9"
                                                    rel="3"
                                                    j="3"
                                                    index="1"
                                                    default-marker-size="7"
                                                ></circle>
                                            </g>
                                            <g id="SvgjsG1466" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskdmved37w)">
                                                <circle
                                                    id="SvgjsCircle1467"
                                                    r="7"
                                                    cx="486.9959375"
                                                    cy="26.48896000000002"
                                                    class="apexcharts-marker wdyqnaejo"
                                                    stroke="#ffffff"
                                                    fill="#000000"
                                                    fill-opacity="1"
                                                    stroke-width="3"
                                                    stroke-opacity="0.9"
                                                    rel="4"
                                                    j="4"
                                                    index="1"
                                                    default-marker-size="7"
                                                ></circle>
                                            </g>
                                            <g id="SvgjsG1468" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskdmved37w)">
                                                <circle
                                                    id="SvgjsCircle1469"
                                                    r="7"
                                                    cx="608.744921875"
                                                    cy="26.48896000000002"
                                                    class="apexcharts-marker wp0wwm06cl"
                                                    stroke="#ffffff"
                                                    fill="#000000"
                                                    fill-opacity="1"
                                                    stroke-width="3"
                                                    stroke-opacity="0.9"
                                                    rel="5"
                                                    j="5"
                                                    index="1"
                                                    default-marker-size="7"
                                                ></circle>
                                            </g>
                                        </g>
                                    </g>
                                    <g id="SvgjsG1440" class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="0"></g>
                                    <g id="SvgjsG1458" class="apexcharts-datalabels" data:realIndex="1"></g>
                                </g>
                                <line id="SvgjsLine1490" x1="-76.00351562499999" y1="0" x2="684.7484375" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine1491" x1="-76.00351562499999" y1="0" x2="684.7484375" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                <g id="SvgjsG1492" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG1493" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                        <text
                                            id="SvgjsText1495"
                                            font-family="Helvetica, Arial, sans-serif"
                                            x="0"
                                            y="360.11199999999997"
                                            text-anchor="middle"
                                            dominant-baseline="auto"
                                            font-size="12px"
                                            font-weight="400"
                                            fill="#373d3f"
                                            class="apexcharts-text apexcharts-xaxis-label"
                                            style="font-family: Helvetica, Arial, sans-serif;"
                                        >
                                            <tspan id="SvgjsTspan1496">Mar</tspan>
                                            <title>Mar</title>
                                        </text>
                                        <text
                                            id="SvgjsText1498"
                                            font-family="Helvetica, Arial, sans-serif"
                                            x="121.74898437499999"
                                            y="360.11199999999997"
                                            text-anchor="middle"
                                            dominant-baseline="auto"
                                            font-size="12px"
                                            font-weight="400"
                                            fill="#373d3f"
                                            class="apexcharts-text apexcharts-xaxis-label"
                                            style="font-family: Helvetica, Arial, sans-serif;"
                                        >
                                            <tspan id="SvgjsTspan1499">Apr</tspan>
                                            <title>Apr</title>
                                        </text>
                                        <text
                                            id="SvgjsText1501"
                                            font-family="Helvetica, Arial, sans-serif"
                                            x="243.49796875"
                                            y="360.11199999999997"
                                            text-anchor="middle"
                                            dominant-baseline="auto"
                                            font-size="12px"
                                            font-weight="400"
                                            fill="#373d3f"
                                            class="apexcharts-text apexcharts-xaxis-label"
                                            style="font-family: Helvetica, Arial, sans-serif;"
                                        >
                                            <tspan id="SvgjsTspan1502">May</tspan>
                                            <title>May</title>
                                        </text>
                                        <text
                                            id="SvgjsText1504"
                                            font-family="Helvetica, Arial, sans-serif"
                                            x="365.24695312500006"
                                            y="360.11199999999997"
                                            text-anchor="middle"
                                            dominant-baseline="auto"
                                            font-size="12px"
                                            font-weight="400"
                                            fill="#373d3f"
                                            class="apexcharts-text apexcharts-xaxis-label"
                                            style="font-family: Helvetica, Arial, sans-serif;"
                                        >
                                            <tspan id="SvgjsTspan1505">Jun</tspan>
                                            <title>Jun</title>
                                        </text>
                                        <text
                                            id="SvgjsText1507"
                                            font-family="Helvetica, Arial, sans-serif"
                                            x="486.9959375000001"
                                            y="360.11199999999997"
                                            text-anchor="middle"
                                            dominant-baseline="auto"
                                            font-size="12px"
                                            font-weight="400"
                                            fill="#373d3f"
                                            class="apexcharts-text apexcharts-xaxis-label"
                                            style="font-family: Helvetica, Arial, sans-serif;"
                                        >
                                            <tspan id="SvgjsTspan1508">Jul</tspan>
                                            <title>Jul</title>
                                        </text>
                                        <text
                                            id="SvgjsText1510"
                                            font-family="Helvetica, Arial, sans-serif"
                                            x="608.744921875"
                                            y="360.11199999999997"
                                            text-anchor="middle"
                                            dominant-baseline="auto"
                                            font-size="12px"
                                            font-weight="400"
                                            fill="#373d3f"
                                            class="apexcharts-text apexcharts-xaxis-label"
                                            style="font-family: Helvetica, Arial, sans-serif;"
                                        >
                                            <tspan id="SvgjsTspan1511">Aug</tspan>
                                            <title>Aug</title>
                                        </text>
                                    </g>
                                </g>
                                <g id="SvgjsG1560" class="apexcharts-yaxis-annotations"></g>
                                <g id="SvgjsG1561" class="apexcharts-xaxis-annotations"></g>
                                <g id="SvgjsG1562" class="apexcharts-point-annotations"></g>
                            </g>
                            <g id="SvgjsG1538" class="apexcharts-yaxis" rel="1" transform="translate(872.1575520833334, 0)">
                                <g id="SvgjsG1539" class="apexcharts-yaxis-texts-g">
                                    <text
                                        id="SvgjsText1541"
                                        font-family="Helvetica, Arial, sans-serif"
                                        x="-20"
                                        y="31.5"
                                        text-anchor="start"
                                        dominant-baseline="auto"
                                        font-size="11px"
                                        font-weight="400"
                                        fill="#373d3f"
                                        class="apexcharts-text apexcharts-yaxis-label"
                                        style="font-family: Helvetica, Arial, sans-serif;"
                                    >
                                        <tspan id="SvgjsTspan1542">5.0</tspan>
                                        <title>5.0</title>
                                    </text>
                                    <text
                                        id="SvgjsText1544"
                                        font-family="Helvetica, Arial, sans-serif"
                                        x="-20"
                                        y="97.7224"
                                        text-anchor="start"
                                        dominant-baseline="auto"
                                        font-size="11px"
                                        font-weight="400"
                                        fill="#373d3f"
                                        class="apexcharts-text apexcharts-yaxis-label"
                                        style="font-family: Helvetica, Arial, sans-serif;"
                                    >
                                        <tspan id="SvgjsTspan1545">4.0</tspan>
                                        <title>4.0</title>
                                    </text>
                                    <text
                                        id="SvgjsText1547"
                                        font-family="Helvetica, Arial, sans-serif"
                                        x="-20"
                                        y="163.9448"
                                        text-anchor="start"
                                        dominant-baseline="auto"
                                        font-size="11px"
                                        font-weight="400"
                                        fill="#373d3f"
                                        class="apexcharts-text apexcharts-yaxis-label"
                                        style="font-family: Helvetica, Arial, sans-serif;"
                                    >
                                        <tspan id="SvgjsTspan1548">3.0</tspan>
                                        <title>3.0</title>
                                    </text>
                                    <text
                                        id="SvgjsText1550"
                                        font-family="Helvetica, Arial, sans-serif"
                                        x="-20"
                                        y="230.16719999999998"
                                        text-anchor="start"
                                        dominant-baseline="auto"
                                        font-size="11px"
                                        font-weight="400"
                                        fill="#373d3f"
                                        class="apexcharts-text apexcharts-yaxis-label"
                                        style="font-family: Helvetica, Arial, sans-serif;"
                                    >
                                        <tspan id="SvgjsTspan1551">2.0</tspan>
                                        <title>2.0</title>
                                    </text>
                                    <text
                                        id="SvgjsText1553"
                                        font-family="Helvetica, Arial, sans-serif"
                                        x="-20"
                                        y="296.3896"
                                        text-anchor="start"
                                        dominant-baseline="auto"
                                        font-size="11px"
                                        font-weight="400"
                                        fill="#373d3f"
                                        class="apexcharts-text apexcharts-yaxis-label"
                                        style="font-family: Helvetica, Arial, sans-serif;"
                                    >
                                        <tspan id="SvgjsTspan1554">1.0</tspan>
                                        <title>1.0</title>
                                    </text>
                                    <text
                                        id="SvgjsText1556"
                                        font-family="Helvetica, Arial, sans-serif"
                                        x="-20"
                                        y="362.61199999999997"
                                        text-anchor="start"
                                        dominant-baseline="auto"
                                        font-size="11px"
                                        font-weight="400"
                                        fill="#373d3f"
                                        class="apexcharts-text apexcharts-yaxis-label"
                                        style="font-family: Helvetica, Arial, sans-serif;"
                                    >
                                        <tspan id="SvgjsTspan1557">0.0</tspan>
                                        <title>0.0</title>
                                    </text>
                                </g>
                                <g id="SvgjsG1558" class="apexcharts-yaxis-title">
                                    <text
                                        id="SvgjsText1559"
                                        font-family="Helvetica, Arial, sans-serif"
                                        x="36.45703125"
                                        y="195.55599999999998"
                                        text-anchor="end"
                                        dominant-baseline="auto"
                                        font-size="11px"
                                        font-weight="900"
                                        fill="#373d3f"
                                        class="apexcharts-text apexcharts-yaxis-title-text"
                                        style="font-family: Helvetica, Arial, sans-serif;"
                                        transform="rotate(90 14.67578125 190.55599975585938)"
                                    >
                                        Rating
                                    </text>
                                </g>
                            </g>
                            <rect id="SvgjsRect1434" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                        </svg>
                        <div class="apexcharts-tooltip apexcharts-theme-light">
                            <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                            <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                <span class="apexcharts-tooltip-marker" style="background-color: rgb(46, 140, 240);"></span>
                                <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                            <div class="apexcharts-tooltip-series-group" style="order: 2;">
                                <span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 0, 0);"></span>
                                <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div>
                        <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div>
                        <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-1 apexcharts-yaxistooltip-right apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded p-6 flex flex-col">
                <div class="top flex items-center mb-6">
                    <div class="title flex items-center">
                        <svg class="svg-inline--fa fa-comments w-42px h-auto text-blue-500" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="comments" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                            <path
                                class=""
                                fill="currentColor"
                                d="M208 352c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176c0 38.6 14.7 74.3 39.6 103.4c-3.5 9.4-8.7 17.7-14.2 24.7c-4.8 6.2-9.7 11-13.3 14.3c-1.8 1.6-3.3 2.9-4.3 3.7c-.5 .4-.9 .7-1.1 .8l-.2 .2 0 0 0 0C1 327.2-1.4 334.4 .8 340.9S9.1 352 16 352c21.8 0 43.8-5.6 62.1-12.5c9.2-3.5 17.8-7.4 25.3-11.4C134.1 343.3 169.8 352 208 352zM448 176c0 112.3-99.1 196.9-216.5 207C255.8 457.4 336.4 512 432 512c38.2 0 73.9-8.7 104.7-23.9c7.5 4 16 7.9 25.2 11.4c18.3 6.9 40.3 12.5 62.1 12.5c6.9 0 13.1-4.5 15.2-11.1c2.1-6.6-.2-13.8-5.8-17.9l0 0 0 0-.2-.2c-.2-.2-.6-.4-1.1-.8c-1-.8-2.5-2-4.3-3.7c-3.6-3.3-8.5-8.1-13.3-14.3c-5.5-7-10.7-15.4-14.2-24.7c24.9-29 39.6-64.7 39.6-103.4c0-92.8-84.9-168.9-192.6-175.5c.4 5.1 .6 10.3 .6 15.5z"
                            ></path>
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
                                        d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"
                                    ></path>
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
                                    viewBox="0 0 320 512"
                                >
                                    <path
                                        class=""
                                        fill="currentColor"
                                        d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
                                    ></path>
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
                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
                            ></path>
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
                                        d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"
                                    ></path>
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
                                    viewBox="0 0 320 512"
                                >
                                    <path
                                        class=""
                                        fill="currentColor"
                                        d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
                                    ></path>
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