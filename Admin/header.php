<?php require_once('../common/config.php'); 

$web->session_check($web->session_get('adminID'));

?>

<!doctype html>

<html lang="en" dir="ltr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Engineering Innovation</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/plugin.min.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" type="image/png" sizes="16x16" href="../images/logo.png">
    <!-- <style>
        .header-top
            {
                background-color: #000 !important; 
            }
            .sidebar 
            {
                background: #000 !important;
                color: wheat !important;
            }
            .sidebar__menu-group ul.sidebar_nav li > a {
                color: #fff;
            }
    </style> -->

</head>

<body class="layout-dark side-menu overlayScroll">

    <div class="mobile-search"></div>

    <div class="mobile-author-actions"></div>



    <header class="header-top">



        <nav class="navbar navbar-light">



            <div class="navbar-left">



                <a href="#" class="sidebar-toggle">



                    <img class="svg" src="img/svg/bars.svg" alt="img"></a>



                    <a class="navbar-brand" href="#" ><img class="svg dark" src="../images/logo.png" alt="svg" height="50px" width="200px"><img height="50px" width="200px" class="light" src="../images/logo.png" alt="img"></a>



               

            </div>



            <!-- ends: navbar-left -->







            <div class="navbar-right">



                <ul class="navbar-right__menu">



                    <li class="nav-search d-none">



                        <a href="#" class="search-toggle">



                            <i class="la la-search"></i>



                            <i class="la la-times"></i>



                        </a>

                    </li>



<!--

                    <li class="nav-message">



                        <div class="dropdown-custom">



                            <a href="javascript:;" class="nav-item-toggle">



                                <span data-feather="mail"></span></a>



                            <div class="dropdown-wrapper">



                                <h2 class="dropdown-wrapper__title">Messages <span class="badge-circle badge-success ml-1">2</span></h2>



                                <ul>



                                    <li class="author-online has-new-message">



                                        <div class="user-avater">



                                            <img src="img/team-1.png" alt="">



                                        </div>



                                        <div class="user-message">



                                            <p>



                                                <a href="#" class="subject stretched-link text-truncate" style="max-width: 180px;">Web Design</a>



                                                <span class="time-posted">3 hrs ago</span>



                                            </p>



                                            <p>



                                                <span class="desc text-truncate" style="max-width: 215px;">Lorem ipsum



                                                    dolor amet cosec Lorem ipsum</span>



                                                <span class="msg-count badge-circle badge-success badge-sm">1</span>



                                            </p>



                                        </div>



                                    </li>



                                    <li class="author-offline has-new-message">



                                        <div class="user-avater">



                                            <img src="img/team-1.png" alt="">



                                        </div>



                                        <div class="user-message">



                                            <p>



                                                <a href="#" class="subject stretched-link text-truncate" style="max-width: 180px;">Web Design</a>



                                                <span class="time-posted">3 hrs ago</span>



                                            </p>



                                            <p>



                                                <span class="desc text-truncate" style="max-width: 215px;">Lorem ipsum



                                                    dolor amet cosec Lorem ipsum</span>



                                                <span class="msg-count badge-circle badge-success badge-sm">1</span>



                                            </p>



                                        </div>



                                    </li>



                                    <li class="author-online has-new-message">



                                        <div class="user-avater">



                                            <img src="img/team-1.png" alt="">



                                        </div>



                                        <div class="user-message">



                                            <p>



                                                <a href="#" class="subject stretched-link text-truncate" style="max-width: 180px;">Web Design</a>



                                                <span class="time-posted">3 hrs ago</span>



                                            </p>



                                            <p>



                                                <span class="desc text-truncate" style="max-width: 215px;">Lorem ipsum



                                                    dolor amet cosec Lorem ipsum</span>



                                                <span class="msg-count badge-circle badge-success badge-sm">1</span>



                                            </p>



                                        </div>



                                    </li>



                                    <li class="author-offline">



                                        <div class="user-avater">



                                            <img src="img/team-1.png" alt="">



                                        </div>



                                        <div class="user-message">



                                            <p>



                                                <a href="#" class="subject stretched-link text-truncate" style="max-width: 180px;">Web Design</a>



                                                <span class="time-posted">3 hrs ago</span>



                                            </p>



                                            <p>



                                                <span class="desc text-truncate" style="max-width: 215px;">Lorem ipsum



                                                    dolor amet cosec Lorem ipsum</span>



                                            </p>



                                        </div>



                                    </li>



                                    <li class="author-offline">



                                        <div class="user-avater">



                                            <img src="img/team-1.png" alt="">



                                        </div>



                                        <div class="user-message">



                                            <p>



                                                <a href="#" class="subject stretched-link text-truncate" style="max-width: 180px;">Web Design</a>



                                                <span class="time-posted">3 hrs ago</span>



                                            </p>



                                            <p>



                                                <span class="desc text-truncate" style="max-width: 215px;">Lorem ipsum



                                                    dolor amet cosec Lorem ipsum</span>



                                            </p>



                                        </div>



                                    </li>



                                </ul>



                                <a href="#" class="dropdown-wrapper__more">See All Message</a>



                            </div>



                        </div>



                    </li>

-->



                    <!-- ends: nav-message -->



