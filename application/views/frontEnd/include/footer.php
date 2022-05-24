<!-- Footer -->
<footer class="footer">
	<!-- Baru Footer Top -->
	<div class="footer-top">
		<div class="container-fluid">
			<div class="blocks-items">
				<div class="row">
					<div class="col-md-3">
						<div class="img-footer">
							<!-- <img class="img img-fluid" src="" alt=""> -->
							<h3>Dhewi Lestari</h3>
						</div>
						<div class="text">
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur doloremque tempora atque assumenda eos odio!</p>
						</div>
						<div class="icon-sosmed">
							<ul>
								<li>
									<a href="https://www.instagram.com/dewilestari_makeup_artist/">
										<span class="iconify" data-icon="ph:instagram-logo-bold"></span>
									</a>
								</li>
								<li>
									<a href="https://www.facebook.com/profile.php?id=100007898836533">
										<span class="iconify" data-icon="bxl:facebook"></span>
									</a>
								</li>
								<li>
									<a href="">
										<span class="iconify" data-icon="ic:round-tiktok"></span>
									</a>
								</li>
								<li>
									<a href="https://www.youtube.com/channel/UCbq6uXegumlantSNgvTXeyw">
										<span class="iconify" data-icon="tabler:brand-youtube"></span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-3">
						<div class="items-infor">
							<div class="title">
								<h3>Informasi</h3>
							</div>
							<ul>
								<li>
									<a href="<?= base_url() ?>">Home</a>
								</li>
								<li>
									<a href="<?= base_url('about') ?>">About</a>
								</li>
								<li>
									<a href="<?= base_url() ?>">Layanan</a>
								</li>
								<li>
									<a href="<?= base_url() ?>">Galeri</a>
								</li>
								<li>
									<a href="<?= base_url('contact') ?>">Contact</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-3">
						<div class="block-alamat">
							<div class="title">
								<h3>Alamat</h3>
							</div>
							<div class="text">
								<p>
									Apakah Anda memiliki pertanyaan. Sewa jangan ragu untuk menghubungi kami
								</p>
								<div class="items-icon">
									<div class="icon">
										<a href="">
											<span class="iconify" data-icon="ic:round-email"></span>
											<span>dhewilestari@gmail.com</span>
										</a>
									</div>
									<div class="icon">
										<a href="">
											<span class="iconify" data-icon="fluent:call-48-filled"></span>
											<span>+888 (123) 869523</span>
										</a>
									</div>
									<div class="icon">
										<a href="">
											<span class="iconify" data-icon="carbon:location-filled"></span>
											<span>New York – 1075 Firs Avenue</span>
										</a>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="col-md-3">
						<div class="foot-img">
							<div class="title">
								<h3>The Best Moment</h3>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="img-foot">
										<img class="img img-fluid" src="<?= base_url(); ?>assets/img/img-home-3.jpg" alt="">
									</div>
								</div>
								<div class="col-md-4">
									<div class="img-foot">
										<img class="img img-fluid" src="<?= base_url(); ?>assets/img/thumbnail (6).jpg" alt="">
									</div>
								</div>
								<div class="col-md-4">
									<div class="img-foot">
										<img class="img img-fluid" src="<?= base_url(); ?>assets/img/banner-wedding.jpg" alt="">
									</div>
								</div>

								<div class="col-md-4">
									<div class="img-foot">
										<img class="img img-fluid" src="<?= base_url(); ?>assets/img/banner-wedding.jpg" alt="">
									</div>
								</div>

								<div class="col-md-4">
									<div class="img-foot">
										<img class="img img-fluid" src="<?= base_url(); ?>assets/img/img-home-4.jpg" alt="">
									</div>
								</div>

								<div class="col-md-4">
									<div class="img-foot">
										<img class="img img-fluid" src="<?= base_url(); ?>assets/img/thumbnail (2).jpg" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>


	<!-- Footer Bottom -->
	<div class="footer-bottom">
		<div class="container-fluid p-0">
			<div class="blocks-items">
				<div class="text-copyright mx-auto">
					<p> <span class="iconify" data-icon="emojione-monotone:copyright"></span> 2022 CV. Wedding Orgizer Dhewi Lestari by <span> Davit</span> | All Rights Reserved. </p>
				</div>
			</div>
		</div>
	</div>
</footer>




<!-- Link BS 5  -->
<script src="<?= base_url() ?>assets/js/bootstrap.bundle.min.js"></script>




<!--  Lightbox JS  -->
<script src="<?= base_url() ?>assets/js/lightbox.min.js"></script>

<!--  Ligbox jquery  -->
<script src="<?= base_url() ?>assets/js/lightbox-plus-jquery.min.js"></script>

<!--  Owl Card  -->
<script src="<?= base_url() ?>assets/js/owl-card.js"></script>

<!-- SWEETALERT JS -->
<script src="<?= base_url() ?>assets/sweetalert_js/sweetalert2.all.min.js"></script>



<!-- Counter Up -->
<!-- <script src="<?= base_url() ?>assets/js/jquery.counterup.min.js"></script> -->


<!--  AOS Animasi  -->
<script src="<?= base_url() ?>assets/js/aos.js"></script>
<script>
	AOS.init();
</script>


<!-- Waktu Alert Hilang, Di semua Alert -->
<script>
	window.setTimeout(function() {
		$(".alert").fadeTo(500, 0).slideUp(500, function() {
			$(this).remove();
		});
	}, 2000)
</script>


<!--  LINK CDN OAS  -->
<script src=" https://unpkg.com/aos@next/dist/aos.js "> </script>
<script>
	AOS.init();
</script>

<!--  OWL carousel jquery  -->
<script src="<?= base_url() ?>assets/js/jquery.min.js">
</script>

<!--  Owl carousel inlcude JS  -->
<script src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>


<!--  Jquery  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



<!--  Link OWL Caroseul JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


<!--  Link iconfy  -->
<script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>

<!--  Paralax Js  -->
<script src="<?= base_url() ?>assets/js/parallax.min.js"></script>

<!-- Jquery "JIKA INLCUDE INI ERRRO"-->
<!-- <script src="<?= base_url() ?>assets/js/jquery.min.js"></script> -->

<!--  Custom JS  -->
<script src="<?= base_url() ?>assets/js/custom.js"></script>
<!-- Masonry BS 5 -->
<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async>
</script>
</body>

</html>