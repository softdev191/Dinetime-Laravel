@extends('layouts/main')
@section('pageSpecificCss')
<link type="text/css" rel="stylesheet" href="{{asset('plugins/bower_components/datatables/jquery.dataTables.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('plugins/bower_components/datatables/buttons.dataTables.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('plugins/bower_components/custom-select/custom-select.min.css')}}" />
<style>
.color-dce2ec {
	color: #dce2ec !important;
}
.screenshot{
     cursor: pointer;
     border-radius: 20px;
     border: 1px solid #3ac28e;
     overflow: hidden;
     width: 120px;
     height: 120px;
     position: relative;
     display: -webkit-inline-box;
     z-index: 10;
 }
 .image-remove{
     /* content: "\e646"; */
     cursor: pointer;
     position: absolute;
     background-color: black;
     z-index: 999;
     top: 0px;
     border-radius: 50%;
     color: #fff;
     border: 1px solid;
     font-size: 9px;
     padding: 5px;
 }

 .image-remove:hover {
     -ms-transform: scale(1.2); /* IE 9 */
     -webkit-transform: scale(1.2); /* Safari 3-8 */
     transform: scale(1.2);
 }
</style>
@stop
@section('content')

<!-- Page Content -->
<div class="container-fluid">
	<input type="hidden" id="formatedDate" name="formatedDate" value="{{ date('Y_m_d') }}">
	<div class="row bg-title">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			<h4 class="page-title color-dce2ec">Add Venue</h4>
		</div>
	</div>
	<!--/row -->
	<div class="row">
		<div class="col-md-12">
			<div class="white-box">
				<!--header-->
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-4 m-b-15">
						<a class="btn btn-default btn-circle" href="{{route('pendingvenues')}}" title="Previous"><i class="ti-arrow-left"></i> </a>
					</div>
				</div>
				<!--/header-->
				<div class="form-body form-material">
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade active in" id="accountTab">
							<form id="formAddVenue" method="post">
								{{ csrf_field() }}
								<input type="hidden" name="hiddenVenueId" id="hiddenVenueId" value="@if(isset($venueDetail->venue_id)){{$venueDetail->venue_id}}@endif">
								<input type="hidden" id="hiddenVenueImage" name="hiddenVenueImage" value="{{isset($venueDetail->venue_image_url)? $venueDetail->venue_image_url : ''}}">
								<input type="hidden" id="hiddenThumbnail" name="hiddenThumbnail" value="{{isset($venueDetail->venue_thumb_image_url)? $venueDetail->venue_thumb_image_url:''}}">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label color-dce2ec"><b>VENUE NAME *</b></label>
											<input style="text-transform:uppercase;" type="text" name="venueName" id="venueName" value="@if(isset($venueDetail->venue_name)) {{$venueDetail->venue_name}} @endif" class="form-control" placeholder="VENUE NAME">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label color-dce2ec"><b>SUBURB *</b></label>
											<input style="text-transform:uppercase;" type="text" name="suburb" id="suburb" value="@if(isset($venueDetail->suburb)) {{$venueDetail->suburb}} @endif" class="form-control" placeholder="SUBURB">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label color-dce2ec"><b>ADDRESS *</b></label>
											<input type="text" name="venueAddress" id="venueAddress" value="@if(isset($venueDetail->venue_address)) {{$venueDetail->venue_address}} @endif" class="form-control"  placeholder="ADDRESS">
											<input type="hidden" name="latitude" id="latitude">
											<input type="hidden" name="longitude" id="longitude">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label color-dce2ec"><b>RESTAURANT AND STYLE TYPE *</b></label>
											<input type="text" name="restaurantType" id="restaurantType" value="@if(isset($venueDetail->restaurant_type)) {{$venueDetail->restaurant_type}} @endif" class="form-control" placeholder="RESTAURANT TYPE">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label color-dce2ec"><b>DRESS CODE *</b></label>
											<input style="text-transform: uppercase;" type="text" name="dressCode" id="dressCode" value="@if(isset($venueDetail->dress_code)) {{$venueDetail->dress_code}} @endif" class="form-control"  placeholder="DRESS CODE">
										</div>
									</div>
									@if(Session::get('login_type_id') == 1)
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label color-dce2ec"><b>VENUE OWNER *</b></label><br>
											<select class="form-control select2" name="venueOwner" id="venueOwner" placeholder="Select your venue owner">
												<option value="">-- Select Venue Owner  --</option>
												@foreach($venueOwnerData as $venueOwner)
												<option value="{{ $venueOwner->id }}" @if(isset($venueDetail->venue_owner_id) && $venueOwner->id == $venueDetail->venue_owner_id) {{'selected'}} @endif> {{ $venueOwner->first_name.' '.$venueOwner->last_name }}</option>
												@endforeach
											</select>
										</div>
									</div>
									@endif
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label color-dce2ec"><b>DINE IN *</b></label>
											<input style="text-transform: uppercase;" type="text" name="dineIn" id="dineIn" value="@if(isset($venueDetail->dine_in)) {{$venueDetail->dine_in}} @endif" class="form-control"  placeholder="DINE IN">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label color-dce2ec"><b>PARKING *</b></label>
											<input type="text" name="venueParking" id="venueParking" value="@if(isset($venueDetail->parking)) {{$venueDetail->parking}} @endif" class="form-control"  placeholder="PARKING">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-12 col-sm-12 col-xs-12">
										<label class="control-label color-dce2ec"><b>DESCRIPTION *</b></label>
										<textarea id="venueDescription" style="resize: none;" class="form-control custom-field-validate" rows="5" data-minwords="3" name="venueDescription" placeholder="Explain to the best of your ability what happened.">{{isset($venueDetail->venue_description)? $venueDetail->venue_description : ''}}</textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 form-group">
										<label class="control-label color-dce2ec"><b>VENUE IMAGE</b></label>
										<input type="file" id="venueImage" name="venueImage"accept=".jpg,.jpeg,.png" class="form-control" />
										<br/>
										<div class="card" style="min-height:132px">
											<div class="row m-t-5 m-b-5 m-l-5 m-r-5" id="image_preview"></div>
										</div>
									</div>
								</div>
								<div class="form-group text-left p-t-md">
									@if(!isset($venueDetail->venue_id))
										<button type="submit" class="btn btn-success">Add</button>
									@endif
									@if(isset($venueDetail->venue_id))
										<button type="submit" class="btn btn-success">UPDATE</button>
									@endif
									&nbsp;&nbsp;
									<a id="resetPermission" href="" class="btn btn-danger text-white">CANCEL</a>
								</div>
							</form>
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
<script type="text/javascript" src="{{asset('plugins/bower_components/datatables/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/bower_components/datatables/dataTables.buttons.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/bower_components/datatables/buttons.flash.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/bower_components/datatables/jszip.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/bower_components/datatables/pdfmake.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/bower_components/datatables/vfs_fonts.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/bower_components/datatables/buttons.html5.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/bower_components/datatables/buttons.print.min.js')}}"></script>
<script src="{{ asset('scripts/jquery.maskedinput.min.js') }}"></script>
<script src="{{ asset('scripts/venue-location.js') }}"></script>
<script type="text/javascript" src="{{asset('plugins/bower_components/custom-select/custom-select.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/moment.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function() {
		var date = $('#formatedDate').val();

		/* For select 2*/
		$(".select2").select2();

		/* Screen shots */
		$('#image_preview').html("");
		var hidden_image=$("#hiddenVenueImage").val();
		var hidden_thumbnail=$("#hiddenThumbnail").val();
		if(hidden_image != "")
		{
			var imageArray = hidden_image.split(",");
			var thumbImageArray = hidden_thumbnail.split(",");
			for(var i=0;i<imageArray.length;i++)
			{
				$('#image_preview').append('<div id="imageRemove_'+i+'" class="col-md-2 col-xs-2 col-sm-2"><i class="image-remove ti-close" onclick="removeScreenshot(\''+i+'\',\''+imageArray[i]+'\',\''+thumbImageArray[i]+'\');"></i><a class="image-popup-vertical-fit" href="'+imageArray[i]+'"><img class="screenshot m-t-5 m-r-5 m-b-5 m-l-5" src="'+thumbImageArray[i]+'" alt="No Preview"></a></div>');
			}
		}
		$('.image-popup-vertical-fit').magnificPopup({
			type: 'image',
			closeOnContentClick: true,
			mainClass: 'mfp-with-zoom',
			image: {
				verticalFit: true
			},
			zoom: {
				enabled: true,
				duration: 300,
				easing: 'ease-in-out',
				opener: function(openerElement) {
					return openerElement.is('img') ? openerElement : openerElement.find('img');
				}
			}
		});
		$('.custom-btn-validate').attr('disabled', true);
	});

	/* Screenshots */
	$("#venueImage").change(function(){
		$('#image_preview').html("");
		var total_file=$("#venueImage").get(0).files.length
		for(var i=0;i<total_file;i++)
		{
			var file_name=$("#venueImage").get(0).files[i].name;
			var extension = file_name.split('.').pop().toLowerCase();
    		if(extension == 'jpg' || extension == 'jpeg' || extension == 'png') {
              var upload_img = '<img class="screenshot m-t-5 m-r-5 m-b-5 m-l-5" src="'+URL.createObjectURL(event.target.files[i])+'" alt="No Preview">';
            }else {
              var upload_img = '<i class="screenshot p-t-6 p-l-14 m-t-5 m-r-5 m-b-5 m-l-5 fa fa-file" style="font-size:107px"></i>';
            }
			$('#image_preview').append('<div id="imageRemove_'+i+'" class="col-md-2">'+upload_img+'</div>');
		}
  	});

	$('#venueName').keyup(function() {
		this.value = this.value.toUpperCase();
	});
	$('#suburb').keyup(function() {
		this.value = this.value.toUpperCase();
	});
	$('#dressCode').keyup(function() {
		this.value = this.value.toUpperCase();
	});

	$('#formAddVenue').on('success.form.bv', function(e) {
		e.preventDefault();
		$('#loader').show();
		var formData = new FormData(this);
		$.ajax({
			url:'{{ route("storevenue")}}',
			data:formData,
			type:'post',
			cache: false,
			contentType: false,
			processData: false,
			success: function(data)
			{
				if(data == 1)
				{
					location.href = '{{route("venue")}}';
				}
				if(data == 2)
				{
					$('#loader').hide();
					notify('Venue detail has been updated successfully.','blackgloss');
				}
			}
		});
	});

	function removeScreenshot(image_id,image_link,image_thumb_link)
	{
		var venue_id = $('#hiddenVenueId').val();
		$('#imageRemove_'+image_id).remove();
		$.ajax({
			url:'{{ route('removescreenshot') }}',
			data:{
				venue_id:venue_id,
				image_id:image_id,
				image_link:image_link,
				image_thumb_link:image_thumb_link,
			},
			type:'post',
			dataType:'json',
			success: function(data)
			{
				if(data == 1)
				{
					$('#loader').hide();
					notify('Screenshot has been removed successfully.','blackgloss');
				}
			}
		});
	}

</script>
@stop