


<div class="section overlap info">
    <div class="container">

<form action="/hilcot/forms/editproduct" method="POST" enctype="multipart/form-data">
    <?= $Me->tokenize() ?>
    <input type="hidden" name="product" value="<?= $ProductInfo->id ?>">

    <div class="row">

        <div class="col-12 col-md-12 form-group">
            <label>Product Title</label>
            <input required name="title" class="form-control form-control-lg" type="text" value="<?= $ProductInfo->name ?>" placeholder="Product Title">
        </div>
        <div class="col-12 col-md-12 form-group">
            <label>Product Description</label>
            <div id="standalone-container">
                <div id="toolbar-container">
                    <span class="ql-formats">
                        <button class="ql-bold"></button>
                        <button class="ql-italic"></button>
                        <button class="ql-underline"></button>
                        <button class="ql-strike"></button>
                    </span>
                    <span class="ql-formats">
                        <button class="ql-link"></button>
                        <button class="ql-image"></button>
                    </span>
                    <span class="ql-formats">
                        <button class="ql-blockquote"></button>
                        <button class="ql-code-block"></button>
                    </span>
                </div>
                <textarea class="quill-editor form-control" required name="description" id="description"><?= $ProductInfo->description ?></textarea>
            </div>

        </div>


        <div class="col-12 col-md-9 form-group">
            <label>Price / Amount</label>
            <input required name="price" class="form-control form-control-lg" value="<?= $ProductInfo->price ?>" type="number">
        </div>

        <div class="col-12 col-md-3">
            <div class="alert alert-info">
                <img src="<?= $ProductInfo->photos ?>" height="100px" style="float: left; margin-right:5px;">
                <label>Product Photo</label>
                <input name="photo" class="form-control form-control-lg" type="file">
            </div>
        </div>

        <div class="col-12 col-md-12 form-group">
            <label>SEO / Tags (seperate with comma',)</label>
            <input name="tags" class="form-control form-control-lg" value="<?= $ProductInfo->tags ?>" type="text">
        </div>

    </div>

    <div class="row-flud clearfix">
        <div class="col-12 col-md-12 mt-5">
            <button type="submit" class="btn btn-primary btn-lg">Update Product</button>
        </div>
    </div>

</form>


    </div>
</div>