<!doctype html>
<html lang="en">

	<head>
		@if (auth()->user()->role == 'admin')
		<title>Admin | BMKG</title>
		@else
		<title>User | BMKG</title>
		@endif
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		@yield('header')
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/linearicons/style.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/chartist/css/chartist-custom.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('admin/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('admin/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/img/apple-icon.png')}}">
    {{-- <link rel="icon" type="{{asset('admin/image/png')}}" sizes="96x96" href="{{asset('admin/img/favicon.png')}}"> --}}
    {{-- <link href="bmkg/css/bootstrap.min.css" rel="stylesheet"> --}}
	{{-- <link href="bmkg/css/signin.css" rel="stylesheet"> --}}
	
    <link rel="icon" type="bmkg/images/png" href="bmkg/images/icon.png" />
    {{-- SweetAlert --}}
	<script src="sweetalert2.all.min.js"></script>

    {{-- Toastr --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand" style="margin-top: -70px">
				<div style="margin-bottom: -80px">
                    <a href="/home"><img width="200" src="{{asset('bmkg/images/bmkg2.png')}}" alt="Klorofil Logo" class="img-responsive logo"></a>
                </div>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						@if(auth()->user()->role == 'admin')
						<li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-alarm"></i>
								<span class="badge bg-danger" id="count-notification"></span>
							</a>
							<ul class="dropdown-menu notifications">
								<li><a href="/notifikasi" class="more">Lihat Semua Notifikasi</a></li>
							</ul>
						</li>
						@endif
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>{{ Auth::user()->name }}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								{{-- <li><a href="/profile"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li> --}}
								<li><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    <i class="lnr lnr-exit"></i> <span>Logout</span></a>
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-pie-chart"></i> <span>Bite Radar</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							{{-- <li><a href="/home" class="@yield('dashboard')"><i class="lnr lnr-pie-chart"></i> <span>Bite Radar </span></a></li> --}}
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a class="@yield('dashboard')" href="/br_edrp9comp">Bite Radar Edrp9comp</a></li>
									<li><a class="@yield('br_edrp9io')" href="/br_edrp9">Bite Radar Edrp9</a></li>
									<li><a class="@yield('br_ddcbite')" href="/br_ddcbite">Bite Radar Ddcbite</a></li>
								</ul>
							</div>
						</li>
						@if(auth()->user()->role == 'admin')
						<li><a href="/pengguna" class="@yield('pengguna')"><i class="lnr lnr-user"></i> <span>Administrasi</span></a></li>
						@endif
						<li>
							<a href="#subPagess" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Laporan</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPagess" class="collapse ">
								<ul class="nav">
									<li><a class="@yield('laporan') @yield('lap_perbaikan_adm')" href="/lap_perbaikan_adm" class="">Laporan Perbaikan</a></li>
									<li><a class="@yield('laporan') @yield('lap_pemeliharaan_adm') " href="/lap_pemeliharaan_adm" class="">Laporan Pemeliharaan</a></li>
								</ul>
							</div>
						</li>
						<li><a href="/profile" class="@yield('profile')"><i class="lnr lnr-user"></i> <span>Profile</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		@yield('content')
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">Shared by <i class="fa fa-love"></i><a href="https://bootstrapthemes.co">BootstrapThemes</a>
				</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('admin/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
	<script src="{{asset('admin/vendor/chartist/js/chartist.min.js')}}"></script>
	<script src="{{asset('admin/scripts/klorofil-common.js')}}"></script>
	
	{{-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> --}}
	<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	{{-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> --}}
	<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	{{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script> --}}
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


	
	<script>
		@if(Session::has('sukses'))
		toastr.success("{{Session::get('sukses')}}", "Selamat")
		@endif
	</script>
	<script>
		@if(Session::has('gagal'))
		toastr.error("{{Session::get('gagal')}}", "Gagal")
		@endif
	</script>
	@yield('footer')
</body>

</html>
