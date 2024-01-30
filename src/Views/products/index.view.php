<?php include VIEW_PATH . '/_partials/header.view.php' ?>
<table>
    <tr>
        <td>Name</td>
        <td>Price</td>
    </tr>
    <?php
        foreach($products as $product) {
    ?>
        <tr>
        <td><?php echo $product["name"] ?></td>
        <td><?php echo $product["price"] ?></td>
        </tr>
    <?php
    }
    ?>
</table>
<?php include VIEW_PATH . '/_partials/footer.view.php' ?>