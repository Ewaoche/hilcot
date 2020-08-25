<div class="section overlap info">
    <div class="container">

        <form action="/hilcot/forms/addpage" method="POST" enctype="multipart/form-data">
            <?= $Me->tokenize() ?>


            <div class="row" style="padding-left: 20px;">

                        <label class="checkbox col-12 col-md-4">
                            <input type="checkbox" id="category1" value="cat1" name="category[]"> Show in Top Link
                        </label>
                        <label class="checkbox col-12 col-md-4">
                            <input type="checkbox" id="category2" value="cat2" name="category[]"> Show in Main Memu
                        </label>
                        <label class="checkbox col-12 col-md-4">
                            <input type="checkbox" id="category3" value="cat3" name="category[]"> Show in Footer Menu
                        </label>

            </div><hr/>


            <div class="row">

                <div class="col-12 col-md-6 form-group">
                    <label for="title">Page Title</label>
                    <input required name="title" id="title" class="form-control form-control-lg" type="text" placeholder="Page Title">
                </div>


                <div class="col-12 col-md-6 form-group">
                    <label for="menutitle">Menu Title</label>
                    <input required class="form-control form-control-lg" name="menutitle" id="menutitle" type="text" placeholder="menutitle">
                </div>

                <div class="col-12 col-md-3 form-group">
                    <label class="col-12 col-md-12" for="parent">Parent Page</label>
                    <select name="parent" id="parent" class="form-control form-control-lg">
                        <option value="0" selected="selected">Top Memu (Home)</option>
                        <?php
                        $parents = $Core->LoadParentMenus();
                        while ($pr = mysqli_fetch_array($parents)) {
                            echo '<option value="' . $pr['id'] . '">' . $pr['menutitle'] . '</option>';
                        }
                        ?>
                    </select>
                </div>


                <div class="col-12 col-md-3 form-group">
                    <label for="sort">Sort Number?</label>
                    <input required name="sort" class="form-control form-control-lg" type="text" value="<?= $Core->GetNextSort('page'); ?>" placeholder="0">
                </div>
                <div class="col-12 col-md-3 form-group">
                    <label class="col-12 col-md-12">Content Type</label>
                    <select name="type" required class="form-control form-control-lg">
                        <option value="" selected="selected"> - Content Type - </option>
                        <option value="page">Site Page</option>
                        <option value="blog">Blog & News</option>
                        <option value="store">Store / Shop</option>
                        <option value="newspage">News Page</option>
                    </select>
                </div>
                <div class="col-12 col-md-3 form-group">
                    <label for="photo">Page Photo</label>
                    <input required name="photo" id="photo" class="form-control form-control-lg" type="file" placeholder="Page Title">
                </div>

            </div>

            <div class="row clearfix">
                <div class="col-12 col-md-12 clearfix">




                </div>
            </div>

            <div class="row-flud clearfix">
                <div class="col-12 col-md-12 mt-5">
                    <button type="submit" class="btn btn-primary btn-lg">Create my Page</button>
                </div>
            </div>
        </form>
    </div>
</div>