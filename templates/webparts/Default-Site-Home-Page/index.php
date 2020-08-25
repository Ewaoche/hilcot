<!-- BANNER -->
<?php $Sliders = $Core->Sliders() ?>
<div id="slides" class="section banner">
	<ul class="slides-container">
		<?php while ($slider = mysqli_fetch_object($Sliders)) : $PageLink = $Core->PageInfo($slider->page_link); ?>
			<li>
				<img src="<?= $slider->slide ?>" alt="<?= $slider->main_title ?>">
				<div class="overlay-bg"></div>
				<div class="container">
					<div class="wrap-caption">
						<h3><?= $slider->top_title ?></h3>
						<h1 class="caption-heading">
							<?= $slider->main_title ?>
						</h1>
						<p class="excerpt"><?= $slider->sub_title ?></p>
						<a href="/hilcot/info/<?= $PageLink->slug ?>" class="btn btn-secondary" title="<?= $slider->button_text ?>"><?= $slider->button_text ?></a>
					</div>
				</div>
			</li>
		<?php endwhile; ?>
	</ul>

	<nav class="slides-navigation">
		<div class="container">
			<a href="#" class="next">
				<i class="fa fa-chevron-right"></i>
			</a>
			<a href="#" class="prev">
				<i class="fa fa-chevron-left"></i>
			</a>
		</div>
	</nav>

</div>

<!-- ABOUT FEATURE -->
<div class="section overlap">
	<div class="container">

		<div class="row ">
			<div class="col-sm-4 col-md-4">
				<!-- BOX 1 -->
				<div class="box-icon-2">
					<div class="icon">
						<div class="fa fa-star-o"></div>
					</div>
					<div class="body-content">
						<div class="heading editable" id="<?= "{$PageInfo->id}-{$page_part->id}-1" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 1, "QUALITY DRIVEN") ?></div>
						<span class="editable" id="<?= "{$PageInfo->id}-{$page_part->id}-2" ?>" data-type="html"><?= $Core->getCMS($PageInfo->id, $page_part->id, 2, "Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.") ?></span>
					</div>
				</div>
			</div>
			<div class="col-sm-4 col-md-4">
				<!-- BOX 2 -->
				<div class="box-icon-2">
					<div class="icon">
						<div class="fa fa-umbrella"></div>
					</div>
					<div class="body-content">
						<div class="heading editable" id="<?= "{$PageInfo->id}-{$page_part->id}-3" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 3, "CUSTOMER FOCUSED") ?></div>
						<span class="editable" id="<?= "{$PageInfo->id}-{$page_part->id}-4" ?>" data-type="html"><?= $Core->getCMS($PageInfo->id, $page_part->id, 4, "Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.") ?></span>
					</div>
				</div>
			</div>
			<div class="col-sm-4 col-md-4">
				<!-- BOX 3 -->
				<div class="box-icon-2">
					<div class="icon">
						<div class="fa fa-users"></div>
					</div>
					<div class="body-content">
						<div class="heading editable" id="<?= "{$PageInfo->id}-{$page_part->id}-5" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 5, "GLOBAL SOURCING") ?></div>
						<span class="editable" id="<?= "{$PageInfo->id}-{$page_part->id}-6" ?>" data-type="html"><?= $Core->getCMS($PageInfo->id, $page_part->id, 6, "Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.") ?></span>
					</div>
				</div>
			</div>

		</div>

		<div class="row">
			<div class="col-sm-12 col-md-12">
				<h2 class="section-heading editable" id="<?= "{$PageInfo->id}-{$page_part->id}-7" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 7, "COMPANY OVERVIEW") ?></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-5 col-md-5">
				<div class="jumbo-heading">
					<h2 class="editable" id="<?= "{$PageInfo->id}-{$page_part->id}-8" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 8, "OUR REAL COMMITMENT REACHES BEYOND GAS &amp; OIL COMPANY.") ?></h2>
					<span class="fa fa-paper-plane-o"></span>
				</div>
			</div>
			<div class="col-sm-7 col-md-7">
				<p class="lead editable" id="<?= "{$PageInfo->id}-{$page_part->id}-9" ?>" data-type="html"><?= $Core->getCMS($PageInfo->id, $page_part->id, 9, "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.") ?></p>
				<p class="editable" id="<?= "{$PageInfo->id}-{$page_part->id}-10" ?>" data-type="html"><?= $Core->getCMS($PageInfo->id, $page_part->id, 10, "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.") ?></p>
			</div>
		</div>

	</div>
