<div class="section overlap info">
    <div class="container">



<legend class="mb-3">Testimonies
    <a class="pull-right btn btn-mini btn-success" href="/dashboard/addtestimony"><span>+Add Testimony</span></a>
</legend>

<div>
    <table class="table table-bordered">

        <tr class="success" style="height:20px; padding:0px;">
            <td><strong>ID</strong></td>
            <td><strong>Client</strong></td>
            <td><strong>Title</strong></td>
            <td><strong>Edit</strong></td>
            <td><strong>Delete</strong></td>
        </tr>

        <? while($testimony=mysqli_fetch_object($testimonies)): ?>

        <tr>
            <td><?= $testimony->id; ?></td>
            <td><?= $testimony->client ?></td>
            <td><?= $testimony->title ?></td>
            <td><a href="/hilcot/dashboard/testimonies/<?= $testimony->id; ?>/edittestimony">Edit</a></td>
            <td><a href="/hilcot/dashboard/testimonies/<?= $testimony->id; ?>/deletetestimony">Delete</a></td>
        </tr>

        <? endwhile; ?>

    </table>
</div>
    
    </div>
</div>

