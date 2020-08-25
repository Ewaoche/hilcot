<div class="section overlap info">
    <div class="container">

        <legend class="mb-3">Sliders <small>list sliders</small>
            <a class="pull-right btn btn-mini btn-success" href="/dashboard/addslider"><span>+Add Slide</span></a>
        </legend>

        <div>
            <table class="table table-bordered">

                <tr class="success" style="height:20px; padding:0px;">
                    <td><strong>ID</strong></td>
                    <td><strong>Title</strong></td>
                    <td><strong>Slide</strong></td>
                    <td><strong>Edit</strong></td>
                    <td><strong>Delete</strong></td>
                </tr>

                <? while($slide=mysqli_fetch_object($slides)): ?>

                <tr>
                    <td><?= $slide->id; ?></td>
                    <td><?= $slide->top_title ?></td>
                    <td><img src="<?= $slide->slide; ?>" style="height: 50px;"></td>
                    <td><a href="/hilcot/dashboard/sliders/<?= $slide->id; ?>/editslider">Edit</a></td>
                    <td><a href="/hilcot/dashboard/sliders/<?= $slide->id; ?>/deleteslider">Delete</a></td>
                </tr>

                <? endwhile; ?>

            </table>
        </div>



    </div>
</div>