<div class="section overlap info">
    <div class="container">

        <form action="/hilcot/forms/settings" method="POST" enctype="multipart/form-data">
            <?= $Me->tokenize() ?>
            <div class="row">

                <?php while ($site = mysqli_fetch_object($SiteInfos)) : ?>
                    <div class="col-12 col-md-12 form-group my-0">
                        <label><?= $site->name ?></label>
                        <?php if ($site->type == "text") : ?>
                            <input required name="<?= $site->name ?>" class="form-control form-control-lg" type="text" value="<?= $site->value ?>" placeholder="<?= $site->name ?>">
                        <?php elseif ($site->type == "textarea") : ?>
                            <textarea required name="<?= $site->name ?>" class="form-control form-control-lg" placeholder="<?= $site->name ?>"><?= $site->value ?></textarea>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>

            </div>

            <div class="row-flud clearfix">
                <div class="col-12 col-md-12 mt-5">
                    <button type="submit" class="btn btn-primary btn-lg">Update Settings</button>
                </div>
            </div>

        </form>
    </div>
</div>