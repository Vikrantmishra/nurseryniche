<?php
include('includes/header.php');
include('connections.php');

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check credentials against the database
    $query = "SELECT * FROM admins WHERE email = '$email'";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Database query failed. Error: " . mysqli_error($connection));
    }

    if ($row = mysqli_fetch_assoc($result)) {
        // Verify the password
        if (password_verify($password, $row['password'])) {
            // Valid login, redirect to index.php
            header("Location: index.php");
            exit();
        } else {
            // Invalid login, display an error message
            $error_message = "Invalid email or password.";
        }
    } else {
        // Invalid login, display an error message
        $error_message = "Invalid email or password.";
    }
}
?>

<div class="row">
    <div class="col-lg-4 col-md-8 col-12 mx-auto">
        <div class="card z-index-0 fadeIn3 fadeInBottom">
            <!-- ... (your existing HTML code) ... -->
            <div class="card-body">
                <!-- ... (your existing form) ... -->
                <form role="form" class="text-start" method="post" action="">
                    <!-- ... (your existing form fields) ... -->

                    <div class="text-center">
                        <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign in</button>
                    </div>
                </form>

                <?php
                if (isset($error_message)) {
                    echo '<p class="text-danger">' . $error_message . '</p>';
                }
                ?>

            </div>
        </div>
    </div>
</div>
