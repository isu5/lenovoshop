<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>爱酥在线商城--shop</title>
    <!--STYLESHEET-->
    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    <link href="/admin/css/bootstrap.min.css" rel="stylesheet">
    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="/admin/css/nifty.min.css" rel="stylesheet">
    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="/admin/css/nifty-demo-icons.min.css" rel="stylesheet">
    <!--Demo [ DEMONSTRATION ]-->
    <link href="/admin/css/nifty-demo.min.css" rel="stylesheet">
    <link href="/admin/css/themify-icons.min.css" rel="stylesheet">
    <!--Magic Checkbox [ OPTIONAL ]-->
    <link href="/admin/plugins/magic-check/css/magic-check.min.css" rel="stylesheet">
    <!--JAVASCRIPT-->
    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="/admin/plugins/pace/pace.min.css" rel="stylesheet">
    <!--自定义style文件-->
    <link href="/admin//css/style.css" rel="stylesheet">

    <script src="/admin/plugins/pace/pace.min.js"></script>
    <!--jQuery [ REQUIRED ]-->
    <script src="/admin/js/jquery-2.2.4.min.js"></script>
    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="/admin/js/bootstrap.min.js"></script>
    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="/admin/js/nifty.min.js"></script>



</head>

<body>
<div id="container" class="effect aside-float aside-bright mainnav-lg">
    <header id="navbar">
        <div id="navbar-container" class="boxed">

            <!--Brand logo & name-->
            <!--================================-->
            <div class="navbar-header">
                <a href="{{url('admin/index')}}" class="navbar-brand">
                    {{-- <img src="img/logo.png" alt="Nifty Logo" class="brand-icon">--}}
                    <div class="brand-title">
                        <span class="brand-text">爱酥在线商城</span>
                    </div>
                </a>
            </div>
            <!--================================-->
            <!--End brand logo & name-->


            <!--Navbar Dropdown-->
            <!--================================-->
            <div class="navbar-content clearfix">
                <ul class="nav navbar-top-links pull-left">

                    <!--Navigation toogle button-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li class="tgl-menu-btn">
                        <a class="mainnav-toggle" href="#">
                            <i class="demo-pli-view-list"></i>
                        </a>
                    </li>


                </ul>
                <ul class="nav navbar-top-links pull-right">

                    <!--Language selector-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li class="dropdown">
                        <a id="demo-lang-switch" class="lang-selector dropdown-toggle" href="#" data-toggle="dropdown">
				<span class="lang-selected">
					<img class="lang-flag" src="img/flags/united-kingdom.png" alt="English">
				</span>
                        </a>

                        <!--Language selector menu-->
                        <ul class="head-list dropdown-menu">
                            <li>
                                <!--English-->
                                <a href="#" class="active">
                                    <img class="lang-flag" src="img/flags/united-kingdom.png" alt="English">
                                    <span class="lang-id">EN</span>
                                    <span class="lang-name">English</span>
                                </a>
                            </li>
                            <li>
                                <!--France-->
                                <a href="#">
                                    <img class="lang-flag" src="img/flags/france.png" alt="France">
                                    <span class="lang-id">FR</span>
                                    <span class="lang-name">Fran&ccedil;ais</span>
                                </a>
                            </li>
                            <li>
                                <!--Germany-->
                                <a href="#">
                                    <img class="lang-flag" src="img/flags/germany.png" alt="Germany">
                                    <span class="lang-id">DE</span>
                                    <span class="lang-name">Deutsch</span>
                                </a>
                            </li>
                            <li>
                                <!--Italy-->
                                <a href="#">
                                    <img class="lang-flag" src="img/flags/italy.png" alt="Italy">
                                    <span class="lang-id">IT</span>
                                    <span class="lang-name">Italiano</span>
                                </a>
                            </li>
                            <li>
                                <!--Spain-->
                                <a href="#">
                                    <img class="lang-flag" src="img/flags/spain.png" alt="Spain">
                                    <span class="lang-id">ES</span>
                                    <span class="lang-name">Espa&ntilde;ol</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End language selector-->



                    <!--User dropdown-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li id="dropdown-user" class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
				<span class="pull-right">
					<!--<img class="img-circle img-user media-object" src="img/profile-photos/1.png" alt="Profile Picture">-->
					<i class="demo-pli-male ic-user"></i>
				</span>
                            <div class="username hidden-xs">Admin</div>
                        </a>


                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right panel-default">

                            <!-- Dropdown heading  -->
                            <div class="pad-all bord-btm">
                                <p class="text-main mar-btm">
                                    个人设置
                                </p>

                            </div>


                            <!-- User dropdown menu -->
                            <ul class="head-list">
                                <li>
                                    <a href="#">
                                        <i class="demo-pli-male icon-lg icon-fw"></i> 个人设置
                                    </a>
                                </li>
                                <li>
                                    <a href="#">

                                        <i class="demo-pli-gear icon-lg icon-fw"></i> 修改密码
                                    </a>
                                </li>
                            </ul>

                            <!-- Dropdown footer -->
                            <div class="pad-all text-right">
                                <a href="pages-login.html" class="btn btn-primary">
                                    <i class="demo-pli-unlock"></i> 退出
                                </a>
                            </div>
                        </div>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End user dropdown-->

                    <li>
                        <a href="#" class="aside-toggle navbar-aside-icon">
                            <i class="pci-ver-dots"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!--================================-->
            <!--End Navbar Dropdown-->

        </div>
    </header>

    <div class="boxed">
		<div id="content-container">
			@yield('content')
        </div>
        <!--ASIDE 右边侧栏-->
        <!--===================================================-->
        <aside id="aside-container">
            <div id="aside">
                <div class="nano">
                    <div class="nano-content">

                        <!--Nav tabs-->
                        <!--================================-->
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active">
                                <a href="#demo-asd-tab-1" data-toggle="tab">
                                    <i class="demo-pli-speech-bubble-7"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#demo-asd-tab-2" data-toggle="tab">
                                    <i class="demo-pli-information icon-fw"></i> Report
                                </a>
                            </li>
                            <li>
                                <a href="#demo-asd-tab-3" data-toggle="tab">
                                    <i class="demo-pli-wrench icon-fw"></i> Settings
                                </a>
                            </li>
                        </ul>
                        <!--================================-->
                        <!--End nav tabs-->



                        <!-- Tabs Content -->
                        <!--================================-->
                        <div class="tab-content">

                            <!--First tab (Contact list)-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <div class="tab-pane fade in active" id="demo-asd-tab-1">
                                <p class="pad-hor mar-top text-semibold text-main">
                                    <span class="pull-right badge badge-warning">3</span> Family
                                </p>

                                <!--Family-->
                                <div class="list-group bg-trans">
                                    <a href="#" class="list-group-item">
                                        <div class="media-left pos-rel">
                                            <img class="img-circle img-xs" src="img/profile-photos/2.png" alt="Profile Picture">
                                            <i class="badge badge-success badge-stat badge-icon pull-left"></i>
                                        </div>
                                        <div class="media-body">
                                            <p class="mar-no">Stephen Tran</p>
                                            <small class="text-muted">Availabe</small>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="media-left pos-rel">
                                            <img class="img-circle img-xs" src="img/profile-photos/7.png" alt="Profile Picture">
                                        </div>
                                        <div class="media-body">
                                            <p class="mar-no">Brittany Meyer</p>
                                            <small class="text-muted">I think so</small>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="media-left pos-rel">
                                            <img class="img-circle img-xs" src="img/profile-photos/1.png" alt="Profile Picture">
                                            <i class="badge badge-info badge-stat badge-icon pull-left"></i>
                                        </div>
                                        <div class="media-body">
                                            <p class="mar-no">Jack George</p>
                                            <small class="text-muted">Last Seen 2 hours ago</small>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="media-left pos-rel">
                                            <img class="img-circle img-xs" src="img/profile-photos/4.png" alt="Profile Picture">
                                        </div>
                                        <div class="media-body">
                                            <p class="mar-no">Donald Brown</p>
                                            <small class="text-muted">Lorem ipsum dolor sit amet.</small>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="media-left pos-rel">
                                            <img class="img-circle img-xs" src="img/profile-photos/8.png" alt="Profile Picture">
                                            <i class="badge badge-warning badge-stat badge-icon pull-left"></i>
                                        </div>
                                        <div class="media-body">
                                            <p class="mar-no">Betty Murphy</p>
                                            <small class="text-muted">Idle</small>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="media-left pos-rel">
                                            <img class="img-circle img-xs" src="img/profile-photos/9.png" alt="Profile Picture">
                                            <i class="badge badge-danger badge-stat badge-icon pull-left"></i>
                                        </div>
                                        <div class="media-body">
                                            <p class="mar-no">Samantha Reid</p>
                                            <small class="text-muted">Offline</small>
                                        </div>
                                    </a>
                                </div>

                                <hr>
                                <p class="pad-hor text-semibold text-main">
                                    <span class="pull-right badge badge-success">Offline</span> Friends
                                </p>

                                <!--Works-->
                                <div class="list-group bg-trans">
                                    <a href="#" class="list-group-item">
                                        <span class="badge badge-purple badge-icon badge-fw pull-left"></span> Joey K. Greyson
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge badge-info badge-icon badge-fw pull-left"></span> Andrea Branden
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge badge-success badge-icon badge-fw pull-left"></span> Johny Juan
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge badge-danger badge-icon badge-fw pull-left"></span> Susan Sun
                                    </a>
                                </div>


                                <hr>
                                <p class="pad-hor mar-top text-semibold text-main">News</p>

                                <div class="pad-hor">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetuer
                                        <a data-title="45%" class="add-tooltip text-semibold" href="#">adipiscing elit</a>, sed diam nonummy nibh. Lorem ipsum dolor sit amet.
                                    </p>
                                    <small class="text-muted"><em>Last Update : Des 12, 2014</em></small>
                                </div>


                            </div>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End first tab (Contact list)-->


                            <!--Second tab (Custom layout)-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <div class="tab-pane fade" id="demo-asd-tab-2">

                                <!--Monthly billing-->
                                <div class="pad-all">
                                    <p class="text-semibold text-main">Billing &amp; reports</p>
                                    <p class="text-muted">Get <strong>$5.00</strong> off your next bill by making sure your full payment reaches us before August 5, 2016.</p>
                                </div>
                                <hr class="new-section-xs">
                                <div class="pad-all">
                                    <span class="text-semibold text-main">Amount Due On</span>
                                    <p class="text-muted text-sm">August 17, 2016</p>
                                    <p class="text-2x text-thin text-main">$83.09</p>
                                    <button class="btn btn-block btn-success mar-top">Pay Now</button>
                                </div>


                                <hr>

                                <p class="pad-hor text-semibold text-main">Additional Actions</p>

                                <!--Simple Menu-->
                                <div class="list-group bg-trans">
                                    <a href="#" class="list-group-item"><i class="demo-pli-information icon-lg icon-fw"></i> Service Information</a>
                                    <a href="#" class="list-group-item"><i class="demo-pli-mine icon-lg icon-fw"></i> Usage Profile</a>
                                    <a href="#" class="list-group-item"><span class="label label-info pull-right">New</span><i class="demo-pli-credit-card-2 icon-lg icon-fw"></i> Payment Options</a>
                                    <a href="#" class="list-group-item"><i class="demo-pli-support icon-lg icon-fw"></i> Message Center</a>
                                </div>


                                <hr>

                                <div class="text-center">
                                    <div><i class="demo-pli-old-telephone icon-3x"></i></div>
                                    Questions?
                                    <p class="text-lg text-semibold text-main"> (415) 234-53454 </p>
                                    <small><em>We are here 24/7</em></small>
                                </div>
                            </div>
                            <!--End second tab (Custom layout)-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


                            <!--Third tab (Settings)-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <div class="tab-pane fade" id="demo-asd-tab-3">
                                <ul class="list-group bg-trans">
                                    <li class="pad-top list-header">
                                        <p class="text-semibold text-main mar-no">Account Settings</p>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="pull-right">
                                            <input class="toggle-switch" id="demo-switch-1" type="checkbox" checked>
                                            <label for="demo-switch-1"></label>
                                        </div>
                                        <p class="mar-no">Show my personal status</p>
                                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="pull-right">
                                            <input class="toggle-switch" id="demo-switch-2" type="checkbox" checked>
                                            <label for="demo-switch-2"></label>
                                        </div>
                                        <p class="mar-no">Show offline contact</p>
                                        <small class="text-muted">Aenean commodo ligula eget dolor. Aenean massa.</small>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="pull-right">
                                            <input class="toggle-switch" id="demo-switch-3" type="checkbox">
                                            <label for="demo-switch-3"></label>
                                        </div>
                                        <p class="mar-no">Invisible mode </p>
                                        <small class="text-muted">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </small>
                                    </li>
                                </ul>


                                <hr>

                                <ul class="list-group pad-btm bg-trans">
                                    <li class="list-header"><p class="text-semibold text-main mar-no">Public Settings</p></li>
                                    <li class="list-group-item">
                                        <div class="pull-right">
                                            <input class="toggle-switch" id="demo-switch-4" type="checkbox" checked>
                                            <label for="demo-switch-4"></label>
                                        </div>
                                        Online status
                                    </li>
                                    <li class="list-group-item">
                                        <div class="pull-right">
                                            <input class="toggle-switch" id="demo-switch-5" type="checkbox" checked>
                                            <label for="demo-switch-5"></label>
                                        </div>
                                        Show offline contact
                                    </li>
                                    <li class="list-group-item">
                                        <div class="pull-right">
                                            <input class="toggle-switch" id="demo-switch-6" type="checkbox" checked>
                                            <label for="demo-switch-6"></label>
                                        </div>
                                        Show my device icon
                                    </li>
                                </ul>



                                <hr>

                                <p class="pad-hor text-semibold text-main mar-no">Task Progress</p>
                                <div class="pad-all">
                                    <p>Upgrade Progress</p>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-success" style="width: 15%;"><span class="sr-only">15%</span></div>
                                    </div>
                                    <small class="text-muted">15% Completed</small>
                                </div>
                                <div class="pad-hor">
                                    <p>Database</p>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-danger" style="width: 75%;"><span class="sr-only">75%</span></div>
                                    </div>
                                    <small class="text-muted">17/23 Database</small>
                                </div>

                            </div>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--Third tab (Settings)-->

                        </div>
                    </div>
                </div>
            </div>
        </aside>
       @include('admin.layout.menu')
    </div>
    <!-- FOOTER -->
    <!--===================================================-->
    <footer id="footer">
        <!-- Visible when footer positions are static -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <div class="hide-fixed pull-right pad-rgt">
            www.isu5.cn
        </div>
        <p class="pad-lft">&#0169; 2017 爱酥网络</p>

    </footer>
    <!--===================================================-->
    <!-- END FOOTER -->
    <!-- SCROLL PAGE BUTTON -->
    <!--===================================================-->
    <button class="scroll-top btn">
        <i class="pci-chevron chevron-up"></i>
    </button>
    <!--===================================================-->





</div>



</body>
</html>