<!-- Blog -->
<div class="section why overlap">
    <div class="container" style="margin-bottom: 80px;;">
        <div class="row">
            <div class="col-sm-4 col-md-4 col-md-push-8">

                <div class="widget text">
                    <div class="widget-title editable" id="news-page-1" data-type="text"><?= $Core->get_cms("news-page-1", "About Company") ?></div>
                    <p class="editable" id="news-page-2" data-type="html"><?= $Core->get_cms("news-page-2", "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.") ?></p>
                </div>

                <div class="widget contact-info-sidebar">
                    <div class="widget-title editable" id="news-page-3" data-type="text"><?= $Core->get_cms("news-page-3", "Contact Info") ?></div>
                    <ul class="list-info">
                        <li>
                            <div class="info-icon">
                                <span class="fa fa-map-marker"></span>
                            </div>
                            <div class="info-text editable" id="news-page-4" data-type="text"><?= $Core->get_cms("news-page-4", "99 S.t Jomblo Park Pekanbaru 28292. Indonesia") ?></div>
                        </li>
                        <li>
                            <div class="info-icon">
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="info-text editable" id="news-page-5" data-type="text"><?= $Core->get_cms("news-page-5", "(0761) 654-123987") ?></div>
                        </li>
                        <li>
                            <div class="info-icon">
                                <span class="fa fa-envelope"></span>
                            </div>
                            <div class="info-text editable" id="news-page-6" data-type="text"><?= $Core->get_cms("news-page-6", "info@yoursite.com") ?></div>
                        </li>
                        <li>
                            <div class="info-icon">
                                <span class="fa fa-clock-o"></span>
                            </div>
                            <div class="info-text editable" id="news-page-7" data-type="text"><?= $Core->get_cms("news-page-7", "Mon - Sat 09:00 - 17:00") ?></div>
                        </li>
                    </ul>
                </div>

            </div>


            <div class="col-sm-8 col-md-8 col-md-pull-4">
                <div class="single-news">
                    <div class="image">
                        <img src="<?= $PageInfo->page_photo ?>" alt="<?= $PageInfo->title ?>" class="img-responsive">
                    </div>
                    <h2 class="blok-title"><?= $PageInfo->title ?></h2>
                    <div class="meta">
                        <div class="meta-date"><i class="fa fa-clock-o"></i> <?= date("F j, Y", strtotime($PageInfo->created)) ?></div>
                        <div class="meta-author"> Posted by: <a href="#">Hilcot Admin</a></div>
                        <div class="meta-category"> Category: <a href="#">Industry</a>, <a href="#">Oil & Gas</a>, <a href="#">Energy</a></div>
                        <div class="meta-comment"><i class="fa fa-comment-o"></i> <?= $PageInfo->views ?> Views</div>
                    </div>
                    <?= $PageInfo->contents ?>
                </div>

            </div>

        </div>

    </div>
</div>