</div>


<!-- ABOUT COMPANY -->
<div class="section why section-border bglight">
	<div class="container">
		<div class="row">
			<div class="col-sm-5 col-md-5">
				<div class="director-image">
					<div class="director-image-title editable" id="<?= "{$PageInfo->id}-{$page_part->id}-11" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 11, "HEAD OF OPERATIONS") ?></div>
					<img src="<?= $Core->getCMS($PageInfo->id, $page_part->id, 12, "{$assets}images/director.png") ?>" data-height="676" data-width="580" id="<?= "{$PageInfo->id}-{$page_part->id}-12" ?>" data-type="img">
				</div>
				<div class="margin-bottom-30"></div>
			</div>
			<div class="col-sm-7 col-md-7">
				<h3 class="director-title editable" id="<?= "{$PageInfo->id}-{$page_part->id}-13" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 13, "Peter White") ?></h3>
				<div class="director-position editable" id="<?= "{$PageInfo->id}-{$page_part->id}-14" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 14, "HEAD OF OPERATIONS") ?></div>
				<div class="margin-bottom-30"></div>
				<p class="editable" id="<?= "{$PageInfo->id}-{$page_part->id}-15" ?>" data-type="html"><?= $Core->getCMS($PageInfo->id, $page_part->id, 15, "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.") ?></p>
				<p>&nbsp;</p>

				<blockquote>
					<p class="editable" id="<?= "{$PageInfo->id}-{$page_part->id}-16" ?>" data-type="html"><?= $Core->getCMS($PageInfo->id, $page_part->id, 16, "Petro Industrial Template continues to grow ever day thanks to the confidence our clients have in us. We cover many industries such as oil gas, energy, business services, consumer products.") ?></p>
				</blockquote>
			</div>

		</div>
	</div>
</div>

