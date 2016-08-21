<aside class="mobile-navigation">

	<h2 class="offscreen">Panel boczny</h2>
	
	<nav class="mobilenav">

		<h2 class="offscreen">Nawigacja mobilna</h2>

		<ul>
			<li>
				<a href="<?php if(!is_home()){ ?><?= SITE_URL; ?><?php echo '/'; } ?>#">
					<span class="icon-home"></span>Strona główna
				</a>
			</li>
			<li>
				<a href="<?php if(!is_home()){ ?><?= SITE_URL; ?><?php echo '/'; } ?>#about">
					<span class="icon-info"></span>O nas
				</a>
			</li>
			<li>
				<a href="<?php if(!is_home()){ ?><?= SITE_URL; ?><?php echo '/'; } ?>#services"><span class="icon-cogs2"></span>Oferta</a>
			</li>
			<li <?php if(is_single()){?>class="current-menu-item"<?php } ?>>
				<a href="<?php if(!is_home()){ ?><?= SITE_URL; ?><?php echo '/'; } ?>#galleries"><span class="icon-albums"></span>Galerie</a>
			</li>
			<li>
				<a href="<?php if(!is_home()){ ?><?= SITE_URL; ?><?php echo '/'; } ?>#contact">
					<span class="icon-phone-book"></span>Kontakt
				</a>
			</li>
			<li class="item--facebook">
				<a href="https://www.facebook.com/ZRBTajsStanislaw/" target="_blank"><span class="icon-facebook2"></span></a>
			</li>
		</ul>
		
	</nav>
	<!-- END primarynav -->

</aside>
<!-- END sidebar -->