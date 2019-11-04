@extends('layouts.app')
@section('content')
<div class="alert alert-primary" style="margin-top: 0px">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<strong>Selamat Datang, </strong> Dashboard - SIM Dokumen Standart LKPP. <a href="" class="alert-link">Halo, {{ session('name') }}</a>
</div>

<div class="row">
	@foreach($data as $d)
	<div class="col-md-12 col-lg-4 col-xl-4">
		<section class="panel panel-featured-left panel-featured-primary">
			<div class="panel-body">
				<div class="widget-summary">
					<div class="widget-summary-col widget-summary-col-icon">
						<div class="summary-icon bg-primary">
							<i class="fa fa-file"></i>
						</div>
					</div>
					
					<div class="widget-summary-col">
						<div class="summary">
							<h4 class="title">{{ $d->standartid }}</h4>
							<div class="info">
								<strong style="font-size: 20px" class="amount">Dokumen: {{ $d->jml }}</strong>
							</div>
						</div>
						<div class="summary-footer">
							<a class="text-muted text-uppercase" href="{{ url('detail/'.$d->standartid) }}">(view all)</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	@endforeach
</div>
@endsection