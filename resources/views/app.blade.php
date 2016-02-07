<!DOCTYPE html>
<html>

<head>
	<title>Linker</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="{{ asset('/img/favicon.png') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<link rel="stylesheet" href="{{ asset('/style/bootstrap.min.css') }}">

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-3dkvEK0WLHRJ7/Csr0BZjAWxERc5WH7bdeUya2aXxdU= sha512-+L4yy6FRcDGbXJ9mPG8MT/3UCDzwR9gPeyFNMCtInsol++5m3bk2bXWKdZjvybmohrAsn3Ua5x8gfLnbE1YkOg==" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('/style/icon.css') }}">
	<link rel="stylesheet" href="{{ asset('/style/loader.css') }}">
	<link rel="stylesheet" href="{{ asset('/style/idangerous.swiper.css') }}">
	<link rel="stylesheet" href="{{ asset('/style/jquery-ui.css') }}">
	<link rel="stylesheet" href="{{ asset('/style/stylesheet.css') }}">

	<!--[if lt IE 10]>
	<link rel="stylesheet" type="text/css" href="{{ asset('/style/ie-9.css') }}" />
	<![endif]-->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body class="body-color2">

<!-- THE LOADER -->

<div class="be-loader">
	<div class="spinner">
{{--		<img src="{{ asset('/img/logo-loader.png') }}"  alt="">--}}
		<p class="circle">
			  <span class="ouro">
			    <span class="left"><span class="anim"></span></span>
			    <span class="right"><span class="anim"></span></span>
			  </span>
		</p>
	</div>
</div>
<!-- THE HEADER -->
<header>
	<div class="container-fluid custom-container">
		<div class="row no_row row-header">
			<div class="brand-be">
				<a href="{{ url('/') }}">
					<img class="be_logo" src="{{ asset('/img/logo-green.png') }}" alt="logo2">
				</a>
			</div>
			@if (Auth::guest())
				<div class="login-header-block">
					<div class="login_block">
						<a class="btn-login btn color-1 size-2 hover-2" href="#" ><i class="fa fa-user"></i>
							Log in</a>
					</div>
				</div>
			@else
				<div class="header-menu-block">
					<button class="cmn-toggle-switch cmn-toggle-switch__htx"><span></span></button>
					<ul class="header-menu" id="one">
						<li><a href="activity.html">Activity</a></li>
						<li><a href="search.html">Discover</a>
							<ul>
								<li><a href="search.html">Explore</a></li>
								<li><a href="people.html">People</a></li>
								<li><a href="gallery.html">Galleries</a></li>
							</ul>
						</li>
						<li><a href="author-login.html">My Portfolio</a></li>
						<li><a href="site-map.html">Site Map</a></li>
						<li><a href="organization.html">Organization</a></li>
						<li id="ad-work-li"><a id="add-work-btn" class="btn color-1"><i class="fa fa-plus"></i></a>
							<div id="add-link">

									<div class="form-group">
										<div class="input-group">
											<input type="text" class="form-control link-value">
											<span class="add-link input-group-addon">Add</span>
										</div>
									</div>
							
							</div>
						</li>
					</ul>
				</div>
				<div class="login-header-block">
					<div class="login_block">
						<div class="noto-popup messages-block">
							<div class="m-close"><i class="fa fa-times"></i></div>
							<div class="noto-label">Your Messages <span class="noto-label-links"><a href="messages-2.html">compose</a><a href="messages.html">View all messages</a></span></div>
							<div class="noto-body">
								<div class="noto-entry style-2">
									<div class="noto-content clearfix">
										<div class="noto-img">
											<a href="page1.html">
												<img src="img/c1.png" alt="" class="be-ava-comment">
											</a>
										</div>
										<div class="noto-text">
											<div class="noto-text-top">
												<span class="noto-name"><a href="page1.html">Ravi Sah</a></span>
												<span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
											</div>
											<div class="noto-message">Sed velit mauris, pulvinar sit amet accumsan vitae, egestas, pulvinar sit amet accumsan vitae, egestas</div>
										</div>
									</div>
								</div>
								<div class="noto-entry style-2">
									<div class="noto-content clearfix">
										<div class="noto-img">
											<a href="page1.html">
												<img src="img/c6.jpg" alt="" class="be-ava-comment">
											</a>
										</div>
										<div class="noto-text">
											<div class="noto-text-top">
												<span class="noto-name"><a href="page1.html">Louis Paquet</a></span>
												<span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
											</div>
											<div class="noto-message">
												Pellentesque habitant morbi tristique senectus et netus tristique senectus
											</div>
										</div>
									</div>
								</div>
								<div class="noto-entry style-2">
									<div class="noto-content clearfix">
										<div class="noto-img">
											<a href="page1.html">
												<img src="img/c9.jpg" alt="" class="be-ava-comment">
											</a>
										</div>
										<div class="noto-text">
											<div class="noto-text-top">
												<span class="noto-name"><a href="page1.html">Cüneyt ŞEN</a></span>
												<span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
											</div>
											<div class="noto-message">
												Sed id erat vitae libero malesuada dictum vel sit amet eros
											</div>
										</div>
									</div>
								</div>
								<div class="noto-entry style-2">
									<div class="noto-content clearfix">
										<div class="noto-img">
											<a href="page1.html">
												<img src="img/c10.jpg" alt="" class="be-ava-comment">
											</a>
										</div>
										<div class="noto-text">
											<div class="noto-text-top">
												<span class="noto-name"><a href="page1.html">Tomasz Mazurczak</a></span>
												<span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
											</div>
											<div class="noto-message">
												In molestie libero quis cursus ullamcorper eu rhoncus magna
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="be-drop-down login-user-down">
							<img class="login-user" src="img/login.jpg" alt="">
							<span class="be-dropdown-content">Hi, <span>{!! Auth::user()->name !!}</span></span>
							<div class="drop-down-list a-list">
								<a href="activity.html">My Portfolio</a>
								<a href="statictics.html">Statistics </a>
								<a href="about-us.html">Work Experience</a>
								<a href="author-edit.html">Account Settings</a>
								<a href="{{ url('auth/logout') }}">Logout</a>
							</div>
						</div>
					</div>
				</div>

			@endif

		</div>
	</div>