<!-- PROJECTS -->
<div class="section project">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<h2 class="section-heading white editable" id="<?= "{$PageInfo->id}-{$page_part->id}-17" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 17, "PROJECTS") ?></h2>
			</div>
		</div>

		<div class="row grid-services">
			<div class="col-sm-6 col-md-4 eco manufacturing gas">
				<div class="box-image-4">
					<a href="#" title="Industrial Complex">
						<div class="media">
							<img date-height="676" data-width="580" id="<?= "{$PageInfo->id}-{$page_part->id}-181" ?>" data-type="text" src="<?= $Core->getCMS($PageInfo->id, $page_part->id, 181, "{$assets}images/project-img-1.jpg") ?>" class="img-responsive editable">
						</div>
						<div class="body">
							<div class="content">
								<h4 class="title editable" id="<?= "{$PageInfo->id}-{$page_part->id}-18" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 18, "INDUSTRIAL COMPLEX") ?></h4>
								<span class="category">Hilcot.com</span>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 manufacturing gas">
				<div class="box-image-4">
					<a href="#" title="Industrial Complex">
						<div class="media">
							<img src="<?= $assets ?>images/project-img-2.jpg" alt="" class="img-responsive">
						</div>
						<div class="body">
							<div class="content">
								<h4 class="title editable" id="<?= "{$PageInfo->id}-{$page_part->id}-19" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 19, "The Gas Company") ?></h4>
								<span class="category">Hilcot.com</span>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 industry factory">
				<div class="box-image-4">
					<a href="#" title="Industrial Complex">
						<div class="media">
							<img src="<?= $assets ?>images/project-img-3.jpg" alt="" class="img-responsive">
						</div>
						<div class="body">
							<div class="content">
								<h4 class="title editable" id="<?= "{$PageInfo->id}-{$page_part->id}-20" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 20, "Warehouse Industry") ?></h4>
								<span class="category">Hilcot.com</span>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 industry factory">
				<div class="box-image-4">
					<a href="#" title="Industrial Complex">
						<div class="media">
							<img src="<?= $assets ?>images/project-img-4.jpg" alt="" class="img-responsive">
						</div>
						<div class="body">
							<div class="content">
								<h4 class="title editable" id="<?= "{$PageInfo->id}-{$page_part->id}-21" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 21, "Iron Industry") ?></h4>
								<span class="category">Hilcot.com</span>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 industry oil">
				<div class="box-image-4">
					<a href="#" title="Industrial Complex">
						<div class="media">
							<img src="<?= $assets ?>images/project-img-5.jpg" alt="" class="img-responsive">
						</div>
						<div class="body">
							<div class="content">
								<h4 class="title editable" id="<?= "{$PageInfo->id}-{$page_part->id}-22" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 22, "Gear Manufacturing") ?></h4>
								<span class="category">Hilcot.com</span>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 eco">
				<div class="box-image-4">
					<a href="#" title="Industrial Complex">
						<div class="media">
							<img src="<?= $assets ?>images/project-img-6.jpg" alt="" class="img-responsive">
						</div>
						<div class="body">
							<div class="content">
								<h4 class="title editable" id="<?= "{$PageInfo->id}-{$page_part->id}-23" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 23, "Oil Pipeline Industry") ?></h4>
								<span class="category">Hilcot.com</span>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 eco gas">
				<div class="box-image-4">
					<a href="#" title="Industrial Complex">
						<div class="media">
							<img src="<?= $assets ?>images/project-img-7.jpg" alt="" class="img-responsive">
						</div>
						<div class="body">
							<div class="content">
								<h4 class="title editable" id="<?= "{$PageInfo->id}-{$page_part->id}-24" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 24, "Oil Pipeline Industry") ?></h4>
								<span class="category">Hilcot.com</span>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 eco">
				<div class="box-image-4">
					<a href="#" title="Industrial Complex">
						<div class="media">
							<img src="<?= $assets ?>images/project-img-8.jpg" alt="" class="img-responsive">
						</div>
						<div class="body">
							<div class="content">
								<h4 class="title editable" id="<?= "{$PageInfo->id}-{$page_part->id}-25" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 25, "Oil Pipeline Industry") ?></h4>
								<span class="category">Hilcot.com</span>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 oil">
				<div class="box-image-4">
					<a href="#" title="Industrial Complex">
						<div class="media">
							<img src="<?= $assets ?>images/project-img-9.jpg" alt="" class="img-responsive">
						</div>
						<div class="body">
							<div class="content">
								<h4 class="title editable" id="<?= "{$PageInfo->id}-{$page_part->id}-26" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 26, "Oil Pipeline Industry") ?></h4>
								<span class="category">Hilcot.com</span>
							</div>
						</div>
					</a>
				</div>
			</div>


		</div>
	</div>
</div>



