<?php include VIEW_PATH . '/_partials/header.view.php' ?>

<div class="container my-5">
    <h3>Add new Teachers</h3> <br>
    <div class="row">
        <div class="col-md-6">
            <form action="/teachers/store" method="post">
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input
                        type="text"
                        class="form-control"
                        id="first_name"
                        placeholder="Enter First name"
                        name="first_name"
                    >

                </div>

                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input
                        type="text"
                        class="form-control"
                        id="last_name"
                        placeholder="Enter Last name"
                        name="last_name"
                    >

                </div>


                <div class="form-group">
                    <label for="age">Age</label>
                    <input
                        type="number"
                        class="form-control"
                        id="age"
                        placeholder="Enter age"
                        name="age"
                    >

                </div>


                <div class="form-group">
                    <label for="email">Email</label>
                    <input
                        type="email"
                        class="form-control"
                        id="email"
                        placeholder="Enter email"
                        name="email"
                    >

                </div>

                <div class="form-group">
                    <label for="gender">Gender</label>
                    <input
                        type="text"
                        class="form-control"
                        id="gender"
                        placeholder="Enter gender"
                        name="gender"
                    >

                </div>

                <div class="form-group">
                    <label for="city">City</label>
                    <input
                        type="text"
                        class="form-control"
                        id="city"
                        placeholder="Enter city"
                        name="city"
                    >

                </div>

                <div class="form-group">
                    <label for="country">Country</label>
                    <input
                        type="text"
                        class="form-control"
                        id="country"
                        placeholder="Enter country"
                        name="country"
                    >

                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input
                        type="text"
                        class="form-control"
                        id="address"
                        placeholder="Enter address"
                        name="address"
                    >

                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php include VIEW_PATH . '/_partials/footer.view.php' ?>