@extends('user.master')
@section('user')
		<!-- Breadcrumbs -->
		{{-- <div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>Berita</h2>
							<ul class="bread-list">
								<li><a href="/">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Berita</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
		<!-- End Breadcrumbs -->

        		<!-- Start Blog Area -->
		<section class="blog section" id="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Artikel Danau Emas Gadai Jatim</h2>
							<p>Yuk ikuti informasi terbaru kami, melalui artikel di bawah ini!</p>
						</div>
					</div>
				</div>
				<div class="row">
					@foreach ($beritas as $berita)
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
							<a href="{{ route('user.detailberita', $berita->id) }}">
								<img src="{{ asset('storage/' . $berita->fotoberita) }}" alt="#">
							</a>
							</div>
							<div class="news-body">
								<div class="news-content">
									<div class="date">{{ $berita->tanggal }}</div>
									<h2>{{ $berita->judulberita }}</h2>
									<p class="text">{{ Str::limit($berita->deskripsi, 116) }}</p>
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
					@endforeach
				</div>
				
			</div>
		</section>
		<!-- End Blog Area -->
@endsection