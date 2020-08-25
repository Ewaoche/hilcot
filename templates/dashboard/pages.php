<div class="section overlap info">
    <div class="container">

        <legend class="mb-3">Site Pages <small>list pages</small>
            <a class="pull-right btn btn-mini btn-success" href="/hilcot/dashboard/addpage"><span>+Add Page</span></a>
        </legend>

        <div>
            <table class="table table-bordered">

                <tr class="success" style="height:20px; padding:0px;">
                    <td><strong>ID</strong></td>
                    <td><strong>MENU(sort)</strong></td>
                    <td><strong>PAGE TITLE</strong></td>
                    <td><strong> - </strong></td>
                </tr>

                <? while($pg=mysqli_fetch_object($pages)): ?>

                <tr>
                    <td><?= $pg->id; ?></td>
                    <td><?= $pg->menutitle . '(' . $pg->sort . ')'; ?> (<b><?= $pg->slug; ?></b>)</td>
                    <td><?= $pg->title; ?></td>
                    <td>
                        <a href="/hilcot/dashboard/pages/<?= $pg->id; ?>/webparts">Web Parts</a> |
                        <a href="/hilcot/dashboard/pages/<?= $pg->id; ?>/editpage">Edit</a> |
                        <a href="/hilcot/dashboard/pages/<?= $pg->id; ?>/deletepage">Delete</a>
                    </td>
                </tr>

                <? endwhile; ?>

            </table>
        </div>

    </div>
    
</div>