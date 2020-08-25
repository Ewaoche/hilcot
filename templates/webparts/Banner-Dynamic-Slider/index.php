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

