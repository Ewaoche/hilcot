<div class="history-2 <?= ($i == 1) ? 'overlap' : '' ?>">
    <div class="timeline__item">
        <div class="media editable" id="<?= "{$PageInfo->id}-{$page_part->id}-1" ?>" data-type="img" data-height="400" data-width="600"><img src="<?= $Core->getCMS($PageInfo->id, $page_part->id, 1, "{$assets}images/history-1.jpg") ?>" class="img-responsive"></div>
        <div class="aksen"></div>
        <div class="text">
            <div class="year editable" id="<?= "{$PageInfo->id}-{$page_part->id}-2" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 2, "1983") ?></div>
            <div class="title editable" id="<?= "{$PageInfo->id}-{$page_part->id}-3" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 3, "Smells Racy Free Announcing") ?></div>
            <p class="editable" id="<?= "{$PageInfo->id}-{$page_part->id}-4" ?>" data-type="text"><?= $Core->getCMS($PageInfo->id, $page_part->id, 4, "This was the time when we started our company. We had no idea how far we would go, we werenâ€™t even sure that we would be able to survive for a few years. What drove us to start the company was the understanding that we could provide a service no one else was providing.") ?></p>
        </div>
    </div>
</div>