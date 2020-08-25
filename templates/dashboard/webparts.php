<div class="section overlap info">
    <div class="container">

        <legend class="mb-3">Site Pages <small>list pages</small>
            <a class="pull-right btn btn-mini btn-success" href="/hilcot/dashboard/addpage"><span>+Add Page</span></a>
        </legend>
        <hr />

        <div class="row">

            <?php foreach ($WebParts as $parts) : ?>
                <div class="col-sm-6 col-md-4">
                    <!-- BOX 4 -->
                    <div class="box-news-1">
                        <a href="/hilcot/dashboard/page/<?= $PageInfo->id ?>/webpart/<?= $parts ?>/add">
                            <div class="media gbr">
                                <img src="./templates/webparts/<?= $parts ?>/photo.jpg" class="img-responsive">
                            </div>
                        </a>
                        <div class="body">
                            <div class="title"><?= $parts ?></div>
                            <div class="meta">
                                <span class="comments"><i class="fa fa-comment-o"></i> 0 added to page</span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>


        </div>
    </div>
</div>