<!DOCTYPE html>
<html lang="en">

<head>

	<title>AtoC — Africa to China</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Main Font -->
	<script src="/olympus_assets/js/webfontloader.min.js"></script>


	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="/olympus_assets/Bootstrap/dist/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="/olympus_assets/Bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/olympus_assets/Bootstrap/dist/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="/olympus_assets/Bootstrap/css/googlefonts.css" />
	<!-- Main Styles CSS -->
	<link rel="stylesheet" type="text/css" href="/olympus_assets/css/main.min.css">
	<link rel="stylesheet" type="text/css" href="/olympus_assets/css/fonts.min.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">

	<link rel="shortcut icon" type="image/x-icon" href="/atoc_assets/images/favicon.png">

</head>

<body>



	<div id="app">
		<!-- Header-BP -->

		<header class="header" id="site-header">

			<div class="page-title">
				<a href="/">
					<img src="/img/logo.png" style="height:40px; margin-top:-10px" />
				</a>
			</div>

			<div class="header-content-wrapper">
				<form class="search-bar w-search notification-list friend-requests">
					<div class="form-group with-button">
						<input class="form-control js-user-search" placeholder="Search here people or pages..." type="text" style="background: transparent;">
						<button>
							<svg class="olymp-magnifying-glass-icon">
								<use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use>
							</svg>
						</button>
					</div>
				</form>

				<a href="/comp/list" class="link-find-friend">Find Companies</a>

				<div class="control-block" v-if="isLoggedIn()">


					<div class="control-icon more has-items">
						<svg class="olymp-chat---messages-icon">
							<use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use>
						</svg>
						<div class="label-avatar bg-purple">1</div>

						<div class="more-dropdown more-with-triangle triangle-top-center">
							<div class="ui-block-title ui-block-title-small">
								<h6 class="title">Chat / Messages</h6>
								<a href="#">Mark all as read</a>
								<a href="#">Settings</a>
							</div>

							<div class="mCustomScrollbar" data-mcs-theme="dark">
								<ul class="notification-list chat-message">
									<li class="message-unread">
										COMING SOON
									</li>
								</ul>
							</div>

							<a href="/chat/messages" class="view-all bg-purple">View All Messages</a>
						</div>
					</div>

					<div class="control-icon more has-items">
						<svg class="olymp-thunder-icon">
							<use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-thunder-icon"></use>
						</svg>

						<div class="label-avatar bg-primary">1</div>

						<div class="more-dropdown more-with-triangle triangle-top-center">
							<div class="ui-block-title ui-block-title-small">
								<h6 class="title">Notifications</h6>
								<a href="#">Mark all as read</a>
								<a href="#">Settings</a>
							</div>

							<div class="mCustomScrollbar" data-mcs-theme="dark">
								<ul class="notification-list">
									<li class="notification-unread notification">
										COMING SOON
									</li>

								</ul>
							</div>

							<a href="/notifications" class="view-all bg-primary">View All Notifications</a>
						</div>
					</div>

					<div class="author-page author vcard inline-items more">
						<div class="author-thumb">
							<img alt="author" :src="getHostProfile()" class="avatar" style="width:40px; height:40px">
							<span class="icon-status online"></span>
							<div class="more-dropdown more-with-triangle">
								<div class="mCustomScrollbar" data-mcs-theme="dark">
									<div class="ui-block-title ui-block-title-small">
										<h6 class="title">Your Account</h6>
									</div>

									<ul class="account-settings">
										<li>
											<a href="/profile">

												<svg class="olymp-menu-icon">
													<use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-menu-icon"></use>
												</svg>

												<span>Profile</span>
											</a>
										</li>
										<li>
											<a href="#" @click.prevent="logoutHost">
												<svg class="olymp-logout-icon">
													<use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-logout-icon"></use>
												</svg>

												<span>Log Out</span>
											</a>
										</li>
									</ul>
									<hr>
									<div class="text-center">
										<h6 class="title"><b><u>About AtoC</u></b></h6>
									</div>

									<ul>
										<li>
											<a href="https://atoc.drongo.tech">
												<span>Terms and Conditions</span>
											</a>
										</li>
										<li>
											<a href="https://atoc.drongo.tech">
												<span>FAQs</span>
											</a>
										</li>
										<li>
											<a href="https://drongo.tech/careers/employer/atoc/">
												<span>Careers</span>
											</a>
										</li>
										<li>
											<a href="https://atoc.drongo.tech">
												<span>Contact</span>
											</a>
										</li>
									</ul>
								</div>

							</div>
						</div>
						<a href="/profile" class="author-name fn">
							<div class="author-title">
								@{{shortenName(getHostName())}} <svg class="olymp-dropdown-arrow-icon">
									<use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use>
								</svg>
							</div>
							<span class="author-subtitle"> </span>
						</a>
					</div>

				</div>
				<div class="control-block" v-if="!isLoggedIn()" style="margin-top: 5px;">
					<a href="/register" class="btn btn-primary mr-2">Register</a>
					<a href="/login" class="btn btn-success">Login</a>
				</div>
			</div>

		</header>

		<!-- ... end Header-BP -->


		<!-- Responsive Header-BP -->

		<header class="header header-responsive" id="site-header-responsive">

			<div class="header-content-wrapper">
				<ul class="nav nav-tabs mobile-app-tabs" role="tablist">


					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#chat" role="tab">
							<div class="control-icon has-items">
								<svg class="olymp-chat---messages-icon">
									<use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use>
								</svg>
								<div class="label-avatar bg-purple">1</div>
							</div>
						</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#notification" role="tab">
							<div class="control-icon has-items">
								<svg class="olymp-thunder-icon">
									<use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-thunder-icon"></use>
								</svg>
								<div class="label-avatar bg-primary">1</div>
							</div>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#profile" role="tab">
							<div class="control-icon has-items">
								<img src="/img/user_icon.png" style="height:35px"/>
							</div>
						</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#search" role="tab">
							<svg class="olymp-magnifying-glass-icon">
								<use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use>
							</svg>
							<svg class="olymp-close-icon">
								<use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-close-icon"></use>
							</svg>
						</a>
					</li>
				</ul>
			</div>

			<!-- Tab panes -->
			<div class="tab-content tab-content-responsive">

				<div class="tab-pane " id="chat" role="tabpanel">

					<div class="mCustomScrollbar" data-mcs-theme="dark">
						<div class="ui-block-title ui-block-title-small">
							<h6 class="title">Chat / Messages</h6>
							<a href="#">Mark all as read</a>
							<a href="#">Settings</a>
						</div>

						<ul class="notification-list chat-message">
							<li>
								<div class="author-thumb">
									<img src="/img/logo.png" alt="author" style="height: 30px;">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">AtoC China</a>
									<span class="chat-message-item">
										COMING SOON
									</span>
									<span class="notification-date">
										<time class="entry-date updated" datetime="">
										- </time>
									</span>
								</div>
								<span class="notification-icon">
									<svg class="olymp-chat---messages-icon">
										<use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use>
									</svg>
								</span>
								<div class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
									</svg>
								</div>
							</li>

						</ul>

						<a href="#" class="view-all bg-purple">View All Messages</a>
					</div>

				</div>

				<div class="tab-pane " id="notification" role="tabpanel">

					<div class="mCustomScrollbar" data-mcs-theme="dark">
						<div class="ui-block-title ui-block-title-small">
							<h6 class="title">Notifications</h6>
							<a href="#">Mark all as read</a>
							<a href="#">Settings</a>
						</div>

						<ul class="notification-list">


							<li class="with-comment-photo">
								<div class="author-thumb">
									<img src="/img/logo.png" alt="author"
									style="height:30px;">
								</div>
								<div class="notification-event">

									COMING SOON
								</div>
								<span class="notification-icon">
									<svg class="olymp-comments-post-icon">
										<use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use>
									</svg>
								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon">
										<use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
									</svg>
									<svg class="olymp-little-delete">
										<use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-little-delete"></use>
									</svg>
								</div>
							</li>

						</ul>

						<a href="#" class="view-all bg-primary">View All Notifications</a>
					</div>

				</div>
				<div class="tab-pane " id="profile" role="tabpanel">

					<div class="mCustomScrollbar" data-mcs-theme="dark">

						<ul class="notification-list chat-message">
							<li>
								<div class="author-thumb">
									<img src="/img/logo.png" alt="author" style="height: 30px;">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Main Menu</a>
									<ul>
										<li>
											<a href="/">
												<span class="chat-message-item">
													<i class="fas fa-home"></i>
													Home
												</span>
											</a>
										</li>
										<li>
											<a href="/profile">
												<span class="chat-message-item">
													<i class="fas fa-user"></i>
													Profile
												</span>
											</a>
										</li>
										<li>
											<a href="/">
												<span class="chat-message-item">
													<i class="fas fa-user"></i>
													Log out
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>

						</ul>

						<a href="#" class="view-all bg-purple">View All Messages</a>
					</div>

				</div>
				<div class="tab-pane " id="search" role="tabpanel">


					<form class="search-bar w-search notification-list friend-requests">
						<div class="form-group with-button">
							<input class="form-control js-user-search" placeholder="Search here people or pages..." type="text">
						</div>
					</form>


				</div>

			</div>
			<!-- ... end  Tab panes -->

		</header>

		<!-- ... end Responsive Header-BP -->
		<div class="header-spacer"></div>


		<div class="container">

			<div class="loaderHolder" v-if="showLoader">
				<loader v-bind="Loader"></loader>
			</div>

			<!-- Errormodal -->
			<error v-if="errorModal" v-bind="errorObject" v-on:close-error-modal="disMissErrorModel"></error>
			<div class="row">

				<!-- Main Content -->

				@yield("body")

			</div>
		</div>


		<!-- Window-popup Update Header Photo -->



		<a class="back-to-top" href="#">
			<img src="/olympus_assets/svg-icons/back-to-top.svg" alt="arrow" class="back-icon">
		</a>




		<!-- Window-popup-CHAT for responsive min-width: 768px -->

		<div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">

			<div class="modal-content">
				<div class="modal-header">
					<span class="icon-status online"></span>
					<h6 class="title">Chat</h6>
					<div class="more">
						COMING SOON
					</div>
				</div>
				<div class="modal-body">
					<div class="mCustomScrollbar">
						<ul class="notification-list chat-message chat-message-field">
							<li>
								COMING SOON
							</li>

						</ul>
					</div>

					<form class="need-validation">

						<div class="form-group label-floating is-empty">
							<label class="control-label">Press enter to post...</label>
							<textarea class="form-control" placeholder=""></textarea>
							<div class="add-options-message">
								<a href="#" class="options-message">
									<svg class="olymp-computer-icon">
										<use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-computer-icon"></use>
									</svg>
								</a>
								<div class="options-message smile-block">

									<svg class="olymp-happy-sticker-icon">
										<use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-happy-sticker-icon"></use>
									</svg>

									<ul class="more-dropdown more-with-triangle triangle-bottom-right">
										<li>
											<a href="#">
												<img src="/olympus_assets/img/icon-chat1.png" alt="icon">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/olympus_assets/img/icon-chat2.png" alt="icon">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/olympus_assets/img/icon-chat3.png" alt="icon">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/olympus_assets/img/icon-chat4.png" alt="icon">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/olympus_assets/img/icon-chat5.png" alt="icon">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/olympus_assets/img/icon-chat6.png" alt="icon">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/olympus_assets/img/icon-chat7.png" alt="icon">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/olympus_assets/img/icon-chat8.png" alt="icon">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/olympus_assets/img/icon-chat9.png" alt="icon">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/olympus_assets/img/icon-chat10.png" alt="icon">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/olympus_assets/img/icon-chat11.png" alt="icon">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/olympus_assets/img/icon-chat12.png" alt="icon">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/olympus_assets/img/icon-chat13.png" alt="icon">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/olympus_assets/img/icon-chat14.png" alt="icon">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/olympus_assets/img/icon-chat15.png" alt="icon">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/olympus_assets/img/icon-chat16.png" alt="icon">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/olympus_assets/img/icon-chat17.png" alt="icon">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/olympus_assets/img/icon-chat18.png" alt="icon">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/olympus_assets/img/icon-chat19.png" alt="icon">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/olympus_assets/img/icon-chat20.png" alt="icon">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/olympus_assets/img/icon-chat21.png" alt="icon">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/olympus_assets/img/icon-chat22.png" alt="icon">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/olympus_assets/img/icon-chat23.png" alt="icon">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/olympus_assets/img/icon-chat24.png" alt="icon">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/olympus_assets/img/icon-chat25.png" alt="icon">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/olympus_assets/img/icon-chat26.png" alt="icon">
											</a>
										</li>
										<li>
											<a href="#">
												<img src="/olympus_assets/img/icon-chat27.png" alt="icon">
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>

					</form>
				</div>
			</div>

		</div>

		<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->
	</div>
	<!--- the end app -->
	<!-- JS Scripts -->
	<script src="/olympus_assets/js/jquery-3.2.1.js"></script>
	<script src="/olympus_assets/js/jquery.appear.js"></script>
	<script src="/olympus_assets/js/jquery.mousewheel.js"></script>
	<script src="/olympus_assets/js/perfect-scrollbar.js"></script>
	<script src="/olympus_assets/js/jquery.matchHeight.js"></script>
	<script src="/olympus_assets/js/svgxuse.js"></script>
	<script src="/olympus_assets/js/imagesloaded.pkgd.js"></script>
	<script src="/olympus_assets/js/Headroom.js"></script>
	<script src="/olympus_assets/js/velocity.js"></script>
	<script src="/olympus_assets/js/ScrollMagic.js"></script>
	<script src="/olympus_assets/js/jquery.waypoints.js"></script>
	<script src="/olympus_assets/js/jquery.countTo.js"></script>
	<script src="/olympus_assets/js/popper.min.js"></script>
	<script src="/olympus_assets/js/material.min.js"></script>
	<script src="/olympus_assets/js/bootstrap-select.js"></script>
	<script src="/olympus_assets/js/smooth-scroll.js"></script>
	<script src="/olympus_assets/js/selectize.js"></script>
	<script src="/olympus_assets/js/swiper.jquery.js"></script>
	<script src="/olympus_assets/js/moment.js"></script>
	<script src="/olympus_assets/js/daterangepicker.js"></script>
	<script src="/olympus_assets/js/simplecalendar.js"></script>
	<script src="/olympus_assets/js/fullcalendar.js"></script>
	<script src="/olympus_assets/js/isotope.pkgd.js"></script>
	<script src="/olympus_assets/js/ajax-pagination.js"></script>
	<script src="/olympus_assets/js/Chart.js"></script>
	<script src="/olympus_assets/js/chartjs-plugin-deferred.js"></script>
	<script src="/olympus_assets/js/circle-progress.js"></script>
	<script src="/olympus_assets/js/loader.js"></script>
	<script src="/olympus_assets/js/run-chart.js"></script>
	<script src="/olympus_assets/js/jquery.magnific-popup.js"></script>
	<script src="/olympus_assets/js/jquery.gifplayer.js"></script>
	<script src="/olympus_assets/js/mediaelement-and-player.js"></script>
	<script src="/olympus_assets/js/mediaelement-playlist-plugin.min.js"></script>

	<script src="/olympus_assets/js/base-init.js"></script>
	<script defer src="/olympus_assets/fonts/fontawesome-all.js"></script>

	<script src="/olympus_assets/Bootstrap/dist/js/bootstrap.bundle.js"></script>
	@php
	$hash1 = hash('md5', file_get_contents(public_path().'/js/required_scripts.js'));
	$hash2 = hash('md5', file_get_contents(public_path().'/js/required_components.js'));
	$required_scripts = '/js/required_scripts.js?'.$hash1;
	$required_components = '/js/required_components.js?'.$hash2;
	@endphp
	<script src="{{$required_scripts}}" type="text/javascript"></script>
	<script src="{{$required_components}}" type="text/javascript"></script>
	@yield("vuescript")

</body>

</html>
