@extends('app')

@section('content')

<div id="content-block">
	<div class="head-bg">
		<div class="head-bg-img"></div>
		<div class="head-bg-content">
			<h1>Your Best Place to Save Anything You Like</h1>
			{{--<a class="btn color-1 size-1 hover-1" ><i class="fa fa-facebook"></i>sign up via facebook</a>--}}
			<a class="be-register btn color-3 size-1 hover-6"><i class="fa fa-lock"></i>sign up now</a>
		</div>
	</div>
	{{--<div class="container-fluid custom-container">--}}
		{{--<div class="row">--}}

			{{--<div class="col-md-2 left-feild">--}}
				{{--<div class="be-vidget">--}}
					{{--<h3 class="letf-menu-article">--}}
						{{--Most Popular Links--}}
					{{--</h3>--}}

				{{--</div>--}}
			{{--</div>--}}

			{{--<div class="col-md-10">--}}
				{{--<div id="container-mix"  class="row _post-container_">--}}
					{{--<div class="category-1 mix custom-column-5">--}}
						{{--<div class="be-post">--}}
							{{--<a href="page1.html" class="be-img-block">--}}
								{{--<img src="{{ asset('/img/p1.jpg') }}" alt="omg">--}}
							{{--</a>--}}
							{{--<a href="page1.html" class="be-post-title">The kitsch destruction of our world</a>--}}
								{{--<span>--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>,--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>--}}
								{{--</span>--}}
							{{--<div class="author-post">--}}
								{{--<img src="{{ asset('/img/a1.png') }}" alt="" class="ava-author">--}}
								{{--<span>by <a href="page1.html">Hoang Nguyen</a></span>--}}
							{{--</div>--}}
							{{--<div class="info-block">--}}
								{{--<span><i class="fa fa-thumbs-o-up"></i> 360</span>--}}
								{{--<span><i class="fa fa-eye"></i> 789</span>--}}
								{{--<span><i class="fa fa-comment-o"></i> 20</span>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
					{{--<div class="category-2 mix custom-column-5">--}}
						{{--<div class="be-post">--}}
							{{--<a href="page2.html" class="be-img-block">--}}
								{{--<img src="{{ asset('/img/p2.jpg') }}" alt="omg">--}}
							{{--</a>--}}
							{{--<a href="page2.html" class="be-post-title">Treebeard</a>--}}
								{{--<span>--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>,--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>--}}
								{{--</span>--}}
							{{--<div class="author-post">--}}
								{{--<img src="{{ asset('/img/a1.png') }}" alt="" class="ava-author">--}}
								{{--<span>by <a href="page2.html">Hoang Nguyen</a></span>--}}
							{{--</div>--}}
							{{--<div class="info-block">--}}
								{{--<span><i class="fa fa-thumbs-o-up"></i> 360</span>--}}
								{{--<span><i class="fa fa-eye"></i> 789</span>--}}
								{{--<span><i class="fa fa-comment-o"></i> 20</span>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
					{{--<div class="category-3 mix custom-column-5">--}}
						{{--<div class="be-post">--}}
							{{--<a href="page3.html" class="be-img-block">--}}
								{{--<img src="{{ asset('/img/p3.jpg') }}" alt="omg">--}}
							{{--</a>--}}
							{{--<a href="page3.html" class="be-post-title">Colors of Ramadan</a>--}}
								{{--<span>--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>,--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>--}}
								{{--</span>--}}
							{{--<div class="author-post">--}}
								{{--<img src="{{ asset('/img/a2.png') }}" alt="" class="ava-author">--}}
								{{--<span>by <a href="page3.html">Hoang Nguyen</a></span>--}}
							{{--</div>--}}
							{{--<div class="info-block">--}}
								{{--<span><i class="fa fa-thumbs-o-up"></i> 360</span>--}}
								{{--<span><i class="fa fa-eye"></i> 789</span>--}}
								{{--<span><i class="fa fa-comment-o"></i> 20</span>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
					{{--<div class="category-4 mix custom-column-5">--}}
						{{--<div class="be-post">--}}
							{{--<a href="page1.html" class="be-img-block">--}}
								{{--<img src="{{ asset('/img/p4.jpg') }}" alt="omg">--}}
							{{--</a>--}}
							{{--<a href="page1.html" class="be-post-title">Leaving Home - L'Officiel Ukraine</a>--}}
								{{--<span>--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>,--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>--}}
								{{--</span>--}}
							{{--<div class="author-post">--}}
								{{--<img src="{{ asset('/img/a3.png') }}" alt="" class="ava-author">--}}
								{{--<span>by <a href="page1.html">Hoang Nguyen</a></span>--}}
							{{--</div>--}}
							{{--<div class="info-block">--}}
								{{--<span><i class="fa fa-thumbs-o-up"></i> 360</span>--}}
								{{--<span><i class="fa fa-eye"></i> 789</span>--}}
								{{--<span><i class="fa fa-comment-o"></i> 20</span>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
					{{--<div class="category-5 mix custom-column-5">--}}
						{{--<div class="be-post">--}}
							{{--<a href="page2.html" class="be-img-block">--}}
								{{--<img src="{{ asset('/img/p5.jpg') }}" alt="omg">--}}
							{{--</a>--}}
							{{--<a href="page2.html" class="be-post-title">Drive Your World</a>--}}
								{{--<span>--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>,--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>--}}
								{{--</span>--}}
							{{--<div class="author-post">--}}
								{{--<img src="{{ asset('/img/a4.png') }}" alt="" class="ava-author">--}}
								{{--<span>by <a href="page2.html">Hoang Nguyen</a></span>--}}
							{{--</div>--}}
							{{--<div class="info-block">--}}
								{{--<span><i class="fa fa-thumbs-o-up"></i> 360</span>--}}
								{{--<span><i class="fa fa-eye"></i> 789</span>--}}
								{{--<span><i class="fa fa-comment-o"></i> 20</span>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
					{{--<div class="category-6 mix custom-column-5">--}}
						{{--<div class="be-post">--}}
							{{--<a href="page1.html" class="be-img-block">--}}
								{{--<img src="{{ asset('/img/p13.jp') }}g" alt="omg">--}}
							{{--</a>--}}
							{{--<a href="page1.html" class="be-post-title">Fran Ewald for The Diaries Project</a>--}}
								{{--<span>--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>,--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>--}}
								{{--</span>--}}
							{{--<div class="author-post">--}}
								{{--<img src="{{ asset('/img/a5.png') }}" alt="" class="ava-author">--}}
								{{--<span>by <a href="page1.html">Hoang Nguyen</a></span>--}}
							{{--</div>--}}
							{{--<div class="info-block">--}}
								{{--<span><i class="fa fa-thumbs-o-up"></i> 360</span>--}}
								{{--<span><i class="fa fa-eye"></i> 789</span>--}}
								{{--<span><i class="fa fa-comment-o"></i> 20</span>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
					{{--<div class="category-5 mix custom-column-5">--}}
						{{--<div class="be-post">--}}
							{{--<a href="page1.html" class="be-img-block">--}}
								{{--<img src="{{ asset('/img/p7.jpg') }}" alt="omg">--}}
							{{--</a>--}}
							{{--<a href="page1.html" class="be-post-title">raindrops monochrome</a>--}}
								{{--<span>--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>,--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>--}}
								{{--</span>--}}
							{{--<div class="author-post">--}}
								{{--<img src="{{ asset('/img/a6.png') }}" alt="" class="ava-author">--}}
								{{--<span>by <a href="page1.html">Hoang Nguyen</a></span>--}}
							{{--</div>--}}
							{{--<div class="info-block">--}}
								{{--<span><i class="fa fa-thumbs-o-up"></i> 360</span>--}}
								{{--<span><i class="fa fa-eye"></i> 789</span>--}}
								{{--<span><i class="fa fa-comment-o"></i> 20</span>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
					{{--<div class="category-3 mix custom-column-5">--}}
						{{--<div class="be-post">--}}
							{{--<a href="page3.html" class="be-img-block">--}}
								{{--<img src="{{ asset('/img/p8.jpg') }}" alt="omg">--}}
							{{--</a>--}}
							{{--<a href="page3.html" class="be-post-title">Racing Queensland</a>--}}
								{{--<span>--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>,--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>--}}
								{{--</span>--}}
							{{--<div class="author-post">--}}
								{{--<img src="{{ asset('/img/a7.png') }}" alt="" class="ava-author">--}}
								{{--<span>by <a href="page3.html">Hoang Nguyen</a></span>--}}
							{{--</div>--}}
							{{--<div class="info-block">--}}
								{{--<span><i class="fa fa-thumbs-o-up"></i> 360</span>--}}
								{{--<span><i class="fa fa-eye"></i> 789</span>--}}
								{{--<span><i class="fa fa-comment-o"></i> 20</span>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
					{{--<div class="category-2 mix custom-column-5">--}}
						{{--<div class="be-post">--}}
							{{--<a href="page1.html" class="be-img-block">--}}
								{{--<img src="{{ asset('/img/p9.jpg') }}" alt="omg">--}}
							{{--</a>--}}
							{{--<a href="page1.html" class="be-post-title">NAHA Finalist Hairstylist of the Year Allen Ruiz</a>--}}
								{{--<span>--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>,--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>--}}
								{{--</span>--}}
							{{--<div class="author-post">--}}
								{{--<img src="{{ asset('/img/a7.png') }}" alt="" class="ava-author">--}}
								{{--<span>by <a href="page1.html">Hoang Nguyen</a></span>--}}
							{{--</div>--}}
							{{--<div class="info-block">--}}
								{{--<span><i class="fa fa-thumbs-o-up"></i> 360</span>--}}
								{{--<span><i class="fa fa-eye"></i> 789</span>--}}
								{{--<span><i class="fa fa-comment-o"></i> 20</span>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
					{{--<div class="category-4 mix custom-column-5">--}}
						{{--<div class="be-post">--}}
							{{--<a href="page1.html" class="be-img-block">--}}
								{{--<img src="{{ asset('/img/p10.jp') }}g" alt="omg">--}}
							{{--</a>--}}
							{{--<a href="page1.html" class="be-post-title">tomorrow</a>--}}
								{{--<span>--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>,--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>--}}
								{{--</span>--}}
							{{--<div class="author-post">--}}
								{{--<img src="{{ asset('/img/a8.png') }}" alt="" class="ava-author">--}}
								{{--<span>by <a href="page1.html">Hoang Nguyen</a></span>--}}
							{{--</div>--}}
							{{--<div class="info-block">--}}
								{{--<span><i class="fa fa-thumbs-o-up"></i> 360</span>--}}
								{{--<span><i class="fa fa-eye"></i> 789</span>--}}
								{{--<span><i class="fa fa-comment-o"></i> 20</span>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
					{{--<div class="category-6 mix custom-column-5">--}}
						{{--<div class="be-post">--}}
							{{--<a href="page1.html" class="be-img-block">--}}
								{{--<img src="{{ asset('/img/p11.jp') }}g" alt="omg">--}}
							{{--</a>--}}
							{{--<a href="page1.html" class="be-post-title">Tropicalia</a>--}}
								{{--<span>--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>,--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>--}}
								{{--</span>--}}
							{{--<div class="author-post">--}}
								{{--<img src="{{ asset('/img/a5.png') }}" alt="" class="ava-author">--}}
								{{--<span>by <a href="page1.html">Hoang Nguyen</a></span>--}}
							{{--</div>--}}
							{{--<div class="info-block">--}}
								{{--<span><i class="fa fa-thumbs-o-up"></i> 360</span>--}}
								{{--<span><i class="fa fa-eye"></i> 789</span>--}}
								{{--<span><i class="fa fa-comment-o"></i> 20</span>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
					{{--<div class="category-2 mix custom-column-5">--}}
						{{--<div class="be-post">--}}
							{{--<a href="page1.html" class="be-img-block">--}}
								{{--<img src="{{ asset('/img/p12.jp') }}g" alt="omg">--}}
							{{--</a>--}}
							{{--<a href="page1.html" class="be-post-title">Face</a>--}}
								{{--<span>--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>,--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>--}}
								{{--</span>--}}
							{{--<div class="author-post">--}}
								{{--<img src="{{ asset('/img/a6.png') }}" alt="" class="ava-author">--}}
								{{--<span>by <a href="page1.html">Hoang Nguyen</a></span>--}}
							{{--</div>--}}
							{{--<div class="info-block">--}}
								{{--<span><i class="fa fa-thumbs-o-up"></i> 360</span>--}}
								{{--<span><i class="fa fa-eye"></i> 789</span>--}}
								{{--<span><i class="fa fa-comment-o"></i> 20</span>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
					{{--<div class="category-1 mix custom-column-5">--}}
						{{--<div class="be-post">--}}
							{{--<a href="page1.html" class="be-img-block">--}}
								{{--<img src="{{ asset('/img/p13.jp') }}g" alt="omg">--}}
							{{--</a>--}}
							{{--<a href="page1.html" class="be-post-title">Stay Ahead Series</a>--}}
								{{--<span>--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>,--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>--}}
								{{--</span>--}}
							{{--<div class="author-post">--}}
								{{--<img src="{{ asset('/img/a5.png') }}" alt="" class="ava-author">--}}
								{{--<span>by <a href="page1.html">Hoang Nguyen</a></span>--}}
							{{--</div>--}}
							{{--<div class="info-block">--}}
								{{--<span><i class="fa fa-thumbs-o-up"></i> 360</span>--}}
								{{--<span><i class="fa fa-eye"></i> 789</span>--}}
								{{--<span><i class="fa fa-comment-o"></i> 20</span>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
					{{--<div class="category-3 mix custom-column-5">--}}
						{{--<div class="be-post">--}}
							{{--<a href="page1.html" class="be-img-block">--}}
								{{--<img src="{{ asset('/img/p14.jp') }}g" alt="omg">--}}
							{{--</a>--}}
							{{--<a href="page1.html" class="be-post-title">Faber-Castell / Psychological Problems</a>--}}
								{{--<span>--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>,--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>--}}
								{{--</span>--}}
							{{--<div class="author-post">--}}
								{{--<img src="{{ asset('/img/a1.png') }}" alt="" class="ava-author">--}}
								{{--<span>by <a href="page1.html">Hoang Nguyen</a></span>--}}
							{{--</div>--}}
							{{--<div class="info-block">--}}
								{{--<span><i class="fa fa-thumbs-o-up"></i> 360</span>--}}
								{{--<span><i class="fa fa-eye"></i> 789</span>--}}
								{{--<span><i class="fa fa-comment-o"></i> 20</span>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
					{{--<div class="category-1 mix custom-column-5">--}}
						{{--<div class="be-post">--}}
							{{--<a href="page1.html" class="be-img-block">--}}
								{{--<img src="{{ asset('/img/p15.jp') }}g" alt="omg">--}}
							{{--</a>--}}
							{{--<a href="page1.html" class="be-post-title">Garry Simpson - Bridges - Intelligent Life Magazine</a>--}}
								{{--<span>--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">Interaction Design</a>,--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">UI/UX</a>,--}}
									{{--<a href="blog-detail-2.html" class="be-post-tag">Web Design</a>--}}
								{{--</span>--}}
							{{--<div class="author-post">--}}
								{{--<img src="{{ asset('/img/a9.png') }}" alt="" class="ava-author">--}}
								{{--<span>by <a href="page1.html">Hoang Nguyen</a></span>--}}
							{{--</div>--}}
							{{--<div class="info-block">--}}
								{{--<span><i class="fa fa-thumbs-o-up"></i> 360</span>--}}
								{{--<span><i class="fa fa-eye"></i> 789</span>--}}
								{{--<span><i class="fa fa-comment-o"></i> 20</span>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}

		{{--</div>--}}
	{{--</div>--}}
</div>

<div class="large-popup login">
	<div class="large-popup-fixed"></div>
	<div class="container large-popup-container">
		<div class="row">
			<div class="col-md-8 col-md-push-2 col-lg-6 col-lg-push-3  large-popup-content">
				<div class="row">
					<div class="col-md-12">
						<i class="fa fa-times close-button"></i>
						<h5 class="large-popup-title">Log in</h5>
					</div>
					<form  class="form-horizontal popup-input-search" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="col-md-6">
							<input class="input-signtype" type="email" required="" placeholder="Your email" name="email" value="{{ old('email') }}">
						</div>
						<div class="col-md-6">
							<input class="input-signtype" type="password" required="" placeholder="Password" name="password">
						</div>
						<div class="col-xs-6">
							<div class="be-checkbox">
								<label class="check-box">
									<input class="checkbox-input" name="remember" type="checkbox" value=""> <span class="check-box-sign"></span>
								</label>
								<span class="large-popup-text">
									Stay signed in
								</span>
							</div>

							<a href="{{ url('/password/email') }}" class="link-large-popup">Forgot password?</a>
						</div>
						<div class="col-xs-6 for-signin">
							<input type="submit" class="be-popup-sign-button" value="SIGN IN">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="large-popup register">
	<div class="large-popup-fixed"></div>
	<div class="container large-popup-container">
		<div class="row">
			<div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2 large-popup-content">
				<div class="row">
					<div class="col-md-12">
						<i class="fa fa-times close-button"></i>
						<h5 class="large-popup-title">Register</h5>
					</div>
					<form role="form" method="POST" action="{{ url('/auth/register') }}" class="popup-input-search">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="col-md-6">
							<input class="input-signtype" type="text" required="" placeholder="First Name" name="name" value="{{ old('name') }}">
						</div>
						<div class="col-md-6">
							<input class="input-signtype" type="text" required="" placeholder="Last Name"  name="lastname" value="{{ old('lastname') }}">
						</div>
						{{--<div class="col-md-6">--}}
							{{--<div class="be-custom-select-block">--}}
								{{--<select class="be-custom-select" name="country">--}}
									{{--<option value="" disabled selected>--}}
										{{--Country--}}
									{{--</option>--}}
									{{--<option value="AF">Afghanistan</option>--}}
									{{--<option value="AX">Åland Islands</option>--}}
									{{--<option value="AL">Albania</option>--}}
									{{--<option value="DZ">Algeria</option>--}}
									{{--<option value="AS">American Samoa</option>--}}
									{{--<option value="AD">Andorra</option>--}}
									{{--<option value="AO">Angola</option>--}}
									{{--<option value="AI">Anguilla</option>--}}
									{{--<option value="AQ">Antarctica</option>--}}
									{{--<option value="AG">Antigua and Barbuda</option>--}}
									{{--<option value="AR">Argentina</option>--}}
									{{--<option value="AM">Armenia</option>--}}
									{{--<option value="AW">Aruba</option>--}}
									{{--<option value="AU">Australia</option>--}}
									{{--<option value="AT">Austria</option>--}}
									{{--<option value="AZ">Azerbaijan</option>--}}
									{{--<option value="BS">Bahamas</option>--}}
									{{--<option value="BH">Bahrain</option>--}}
									{{--<option value="BD">Bangladesh</option>--}}
									{{--<option value="BB">Barbados</option>--}}
									{{--<option value="BY">Belarus</option>--}}
									{{--<option value="BE">Belgium</option>--}}
									{{--<option value="BZ">Belize</option>--}}
									{{--<option value="BJ">Benin</option>--}}
									{{--<option value="BM">Bermuda</option>--}}
									{{--<option value="BT">Bhutan</option>--}}
									{{--<option value="BO">Bolivia, Plurinational State of</option>--}}
									{{--<option value="BQ">Bonaire, Sint Eustatius and Saba</option>--}}
									{{--<option value="BA">Bosnia and Herzegovina</option>--}}
									{{--<option value="BW">Botswana</option>--}}
									{{--<option value="BV">Bouvet Island</option>--}}
									{{--<option value="BR">Brazil</option>--}}
									{{--<option value="IO">British Indian Ocean Territory</option>--}}
									{{--<option value="BN">Brunei Darussalam</option>--}}
									{{--<option value="BG">Bulgaria</option>--}}
									{{--<option value="BF">Burkina Faso</option>--}}
									{{--<option value="BI">Burundi</option>--}}
									{{--<option value="KH">Cambodia</option>--}}
									{{--<option value="CM">Cameroon</option>--}}
									{{--<option value="CA">Canada</option>--}}
									{{--<option value="CV">Cape Verde</option>--}}
									{{--<option value="KY">Cayman Islands</option>--}}
									{{--<option value="CF">Central African Republic</option>--}}
									{{--<option value="TD">Chad</option>--}}
									{{--<option value="CL">Chile</option>--}}
									{{--<option value="CN">China</option>--}}
									{{--<option value="CX">Christmas Island</option>--}}
									{{--<option value="CC">Cocos (Keeling) Islands</option>--}}
									{{--<option value="CO">Colombia</option>--}}
									{{--<option value="KM">Comoros</option>--}}
									{{--<option value="CG">Congo</option>--}}
									{{--<option value="CD">Congo, the Democratic Republic of the</option>--}}
									{{--<option value="CK">Cook Islands</option>--}}
									{{--<option value="CR">Costa Rica</option>--}}
									{{--<option value="CI">Côte d'Ivoire</option>--}}
									{{--<option value="HR">Croatia</option>--}}
									{{--<option value="CU">Cuba</option>--}}
									{{--<option value="CW">Curaçao</option>--}}
									{{--<option value="CY">Cyprus</option>--}}
									{{--<option value="CZ">Czech Republic</option>--}}
									{{--<option value="DK">Denmark</option>--}}
									{{--<option value="DJ">Djibouti</option>--}}
									{{--<option value="DM">Dominica</option>--}}
									{{--<option value="DO">Dominican Republic</option>--}}
									{{--<option value="EC">Ecuador</option>--}}
									{{--<option value="EG">Egypt</option>--}}
									{{--<option value="SV">El Salvador</option>--}}
									{{--<option value="GQ">Equatorial Guinea</option>--}}
									{{--<option value="ER">Eritrea</option>--}}
									{{--<option value="EE">Estonia</option>--}}
									{{--<option value="ET">Ethiopia</option>--}}
									{{--<option value="FK">Falkland Islands (Malvinas)</option>--}}
									{{--<option value="FO">Faroe Islands</option>--}}
									{{--<option value="FJ">Fiji</option>--}}
									{{--<option value="FI">Finland</option>--}}
									{{--<option value="FR">France</option>--}}
									{{--<option value="GF">French Guiana</option>--}}
									{{--<option value="PF">French Polynesia</option>--}}
									{{--<option value="TF">French Southern Territories</option>--}}
									{{--<option value="GA">Gabon</option>--}}
									{{--<option value="GM">Gambia</option>--}}
									{{--<option value="GE">Georgia</option>--}}
									{{--<option value="DE">Germany</option>--}}
									{{--<option value="GH">Ghana</option>--}}
									{{--<option value="GI">Gibraltar</option>--}}
									{{--<option value="GR">Greece</option>--}}
									{{--<option value="GL">Greenland</option>--}}
									{{--<option value="GD">Grenada</option>--}}
									{{--<option value="GP">Guadeloupe</option>--}}
									{{--<option value="GU">Guam</option>--}}
									{{--<option value="GT">Guatemala</option>--}}
									{{--<option value="GG">Guernsey</option>--}}
									{{--<option value="GN">Guinea</option>--}}
									{{--<option value="GW">Guinea-Bissau</option>--}}
									{{--<option value="GY">Guyana</option>--}}
									{{--<option value="HT">Haiti</option>--}}
									{{--<option value="HM">Heard Island and McDonald Islands</option>--}}
									{{--<option value="VA">Holy See (Vatican City State)</option>--}}
									{{--<option value="HN">Honduras</option>--}}
									{{--<option value="HK">Hong Kong</option>--}}
									{{--<option value="HU">Hungary</option>--}}
									{{--<option value="IS">Iceland</option>--}}
									{{--<option value="IN">India</option>--}}
									{{--<option value="ID">Indonesia</option>--}}
									{{--<option value="IR">Iran, Islamic Republic of</option>--}}
									{{--<option value="IQ">Iraq</option>--}}
									{{--<option value="IE">Ireland</option>--}}
									{{--<option value="IM">Isle of Man</option>--}}
									{{--<option value="IL">Israel</option>--}}
									{{--<option value="IT">Italy</option>--}}
									{{--<option value="JM">Jamaica</option>--}}
									{{--<option value="JP">Japan</option>--}}
									{{--<option value="JE">Jersey</option>--}}
									{{--<option value="JO">Jordan</option>--}}
									{{--<option value="KZ">Kazakhstan</option>--}}
									{{--<option value="KE">Kenya</option>--}}
									{{--<option value="KI">Kiribati</option>--}}
									{{--<option value="KP">Korea, Democratic People's Republic of</option>--}}
									{{--<option value="KR">Korea, Republic of</option>--}}
									{{--<option value="KW">Kuwait</option>--}}
									{{--<option value="KG">Kyrgyzstan</option>--}}
									{{--<option value="LA">Lao People's Democratic Republic</option>--}}
									{{--<option value="LV">Latvia</option>--}}
									{{--<option value="LB">Lebanon</option>--}}
									{{--<option value="LS">Lesotho</option>--}}
									{{--<option value="LR">Liberia</option>--}}
									{{--<option value="LY">Libya</option>--}}
									{{--<option value="LI">Liechtenstein</option>--}}
									{{--<option value="LT">Lithuania</option>--}}
									{{--<option value="LU">Luxembourg</option>--}}
									{{--<option value="MO">Macao</option>--}}
									{{--<option value="MK">Macedonia, the former Yugoslav Republic of</option>--}}
									{{--<option value="MG">Madagascar</option>--}}
									{{--<option value="MW">Malawi</option>--}}
									{{--<option value="MY">Malaysia</option>--}}
									{{--<option value="MV">Maldives</option>--}}
									{{--<option value="ML">Mali</option>--}}
									{{--<option value="MT">Malta</option>--}}
									{{--<option value="MH">Marshall Islands</option>--}}
									{{--<option value="MQ">Martinique</option>--}}
									{{--<option value="MR">Mauritania</option>--}}
									{{--<option value="MU">Mauritius</option>--}}
									{{--<option value="YT">Mayotte</option>--}}
									{{--<option value="MX">Mexico</option>--}}
									{{--<option value="FM">Micronesia, Federated States of</option>--}}
									{{--<option value="MD">Moldova, Republic of</option>--}}
									{{--<option value="MC">Monaco</option>--}}
									{{--<option value="MN">Mongolia</option>--}}
									{{--<option value="ME">Montenegro</option>--}}
									{{--<option value="MS">Montserrat</option>--}}
									{{--<option value="MA">Morocco</option>--}}
									{{--<option value="MZ">Mozambique</option>--}}
									{{--<option value="MM">Myanmar</option>--}}
									{{--<option value="NA">Namibia</option>--}}
									{{--<option value="NR">Nauru</option>--}}
									{{--<option value="NP">Nepal</option>--}}
									{{--<option value="NL">Netherlands</option>--}}
									{{--<option value="NC">New Caledonia</option>--}}
									{{--<option value="NZ">New Zealand</option>--}}
									{{--<option value="NI">Nicaragua</option>--}}
									{{--<option value="NE">Niger</option>--}}
									{{--<option value="NG">Nigeria</option>--}}
									{{--<option value="NU">Niue</option>--}}
									{{--<option value="NF">Norfolk Island</option>--}}
									{{--<option value="MP">Northern Mariana Islands</option>--}}
									{{--<option value="NO">Norway</option>--}}
									{{--<option value="OM">Oman</option>--}}
									{{--<option value="PK">Pakistan</option>--}}
									{{--<option value="PW">Palau</option>--}}
									{{--<option value="PS">Palestinian Territory, Occupied</option>--}}
									{{--<option value="PA">Panama</option>--}}
									{{--<option value="PG">Papua New Guinea</option>--}}
									{{--<option value="PY">Paraguay</option>--}}
									{{--<option value="PE">Peru</option>--}}
									{{--<option value="PH">Philippines</option>--}}
									{{--<option value="PN">Pitcairn</option>--}}
									{{--<option value="PL">Poland</option>--}}
									{{--<option value="PT">Portugal</option>--}}
									{{--<option value="PR">Puerto Rico</option>--}}
									{{--<option value="QA">Qatar</option>--}}
									{{--<option value="RE">Réunion</option>--}}
									{{--<option value="RO">Romania</option>--}}
									{{--<option value="RU">Russian Federation</option>--}}
									{{--<option value="RW">Rwanda</option>--}}
									{{--<option value="BL">Saint Barthélemy</option>--}}
									{{--<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>--}}
									{{--<option value="KN">Saint Kitts and Nevis</option>--}}
									{{--<option value="LC">Saint Lucia</option>--}}
									{{--<option value="MF">Saint Martin (French part)</option>--}}
									{{--<option value="PM">Saint Pierre and Miquelon</option>--}}
									{{--<option value="VC">Saint Vincent and the Grenadines</option>--}}
									{{--<option value="WS">Samoa</option>--}}
									{{--<option value="SM">San Marino</option>--}}
									{{--<option value="ST">Sao Tome and Principe</option>--}}
									{{--<option value="SA">Saudi Arabia</option>--}}
									{{--<option value="SN">Senegal</option>--}}
									{{--<option value="RS">Serbia</option>--}}
									{{--<option value="SC">Seychelles</option>--}}
									{{--<option value="SL">Sierra Leone</option>--}}
									{{--<option value="SG">Singapore</option>--}}
									{{--<option value="SX">Sint Maarten (Dutch part)</option>--}}
									{{--<option value="SK">Slovakia</option>--}}
									{{--<option value="SI">Slovenia</option>--}}
									{{--<option value="SB">Solomon Islands</option>--}}
									{{--<option value="SO">Somalia</option>--}}
									{{--<option value="ZA">South Africa</option>--}}
									{{--<option value="GS">South Georgia and the South Sandwich Islands</option>--}}
									{{--<option value="SS">South Sudan</option>--}}
									{{--<option value="ES">Spain</option>--}}
									{{--<option value="LK">Sri Lanka</option>--}}
									{{--<option value="SD">Sudan</option>--}}
									{{--<option value="SR">Suriname</option>--}}
									{{--<option value="SJ">Svalbard and Jan Mayen</option>--}}
									{{--<option value="SZ">Swaziland</option>--}}
									{{--<option value="SE">Sweden</option>--}}
									{{--<option value="CH">Switzerland</option>--}}
									{{--<option value="SY">Syrian Arab Republic</option>--}}
									{{--<option value="TW">Taiwan, Province of China</option>--}}
									{{--<option value="TJ">Tajikistan</option>--}}
									{{--<option value="TZ">Tanzania, United Republic of</option>--}}
									{{--<option value="TH">Thailand</option>--}}
									{{--<option value="TL">Timor-Leste</option>--}}
									{{--<option value="TG">Togo</option>--}}
									{{--<option value="TK">Tokelau</option>--}}
									{{--<option value="TO">Tonga</option>--}}
									{{--<option value="TT">Trinidad and Tobago</option>--}}
									{{--<option value="TN">Tunisia</option>--}}
									{{--<option value="TR">Turkey</option>--}}
									{{--<option value="TM">Turkmenistan</option>--}}
									{{--<option value="TC">Turks and Caicos Islands</option>--}}
									{{--<option value="TV">Tuvalu</option>--}}
									{{--<option value="UG">Uganda</option>--}}
									{{--<option value="UA">Ukraine</option>--}}
									{{--<option value="AE">United Arab Emirates</option>--}}
									{{--<option value="GB">United Kingdom</option>--}}
									{{--<option value="US">United States</option>--}}
									{{--<option value="UM">United States Minor Outlying Islands</option>--}}
									{{--<option value="UY">Uruguay</option>--}}
									{{--<option value="UZ">Uzbekistan</option>--}}
									{{--<option value="VU">Vanuatu</option>--}}
									{{--<option value="VE">Venezuela, Bolivarian Republic of</option>--}}
									{{--<option value="VN">Viet Nam</option>--}}
									{{--<option value="VG">Virgin Islands, British</option>--}}
									{{--<option value="VI">Virgin Islands, U.S.</option>--}}
									{{--<option value="WF">Wallis and Futuna</option>--}}
									{{--<option value="EH">Western Sahara</option>--}}
									{{--<option value="YE">Yemen</option>--}}
									{{--<option value="ZM">Zambia</option>--}}
									{{--<option value="ZW">Zimbabwe</option>--}}
								{{--</select>--}}
							{{--</div>--}}
						{{--</div>--}}
						<div class="col-md-12">
							<input class="input-signtype" type="text" required="" placeholder="Email" name="email" value="{{ old('email') }}">
						</div>
						<div class="col-md-6">
							<input class="input-signtype" type="password" required="" placeholder="Password" name="password">
						</div>
						<div class="col-md-6">
							<input class="input-signtype" type="password" required="" placeholder="Repeat Password" name="password_confirmation">
						</div>

						{{--<div class="col-md-6">--}}
							{{--<div class="be-checkbox">--}}
								{{--<label class="check-box">--}}
									{{--<input class="checkbox-input" type="checkbox" required="" value="" > <span class="check-box-sign"></span>--}}
								{{--</label>--}}
								{{--<span class="large-popup-text">--}}
									{{--I have read and agree to the <a class="be-popup-terms" href="blog-detail-2.html">Terms of Use</a> and <a class="be-popup-terms" href="blog-detail-2.html">Privacy Policy</a>.--}}
								{{--</span>--}}
							{{--</div>--}}
							{{--<div class="be-checkbox">--}}
								{{--<label class="check-box">--}}
									{{--<input class="checkbox-input" type="checkbox" value="" > <span class="check-box-sign"></span>--}}
								{{--</label>--}}
								{{--<span class="large-popup-text">--}}
									{{--Send me notifications--}}
								{{--</span>--}}
							{{--</div>--}}
						{{--</div>--}}
						<div class="col-md-6 for-signin">
							<button type="submit" class="btn btn-primary be-popup-sign-button">
								Register
							</button>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@if (count($errors) > 0)
	<div class="alert alert-danger">
		<strong>Whoops!</strong> There were some problems with your input.<br><br>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif
@endsection
