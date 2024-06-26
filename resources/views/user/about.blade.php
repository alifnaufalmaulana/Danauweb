@extends('user.master')

@section('user')
<div class="hero page-inner">
	
		<!-- Breadcrumbs -->
		{{-- <div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>About</h2>
							<ul class="bread-list">
								<li><a href="/">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">About</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
		<!-- End Breadcrumbs -->

		<div class="container mt-3">
			<div class="row mt-3 text-center">
				<iframe width=1000% height="500" src="https://www.youtube.com/embed/rICaYGVPMBY?si=AaRgwGB0c7qUe-s7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				<div class="text-justify">
				</div>
			</div>
		</div>
	
		<!-- Start Portfolio Details Area -->

		{{-- Kode baru --}}
		<section class="pf-details section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="inner-content">
							@foreach ($abouts as $about)
							<div class="gambar">
								<img src="{{ asset('storage/' . $about->foto) }}" alt="#">
							</div>
							<div class="body-text">
								<h3>{{ $about->judul }}</h3>
								<p>{{ $about->deskripsi }}</p>
							</div>
							@endforeach
						</div>
					</div>
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
		</section>
		<!-- End Portfolio Details Area -->
@endsection	
