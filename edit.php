<?php include('includes/header.php'); ?>
<?php include('connections.php'); ?>
<div class="container-fluid py-4">
    <div class="row min-vh-80 h-100">
        <div class="col-12">

            <div class="card ">
                <div class="card-header">
                    <h4> Edit data

                        <a href="index.php" class="btn btn-danger  float-end mt-2">back</a>

                    </h4>
                </div>
                <?php
                $type = $_GET['type'];
                $fetch_query = "SELECT * FROM plant  WHERE type='$type'";
                $fetch_query_run = mysqli_query($conn, $fetch_query);
                if ($fetch_query_run) {
                    foreach ($fetch_query_run as $row) {
                        // echo $row['type'];
                        ?>
                        <div class="card-body">
                            <div class="container mt-4">
                                <h2 class="text-center text-success">Plant Details</h2>
                                <form action="code.php" method="post">
                                    <div class="form-group">
                                        <label for="type">Type:</label>
                                        <div class="input-box">
                                            <input type="text" class="form-control" value="<?php echo $row['type']; ?>"
                                                name="type" id="type" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="price">Price:</label>
                                        <div class="input-box">
                                            <input type="text" class="form-control" value="<?php echo $row['price']; ?>"
                                                name="price" id="price" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="dimension">Dimension:</label>
                                        <div class="input-box">
                                            <input type="text" class="form-control" value="<?php echo $row['dimension']; ?>"
                                                name="dimension" id="dimension" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="requiredsoil">Required Soil:</label>
                                        <div class="input-box">
                                            <input type="text" class="form-control" value="<?php echo $row['requiredsoil']; ?>"
                                                name="requiredsoil" id="requiredsoil" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" name="update_btn" class="btn btn-primary" value="Submit">Update
                                            Button</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    <?php
                    }
                } else {
                    echo 'No Record';
                }


                ?>

            </div>

        </div>
    </div>
    <div>



        <?php include('includes/footer.php'); ?>

       

