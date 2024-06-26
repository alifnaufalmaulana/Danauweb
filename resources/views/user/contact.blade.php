@extends('user.master')
@section('user')


		<!-- Breadcrumbs -->
		{{-- <div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>Contact Us</h2>
							<ul class="bread-list">
								<li><a href="index.html">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Contact Us</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
		<!-- End Breadcrumbs -->
				
		<!-- Start Contact Us -->
		<section class="contact-us section">
			<div class="container">
				<div class="inner">
					<div class="row"> 
						<div class="col-lg-6">
							<div class="contact-us-left">
								<!--Start Google-map -->
								<div>
									<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4027823.3968730476!2d117.7012821!3d-9.6449972!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd1518c0e709b55%3A0x8dd2ef0a61d9b5fb!2sPT%20DANAU%20EMAS%20GADAI%20JATIM%20ROGOJAMPI!5e0!3m2!1sid!2sid!4v1716468779550!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div>
								<!--/End Google-map -->

							</div>
						</div>
						<div class="col-lg-6">
							<div class="contact-us-form">
								<h2>Hubungi Kami Disini!</h2>
                                <p>Yuk beritahu kami keluhan anda melalui pesan di bawah ini!</p>


								<!-- Form -->
								<form class="form" method="POST" action="{{ route('contact.store') }}">
									@csrf
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="nama" placeholder="Nama" required="">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="email" name="email" placeholder="Email" required="">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="phone" placeholder="No. Telp" required="">
											</div>
										</div>
										{{-- <div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="subject" placeholder="Subject" required="">
											</div>
										</div> --}}
										<div class="col-lg-12">
											<div class="form-group">

												<textarea name="descontact" placeholder="Ketik Pesanmu Disini....." required=""></textarea>

											</div>
										</div>
										<div class="col-12">
											<div class="form-group login-btn">
												<button class="btn" type="submit">Kirim</button>
											</div>
											{{-- <div class="checkbox">
												<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">Do you want to subscribe our Newsletter ?</label>
											</div> --}}
										</div>
									</div>
								</form>
								<!--/ End Form -->
							</div>
						</div>
					</div>
				</div>
				{{-- <div class="contact-info">
					<div class="row"> --}}
						<!-- single-info -->
						{{-- <div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont icofont-ui-call"></i>
								<div class="content">
									<h3>+(000) 1234 56789</h3>
									<p>info@company.com</p>
								</div>
							</div>
						</div> --}}
						<!--/End single-info -->
						<!-- single-info -->
						{{-- <div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont-google-map"></i>
								<div class="content">
									<h3>2 Fir e Brigade Road</h3>
									<p>Chittagonj, Lakshmipur</p>
								</div>
							</div>
						</div> --}}
						<!--/End single-info -->
						<!-- single-info -->
						{{-- <div class="col-lg-4 col-12 ">
							<div class="single-info">
								<i class="icofont icofont-wall-clock"></i>
								<div class="content">
									<h3>Mon - Sat: 8am - 5pm</h3>
									<p>Sunday Closed</p>
								</div>
							</div>
						</div> --}}
						<!--/End single-info -->
					{{-- </div>
				</div>
			</div>
		</section> --}}
		<!--/ End Contact Us -->
    
{{-- @endsection --}}

    <!-- Breadcrumbs -->
    {{-- <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Contact Us</h2>
                        <ul class="bread-list">
                            <li><a href="index.html">Home</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Breadcrumbs -->

    <!-- Start Contact Us -->
    {{-- <section class="contact-us section">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-us-left"> --}}
                            <!-- Start Google-map -->
                            {{-- <div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4027823.3968730476!2d117.7012821!3d-9.6449972!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd1518c0e709b55%3A0x8dd2ef0a61d9b5fb!2sPT%20DANAU%20EMAS%20GADAI%20JATIM%20ROGOJAMPI!5e0!3m2!1sid!2sid!4v1716468779550!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div> --}}
                            <!--/End Google-map -->
                        {{-- </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-us-form">
                            <h2>Hubungi Kami Disini!</h2>
                            <p>Yuk beritahu kami keluhan anda melalui pesan di bawah ini!</p> --}}

                            <!-- Form -->
                            {{-- <form class="form" method="POST" action="{{ route('contact.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="nama" placeholder="Nama" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="phone" placeholder="No. Telp" required="">
                                        </div>
                                    </div> --}}
                                    {{-- <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="subject" placeholder="Subject" required="">
                                        </div>
                                    </div> --}}
                                    {{-- <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea name="descontact" placeholder="Ketik Pesanmu Disini....." required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group login-btn">
                                            <button class="btn" type="submit">Kirim</button>
                                        </div> --}}
                                        {{-- <div class="checkbox">
                                            <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">Do you want to subscribe our Newsletter ?</label>
                                        </div> --}}
                                    {{-- </div>
                                </div>
                            </form>
                            <!--/ End Form -->
                        </div>
                    </div>
                </div>
            </div> --}}
            
            <div class="contact-info">
                <div class="row">
                    <!-- single-info -->
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="single-info d-flex align-items-center">
                            <i class="icofont icofont-ui-call mr-3"></i>
                            <div class="content">
                                <h3>082-335-882-304</h3>
                                <p class="small-text">pt.danauemasgadaijatim@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <!--/End single-info -->
                    <!-- single-info -->
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="single-info d-flex align-items-center">
                            <i class="icofont-google-map mr-3"></i>
                            <div class="content">
                                <h3>Danau Emas Gadai Jatim</h3>
                                <p class="small-text">Jl. Ps. Ruko No.11, Pancoran Kulon, Rogojampi, Kec. Rogojampi, Kabupaten Banyuwangi, Jawa Timur</p>
                            </div>
                        </div>
                    </div>
                    <!--/End single-info -->
                    <!-- single-info -->
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="single-info d-flex align-items-center">
                            <i class="icofont icofont-wall-clock mr-3"></i>
                            <div class="content">
                                <h3>Senin-Jum’at : 8.00-17.00</h3>
                                <h3>Sabtu : 8.00-13.00</h3>
                                <p class="small-text">Minggu & Hari Besar, Libur</p>
                            </div>
                        </div>
                    </div>
                    <!--/End single-info -->
                </div>
            </div>

            <style>
                .content h3 {
                    font-size: 0.875rem; /* Ukuran teks lebih kecil */
                }

                .content p {
                    font-size: 0.75rem; /* Ukuran teks lebih kecil */
                }

                .small-text {
                    font-size: 0.625rem; /* Ukuran teks lebih kecil lagi */
                }
            </style>
        </div>
    </section>
    <!--/ End Contact Us -->

    <!-- Footer -->
    <footer class="footer section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-content">
                        {{-- <p>&copy; 2024 Danau Emas Gadai Jatim. All Rights Reserved.</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ End Footer -->

    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
@endsection

