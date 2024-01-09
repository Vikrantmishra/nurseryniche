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
                $service_id = $_GET['service_id'];
                $fetch_query = "SELECT * FROM services  WHERE service_id='$service_id'";
                $fetch_query_run = mysqli_query($conn, $fetch_query);
                if ($fetch_query_run) {
                    foreach ($fetch_query_run as $row) {
                        // echo $row['type'];
                        ?>
                        <div class="card-body">
                            <div class="container mt-4">
                                <h2 class="text-center text-success">Services</h2>
                                <form action="code.php" method="post">
                                    <div class="form-group">
                                        <label for="type">Service Id</label>
                                        <div class="input-box">
                                            <input type="text" class="form-control" value="<?php echo $row['service_id']; ?>"
                                                name="service_id" id="service_id" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="price">Service Name:</label>
                                        <div class="input-box">
                                            <input type="text" class="form-control" value="<?php echo $row['serv_name']; ?>"
                                                name="price" id="price" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="dimension">Dimension:</label>
                                        <div class="input-box">
                                            <input type="text" class="form-control" value="<?php echo $row['price']; ?>"
                                                name="price" id="price" required>
                                        </div>
                                    </div>

                                    
                                    </div>
                                    <div class="form-group">
                                        <label for="requiredsoil">Duration:</label>
                                        <div class="input-box">
                                            <input type="text" class="form-control" value="<?php echo $row['duration']; ?>"
                                                name="duration" id="duration" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="requiredsoil">Date and Time</label>
                                        <div class="input-box">
                                            <input type="text" class="form-control" value="<?php echo $row['date_time']; ?>"
                                                name="date_time" id="date_time" required>
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

       

