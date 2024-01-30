
<h3>Products</h3>

<table>
    <tr>
        <td>Name</td>
        <td>Age</td>
    </tr>
    <?php

    foreach($students as $student) {
        ?>
        <tr>
            <td><?php echo $student["name"] ?></td>
            <td><?php echo $student["age"] ?></td>
        </tr>
        <?php
    }
    ?>
</table>
