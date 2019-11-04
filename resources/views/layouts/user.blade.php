<!doctype html>
<html class="fixed">
<head>
	<!-- Basic -->
	<meta charset="UTF-8">
	<title>SIM - Dokumen Standart LKPP</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('assets/vendor/select2/css/select2.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/vendor/jquery-ui/jquery-ui.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/vendor/jquery-ui/jquery-ui.theme.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/vendor/select2-bootstrap-theme/select2-bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/vendor/jquery-datatables-bs3/assets/css/datatables.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/dropzone.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/vendor/summernote/summernote.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/vendor/codemirror/lib/codemirror.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/vendor/codemirror/theme/monokai.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/stylesheets/theme.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/stylesheets/skins/default.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/stylesheets/theme-custom.css') }}">
	<script src="{{ asset('assets/vendor/modernizr/modernizr.js') }}"></script>
	<style type="text/css">
	.head2{
		background-color: #0088cc;
		padding-top:65px;
	}
	body{
		color:#373d3f;
	}
</style>
</head>
<body>
	<section class="body">

		<!-- start: header -->
		<header class="header header-nav-menu" >
			
			<div class="logo-container">
				<a href="{{ url('/') }}" class="logo">
					<img src="{{ url('assets/images/logo1.png') }}" width="75" height="35" alt="Porto Admin" />
				</a>
				<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
					<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
				</div>
			</div>
			<div class="header-nav collapse">
				<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
					<nav>
						<ul class="nav nav-pills" id="mainNav">
							@if(session('level') == null)
							<li class="">
								<a href="{{ url('/') }}">
									Home
								</a>    
							</li>
							<li class="">
								<a href="{{ url('login') }}">
									Login
								</a>    
							</li>
							@endif
						</ul>
					</nav>
				</div>
			</div>

			<div class="header-right">	

				@if(session('id') != null)

				<span class="separator"></span>
				<div id="userbox" class="userbox">
					<a href="#" data-toggle="dropdown">
						<figure class="profile-picture">
						</figure>
						<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
							<span class="name" style="color: #33353F">{{ session('name') }}</span>
							<span class="role" style="color: #33353F">{{ session('level') }}</span>
						</div>

						<i class="fa custom-caret"></i>
					</a>

					<div class="dropdown-menu">
						<ul class="list-unstyled">
							<li class="divider"></li>
							<li>
								<a style="color: black" role="menuitem" tabindex="-1" href="{{ route('login.destroy') }}"><i class="fa fa-power-off"></i> Logout</a>
							</li>
						</ul>
					</div>
				</div>
				@endif
			</div>
		</header>
		<div class="head2"></div>
		<!-- start: page -->
		<div class="container"  style="padding-top:20px;width: 98%">
			@yield('content')	
		</div>
	</section>
	<!-- Vendor -->
	<script src="{{ asset('assets/vendor/jquery/jquery.js') }}"></script>
	<script src="{{ asset('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.js') }}"></script>
	<script src="{{ asset('assets/vendor/nanoscroller/nanoscroller.js') }}"></script>
	<script src="{{ asset('assets/vendor/select2/js/select2.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap-timepicker/bootstrap-timepicker.js') }}"></script>
	<script src="{{ asset('assets/vendor/jquery-datatables/media/js/jquery.dataTables.js') }}"></script>
	<script src="{{ asset('assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/jquery-datatables-bs3/assets/js/datatables.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/fuelux/js/spinner.j') }}s"></script>
	<script src="{{ asset('js/dropzone.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap-markdown/js/markdown.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap-markdown/js/to-markdown.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap-markdown/js/bootstrap-markdown.js') }}"></script>
	<script src="{{ asset('assets/vendor/codemirror/lib/codemirror.js') }}"></script>
	<script src="{{ asset('assets/vendor/codemirror/addon/selection/active-line.js') }}"></script>
	<script src="{{ asset('assets/vendor/codemirror/addon/edit/matchbrackets.js') }}"></script>
	<script src="{{ asset('assets/vendor/codemirror/mode/javascript/javascript.js') }}"></script>
	<script src="{{ asset('assets/vendor/codemirror/mode/xml/xml.js') }}"></script>
	<script src="{{ asset('assets/vendor/codemirror/mode/htmlmixed/htmlmixed.js') }}"></script>
	<script src="{{ asset('assets/vendor/codemirror/mode/css/css.js') }}"></script>
	<script src="{{ asset('assets/javascripts/theme.js') }}"></script>
	<script src="{{ asset('assets/javascripts/theme.custom.js') }}"></script>
	<script src="{{ asset('assets/javascripts/theme.init.js') }}"></script>
	<script src="{{ asset('assets/javascripts/tables/examples.datatables.default.js') }}"></script>
	<script type="text/javascript">
		
		Dropzone.options.fup = {
		  paramName: "file", // The name that will be used to transfer the file
		  maxFilesize: 2,
		  addRemoveLinks: true, // MB
		  accept: function(file, done) {
		  	var nama = $("#nama").val();
		  	if (nama == "") {
		  		done("Diisi dulu");
		  	}
		  	else { done(); }
		  },

		  init: function () {
		  	this.on("removedfile", function (file) {
		  		$.post({
		  			method: 'GET',
		  			url: '/uploaddelete/'+file.name,
		  			success: function (data) {
		  
		  			}
		  		});
		  	});
		  },
		};


		$('#fip').hide();
		$('input[type=radio][name=source]').change(function() {
			if (this.value == 'Upload') {
				$('#fup').addClass("dropzone");
				$('#fip').hide();
			}
			else if (this.value == 'Form') {
				$('#fup').removeClass("dropzone");
				$('#fip').show();
			}
		});
		
		var sdm = $('#sdm').html();
		var informasi = $('#informasi').html();
		var fisik = $('#fisik').html();
		var software = $('#software').html();
		var layanan = $('#layanan').html();
		var intagibel = $('#intagibel').html();

		var tsdm = $('#tblSdm').html();
		var tinformasi = $('#tblInformasi').html();
		var tfisik = $('#tblFisik').html();
		var tsoftware = $('#tblSoftware').html();
		var tlayanan = $('#tblLayanan').html();
		var tintagibel = $('#tblIntagibel').html();

		$('#informasi').show();
		$('#sdm').remove();
		$('#fisik').remove();
		$('#software').remove();
		$('#layanan').remove();
		$('#intagibel').remove();

		$('#tblInformasi').show();
		$('#tblSdm').remove();
		$('#tblFisik').remove();
		$('#tblSoftware').remove();
		$('#tblLayanan').remove();
		$('#tblIntagibel').remove();

		$('#klasifikasi').change(function() {
			if (this.value == '1') {
				$('#form').html(informasi);
				$('#tblForm').html(tinformasi);
			}
			else if (this.value == '2') {
				$('#form').html(sdm);
				$('#tblForm').html(tsdm);
				$('#informasi').remove();
				$('#tblInformasi').remove();
			}
			else if (this.value == '3') {
				$('#form').html(fisik);
				$('#tblForm').html(tfisik);
				$('#informasi').remove();
				$('#tblInformasi').remove();
			}
			else if (this.value == '4') {
				$('#tblForm').html(tsoftware);
				$('#form').html(software);
				$('#informasi').remove();
				$('#tblInformasi').remove();
			}
			else if (this.value == '5') {
				$('#form').html(layanan);
				$('#tblForm').html(tlayanan);
				$('#informasi').remove();
				$('#tblInformasi').remove();
			}
			else if (this.value == '6') {
				$('#form').html(intagibel);
				$('#tblForm').html(tintagibel);
				$('#informasi').remove();
				$('#tblInformasi').remove();
			}
		});

	</script>
</body>
</html>