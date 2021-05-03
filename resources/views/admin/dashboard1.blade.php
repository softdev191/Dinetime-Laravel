@extends('layouts/main')
@section('pageSpecificCss')
<link type="text/css" rel="stylesheet" href="{{asset('plugins/bower_components/datatables/jquery.dataTables.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('plugins/bower_components/datatables/buttons.dataTables.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('plugins/bower_components/custom-select/custom-select.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('plugins/bower_components/bootstrap-select/bootstrap-select.min.css')}}" />
<link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/dashboard.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/pages/home.css')}}">
@stop
@section('content')
<!-- Page Content -->
<!-- <div class="container-fluid"> -->
<div class="">
	<input type="hidden" id="formatedDate" name="formatedDate" value="{{ date('Y_m_d') }}">
	<!--/row -->
	<div class="">
		<div class="">
			<!-- <div class="col-sm-12">
				<a href="{{route('addvenue')}}" class="btn btn-info btn-rounded waves-effect waves-light pull-right m-r-15 m-t-15"><span>Add Venue</span> <i class="fa fa-plus m-l-5"></i></a>
			</div> -->
			<div class="panel panel-info m-b-0">
				<div class="panel-wrapper collapse in" aria-expanded="true">
					<div class="panel-body dashboard-job-list">
						<div id="wrapper">
							<div>
								<style>
									.icon-font {
										font-family: icons;
										speak: none;
										font-style: normal;
										font-weight: 400;
										font-variant: normal;
										text-transform: none;
										line-height: 1;
										-webkit-font-smoothing: antialiased;
										-moz-osx-font-smoothing: grayscale
									}
									
									@keyframes fadeInFromNone {
										0% {
											opacity: 0;
											right: -1.5rem
										}

										100% {
											opacity: 1;
											right: 0
										}
									}

									.m-t-12 {
										margin-top: 12px !important;
									}
								</style>
							</div>
							<div id="content">
								<div class="_3F8bSNGMm2sxeO0F795zb3">
									<div class="fc24NcR5xqxzCd5qKvTpr">
										<section class="_4PSXZFFIMzJAr1q-jHdKP">
											<div data-test="main-content" class="_2kFSbhJIDKoJWNSyQy-j4V">
												<section class="kZZ3bj8aJjuOzeutRXPx4">
													<header class="_3GnKshkGY3N-io370SlmQG">
														<div class="_2FKTwcKCW4HVLmdXxTks2B">
															<h2 class="GNFFL7LprF92LaFrbMhZo _28BPGuc6h85O-34CMLmLZH">Popular Near You</h2>
														</div>
													</header>
													<div class="_3Og5lQcbeM64jPtLcNfgm2">
														<div class="_23Jvz_tSK2Ka8Z0rGuO6al">
															<ul class="_1BHbiCBVsK6IRVeXfwnVPQ">
																@foreach($venueDetails as $vanue)
																<li class="_3x_WHYdFEVH49S9EezWxHm _3QgH7SeBnEz7HBmivtwX19 impression-tracked"><a href="#" target="_blank" rel="noopener noreferrer" class="_1ozgPFOzhQhRC0HPUmgKlp">
																		<div class="_2l69Ky2K7XCfLJSd5-EHK _3Ha4YEwF4qWJ-80ufIOUfz">
																		@if(!empty($vanue->venue_image_url))
																			<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url({{$vanue->venue_image_url}})"></div>
																		@else
																			<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url('plugins/images/dinetime/logo.png')"></div>
																		@endif
																			<div class="_3Ff_-vwjff6aEARttMhuUB _1So4oyClZYPFQKuiqAQvqO">
																				<h3 class="_19Z-zMmJ8k0VlTxMrRH5e7 _12PdXDtY0HRmiCmq9eSwcG">{{$vanue->venue_name}}</h3>
																				<div class="QW9338a-APoWav3K944Aw">
																					<div class="_25xMNiLip-SZ1zuCkSA7ge">
																						<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="4.3 stars">
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																						</div>
																						<div class="_2s6ofZ_eiTKuvNHV3mVnaG">4.3</div>
																					</div><span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">17 reviews</span>
																				</div>
																				<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">{{$vanue->suburb}}</span></div>
																			</div>
																		</div>
																	</a>
																</li>
																@endforeach
																<li class="_3x_WHYdFEVH49S9EezWxHm _3QgH7SeBnEz7HBmivtwX19 impression-tracked"><a href="#" target="_blank" rel="noopener noreferrer" class="_1ozgPFOzhQhRC0HPUmgKlp">
																		<div class="_2l69Ky2K7XCfLJSd5-EHK _3Ha4YEwF4qWJ-80ufIOUfz">
																			<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url('plugins/images/dinetime/medium (1).jpg')"></div>
																			<div class="_3Ff_-vwjff6aEARttMhuUB _1So4oyClZYPFQKuiqAQvqO">
																				<h3 class="_19Z-zMmJ8k0VlTxMrRH5e7 _12PdXDtY0HRmiCmq9eSwcG">Lusin Centria Mall</h3>
																				<div class="QW9338a-APoWav3K944Aw">
																					<div class="_25xMNiLip-SZ1zuCkSA7ge">
																						<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="4.3 stars">
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																						</div>
																						<div class="_2s6ofZ_eiTKuvNHV3mVnaG">4.3</div>
																					</div><span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">17 reviews</span>
																				</div>
																				<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">Middle Eastern</span><span class="_3XUkCmVe7o-TXQonajAJih"><span class="_3sSkv7iJ6Tl1VxRjYAjp13">$$$<span class="_1s81GB3gesncA-230LO-_w">$</span></span></span><span class="_3XUkCmVe7o-TXQonajAJih">Riyadh</span></div>

																			</div>
																		</div>
																	</a></li>
																<li class="_3x_WHYdFEVH49S9EezWxHm _3QgH7SeBnEz7HBmivtwX19 impression-tracked"><a href="#" target="_blank" rel="noopener noreferrer" class="_1ozgPFOzhQhRC0HPUmgKlp">
																		<div class="_2l69Ky2K7XCfLJSd5-EHK _3Ha4YEwF4qWJ-80ufIOUfz">
																			<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url('plugins/images/dinetime/medium (2).jpg')"></div>
																			<div class="_3Ff_-vwjff6aEARttMhuUB _1So4oyClZYPFQKuiqAQvqO">
																				<h3 class="_19Z-zMmJ8k0VlTxMrRH5e7 _12PdXDtY0HRmiCmq9eSwcG">Lusin Centria Mall</h3>
																				<div class="QW9338a-APoWav3K944Aw">
																					<div class="_25xMNiLip-SZ1zuCkSA7ge">
																						<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="4.3 stars">
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																						</div>
																						<div class="_2s6ofZ_eiTKuvNHV3mVnaG">4.3</div>
																					</div><span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">17 reviews</span>
																				</div>
																				<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">Middle Eastern</span><span class="_3XUkCmVe7o-TXQonajAJih"><span class="_3sSkv7iJ6Tl1VxRjYAjp13">$$$<span class="_1s81GB3gesncA-230LO-_w">$</span></span></span><span class="_3XUkCmVe7o-TXQonajAJih">Riyadh</span></div>

																			</div>
																		</div>
																	</a></li>
																<li class="_3x_WHYdFEVH49S9EezWxHm _3QgH7SeBnEz7HBmivtwX19 impression-tracked"><a href="#" target="_blank" rel="noopener noreferrer" class="_1ozgPFOzhQhRC0HPUmgKlp">
																		<div class="_2l69Ky2K7XCfLJSd5-EHK _3Ha4YEwF4qWJ-80ufIOUfz">
																			<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url('plugins/images/dinetime/medium (3).jpg')"></div>
																			<div class="_3Ff_-vwjff6aEARttMhuUB _1So4oyClZYPFQKuiqAQvqO">
																				<h3 class="_19Z-zMmJ8k0VlTxMrRH5e7 _12PdXDtY0HRmiCmq9eSwcG">Lusin Centria Mall</h3>
																				<div class="QW9338a-APoWav3K944Aw">
																					<div class="_25xMNiLip-SZ1zuCkSA7ge">
																						<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="4.3 stars">
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																						</div>
																						<div class="_2s6ofZ_eiTKuvNHV3mVnaG">4.3</div>
																					</div><span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">17 reviews</span>
																				</div>
																				<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">Middle Eastern</span><span class="_3XUkCmVe7o-TXQonajAJih"><span class="_3sSkv7iJ6Tl1VxRjYAjp13">$$$<span class="_1s81GB3gesncA-230LO-_w">$</span></span></span><span class="_3XUkCmVe7o-TXQonajAJih">Riyadh</span></div>

																			</div>
																		</div>
																	</a></li>
																<li class="_3x_WHYdFEVH49S9EezWxHm _3QgH7SeBnEz7HBmivtwX19 impression-tracked"><a href="#" target="_blank" rel="noopener noreferrer" class="_1ozgPFOzhQhRC0HPUmgKlp">
																		<div class="_2l69Ky2K7XCfLJSd5-EHK _3Ha4YEwF4qWJ-80ufIOUfz">
																			<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url('plugins/images/dinetime/medium (4).jpg')"></div>
																			<div class="_3Ff_-vwjff6aEARttMhuUB _1So4oyClZYPFQKuiqAQvqO">
																				<h3 class="_19Z-zMmJ8k0VlTxMrRH5e7 _12PdXDtY0HRmiCmq9eSwcG">Lusin Centria Mall</h3>
																				<div class="QW9338a-APoWav3K944Aw">
																					<div class="_25xMNiLip-SZ1zuCkSA7ge">
																						<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="4.3 stars">
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																						</div>
																						<div class="_2s6ofZ_eiTKuvNHV3mVnaG">4.3</div>
																					</div><span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">17 reviews</span>
																				</div>
																				<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">Middle Eastern</span><span class="_3XUkCmVe7o-TXQonajAJih"><span class="_3sSkv7iJ6Tl1VxRjYAjp13">$$$<span class="_1s81GB3gesncA-230LO-_w">$</span></span></span><span class="_3XUkCmVe7o-TXQonajAJih">Riyadh</span></div>

																			</div>
																		</div>
																	</a></li>
																<li class="_3x_WHYdFEVH49S9EezWxHm _3QgH7SeBnEz7HBmivtwX19 impression-tracked"><a href="#" target="_blank" rel="noopener noreferrer" class="_1ozgPFOzhQhRC0HPUmgKlp">
																		<div class="_2l69Ky2K7XCfLJSd5-EHK _3Ha4YEwF4qWJ-80ufIOUfz">
																			<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url('plugins/images/dinetime/medium (5).jpg')"></div>
																			<div class="_3Ff_-vwjff6aEARttMhuUB _1So4oyClZYPFQKuiqAQvqO">
																				<h3 class="_19Z-zMmJ8k0VlTxMrRH5e7 _12PdXDtY0HRmiCmq9eSwcG">Lusin Centria Mall</h3>
																				<div class="QW9338a-APoWav3K944Aw">
																					<div class="_25xMNiLip-SZ1zuCkSA7ge">
																						<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="4.3 stars">
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																						</div>
																						<div class="_2s6ofZ_eiTKuvNHV3mVnaG">4.3</div>
																					</div><span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">17 reviews</span>
																				</div>
																				<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">Middle Eastern</span><span class="_3XUkCmVe7o-TXQonajAJih"><span class="_3sSkv7iJ6Tl1VxRjYAjp13">$$$<span class="_1s81GB3gesncA-230LO-_w">$</span></span></span><span class="_3XUkCmVe7o-TXQonajAJih">Riyadh</span></div>

																			</div>
																		</div>
																	</a></li>
																<li class="_3x_WHYdFEVH49S9EezWxHm _3QgH7SeBnEz7HBmivtwX19 impression-tracked"><a href="#" target="_blank" rel="noopener noreferrer" class="_1ozgPFOzhQhRC0HPUmgKlp">
																		<div class="_2l69Ky2K7XCfLJSd5-EHK _3Ha4YEwF4qWJ-80ufIOUfz">
																			<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url('plugins/images/dinetime/medium (6).jpg')"></div>
																			<div class="_3Ff_-vwjff6aEARttMhuUB _1So4oyClZYPFQKuiqAQvqO">
																				<h3 class="_19Z-zMmJ8k0VlTxMrRH5e7 _12PdXDtY0HRmiCmq9eSwcG">Lusin Centria Mall</h3>
																				<div class="QW9338a-APoWav3K944Aw">
																					<div class="_25xMNiLip-SZ1zuCkSA7ge">
																						<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="4.3 stars">
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																						</div>
																						<div class="_2s6ofZ_eiTKuvNHV3mVnaG">4.3</div>
																					</div><span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">17 reviews</span>
																				</div>
																				<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">Middle Eastern</span><span class="_3XUkCmVe7o-TXQonajAJih"><span class="_3sSkv7iJ6Tl1VxRjYAjp13">$$$<span class="_1s81GB3gesncA-230LO-_w">$</span></span></span><span class="_3XUkCmVe7o-TXQonajAJih">Riyadh</span></div>

																			</div>
																		</div>
																	</a></li>
																<li class="_3x_WHYdFEVH49S9EezWxHm _3QgH7SeBnEz7HBmivtwX19 impression-tracked"><a href="#" target="_blank" rel="noopener noreferrer" class="_1ozgPFOzhQhRC0HPUmgKlp">
																		<div class="_2l69Ky2K7XCfLJSd5-EHK _3Ha4YEwF4qWJ-80ufIOUfz">
																			<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url('plugins/images/dinetime/medium.jpg')"></div>
																			<div class="_3Ff_-vwjff6aEARttMhuUB _1So4oyClZYPFQKuiqAQvqO">
																				<h3 class="_19Z-zMmJ8k0VlTxMrRH5e7 _12PdXDtY0HRmiCmq9eSwcG">Lusin Centria Mall</h3>
																				<div class="QW9338a-APoWav3K944Aw">
																					<div class="_25xMNiLip-SZ1zuCkSA7ge">
																						<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="4.3 stars">
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																						</div>
																						<div class="_2s6ofZ_eiTKuvNHV3mVnaG">4.3</div>
																					</div><span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">17 reviews</span>
																				</div>
																				<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">Middle Eastern</span><span class="_3XUkCmVe7o-TXQonajAJih"><span class="_3sSkv7iJ6Tl1VxRjYAjp13">$$$<span class="_1s81GB3gesncA-230LO-_w">$</span></span></span><span class="_3XUkCmVe7o-TXQonajAJih">Riyadh</span></div>
																			</div>
																		</div>
																	</a></li>
															</ul>
														</div>
													</div>
												</section>
												<section class="kZZ3bj8aJjuOzeutRXPx4">
													<header class="_3GnKshkGY3N-io370SlmQG">
														<div class="_2FKTwcKCW4HVLmdXxTks2B">
															<h2 class="GNFFL7LprF92LaFrbMhZo _28BPGuc6h85O-34CMLmLZH">Place Near You</h2>
														</div>
													</header>
													<div class="_3Og5lQcbeM64jPtLcNfgm2">
														<div class="_23Jvz_tSK2Ka8Z0rGuO6al">
															<ul class="_1BHbiCBVsK6IRVeXfwnVPQ">
																<li class="_3x_WHYdFEVH49S9EezWxHm _3QgH7SeBnEz7HBmivtwX19 impression-tracked"><a href="#" target="_blank" rel="noopener noreferrer" class="_1ozgPFOzhQhRC0HPUmgKlp">
																		<div class="_2l69Ky2K7XCfLJSd5-EHK _3Ha4YEwF4qWJ-80ufIOUfz">
																			<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url('plugins/images/dinetime/medium.jpg')"></div>
																			<div class="_3Ff_-vwjff6aEARttMhuUB _1So4oyClZYPFQKuiqAQvqO">
																				<h3 class="_19Z-zMmJ8k0VlTxMrRH5e7 _12PdXDtY0HRmiCmq9eSwcG">Lusin Centria Mall</h3>
																				<div class="QW9338a-APoWav3K944Aw">
																					<div class="_25xMNiLip-SZ1zuCkSA7ge">
																						<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="4.3 stars">
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																						</div>
																						<div class="_2s6ofZ_eiTKuvNHV3mVnaG">4.3</div>
																					</div><span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">17 reviews</span>
																				</div>
																				<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">Middle Eastern</span><span class="_3XUkCmVe7o-TXQonajAJih"><span class="_3sSkv7iJ6Tl1VxRjYAjp13">$$$<span class="_1s81GB3gesncA-230LO-_w">$</span></span></span><span class="_3XUkCmVe7o-TXQonajAJih">Riyadh</span></div>
																			</div>
																		</div>
																	</a></li>
																<li class="_3x_WHYdFEVH49S9EezWxHm _3QgH7SeBnEz7HBmivtwX19 impression-tracked"><a href="#" target="_blank" rel="noopener noreferrer" class="_1ozgPFOzhQhRC0HPUmgKlp">
																		<div class="_2l69Ky2K7XCfLJSd5-EHK _3Ha4YEwF4qWJ-80ufIOUfz">
																			<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url('plugins/images/dinetime/medium (1).jpg')"></div>
																			<div class="_3Ff_-vwjff6aEARttMhuUB _1So4oyClZYPFQKuiqAQvqO">
																				<h3 class="_19Z-zMmJ8k0VlTxMrRH5e7 _12PdXDtY0HRmiCmq9eSwcG">Lusin Centria Mall</h3>
																				<div class="QW9338a-APoWav3K944Aw">
																					<div class="_25xMNiLip-SZ1zuCkSA7ge">
																						<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="4.3 stars">
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																						</div>
																						<div class="_2s6ofZ_eiTKuvNHV3mVnaG">4.3</div>
																					</div><span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">17 reviews</span>
																				</div>
																				<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">Middle Eastern</span><span class="_3XUkCmVe7o-TXQonajAJih"><span class="_3sSkv7iJ6Tl1VxRjYAjp13">$$$<span class="_1s81GB3gesncA-230LO-_w">$</span></span></span><span class="_3XUkCmVe7o-TXQonajAJih">Riyadh</span></div>

																			</div>
																		</div>
																	</a></li>
																<li class="_3x_WHYdFEVH49S9EezWxHm _3QgH7SeBnEz7HBmivtwX19 impression-tracked"><a href="#" target="_blank" rel="noopener noreferrer" class="_1ozgPFOzhQhRC0HPUmgKlp">
																		<div class="_2l69Ky2K7XCfLJSd5-EHK _3Ha4YEwF4qWJ-80ufIOUfz">
																			<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url('plugins/images/dinetime/medium (2).jpg')"></div>
																			<div class="_3Ff_-vwjff6aEARttMhuUB _1So4oyClZYPFQKuiqAQvqO">
																				<h3 class="_19Z-zMmJ8k0VlTxMrRH5e7 _12PdXDtY0HRmiCmq9eSwcG">Lusin Centria Mall</h3>
																				<div class="QW9338a-APoWav3K944Aw">
																					<div class="_25xMNiLip-SZ1zuCkSA7ge">
																						<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="4.3 stars">
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																						</div>
																						<div class="_2s6ofZ_eiTKuvNHV3mVnaG">4.3</div>
																					</div><span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">17 reviews</span>
																				</div>
																				<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">Middle Eastern</span><span class="_3XUkCmVe7o-TXQonajAJih"><span class="_3sSkv7iJ6Tl1VxRjYAjp13">$$$<span class="_1s81GB3gesncA-230LO-_w">$</span></span></span><span class="_3XUkCmVe7o-TXQonajAJih">Riyadh</span></div>

																			</div>
																		</div>
																	</a></li>
																<li class="_3x_WHYdFEVH49S9EezWxHm _3QgH7SeBnEz7HBmivtwX19 impression-tracked"><a href="#" target="_blank" rel="noopener noreferrer" class="_1ozgPFOzhQhRC0HPUmgKlp">
																		<div class="_2l69Ky2K7XCfLJSd5-EHK _3Ha4YEwF4qWJ-80ufIOUfz">
																			<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url('plugins/images/dinetime/medium (3).jpg')"></div>
																			<div class="_3Ff_-vwjff6aEARttMhuUB _1So4oyClZYPFQKuiqAQvqO">
																				<h3 class="_19Z-zMmJ8k0VlTxMrRH5e7 _12PdXDtY0HRmiCmq9eSwcG">Lusin Centria Mall</h3>
																				<div class="QW9338a-APoWav3K944Aw">
																					<div class="_25xMNiLip-SZ1zuCkSA7ge">
																						<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="4.3 stars">
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																						</div>
																						<div class="_2s6ofZ_eiTKuvNHV3mVnaG">4.3</div>
																					</div><span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">17 reviews</span>
																				</div>
																				<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">Middle Eastern</span><span class="_3XUkCmVe7o-TXQonajAJih"><span class="_3sSkv7iJ6Tl1VxRjYAjp13">$$$<span class="_1s81GB3gesncA-230LO-_w">$</span></span></span><span class="_3XUkCmVe7o-TXQonajAJih">Riyadh</span></div>

																			</div>
																		</div>
																	</a></li>
																<li class="_3x_WHYdFEVH49S9EezWxHm _3QgH7SeBnEz7HBmivtwX19 impression-tracked"><a href="#" target="_blank" rel="noopener noreferrer" class="_1ozgPFOzhQhRC0HPUmgKlp">
																		<div class="_2l69Ky2K7XCfLJSd5-EHK _3Ha4YEwF4qWJ-80ufIOUfz">
																			<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url('plugins/images/dinetime/medium (4).jpg')"></div>
																			<div class="_3Ff_-vwjff6aEARttMhuUB _1So4oyClZYPFQKuiqAQvqO">
																				<h3 class="_19Z-zMmJ8k0VlTxMrRH5e7 _12PdXDtY0HRmiCmq9eSwcG">Lusin Centria Mall</h3>
																				<div class="QW9338a-APoWav3K944Aw">
																					<div class="_25xMNiLip-SZ1zuCkSA7ge">
																						<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="4.3 stars">
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																						</div>
																						<div class="_2s6ofZ_eiTKuvNHV3mVnaG">4.3</div>
																					</div><span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">17 reviews</span>
																				</div>
																				<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">Middle Eastern</span><span class="_3XUkCmVe7o-TXQonajAJih"><span class="_3sSkv7iJ6Tl1VxRjYAjp13">$$$<span class="_1s81GB3gesncA-230LO-_w">$</span></span></span><span class="_3XUkCmVe7o-TXQonajAJih">Riyadh</span></div>

																			</div>
																		</div>
																	</a></li>
																<li class="_3x_WHYdFEVH49S9EezWxHm _3QgH7SeBnEz7HBmivtwX19 impression-tracked"><a href="#" target="_blank" rel="noopener noreferrer" class="_1ozgPFOzhQhRC0HPUmgKlp">
																		<div class="_2l69Ky2K7XCfLJSd5-EHK _3Ha4YEwF4qWJ-80ufIOUfz">
																			<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url('plugins/images/dinetime/medium (5).jpg')"></div>
																			<div class="_3Ff_-vwjff6aEARttMhuUB _1So4oyClZYPFQKuiqAQvqO">
																				<h3 class="_19Z-zMmJ8k0VlTxMrRH5e7 _12PdXDtY0HRmiCmq9eSwcG">Lusin Centria Mall</h3>
																				<div class="QW9338a-APoWav3K944Aw">
																					<div class="_25xMNiLip-SZ1zuCkSA7ge">
																						<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="4.3 stars">
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																						</div>
																						<div class="_2s6ofZ_eiTKuvNHV3mVnaG">4.3</div>
																					</div><span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">17 reviews</span>
																				</div>
																				<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">Middle Eastern</span><span class="_3XUkCmVe7o-TXQonajAJih"><span class="_3sSkv7iJ6Tl1VxRjYAjp13">$$$<span class="_1s81GB3gesncA-230LO-_w">$</span></span></span><span class="_3XUkCmVe7o-TXQonajAJih">Riyadh</span></div>

																			</div>
																		</div>
																	</a></li>
																<li class="_3x_WHYdFEVH49S9EezWxHm _3QgH7SeBnEz7HBmivtwX19 impression-tracked"><a href="#" target="_blank" rel="noopener noreferrer" class="_1ozgPFOzhQhRC0HPUmgKlp">
																		<div class="_2l69Ky2K7XCfLJSd5-EHK _3Ha4YEwF4qWJ-80ufIOUfz">
																			<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url('plugins/images/dinetime/medium (6).jpg')"></div>
																			<div class="_3Ff_-vwjff6aEARttMhuUB _1So4oyClZYPFQKuiqAQvqO">
																				<h3 class="_19Z-zMmJ8k0VlTxMrRH5e7 _12PdXDtY0HRmiCmq9eSwcG">Lusin Centria Mall</h3>
																				<div class="QW9338a-APoWav3K944Aw">
																					<div class="_25xMNiLip-SZ1zuCkSA7ge">
																						<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="4.3 stars">
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																						</div>
																						<div class="_2s6ofZ_eiTKuvNHV3mVnaG">4.3</div>
																					</div><span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">17 reviews</span>
																				</div>
																				<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">Middle Eastern</span><span class="_3XUkCmVe7o-TXQonajAJih"><span class="_3sSkv7iJ6Tl1VxRjYAjp13">$$$<span class="_1s81GB3gesncA-230LO-_w">$</span></span></span><span class="_3XUkCmVe7o-TXQonajAJih">Riyadh</span></div>

																			</div>
																		</div>
																	</a></li>
																<li class="_3x_WHYdFEVH49S9EezWxHm _3QgH7SeBnEz7HBmivtwX19 impression-tracked"><a href="#" target="_blank" rel="noopener noreferrer" class="_1ozgPFOzhQhRC0HPUmgKlp">
																		<div class="_2l69Ky2K7XCfLJSd5-EHK _3Ha4YEwF4qWJ-80ufIOUfz">
																			<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url('plugins/images/dinetime/medium.jpg')"></div>
																			<div class="_3Ff_-vwjff6aEARttMhuUB _1So4oyClZYPFQKuiqAQvqO">
																				<h3 class="_19Z-zMmJ8k0VlTxMrRH5e7 _12PdXDtY0HRmiCmq9eSwcG">Lusin Centria Mall</h3>
																				<div class="QW9338a-APoWav3K944Aw">
																					<div class="_25xMNiLip-SZ1zuCkSA7ge">
																						<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="4.3 stars">
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																						</div>
																						<div class="_2s6ofZ_eiTKuvNHV3mVnaG">4.3</div>
																					</div><span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">17 reviews</span>
																				</div>
																				<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">Middle Eastern</span><span class="_3XUkCmVe7o-TXQonajAJih"><span class="_3sSkv7iJ6Tl1VxRjYAjp13">$$$<span class="_1s81GB3gesncA-230LO-_w">$</span></span></span><span class="_3XUkCmVe7o-TXQonajAJih">Riyadh</span></div>
																			</div>
																		</div>
																	</a></li>
															</ul>
														</div>
													</div>
												</section>
												<section class="kZZ3bj8aJjuOzeutRXPx4">
													<header class="_3GnKshkGY3N-io370SlmQG">
														<div class="_2FKTwcKCW4HVLmdXxTks2B">
															<h2 class="GNFFL7LprF92LaFrbMhZo _28BPGuc6h85O-34CMLmLZH">Top Picks</h2>
														</div>
													</header>
													<div class="_3Og5lQcbeM64jPtLcNfgm2">
														<div class="_23Jvz_tSK2Ka8Z0rGuO6al">
															<ul class="_1BHbiCBVsK6IRVeXfwnVPQ">
																<li class="_3x_WHYdFEVH49S9EezWxHm _3QgH7SeBnEz7HBmivtwX19 impression-tracked"><a href="#" target="_blank" rel="noopener noreferrer" class="_1ozgPFOzhQhRC0HPUmgKlp">
																		<div class="_2l69Ky2K7XCfLJSd5-EHK _3Ha4YEwF4qWJ-80ufIOUfz">
																			<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url('plugins/images/dinetime/medium.jpg')"></div>
																			<div class="_3Ff_-vwjff6aEARttMhuUB _1So4oyClZYPFQKuiqAQvqO">
																				<h3 class="_19Z-zMmJ8k0VlTxMrRH5e7 _12PdXDtY0HRmiCmq9eSwcG">Lusin Centria Mall</h3>
																				<div class="QW9338a-APoWav3K944Aw">
																					<div class="_25xMNiLip-SZ1zuCkSA7ge">
																						<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="4.3 stars">
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																						</div>
																						<div class="_2s6ofZ_eiTKuvNHV3mVnaG">4.3</div>
																					</div><span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">17 reviews</span>
																				</div>
																				<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">Middle Eastern</span><span class="_3XUkCmVe7o-TXQonajAJih"><span class="_3sSkv7iJ6Tl1VxRjYAjp13">$$$<span class="_1s81GB3gesncA-230LO-_w">$</span></span></span><span class="_3XUkCmVe7o-TXQonajAJih">Riyadh</span></div>
																			</div>
																		</div>
																	</a></li>
																<li class="_3x_WHYdFEVH49S9EezWxHm _3QgH7SeBnEz7HBmivtwX19 impression-tracked"><a href="#" target="_blank" rel="noopener noreferrer" class="_1ozgPFOzhQhRC0HPUmgKlp">
																		<div class="_2l69Ky2K7XCfLJSd5-EHK _3Ha4YEwF4qWJ-80ufIOUfz">
																			<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url('plugins/images/dinetime/medium (1).jpg')"></div>
																			<div class="_3Ff_-vwjff6aEARttMhuUB _1So4oyClZYPFQKuiqAQvqO">
																				<h3 class="_19Z-zMmJ8k0VlTxMrRH5e7 _12PdXDtY0HRmiCmq9eSwcG">Lusin Centria Mall</h3>
																				<div class="QW9338a-APoWav3K944Aw">
																					<div class="_25xMNiLip-SZ1zuCkSA7ge">
																						<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="4.3 stars">
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																						</div>
																						<div class="_2s6ofZ_eiTKuvNHV3mVnaG">4.3</div>
																					</div><span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">17 reviews</span>
																				</div>
																				<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">Middle Eastern</span><span class="_3XUkCmVe7o-TXQonajAJih"><span class="_3sSkv7iJ6Tl1VxRjYAjp13">$$$<span class="_1s81GB3gesncA-230LO-_w">$</span></span></span><span class="_3XUkCmVe7o-TXQonajAJih">Riyadh</span></div>

																			</div>
																		</div>
																	</a></li>
																<li class="_3x_WHYdFEVH49S9EezWxHm _3QgH7SeBnEz7HBmivtwX19 impression-tracked"><a href="#" target="_blank" rel="noopener noreferrer" class="_1ozgPFOzhQhRC0HPUmgKlp">
																		<div class="_2l69Ky2K7XCfLJSd5-EHK _3Ha4YEwF4qWJ-80ufIOUfz">
																			<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url('plugins/images/dinetime/medium (2).jpg')"></div>
																			<div class="_3Ff_-vwjff6aEARttMhuUB _1So4oyClZYPFQKuiqAQvqO">
																				<h3 class="_19Z-zMmJ8k0VlTxMrRH5e7 _12PdXDtY0HRmiCmq9eSwcG">Lusin Centria Mall</h3>
																				<div class="QW9338a-APoWav3K944Aw">
																					<div class="_25xMNiLip-SZ1zuCkSA7ge">
																						<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="4.3 stars">
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																						</div>
																						<div class="_2s6ofZ_eiTKuvNHV3mVnaG">4.3</div>
																					</div><span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">17 reviews</span>
																				</div>
																				<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">Middle Eastern</span><span class="_3XUkCmVe7o-TXQonajAJih"><span class="_3sSkv7iJ6Tl1VxRjYAjp13">$$$<span class="_1s81GB3gesncA-230LO-_w">$</span></span></span><span class="_3XUkCmVe7o-TXQonajAJih">Riyadh</span></div>

																			</div>
																		</div>
																	</a></li>
																<li class="_3x_WHYdFEVH49S9EezWxHm _3QgH7SeBnEz7HBmivtwX19 impression-tracked"><a href="#" target="_blank" rel="noopener noreferrer" class="_1ozgPFOzhQhRC0HPUmgKlp">
																		<div class="_2l69Ky2K7XCfLJSd5-EHK _3Ha4YEwF4qWJ-80ufIOUfz">
																			<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url('plugins/images/dinetime/medium (3).jpg')"></div>
																			<div class="_3Ff_-vwjff6aEARttMhuUB _1So4oyClZYPFQKuiqAQvqO">
																				<h3 class="_19Z-zMmJ8k0VlTxMrRH5e7 _12PdXDtY0HRmiCmq9eSwcG">Lusin Centria Mall</h3>
																				<div class="QW9338a-APoWav3K944Aw">
																					<div class="_25xMNiLip-SZ1zuCkSA7ge">
																						<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="4.3 stars">
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																						</div>
																						<div class="_2s6ofZ_eiTKuvNHV3mVnaG">4.3</div>
																					</div><span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">17 reviews</span>
																				</div>
																				<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">Middle Eastern</span><span class="_3XUkCmVe7o-TXQonajAJih"><span class="_3sSkv7iJ6Tl1VxRjYAjp13">$$$<span class="_1s81GB3gesncA-230LO-_w">$</span></span></span><span class="_3XUkCmVe7o-TXQonajAJih">Riyadh</span></div>

																			</div>
																		</div>
																	</a></li>
																<li class="_3x_WHYdFEVH49S9EezWxHm _3QgH7SeBnEz7HBmivtwX19 impression-tracked"><a href="#" target="_blank" rel="noopener noreferrer" class="_1ozgPFOzhQhRC0HPUmgKlp">
																		<div class="_2l69Ky2K7XCfLJSd5-EHK _3Ha4YEwF4qWJ-80ufIOUfz">
																			<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url('plugins/images/dinetime/medium (4).jpg')"></div>
																			<div class="_3Ff_-vwjff6aEARttMhuUB _1So4oyClZYPFQKuiqAQvqO">
																				<h3 class="_19Z-zMmJ8k0VlTxMrRH5e7 _12PdXDtY0HRmiCmq9eSwcG">Lusin Centria Mall</h3>
																				<div class="QW9338a-APoWav3K944Aw">
																					<div class="_25xMNiLip-SZ1zuCkSA7ge">
																						<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="4.3 stars">
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																						</div>
																						<div class="_2s6ofZ_eiTKuvNHV3mVnaG">4.3</div>
																					</div><span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">17 reviews</span>
																				</div>
																				<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">Middle Eastern</span><span class="_3XUkCmVe7o-TXQonajAJih"><span class="_3sSkv7iJ6Tl1VxRjYAjp13">$$$<span class="_1s81GB3gesncA-230LO-_w">$</span></span></span><span class="_3XUkCmVe7o-TXQonajAJih">Riyadh</span></div>

																			</div>
																		</div>
																	</a></li>
																<li class="_3x_WHYdFEVH49S9EezWxHm _3QgH7SeBnEz7HBmivtwX19 impression-tracked"><a href="#" target="_blank" rel="noopener noreferrer" class="_1ozgPFOzhQhRC0HPUmgKlp">
																		<div class="_2l69Ky2K7XCfLJSd5-EHK _3Ha4YEwF4qWJ-80ufIOUfz">
																			<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url('plugins/images/dinetime/medium (5).jpg')"></div>
																			<div class="_3Ff_-vwjff6aEARttMhuUB _1So4oyClZYPFQKuiqAQvqO">
																				<h3 class="_19Z-zMmJ8k0VlTxMrRH5e7 _12PdXDtY0HRmiCmq9eSwcG">Lusin Centria Mall</h3>
																				<div class="QW9338a-APoWav3K944Aw">
																					<div class="_25xMNiLip-SZ1zuCkSA7ge">
																						<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="4.3 stars">
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																						</div>
																						<div class="_2s6ofZ_eiTKuvNHV3mVnaG">4.3</div>
																					</div><span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">17 reviews</span>
																				</div>
																				<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">Middle Eastern</span><span class="_3XUkCmVe7o-TXQonajAJih"><span class="_3sSkv7iJ6Tl1VxRjYAjp13">$$$<span class="_1s81GB3gesncA-230LO-_w">$</span></span></span><span class="_3XUkCmVe7o-TXQonajAJih">Riyadh</span></div>

																			</div>
																		</div>
																	</a></li>
																<li class="_3x_WHYdFEVH49S9EezWxHm _3QgH7SeBnEz7HBmivtwX19 impression-tracked"><a href="#" target="_blank" rel="noopener noreferrer" class="_1ozgPFOzhQhRC0HPUmgKlp">
																		<div class="_2l69Ky2K7XCfLJSd5-EHK _3Ha4YEwF4qWJ-80ufIOUfz">
																			<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url('plugins/images/dinetime/medium (6).jpg')"></div>
																			<div class="_3Ff_-vwjff6aEARttMhuUB _1So4oyClZYPFQKuiqAQvqO">
																				<h3 class="_19Z-zMmJ8k0VlTxMrRH5e7 _12PdXDtY0HRmiCmq9eSwcG">Lusin Centria Mall</h3>
																				<div class="QW9338a-APoWav3K944Aw">
																					<div class="_25xMNiLip-SZ1zuCkSA7ge">
																						<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="4.3 stars">
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																						</div>
																						<div class="_2s6ofZ_eiTKuvNHV3mVnaG">4.3</div>
																					</div><span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">17 reviews</span>
																				</div>
																				<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">Middle Eastern</span><span class="_3XUkCmVe7o-TXQonajAJih"><span class="_3sSkv7iJ6Tl1VxRjYAjp13">$$$<span class="_1s81GB3gesncA-230LO-_w">$</span></span></span><span class="_3XUkCmVe7o-TXQonajAJih">Riyadh</span></div>

																			</div>
																		</div>
																	</a></li>
																<li class="_3x_WHYdFEVH49S9EezWxHm _3QgH7SeBnEz7HBmivtwX19 impression-tracked"><a href="#" target="_blank" rel="noopener noreferrer" class="_1ozgPFOzhQhRC0HPUmgKlp">
																		<div class="_2l69Ky2K7XCfLJSd5-EHK _3Ha4YEwF4qWJ-80ufIOUfz">
																			<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url('plugins/images/dinetime/medium.jpg')"></div>
																			<div class="_3Ff_-vwjff6aEARttMhuUB _1So4oyClZYPFQKuiqAQvqO">
																				<h3 class="_19Z-zMmJ8k0VlTxMrRH5e7 _12PdXDtY0HRmiCmq9eSwcG">Lusin Centria Mall</h3>
																				<div class="QW9338a-APoWav3K944Aw">
																					<div class="_25xMNiLip-SZ1zuCkSA7ge">
																						<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="4.3 stars">
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																						</div>
																						<div class="_2s6ofZ_eiTKuvNHV3mVnaG">4.3</div>
																					</div><span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">17 reviews</span>
																				</div>
																				<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">Middle Eastern</span><span class="_3XUkCmVe7o-TXQonajAJih"><span class="_3sSkv7iJ6Tl1VxRjYAjp13">$$$<span class="_1s81GB3gesncA-230LO-_w">$</span></span></span><span class="_3XUkCmVe7o-TXQonajAJih">Riyadh</span></div>
																			</div>
																		</div>
																	</a></li>
															</ul>
														</div>
													</div>
												</section>
												<section class="kZZ3bj8aJjuOzeutRXPx4">
													<header class="_3GnKshkGY3N-io370SlmQG">
														<div class="_2FKTwcKCW4HVLmdXxTks2B">
															<h2 class="GNFFL7LprF92LaFrbMhZo _28BPGuc6h85O-34CMLmLZH">All</h2>
														</div>
													</header>
													<div class="_3Og5lQcbeM64jPtLcNfgm2">
														<div class="_23Jvz_tSK2Ka8Z0rGuO6al">
															<ul class="_1BHbiCBVsK6IRVeXfwnVPQ">
																<li class="_3x_WHYdFEVH49S9EezWxHm _3QgH7SeBnEz7HBmivtwX19 impression-tracked"><a href="#" target="_blank" rel="noopener noreferrer" class="_1ozgPFOzhQhRC0HPUmgKlp">
																		<div class="_2l69Ky2K7XCfLJSd5-EHK _3Ha4YEwF4qWJ-80ufIOUfz">
																			<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url('plugins/images/dinetime/medium.jpg')"></div>
																			<div class="_3Ff_-vwjff6aEARttMhuUB _1So4oyClZYPFQKuiqAQvqO">
																				<h3 class="_19Z-zMmJ8k0VlTxMrRH5e7 _12PdXDtY0HRmiCmq9eSwcG">Lusin Centria Mall</h3>
																				<div class="QW9338a-APoWav3K944Aw">
																					<div class="_25xMNiLip-SZ1zuCkSA7ge">
																						<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="4.3 stars">
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																						</div>
																						<div class="_2s6ofZ_eiTKuvNHV3mVnaG">4.3</div>
																					</div><span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">17 reviews</span>
																				</div>
																				<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">Middle Eastern</span><span class="_3XUkCmVe7o-TXQonajAJih"><span class="_3sSkv7iJ6Tl1VxRjYAjp13">$$$<span class="_1s81GB3gesncA-230LO-_w">$</span></span></span><span class="_3XUkCmVe7o-TXQonajAJih">Riyadh</span></div>
																			</div>
																		</div>
																	</a></li>
																<li class="_3x_WHYdFEVH49S9EezWxHm _3QgH7SeBnEz7HBmivtwX19 impression-tracked"><a href="#" target="_blank" rel="noopener noreferrer" class="_1ozgPFOzhQhRC0HPUmgKlp">
																		<div class="_2l69Ky2K7XCfLJSd5-EHK _3Ha4YEwF4qWJ-80ufIOUfz">
																			<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url('plugins/images/dinetime/medium (1).jpg')"></div>
																			<div class="_3Ff_-vwjff6aEARttMhuUB _1So4oyClZYPFQKuiqAQvqO">
																				<h3 class="_19Z-zMmJ8k0VlTxMrRH5e7 _12PdXDtY0HRmiCmq9eSwcG">Lusin Centria Mall</h3>
																				<div class="QW9338a-APoWav3K944Aw">
																					<div class="_25xMNiLip-SZ1zuCkSA7ge">
																						<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="4.3 stars">
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																						</div>
																						<div class="_2s6ofZ_eiTKuvNHV3mVnaG">4.3</div>
																					</div><span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">17 reviews</span>
																				</div>
																				<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">Middle Eastern</span><span class="_3XUkCmVe7o-TXQonajAJih"><span class="_3sSkv7iJ6Tl1VxRjYAjp13">$$$<span class="_1s81GB3gesncA-230LO-_w">$</span></span></span><span class="_3XUkCmVe7o-TXQonajAJih">Riyadh</span></div>

																			</div>
																		</div>
																	</a></li>
																<li class="_3x_WHYdFEVH49S9EezWxHm _3QgH7SeBnEz7HBmivtwX19 impression-tracked"><a href="#" target="_blank" rel="noopener noreferrer" class="_1ozgPFOzhQhRC0HPUmgKlp">
																		<div class="_2l69Ky2K7XCfLJSd5-EHK _3Ha4YEwF4qWJ-80ufIOUfz">
																			<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url('plugins/images/dinetime/medium (2).jpg')"></div>
																			<div class="_3Ff_-vwjff6aEARttMhuUB _1So4oyClZYPFQKuiqAQvqO">
																				<h3 class="_19Z-zMmJ8k0VlTxMrRH5e7 _12PdXDtY0HRmiCmq9eSwcG">Lusin Centria Mall</h3>
																				<div class="QW9338a-APoWav3K944Aw">
																					<div class="_25xMNiLip-SZ1zuCkSA7ge">
																						<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="4.3 stars">
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																						</div>
																						<div class="_2s6ofZ_eiTKuvNHV3mVnaG">4.3</div>
																					</div><span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">17 reviews</span>
																				</div>
																				<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">Middle Eastern</span><span class="_3XUkCmVe7o-TXQonajAJih"><span class="_3sSkv7iJ6Tl1VxRjYAjp13">$$$<span class="_1s81GB3gesncA-230LO-_w">$</span></span></span><span class="_3XUkCmVe7o-TXQonajAJih">Riyadh</span></div>

																			</div>
																		</div>
																	</a></li>
																<li class="_3x_WHYdFEVH49S9EezWxHm _3QgH7SeBnEz7HBmivtwX19 impression-tracked"><a href="#" target="_blank" rel="noopener noreferrer" class="_1ozgPFOzhQhRC0HPUmgKlp">
																		<div class="_2l69Ky2K7XCfLJSd5-EHK _3Ha4YEwF4qWJ-80ufIOUfz">
																			<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url('plugins/images/dinetime/medium (3).jpg')"></div>
																			<div class="_3Ff_-vwjff6aEARttMhuUB _1So4oyClZYPFQKuiqAQvqO">
																				<h3 class="_19Z-zMmJ8k0VlTxMrRH5e7 _12PdXDtY0HRmiCmq9eSwcG">Lusin Centria Mall</h3>
																				<div class="QW9338a-APoWav3K944Aw">
																					<div class="_25xMNiLip-SZ1zuCkSA7ge">
																						<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="4.3 stars">
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																						</div>
																						<div class="_2s6ofZ_eiTKuvNHV3mVnaG">4.3</div>
																					</div><span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">17 reviews</span>
																				</div>
																				<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">Middle Eastern</span><span class="_3XUkCmVe7o-TXQonajAJih"><span class="_3sSkv7iJ6Tl1VxRjYAjp13">$$$<span class="_1s81GB3gesncA-230LO-_w">$</span></span></span><span class="_3XUkCmVe7o-TXQonajAJih">Riyadh</span></div>

																			</div>
																		</div>
																	</a></li>
																<li class="_3x_WHYdFEVH49S9EezWxHm _3QgH7SeBnEz7HBmivtwX19 impression-tracked"><a href="#" target="_blank" rel="noopener noreferrer" class="_1ozgPFOzhQhRC0HPUmgKlp">
																		<div class="_2l69Ky2K7XCfLJSd5-EHK _3Ha4YEwF4qWJ-80ufIOUfz">
																			<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url('plugins/images/dinetime/medium (4).jpg')"></div>
																			<div class="_3Ff_-vwjff6aEARttMhuUB _1So4oyClZYPFQKuiqAQvqO">
																				<h3 class="_19Z-zMmJ8k0VlTxMrRH5e7 _12PdXDtY0HRmiCmq9eSwcG">Lusin Centria Mall</h3>
																				<div class="QW9338a-APoWav3K944Aw">
																					<div class="_25xMNiLip-SZ1zuCkSA7ge">
																						<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="4.3 stars">
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																						</div>
																						<div class="_2s6ofZ_eiTKuvNHV3mVnaG">4.3</div>
																					</div><span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">17 reviews</span>
																				</div>
																				<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">Middle Eastern</span><span class="_3XUkCmVe7o-TXQonajAJih"><span class="_3sSkv7iJ6Tl1VxRjYAjp13">$$$<span class="_1s81GB3gesncA-230LO-_w">$</span></span></span><span class="_3XUkCmVe7o-TXQonajAJih">Riyadh</span></div>

																			</div>
																		</div>
																	</a></li>
																<li class="_3x_WHYdFEVH49S9EezWxHm _3QgH7SeBnEz7HBmivtwX19 impression-tracked"><a href="#" target="_blank" rel="noopener noreferrer" class="_1ozgPFOzhQhRC0HPUmgKlp">
																		<div class="_2l69Ky2K7XCfLJSd5-EHK _3Ha4YEwF4qWJ-80ufIOUfz">
																			<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url('plugins/images/dinetime/medium (5).jpg')"></div>
																			<div class="_3Ff_-vwjff6aEARttMhuUB _1So4oyClZYPFQKuiqAQvqO">
																				<h3 class="_19Z-zMmJ8k0VlTxMrRH5e7 _12PdXDtY0HRmiCmq9eSwcG">Lusin Centria Mall</h3>
																				<div class="QW9338a-APoWav3K944Aw">
																					<div class="_25xMNiLip-SZ1zuCkSA7ge">
																						<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="4.3 stars">
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																						</div>
																						<div class="_2s6ofZ_eiTKuvNHV3mVnaG">4.3</div>
																					</div><span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">17 reviews</span>
																				</div>
																				<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">Middle Eastern</span><span class="_3XUkCmVe7o-TXQonajAJih"><span class="_3sSkv7iJ6Tl1VxRjYAjp13">$$$<span class="_1s81GB3gesncA-230LO-_w">$</span></span></span><span class="_3XUkCmVe7o-TXQonajAJih">Riyadh</span></div>

																			</div>
																		</div>
																	</a></li>
																<li class="_3x_WHYdFEVH49S9EezWxHm _3QgH7SeBnEz7HBmivtwX19 impression-tracked"><a href="#" target="_blank" rel="noopener noreferrer" class="_1ozgPFOzhQhRC0HPUmgKlp">
																		<div class="_2l69Ky2K7XCfLJSd5-EHK _3Ha4YEwF4qWJ-80ufIOUfz">
																			<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url('plugins/images/dinetime/medium (6).jpg')"></div>
																			<div class="_3Ff_-vwjff6aEARttMhuUB _1So4oyClZYPFQKuiqAQvqO">
																				<h3 class="_19Z-zMmJ8k0VlTxMrRH5e7 _12PdXDtY0HRmiCmq9eSwcG">Lusin Centria Mall</h3>
																				<div class="QW9338a-APoWav3K944Aw">
																					<div class="_25xMNiLip-SZ1zuCkSA7ge">
																						<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="4.3 stars">
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																						</div>
																						<div class="_2s6ofZ_eiTKuvNHV3mVnaG">4.3</div>
																					</div><span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">17 reviews</span>
																				</div>
																				<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">Middle Eastern</span><span class="_3XUkCmVe7o-TXQonajAJih"><span class="_3sSkv7iJ6Tl1VxRjYAjp13">$$$<span class="_1s81GB3gesncA-230LO-_w">$</span></span></span><span class="_3XUkCmVe7o-TXQonajAJih">Riyadh</span></div>

																			</div>
																		</div>
																	</a></li>
																<li class="_3x_WHYdFEVH49S9EezWxHm _3QgH7SeBnEz7HBmivtwX19 impression-tracked"><a href="#" target="_blank" rel="noopener noreferrer" class="_1ozgPFOzhQhRC0HPUmgKlp">
																		<div class="_2l69Ky2K7XCfLJSd5-EHK _3Ha4YEwF4qWJ-80ufIOUfz">
																			<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url('plugins/images/dinetime/medium.jpg')"></div>
																			<div class="_3Ff_-vwjff6aEARttMhuUB _1So4oyClZYPFQKuiqAQvqO">
																				<h3 class="_19Z-zMmJ8k0VlTxMrRH5e7 _12PdXDtY0HRmiCmq9eSwcG">Lusin Centria Mall</h3>
																				<div class="QW9338a-APoWav3K944Aw">
																					<div class="_25xMNiLip-SZ1zuCkSA7ge">
																						<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="4.3 stars">
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																							<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																						</div>
																						<div class="_2s6ofZ_eiTKuvNHV3mVnaG">4.3</div>
																					</div><span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">17 reviews</span>
																				</div>
																				<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">Middle Eastern</span><span class="_3XUkCmVe7o-TXQonajAJih"><span class="_3sSkv7iJ6Tl1VxRjYAjp13">$$$<span class="_1s81GB3gesncA-230LO-_w">$</span></span></span><span class="_3XUkCmVe7o-TXQonajAJih">Riyadh</span></div>
																			</div>
																		</div>
																	</a></li>
															</ul>
														</div>
													</div>
												</section>
												<section class="kZZ3bj8aJjuOzeutRXPx4">
												</section>

											</div>
										</section>
									</div>
								</div>
							</div>
							<!-- <div id="footer" role="contentinfo" class="footer-container">
								<div class="max-width-wrapper">
									<div class="footer-content-container">
										<div class="footer-base"><br><br><span class="footer-copyright"></span><br><br><br></div>
									</div>
								</div>
							</div> -->
							<style type="text/css">
								.grecaptcha-badge {
									visibility: hidden;
								}
							</style>
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
<script type="text/javascript" src="{{asset('plugins/bower_components/custom-select/custom-select.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/bower_components/bootstrap-select/bootstrap-select.min.js')}}"></script>

@stop