<!-- SERVICES -->
<div class="section services" style="margin-bottom: 60px;">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<h2 class="section-heading editable" id="<?= "{$PageInfo->id}-{$page_part->id}-27" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 27, "SERVICES") ?></h2>
			</div>
		</div>

		<div class="row no-gutter">

			<div class="col-sm-6 col-md-4">
				<!-- BOX 1 -->
				<div class="box-icon-3">
					<div class="line-t"></div>
					<div class="icon">
						<div class="fa fa-gears"></div>
					</div>
					<div class="body-content">
						<div class="heading editable" id="<?= "{$PageInfo->id}-{$page_part->id}-28" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 28, "MECHANICAL ENGINEERING") ?></div>
						<span class="editable" id="<?= "{$PageInfo->id}-{$page_part->id}-29" ?>" data-type="html"><?= $Core->getCMS($PageInfo->id, $page_part->id, 29, "Lorem ipsum dolor sit amet, consectetur adipisicing elit sed") ?></span>
					</div>
					<div class="line-b"></div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<!-- BOX 2 -->
				<div class="box-icon-3">
					<div class="line-t"></div>
					<div class="icon">
						<div class="fa fa-leaf"></div>
					</div>
					<div class="body-content">
						<div class="heading editable" id="<?= "{$PageInfo->id}-{$page_part->id}-30" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 30, "AGRICULTURAL PROCESSING") ?></div>
						<span class="editable" id="<?= "{$PageInfo->id}-{$page_part->id}-31" ?>" data-type="html"><?= $Core->getCMS($PageInfo->id, $page_part->id, 31, "Lorem ipsum dolor sit amet, consectetur adipisicing elit sed") ?></span>
					</div>
					<div class="line-b"></div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<!-- BOX 3 -->
				<div class="box-icon-3">
					<div class="line-t"></div>
					<div class="icon">
						<div class="fa fa-fire"></div>
					</div>
					<div class="body-content">
						<div class="heading editable" id="<?= "{$PageInfo->id}-{$page_part->id}-32" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 32, "OILS AND LUBRICANTS") ?></div>
						<span class="editable" id="<?= "{$PageInfo->id}-{$page_part->id}-33" ?>" data-type="html"><?= $Core->getCMS($PageInfo->id, $page_part->id, 33, "Lorem ipsum dolor sit amet, consectetur adipisicing elit sed") ?></span>
					</div>
					<div class="line-b"></div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<!-- BOX 4 -->
				<div class="box-icon-3">
					<div class="line-t"></div>
					<div class="icon">
						<div class="fa fa-flash"></div>
					</div>
					<div class="body-content">
						<div class="heading editable" id="<?= "{$PageInfo->id}-{$page_part->id}-34" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 34, "POWER AND ENERGY") ?></div>
						<span class="editable" id="<?= "{$PageInfo->id}-{$page_part->id}-35" ?>" data-type="html"><?= $Core->getCMS($PageInfo->id, $page_part->id, 35, "Lorem ipsum dolor sit amet, consectetur adipisicing elit sed") ?></span>
					</div>
					<div class="line-b"></div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<!-- BOX 5 -->
				<div class="box-icon-3">
					<div class="line-t"></div>
					<div class="icon">
						<div class="fa fa-flask"></div>
					</div>
					<div class="body-content">
						<div class="heading editable" id="<?= "{$PageInfo->id}-{$page_part->id}-36" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 36, "CHEMICAL RESEARCH") ?></div>
						<span class="editable" id="<?= "{$PageInfo->id}-{$page_part->id}-37" ?>" data-type="html"><?= $Core->getCMS($PageInfo->id, $page_part->id, 37, "Lorem ipsum dolor sit amet, consectetur adipisicing elit sed") ?></span>
					</div>
					<div class="line-b"></div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<!-- BOX 6 -->
				<div class="box-icon-3">
					<div class="line-t"></div>
					<div class="icon">
						<div class="fa fa-cubes"></div>
					</div>
					<div class="body-content">
						<div class="heading editable" id="<?= "{$PageInfo->id}-{$page_part->id}-38" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 38, "MATERIAL ENGINEERING") ?></div>
						<span class="editable" id="<?= "{$PageInfo->id}-{$page_part->id}-39" ?>" data-type="html"><?= $Core->getCMS($PageInfo->id, $page_part->id, 39, "Lorem ipsum dolor sit amet, consectetur adipisicing elit sed") ?></span>
					</div>
					<div class="line-b"></div>
				</div>
			</div>

		</div>
	</div>
</div>




<?php $Testimonies = $Core->Testimonies() ?>
<!-- TESTIMONIALS -->
<div class="section testimony bglight">
	<div class="container">

		<div class="row">

			<div class="col-sm-12 col-md-12">

				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading">TESTIMONIALS</h2>
					</div>
				</div>

				<div id="owl-testimony">

					<?php while ($testimony = mysqli_fetch_object($Testimonies)) : ?>
						<div class="item">
							<div class="testimonial-1">
								<div class="media"><img src="<?= $testimony->photo ?>" class="img-responsive"></div>
								<div class="body">
									<div class="title"><?= $testimony->client ?></div>
									<div class="company"><?= $testimony->title ?></div>
									<p><?= $testimony->testimony ?></p>
								</div>
							</div>
						</div>
					<?php endwhile; ?>

				</div>

			</div>

		</div>
	</div>
