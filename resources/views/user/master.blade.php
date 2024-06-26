<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Title -->
        <title>PT. Danau Emas Gadai Jatim- Cabang Banyuwangi</title>
		
		<!-- Favicon -->
        <link rel="icon" href="{{ asset('user/img/logo-pt.png')}}">
		
		<!-- Google Fonts -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css')}}">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="{{ asset('user/css/nice-select.css')}}">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="{{ asset('user/css/font-awesome.min.css')}}">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="{{ asset('user/css/icofont.css')}}">
		<!-- Slicknav -->
		<link rel="stylesheet" href="{{ asset('user/css/slicknav.min.css')}}">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{ asset('user/css/owl-carousel.css')}}">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="{{ asset('user/css/datepicker.css')}}">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="{{ asset('user/css/animate.min.css')}}">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{ asset('user/css/magnific-popup.css')}}">
		{{-- BtnWhatsApp --}}
		<link rel="stylesheet" href="{{ asset('user/css/btnwhatsapp.css')}}">

		<!-- Include Bootstrap Icons CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">

		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="{{ asset('user/css/normalize.css')}}">  
        <link rel="stylesheet" href="{{ asset('user/style.css')}}">
        <link rel="stylesheet" href="{{ asset('user/css/responsive.css')}}">

		<!-- ABOUT CSS ---->
		{{-- <link rel="stylesheet" href="{{ asset('user/css/fonts/icomoon/style.css')}}" />
		<link rel="stylesheet" href="{{ asset('user/css/fonts/flaticon/flaticon.css')}}" />

		<link rel="stylesheet" href="{{ asset ('user/css/tiny-slider.css')}}" />
		<link rel="stylesheet" href="{{ asset ('user/css/css/aos.css')}}"/>
		<link rel="stylesheet" href="{{ asset ('user/css/style.css')}}"/> --}}

    </head>
    <body>
	
		<!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

            </div>
        </div>
        <!-- End Preloader -->
		{{-- <!-- Get Pro Button -->
		<ul class="pro-features">
			<a class="get-pro" href="#">Get Pro</a>
			<li class="big-title">Pro Version Available on Themeforest</li>
			<li class="title">Pro Version Features</li>
			<li>2+ premade home pages</li>
			<li>20+ html pages</li>
			<li>Color Plate With 12+ Colors</li>
			<li>Sticky Header / Sticky Filters</li>
			<li>Working Contact Form With Google Map</li>
			<div class="button">
				<a href="http://preview.themeforest.net/item/mediplus-medical-and-doctor-html-template/full_screen_preview/26665910?_ga=2.145092285.888558928.1591971968-344530658.1588061879" target="_blank" class="btn">Pro Version Demo</a>
				<a href="https://themeforest.net/item/mediplus-medical-and-doctor-html-template/26665910" target="_blank" class="btn">Buy Pro Version</a>
			</div>
		</ul>  --}}
		<!-- Header Area -->
		<header class="header" >
			{{-- <!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-5 col-12">
							<!-- Contact -->
							{{-- <ul class="top-link">
								<li><a href="{{ route('user.about') }}">About</a></li> --}}
								{{-- <li><a href="#">Berita</a></li> --}}

								{{-- <li><a href="{{ route ('user.contact')}}">Contact</a></li>

								{{-- <li><a href="">Contact</a></li>

							
							<!-- End Contact -->
						</div>
						<div class="col-lg-6 col-md-7 col-12">
							<!-- Top Contact -->
							<ul class="top-contact">
								<li><i class="fa fa-phone"></i><a href="https://api.whatsapp.com/send?phone=6281357769681" target="_blank">+62 Nomor di ganti</a></li>
								<li><i class="fa fa-envelope"></i><a href="mailto: pt.danauemasgadaijatim@gmail.com" >Danau Emas Gadai Jatim</a></li>
							</ul>
							<!-- End Top Contact --> --}} 
						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar -->
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a href="/"><img src="{{ asset('user/img/danaunew.png')}}" alt="#" height="50%" width="200px" ></a> 
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-7 col-md-9 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
											<li><a href="/">Beranda</a>  
												{{-- class="active" --}}
											</li>

											<li><a href="{{ route('user.about')}}">Tentang Kami</a></li>
											<li><a href="{{ route('user.berita')}}">Artikel</a></li>											
											<li><a href="#">Tim Kami<i class="icofont-rounded-down"></i></a>

												<ul class="dropdown">
													<li><a href="{{ route('user.team')}}">Tim Keseluruhan</a></li>
												</ul>
											</li>

											<li><a href="{{ route('user.contact')}}">Hubungi Kami</a></li>

										</ul>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>
							<div class="col-lg-2 col-12">
								<div class="get-quote">
									<a href="{{ route('login') }}" class="btn">Login For Staff</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->

		<button id="waButton">
			{{-- <i class="bi bi-whatsapp" style="font-size: 30px;"></i> --}}
			<img id="buttonIcon" src="{{ asset('user/img/wa.png')}}" alt="WhatsApp" width="30" height="30">
		</button>
	
		<div id="popup" class="popup">
			<h3><img src="https://ugc.production.linktr.ee/139975e9-b7e3-42aa-bb64-2d900a6c57e2_Logo-PT-Danau-Emas-Gadai-Jatim-01.png" alt="WhatsApp" width="40" height="40">Contact Person</h3>
			<div class="contact-section">
				<h4>Pusat</h4>
				<ul>
					<li>
						<img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" width="30" height="30">
						<div class="contact-info">
							<span class="name">Kantor Pusat</span>
							<span class="unit">Pusat</span>
						</div>
						<button class="waLink" data-phone="6287778312813" data-message="Hallo, Unit Pusat Surabaya">Chat</button>
					</li>
				</ul>
			</div>
			<hr>
			<ul>
				<li>
					<img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" width="30" height="30">
					<div class="contact-info">
						<span class="name">Penjaringan Sari</span>
						{{-- <span class="unit">Surabaya</span> --}}
					</div>
					<button class="waLink" data-phone="6287778312813" data-message="Hello, Central Office">Chat</button>
				</li>
				<li>
					<img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" width="30" height="30">
					<div class="contact-info">
						<span class="name">Tuban Gajahmada</span>
						{{-- <span class="unit">Surabaya</span> --}}
					</div>
					<button class="waLink" data-phone="6287778312813" data-message="Hello, Central Office">Chat</button>
				</li>
				<li>
					<img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" width="30" height="30">
					<div class="contact-info">
						<span class="name">Tambahrejo</span>
						{{-- <span class="unit">Surabaya</span> --}}
					</div>
					<button class="waLink" data-phone="6287778312813" data-message="Hallo, apaka">Chat</button>
				</li>
				<li>
					<img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" width="30" height="30">
					<div class="contact-info">
						<span class="name">Ronggolawe</span>
						{{-- <span class="unit">Surabaya</span> --}}
					</div>
					<button class="waLink" data-phone="6287778312813" data-message="Hallo, apaka">Chat</button>
				</li>
				<li>
					<img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" width="30" height="30">
					<div class="contact-info">
						<span class="name">Banyuwangi</span>
						{{-- <span class="unit">Banyuwangi</span> --}}
					</div>
					<button class="waLink" data-phone="6287778312813" data-message="Hallo, apaka">Chat</button>
				</li>
				<li>
					<img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" width="30" height="30">
					<div class="contact-info">
						<span class="name">Rogojampi</span>
						{{-- <span class="unit">Banyuwangi</span> --}}
					</div>
					<button class="waLink" data-phone="6287778312813" data-message="Hallo, apaka">Chat</button>
				</li>
				<li>
					<img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" width="30" height="30">
					<div class="contact-info">
						<span class="name">Muncar</span>
						{{-- <span class="unit">Banyuwangi</span> --}}
					</div>
					<button class="waLink" data-phone="6287778312813" data-message="Hallo, apaka">Chat</button>
				</li>
			</ul>
		</div>
		
        @yield('user')

		@if(@session('success'))
		<div class="alert alert-success">{{ session('success') }}</div>
		@endif

		{{-- @if(session('success'))
		<div class="alert alert-success">
			{{ session('success') }}
		</div>
		@endif	 --}}

		
		<!-- Footer Area -->
		<footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Tentang Kami</h2>
								<p>Danau Emas merupakan pegadaian dibawah naungan INKOPPOL dan OJK yang hadir untuk membantu masyarakat dalam menghadapi masalah keuangan dengan cara mudah, aman dan cepat.</p>
								<!-- Social -->
<ul class="social">
    <li><a href="mailto:pt.danauemasgadaijatim@gmail.com" class="social-link"><img src="{{ asset('user/img/sosmed-01.png') }}" alt="TikTok"></a></li>
    <li><a href="https://www.instagram.com/danauemasid/" class="social-link"><img src="{{ asset('user/img/sosmed-04.png') }}" alt="TikTok"></a></li>
    <li><a href="https://www.facebook.com/share/z2aH3SsSzZw3ps6M/?mibextid=qi2Omg" class="social-link"><img src="{{ asset('user/img/sosmed-02.png') }}" alt="TikTok"></a></li>
    <li><a href="https://www.tiktok.com/@danauemasbanyuwangi" class="social-link"><img src="{{ asset('user/img/sosmed-03.png') }}" alt="TikTok"></a></li>
</ul>
<!-- End Social -->





							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Tautan Cepat</h2>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											{{-- <li><a href="{{ route('user.index')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
											<li><a href="{{ route('user.about')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>About Us</a></li>
											<li><a href="{{ route('user.berita')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Berita</a></li> --}}

											<li><a href="{{ route('user.index')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Beranda</a></li>
											{{-- <li><a href="{{ route('user.about')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Tentang Kami</a></li> --}}
											<li><a href="{{ route('user.berita')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Artikel</a></li>
										</ul>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											{{-- <li><a href="{{route('user.team')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Our Team</a></li>
											<li><a href="{{route('user.contact')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact Us</a></li>
											<li><a href="{{route('user.faq')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>FAQ</a></li> --}}

											<li><a href="{{route('user.team')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Tim Kami</a></li>
											<li><a href="{{route('user.contact')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Hubungi Kami</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Jam Buka</h2>
								<p>Berikut adalah jam layanan PT. Danau Emas Gadai Jatim :</p>
								<ul class="time-sidual">
									<li class="day">Senin - Jum'at <span>8.00-17.00</span></li>
									<li class="day">Sabtu <span>8.00-13.00</span></li>
									<li class="day"><strong>Minggu & Hari Besar</strong><span><strong>Libur</span></strong></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								{{-- <img style="margin-right: 10px" src="{{ asset('user/img/ojk.png')}}"></img> --}}

								<img style="margin-right: 20px" src="{{ asset('user/img/imgfooter-02.png')}}"></img>
								{{-- <h2>Informasi</h2>
								<p>Induk Koperasi Kepolisian Negara Republik Indonesia (INKOPPOL ) adalah Koperasi Sekunder Tingkat Nasional yang bergerak dibidang perdagangan dan pengembangan jasa umum, yang berada di ibukota Negara Republik Indonesia di Jakarta, yang berdiri sejak 5 Desember 1968, yang diawali dengan nama Induk Koperasi Angkatan Kepolisian ( INKOPAK ).</p> --}}
								{{-- <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
									<input name="email" placeholder="Email Address" class="common-input" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Your email address'" required="" type="email">
									<button class="button"><i class="icofont icofont-paper-plane"></i></button>
								</form> --}}
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>© Copyright 2024 | PT. Danau Emas Gadai Jatim</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->
		
		<!-- jquery Min JS -->
        <script src="{{ asset('user/js/jquery.min.js')}}"></script>
		<!-- jquery Migrate JS -->
		<script src="{{ asset('user/js/jquery-migrate-3.0.0.js')}}"></script>
		<!-- jquery Ui JS -->
		<script src="{{ asset('user/js/jquery-ui.min.js')}}"></script>
		<!-- Easing JS -->
        <script src="{{ asset('user/js/easing.js')}}"></script>
		<!-- Color JS -->
		<script src="{{ asset('user/js/colors.js')}}"></script>
		<!-- Popper JS -->
		<script src="{{ asset('user/js/popper.min.js')}}"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="{{ asset('user/js/bootstrap-datepicker.js')}}"></script>
		<!-- Jquery Nav JS -->
        <script src="{{ asset('user/js/jquery.nav.js')}}"></script>
		<!-- Slicknav JS -->
		<script src="{{ asset('user/js/slicknav.min.js')}}"></script>
		<!-- ScrollUp JS -->
        <script src="{{ asset('user/js/jquery.scrollUp.min.js')}}"></script>
		<!-- Niceselect JS -->
		<script src="{{ asset('user/js/niceselect.js')}}"></script>
		<!-- Tilt Jquery JS -->
		<script src="{{ asset('user/js/tilt.jquery.min.js')}}"></script>
		<!-- Owl Carousel JS -->
        <script src="{{ asset('user/js/owl-carousel.js')}}"></script>
		<!-- counterup JS -->
		<script src="{{ asset('user/js/jquery.counterup.min.js')}}"></script>
		<!-- Steller JS -->
		<script src="{{ asset('user/js/steller.js')}}"></script>
		<!-- Wow JS -->
		<script src="{{ asset('user/js/wow.min.js')}}"></script>
		<!-- Magnific Popup JS -->
		<script src="{{ asset('user/js/jquery.magnific-popup.min.js')}}"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>

		<script src="https://maps.google.com/maps/api/js?key=AWNVXaacmoDrNYbs5"></script>
		<!-- Bootstrap JS -->
		<script src="{{ asset('user/js/bootstrap.min.js')}}"></script>
		<!-- Main JS -->
		<script src="{{ asset('user/js/main.js')}}"></script>
		{{-- BtnWhatsApp --}}
		<script src="{{ asset('user/js/btnwhatsapp.js')}}"></script>
		<script>

			$(document).ready(function(){

					$(".unit-slider").owlCarousel({
						loop: true,
						margin: 10,
						dots: true, // Enable dots navigation
						nav: false, // Disable next and prev buttons
						responsive: {
							0: {
								items: 1
							},
							600: {
								items: 2
							},
							1000: {
								items: 3
							}
						}
					});
				});
		</script>

    </body>
</html>