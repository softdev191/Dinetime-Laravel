@extends('layouts/main')
@section('pageSpecificCss')
<link type="text/css" rel="stylesheet" href="{{asset('plugins/bower_components/custom-select/custom-select.min.css')}}" />
<style>
	.bg-494E5F {
		background: #494E5F !important;
	}
	.customtab.nav-tabs .nav-link{
		border-bottom: none !important;
	}
	.customtab.nav-tabs .nav-link.active{
		border-bottom: 2px solid #ff6849 !important;
    	color: #ff6849;
	}
	.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
		background-color: #010101 !important;
	}
	.nav-tabs>li>a{
		color: #fff !important;
	}
	.customtab.nav-tabs .nav-link.active, .customtab.nav-tabs .nav-link.active:focus, .customtab.nav-tabs .nav-link:hover{
		color: #ff6849 !important;
	}
</style>
@stop
@section('content')

<!-- Page Content -->
<div class="container-fluid">
	<input type="hidden" id="formatedDate" name="formatedDate" value="{{ date('Y_m_d') }}">
	<div class="row bg-title">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			<h4 class="page-title color-fff">Profile</h4>
		</div>
	</div>
	<!--/row -->
	<div class="row">
		<div class="col-md-4 col-xs-12">
			<div class="white-box">
				<div class="user-bg">
					<div class="overlay-box bg-353c48">
						<div class="user-content">
							<a href="javascript:void(0)"><img src="{{asset('plugins/images/dinetime/logo.png')}}" class="thumb-lg img-circle" alt="img"></a>
							<h4 class="text-white color-fff" id="accountUserName">{{$userDetail->first_name.' '.$userDetail->last_name}} </h4>
							<h5 class="text-white" id="accountUserEmail">{{$userDetail->email}}</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-8 col-xs-12">
			<div class="white-box">
				<ul class="nav customtab nav-tabs" role="tablist">
					<li role="presentation" class="nav-item"><a href="#home" class="nav-link active" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true"><span class="visible-xs"><i class="fa fa-home"></i></span><span class="hidden-xs"> MY PROFILE</span></a></li>
					<li role="presentation" class="nav-item"><a href="#setting" class="nav-link" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-user"></i></span> <span class="hidden-xs">ACCOUNT SETTING</span></a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="home">
						<form id="formUpdateProfile" class="form-material" method="post">
							{{ csrf_field() }}
							<input type="hidden" name="hiddenUserId" id="hiddenUserId" value="{{$userDetail->id}}">
							<input type="hidden" name="hiddenEmail" id="hiddenEmail" value="{{$userDetail->email}}">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label color-fff"><b>FIRST NAME *</b></label>
										<input style="text-transform:uppercase;" type="text" name="firstName" id="firstName" value="{{$userDetail->first_name}}" class="form-control" placeholder="FIRST NAME">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label color-fff"><b>LAST NAME *</b></label>
										<input style="text-transform: uppercase;" type="text" name="lastName" id="lastName" value="{{$userDetail->last_name}}" class="form-control"  placeholder="LAST NAME">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label color-fff"><b>EMAIL ADDRESS *</b></label>
										<input style="text-transform: lowercase;" type="email" name="emailaddress" id="emailaddress" value="{{$userDetail->email}}" class="form-control"  placeholder="Enter email">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label color-fff"><b>PHONE NUMBER *</b></label>
										<input type="text" placeholder="(xxx) xxx-xxxx" name="phoneNo" id="phoneNo" value="{{$userDetail->phone_number}}" class="form-control">
									</div>
								</div>
							</div>
							<div class="form-group text-left p-t-md">
								<button type="buttomn" class="btn btn-info">UPDATE</button>
								&nbsp;&nbsp;
								<button id="resetPermission" type="button" class="btn btn-danger">CANCEL</button>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="setting">
						<form id="formAccountSetting" class="form-material" method="post">
							{{ csrf_field() }}
							<input type="hidden" name="hiddenId" id="hiddenId" value="{{$userDetail->id}}">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label color-fff"><b>CHANGE PASSWORD *</b></label>
										<input type="password" name="currentPassword" id="currentPassword" class="form-control" placeholder="CURRENT PASSWORD">
										<input type="password" name="newPassword" id="newPassword" class="form-control" placeholder="NEW PASSWORD">
										<input type="password" name="retypePassword" id="retypePassword" class="form-control" placeholder="RETYPE PASSWORD">
									</div>
								</div>
							</div>
							<div class="form-group text-left p-t-md">
								<button type="submit" class="btn btn-info">UPDATE</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- row -->
</div>
@stop
@section('pageSpecificJs')
<script src="{{ asset('scripts/jquery.maskedinput.min.js') }}"></script>
<script type="text/javascript" src="{{asset('plugins/bower_components/custom-select/custom-select.min.js')}}"></script>
<script type="text/javascript">

	$("#formAccountSetting").on('success.form.bv',function(e){
		e.preventDefault();
		$("#loader").show();
		var current_password = $("#currentPassword").val();
		var new_password = $('#newPassword').val();
		var retype_password = $('#retypePassword').val();
		var hidden_Id = $('#hiddenId').val();
		if(new_password != retype_password) {
			$("#loader").hide();
			notify('New password and  Retype password is not match. Please try again.','blackgloss');
			return;
		}
		$.ajax({
			url:'{{route("changepassword")}}',
			data:{
				current_password:current_password,
				new_password:new_password,
				hidden_Id:hidden_Id,
			},
			type:'post',
			success: function(data)
			{
				if(data == 1)
				{
					$('#loader').hide();
					notify('Your password has been reset.','blackgloss');
				}
				else if(data == 2)
				{
					$('#loader').hide();
					notify('Current password is invalid. Please try again.','blackgloss');
				}
			}
		});
	});

	$('#formUpdateProfile').on('success.form.bv', function(e) {
		e.preventDefault();
		var formData = $(this).serialize();
		$('#loader').show();
		$.ajax({
			url:'{{ route("storeprofile") }}',
			data:formData,
			type:'post',
			dataType:'json',
			success: function(data)
			{
				$('#loader').hide();
				if(data.key == 1)
				{
					$("#sessionName").html(data.name);
					$("#accountUserName").html(data.name);
					$("#accountUserEmail").html(data.email);
					notify('Account detail has been updated successfully.','blackgloss');
				}
				else if(data.key == 2)
				{
					notify('Entered email address already exists.','blackgloss');
				}
			}
		});
	});

	$('#firstName').keyup(function() {
		this.value = this.value.toUpperCase();
	});

	$('#lastName').keyup(function() {
		this.value = this.value.toUpperCase();
	});

	$('#emailaddress').keyup(function() {
		this.value = this.value.toLowerCase();
	});

	$("#phoneNo").mask("(999) 999 - 9999");
</script>
@stop