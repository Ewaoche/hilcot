<div class="section overlap info">
    <div class="container">

        <legend class="mb-3">Edit Page
            <a class="pull-right btn btn-mini btn-success" href="/hilcot/dashboard/pages/<?= $PageInfo->id ?>/webparts"><span>+Add Web Parts</span></a>
        </legend>
        <hr />

        <form action="/hilcot/forms/editpage" method="POST" enctype="multipart/form-data">
            <?= $Me->tokenize() ?>
            <input type="hidden" name="page" value="<?= $PageInfo->id ?>">


            <div class="row" style="padding-left: 20px;">
                <?php
                $cat = $PageInfo->category;
                if ($cat) {
                    $cat = json_decode($PageInfo->category);
                } else {
                    $cat = array();
                }
                ?>
                <label class="checkbox col-12 col-md-4">
                    <input type="checkbox" id="category1" value="cat1" name="category[]" <?= in_array('cat1', $cat) ? 'checked="checked"' : ''; ?>> Show in Top Link
                </label>
                <label class="checkbox col-12 col-md-4">
                    <input type="checkbox" id="category2" value="cat2" name="category[]" <?= in_array('cat2', $cat) ? 'checked="checked"' : ''; ?>> Show in Main Menu
                </label>
                <label class="checkbox col-12 col-md-4">
                    <input type="checkbox" id="category3" value="cat3" name="category[]" <?= in_array('cat3', $cat) ? 'checked="checked"' : ''; ?>> Show in Footer Menu
                </label>

            </div><hr/>

            <div class="row">


                <div class="col-12 col-md-6 form-group">
                    <label for="title">Page Title</label>
                    <input required name="title" id="title" class="form-control form-control-large" type="text" value="<?= $PageInfo->title ?>" placeholder="Page Title">
                </div>


                <div class="col-12 col-md-6 form-group">
                    <label for="menutitle">Menu Title</label>
                    <input required class="form-control form-control-lg" name="menutitle" id="menutitle" type="text" value="<?= $PageInfo->menutitle ?>" placeholder="menutitle">
                </div>

                <div class="col-12 col-md-3 form-group">
                    <label class="col-12 col-md-12" for="parent">Parent Page</label>
                    <select name="parent" id="parent" class="form-control form-control-lg">
                        <option value="0">Top Memu (Home)</option>
                        <?php
                        $parents = $Core->LoadParentMenus();
                        while ($pr = mysqli_fetch_object($parents)) {
                            $selected = ($pr->id == $PageInfo->parent) ? ' selected="selected" ' : ' ';
                            echo '<option ' . $selected . ' value="' . $pr->id . '">' . $pr->menutitle . '</option>';
                        }
                        ?>
                    </select>
                </div>


                <div class="col-12 col-md-3 form-group">
                    <label for="sort">Sort Number?</label>
                    <input required name="sort" class="form-control form-control-lg" type="text" value="<?= $PageInfo->sort ?>" placeholder="0">
                </div>
                <div class="col-12 col-md-3 form-group">
                    <label class="col-12 col-md-12">Content Type</label>
                    <select name="type" required class="form-control form-control-lg">
                        <option value=""> - Content Type - </option>
                        <option value="page" <?= $PageInfo->type == "page" ? 'selected="selected"' : '' ?>>Site Page</option>
                        <option value="blog" <?= $PageInfo->type == "blog" ? 'selected="selected"' : '' ?>>Blog & News</option>
                        <option value="store" <?= $PageInfo->type == "store" ? 'selected="selected"' : '' ?>>Store / Shop</option>
                        <option value="newspage" <?= $PageInfo->type == "newspage" ? 'selected="selected"' : '' ?>>News Page</option>
                    </select>
                </div>
                <div class="col-12 col-md-3 form-group">
                    <img src="<?= $PageInfo->page_photo ?>" height="40px" style="float: left; margin-right:5px; height: 40px;">
                    <label for="photo">Page Photo </label>
                    <input name="photo" id="photo" class="form-control form-control-lg" type="file" placeholder="Page Title">
                </div>

            </div>

            <div class="row">
                <?php
                $i = 0;
                while ($page_part = mysqli_fetch_object($PageParts)) : ?>
                    <div class="col-12 col-md-12">
                        <?php require("./templates/webparts/{$page_part->webpart}/index.php"); ?>
                    </div>
                    <div class="col-12 col-md-12">

                        <div class="alert alert-info">
                            <div class="row">
                                <div class="col-12 col-md-12">

                                    <div class="input-group">
                                        <span class="input-group-addon">SORT NUMBER</span>
                                        <input required name="sorts[<?= $page_part->id ?>]" id="sorts" class="form-control form-control-lg" style="font-weight: 900; padding:2px 10px;" type="number" min="0" placeholder="0" value="<?= $page_part->sort ?>">
                                        <a class="input-group-addon btn btn-primary btn-sm" href="/dashboard/page/<?= $PageInfo->id ?>/webpart/<?= $page_part->id ?>/delete">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile; ?>
            </div>

            <div class="row-flud clearfix">
                <div class="col-12 col-md-12 mt-5">
                    <button type="submit" class="btn btn-primary btn-lg">Update Page</button>
                </div>
            </div>

        </form>

    </div>
</div>