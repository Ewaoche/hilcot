<!-- INFO BOX -->
<div class="section info overlap-bottom" style="margin-top: 80px;">
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-md-4">
                <!-- BOX 1 -->
                <div class="box-icon-4">
                    <div class="icon"><i class="fa fa-phone"></i></div>
                    <div class="body-content">
                        <div class="heading editable" id="<?= "home-footer-15" ?>" data-type="text"><?= $Core->get_cms("home-footer-15", "CALL US NOW") ?></div>
                        <span class="editable" id="<?= "home-footer-14" ?>" data-type="text"><?= $Core->get_cms("home-footer-14", "Office Telephone: +62 800 9000 123 <br>Mobile: +62 800 9000 123") ?></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <!-- BOX 2 -->
                <div class="box-icon-4">
                    <div class="icon"><i class="fa fa-map-marker"></i></div>
                    <div class="body-content">
                        <div class="heading editable" id="<?= "home-footer-13" ?>" data-type="text"><?= $Core->get_cms("home-footer-13", "COME VISIT US") ?></div>
                        <span class="editable" id="<?= "home-footer-12" ?>" data-type="text"><?= $Core->get_cms("home-footer-12", "99 S.t Jomblo Park Pekanbaru 28292. Indonesia") ?></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <!-- BOX 3 -->
                <div class="box-icon-4">
                    <div class="icon"><i class="fa fa-envelope"></i></div>
                    <div class="body-content">
                        <div class="heading editable" id="<?= "home-footer-11" ?>" data-type="text"><?= $Core->get_cms("home-footer-11", "SEND US A MESSAGE") ?></div>
                        <span class="editable" id="<?= "home-footer-10" ?>" data-type="text"><?= $Core->get_cms("home-footer-10", "General: info@petro.com<br>Sales: sales@petro.com") ?></span>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<!-- FOOTER SECTION -->
<div class="footer">

    <div class="container">

        <div class="row">
            <div class="col-sm-3 col-md-3">
                <div class="footer-item">
                    <img class="editable" id="<?= "home-footer-1" ?>" data-type="img" src="<?= $assets ?>images/logo-light.png" class="logo-bottom">
                    <p class="editable margin-top-10" id="<?= "home-footer-2" ?>" data-type="html"><?= $Core->get_cms("home-footer-2", "This template is a micro niche for business categories, namely Petro - Industrial HTML Template. there was an excess of this template is using HTML/CSS.") ?></p>
                    <div class="footer-sosmed">
                        <a href="<?= $Core->getSiteInfo("Facebook-Link") ?>" title="">
                            <div class="item">
                                <i class="fa fa-facebook"></i>
                            </div>
                        </a>
                        <a href="<?= $Core->getSiteInfo("Twitter-Link") ?>" title="">
                            <div class="item">
                                <i class="fa fa-twitter"></i>
                            </div>
                        </a>
                        <a href="<?= $Core->getSiteInfo("Instagram-Link") ?>" title="">
                            <div class="item">
                                <i class="fa fa-instagram"></i>
                            </div>
                        </a>
                        <a href="<?= $Core->getSiteInfo("Pinterest-Link") ?>" title="">
                            <div class="item">
                                <i class="fa fa-pinterest"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3">
                <div class="footer-item">
                    <div class="footer-title editable" id="<?= "home-footer-3" ?>" data-type="text"><?= $Core->get_cms("home-footer-3", "Recent Post") ?></div>
                    <ul class="recent-post">
                        <?php while ($blog = mysqli_fetch_object($Blogs)) : ?>
                            <li>
                                <a href="/news/<?= $blog->slug ?>" title="<?= $blog->title ?>"><?= $blog->title ?></a>
                                <span class="date"><i class="fa fa-clock-o"></i> <?= date("F j, Y", strtotime($blog->created)) ?></span>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 col-md-3">
                <div class="footer-item">
                    <div class="footer-title editable" id="<?= "home-footer-4" ?>" data-type="text"><?= $Core->get_cms("home-footer-4", "Our Services") ?></div>
                    <ul class="list">
                        <?php while ($flink = mysqli_fetch_object($Cat3Pages)) : ?>
                            <li><a href="/info/<?= $flink->slug ?>" title="<?= $flink->title ?>"><?= $flink->menutitle ?></a></li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 col-md-3">
                <div class="footer-item">
                    <div class="footer-title editable" id="<?= "home-footer-5" ?>" data-type="text"><?= $Core->get_cms("home-footer-5", "Subscribe") ?></div>
                    <p class="editable" id="<?= "home-footer-6" ?>" data-type="html"><?= $Core->get_cms("home-footer-6", "Lit sed The Best in dolor sit amet consectetur adipisicing elit sedconsectetur adipisicing") ?></p>
                    <form action="#" class="footer-subscribe">
                        <input type="email" name="EMAIL" class="form-control" placeholder="enter your email">
                        <input id="p_submit" type="submit" value="send">
                        <label for="p_submit"><i class="fa fa-envelope"></i></label>
                        <p class="editable" id="<?= "home-footer-7" ?>" data-type="text"><?= $Core->get_cms("home-footer-7", "Get latest updates and offers.") ?></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="fcopy">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-9">
                    <p class="ftex editable" id="<?= "home-footer-8" ?>" data-type="text"><?= $Core->get_cms("home-footer-8", "&copy; 2017 Petro by Rudhi Sasmito - All Rights Reserved") ?></p>
                </div>
                <div class="col-sm-3 col-md-3">
                    <p class="ftex text-right">Developer: <a href="https://golojan.com">Golojan.com</a></p>
                </div>
            </div>
        </div>
    </div>

</div>



<?php if ($Me->auth) : ?>
    <div class="modal centerModal" id="editable-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="" enctype="multipart/form-data" id="myform">
                    <div class="modal-header">
                        <h5 class="modal-title">Quick Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body xQuickEditContent p-3"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary xQuickEditButton">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endif; ?>


<!-- JS VENDOR -->
<script type="text/javascript" src="<?= $assets ?>js/vendor/jquery.min.js"></script>
<script type="text/javascript" src="<?= $assets ?>js/vendor/bootstrap.min.js"></script>

<script type="text/javascript" src="<?= $assets ?>plugins/fontawesome/js/all.min.js"></script>

<script type="text/javascript" src="<?= $assets ?>js/vendor/jquery.superslides.js"></script>
<script type="text/javascript" src="<?= $assets ?>js/vendor/owl.carousel.js"></script>
<script type="text/javascript" src="<?= $assets ?>js/vendor/bootstrap-hover-dropdown.min.js"></script>
<script type="text/javascript" src="<?= $assets ?>js/vendor/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="<?= $assets ?>js/vendor/easings.js"></script>
<script type="text/javascript" src="<?= $assets ?>js/vendor/isotope.pkgd.min.js"></script>

<!-- sendmail -->
<script type="text/javascript" src="<?= $assets ?>js/vendor/validator.min.js"></script>
<script type="text/javascript" src="<?= $assets ?>js/vendor/form-scripts.js"></script>

<script type='text/javascript' src='https://maps.google.com/maps/api/js?sensor=false&#038;ver=4.1.5'></script>

<script src="//cdn.quilljs.com/1.3.6/quill.core.js"></script>
<script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

<?= $Me->LoadFooter() ?>

<script type="text/javascript" src="<?= $assets ?>js/script.js"></script>


</body>

</html>