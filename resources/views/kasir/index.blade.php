<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href=" /img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Aplikasi Toko Buku</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href=" /css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href=" /css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href=" /css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href=" /css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href=" /css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image=" /img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="/buku">
                        <i class="pe-7s-notebook"></i>
                        <p>Buku</p>
                    </a>
                </li>
                <li>
                    <a href="/distributor">
                        <i class="pe-7s-user"></i>
                        <p>Distributor</p>
                    </a>
                </li>
                <li class="active">
                    <a href="/kasir">
                        <i class="pe-7s-calculator"></i>
                        <p>Kasir</p>
                    </a>
                </li>
                <li>
                    <a href="/pasok">
                        <i class="pe-7s-box2"></i>
                        <p>Pasok</p>
                    </a>
                </li>
                <li>
                    <a href="/penjualan">
                        <i class="pe-7s-cart"></i>
                        <p>Penjualan</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">5</span>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Dropdown
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>
        <br>
 <div class="title_right">
                <div class="col-md-5 form-group  top_search">
                  <div class="input-group">
                  <form action="/kasir/search" method="GET">
                    <input type="text" name="search" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </form>
                  </div>
                </div>
              </div>
              
            <a href="/kasir/create"><button type="button" class="btn btn-success">Tambah Kasir</button></a>

            <div class="container-fluid">
                <div class="row">
			<div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                         <tr>
					  		<th>id_kasir</th>
					  		<th>nama</th>
					  		<th>alamat</th>
					  		<th>telepon</th>
					  		<th>status</th>
					  		<th>username</th>
					  		<th>akses</th>	
					  		<th>edit</th>
					  		<th>delete</th>
					  	</tr>
                        </thead>

                        <tbody>
                        	@foreach ($kasir as $data)
                          <tr class="even pointer">

                            <td>{{$data -> id_kasir}}</td>
                            <td><a href="/kasir/{{$data -> id_kasir}}">{{$data -> nama}}</a></td>
                            <td>{{$data -> alamat}}</td>
                            <td>{{$data -> telepon}}</td>
                            <td>{{$data -> status}}</td>
                            <td>{{$data -> username}}</td>
                            <td>{{$data -> akses}}</td>
                            <td>
								 <button type="submit" class="btn btn-default btn-xs btn-info" value="edit"><i class="fa fa-times"></i><a href="/kasir/{{$data->id_kasir}}/edit">Edit</a></button>
	           				   
                            </td>

	                       	<td>
	                       		<form action="/kasir/{{$data->id_kasir}}" method="post">
					              <input type="hidden" name="_method" value="delete">
					              <input type="hidden" name="_token" value="{{csrf_token()}}">
					              
					              <button type="submit" class="btn btn-default btn-xs btn-danger" value="Delete"><i class="fa fa-times"></i>Delete</button>
	             				</form>
	             			</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      <center>{!! $kasir->links() !!}</center>
                    </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src=" /js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src=" /js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src=" /js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src=" /js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src=" /js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src=" /js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src=" /js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>
	