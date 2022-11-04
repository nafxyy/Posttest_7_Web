<?php       
        require 'koneksi.php';
        if(isset($_POST['userlogin'])){
                $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
                $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
                $result = mysqli_query($conn, "SELECT * from user WHERE username = '$Username'");
               
                if (mysqli_num_rows($result)>0){
                        $akun = mysqli_fetch_assoc($result);
                        if(password_verify($Password, $akun['password'])){
                                session_start();
                                $_SESSION['UserData']['Username'] = $akun['username'];
                                $_SESSION["userLogged"] = "1";
                                header("location: index.php");
                                exit;
                        }
                }
                else {
                        $failed = true;
                }
        }
?>