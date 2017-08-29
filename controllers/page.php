<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/configs/config.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/controllers/announcement.php';

// ----------------------
// Navigation description
// ----------------------
// initialize a Manager (should not be used explicitly): new Manager($manager_id)
// get methods: get_attributes() returns attributes
// set methods: set_attributes_to($new_value) return true/false

// ----------------------
// other functions
// ----------------------

class Page {
    // ----------------------
    // Navigation attributes
    // ----------------------
    private $current_user;

    // ----------------------
    // Constructor
    // ----------------------
//    public function __construct($current_user) {
//
//    }

    // ----------------------
    // Navigation functions
    // ----------------------
    public function nav_head() {
        echo '
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
            <title>Bootstrap 101 Template</title>
        
            <!-- Bootstrap -->
            <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
            <link href="../assets/css/nav.css" rel="stylesheet">
        
            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
        ';

        // '.$_SERVER['DOCUMENT_ROOT'].'

        // include_once $_SERVER['DOCUMENT_ROOT'].'/controllers/_nav.php';
    }

    public function nav_body_start() {
        echo '
        <div id="wrapper">
            <div class="overlay"></div>
        
            <!-- Sidebar -->
            <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
                <ul class="nav sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="#">
                            Brand
                        </a>
                    </li>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Events</a>
                    </li>
                    <li>
                        <a href="#">Team</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Works <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-header">Dropdown heading</li>
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <li>
                        <a href="https://twitter.com/maridlcrmn">Follow me</a>
                    </li>
                </ul>
            </nav>
            <!-- /#sidebar-wrapper -->
        
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                    <span class="hamb-top"></span>
                    <span class="hamb-middle"></span>
                    <span class="hamb-bottom"></span>
                </button>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
        ';
    }

    public function nav_body_close() {
        echo '
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->
        
        </div>
        <!-- /#wrapper -->
        
        <!-- jQuery (necessary for Bootstrap\'s JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/nav.js"></script>
        ';
    }
}
?>