<?php
require 'php/functions.php';
session_start();

//jika ada yg tidak login,maka akan kembali ke halaman login
if (isset($_SESSION['login'])) {
    header('Location:index.php');
    exit();
}
// $db = mysqli_connect('localhost', 'root', '', 'antariksa');
// $query = "SELECT * FROM user";
// $result = mysqli_query($db, $query);
// $antariksa = mysqli_fetch_all($result);
//     if(($_POST) >0){
//     echo"<script>
//     alert('berhasil login');
//     document.location.href ='index.php';
//     </script>";
// }else {
//     echo mysqli_error ($db);}
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    //cek username ada atau tidak dalam database
    $result = mysqli_query(
        $db,
        "SELECT * FROM user WHERE username = '$username'"
    );

    // cek ada berapa baris username yabg dikembalikan dari perintah SELECT
    if (mysqli_num_rows($result) === 1) {
        //set session
        $_SESSION['login'] = true;
        // header(Location: 'index.php');
        // echo"<script>
        // alert('berhasil login');
        // document.location.href ='index.php';
        // </script>";

        //cek password
        $row = mysqli_fetch_assoc($result);
    }
    if (password_verify($password, $row['password'])) {
        //set session
        $_SESSION['login'] = true;
        $_SESSION['username'] = $row['username'];

        header('Location: index.php');
        exit();
    }

    $error = true;

    if (isset($error)):
        echo "<script>
    alert('Login gagal');
    </script>";
    endif;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<style>
      body{
            background-color:lightblue;
            color:white;
            
        }
        form{
            background-color:black;
            border-radius:50px;
            height:500px;
            padding-top:10px;
            margin-top:65px;
        }
        label {
        display:block;
        float:left; 
        margin-left:350px;

        }
        input{
            
          margin-right:440px;
          width:250px;
          height:30px;
          border-radius:8px;
        }
        ul{
            text-decoration:none;
            list-style-type:none;
            text-align:center;
            margin-top:100px;
            font-size:24px; 
        }
        a:hover{
            color:black;
            background-color:red;
        }
</style>
<body bgcolor="white">

    <form action="" method="post">
    <center><ul><h1><center>Login</center></h1>
        <li>
            <label for="username">username</label>
            <input type="text" name="username" id="username" 
required>
        </li>
        <li>
            <label for="password" style="margin-top:30px;">password</label>
            <input type="password" name="password" id="password"style="margin-top:20px; margin-right:px;"
required>
        </li>
        <br><br>
        <button href="index.php" type="submit" name="login" style="width:150px; height:50px;text-align:center; background-color:green;">Enter</button><br>
        <a href="registrasi.php" style="text-decoration:none; color:white; border-radius:62px;">Dont have account?Sign in now</a>
    </ul></center>
    </form>  
</html>