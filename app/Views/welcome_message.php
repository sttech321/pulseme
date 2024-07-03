<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>pulseM</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="https://kiliassets.speetra.com/favicon/favicon-32x32.png">
    <link rel="stylesheet" type="text/css" href="/css/header.css">
    <link rel="stylesheet" type="text/css" href="/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/css/all.min.css">
</head>

<body>
    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="#"> <img data-v-139b8be6="" width="120" src="../image/login-img.png"></a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                        <img data-v-139b8be6="" width="230" src="../image/person.jpg" alt="user picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name">Jhon
                            <strong>Smith</strong>
                        </span>
                        <span class="user-role">Administrator</span>
                    </div>
                </div>

                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>General</span>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-book"></i>
                                <span> Operate </span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Analyze</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#"><img width="15" src="../image/overview.svg" alt="sidebar icon">Overview </a>
                                    </li>
                                    <li>
                                        <a href="#"><img width="15" src="../image/reviews.svg" alt="sidebar icon">Reviews</a>
                                    </li>
                                    <li>
                                        <a href="#"><img width="15" src="../image/competitor.svg" alt="sidebar icon">Competitor Analysis</a>
                                    </li>
                                    <li>
                                        <a href="#"><img width="15" src="../image/dispatching.svg" alt="sidebar icon">Dispatching</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=" sidebar-dropdown">
                            <a href="#">
                                <i class="far fa-gem"></i>
                                <span>Leaderboard</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#"><img width="15" src="../image/summary.svg" alt="sidebar icon">Summary</a>
                                    </li>
                                    <li>
                                        <a href="#"><img width="15" src="../image/reports.svg" alt="sidebar icon">Reports</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-area-chart"></i>
                                <span>Marketplace</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#"><img width="15" src="../image/lead-generation.svg" alt="sidebar icon">Lead Generation</a>
                                    </li>
                                    <li>
                                        <a href="#"><img width="15" src="../image/employee-retention.svg" alt="sidebar icon">Employee Retention</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-globe"></i>
                                <span>Referrals</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->

        </nav>
        <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div class="headerTop">
                <div class="dropMenuWrap">Header Top Content</div>
            </div>
            <div class="container-fluid">
                <h2>Pro Sidebar</h2>
                <hr>

                <h5>More templates</h5>
                <hr>

            </div>

        </main>
        <!-- page-content" -->
    </div>
    <!-- page-wrapper -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".sidebar-dropdown > a").click(function() {
                $(".sidebar-submenu").slideUp(200);
                if ($(this).parent().hasClass("active")) {
                    $(".sidebar-dropdown").removeClass("active");
                    $(this).parent().removeClass("active");
                } else {
                    $(".sidebar-dropdown").removeClass("active");
                    $(this).next(".sidebar-submenu").slideDown(200);
                    $(this).parent().addClass("active");
                }
            });

            $("#close-sidebar").click(function() {
                $(".page-wrapper").removeClass("toggled");
            });

            $("#show-sidebar").click(function() {
                $(".page-wrapper").addClass("toggled");
            });
        });
    </script>

</body>

</html>