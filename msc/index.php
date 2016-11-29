<?php
//error_reporting(0);
session_start();
include_once 'class/msc_class.php';
include_once 'class/msc_function.php';
$db = new Database();
// koneksi ke MySQL via method
$db->connectMySQL();
// script untuk user taruh sisi bos hahha semangat untuk kodingya
$user = new User();
$menu = new menu();
#session nama lengkap
//$nm_lengkap = $_SESSION['fullname'];
if (!$user->get_sesi())
{
header("location:login.php");
}
if ($_GET['r'] == 'logout')
{
$user->user_logout();
header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- disabled cache-->
    <!-- Page title -->
    <title>MarketingSakti.com </title>
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico" />
    <!-- Vendor styles -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.css" /><!-- oke -->
    <link rel="stylesheet" href="vendor/metisMenu/dist/metisMenu.css" /><!-- oke -->
    <link rel="stylesheet" href="vendor/animate.css/animate.css" /><!-- oke -->
    <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.css" /><!-- oke -->
    <link rel="stylesheet" href="vendor/sweetalert/lib/sweet-alert.css" /><!-- oke -->
    <link rel="stylesheet" href="vendor/datatables_plugins/integration/bootstrap/3/dataTables.bootstrap.css" />
	<link rel="stylesheet" href="vendor/select2-3.5.2/select2.css" />
    <link rel="stylesheet" href="vendor/select2-bootstrap/select2-bootstrap.css" />
    <link rel="stylesheet" href="vendor/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" />
    <link rel="stylesheet" href="vendor/fooTable/css/footable.core.min.css" />
	<link rel="stylesheet" href="vendor/bootstrap-datepicker-master/dist/css/bootstrap-datepicker3.min.css" />
    <!-- App styles -->
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" /><!-- oke -->
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/helper.css" /><!-- oke -->
    <link rel="stylesheet" href="styles/style.css">
    <!-- Css custome sendiri untuk customize keutuhan tertentu-->
    <link rel="stylesheet" href="styles/customcss/msc_custom.css">
    <!-- data tabel -->

    
   
  
   
  



</head>
<body class="fixed-navbar fixed-footer">

<!-- Simple splash screen
<div class="splash"> <div class="color-line"></div><div class="splash-title"><h1>MARKETINGSAKTI.COM</h1><p>Mohon tunggu sistem sedang melakukan permintaan data keserver.......</p><img src="images/loading-bars.svg" width="64" height="64" /> </div> </div>
-->
<!--[if lt IE 7]>
<p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Header -->
<div id="header">
    <div class="color-line">
    </div>
    <div id="logo" class="light-version">
        <span>
        <a href="index.php">MARKETINGSAKTI</a>
        </span>
    </div>
    <nav role="navigation">
        <div class="header-link hide-menu"><i class="fa fa-bars"></i></div>
        <div class="small-logo">
            <span class="text-primary">MARKETINGSAKTI</span>
        </div>
        <form role="search" class="navbar-form-custom" method="post" action="#">
            <div class="form-group">
                <input type="text" placeholder="Ketikan pencarian" class="form-control" name="search">
            </div>
        </form>
        <div class="navbar-right">
            <ul class="nav navbar-nav no-borders">
                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <i class="pe-7s-speaker"></i>
                    </a>
                    <ul class="dropdown-menu hdropdown notification animated flipInX">
                        <li>
                            <a>
                                <span class="label label-success">NEW</span> It is a long established.
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="label label-warning">WAR</span> There are many variations.
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="label label-danger">ERR</span> Contrary to popular belief.
                            </a>
                        </li>
                        <li class="summary"><a href="#">See all notifications</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <i class="pe-7s-keypad"></i>
                    </a>

                    <div class="dropdown-menu hdropdown bigmenu animated flipInX">
                        <table>
                            <tbody>
                            <tr>
                                <td>
                                    <a href="projects.html">
                                        <i class="pe pe-7s-portfolio text-info"></i>
                                        <h5>Projects</h5>
                                    </a>
                                </td>
                                <td>
                                    <a href="mailbox.html">
                                        <i class="pe pe-7s-mail text-warning"></i>
                                        <h5>Email</h5>
                                    </a>
                                </td>
                                <td>
                                    <a href="contacts.html">
                                        <i class="pe pe-7s-users text-success"></i>
                                        <h5>Contacts</h5>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="forum.html">
                                        <i class="pe pe-7s-comment text-info"></i>
                                        <h5>Forum</h5>
                                    </a>
                                </td>
                                <td>
                                    <a href="analytics.html">
                                        <i class="pe pe-7s-graph1 text-danger"></i>
                                        <h5>Analytics</h5>
                                    </a>
                                </td>
                                <td>
                                    <a href="file_manager.html">
                                        <i class="pe pe-7s-box1 text-success"></i>
                                        <h5>Files</h5>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle label-menu-corner" href="#" data-toggle="dropdown">
                        <i class="pe-7s-mail"></i>
                        <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu hdropdown animated flipInX">
                        <div class="title">
                            You have 4 new messages
                        </div>
                        <li>
                            <a>
                                It is a long established.
                            </a>
                        </li>
                        <li>
                            <a>
                                There are many variations.
                            </a>
                        </li>
                        <li>
                            <a>
                                Lorem Ipsum is simply dummy.
                            </a>
                        </li>
                        <li>
                            <a>
                                Contrary to popular belief.
                            </a>
                        </li>
                        <li class="summary"><a href="#">See All Messages</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" id="sidebar" class="right-sidebar-toggle">
                        <i class="pe-7s-upload pe-7s-news-paper"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="?r=logout">
                        <i class="pe-7s-upload pe-rotate-90"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<!-- Navigation -->
<aside id="menu">
    <div id="navigation">
        <div class="profile-picture">
            <a href="index.php">
                <img src="images/profile.jpg" class="img-circle m-b" alt="logo">
            </a>

            <div class="stats-label text-color">
                <span class="font-extra-bold font-uppercase"><?php echo $_SESSION['fullname'];?>  </span>

                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <small class="text-muted">Options <b class="caret"></b></small>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="">Contacts</a></li>
                        <li><a href="">Profile</a></li>
                        <li><a href="">Analytics</a></li>
                        <li class="divider"></li>
                        <li><a href="?r=logout">Logout</a></li>
                    </ul>
                </div>


                
            </div>
        </div>

        <ul class="nav" id="side-menu">
            <li class="active">
                <a href="index.php"> <span class="nav-label"><i class="pe-7s-home"></i>&nbsp;&nbsp;Dashboard</span> <span class="label label-success pull-right">1.0</span> </a>
            </li>
			<?php
				$arrayMenu = $menu->menuNavigasi($_SESSION['username']);
					if(isset($arrayMenu) && $arrayMenu !=NULL){
						foreach($arrayMenu as $data){
			?>
            <li>
                <a href="#"><span class="nav-label"><i class="<?php echo $data['icon']?>"></i>&nbsp;&nbsp;<?php echo $data['title']?></span><span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level">
					<?php
						$arraysMenu = $menu->subMenuNavigasi($data['id_menu'],$_SESSION['username']);
						if(isset($arraysMenu) && $arraysMenu !=NULL){
							foreach($arraysMenu as $data2){
					?>
                    <li><a href="?r=<?php echo $data2['folder']?>&pg=<?php echo $data2['link']?>"><?php echo $data2['title']?></a></li>
					<?php
							}
						}
					?>
                </ul>
            </li>
            <?php
						}
					}
			?>
            <li>
                <a href="?r=coba&pg=validasi"><span class="nav-label"><i class="pe-7s-paperclip"></i>&nbsp;&nbsp;MENU KOSONG</span></a>
            </li>

        </ul>
    </div>
</aside>

<!-- Main Wrapper -->
<div id="wrapper">
                            <?php
                                if (!isset($_GET['r'])){
                                    include('view/dashboard/dashboard.php');
                                }else{
                                    $r  = $_GET['r'];
                                    $pg = $_GET['pg'];
                                        include "view/".$r.'/'.$pg.".php";
                                }
                            ?>
    
    <!-- Right sidebar -->
    <div id="right-sidebar" class="animated fadeInRight">

        <div class="p-m">
            <button id="sidebar-close" class="right-sidebar-toggle sidebar-button btn btn-default m-b-md"><i class="pe pe-7s-close"></i>
            </button>
            <div>
                <span class="font-bold no-margins"> Analytics </span>
                <br>
                <small> Lorem Ipsum is simply dummy text of the printing simply all dummy text.</small>
            </div>
            <div class="row m-t-sm m-b-sm">
                <div class="col-lg-6">
                    <h3 class="no-margins font-extra-bold text-success">300,102</h3>

                    <div class="font-bold">98% <i class="fa fa-level-up text-success"></i></div>
                </div>
                <div class="col-lg-6">
                    <h3 class="no-margins font-extra-bold text-success">280,200</h3>

                    <div class="font-bold">98% <i class="fa fa-level-up text-success"></i></div>
                </div>
            </div>
            <div class="progress m-t-xs full progress-small">
                <div style="width: 25%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" role="progressbar"
                     class=" progress-bar progress-bar-success">
                    <span class="sr-only">35% Complete (success)</span>
                </div>
            </div>
        </div>
        <div class="p-m bg-light border-bottom border-top">
            <span class="font-bold no-margins"> Social talks </span>
            <br>
            <small> Lorem Ipsum is simply dummy text of the printing simply all dummy text.</small>
            <div class="m-t-md">
                <div class="social-talk">
                    <div class="media social-profile clearfix">
                        <a class="pull-left">
                            <img src="images/a1.jpg" alt="profile-picture">
                        </a>

                        <div class="media-body">
                            <span class="font-bold">John Novak</span>
                            <small class="text-muted">21.03.2015</small>
                            <div class="social-content small">
                                Injected humour, or randomised words which don't look even slightly believable.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social-talk">
                    <div class="media social-profile clearfix">
                        <a class="pull-left">
                            <img src="images/a3.jpg" alt="profile-picture">
                        </a>

                        <div class="media-body">
                            <span class="font-bold">Mark Smith</span>
                            <small class="text-muted">14.04.2015</small>
                            <div class="social-content">
                                Many desktop publishing packages and web page editors.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social-talk">
                    <div class="media social-profile clearfix">
                        <a class="pull-left">
                            <img src="images/a4.jpg" alt="profile-picture">
                        </a>

                        <div class="media-body">
                            <span class="font-bold">Marica Morgan</span>
                            <small class="text-muted">21.03.2015</small>

                            <div class="social-content">
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-m">
            <span class="font-bold no-margins"> Sales in last week </span>
            <div class="m-t-xs">
                <div class="row">
                    <div class="col-xs-6">
                        <small>Today</small>
                        <h4 class="m-t-xs">$170,20 <i class="fa fa-level-up text-success"></i></h4>
                    </div>
                    <div class="col-xs-6">
                        <small>Last week</small>
                        <h4 class="m-t-xs">$580,90 <i class="fa fa-level-up text-success"></i></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <small>Today</small>
                        <h4 class="m-t-xs">$620,20 <i class="fa fa-level-up text-success"></i></h4>
                    </div>
                    <div class="col-xs-6">
                        <small>Last week</small>
                        <h4 class="m-t-xs">$140,70 <i class="fa fa-level-up text-success"></i></h4>
                    </div>
                </div>
            </div>
            <small> Lorem Ipsum is simply dummy text of the printing simply all dummy text.
                Many desktop publishing packages and web page editors.
            </small>
        </div>

    </div>

    <!-- Footer-->
    <footer class="footer">
        <span class="pull-right">
        Marketingsakti.com
        </span>
        &copy; <?php echo date('Y'); ?>
    </footer>

</div>

  <!-- Vendor scripts -->
<script src="vendor/jquery/dist/jquery.min.js"></script><!-- oke -->
<script src="vendor/jquery-ui/jquery-ui.min.js"></script><!-- oke -->
<script src="vendor/slimScroll/jquery.slimscroll.min.js"></script><!-- oke -->
<script src="vendor/bootstrap/dist/js/bootstrap.js"></script><!-- oke -->
<script src="vendor/metisMenu/dist/metisMenu.min.js"></script><!-- oke -->
<script src="vendor/iCheck/icheck.min.js"></script><!-- oke -->
<script src="vendor/sparkline/index.js"></script><!-- oke -->
<script src="vendor/moment/moment.js"></script>



<script src="vendor/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="vendor/datatables_plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
<script src="vendor/bootstrap-datepicker-master/dist/js/bootstrap-datepicker.min.js"></script>
<script src="vendor/select2-3.5.2/select2.min.js"></script>
<script src="vendor/fooTable/dist/footable.all.min.js"></script>
<!-- Jquery validasi -->
<script src="vendor/jquery-validation/jquery.validate.min.js"></script><!-- oke -->
<!-- App scripts -->
<script src="scripts/homer.js"></script><!-- oke -->
<script src="scripts/aplikasi.js"></script>
<script src="scripts/tabel.js"></script>



<script>

    $(function () {
		$(".js-source-konsumen").select2();
         $(".js-source-sales").select2();
        /**
         * Flot charts data and options
         */
        var data1 = [ [0, 55], [1, 48], [2, 40], [3, 36], [4, 40], [5, 60], [6, 50], [7, 51] ];
        var data2 = [ [0, 56], [1, 49], [2, 41], [3, 38], [4, 46], [5, 67], [6, 57], [7, 59] ];

        var chartUsersOptions = {
            series: {
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 1,
                    fill: 0.4
                },
            },
            grid: {
                tickColor: "#f0f0f0",
                borderWidth: 1,
                borderColor: 'f0f0f0',
                color: '#6a6c6f'
            },
            colors: [ "#62cb31", "#efefef"],
        };

        $.plot($("#flot-line-chart"), [data1, data2], chartUsersOptions);

        /**
         * Flot charts 2 data and options
         */
        var chartIncomeData = [
            {
                label: "line",
                data: [ [1, 10], [2, 26], [3, 16], [4, 36], [5, 32], [6, 51] ]
            }
        ];

        var chartIncomeOptions = {
            series: {
                lines: {
                    show: true,
                    lineWidth: 0,
                    fill: true,
                    fillColor: "#64cc34"

                }
            },
            colors: ["#62cb31"],
            grid: {
                show: false
            },
            legend: {
                show: false
            }
        };

        $.plot($("#flot-income-chart"), chartIncomeData, chartIncomeOptions);
    });

</script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-4625583-2', 'webapplayers.com');
    ga('send', 'pageview');

</script>

</body>

</html>