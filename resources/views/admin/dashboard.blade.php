@extends('layouts/main')
@section('pageSpecificCss')
<link type="text/css" rel="stylesheet" href="{{asset('plugins/bower_components/datatables/jquery.dataTables.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('plugins/bower_components/datatables/buttons.dataTables.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/dashboard.css')}}" />
<style>
	.color-dce2ec{
		color: #dce2ec !important;
	}
	.text-30{
		font-size: 30px !important;
	}
</style>
@stop
@section('content')
<!-- Page Content -->
<div class="container-fluid">
	<input type="hidden" id="formatedDate" name="formatedDate" value="{{ date('Y_m_d') }}">
	<div class="row bg-title">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			<h4 class="page-title color-dce2ec">Dashboard</h4>
		</div>
	</div>
	<!--/row -->
	<div class="row">
		<div class="col-md-12 col-lg-12 col-sm-12">
			<div class="white-box">
				<div class="row row-in">
					<div class="col-lg-3 col-sm-6 row-in-br">
						<div class="col-in row cursor-pointer">
							<a href="#">
								<div class="col-md-6 col-sm-6 col-xs-6"> <i class="ti-map-alt color-dce2ec  order-icon-color"></i>
								<h5 class="vb color-dce2ec">Published Venues</h5>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6">
								<h4 class="counter text-right m-t-15 text-warning text-30">{{ $dashboardData['publishedVenue']}}</h4>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="progress">
										<div class="progress-bar progress-bar-warning " role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 row-in-br  b-r-none">
						<div class="col-in row cursor-pointer">
							<a href="#">
								<div class="col-md-6 col-sm-6 col-xs-6"> <i class="ti-layers order-icon-color color-dce2ec"></i>
									<h5 class="color-dce2ecvb">Pending Venues</h5>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6">
									<h4 class="counter text-right m-t-15 text-info text-30">{{ $dashboardData['pendingVenue']}}</h4>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="progress">
										<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 row-in-br  b-r-none">
						<div class="col-in row cursor-pointer">
							<a href="#">
								<div class="col-md-6 col-sm-6 col-xs-6"> <i class="ti-notepad order-icon-color color-dce2ec"></i>
									<h5 class="color-dce2ec vb">Deals</h5>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6">
									<h4 class="counter text-right m-t-15 text-primary text-30">{{$dashboardData['deals']}}</h4>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="progress">
										<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 row-in-br">
						<div class="col-in row cursor-pointer">
							<a href="">
								<div class="col-md-6 col-sm-6 col-xs-6"> <i class="ti-crown color-dce2ec order-icon-color"></i>
									<h5 class="color-dce2ec vb">Reservations</h5>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6">
									<h4 class="counter text-right m-t-15 text-success text-30">{{ $dashboardData['reservations']}}</h4>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="progress">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6  b-0">
						<div class="col-in row cursor-pointer">
							<a href="">
								<div class="col-md-8 col-sm-6 col-xs-6"> <i class="icon-people fa-fw color-dce2ec order-icon-color"></i>
									<h5 class="color-dce2ec vb">Customers</h5>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-6">
									<h4 class="counter text-right m-t-15 text-danger text-30">{{ $dashboardData['customers']}}</h4>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="progress">
										<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- row -->
</div>
@stop
@section('pageSpecificJs')
<!-- Sparkline chart JavaScript -->
<script src="{{asset('plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<!--Counter js -->
<script src="{{asset('plugins/bower_components/waypoints/lib/jquery.waypoints.js')}}"></script>
<script src="{{asset('plugins/bower_components/counterup/jquery.counterup.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function() {
		// This is for Counter
		$(".counter").counterUp({
			delay: 100,
			time: 1200
		});
	});
</script>
@stop