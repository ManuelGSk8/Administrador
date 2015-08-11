<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>App Name - @yield('title')</title>
	<!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	@include('_Partial.css')
</head>
<body class="skin-purple-light sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<!-- Logo -->
	        <a href="index2.html" class="logo">
	          <!-- mini logo for sidebar mini 50x50 pixels -->
	          <span class="logo-mini"><b>A</b>LT</span>
	          <!-- logo for regular state and mobile devices -->
	          <span class="logo-lg"><b>Yammis</b> Admin</span>
	        </a>
	        <!-- Header Navbar: style can be found in header.less -->
        	<nav class="navbar navbar-static-top" role="navigation">
        		<!-- Sidebar toggle button-->
	        	<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
	        		<span class="sr-only">Toggle navigation</span>
	        	</a>	        	
        	</nav>
		</header>

		<!-- Left side column. contains the logo and sidebar -->
      	<aside class="main-sidebar">
        	<!-- sidebar: style can be found in sidebar.less -->
        	<section class="sidebar">
        		<!-- Sidebar user panel -->
		        <div class="user-panel">
		        	<div class="pull-left image">
		            	<img src="{{URL::asset('assets/content/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
		            </div>
		            <div class="pull-left info">
		            	<p>Alexander Pierce</p>
		            	<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
		            </div>
		        </div>
		        <!-- sidebar menu: : style can be found in sidebar.less -->
        		<ul class="sidebar-menu">
            		<li class="header">Menú</li>
            		<li class="active">
		            	<a href="{{ route('home') }}">
		            		<i class="fa fa-dashboard"></i> 
		            		<span>Dashboard</span> 		            		
		            	</a>		            	
		            </li>
		            <li>
		            	<a href="pages/widgets.html">
		            		<i class="fa fa-desktop"></i> <span>Banners</span>
	            		</a>
		            </li>
            	</ul>
        	</section>
        </aside> 
        <div class="content-wrapper" style="min-height:800px">
        	@yield('content')
        </div>
	</div>

	

    @include('_Partial.scripts')
</body>
</html>