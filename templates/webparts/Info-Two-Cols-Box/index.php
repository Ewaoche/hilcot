
	
	
	<div class="section  <?= ($i==1)?'overlap':'' ?> feature">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<h2 class="section-heading editable" id="<?= "{$PageInfo->id}-{$page_part->id}-1" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id,$page_part->id,1,"COMPANY OVERVIEW") ?></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-5 col-md-5">
					<div class="jumbo-heading">
						<h2 class="editable" id="<?= "{$PageInfo->id}-{$page_part->id}-2" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id,$page_part->id,2, "OUR REAL COMMITMENT REACHES BEYOND GAS &amp; OIL COMPANY.") ?></h2>
						<span class="fa fa-paper-plane-o"></span>
					</div>
				</div>
				<div class="col-sm-7 col-md-7">
					<p class="lead editable" id="<?= "{$PageInfo->id}-{$page_part->id}-3" ?>" data-type="html"><?= $Core->getCMS($PageInfo->id,$page_part->id,3, "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.") ?></p> 
					<p class="editable"  id="<?= "{$PageInfo->id}-{$page_part->id}-4" ?>" data-type="html"><?= $Core->getCMS($PageInfo->id,$page_part->id,4, "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.") ?></p> 
				</div>
			</div>
		</div>
	</div>