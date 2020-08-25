
	
	
	<div class="section  <?= ($i==1)?'overlap':'' ?> feature">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<h2 class="section-heading editable" id="<?= "{$PageInfo->id}-{$page_part->id}-1" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id,$page_part->id,1,"COMPANY OVERVIEW") ?></h2>
					<img class="editable" id="<?= "{$PageInfo->id}-{$page_part->id}-2" ?>" data-type="img" src="<?= $Core->getCMS($PageInfo->id, $page_part->id, 2,"{$assets}images/banner-page.jpg") ?>">
				</div>
			</div>
		</div>
	</div>