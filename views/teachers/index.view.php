<?php include VIEW_PATH . '/_partials/header.view.php' ?>

<div class="container my-3">
    <div class="row">
        <div class="col-md-6 my-3">
            <a href="/teachers/create" class="btn btn-primary">
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
                    <td>Age</td>
                </tr>

                <?php
                foreach($teachers as $teacher) {
                ?>
                    <tr>
                        <td><?php echo $teacher["name"] ?></td>
                        <td><?php echo $teacher["gender"] ?></td>
                        <td><?php echo $teacher["age"] ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>

<?php include VIEW_PATH . '/_partials/footer.view.php' ?>