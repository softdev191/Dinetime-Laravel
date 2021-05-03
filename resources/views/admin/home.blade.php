<html lang="en-US">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DineTime</title>
	<meta name="robots" content="index,follow">
	<meta http-equiv="expires" content="0">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/pages/home.css')}}">
</head>

<body data-gr-c-s-loaded="true">
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
				#hamburger-overlay {
					background: #333;
					background: rgba(0, 0, 0, .2);
					height: 100%;
					width: 100%;
					position: absolute;
					opacity: 0;
					z-index: 110;
					left: -900000px;
					transition: .3s opacity ease-in-out
				}

				#hamburger-overlay.isActive {
					left: 0;
					opacity: 1
				}

				#hamburger-pane {
					background: #fff;
					height: 100%;
					width: 220px;
					position: absolute;
					z-index: 120;
					right: 900000px;
					top: -900000px;
					opacity: 0;
					transition: .15s right ease-in-out, .15s right ease-in-out
				}

				#hamburger-pane.isActive {
					right: 0;
					top: 0;
					opacity: 1
				}

				.hamburger-pane__header {
					border-bottom: 1px solid rgba(0, 0, 0, .12)
				}
				#hamburger-pane .hamburger-menu {
					float: right
				}

				#hamburger-pane .top-bar {
					padding-right: .75rem
				}

				#hamburger-pane.isActive {
					animation: fadeInFromNone .3s ease-out;
					animation-fill-mode: forwards
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

				.hamburger-pane__body .top-bar-nav-li {
					float: none
				}

				.hamburger-pane__body .top-bar-nav-li a.top-bar-nav-button,
				.hamburger-pane__body .top-bar-nav-li a.top-bar-nav-link {
					border-bottom: 1px solid rgba(0, 0, 0, .12);
					padding: .75rem 1rem;
					line-height: inherit;
					color: #60b2d0
				}

				.hamburger-pane__body .top-bar-nav-li a.top-bar-nav-button:hover,
				.hamburger-pane__body .top-bar-nav-li a.top-bar-nav-link:hover {
					background: rgba(0, 0, 0, .2)
				}
				.icon-list {
					vertical-align: sub
				}

				.tab-bar .icon-list {
					vertical-align: bottom
				}

				.tab-bar .tab-bar-logo {
					margin-left: 1rem
				}
				.tab-bar .top-bar-nav {
					top: 0;
					position: absolute;
					right: 1rem
				}

				.tab-bar .top-bar-search {
					top: 0;
					position: absolute;
					right: 3rem
				}

				.top-bar .top-bar-search-link {
					line-height: 3.575rem
				}
				.site-header {
					z-index: 102
				}

				@media only screen and (min-width:48.0625rem) {


					.hide-for-medium-2-up {
						display: none !important
					}
				}
				@media all and (device-width:768px) and (device-height:1024px) and (orientation:landscape) {
					li.top-bar-nav-li.hamburger-menu.hide-for-medium-2-up {
						display: block !important
					}
				}

				.legacy .top-bar-nav-link.without-right-padding {
					padding-right: 0
				}

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
				/* .top-bar-logo-position {
					position: absolute;
					top: 50%;
					transform: translateY(-50%)
				} */

				.top-bar-logo-background-image {
					display: block;
					background-color: #fff !important
				}

				.top-bar-logo-background-image-retina {
					display: none
				}

				.top-bar-logo-background-image-retina {
					max-height: 80px !important;
				}

				@media not all,
				not all,
				(-webkit-min-device-pixel-ratio:1.5),
				not all,
				(min-resolution:144dpi),
				(min-resolution:1.5dppx) {
					.top-bar-logo-background-image {
						display: none
					}

					.top-bar-logo-background-image-retina {
						display: block;
						background-color: #fff !important
					}

					.with-concierge>.top-bar-logo-background-image-retina {
						width: 250px;
						border-bottom: 2px solid #fff
					}
				}

				.top-bar-nav-a11y-hidden-text {
					position: absolute !important;
					height: 1px;
					width: 1px;
					overflow: hidden;
					clip: rect(1px 1px 1px 1px);
					clip: rect(1px, 1px, 1px, 1px);
					white-space: nowrap
				}
				.m-t-12{
					margin-top: 12px !important;
				}

				@media only screen and (min-width:40.0625em) and (max-width:64em) {
					.top-bar-nav-li.vip {
						background-image: url(//components.otstatic.com/components/header/1.5.2/img/vip-badge-crown.svg);
						background-repeat: no-repeat;
						background-size: 2rem 2rem;
						background-position: right
					}
				}

				@media only screen and (min-width:64.0625em) {
					.top-bar-nav-li.vip .with-arrow {
						background-image: url(//components.otstatic.com/components/header/1.5.2/img/vip-badge-crown.svg);
						background-repeat: no-repeat;
						background-size: 2rem 2rem;
						background-position: right
					}
				}

				ul#city-list,
				ul#location-picker-metro-list {
					list-style: none
				}
				.header-skip-to-content-container a {
					width: auto;
					position: absolute;
					left: 0;
					top: -40px;
					transition: top .5s ease-out;
					z-index: 1000;
					color: #fff;
					border-right: 1px solid #fff;
					border-bottom: 1px solid #fff;
					border-bottom-right-radius: 8px;
					background: #bf1722;
					padding: 8px 16px
				}

				.header-skip-to-content-container a:focus {
					transition: top .1s ease-in;
					top: 0;
					left: 0
				}
			</style>
			<style>
				@media only screen and (max-width:64em) and (min-width:40.0625em) {
					.top-bar-nav-link {
						padding: 0 .5rem
					}
				}
			</style>
			<div id="header" class="site-header">
				<div class="top-bar">
					<div class="top-bar-logo">
						<div class="logo-container"><a href="#" class="top-bar-logo-with-booking en-us"><img alt="Dinetime logo" src="{{asset('plugins/images/dinetime/logo.png')}}" class="top-bar-logo-position top-bar-logo-background-image" width="80"><img alt="Dinetime logo" src="{{asset('plugins/images/dinetime/logo.png')}}" width="80" class="top-bar-logo-position top-bar-logo-background-image-retina"></a></div>
					</div>
					<section class="top-bar-nav m-t-12">
						<ul>
							<li id="recently-viewed" class="top-bar-nav-li top-bar-nav-recently-viewed hide"></li>
							<li class="top-bar-nav-li has-button "><a href="{{route('register')}}" data-modal-trigger="register" class="top-bar-nav-button button small secondary" id="global_nav_sign_up" title="Sign up">Sign up</a></li>
							<li class="top-bar-nav-li "><a href="{{route('login')}}" class="top-bar-nav-link" id="global_nav_sign_in" title="Sign in">Sign in</a></li>
						</ul>
					</section>
				</div>
			</div>
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
											@foreach($popularVenue as $vanue)
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
																@if(!empty($vanue->review))
																<div class="_25xMNiLip-SZ1zuCkSA7ge">
																	<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="">
																		@for($i=1;$i<=$vanue->review; $i++)
																		<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																		@endfor
																		@if(strpos($vanue->review, "." ) !== false)
																		<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																		@endif
																	</div>
																</div>
																@endif
																<span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">@if(!empty($vanue->total_review))  {{$vanue->total_review}} reviews @else 0 review @endif</span>
															</div>
															<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">{{$vanue->suburb}}</span></div>
														</div>
													</div>
												</a>
												</li>
												@endforeach
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
											@foreach($placeNearVenue as $value)
											<li class="_3x_WHYdFEVH49S9EezWxHm _3QgH7SeBnEz7HBmivtwX19 impression-tracked"><a href="#" target="_blank" rel="noopener noreferrer" class="_1ozgPFOzhQhRC0HPUmgKlp">
													<div class="_2l69Ky2K7XCfLJSd5-EHK _3Ha4YEwF4qWJ-80ufIOUfz">
														@if(!empty($value->venue_image_url))
															<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url({{$value->venue_image_url}})"></div>
														@else
															<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url('plugins/images/dinetime/logo.png')"></div>
														@endif
														<div class="_3Ff_-vwjff6aEARttMhuUB _1So4oyClZYPFQKuiqAQvqO">
															<h3 class="_19Z-zMmJ8k0VlTxMrRH5e7 _12PdXDtY0HRmiCmq9eSwcG">{{$value->venue_name}}</h3>
															<div class="QW9338a-APoWav3K944Aw">
																@if(!empty($value->review))
																<div class="_25xMNiLip-SZ1zuCkSA7ge">
																	<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="">
																		@for($i=1;$i<=$value->review; $i++)
																		<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																		@endfor
																		@if(strpos($value->review, "." ) !== false)
																		<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																		@endif
																	</div>
																</div>
																@endif
																<span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">@if(!empty($value->total_review))  {{$value->total_review}} reviews @else 0 review @endif</span>
															</div>
															<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">{{$value->suburb}}</span></div>
														</div>
													</div>
												</a>
												</li>
												@endforeach
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
											@foreach($topPickVenues as $value)
											<li class="_3x_WHYdFEVH49S9EezWxHm _3QgH7SeBnEz7HBmivtwX19 impression-tracked"><a href="#" target="_blank" rel="noopener noreferrer" class="_1ozgPFOzhQhRC0HPUmgKlp">
													<div class="_2l69Ky2K7XCfLJSd5-EHK _3Ha4YEwF4qWJ-80ufIOUfz">
														@if(!empty($value->venue_image_url))
															<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url({{$value->venue_image_url}})"></div>
														@else
															<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url('plugins/images/dinetime/logo.png')"></div>
														@endif
														<div class="_3Ff_-vwjff6aEARttMhuUB _1So4oyClZYPFQKuiqAQvqO">
															<h3 class="_19Z-zMmJ8k0VlTxMrRH5e7 _12PdXDtY0HRmiCmq9eSwcG">{{$value->venue_name}}</h3>
															<div class="QW9338a-APoWav3K944Aw">
																@if(!empty($value->review))
																<div class="_25xMNiLip-SZ1zuCkSA7ge">
																	<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="">
																		@for($i=1;$i<=$value->review; $i++)
																		<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																		@endfor
																		@if(strpos($value->review, "." ) !== false)
																		<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																		@endif
																	</div>
																</div>
																@endif
																<span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">@if(!empty($value->total_review))  {{$value->total_review}} reviews @else 0 review @endif</span>
															</div>
															<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">{{$value->suburb}}</span></div>
														</div>
													</div>
												</a>
												</li>
												@endforeach
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
											@foreach($allVenues as $value)
											<li class="_3x_WHYdFEVH49S9EezWxHm _3QgH7SeBnEz7HBmivtwX19 impression-tracked"><a href="#" target="_blank" rel="noopener noreferrer" class="_1ozgPFOzhQhRC0HPUmgKlp">
													<div class="_2l69Ky2K7XCfLJSd5-EHK _3Ha4YEwF4qWJ-80ufIOUfz">
														@if(!empty($value->venue_image_url))
															<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url({{$value->venue_image_url}})"></div>
														@else
															<div class="qoWLUCzpjD1za358vj4mR" style="background-image:url('plugins/images/dinetime/logo.png')"></div>
														@endif
														<div class="_3Ff_-vwjff6aEARttMhuUB _1So4oyClZYPFQKuiqAQvqO">
															<h3 class="_19Z-zMmJ8k0VlTxMrRH5e7 _12PdXDtY0HRmiCmq9eSwcG">{{$value->venue_name}}</h3>
															<div class="QW9338a-APoWav3K944Aw">
																@if(!empty($value->review))
																<div class="_25xMNiLip-SZ1zuCkSA7ge">
																	<div class="_2IMP-CK1uNe12eCxaNLqbL" aria-label="">
																		@for($i=1;$i<=$value->review; $i++)
																		<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1J28HXkF9OXU_OaZfUmxou #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																		@endfor
																		@if(strpos($value->review, "." ) !== false)
																		<div class="_2UvC6jGDOaDUaN4lDzrERj"><i class="_1h89tIvK1Zm7zGJiJKLt-G #da3743" aria-hidden="true" tab-index="-1" focusable="no"></i></div>
																		@endif
																	</div>
																</div>
																@endif
																<span class="_3OyqNtiqTfiRI7Wxdogeko G1kfyull_V3y-AuTlAlGm">@if(!empty($value->total_review))  {{$value->total_review}} reviews @else 0 review @endif</span>
															</div>
															<div class="_1UZmCsXIRz_1737RjSc4KK"><span class="_3XUkCmVe7o-TXQonajAJih">{{$value->suburb}}</span></div>
														</div>
													</div>
												</a>
												</li>
												@endforeach
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
</body>

</html>