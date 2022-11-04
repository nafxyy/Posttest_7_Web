<?php
    session_start();
    if (!isset($_SESSION['userLogged'])){
        header('Location: login.php'); 
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/css/style.css">
    <title>NAF STORE</title>
    <script src="js.js"></script>
</head>
<body id="main">
    <script>
        <?php
            echo "alert('Welcome To NAF STORE, ". $_SESSION['UserData']['Username']."');";
        ?>
    </script>

    <!-- Header -->
    <header>
        <section class="navigation">
            <div id="container">
                <div id="box-navigation">
                    <div class="box">
                        <h1>NAF STORE</h1>
                    </div>
                    <div id="boxes">
                        <ul>
                            <li><a href="#main">Home</a></li>
                            <li><a href="#products">Products</a></li>
                            <li><a href="#address">Address</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li><a href="#about">About Me</a></li>
                            <li><a href="member.php">Membership</a></li>
                            <li><a href="logout.php"><button id="logout">Log Out</button></a></li>
                            <li><button id="tomb">Click Here</button></li>
                            <li><input type="checkbox" id="checkbox" onclick="gelap()">Dark Mode</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="hero">
            <h1>Thrifting Solusi Tepat Saat Dompet Cekat</h1>
        </section>
    </header>

    <!-- Products Section -->
    <section class="products" id="products">
        <h1 id="judul">Products Variant</h1>
        <div class="container1">
            <div class="box-products">
                <div class="box1">
                    <img src="./gambar/baju1.png" alt="Baju Flannel">
                    <h1>Baju Flannel</h1>
                    <button class="btn-info4">
                        <p style="display:block;">Hide/Show</p> 
                    </button>
                    <p class="show4">Kumpulan Flannel Harga Murah</p>
                </div>
                <div class="box1">
                    <img src="./gambar/baju2.png" alt="Sweater Rajut">
                    <h1>Sweater Rajut</h1>
                    <button class="btn-info4">
                        <p style="display:block;">Hide/Show</p> 
                    </button>
                    <p class="show4">Sweater Rajut Pas di Badan dan Kantong</p>
                </div>
                <div class="box1">
                    <img src="./gambar/baju3.png" alt="Sweater">
                    <h1>Sweater</h1>
                    <button class="btn-info4">
                        <p style="display:block;">Hide/Show</p> 
                    </button>
                    <p class="show4">Aneka Sweater Murah tapi Ga Murahan</p>
                </div>
                <div class="box1">
                    <img src="./gambar/piringan.png" alt="Piringan Hitam">
                    <h1>Piringan Hitam</h1>
                    <button class="btn-info4">
                        <p style="display:block;">Hide/Show</p> 
                    </button>
                    <p class="show4">Piringan Hitam untuk kamu yang <i>Old School</i></p>
                </div>
                <div class="box1">
                    <img src="./gambar/topi.png" alt="Topi">
                    <h1>Topi</h1>
                    <button class="btn-info4">
                        <p style="display:block;">Hide/Show</p> 
                    </button>
                    <p class="show4">Topi untuk buat Hari Kamu Happy</p>
                </div>
                <div class="box1">
                    <img src="./gambar/chinos.png" alt="Chinos">
                    <h1>Chinos</h1>
                    <button class="btn-info4">
                        <p style="display:block;">Hide/Show</p> 
                    </button>
                    <p class="show4">Aneka Jenis dan Warna Chinos</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Address Section -->
    <section class="address" id="address">
        <div class="container2">
            <div id="box-address">
                <div class="box">
                    <h1>Where to Find Us?</h1>
                    <p>You can find us at:</p>
                    <p>Jalan Jendral Sudirman No.24</p>
                    <p>Samarinda, Kalimantan Timur</p>
                </div>
                <div class="box">
                    <img src="./gambar/logomap.png" alt="Alamat Toko">
                </div>
            </div>
        </div>
    </section>

      <!-- Contacts Section -->
      <section class="contact" id="contact">
        <div class="container3">
            <div class="box-contact">
                <div class="box">
                    <h1>You can contact us via</h1>
                </div>
                <div class="box">
                    <h1>Contact</h1>
                    <li>Whatsapp:081233214565</li>
                    <li>Instagram:@storejadi012</li>
                </div>
        </div>
    </section>

    <!-- About Me -->
    <section class="about" id="about">
        <div class="container4">
            <div class="box-about">
                <div class="box">
                    <h1>About Me</h1>
                </div>
                <div class="box">
                    <p>Nama saya Muhammad Naufal Ihsan Maulidin dan sering dipanggil Naufal</p>
                    <p>Saya merupakan mahasiswa semester 3 di Universitas Mulawarman prodi Informatika</p>
                    <p>Alasan saya masuk prodi ini karena merasa bahwa perkembangan dunia teknologi semakin dibutuhkan di masa depan</p>
                    <p>sehingga nantinya dapat membuka prospek kerja yang lebih luas lagi</p>
                </div>
            </div>
        </div>
        </section>

    <!-- Footer Section -->
    <footer>
        <section class="foot">
            <div id="footer">
                <p>&copy; Owned by Naf-Store 2022</p>
            </div>
        </section>
    </footer>
</body>
</html>