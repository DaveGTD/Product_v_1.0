<!doctype html>
<!--[if lt IE 8]><html class="no-js lt-ie8"> <![endif]-->
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Grid | Dynamic Admin Template</title>
        <!-- Mobile specific metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1 user-scalable=no">
        <!-- Force IE9 to render in normal mode -->
        <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
        <meta name="author" content="" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="application-name" content="" />
        <!-- Import google fonts - Heading first/ text second -->
        <link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans:400,700' rel='stylesheet' type='text/css'>
        <!-- Css files -->
        <!-- Icons -->
        <link href="css/icons.css" rel="stylesheet" />
        <!-- Bootstrap stylesheets (included template modifications) -->
        <link href="css/bootstrap.css" rel="stylesheet" />
        <!-- Plugins stylesheets (all plugin custom css) -->
        <link href="css/plugins.css" rel="stylesheet" />
        <!-- Main stylesheets (template main css file) -->
        <link href="css/main.css" rel="stylesheet" />
        <!-- Custom stylesheets ( Put your own changes here ) -->
        <link href="css/custom.css" rel="stylesheet" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
        <link rel="icon" href="img/ico/favicon.ico" type="image/png">
        <!-- Windows8 touch icon ( http://www.buildmypinnedsite.com/ )-->
        <meta name="msapplication-TileColor" content="#3399cc" />
    </head>
    <body>
        <!--[if lt IE 9]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
        <!-- .page-navbar -->
        <div id="header" class="page-navbar">
            <!-- .navbar-brand -->
            <a href="index.html" class="navbar-brand hidden-xs hidden-sm">
                <img src="img/logo.png" class="logo hidden-xs" alt="Dynamic logo">
                <img src="img/logosm.png" class="logo-sm hidden-lg hidden-md" alt="Dynamic logo">
            </a>
            <!-- / navbar-brand -->
            <!-- .no-collapse -->
            <div id="navbar-no-collapse" class="navbar-no-collapse">
                <!-- top left nav -->
                <ul class="nav navbar-nav">
                    <li class="toggle-sidebar">
                        <a href="#">
                            <i class="fa fa-reorder"></i>
                            <span class="sr-only">Collapse sidebar</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="reset-layout tipB" title="Reset panel position for this page"><i class="fa fa-history"></i></a>
                    </li>
                </ul>
                <!-- / top left nav -->
                <!-- top right nav -->
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="sr-only">Notifications</span>
                            <span class="badge badge-danger">6</span>
                        </a>
                        <ul class="dropdown-menu right dropdown-notification" role="menu">
                            <li><a href="#" class="dropdown-menu-header">Notifications</a>
                            </li>
                            <li><a href="#"><i class="l-basic-life-buoy"></i> 2 support request</a>
                            </li>
                            <li><a href="#"><i class="l-basic-gear"></i> Settings is changed</a>
                            </li>
                            <li><a href="#"><i class="l-weather-lightning"></i> 5 min server downtime</a>
                            </li>
                            <li><a href="#"><i class="l-basic-server2"></i> Databse backup is complete</a>
                            </li>
                            <li><a href="#"><i class="l-basic-lightbulb"></i> SuggeElson push 1 commit</a>
                            </li>
                            <li><a href="#" class="view-all">View all <i class="l-arrows-right"></i> </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">
                            <i class="fa fa-cog"></i>
                            <span class="sr-only">Settings</span>
                        </a>
                        <ul class="dropdown-menu dropdown-form dynamic-settings right" role="menu">
                            <li><a href="#" class="dropdown-menu-header">Template settings</a>
                            </li>
                            <li>
                                <div class="toggle-custom">
                                    <label class="toggle" data-on="ON" data-off="OFF">
                                        <input type="checkbox" id="fixed-header-toggle" name="fixed-header-toggle" checked>
                                        <span class="button-checkbox"></span>
                                    </label>
                                    <label for="fixed-header-toggle">Fixed header</label>
                                </div>
                            </li>
                            <li>
                                <div class="toggle-custom">
                                    <label class="toggle" data-on="ON" data-off="OFF">
                                        <input type="checkbox" id="fixed-left-sidebar" name="fixed-left-sidebar" checked>
                                        <span class="button-checkbox"></span>
                                    </label>
                                    <label for="fixed-left-sidebar">Fixed Left Sidebar</label>
                                </div>
                            </li>
                            <li>
                                <div class="toggle-custom">
                                    <label class="toggle" data-on="ON" data-off="OFF">
                                        <input type="checkbox" id="fixed-right-sidebar" name="fixed-right-sidebar" checked>
                                        <span class="button-checkbox"></span>
                                    </label>
                                    <label for="fixed-right-sidebar">Fixed Right Sidebar</label>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="login.html">
                            <i class="fa fa-power-off"></i>
                            <span class="sr-only">Logout</span>
                        </a>
                    </li>
                    <li>
                        <a id="toggle-right-sidebar" href="#" class="tipB" title="Toggle right sidebar">
                            <i class="l-software-layout-sidebar-right"></i>
                            <span class="sr-only">Toggle right sidebar</span>
                        </a>
                    </li>
                </ul>
                <!-- / top right nav -->
            </div>
            <!-- / collapse -->
        </div>
        <!-- / page-navbar -->
        <!-- #wrapper -->
        <div id="wrapper">
            <!-- .page-sidebar -->
            <aside id="sidebar" class="page-sidebar hidden-md hidden-sm hidden-xs">
                <!-- Start .sidebar-inner -->
                <div class="sidebar-inner">
                    <!-- Start .sidebar-scrollarea -->
                    <div class="sidebar-scrollarea">
                        <!--  .sidebar-panel -->
                        <div class="sidebar-panel">
                            <h5 class="sidebar-panel-title">Profile</h5>
                        </div>
                        <!-- / .sidebar-panel -->
                        <div class="user-info clearfix">
                            <img src="img/avatars/128.jpg" alt="avatar">
                            <span class="name">SuggeElson</span>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-xs"><i class="l-basic-gear"></i>
                                </button>
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">settings <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu right" role="menu">
                                    <li><a href="profile.html"><i class="fa fa-edit"></i>Edit profile</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-money"></i>Windraws</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-credit-card"></i>Deposits</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="login.html"><i class="fa fa-power-off"></i>Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--  .sidebar-panel -->
                        <div class="sidebar-panel">
                            <h5 class="sidebar-panel-title">Navigation</h5>
                        </div>
                        <!-- / .sidebar-panel -->
                        <!-- .side-nav -->
                        <div class="side-nav">
                            <ul class="nav">
                                <li><a href="index.html"><i class="l-basic-laptop"></i><span class="txt">Dashboard</span></a>
                                </li>
                                <li><a href="http://themes.suggelab.com/#dynamic_frontend" target="_blank"><i class="l-basic-webpage"></i><span class="txt">Frontend</span><span class="label">hot</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="l-ecommerce-graph1"></i> <span class="txt">Charts</span></a>
                                    <ul class="sub">
                                        <li><a href="charts-flot.html"><span class="txt">Flot charts</span></a>
                                        </li>
                                        <li><a href="charts-morris.html"><span class="txt">Morris charts</span></a>
                                        </li>
                                        <li><a href="charts-chartjs.html"><span class="txt">Chartjs </span></a>
                                        </li>
                                        <li><a href="charts-other.html"><span class="txt">Other charts</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="l-basic-webpage-txt"></i><span class="txt">Forms</span></a>
                                    <ul class="sub">
                                        <li><a href="forms-basic.html"><span class="txt">Basic forms</span></a>
                                        </li>
                                        <li><a href="forms-advanced.html"><span class="txt">Advanced forms</span></a>
                                        </li>
                                        <li><a href="forms-layouts.html"><span class="txt">Form layouts</span></a>
                                        </li>
                                        <li><a href="forms-wizard.html"><span class="txt">Form wizard</span></a>
                                        </li>
                                        <li><a href="forms-validation.html"><span class="txt">Form validation</span></a>
                                        </li>
                                        <li><a href="code-editor.html"><span class="txt">Code editor</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="l-software-layout-header-3columns"></i><span class="txt">Tables</span></a>
                                    <ul class="sub">
                                        <li><a href="tables-basic.html"><span class="txt">Basic tables</span></a>
                                        </li>
                                        <li><a href="tables-data.html"><span class="txt">Data tables</span></a>
                                        </li>
                                        <li><a href="tables-editable.html"><span class="txt">Editable tables</span></a>
                                        </li>
                                        <li><a href="tables-ajax.html"><span class="txt">Ajax tables</span></a>
                                        </li>
                                        <li><a href="tables-pricing.html"><span class="txt">Pricing tables</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="l-software-layers2"></i><span class="txt">UI Elements</span></a>
                                    <ul class="sub">
                                        <li><a href="icons.html"><span class="txt">Icons</span></a>
                                        </li>
                                        <li><a href="typography.html"><span class="txt">Typography</span></a>
                                        </li>
                                        <li><a href="tabs.html"><span class="txt">Tabs</span></a>
                                        </li>
                                        <li><a href="accordions.html"><span class="txt">Accordions</span></a>
                                        </li>
                                        <li><a href="buttons.html"><span class="txt">Buttons</span></a>
                                        </li>
                                        <li><a href="notifications.html"><span class="txt">Notifications</span></a>
                                        </li>
                                        <li><a href="modals.html"><span class="txt">Modals</span></a>
                                        </li>
                                        <li><a href="sliders.html"><span class="txt">Sliders</span></a>
                                        </li>
                                        <li><a href="progressbars.html"><span class="txt">Progressbars</span></a>
                                        </li>
                                        <li><a href="lists.html"><span class="txt">Lists</span></a>
                                        </li>
                                        <li><a href="grid.html"><span class="txt">Grid</span></a>
                                        </li>
                                        <li><a href="ui-other.html"><span class="txt">Other</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="portlets.html"><i class="l-software-layout-header"></i><span class="txt">Portlets</span><span class="label">22</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="l-basic-mail"></i> <span class="txt">Email</span></a>
                                    <ul class="sub">
                                        <li><a href="email-inbox.html"><span class="txt">Inbox</span></a>
                                        </li>
                                        <li><a href="email-read.html"><span class="txt">Read email</span></a>
                                        </li>
                                        <li><a href="email-write.html"><span class="txt">Write email</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="l-basic-geolocalize-01"></i><span class="txt">Maps</span></a>
                                    <ul class="sub">
                                        <li><a href="maps-google.html"><span class="txt">Google maps</span></a>
                                        </li>
                                        <li><a href="maps-vector.html"><span class="txt">Vector maps</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="l-basic-webpage"></i><span class="txt">Pages</span></a>
                                    <ul class="sub">
                                        <li><a href="login.html"><span class="txt">Login</span></a>
                                        </li>
                                        <li><a href="lock-screen.html"><span class="txt">Lock screen</span></a>
                                        </li>
                                        <li><a href="register.html"><span class="txt">Register</span></a>
                                        </li>
                                        <li><a href="lost-password.html"><span class="txt">Lost password</span></a>
                                        </li>
                                        <li><a href="profile.html"><span class="txt">User profile</span></a>
                                        </li>
                                        <li><a href="calendar.html"><span class="txt">Calendar</span></a>
                                        </li>
                                        <li><a href="timeline.html"><span class="txt">Timeline</span></a>
                                        </li>
                                        <li><a href="gallery.html"><span class="txt">Gallery</span></a>
                                        </li>
                                        <li><a href="invoice.html"><span class="txt">Invoice</span></a>
                                        </li>
                                        <li><a href="blank.html"><span class="txt">Blank page</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="txt">Error pages</span></a>
                                            <ul class="sub">
                                                <li><a href="403.html"><span class="txt">403</span></a>
                                                </li>
                                                <li><a href="404.html"><span class="txt">404</span></a>
                                                </li>
                                                <li><a href="500.html"><span class="txt">500</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- / side-nav -->
                        <!--  .sidebar-panel -->
                        <div class="sidebar-panel">
                            <h5 class="sidebar-panel-title">Server stats</h5>
                            <div class="sidebar-panel-content">
                                <div class="sidebar-stat mb10">
                                    <p class="color-white mb5 mt5"><i class="fa fa-hdd-o mr5"></i> Disk Space <span class="pull-right small">30%</span>
                                    </p>
                                    <div class="progress flat transparent progress-bar-xs">
                                        <div class="progress-bar progress-bar-white" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
                                    </div>
                                    <span class="dib s12 mt5 per100 text-center">3001.56 / 10000 MB</span>
                                </div>
                                <div class="sidebar-stat">
                                    <p class="color-white mb5 mt5"><i class="glyphicon glyphicon-transfer mr5"></i> Bandwidth Transfer <span class="pull-right small">78%</span>
                                    </p>
                                    <div class="progress flat transparent progress-bar-xs">
                                        <div class="progress-bar progress-bar-white" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                                    </div>
                                    <span class="dib s12 mb10 mt5 per100 text-center">87565.12 / 120000 MB</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .sidebar-scrollarea -->
                </div>
                <!-- End .sidebar-inner -->
            </aside>
            <!-- / page-sidebar -->
                        
        <!-- / #wrapper -->
        <div id="footer" class="clearfix sidebar-page right-sidebar-page">
            <!-- Start #footer  -->
            <p class="pull-left">
                Copyrights &copy; 2014 <a href="http://suggeelson.com/" class="color-blue strong" target="_blank">SuggeElson</a>. All rights reserved.
            </p>
            <p class="pull-right">
                <a href="#" class="mr5">Terms of use</a>
                |
                <a href="#" class="ml5 mr25">Privacy police</a>
            </p>
        </div>
        <!-- End #footer  -->
        <!-- Back to top -->
        <div id="back-to-top"><a href="#">Back to Top</a>
        </div>
        <!-- Javascripts -->
        <!-- Load pace first -->
        <script src="plugins/core/pace/pace.min.js"></script>
        <!-- Important javascript libs(put in all pages) -->
        <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script>
        window.jQuery || document.write('<script src="js/libs/jquery-2.1.1.min.js">\x3C/script>')
        </script>
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script>
        window.jQuery || document.write('<script src="js/libs/jquery-ui-1.10.4.min.js">\x3C/script>')
        </script>
        <!--[if lt IE 9]>
  <script type="text/javascript" src="js/libs/excanvas.min.js"></script>
  <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <script type="text/javascript" src="js/libs/respond.min.js"></script>
<![endif]-->
        <!-- Bootstrap plugins -->
        <script src="js/bootstrap/bootstrap.js"></script>
        <!-- Core plugins ( not remove ) -->
        <script src="js/libs/modernizr.custom.js"></script>
        <!-- Handle responsive view functions -->
        <script src="js/jRespond.min.js"></script>
        <!-- Custom scroll for sidebars,tables and etc. -->
        <script src="plugins/core/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="plugins/core/slimscroll/jquery.slimscroll.horizontal.min.js"></script>
        <!-- Remove click delay in touch -->
        <script src="plugins/core/fastclick/fastclick.js"></script>
        <!-- Increase jquery animation speed -->
        <script src="plugins/core/velocity/jquery.velocity.min.js"></script>
        <!-- Quick search plugin (fast search for many widgets) -->
        <script src="plugins/core/quicksearch/jquery.quicksearch.js"></script>
        <!-- Bootbox fast bootstrap modals -->
        <script src="plugins/ui/bootbox/bootbox.js"></script>
        <!-- Other plugins ( load only nessesary plugins for every page) -->
        <script src="plugins/charts/sparklines/jquery.sparkline.js"></script>
        <script src="js/jquery.dynamic.js"></script>
        <script src="js/main.js"></script>
        <script src="js/pages/blank.js"></script>
    </body>
</html>