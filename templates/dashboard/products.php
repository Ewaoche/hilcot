

<div class="section overlap info">
    <div class="container">

<legend class="mb-3">List Products
    <a class="pull-right btn btn-mini btn-success" href="/dashboard/addproduct"><span>+Add Product</span></a>
</legend>

<div>
    <table class="table table-bordered">

        <tr class="success" style="height:20px; padding:0px;">
            <td><strong>ID</strong></td>
            <td><strong>Title</strong></td>
            <td><strong>Price</strong></td>
            <td><strong>Edit</strong></td>
            <td><strong>Delete</strong></td>
        </tr>

        <? while($product=mysqli_fetch_object($products)): ?>

        <tr>
            <td><?= $product->id; ?></td>
            <td><?= $product->name ?></td>
            <td><?= $Core->ToMoney($product->price) ?></td>
            <td><a href="/hilcot/dashboard/products/<?= $product->id; ?>/editproduct">Edit</a></td>
            <td><a href="/hilcot/dashboard/products/<?= $product->id; ?>/deleteproduct">Delete</a></td>
        </tr>

        <? endwhile; ?>

    </table>
</div>

    
    </div>
</div>