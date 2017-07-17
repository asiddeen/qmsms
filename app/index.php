<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>QMSMS</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
   <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <!--Angular JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.5/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.5/angular-route.js"></script>
     <!--   Core JS Files   -->
    <script src="assets/js/jquery.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>
    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>
    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js"></script>
    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <!-- Custom JS -->
    <script src="scripts/app.js "></script>
    <script src="scripts/appController.js "></script>
    <script src="modules/dashboard/dashboard.js "></script>
    <script src="modules/services/services.js "></script>
    <script type="text/javascript">

        $(document).ready(function() {
            $("a[data-stateName]").click(function() {
               $("#title-brand").text( $(this).attr("data-stateName") );
            });

            $(".nav li").on("click", function() {
                $(".nav li").removeClass("active");
                $(this).addClass("active");
            });
        });

    </script>
</head>
<body ng-app="myApp">

<div class="wrapper">
    <div class="sidebar" data-color="red" data-image="">
        <div class="sidebar-wrapper" >
            <div class="logo">
                <row></row>
                <a class="simple-text">
                    <b>QMSMS</b> | Davao City Hall
                </a>
            </div>
            <ul class="nav">
                <li class="active">
                    <a data-stateName="Dashboard" href="#/">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a data-stateName="Services" href="#services">
                        <i class="pe-7s-user"></i>
                        <p>Services</p>
                    </a>
                </li>
                <li>
                    <a data-stateName="Counter" href="#counter">
                        <i class="pe-7s-note2"></i>
                        <p>Counter</p>
                    </a>
                </li>
                <li>
                    <a data-stateName="Users" href="#users">
                        <i class="pe-7s-news-paper"></i>
                        <p>Users</p>
                    </a>
                </li>
                <li>
                    <a data-stateName="Settings" href="#settings">
                        <i class="pe-7s-science"></i>
                        <p>Settings</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel" ng-controller = 'appController'>
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a style="font-weight: bold;"  class="navbar-brand" href="#" id="title-brand">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                 <i class="fa fa-external-link"></i>
                            <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Display Users View</a></li>
                                <li><a href="#">Display Queue View</a></li>
                            </ul>
                        </li>
                        <li>
                           <a href="#">
                                <i class="fa fa-window-maximize"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                {{ loggedUser }}
                            <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>   
                                    <a class="simple-text">
                                        Administrator
                                    </a>
                                 </li>
                                <li class="divider"></li>
                                <li><a href="#">Settings</a></li>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div ng-view class="content">
           
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-left">
                    &copy; 2017 <a href="">HCDC | TEAM JADE</a> How do you heal?
                </p>
            </div>
        </footer>
    </div>   
</div>
</body>
</html>
