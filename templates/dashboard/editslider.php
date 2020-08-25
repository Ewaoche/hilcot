<div class="section overlap info">
    <div class="container">

        <form action="/hilcot/forms/editslider" method="POST" enctype="multipart/form-data">
            <?= $Me->tokenize() ?>
            <input type="hidden" name="slide" value="<?= $SliderInfo->id ?>">

            <div class="row">

                <div class="col-12 col-md-12 form-group">
                    <label>Slider Top Title</label>
                    <input required name="toptitle" class="form-control form-control-lg" type="text" value="<?= $SliderInfo->top_title ?>" placeholder="Top Title">
                </div>


                <div class="col-12 col-md-12 form-group">
                    <label>Slider Main Title</label>
                    <input required class="form-control form-control-lg" name="maintitle" type="text" value="<?= $SliderInfo->main_title ?>" placeholder="Main Title">
                </div>

                <div class="col-12 col-md-12 form-group">
                    <label>Slider Sub Title</label>
                    <textarea required class="form-control form-control-lg" name="subtitle" type="text" placeholder="Sub Title"><?= $SliderInfo->sub_title ?></textarea>
                </div>

                <div class="col-12 col-md-4 form-group">
                    <img src="<?= $SliderInfo->slide ?>" height="40px" style="float: left; margin-right:5px;">
                    <label>Slider Photo</label>
                    <input name="photo" class="form-control form-control-lg" type="file">
                </div>

                <div class="col-12 col-md-4 form-group">
                    <label>Button Text</label>
                    <input required class="form-control form-control-lg" name="buttontext" type="text" value="<?= $SliderInfo->button_text ?>" placeholder="Explore Now">
                </div>
                <div class="col-12 col-md-4 form-group">
                    <label class="col-12 col-md-12">Linked Page</label>
                    <select name="pagelink" class="col-12 col-md-12 form-control" style="width: 100%;">
                        <option value="0" selected="selected">- Select Page -</option>
                        <?php
                        $parents = $Core->Pages();
                        while ($pr = mysqli_fetch_object($parents)) {
                            $selected = ($pr->id == $SliderInfo->page_link) ? ' selected="selected" ' : ' ';
                            echo '<option' . $selected . 'value="' . $pr->id . '">' . $pr->menutitle . '</option>';
                        }
                        ?>
                    </select> </div>

            </div>

            <div class="row-flud clearfix">
                <div class="col-12 col-md-12 mt-5">
                    <button type="submit" class="btn btn-primary btn-lg">Create Slider</button>
                </div>
            </div>
        </form>
    </div>
</div>