@extends('user.master')
@section('user')
		
	
		<!-- Start Portfolio Details Area -->

		{{-- Kode baru --}}
		<section class="pf-details section">
			<div class="container">
				<div class="row">
					@foreach ($teams as $teams)
					<div class="col-12">
						<div class="inner-content">
							
							<div class="gambar">
								<img src="{{ asset('storage/' . $teams->poto) }}" alt="#">
							</div>
							<div class="body-text">
								<h3>{{ $teams->nama }}</h3>
								<p>{{ $teams->posisi }}</p>
							</div>
							
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</section>
			
		<!-- End Portfolio Details Area -->
@endsection	




{{-- Kode Acuan --}}
		{{-- <section class="pf-details section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="inner-content">
							@foreach ($abouts as $about)
							<div class="image-slider">
								<div class="pf-details-slider">
									<img src="{{ asset('storage/' . $about->foto) }}" alt="#">  
									<img src="{{ asset('user/img/Gajian-Emas.jpeg')}}" alt="#">
								</div>
							</div>
							
							<div class="body-text">
								<h3>{{ $about->judul }}</h3>
								<p>{{ $about->deskripsi }}</p>
								<div class="share">
									<h4>Share Now -</h4>
									<ul>
										<li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</section> --}}












{{-- @extends('user.master')
@section('user') --}}
		<!-- Start Our Team Area -->
	{{-- <section class="our-team section" id="our-team">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">
						<h2>Tim Kami</h2>
						<p>Di Danau Emas Gadai Jatim, kami bangga memiliki tim yang berdedikasi dan profesional untuk melayani Anda dengan sepenuh hati.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!-- Slider Container -->
					<div class="slider-container">
						<div class="slider tim-kami">
							<!-- Single Team Member -->
							<div class="single-member">
								<div class="member-img">
									<img src="{{ asset('user/img/person.jpg')}}" alt="#">
									<div class="social-icons">
										<a href="#"><i class="fa fa-instagram"></i></a>
										<a href="#"><i class="fa fa-whatsapp"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
								<div class="member-details">
									<h4>Moh. Ananta</h4>
									<p>CEO & Founder</p>
								</div>
							</div> --}}
							<!-- Repeat for other team members -->
							{{-- <div class="single-member">
								<div class="member-img">
									<img src="{{ asset('user/img/person.jpg')}}" alt="#">
									<div class="social-icons">
										<a href="#"><i class="fa fa-instagram"></i></a>
										<a href="#"><i class="fa fa-whatsapp"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
								<div class="member-details">
									<h4>Name 2</h4>
									<p>CTO</p>
								</div>
							</div>
							<div class="single-member">
								<div class="member-img">
									<img src="{{ asset('user/img/person.jpg')}}" alt="#">
									<div class="social-icons">
										<a href="#"><i class="fa fa-instagram"></i></a>
										<a href="#"><i class="fa fa-whatsapp"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
								<div class="member-details">
									<h4>Name 3</h4>
									<p>CTO</p>
								</div>
							</div> --}}
							<!-- Add more team members as needed -->
						{{-- </div>
					</div>
				</div>
			</div>
		</div>
	</section> --}}
	<!-- End Our Team Area -->

	<!-- Include jQuery -->
	{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
	<!-- Custom Slider Script -->
	{{-- <script>
	$(document).ready(function(){
		const slider = $('.tim-kami');
		const members = $('.single-member');
		const memberCount = members.length;
		let currentIndex = 0;

		function showNextMember() {
			currentIndex = (currentIndex + 1) % memberCount;
			const translateXValue = -currentIndex * 100;
			slider.css('transform', `translateX(${translateXValue}%)`);
		}

		setInterval(showNextMember, 3000); // Change member every 3 seconds
	});
</script>
@endsection --}}

