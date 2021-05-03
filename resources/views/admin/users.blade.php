@extends('layouts/main')
@section('pageSpecificCss')
<link type="text/css" rel="stylesheet" href="{{asset('plugins/bower_components/datatables/jquery.dataTables.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('plugins/bower_components/datatables/buttons.dataTables.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/franchisee.css')}}" />
<style>
tr.even{
	background-color: #191B1D !important;
}
tr th{
  padding-left: 10px !important;
  color: #dce2ec !important;
}
tr td{
  color: #dce2ec !important;
}
.color-dce2ec {
	color: #dce2ec !important;
}
</style>
@stop
@section('content')
<!-- Page Content -->
<div class="container-fluid bg-010101">
	<input type="hidden" id="formatedDate" name="formatedDate" value="{{ date('Y_m_d') }}">
	<div class="row bg-title">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			<h4 class="page-title color-dce2ec"> Users</h4>
		</div>
	</div>
	<!--/row -->
	<div class="row">
		<div class="col-md-12 col-lg-12 col-xs-12">
			<div class="white-box">
				<h3 class="box-title m-b-15 pull-left">All Users</h3>
				<div class="table-responsive">
					<table id="userList" class="display nowrap" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th class="text-center">Actions</th>
								<th class="text-center">Photo</th>
								<th>Name</th>
								<th>Email Address</th>
								<th>Phone Number</th>
								<th>Created Date</th>
							</tr>
						</thead>
						<tbody>
							@foreach($userDetails as $value)
							<tr>
								<td class="text-center">
									<a class="btn btn-danger btn-circle" onclick="return confirm(' Are you sure you want to delete this User?');" href="{{ route('removeuser',['user_id' => $value->id]) }}" data-toggle="tooltip" data-placement="top" title="Remove">
                                        <i class="ti-trash"></i>
									</a>
								</td>
								<td>
								@if(!empty($value->photo))
									<div><img class="d-block" src="{{url($value->photo)}}" width="85" height="85" alt="First slide"></div></td>
								@else
									<div><img class="d-block" src="{{ asset('plugins/images/dinetime/logo.png') }}" width="85" height="85" alt="First slide"></div></td>
								@endif
								</td>
								<td>{{ strtoupper($value->first_name.' '.$value->last_name)}}</td>
								<td>{{$value->email}}</td>
								<td>{{substr_replace(substr_replace(substr_replace($value->phone_number, '(', 0,0), ') ', 4,0), ' - ', 9,0) }}</td>
								<td class="userCreateDate" datetime="{{ $value->created_at }}">{{ date('m-d-Y',strtotime($value->created_at))}}</td>
							</tr>
							@endforeach	
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
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
<script type="text/javascript">
    $(document).ready(function() {
		var date = $('#formatedDate').val();
        var value = 'DIneTime_User' + date;
		/*Franchise*/
		$('#userList').DataTable({
			dom: 'Bfrtip',
			buttons: [
				{
					extend:'excel',
					title: value,
					exportOptions: {columns: [ 2,3,4,5 ]},
				},
				{
					extend:'csv',
					title: value,
					exportOptions: {columns: [ 2,3,4,5 ]},
				},
				{
					extend:'pdf',
					title: value,
					exportOptions: {columns: [ 2,3,4,5 ]},
				},
				{
					extend:'print',
					title: value,
					exportOptions: {columns: [ 2,3,4,5 ]},
				},
			],
		});

		$('.userCreateDate').each(function(i, e) {
			var time = $(this).attr('datetime');
			time = moment.parseZone(time).local().format('MM-DD-YYYY');
			$(e).html(time);
		});
	});
</script>
@stop