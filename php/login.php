<?php
ob_start();
session_start();

include 'functions.php';

if (isset($_POST['login'])) {
    if (login($_POST) > 0) {
        echo "<script>
                document.location.href = '../index.php';
              </script>";
    } else {
        echo mysqli_error($conn);
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
                <div class="col-md-3 col-lg-3 col-xl-5">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="../assets/img/login.jpg" class="img-fluid" alt="Sample image" width="250px">
                    </div>
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

                        <div class="d-flex justify-content-center align-items-center h-100">
                            <div class="text-center text-lg-start mt-4 pt-2 ">
                                <button type="submit" name="login" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                            </div>

                        </div>

                        <div class="d-flex justify-content-center align-items-center h-100">
                            <!-- make text dont have any account yet? -->
                            <div class="text-center text-lg-start pt-2 ">
                                <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="registrasi.php" class="link-danger">Register</a></p>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            
    </section>

    <!-- Link Jquery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>