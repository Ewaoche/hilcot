
<div class="section <?= ($i == 1) ? 'overlap' : '' ?> section-border">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <h2 class="section-heading editable" id="<?= "{$PageInfo->id}-{$page_part->id}-1" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 1, "WHY CHOOSING US") ?></h2>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4 col-md-4">
                <!-- BOX 1 -->
                <div class="box-image-2 margin-bottom-30">
                    <div class="image">
                        <img class="editable" id="<?= "{$PageInfo->id}-{$page_part->id}-2" ?>" data-type="img" data-height="500" data-width="800" src="<?= $Core->getCMS($PageInfo->id, $page_part->id, 2,"{$assets}images/blog-3.jpg") ?>">
                    </div>
                    <div class="blok-title editable" id="<?= "{$PageInfo->id}-{$page_part->id}-3" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 3, "We Are Professional") ?></div>
                    <div class="description editable" id="<?= "{$PageInfo->id}-{$page_part->id}-4" ?>" data-type="html"><?= $Core->getCMS($PageInfo->id, $page_part->id, 4, "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.") ?></div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <!-- BOX 2 -->
                <div class="box-image-2 margin-bottom-30">
                    <div class="image">
                        <img class="editable" id="<?= "{$PageInfo->id}-{$page_part->id}-5" ?>" data-type="img" data-height="500" data-width="800" src="<?= $Core->getCMS($PageInfo->id, $page_part->id, 5,"{$assets}images/blog-4.jpg") ?>">
                    </div>
                    <div class="blok-title editable" id="<?= "{$PageInfo->id}-{$page_part->id}-6" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 6, "We Are Trusted") ?></div>
                    <div class="description editable" id="<?= "{$PageInfo->id}-{$page_part->id}-7" ?>" data-type="html"><?= $Core->getCMS($PageInfo->id, $page_part->id, 7, "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.") ?></div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <!-- BOX 1 -->
                <div class="box-image-2 margin-bottom-30">
                    <div class="image">
                        <img class="editable" id="<?= "{$PageInfo->id}-{$page_part->id}-8" ?>" data-type="img" data-height="500" data-width="800" src="<?= $Core->getCMS($PageInfo->id, $page_part->id, 8,"{$assets}images/blog-2.jpg") ?>">
                    </div>
                    <div class="blok-title editable" id="<?= "{$PageInfo->id}-{$page_part->id}-9" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 9, "We Are Expert") ?></div>
                    <div class="description editable" id="<?= "{$PageInfo->id}-{$page_part->id}-10" ?>" data-type="html"><?= $Core->getCMS($PageInfo->id, $page_part->id, 10, "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.") ?></div>
                </div>
            </div>

        </div>
    </div>
</div>