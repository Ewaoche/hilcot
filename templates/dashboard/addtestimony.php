<div class="section overlap info">
    <div class="container">
        <form action="/hilcot/forms/addtestimony" method="POST" enctype="multipart/form-data">
            <?= $Me->tokenize() ?>

            <div class="row">

                <div class="col-12 col-md-12 form-group">
                    <label>Client</label>
                    <input required name="client" class="form-control form-control-lg" type="text" placeholder="Name of Client">
                </div>

                <div class="col-12 col-md-12 form-group">
                    <label>Client's Title /Other details</label>
                    <input required class="form-control form-control-lg" name="title" type="text" placeholder="Client's Title">
                </div>


                <div class="col-12 col-md-12 form-group">
                    <label>Client Photo</label>
                    <input name="photo" class="form-control form-control-lg" type="file">
                </div>

                <div class="col-12 col-md-12 form-group">
                    <label>Testimony</label>
                    <textarea required rows="3" style="height: auto;" class="form-control form-control-lg" name="testimony" type="text" placeholder="Testimony"></textarea>
                </div>

            </div>

            <div class="row-flud clearfix">
                <div class="col-12 col-md-12 mt-5">
                    <button type="submit" class="btn btn-primary btn-lg">Create Testimony</button>
                </div>
            </div>
        </form>
    </div>
</div>