</div>




<!-- CTA -->
<div class="section cta" style="margin-top: 20px;">
	<div class="container">

		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="cta-info">
					<h3 class="editable" id="<?= "{$PageInfo->id}-{$page_part->id}-40" ?>" data-type="html"><?= $Core->getCMS($PageInfo->id, $page_part->id, 40, "If you need industrial solution... We are available for you") ?></h3>
					<p class="editable" id="<?= "{$PageInfo->id}-{$page_part->id}-41" ?>" data-type="html"><?= $Core->getCMS($PageInfo->id, $page_part->id, 41, "We provide innovative solutions for sustainable progress. Our professional team works to increase productivity and cost effectiveness on the market") ?></p>
					<a href="/info/contact-us" class="btn btn-cta">CONTACT US</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $RecentBlogs = $Core->Blogs(4) ?>
<!-- BLOG -->
<div class="section blog">
	<div class="container">
		<div class="row">

			<div class="col-sm-12 col-md-12">
				<h2 class="section-heading">RECENT NEWS</h2>
			</div>

			<?php while ($rblog = mysqli_fetch_object($RecentBlogs)) : ?>
				<div class="col-sm-6 col-md-3">
					<!-- BOX 1 -->
					<div class="box-news-1">
						<div class="media gbr">
							<img src="<?= $rblog->page_photo ?>" alt="<?= $rblog->title ?>" class="img-responsive">
						</div>
						<div class="body">
							<div class="title"><a href="/news/<?= $rblog->slug ?>" title="<?= $rblog->title ?>"><?= $rblog->title ?></a></div>
							<div class="meta">
								<span class="date"><i class="fa fa-clock-o"></i> <?= date("M j, Y", strtotime($rblog->created)) ?></span>
								<span class="comments"><i class="fa fa-comment-o"></i> <?= $rblog->views ?> Views</span>
							</div>
						</div>
					</div>
				</div>
			<?php endwhile; ?>

		</div>
	</div>
</div>



<!-- CLIENT -->
<div class="section stat-client">
		<div class="container">
			
			<div class="row">
				
				<div class="col-sm-3 col-md-3">
					<div class="client-img">
						<a href="#"><img src="<?= $Core->getCMS($PageInfo->id, $page_part->id, 51, "{$assets}images/partners-1.png") ?>" id="<?= "{$PageInfo->id}-{$page_part->id}-51" ?>" data-type="img" class="img-responsive editable"></a>
					</div>
				</div>

				<div class="col-sm-3 col-md-3">
					<div class="client-img">
						<a href="#"><img src="<?= $Core->getCMS($PageInfo->id, $page_part->id, 52, "{$assets}images/partners-2.png") ?>" id="<?= "{$PageInfo->id}-{$page_part->id}-52" ?>" data-type="img" class="img-responsive editable"></a>
					</div>
				</div>

				<div class="col-sm-3 col-md-3">
					<div class="client-img">
						<a href="#"><img src="<?= $Core->getCMS($PageInfo->id, $page_part->id, 53, "{$assets}images/partners-3.png") ?>" id="<?= "{$PageInfo->id}-{$page_part->id}-53" ?>" data-type="img" class="img-responsive editable"></a>
					</div>
				</div>

				<div class="col-sm-3 col-md-3">
					<div class="client-img">
						<a href="#"><img src="<?= $Core->getCMS($PageInfo->id, $page_part->id, 54, "{$assets}images/partners-4.png") ?>" id="<?= "{$PageInfo->id}-{$page_part->id}-54" ?>" data-type="img" class="img-responsive editable"></a>
					</div>
				</div>

				
			</div>
		</div>
	</div>