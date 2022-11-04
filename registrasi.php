<?php
    require "koneksi.php";

    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $verifypw = $_POST['verifypw'];

        if ($password === $verifypw){
            $password = password_hash($password, PASSWORD_DEFAULT);
            $result = mysqli_query($conn, "SELECT username from user WHERE username = '$username'");

            if(mysqli_fetch_assoc($result)){
                echo "<script>
                        alert('Username Telah Dipakai');
                        document.location.href = 'registrasi.php';
                    </script>";
            }
            else{
                $sql = "INSERT INTO user VALUES ('', '$username', '$password')";
                $result = mysqli_query($conn, $sql);

                if(mysqli_affected_rows($conn) > 0){
                    echo "<script>
                        alert('Registrasi Akun Berhasil');
                        document.location.href = 'login.php'
                        </script>";
                }
                else{
                    echo "<script>
                        alert('Registrasi Akun Gagal');
                        document.location.href = 'registrasi.php'
                        </script>";
                }
            }

        }
        else{
            echo "<script>
            alert('Konfirmasi Password Tidak Sesuai');
            document.location.href = 'registrasi.php';
            </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Daftar Akun | Nafstore</title>
    <link rel="stylesheet" href="style.css">
    <style>
      <?php include './dist/css/registrasi.css' ?>
    </style>
  </head>

<body>
    <!-- <div class="container">
        <div class="judul">
            <h2>Registrasi Akun</h2>
        </div>

        <div class="form">
            <form action="" method="POST">

            <label for="username">Username</label><br>
            <input type="text" name="username" class="input" placeholder="Username"><br>

            <label for="password">Password</label><br>
            <input type="password" name="password" class="input" placeholder="Password"><br>

            <label for="verifypw">Konfirmasi Password</label><br>
            <input type="password" name="verifypw" class="input" placeholder="Password Verification"><br>

            <input type="submit" name="register" id = "register" class="submit" value="Register"><br><br>
            </form>

            <p>Sudah Punya Akun?
                <a href="login.php">Login</a>
            </p>
         </div>
    </div> -->

    <!-- cadangan 2 -->
    <!-- <h2>Register Akun</h2>
    <form action = "" method = "POST">
        <table>
            <tr>
                <td><label for = "username">Username</label></td>
                <td>:<input type = "text" name = "username" placeholder = "Username" required></td>
            </tr>
                
            <tr>
                <td><label for = "password">Password</label></td>
                <td>:<input type = "password" name = "password" placeholder = "Password" required></td>
            </tr>

            <tr>
                <td><label for = "verifypw">Password Verification</label></td>
                <td>:<input type = "password" name = "verifypw" placeholder = "Password Verification" required></td>
            </tr>

            <tr>
                <td><button type = "submit" name = "register" id = "register">Register</button></td>
            </tr>
        </table>
    </form> -->

    <div class="container">
        <div class="judul">
            <h2>Registrasi Akun</h2>
        </div>

        <div class="form">
            <form iaction="" method="POST">

            <label class = "kotak" for="username">Username</label><br>
            <input class = "kotak2" type="text" name="username" placeholder="Username"><br>

            <label class = "kotak" for="password">Password</label><br>
            <input class = "kotak2" type="password" name="password" placeholder="Password"><br>

            <label class = "kotak" for="verifypw">Konfirmasi Password</label><br>
            <input class = "kotak2" type="password" name="verifypw" placeholder="Password Verification"><br>

            <input type="submit" name="register" id = "register" class="submit" value="Register"><br><br>
            </form>

            <p id = "style2" >Sudah Punya Akun?
                <a href="login.php">Login</a>
            </p>
         </div>
    </div>
</body>
</html>


