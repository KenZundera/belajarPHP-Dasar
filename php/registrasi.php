<?php
require 'functions.php';

// ketika tombol register ditekan, proses fungsi registrasi
if (isset($_POST['register'])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('user baru berhasil ditambahkan');
                document.location.href = 'login.php';
              </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi - PWEB</title>

    <!-- Link Bootstrap
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->

    <!-- Link CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- Link Font Awesome -->
    <script src="https://kit.fontawesome.com/92333b2848.js" crossorigin="anonymous"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
        }

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

        h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #fff;
            text-align: center;
            margin: 1.25rem 0 1.25rem 0;
        }

        form {
            width: 100%;
            max-width: 600px;
            margin: 0rem auto;
            border-radius: 5px;
            font-size: 1rem;
            padding: 1.25rem;
            box-shadow: #fff 0 0 10px;
            margin-top: 7rem;
        }

        form ul {
            list-style: none;
        }

        form ul li {
            margin-bottom: 10px;
        }

        form label {
            display: block;
            margin-bottom: 10px;
        }

        form input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #ccc;
            border-radius: 0.375rem;
            margin-bottom: 30px;
            line-height: 1.5;
            font-size: 1rem;
        }

        form input:last-child {
            margin-bottom: 10px;
        }

        form input:focus {
            outline: none;
            box-shadow: #90c6fd 0px 0 5px 2px;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;	
        }

        form input::placeholder {
            color: #999;
            font-size: 1rem;
        }

        form button {
            width: 30%;
            height: 40px;
            padding: 0.375rem 0.75rem;
            border: 0;
            border-radius: 5px;
            background-color: #0d6efd;
            color: #fff;
            cursor: pointer;
            margin: 0 auto;
            font-size: 1rem;
            line-height: 1.5rem;
            text-align: center;
        }

        form button:hover {
            background-color: #1b82e9;
        }

        form .error {
            color: #ff0000;
            font-size: 12px;
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
    <!-- <div class="flex-header">
        <div class="image">
            <img src="../assets/img/login.jpg" alt="Login">
        </div>
    </div> -->
    <form action="" method="post">
        <h1>Halaman Registrasi</h1>
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Masukkan Username..." autocomplete="off" required autofocus>
            </li>

            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Masukkan Password..." autocomplete="off" required>
            </li>

            <li>
                <label for="password2">Konfirmasi Password</label>
                <input type="password" name="password2" id="password2" placeholder="Konfirmasi Password..." autocomplete="off" required>
            </li>
            <br>
            <div class="flex-footer">
                <div class="footer">
                    <button type="submit" name="register">Registrasi</button>
                </div>
            </div>
            <div class="flex-footer">
                <div class="footer">
                <p>Sudah punya akun? <a href="login.php">Login</a></p>
                </div>
            </div>
            
        </ul>
    </form>

</body>
</html>