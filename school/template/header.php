<?php
$pass = "../template/";

?>
<!DOCTYPE html>
<html
        lang="en"
        data-footer="true"
        data-override='{"attributes": {"placement": "vertical","layout": "boxed", "behaviour": "unpinned" }, "storagePrefix": "elearning-portal"}'
>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title><?=$title?></title>
    <meta name="description" content="Acorn elearning platform path list." />
    <!-- Favicon Tags Start -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?=$pass?>img/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=$pass?>img/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=$pass?>img/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=$pass?>img/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?=$pass?>img/favicon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?=$pass?>img/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?=$pass?>img/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?=$pass?>img/favicon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="<?=$pass?>img/favicon/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="<?=$pass?>img/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="<?=$pass?>img/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?=$pass?>img/favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="<?=$pass?>img/favicon/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="<?=$pass?>img/favicon/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="<?=$pass?>img/favicon/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="<?=$pass?>img/favicon/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="<?=$pass?>img/favicon/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="<?=$pass?>img/favicon/mstile-310x310.png" />
    <!-- Favicon Tags End -->
    <!-- Font Tags Start -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="font/CS-Interface/style.css" />
    <!-- Font Tags End -->
    <!-- Vendor Styles Start -->
    <link rel="stylesheet" href="<?=$pass?>css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="<?=$pass?>css/vendor/OverlayScrollbars.min.css" />

    <!-- Vendor Styles End -->
    <!-- Template Base Styles Start -->
    <link rel="stylesheet" href="<?=$pass?>css/styles.css" />
    <!-- Template Base Styles End -->

    <link rel="stylesheet" href="<?=$pass?>css/main.css" />
    <script src="js/base/loader.js"></script>
</head>

