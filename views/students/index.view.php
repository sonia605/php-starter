<?php include VIEW_PATH . '/_partials/header.view.php' ?>

<h3>Students</h3>

<div class="container my-3">
    <div class="row">
        <div class="col-md-6 my-3">
            <a href="/students/create" class="btn btn-primary">
                Add new
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <table class="table table-striped table-hover">
                <tr>
                    <td>Name</td>
                    <td>Gender</td>
                    <td>Email</td>
                </tr>
                <?php
                foreach($students as $student) {
                ?>
                <tr>
                    <td><?php echo $student["name"] ?></td>
                    <td><?php echo $student["gender"] ?></td>
                    <td><?php echo $student["email"] ?></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>

<?php include VIEW_PATH . '/_partials/footer.view.php' ?>