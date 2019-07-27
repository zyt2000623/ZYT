<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/houtai/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/houtai/custom-plugins/wizard/wizard.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/houtai/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/houtai/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/houtai/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/houtai/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/houtai/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/houtai/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/houtai/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/houtai/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/houtai/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/houtai/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/houtai/css/themer.css" media="screen">

<title>MWS Admin - Dashboard</title>

</head>

<body>


    <!-- Header -->
    <div id="mws-header" class="clearfix">
    
        <!-- Logo Container -->
        <div id="mws-logo-container">
        
            <!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
            <div id="mws-logo-wrap">
                <img src="/houtai/images/mws-logo.png" alt="mws admin">
            </div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">

            
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
                <!-- User Photo -->
                <div id="mws-user-photo">
                    <img src="/houtai/example/profile.jpg" alt="User Photo">
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                        Hello, John Doe
                    </div>
                    <ul>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Change Password</a></li>
                        <li><a href="index.html">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
        <!-- Necessary markup, do not remove -->
        <div id="mws-sidebar-stitch"></div>
        <div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
            <!-- Searchbox -->
            <div id="mws-searchbox" class="mws-inset">
                <form action="typography.html">
                    <input type="text" class="mws-search-input" placeholder="Search...">
                    <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button>
                </form>
            </div>
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>

                    <li>
                        <a href="#"><i class="icon-list"></i>用户管理</a>
                        <ul>
                            <li><a href="/admin/users">用户列表</a></li>
                            <li><a href="/admin/users/create">用户添加</a></li>
  
                        </ul>
                    </li>

                </ul>
            </div>         
        </div>
        
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">

        <!--内容开始-->
        <div class="container">
            @section('content')

            @show
        </div>

        <!--内容的结束-->     
            <!-- Footer -->
            <div id="mws-footer">
                Copyright Your Website 2012. All Rights Reserved.
            </div>
            
        </div>
        <!-- Main Container End -->
        
    </div>

    <!-- JavaScript Plugins -->
    <script src="/houtai/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/houtai/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/houtai/js/libs/jquery.placeholder.min.js"></script>
    <script src="/houtai/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/houtai/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/houtai/jui/jquery-ui.custom.min.js"></script>
    <script src="/houtai/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/houtai/plugins/datatables/jquery.dataTables.min.js"></script>
    <!--[if lt IE 9]>
    <script src="/houtai/js/libs/excanvas.min.js"></script>
    <![endif]-->
    <script src="/houtai/plugins/flot/jquery.flot.min.js"></script>
    <script src="/houtai/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="/houtai/plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="/houtai/plugins/flot/plugins/jquery.flot.stack.min.js"></script>
    <script src="/houtai/plugins/flot/plugins/jquery.flot.resize.min.js"></script>
    <script src="/houtai/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/houtai/plugins/validate/jquery.validate-min.js"></script>
    <script src="/houtai/custom-plugins/wizard/wizard.min.js"></script>

    <!-- Core Script -->
    <script src="/houtai/bootstrap/js/bootstrap.min.js"></script>
    <script src="/houtai/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/houtai/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/houtai/js/demo/demo.dashboard.js"></script>

</body>
</html>