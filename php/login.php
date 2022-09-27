<?php
ob_start();
session_start();

include 'functions.php';

// apabila form melakukan post maka function dijalankan
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $pass = htmlspecialchars($_POST['password']);
    $sql_login = $conn->query("SELECT * FROM user
                                         WHERE 
                                         BINARY username='$username' 
                                         AND BINARY password='$pass'
                                        ");

    $data = $sql_login->fetch_assoc();
    $cek = $sql_login->num_rows;

    if ($cek > 0) {
        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['password'];
        header('location: ../index.php');
    } else {
        header('location: login.php?gagal');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Link Font Awesome -->
    <script src="https://kit.fontawesome.com/92333b2848.js" crossorigin="anonymous"></script>

    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }

        img {
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="assets/img/login-img.jpg" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="" method="post">
                        <?php if (isset($_GET['gagal'])) { ?>
                            <tr>
                                <td>
                                    <div class="alert alert-danger" role="alert">
                                        Sorry, Username / Password doesn't match
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>

                        <!-- Username input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example3">Username</label>
                            <input type="text" id="form3Example3" class="form-control form-control-lg" placeholder="Enter a valid email address" name="username" autocomplete="off" autofocus required />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form3Example4">Password</label>
                            <input type="password" id="form3Example4" class="form-control form-control-lg" placeholder="Enter password" name="password" required />
                        </div>


                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                        </div>
                    </form>

                </div>
            </div>
            <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
                <!-- Copyright -->
                <div class="text-white mb-3 mb-md-0">
                    Copyright © 2022. All rights reserved.
                </div>
                <!-- Copyright -->
            </div>
    </section>

    <!-- Link Jquery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>