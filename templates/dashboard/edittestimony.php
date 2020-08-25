

<div class="section overlap info">
    <div class="container">

<form action="/hilcot/forms/edittestimony" method="POST" enctype="multipart/form-data">
    <?= $Me->tokenize() ?>
    <input type="hidden" name="testid" value="<?= $TestimonyInfo->id ?>">

    <div class="row">

        <div class="col-12 col-md-12 form-group">
            <label>Client</label>
            <input required name="client" class="form-control form-control-lg" type="text" value="<?= $TestimonyInfo->client ?>" placeholder="Name of Client">
        </div>

        <div class="col-12 col-md-12 form-group">
            <label>Client's Title /Other details</label>
            <input required class="form-control form-control-lg" name="title" type="text" value="<?= $TestimonyInfo->title ?>" placeholder="Client's Title">
        </div>

        <div class="col-12 col-md-12 form-group">
            <img src="<?= $TestimonyInfo->photo ?>" height="150px" style="float: left; margin-right:5px;">
            <label>Client Photo</label>
            <input name="photo" class="form-control form-control-lg" type="file">
        </div>

        <div class="col-12 col-md-12 form-group">
            <label>Testimony</label>
            <textarea required rows="3" style="height: auto;" class="form-control form-control-lg" name="testimony" type="text" placeholder="Testimony"><?= $TestimonyInfo->testimony ?></textarea>
        </div>

    </div>

    <div class="row-flud clearfix">
        <div class="col-12 col-md-12 mt-5">
            <button type="submit" class="btn btn-primary btn-lg">Update Testimony</button>
        </div>
    </div>
</form>


    
    </div>
</div>