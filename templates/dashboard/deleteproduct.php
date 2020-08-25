<div class="section overlap info">
    <div class="container">
        <form action="/hilcot/forms/deleteproduct" method="POST" enctype="multipart/form-data">
            <?= $Me->tokenize() ?>
            <input type="hidden" name="product" value="<?= $ProductInfo->id ?>">

            <div class="row text-center">

                <div class="col-12 col-md-12 text-center">
                    <h2>Are you sure you want to delete this Product?</h2>
                </div>

                <div class="col-12 col-md-12 text-center text-danger">
                    <h4 class="text-danger"><?= $ProductInfo->name ?></h4>
                </div>

            </div>

            <div class="row text-center">
                <div class="col-12 col-md-12 mt-5 text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Yes, Delete Product</button>
                </div>
            </div>

        </form>
    </div>
</div>