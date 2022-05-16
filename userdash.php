<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="userdash.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--<title>Admin Dashboard Panel</title>--> 
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="data:image/jpeg;base64,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" alt="">
            </div>

            <span class="logo_name">Vel Tech</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Home</span>
                </a></li>

                <li><a href="profile.php">
                    <i class="uil uil-user"></i>
                    <span class="link-name">Profile</span>
                </a></li>

                <li><a href="#">
                    <i class="uil-book-open"></i>
                    <span class="link-name">Courses</span>
                </a></li>

                <li><a href="#">
                    <i class="uil-graph-bar"></i>
                    <span class="link-name">Summary</span>
                </a></li>

                <!-- <li><a href="#">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Comment</span>
                </a></li>

                <li><a href="#">
                    <i class="uil uil-share"></i>
                    <span class="link-name">Share</span>
                </a></li> -->
            </ul> 
            
            <ul class="logout-mode">
                <li><a href="logout.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <!--<div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <!--<img src="images/profile.jpg" alt="">-->
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                      <i class="uil-book-open"></i>
                        <span class="text">Courses</span>
                        <!-- <span class="number">50,120</span> -->
                    </div>

                    <div class="box box2">
                      <i class="uil-coins"></i>
                        <span class="text">Attendance</span>
                        <!-- <span class="number">20,120</span> -->
                    </div>


                    <div class="box box3">
                      <i class="uil-graph-bar"></i>
                        <span class="text">Summary</span>
            
                        </div> 

                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Activity</span>
                </div>

                <div class="activity-data">
                    
                </div>
            </div>
        </div>
    </section>

    <script src="userdash.js"></script>
</body>
</html>
