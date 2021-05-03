@extends('layouts/main')
@section('pageSpecificCss')
<link type="text/css" rel="stylesheet" href="{{asset('plugins/bower_components/datatables/jquery.dataTables.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('plugins/bower_components/datatables/buttons.dataTables.min.css')}}" />
<style>
	.venue_img{
		width: 100%;
		height: 300px;
	}
	.m-ll-25 {
		margin-left:-25px !important;
	}
	.m-rr-25 {
		margin-right:-25px !important;
	}
	.QW9338a-APoWav3K944Aw {
    margin: 0 0 4px;
    display: flex;
    align-items: center;
}
._25xMNiLip-SZ1zuCkSA7ge {
    display: flex;
    align-items: center;
}
._2IMP-CK1uNe12eCxaNLqbL {
    display: flex;
    margin-right: 8px;
    align-items: center;
    flex-shrink: 0;
}
._2UvC6jGDOaDUaN4lDzrERj {
    width: 2rem;
    height: 2rem;
    margin-right: 4px;
}
._2UvC6jGDOaDUaN4lDzrERj>i {
    display: block;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    width: 100%;
    height: 100%;
    color: #da3743;
}
._1J28HXkF9OXU_OaZfUmxou {
    background-image: url(../../../plugins/images/dinetime/star.png);
}
._1h89tIvK1Zm7zGJiJKLt-G {
    background-image: url(../../../plugins/images/dinetime/halfstar.png);
}
</style>
@stop
@section('content')
<!-- Page Content -->
<div class="container-fluid bg-010101">
	<input type="hidden" id="formatedDate" name="formatedDate" value="{{ date('Y_m_d') }}">
	<div class="row bg-title m-b-0">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			<h4 class="page-title color-dce2ec"> Venue Detail</h4>
		</div>
	</div>
	<!--/row -->
	<div class="row m-ll-25 m-rr-25">
		<div role="listbox" class="carousel-inner">
			<div class="item active"> <img class="venue_img" src="{{ url($venueData->venue_thumb_image_url)}}" alt="First slide image"> </div>
		</div>
	</div>
	<!-- .row -->
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="white-box">
				<!-- <div>
					<div role="listbox" class="carousel-inner">
						<div class="item active"> <img class="venue_img" src="{{ asset('plugins/images/property/prop6.jpg')}}" alt="First slide image"> </div>
					</div>
				</div> -->
				<h4 class="p-t-20 fw-500">{{ $venueData->venue_name}}</h4>
				<h5><span class="text-muted">{{ $venueData->suburb}}</span></h5>
				<div class="QW9338a-APoWav3K944Aw">
				@if(!empty($venueData->review))
				<div class="_25xMNiLip-SZ1zuCkSA7ge">
					<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="">
						@for($i=1;$i<=$venueData->review; $i++)
						<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
						@endfor
						@if(strpos($venueData->review, "." ) !== false)
						<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
						@endif
					</div>
				</div>
				@endif
				<span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">@if(!empty($venueData->total_review))  ({{$venueData->total_review}} reviews) @else (0 review) @endif</span>
				</div>
				<h5><span class="text-muted">{{ $venueData->venue_address}}</span></h5>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="white-box">
						<h5 class="box-title fw-500">Full Menu</h5>
						<hr class="m-0">
						<!-- <ul class="pro-amenities text-dark m-b-0">
							<li> <span><i class="fa fa-check-circle text-success" aria-hidden="true"></i></span> <span>Private Space</span></li>
						</ul> -->
					</div>
				</div>
				<div class="col-sm-6">
					<div class="white-box">
						<h5 class="box-title fw-500">Reviews</h5>
						<hr class="m-0">
						<!-- <ul class="pro-amenities text-dark m-b-0">
							<li> <span><i class="fa fa-check-circle text-success" aria-hidden="true"></i></span> <span>Private Space</span></li>
						</ul> -->
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="white-box">
						<ul class="pro-amenities text-dark m-b-0">
							<li> <span><i class="fa fa-check-circle text-success" aria-hidden="true"></i></span> <span>{{$venueData->dress_code}}</span></li>
							<li> <span><i class="fa fa-check-circle text-success" aria-hidden="true"></i></span> <span>{{$venueData->parking}}</span></li>
							<li> <span><i class="fa fa-check-circle text-success" aria-hidden="true"></i></span> <span>{{$venueData->venue_description}}</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- .row -->
	<!-- row -->
</div>
@stop
@section('pageSpecificJs')
<script type="text/javascript" src="{{asset('plugins/bower_components/datatables/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/bower_components/datatables/dataTables.buttons.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/bower_components/datatables/buttons.flash.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/bower_components/datatables/jszip.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/bower_components/datatables/pdfmake.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/bower_components/datatables/vfs_fonts.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/bower_components/datatables/buttons.html5.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/bower_components/datatables/buttons.print.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/moment.min.js')}}"></script>
@stop