<div class="section overlap info">
    <div class="container">
        <form action="/hilcot/forms/deleteslider" method="POST" enctype="multipart/form-data">
            <?= $Me->tokenize() ?>
            <input type="hidden" name="slide" value="<?= $SliderInfo->id ?>">

            <div class="row text-center">

                <div class="col-12 col-md-12 text-center">
                    <h2>Are you sure you want to delete this Slider?</h2>
                </div>

                <div class="col-12 col-md-12 text-center text-danger">
                    <p class="text-danger"><?= $SliderInfo->top_title ?></p>
                </div>

            </div>

            <div class="row text-center">
                <div class="col-12 col-md-12 mt-5 text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Yes, Delete Slider</button>
                </div>
            </div>

        </form>
    </div>
</div>