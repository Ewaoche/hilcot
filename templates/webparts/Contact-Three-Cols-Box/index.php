<!-- INFO BOX -->
<div class="section  <?= ($i==1)?'overlap':'' ?> info">
		<div class="container">
			<div class="row">				
				<div class="col-sm-4 col-md-4">
					<!-- BOX 1 -->
					<div class="box-icon-4">
						<div class="icon"><i class="fa fa-phone"></i></div>
						<div class="body-content">
							<div class="heading editable" id="<?= "{$PageInfo->id}-{$page_part->id}-1" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 1, "CALL US NOW") ?></div>
							<span class="editable" id="<?= "{$PageInfo->id}-{$page_part->id}-2" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 2, "Office Telephone: +62 800 9000 123 <br> Mobile: +62 800 9000 123") ?></span>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<!-- BOX 2 -->
					<div class="box-icon-4">
						<div class="icon"><i class="fa fa-map-marker"></i></div>
						<div class="body-content">
							<div class="heading editable" id="<?= "{$PageInfo->id}-{$page_part->id}-3" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 3, "COME VISIT US") ?></div>
							<span class="editable" id="<?= "{$PageInfo->id}-{$page_part->id}-4" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 4, "99 S.t Jomblo Park Pekanbaru 28292. Indonesia") ?></span>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<!-- BOX 3 -->
					<div class="box-icon-4">
						<div class="icon"><i class="fa fa-envelope"></i></div>
						<div class="body-content">
							<div class="heading editable" id="<?= "{$PageInfo->id}-{$page_part->id}-5" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 5, "SEND US A MESSAGE") ?></div>
							<span class="editable" id="<?= "{$PageInfo->id}-{$page_part->id}-6" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 6, "General: @petro.com <br> Sales: sales@petro.com") ?></span>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</div>