</header>




	@yield('content')
			<!-- THE FOOTER -->
<footer>
	<div class="footer_slider">
		<div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="responsive" data-xs-slides="4" data-sm-slides="8" data-md-slides="14" data-lg-slides="19" data-add-slides="19">
			<div class="swiper-wrapper">
				<div class="swiper-slide active" data-val="0">

					<a href="gallery.html">				<img class="img-responsive img-full" src="{{ asset('/img/f1.jpg') }}" alt="">
					</a></div>
				<div class="swiper-slide" data-val="1">
					<a href="gallery.html">

						<img class="img-responsive img-full" src="{{ asset('/img/f2.jpg') }}" alt="">
					</a></div>
				<div class="swiper-slide" data-val="2">
					<a href="gallery.html">

						<img class="img-responsive img-full" src="{{ asset('/img/f3.jpg') }}" alt="">
					</a></div>
				<div class="swiper-slide" data-val="3">
					<a href="gallery.html">

						<img class="img-responsive img-full" src="{{ asset('/img/f4.jpg') }}" alt="">
					</a></div>
				<div class="swiper-slide" data-val="4">
					<a href="gallery.html">

						<img class="img-responsive img-full" src="{{ asset('/img/f5.jpg') }}" alt="">
					</a></div>
				<div class="swiper-slide" data-val="5">
					<a href="gallery.html">

						<img class="img-responsive img-full" src="{{ asset('/img/f6.jpg') }}" alt="">
					</a></div>
				<div class="swiper-slide" data-val="6">
					<a href="gallery.html">

						<img class="img-responsive img-full" src="{{ asset('/img/f7.jpg') }}" alt="">
					</a></div>
				<div class="swiper-slide" data-val="7">
					<a href="gallery.html">

						<img class="img-responsive img-full" src="{{ asset('/img/f8.jpg') }}" alt="">
					</a></div>
				<div class="swiper-slide" data-val="8">
					<a href="gallery.html">

						<img class="img-responsive img-full" src="{{ asset('/img/f9.jpg') }}" alt="">
					</a></div>
				<div class="swiper-slide" data-val="9">
					<a href="gallery.html">

						<img class="img-responsive img-full" src="{{ asset('/img/f10.jp') }}g" alt="">
					</a></div>
				<div class="swiper-slide" data-val="10">
					<a href="gallery.html">

						<img class="img-responsive img-full" src="{{ asset('/img/f11.jp') }}g" alt="">
					</a></div>
				<div class="swiper-slide" data-val="11">
					<a href="gallery.html">

						<img class="img-responsive img-full" src="{{ asset('/img/f12.jp') }}g" alt="">
					</a></div>
				<div class="swiper-slide" data-val="12">
					<a href="gallery.html">

						<img class="img-responsive img-full" src="{{ asset('/img/f13.jp') }}g" alt="">
					</a></div>
				<div class="swiper-slide" data-val="13">
					<a href="gallery.html">

						<img class="img-responsive img-full" src="{{ asset('/img/f14.jp') }}g" alt="">
					</a></div>
				<div class="swiper-slide" data-val="14">
					<a href="gallery.html">

						<img class="img-responsive img-full" src="{{ asset('/img/f15.jp') }}g" alt="">
					</a></div>
				<div class="swiper-slide" data-val="15">
					<a href="gallery.html">

						<img class="img-responsive img-full" src="{{ asset('/img/f16.jp') }}g" alt="">
					</a></div>
				<div class="swiper-slide" data-val="16">
					<a href="gallery.html">

						<img class="img-responsive img-full" src="{{ asset('/img/f17.jp') }}g" alt="">
					</a></div>
				<div class="swiper-slide" data-val="17">
					<a href="gallery.html">

						<img class="img-responsive img-full" src="{{ asset('/img/f18.jp') }}g" alt="">
					</a></div>
				<div class="swiper-slide" data-val="18">
					<a href="gallery.html">

						<img class="img-responsive img-full" src="{{ asset('/img/f19.jp') }}g" alt="">
					</a></div>
				<div class="swiper-slide" data-val="19">
					<a href="gallery.html">

						<img class="img-responsive img-full" src="{{ asset('/img/f1.jpg') }}" alt="">
					</a></div>
				<div class="swiper-slide" data-val="20">
					<a href="gallery.html">

						<img class="img-responsive img-full" src="{{ asset('/img/f2.jpg') }}" alt="">
					</a></div>
				<div class="swiper-slide" data-val="21">
					<a href="gallery.html">

						<img class="img-responsive img-full" src="{{ asset('/img/f3.jpg') }}" alt="">
					</a></div>
				<div class="swiper-slide" data-val="22">
					<a href="gallery.html">

						<img class="img-responsive img-full" src="{{ asset('/img/f4.jpg') }}" alt="">
					</a></div>
				<div class="swiper-slide" data-val="23">
					<a href="gallery.html">

						<img class="img-responsive img-full" src="{{ asset('/img/f5.jpg') }}" alt="">
					</a></div>
			</div>
			<div class="pagination hidden"></div>
		</div>
	</div>
	<div class="footer-main">
		<div class="container-fluid custom-container">
			<div class="row">
				<div class="col-md-3 col-xl-4">
					<div class="footer-block">
						<h1 class="footer-title">About Us</h1>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
						<ul class="soc_buttons">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-xl-2">
					<div class="footer-block">
						<h1 class="footer-title">Some Links</h1>
						<div class="row footer-list-footer">
							<div class="col-md-6">
								<ul class="link-list">
									<li><a href="about-us.html">About Us</a></li>
									<li><a href="contact-us.html">Help</a></li>
									<li><a href="contact-us.html">Contacts</a></li>
									<li><a href="activity.html">Job</a></li>
									<li><a href="activity.html">Projets</a></li>
								</ul></div>
							<div class="col-md-6">
								<ul class="link-list">
									<li><a href="activity.html">New Works</a></li>
									<li><a href="author.html">Popular Authors</a></li>
									<li><a href="author.html">New Authors</a></li>
									<li><a href="people.html">Career</a></li>
									<li><a href="faq.html">FAQ</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 pull-right">
					<div class="footer-block">
						<h1 class="footer-title">Subscribe On Our News</h1>
						<form action="http://demo.nrgthemes.com/projects/nrgnetwork/" class="subscribe-form">
							<input type="text" placeholder="Yout Name" required>
							<div class="submit-block">
								<i class="fa fa-envelope-o"></i>
								<input type="submit" value="">
							</div>
						</form>
						<div class="soc-activity">
							<div class="soc_ico_triangle">
								<i class="fa fa-twitter"></i>
							</div>
							<div class="message-soc">
								<div class="date">16h ago</div>
								<a href="blog-detail-2.html" class="account">@faq</a> vestibulum accumsan est <a href="blog-detail-2.html" class="heshtag">blog-detail-2.htmlmalesuada</a> sem auctor, eu aliquet nisi ornare leo sit amet varius egestas.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container-fluid custom-container">
			<div class="col-md-12 footer-end clearfix">
				<div class="left">
					<span class="copy">© 2015. All rights reserved. <span class="white"><a href="#"> Linker</a></span></span>
					<span class="created">Created by <span class="white"><a href="#">Sergey Karakhanyan</a></span></span>
				</div>
				<div class="right">
					<a class="btn color-7 size-2 hover-9">About Us</a>
					<a class="btn color-7 size-2 hover-9">Help</a>
					<a class="btn color-7 size-2 hover-9">Privacy Policy</a>
				</div>
			</div>
		</div>
	</div>
</footer>

<div class="be-fixed-filter"></div>


	<!-- SCRIPTS	 -->
	<script src="{{ asset('/script/jquery-2.1.4.min.js') }}"></script>
	<script src="{{ asset('/script/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('/script/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/script/idangerous.swiper.min.js') }}"></script>
	<script src="{{ asset('/script/jquery.mixitup.js') }}"></script>
	<script src="{{ asset('/script/jquery.viewportchecker.min.js') }}"></script>
	<script src="{{ asset('/script/filters.js') }}"></script>
	<script src="{{ asset('/script/global.js') }}"></script>
	<script src="{{ asset('/script/scripts.js') }}"></script>

</body>

</html>