<body>
<div id="root">
    <div id="nav" class="nav-container d-flex" data-horizontal-mobile="1500">
        <div class="nav-content d-flex">
            <!-- Logo Start -->
            <div class="logo position-relative">
                <a href="index.html">
                    <!-- Logo can be added directly -->
                    <!-- <img src="<?=$pass?>img/logo/logo-white.svg" alt="logo" /> -->

                    <!-- Or added via css to provide different ones for different color themes -->
                    <div class="img"></div>
                </a>
            </div>
            <!-- Logo End -->

            <!-- Language Switch Start -->
            <div class="language-switch-container">
                <button class="btn btn-empty language-button dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EN</button>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">DE</a>
                    <a href="#" class="dropdown-item active">EN</a>
                    <a href="#" class="dropdown-item">ES</a>
                </div>
            </div>
            <!-- Language Switch End -->

            <!-- User Menu Start -->
            <div class="user-container d-flex">
                <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="profile" alt="profile" src="<?=$pass?>img/my/foot.jpg" />
                    <div class="name">Mark Stepaniuk</div>
                </a>
                <div class="dropdown-menu dropdown-menu-end user-menu wide">
                    <div class="row mb-3 ms-0 me-0">
                        <div class="col-12 ps-1 mb-2">
                            <div class="text-extra-small text-primary">ACCOUNT</div>
                        </div>
                        <div class="col-6 ps-1 pe-1">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">User Info</a>
                                </li>
                                <li>
                                    <a href="#">Preferences</a>
                                </li>
                                <li>
                                    <a href="#">Calendar</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 pe-1 ps-1">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">Security</a>
                                </li>
                                <li>
                                    <a href="#">Billing</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mb-1 ms-0 me-0">
                        <div class="col-12 p-1 mb-2 pt-2">
                            <div class="text-extra-small text-primary">APPLICATION</div>
                        </div>
                        <div class="col-6 ps-1 pe-1">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">Themes</a>
                                </li>
                                <li>
                                    <a href="#">Language</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 pe-1 ps-1">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">Devices</a>
                                </li>
                                <li>
                                    <a href="#">Storage</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mb-1 ms-0 me-0">
                        <div class="col-12 p-1 mb-3 pt-3">
                            <div class="separator-light"></div>
                        </div>
                        <div class="col-6 ps-1 pe-1">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">
                                        <i data-cs-icon="help" class="me-2" data-cs-size="17"></i>
                                        <span class="align-middle">Help</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i data-cs-icon="file-text" class="me-2" data-cs-size="17"></i>
                                        <span class="align-middle">Docs</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 pe-1 ps-1">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">
                                        <i data-cs-icon="gear" class="me-2" data-cs-size="17"></i>
                                        <span class="align-middle">Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i data-cs-icon="logout" class="me-2" data-cs-size="17"></i>
                                        <span class="align-middle">Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- User Menu End -->

            <!-- Icons Menu Start -->
            <ul class="list-unstyled list-inline text-center menu-icons">
                <li class="list-inline-item">
                    <a href="#" id="colorButton">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="cs-icon cs-icon-light-on light"><path d="M8 14L8.28283 16.4684C8.35276 17.0786 8.38772 17.3837 8.55097 17.6009C8.63047 17.7067 8.73017 17.7956 8.8443 17.8625C9.07862 18 9.38575 18 10 18V18C10.6143 18 10.9214 18 11.1557 17.8625C11.2698 17.7956 11.3695 17.7067 11.449 17.6009C11.6123 17.3837 11.6472 17.0786 11.7172 16.4684L12 14"></path><path d="M15 7C15 10.1518 13.5 10.5 13 11.5C12.5 12.5 12.6096 14.5 10 14.5C7.39038 14.5 7.5 12.5 7 11.5C6.5 10.5 5 10.1518 5 7C5 4.23858 7.23858 2 10 2C12.7614 2 15 4.23858 15 7Z"></path><path d="M18 7 17.5 7M16.9658 3 16.4829 3.12941M16.9658 11.2588 16.4829 11.1294M2 7 2.5 7M3.03418 3 3.51714 3.12941M3.03418 11.2588 3.51714 11.1294"></path></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="cs-icon cs-icon-light-off dark"><path d="M8 14L8.28283 16.4684C8.35276 17.0786 8.38772 17.3837 8.55097 17.6009C8.63047 17.7067 8.73017 17.7956 8.8443 17.8625C9.07862 18 9.38575 18 10 18V18C10.6143 18 10.9214 18 11.1557 17.8625C11.2698 17.7956 11.3695 17.7067 11.449 17.6009C11.6123 17.3837 11.6472 17.0786 11.7172 16.4684L12 14"></path><path d="M15 7C15 10.1518 13.5 10.5 13 11.5C12.5 12.5 12.6096 14.5 10 14.5C7.39038 14.5 7.5 12.5 7 11.5C6.5 10.5 5 10.1518 5 7C5 4.23858 7.23858 2 10 2C12.7614 2 15 4.23858 15 7Z"></path></svg>
                    </a>
                </li>
            </ul>
            <!-- Icons Menu End -->

            <!-- Menu Start -->
            <div class="menu-container flex-grow-1">
                <ul id="menu" class="menu">
                    <li>
                        <a href="#dashboards" data-bs-toggle="collapse" data-role="button" aria-expanded="false" class="active" data-clicked="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="cs-icon cs-icon-home-garage icon"><g clip-path="url(#clip0)"><path d="M3 11V16.25C3 16.9522 3 17.3033 3.16853 17.5556 3.24149 17.6648 3.33524 17.7585 3.44443 17.8315 3.69665 18 4.04777 18 4.75 18H5.25C5.95223 18 6.30335 18 6.55557 17.8315 6.66476 17.7585 6.75851 17.6648 6.83147 17.5556 7 17.3033 7 16.9522 7 16.25V3M7 8V16.25C7 16.9522 7 17.3033 7.16853 17.5556 7.24149 17.6648 7.33524 17.7585 7.44443 17.8315 7.69665 18 8.04777 18 8.75 18H15.25C15.9522 18 16.3033 18 16.5556 17.8315 16.6648 17.7585 16.7585 17.6648 16.8315 17.5556 17 17.3033 17 16.9522 17 16.25V8"></path><path d="M2 11.5 7 8.5M5.50037 2.49988 19.0004 8.99988"></path><path d="M14 18V13.875C14 13.5239 14 13.3483 13.9157 13.2222C13.8793 13.1676 13.8324 13.1207 13.7778 13.0843C13.6517 13 13.4761 13 13.125 13H10.875C10.5239 13 10.3483 13 10.2222 13.0843C10.1676 13.1207 10.1207 13.1676 10.0843 13.2222C10 13.3483 10 13.5239 10 13.875V18"></path></g><defs><clippath id="clip0"><path d="M0 0H20V20H0z"></path></clippath></defs></svg>
                            <span class="label">MKT</span>
                        </a>
                        <ul id="dashboards" class="collapse" style="">
                            <li>
                                <a href="../news" class="active">
                                    <span class="label">Новости</span>
                                </a>
                            </li>
                            <li>
                                <a href="../course">
                                    <span class="label">Курсы</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Menu End -->

            <!-- Mobile Buttons Start -->
            <div class="mobile-buttons-container">
                <!-- Scrollspy Mobile Button Start -->
                <a href="#" id="scrollSpyButton" class="spy-button" data-bs-toggle="dropdown">
                    <i data-cs-icon="menu-dropdown"></i>
                </a>
                <!-- Scrollspy Mobile Button End -->

                <!-- Scrollspy Mobile Dropdown Start -->
                <div class="dropdown-menu dropdown-menu-end" id="scrollSpyDropdown"></div>
                <!-- Scrollspy Mobile Dropdown End -->

                <!-- Menu Button Start -->
                <a href="#" id="mobileMenuButton" class="menu-button">
                    <i data-cs-icon="menu"></i>
                </a>
                <!-- Menu Button End -->
            </div>
            <!-- Mobile Buttons End -->
        </div>
        <div class="nav-shadow"></div>
    </div>