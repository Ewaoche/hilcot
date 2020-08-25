<div class="section  <?= ($i==1)?'overlap':'' ?> feature">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-6">
				<h2 class="section-heading editable" id="<?= "{$PageInfo->id}-{$page_part->id}-1" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 1, "COMPANY OVERVIEW") ?></h2>
			</div>
			<div class="col-sm-6 col-md-6">
				<h2 class="section-heading editable" id="<?= "{$PageInfo->id}-{$page_part->id}-2" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 2, "COMPANY OVERVIEW") ?></h2>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6 col-md-6">
				<div class="jumbo-heading">
					<h2 class="editable" id="<?= "{$PageInfo->id}-{$page_part->id}-3" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 3, "OUR REAL COMMITMENT REACHES BEYOND GAS &amp; OIL COMPANY.") ?></h2>
					<p class="lead editable" id="<?= "{$PageInfo->id}-{$page_part->id}-4" ?>" data-type="html"><?= $Core->getCMS($PageInfo->id, $page_part->id, 4, "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.") ?></p>
				</div>
			</div>
			<div class="col-sm-6 col-md-6">
				<div class="jumbo-heading">
					<h2 class="editable" id="<?= "{$PageInfo->id}-{$page_part->id}-5" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 5, "OUR REAL COMMITMENT REACHES BEYOND GAS &amp; OIL COMPANY.") ?></h2>
					<p class="lead editable" id="<?= "{$PageInfo->id}-{$page_part->id}-6" ?>" data-type="html"><?= $Core->getCMS($PageInfo->id, $page_part->id, 6, "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.") ?></p>
				</div>
			</div>
		</div>

	</div>
</div>