<!--

                    <li class="nav-notification">



                        <div class="dropdown-custom">



                            <a href="javascript:;" class="nav-item-toggle">



                                <span data-feather="bell"></span></a>



                            <div class="dropdown-wrapper">



                                <h2 class="dropdown-wrapper__title">Notifications <span class="badge-circle badge-warning ml-1">4</span></h2>



                                <ul>



                                    <li class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">



                                        <div class="nav-notification__type nav-notification__type--primary">



                                            <span data-feather="inbox"></span>



                                        </div>



                                        <div class="nav-notification__details">



                                            <p>



                                                <a href="#" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>



                                                <span>sent you a message</span>



                                            </p>



                                            <p>



                                                <span class="time-posted">5 hours ago</span>



                                            </p>



                                        </div>



                                    </li>



                                    <li class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">



                                        <div class="nav-notification__type nav-notification__type--secondary">



                                            <span data-feather="upload"></span>



                                        </div>



                                        <div class="nav-notification__details">



                                            <p>



                                                <a href="#" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>



                                                <span>sent you a message</span>



                                            </p>



                                            <p>



                                                <span class="time-posted">5 hours ago</span>



                                            </p>



                                        </div>



                                    </li>



                                    <li class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">



                                        <div class="nav-notification__type nav-notification__type--success">



                                            <span data-feather="log-in"></span>



                                        </div>



                                        <div class="nav-notification__details">



                                            <p>



                                                <a href="#" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>



                                                <span>sent you a message</span>



                                            </p>



                                            <p>



                                                <span class="time-posted">5 hours ago</span>



                                            </p>



                                        </div>



                                    </li>



                                    <li class="nav-notification__single nav-notification__single d-flex flex-wrap">



                                        <div class="nav-notification__type nav-notification__type--info">



                                            <span data-feather="at-sign"></span>



                                        </div>



                                        <div class="nav-notification__details">



                                            <p>



                                                <a href="#" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>



                                                <span>sent you a message</span>



                                            </p>



                                            <p>



                                                <span class="time-posted">5 hours ago</span>



                                            </p>



                                        </div>



                                    </li>



                                    <li class="nav-notification__single nav-notification__single d-flex flex-wrap">



                                        <div class="nav-notification__type nav-notification__type--danger">



                                            <span data-feather="heart"></span>



                                        </div>



                                        <div class="nav-notification__details">



                                            <p>



                                                <a href="#" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>



                                                <span>sent you a message</span>



                                            </p>



                                            <p>



                                                <span class="time-posted">5 hours ago</span>



                                            </p>



                                        </div>



                                    </li>



                                </ul>



                                <a href="#" class="dropdown-wrapper__more">See all incoming activity</a>



                            </div>



                        </div>



                    </li>

-->

                    <li class="nav-author">

                        <div class="dropdown-custom">

                            <a href="javascript:;" class="nav-item-toggle">

								<img src="../image/<?php echo $admindata['image'] ?>" alt="" class="rounded-circle">

							</a>

                            <div class="dropdown-wrapper">

                                <div class="nav-author__info">



                                    <div class="author-img">



                                        <img src="../image/<?php echo $admindata['image'] ?>" alt="" class="rounded-circle">



                                    </div>



                                    <div>





                                        <h6><?php echo $admindata['name'] ?></h6>



                                        <!-- <span>UI Designer</span> -->





                                    </div>



                                </div>



                                <div class="nav-author__options">



                                    <ul>



<!--

                                        <li>



                                            <a href="#">



                                                <span data-feather="user"></span> Profile</a>



                                        </li>



                                        <li>



                                            <a href="#">



                                                <span data-feather="settings"></span> Settings</a>



                                        </li>

-->
                                    <li>



                                        <a href="profile">



                                        <span data-feather="settings"></span>Profile</a>



                                    </li>

                                    </ul>



                                    <a href="logout" class="nav-author__signout">

                                        <span data-feather="log-out"></span> Sign Out</a>

                                </div>

                            </div>

                            

                        </div>

                    </li>

                    

                </ul>

                <!-- ends: .navbar-right__menu -->

                <div class="navbar-right__mobileAction d-md-none">



                    <a href="#" class="btn-search">



                        <span data-feather="search"></span>



                        <span data-feather="x"></span></a>



                    <a href="#" class="btn-author-action">



                        <span data-feather="more-vertical"></span></a>



                </div>



            </div>



            <!-- ends: .navbar-right -->



        </nav>



    </header>



    <main class="main-content">







        <aside class="sidebar">



            <div class="sidebar__menu-group">



                <ul class="sidebar_nav">



                    <li class="menu-title">



                        <span>Main menu</span>



                    </li>



                    <li class="">



                        <a href="index" class="active">



                            <span data-feather="home" class="nav-icon"></span>



                            <span class="menu-text">Dashboard</span>

                        </a>

                    </li>



                    <li class="has-child">



                        <a href="#" class="">



                            <span data-feather="layout" class="nav-icon"></span>



                            <span class="menu-text">Layouts</span>



                            <span class="toggle-icon"></span>



                        </a>



                        <ul>



                            <li class="l_sidebar">



                                <a href="#" data-layout="light">Light Mode</a>



                            </li>



                            <li class="l_sidebar">



                                <a href="#" data-layout="dark">Dark Mode</a>



                            </li>



                           


<!-- 
                            <li class="l_navbar">



                                <a href="#" data-layout="side">Side Menu</a>



                            </li> -->



                          



                           



                        </ul>



                    </li>

					

					<?php 

					$sesion=$web->session_get('role');

					$userID=$web->session_get('adminID');

					if($sesion==1)

					{

						$ar="";

					}

					else{

						$ar="AND menuID IN(SELECT menuID FROM `admin_menu` WHERE adminID='$userID')";

					}

					foreach($MENU->all("menuID!='' $ar ") as $mens){ ?>

					<li>

                        <a href="<?=$mens['link']?>" class="">

                            <span data-feather="user" class="nav-icon"></span>

                            <span class="menu-text"><?=$mens['name']?></span>

                        </a>

                    </li>
                    
					<?php } ?>
                    <li><a href="logout">logout</a></li>

					

                </ul>

            </div>

        </aside>