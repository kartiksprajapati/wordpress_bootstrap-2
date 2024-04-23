<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blankslate_Child_Speakup
 */

?>
<div class="container">
	<footer class="mt-2">
		<div class="row px-5 px-sm-0">
			<div class="col-md-5 mb-3">
				<a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
					<?= the_custom_logo() ?>
				</a>
				<div class="pt-2">
					<h4 class="text-primary"><?= bloginfo('name') ?></h4>
					<p class="text-secondary"><?= bloginfo('description') ?></p>
				</div>
			</div>

			<div class="col-6 col-md-2 mb-3 offset-md-1">
				<h5>Section</h5>
				<ul class="nav flex-column">
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
				</ul>
			</div>

			<div class="col-6 col-md-2 mb-3">
				<h5>Section</h5>
				<ul class="nav flex-column">
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
				</ul>
			</div>

			<div class="col-6 col-md-2 mb-3">
				<h5>Section</h5>
				<ul class="nav flex-column">
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
					<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
				</ul>
			</div>
		</div>

		<div class="d-flex flex-column flex-sm-row align-items-center justify-content-sm-between py-4 mt-4 border-top">
			<p>© <?= date('Y') ?> <?= bloginfo('name') ?>, Inc. All rights reserved.</p>
			<ul class="list-unstyled d-flex">
				<li class="ms-3">
					<a class="link-body-emphasis" href="#">
						<i class="fa-lg text-primary fab fa-twitter"></i>
						<a>
				</li>
				<li class="ms-3">
					<a class="link-body-emphasis" href="#">
						<i class="fa-lg text-primary fab fa-instagram"></i>
					</a>
				</li>
				<li class="ms-3">
					<a class="link-body-emphasis" href="#">
						<i class="fa-lg text-primary fab fa-facebook"></i>
					</a>
				</li>
			</ul>
		</div>
	</footer>
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>