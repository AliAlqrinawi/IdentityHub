<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="Name of your web site">
<meta name="author" content="Marketify">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Know | Home</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- STYLES -->
<link  href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/profile/css/plugins.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/profile/css/dark.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/profile/css/style.css') }}">
<!--<link rel="stylesheet" type="text/css" href="css/dark.css" />-->
<!--[if lt IE 9]> <script type="text/javascript" src="js/modernizr.custom.js"></script> <![endif]-->
<!-- /STYLES -->

</head>

<body>

	<!-- PRELOADER -->
	<div id="preloader">
		<div class="loader_line"></div>
	</div>
	<!-- /PRELOADER -->

<!-- WRAPPER ALL -->
<div class="know_tm_all_wrap" data-magic-cursor="show"> <!-- If you want disable magic cursor change value to "hide" -->

	<!-- MODALBOX -->
	<div class="know_tm_modalbox">
		<div class="box_inner">
			<div class="close">
				<a href="#"><img class="svg" src="{{ url('assets/profile/img/svg/cancel.svg') }}" alt=""></a>
			</div>
			<div class="description_wrap"></div>
		</div>
	</div>
	<!-- /MODALBOX -->

	<!-- TOPBAR -->
	<div class="know_tm_topbar">
		<div class="container">
			<div class="topbar_inner">
				<div class="logo">
					<a href="#"><img src="{{ asset('assets/profile/img/logo/dark.png') }}" alt=""></a>
				</div>
				<div class="right">
					<div class="social">
						<ul>
							<li><a href="#"><img class="svg" src="{{ asset('assets/profile/img/svg/social/facebook.svg') }}" alt=""></a></li>
							<li><a href="#"><img class="svg" src="{{ asset('assets/profile/img/svg/social/twitter.svg') }}" alt=""></a></li>
							<li><a href="#"><img class="svg" src="{{ asset('assets/profile/img/svg/social/youtube.svg') }}" alt=""></a></li>
							<li><a href="#"><img class="svg" src="{{ asset('assets/profile/img/svg/social/instagram.svg') }}" alt=""></a></li>
						</ul>
					</div>
					<div class="know_tm_button">
						<a href="{{ asset('/') .  $aboutMe->cv }}" download="">Download CV</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /TOPBAR -->

	<!-- HERO -->
	<div class="know_tm_hero">
		<div class="background_shape"></div>
		<div class="hero_content">
			<div class="container">
				<div class="content_inner">
					<div class="main_info">
						<div class="left">
							<span class="subtitle">I'm</span>
							<h3 class="name">{{ $aboutMe->name_en }}</h3>
							<p class="text">{{ $aboutMe->job_description_en }}</p>
							<div class="know_tm_video">
								<div class="video_inner">
									<div class="circle"></div>
									<h3 class="play">Play Video</h3>
									<a class="know_tm_full_link popup-youtube" href="https://www.youtube.com/watch?v=7e90gBu4pas"></a>
								</div>
							</div>
						</div>
						<div class="right">
							<div class="image">
								<img src="{{ asset('assets/profile/img/thumbs/47-60.jpg') }}" alt="">
								<div class="main" data-img-url="{{ asset('/') .  $aboutMe->first_photo }}"></div>
							</div>
						</div>
					</div>
					<div class="main_menu">
						<ul>
							<li>
								<img class="svg" src="{{ asset('assets/profile/img/svg/archive.svg') }}" alt="">
								<span>About Me</span>
								<a class="know_tm_full_link" href="#about"></a>
							</li>
							<li>
								<img class="svg" src="{{ asset('assets/profile/img/svg/contacs.svg') }}" alt="">
								<span>Resume</span>
								<a class="know_tm_full_link" href="#resume"></a>
							</li>
							<li>
								<img class="svg" src="{{ asset('assets/profile/img/svg/briefcase.svg') }}" alt="">
								<span>Portfolio</span>
								<a class="know_tm_full_link" href="#portfolio"></a>
							</li>
							<li>
								<img class="svg" src="{{ asset('assets/profile/img/svg/gear.svg') }}" alt="">
								<span>Service</span>
								<a class="know_tm_full_link" href="#service"></a>
							</li>
							<li>
								<img class="svg" src="{{ asset('assets/profile/img/svg/message.svg') }}" alt="">
								<span>Testimonial</span>
								<a class="know_tm_full_link" href="#testimonials"></a>
							</li>
							<li>
								<img class="svg" src="{{ asset('assets/profile/img/svg/writing.svg') }}" alt="">
								<span>Blog</span>
								<a class="know_tm_full_link" href="#news"></a>
							</li>
							<li>
								<img class="svg" src="{{ asset('assets/profile/img/svg/letter.svg') }}" alt="">
								<span>Contact</span>
								<a class="know_tm_full_link" href="#contact"></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- Hero Shapes -->
		<span class="one anim_scale"><img class="svg" src="{{ asset('assets/profile/img/svg/archive.svg') }}" alt=""></span>
		<span class="two anim_moveLeft"><img class="svg" src="{{ asset('assets/profile/img/svg/shapes/dot.svg') }}" alt=""></span>
		<span class="three anim_moveTop"><img class="svg" src="{{ asset('assets/profile/img/svg/shapes/dot-2.svg') }}" alt=""></span>
		<span class="four anim_circle"><img class="svg" src="{{ asset('assets/profile/img/svg/shapes/1.svg') }}" alt=""></span>
		<span class="five anim_circle"><img class="svg" src="{{ asset('assets/profile/img/svg/shapes/8.svg') }}" alt=""></span>
		<span class="six anim_circle"><img class="svg" src="{{ asset('assets/profile/img/svg/shapes/3.svg') }}" alt=""></span>
		<span class="seven anim_right"><img class="svg" src="{{ asset('assets/profile/img/svg/shapes/4.svg') }}" alt=""></span>
		<span class="eight anim_scale"><img class="svg" src="{{ asset('assets/profile/img/svg/shapes/9.svg') }}" alt=""></span>
		<span class="nine anim_circle"><img class="svg" src="{{ asset('assets/profile/img/svg/shapes/3.svg') }}" alt=""></span>
		<span class="ten anim_moveLeft"><img class="svg" src="{{ asset('assets/profile/img/svg/shapes/4.svg') }}" alt=""></span>
		<span class="eleven anim_scale"><img class="svg" src="{{ asset('assets/profile/img/svg/shapes/9.svg') }}" alt=""></span>
		<span class="twelve anim_extra"><img class="svg" src="{{ asset('assets/profile/img/svg/shapes/2.svg') }}" alt=""></span>
		<span class="thirteen anim_circle"><img class="svg" src="{{ asset('assets/profile/img/svg/shapes/5.svg') }}" alt=""></span>
		<span class="fourteen anim_scale"><img class="svg" src="{{ asset('assets/profile/img/svg/shapes/9.svg') }}" alt=""></span>
		<span class="fifteen anim_circle"><img class="svg" src="{{ asset('assets/profile/img/svg/shapes/3.svg') }}" alt=""></span>
		<span class="sixteen anim_scale"><img class="svg" src="{{ asset('assets/profile/img/svg/shapes/9.svg') }}" alt=""></span>
		<span class="seventeen anim_circle"><img class="svg" src="{{ asset('assets/profile/img/svg/shapes/5.svg') }}" alt=""></span>
		<span class="eighteen anim_scale"><img class="svg" src="{{ asset('assets/profile/img/svg/shapes/9.svg') }}" alt=""></span>
		<span class="nineteen anim_scale"><img class="svg" src="{{ asset('assets/profile/img/svg/shapes/9.svg') }}" alt=""></span>
		<span class="twenty anim_circle"><img class="svg" src="{{ asset('assets/profile/img/svg/shapes/1.svg') }}" alt=""></span>
		<!-- /Hero Shapes -->

	</div>
	<!-- /HERO -->

	<!-- MAINPART -->
	<div class="container">
		<div class="know_tm_mainpart">

			<!-- ABOUT -->
			<div id="about" class="know_tm_main_section">
				<div class="know_tm_about">
					<div class="left">
						<div class="left_inner">
							<div class="image">
								<img src="{{ asset('assets/profile/img/thumbs/35-44.jpg') }}" alt="">
								<div class="main" data-img-url="{{ asset('/') .  $aboutMe->second_photo }}"></div>
							</div>
							<div class="details">
								<ul>
									<li>
										<h3>Name</h3>
										<span>{{ $aboutMe->name_en }}</span>
									</li>
									<li>
										<h3>Birthday</h3>
										<span>{{    \Carbon\Carbon::parse($aboutMe->Birthday)->format('F d, Y')  }}</span>
									</li>
									<li>
										<h3>Mail</h3>
										<span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3b535e5757547b5a555f5e4948545515585456">{{ $aboutMe->Mail }}</a></span>
									</li>
									<li>
										<h3>Phone</h3>
										<span>{{ $aboutMe->Phone }}</span>
									</li>
									<li>
										<h3>Address</h3>
										<span>{{ $aboutMe->Address_en }}</span>
									</li>
									<li>
										<h3>Nationality</h3>
										<span>{{ $aboutMe->Nationality_en }}</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="right">
						<div class="know_tm_main_title">
							<span>About Me</span>
							<h3>{{ $aboutMe->job_title_en }}</h3>
						</div>
						<div class="bigger_text">
							<p>{{ $aboutMe->job_description_en }}</p>
						</div>
						<div class="text">
							<p>{{ $aboutMe->about_en }}</p>
						</div>
						<div class="know_tm_button">
							<a href="{{ asset('/') .  $aboutMe->cv }}" download="">Download CV</a>
						</div>
					</div>
				</div>
			</div>
			<!-- /ABOUT -->

			<!-- RESUME -->
			<div id="resume" class="know_tm_main_section">
				<div class="know_tm_resume">
					<div class="know_tm_main_title">
						<span>Resume</span>
						<h3>Combination of Skill &amp; Experience</h3>
					</div>
					<div class="resume_inner">
						<div class="left">
                            @if($education->isNotEmpty())
							<div class="info_list">
								<div class="know_tm_resume_title">
									<h3>Education</h3>
									<span class="shape"></span>
								</div>
								<ul>
                                    @foreach ($education as $value)
                                    <li>
										<div class="list_inner">
											<div class="short">
												<div class="job">
													<h3>{{ $value->title_en }}</h3>
													<span>{{ $value->Learn_resource_en }}</span>
												</div>
												<div class="year">
													<span>{{ $value->year_range }}</span>
												</div>
											</div>
											<div class="text">
												<p>{{ $value->description_en }}</p>
											</div>
										</div>
									</li>
                                    @endforeach
								</ul>
							</div>
                            @endif
                            @if($experience->isNotEmpty())
							<div class="info_list">
								<div class="know_tm_resume_title">
									<h3>Experience</h3>
									<span class="shape"></span>
								</div>
								<ul>
									@foreach ($experience as $value)
                                    <li>
										<div class="list_inner">
											<div class="short">
												<div class="job">
													<h3>{{ $value->title_en }}</h3>
													<span>{{ $value->Learn_resource_en }}</span>
												</div>
												<div class="year">
													<span>{{ $value->year_range }}</span>
												</div>
											</div>
											<div class="text">
												<p>{{ $value->description_en }}</p>
											</div>
										</div>
									</li>
                                    @endforeach
								</ul>
							</div>
                            @endif
						</div>
						<div class="right">
                            @if($personal_skill->isNotEmpty())
							<div class="skills_list">
								<div class="know_tm_resume_title">
									<h3>Personal Skills</h3>
									<span class="shape"></span>
								</div>
								<div class="personal">
									<div class="dodo_progress">
                                        @foreach ($personal_skill as $value)
										<div class="progress_inner" data-value="{{ $value->percentage }}">
											<span><span class="label">{{ $value->title_en }}</span><span class="number">{{ $value->percentage }}%</span></span>
											<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
										</div>
                                        @endforeach
									</div>
								</div>
							</div>
                            @endif
                            @if($personal_skill->isNotEmpty())
							<div class="skills_list">
								<div class="know_tm_resume_title">
									<h3>Software Skills</h3>
									<span class="shape"></span>
								</div>
								<div class="software">
									<div class="circular_progress_bar">
										<ul>
                                            @foreach ($software_skill as $value)
											<li>
												<div class="list_inner">
													<div class="myCircle" data-value="{{ $value->percentage }}"></div>
													<div class="title"><h3>{{ $value->title_en }}</h3></div>
												</div>
											</li>
                                            @endforeach
										</ul>
									</div>
								</div>
							</div>
                            @endif
						</div>
					</div>
				</div>
			</div>
			<!-- /RESUME -->

			<!-- PORTFOLIO -->
			<div id="portfolio" class="know_tm_main_section">
				<div class="know_tm_portfolio">
					<div class="know_tm_main_title">
						<span>Resume</span>
						<h3>My works that I did for clients</h3>
					</div>
					<div class="portfolio_filter">
						<ul>
							<li><a href="#" class="current" data-filter="*">All</a></li>
							<li><a href="#" data-filter=".vimeo">Vimeo</a></li>
							<li><a href="#" data-filter=".youtube">Youtube</a></li>
							<li><a href="#" data-filter=".soundcloud">Soundcloud</a></li>
							<li><a href="#" data-filter=".detail">Detail</a></li>
						</ul>
					</div>
					<div class="portfolio_list">
						<ul class="gallery_zoom">
							<li class="vimeo">
								<div class="list_inner">
									<div class="image">
										<img src="{{ asset('assets/profile/img/thumbs/1-1.jpg') }}" alt="">
										<div class="main" data-img-url="{{ asset('img/portfolio/1.jpg') }}"></div>
									</div>
									<div class="overlay"></div>
									<img class="svg" src="{{ asset('assets/profile/img/svg/social/vimeo.svg') }}" alt="">
									<div class="details">
										<span>Vimeo</span>
										<h3>Aumeo Audio</h3>
									</div>
									<a class="know_tm_full_link popup-vimeo" href="../../337293658.html"></a>
								</div>
							</li>
							<li class="youtube">
								<div class="list_inner">
									<div class="image">
										<img src="{{ asset('assets/profile/img/thumbs/1-1.jpg') }}" alt="">
										<div class="main" data-img-url="{{ asset('img/portfolio/2.jpg') }}"></div>
									</div>
									<div class="overlay"></div>
									<img class="svg" src="{{ asset('assets/profile/img/svg/social/youtube-2.svg') }}" alt="">
									<div class="details">
										<span>Youtube</span>
										<h3>Bicker &amp; Jenna</h3>
									</div>
									<a class="know_tm_full_link popup-youtube" href="../../watch.html?v=7e90gBu4pas"></a>
								</div>
							</li>
							<li class="soundcloud">
								<div class="list_inner">
									<div class="image">
										<img src="{{ asset('assets/profile/img/thumbs/1-1.jpg') }}" alt="">
										<div class="main" data-img-url="{{ asset('img/portfolio/3.jpg') }}"></div>
									</div>
									<div class="overlay"></div>
									<img class="svg" src="{{ asset('assets/profile/img/svg/social/soundcloud.svg') }}" alt="">
									<div class="details">
										<span>Soundcloud</span>
										<h3>Botanical Escape</h3>
									</div>
									<a class="know_tm_full_link soundcloude_link mfp-iframe audio" href="../../player/index.htm?url=https%3A//api.soundcloud.com/tracks/471954807&color=%23ff5500&auto_play=true&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></a>
								</div>
							</li>

							<li class="youtube">
								<div class="list_inner">
									<div class="image">
										<img src="{{ asset('assets/profile/img/thumbs/1-1.jpg') }}" alt="">
										<div class="main" data-img-url="{{ asset('img/portfolio/6.jpg') }}"></div>
									</div>
									<div class="overlay"></div>
									<img class="svg" src="{{ asset('assets/profile/img/svg/social/youtube-2.svg') }}" alt="">
									<div class="details">
										<span>Youtube</span>
										<h3>Model Car</h3>
									</div>
									<a class="know_tm_full_link popup-youtube" href="../../watch-1.html?v=l-epKcOA7RQ"></a>
								</div>
							</li>
							<li class="vimeo">
								<div class="list_inner">
									<div class="image">
										<img src="{{ asset('assets/profile/img/thumbs/1-1.jpg') }}" alt="">
										<div class="main" data-img-url="{{ asset('img/portfolio/7.jpg') }}"></div>
									</div>
									<div class="overlay"></div>
									<img class="svg" src="{{ asset('assets/profile/img/svg/social/vimeo.svg') }}" alt="">
									<div class="details">
										<span>Vimeo</span>
										<h3>Smart Watch</h3>
									</div>
									<a class="know_tm_full_link popup-vimeo" href="../../337292310.html"></a>
								</div>
							</li>
							<li class="detail">
								<div class="list_inner">
									<div class="image">
										<img src="{{ asset('assets/profile/img/thumbs/1-1.jpg') }}" alt="">
										<div class="main" data-img-url="img/portfolio/8.jpg"></div>
									</div>
									<div class="overlay"></div>
									<img class="svg" src="{{ asset('assets/profile/img/svg/text.svg') }}" alt="">
									<div class="details">
										<span>Detail</span>
										<h3>Teresa Melbig</h3>
									</div>
									<a class="know_tm_full_link portfolio_popup" href="#"></a>

									<div class="hidden_content">
										<div class="popup_details">
											<div class="main_details">
												<div class="textbox">
													<p>We live in a world where we need to move quickly and iterate on our ideas as flexibly as possible. Building mockups strikes the ideal balance ease of modification.</p>
													<p>Mockups are useful both for the creative phase of the project - for instance when you're trying to figure out your user flows or the proper visual hierarchy - and the production phase when they will represent the target product.</p>
												</div>
												<div class="detailbox">
													<ul>
														<li>
															<span class="first">Client</span>
															<span>Alvaro Morata</span>
														</li>
														<li>
															<span class="first">Category</span>
															<span><a href="#">Detail</a></span>
														</li>
														<li>
															<span class="first">Date</span>
															<span>March 07, 2021</span>
														</li>
														<li>
															<span class="first">Share</span>
															<ul class="share">
																<li><a href="#"><img class="svg" src="{{ asset('assets/profile/img/svg/social/facebook.svg') }}" alt=""></a></li>
																<li><a href="#"><img class="svg" src="{{ asset('assets/profile/img/svg/social/twitter.svg') }}" alt=""></a></li>
																<li><a href="#"><img class="svg" src="{{ asset('assets/profile/img/svg/social/instagram.svg') }}" alt=""></a>
																</li>
															</ul>
														</li>
													</ul>
												</div>
											</div>
											<div class="additional_images">
												<ul>
													<li>
														<div class="list_inner">
															<div class="my_image">
																<img src="{{ asset('assets/profile/img/thumbs/4-2.jpg') }}" alt="">
																<div class="main" data-img-url="{{ asset('assets/profile/img/portfolio/1.jpg') }}"></div>
															</div>
														</div>
													</li>
													<li>
														<div class="list_inner">
															<div class="my_image">
																<img src="{{ asset('assets/profile/img/thumbs/4-2.jpg') }}" alt="">
																<div class="main" data-img-url="{{ asset('img/portfolio/2.jpg') }}"></div>
															</div>
														</div>
													</li>
													<li>
														<div class="list_inner">
															<div class="my_image">
																<img src="{{ asset('assets/profile/img/thumbs/4-2.jpg') }}" alt="">
																<div class="main" data-img-url="{{ asset('img/portfolio/3.jpg') }}"></div>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>

						</ul>
					</div>
				</div>
			</div>
			<!-- /PORTFOLIO -->
            @if($service->isNotEmpty())
			<!-- SERVICES -->
			<div id="service" class="know_tm_main_section">
				<div class="know_tm_services">
					<div class="know_tm_main_title">
						<span>Service</span>
						<h3>Never compromise with quality</h3>
					</div>
					<div class="service_list">
						<ul>
                            @foreach ($service as $value)
							<li>
								<div class="list_inner">
									<span class="icon"><img class="svg" src="{{ asset('/') . $value->logo }}" alt=""></span>
									<h3 class="title">{{ $value->title_en }}</h3>
									<p class="text">{{ Str::limit($value->description_en, 20, '...')  }}</p>
									<a class="know_tm_full_link" href="#"></a>
									<div class="hidden_content">
										<div class="service_informations">
											<div class="image">
												<img src="{{ asset('/') . $value->detail_image }}" alt="">
												<div class="main" data-img-url="{{ asset('/') . $value->detail_image }}"></div>
											</div>
											<div class="description">
												<p>{{ $value->description_en }}</p>
											</div>
										</div>
									</div>
								</div>
							</li>
                            @endforeach
						</ul>
					</div>
				</div>
			</div>
			<!-- /SERVICES -->
            @endif
            @if($testimonial->isNotEmpty())
			<!-- TESTIMONIALS -->
			<div id="testimonials" class="know_tm_main_section">
				<div class="know_tm_testimonials">
					<div class="know_tm_main_title">
						<span>Testimonials</span>
						<h3>What people say about me</h3>
					</div>
					<div class="testimonials_list owl-carousel owl-theme">
                        @foreach ($testimonial as $value)
						<div class="list_inner">
							<div class="in">
								<div class="text">
									<p>{{ Str::limit($value->message, 100, '...')  }}</p>
								</div>
								<div class="details">
									<div class="left">
										<div class="avatar">
											<div class="main" data-img-url="{{ asset('/') . $value->avatar }}"></div>
										</div>
										<div class="info">
											<h3>{{ $value->name }}</h3>
											<span>{{ $value->job_title }}</span>
										</div>
									</div>
									<div class="right">
										<img class="svg" src="{{ asset('assets/profile/img/svg/left-quote.svg') }}" alt="">
									</div>
								</div>
							</div>
						</div>
                        @endforeach
					</div>
				</div>
			</div>
			<!-- /TESTIMONIALS -->
            @endif

			<!-- NEWS -->
			<div id="news" class="know_tm_main_section">
				<div class="know_tm_news">
					<div class="know_tm_main_title">
						<span>Blog</span>
						<h3>Latest tips, tricks &amp; Updates</h3>
					</div>
					<div class="news_list">
						<ul>
						@foreach ($blog as $value)
                            <li>
								<div class="list_inner">
									<div class="image">
										<img src="{{ asset('assets/profile/img/thumbs/37-27.jpg')}}" alt="">
										<div class="main" data-img-url="{{ asset('/') . $value->image }}"></div>
										<a class="know_tm_full_link" href="#"></a>
									</div>
									<div class="details" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
										<span class="category"><a href="#">{{ $value->title_en }}</a></span>
										<h3 class="title"><a href="#">{{ $value->question_en }}</a></h3>
									</div>
									<div class="hidden_content">
										<div class="news_informations">
											<div class="text">
												<p>{{ $value->answer_en }}</p>
											</div>
										</div>
									</div>
								</div>
							</li>
                            @endforeach
						</ul>
					</div>
				</div>
			</div>
			<!-- /NEWS -->

			<!-- CONTACT -->
			<div id="contact" class="know_tm_main_section">
				<div class="know_tm_contact">
					<div class="know_tm_main_title">
						<span>Contact Me</span>
						<h3>Contact me to get your work done</h3>
					</div>
					<div class="wrapper">
						<div class="left">
							<ul>
								<li>
									<div class="list_inner">
										<span class="icon"><img class="svg" src="{{ asset('assets/profile/img/svg/smartphone.svg') }}" alt=""></span>
										<div class="short">
											<h3>Call Me</h3>
											<span>{{ App\Models\Setting::where('key' , 'phone')->first()->value }}</span>
										</div>
									</div>
								</li>
								<li>
									<div class="list_inner">
										<span class="icon"><img class="svg" src="{{ asset('assets/profile/img/svg/letter.svg') }}" alt=""></span>
										<div class="short">
											<h3>Email Us</h3>
											<span><a href="#"><span class="__cf_email__" data-cfemail="365e535a5a59765f5d5859411855595b">{{ App\Models\Setting::where('key' , 'email')->first()->value }}</span></a></span>
										</div>
									</div>
								</li>
								<li>
									<div class="list_inner">
										<span class="icon"><img class="svg" src="{{ asset('assets/profile/img/svg/placeholder.svg') }}" alt=""></span>
										<div class="short">
											<h3>Address</h3>
											<span>{{ App\Models\Setting::where('key' , 'address')->first()->value }}</span>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="right">
							<div class="fields">
								<form action="/" method="post" class="contact_form" id="contact_form" autocomplete="off">
                                    <div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
									<div class="empty_notice"><span>Please Fill Required Fields</span></div>
									<div class="input_list">
										<ul>
                                            <li hidden><input name="XSRF-TOKEN" id="XSRF-TOKEN" type="text" value="{{ csrf_token() }}" placeholder="Your Name" required></li>
											<li><input name="name" id="name" type="text" placeholder="Your Name" required></li>
											<li><input name="email" id="email" type="text" placeholder="Your Email" required></li>
											<li><input name="phone" id="phone" type="number" placeholder="Your Phone" required></li>
											<li><input name="subject" id="subject" type="text" placeholder="Subject" required></li>
										</ul>
									</div>
									<div class="message_area">
										<textarea name="message" id="message" placeholder="Your message here" required></textarea>
									</div>
									<div class="know_tm_button">
                                        <a id="send_message" href="#">Submit Now</a>
									</div>

									<!-- If you want change mail address to yours, just open "modal" folder >> contact.php and go to line 4 and change detail to yours.  -->

								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /CONTACT -->

		</div>
	</div>
	<!-- /MAINPART -->

	<!-- COPYRIGHT -->
	<div class="know_tm_copyright hidden">
		<div class="container">
			<div class="inner">
				<div class="left">
					<p>Designed By Marketify, Share By <a href="https://nullphpscript.com" target="_blank">HTML Template</a></p>
				</div>
				<div class="right">
					<ul>
						<li><a href="#">Terms &amp; Condition</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Login</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- /COPYRIGHT -->

	<!-- MAGIC CURSOR -->
	<div class="mouse-cursor cursor-outer"></div>
	<div class="mouse-cursor cursor-inner"></div>
	<!-- /MAGIC CURSOR -->

</div>
<!-- / WRAPPER ALL -->

<!-- SCRIPTS -->
<script src="{{ asset('assets/profile/js/jquery.js') }}"></script>
<script src="{{ asset('assets/profile/js/plugins.js') }}"></script>
<script src="{{ asset('assets/profile/js/init.js') }}"></script>
{{-- <script src="{{ asset('assets/profile/local/index.js') }}"></script> --}}
<!-- /SCRIPTS -->

</body>
</html>
