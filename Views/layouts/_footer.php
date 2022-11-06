<footer id="footer">
				<div class="container">
					<div class="footer-ribbon">
						<span>Get in Touch</span>
					</div>
					<div class="row py-5 my-4">
						<div class="col-md-6 mb-4 mb-lg-0">
							<a href="index.html" class="logo pr-0 pr-lg-3">
								<img alt="<?= CLIENT_NAME ?>" src="<?=IMAGES_URL?>logo-full-alt-64x.png" class="opacity-7 bottom-4" height="33">
							</a>
							<p class="mt-2 mb-2">Here at <?= CLIENT_NAME ?>, we believe every child needs an equal opportunity to have a good, stable and quality education. That is why we are committed to supporting the best environments for our children at the most convenient and affordable values</p>
							<p class="mb-0"><a href="#" class="btn-flat btn-xs text-color-light"><strong class="text-2">Recnt Articles</strong><i class="fas fa-angle-right p-relative top-1 pl-2"></i></a></p>
						</div>
						<div class="col-md-6">
							<h5 class="text-3 mb-3">CONTACT US</h5>
							<div class="row">
								<div class="col-md-6">
									<ul class="list list-icons list-icons-lg">
										<li class="mb-1"><i class="far fa-dot-circle  text-color-secondary"></i><p class="m-0"><?= STREET_ADDRESS ?></p></li>
										<li class="mb-1"><i class="fab fa-whatsapp  text-color-secondary"></i><p class="m-0"><a href="tel:<?=SUPPORT_CONTACT_1?>"><?=SUPPORT_CONTACT_1?></a></p></li>
										<li class="mb-1"><i class="far fa-envelope  text-color-secondary"></i><p class="m-0"><a href="mailto:<?=SUPPORT_EMAIL?>"><?=SUPPORT_EMAIL?></a></p></li>
									</ul>
								</div>
								<div class="col-md-6">
									<ul class="list list-icons list-icons-sm">
									<?php
										foreach ($navLinks as $key => $link){
											if($link['href'] != "#" && !is_array($navLinks[$key]['href'])){
												?>
												<li><i class="fas fa-angle-right"></i><a class="link-hover-style-1 ml-1" href="<?=$link['href']?>"><?=format_string($key)?></a></li>
												<?php
											}
										}?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright footer-copyright-style-2">
					<div class="container py-2">
						<div class="row py-4">
							<div class="col d-flex align-items-center justify-content-center">
								<p>© Copyright 2020. All Rights Reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>

<?= generate_tag_group('script', $footerJs);?>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', '<?=GOOGLE_ANALYITICS_ID ?>', 'auto');
			ga('send', 'pageview');
		</script>
		 -->

</body>

</html>