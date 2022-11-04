<?php
    require "koneksi.php";
    $member = [];

    if (isset($_POST['spn'])){
        $kul = "SELECT * FROM datamember";
        $result = mysqli_query($conn, $kul);
        $member = [];
        while ($row = mysqli_fetch_assoc($result)){
            $member[] = $row;
        }

        $id = count($member)+1;
        $nama = $_POST['nama'];
        $nomor = $_POST['nomor'];
        $umur = $_POST['umur'];
        $alamat = $_POST['Alamat'];
        $jeniskelamin = $_POST['jenis_kelamin'];
        $tier = $_POST['member'];
        $durasimem = date('Y-m-d', strtotime("today"));

        $format_file = $_FILES['foto']['name'];
        $tmp_name = $_FILES['foto']['tmp_name'];
        $size = $_FILES['foto']['size'];
        $type = explode('.',$format_file);
        $type2 = $type[1];
        $rename = "$nama.$type2";
        $format_foto = array('jpg', 'png', 'jpeg');
        $max_size = 3000000;
    

        if($size < $max_size){
            move_uploaded_file($tmp_name, 'gambar/' . $rename);
            $sql = "INSERT INTO datamember VALUES ('$id','$rename','$nama','$nomor','$umur','$alamat','$jeniskelamin','$tier', date '$durasimem')";

            $result = mysqli_query($conn, $sql);
        
        // $halo = "SELECT * FROM datamember";

        // while ($row = mysqli_fetch_assoc(mysqli_query($conn, $halo))){
        //     $member[] = $row;
        // }

        if ($result){
            echo "
            <script>
                alert ('Data berhasil ditambah');
                document.location.href = 'member.php';
            </script>";
        } else {
            echo "
            <script> 
                alert ('gagal ditambah');
                document.location.href = 'member.php';
            </script>";
        }
    }
    }

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Thrift Memberships</title>
        <link rel="stylesheet" href="./dist/css/style.css"?v=<?php echo time(); ?>">
        <script src="js.js"></script>
        
    </head>

    <body class="member">
    <header1>
        <section class="navigation">
            <div id="container">
                <div id="box-navigation">
                    <div class="box" id = "boxtampilan">
                        <h1><a href="index.php" >NAF STORE</a></h1>
                    </div>
                    <div id="boxes" style = "font-size: 20px;">
                        <ul>
                            <h1>MEMBERSHIP PROGRAM</h1>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </header1>

        <b id = "titleform">FORM MEMBERSHIP</b>
        <div class = "containerform">
            <form action = "member.php" method = "POST" name = "form1" enctype="multipart/form-data">
                <table id = "formtable">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><input class='kotak' type = "text" name = "nama" id = 'nama' size = "25" required></td>
                    </tr>

                    <tr>
                        <td>Nomor HP</td>
                        <td>:</td>
                        <td><input class='kotak' type = "text" name = "nomor" id = 'nomor' size = "25" required></td>
                    </tr>

                    <tr>
                        <td>Umur</td>
                        <td>:</td>
                        <td><input class='kotak' type = "number" name = "umur" id = 'umur' size = "25" required></td>
                    </tr>

                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input class='kotak' type = "text" name = "Alamat" id = 'alamat' size = "25" required></td>
                    </tr>

                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td class='boks'>
                            <input type="radio" name = "jenis_kelamin" id = 'jeniskelamin' required value = "Laki-Laki" checked = "">Laki-Laki</input>
                            <input type="radio" name = "jenis_kelamin" id = 'jeniskelamin' required value = "Perempuan" checked = "">Perempuan</input>
                        </td>
                    </tr>
                   
                    <tr>
                        <td>Jenis Membership</td>
                        <td>:</td>
                        <td>
                            <select name="member">
                                <option id = 'tier' required value = "Bronze">Bronze</option>
                                <option id = 'tier' required value = "Silver">Silver</option>
                                <option id = 'tier' required value = "Gold">Gold</option>
                                <option id = 'tier' required value = "Platinum">Platinum</option>
                            </select>
                        </td>

                    </tr>

                    <tr>
                        <td>Foto Profile</td>
                        <td>:</td>
                        <td><input type="file" name="foto"></td>
                    </tr>
                    
                        <div class="box_bawah">
                            <td colspan = 1 class="butonsub" id = "butonlihat"><div class="tombol"><a href="tampilan.php">Lihat Data</a></td>
                            <td colspan = 8 class="butonsub"><input type="submit" name="spn" style="height:1cm; width:4cm; margin: 0; background-color:white; padding-left :10px;"></input></td>
                        </div>

                        <input type="hidden" name="tanggal_berakhir" value = "<?php echo date("Y-m-d",strtotime("today"));?>">
                

                    
                </table>
            </form>
        </div>

            
        <h1 id="judulmem">Membership Benefits</h1>
        <div>
            <div class="boxmem">
                <div class="box1">
                    <img src="./logo/logo1.png" alt="">
                    <h1>Extra Discount</h1>
                    <p>Dapatkan Tambahan Diskop Tiap Hari</p>
                </div>

                <div class="box1">
                    <img src="./logo/logo2.png" alt="">
                    <h1>Priority Service</h1>
                    <p>Pelayanan Prioritas Spesial Member</p>
                </div>

                <div class="box1">
                    <img src="./logo/logo3.png" alt="">
                    <h1>Delivery Discount</h1>
                    <p>Tambahan Diskon Pengiriman Khusus Member</p>
                </div>

                <div class="box1">
                    <img src="./logo/logo4.png" alt="">
                    <h1>New Catalog Everyday</h1>
                    <p>Info Terkait Katalog Baru Setiap Harinya</p>
                </div>
            </div>
        </div>
    </section>

        <footer>
            <section class="foot">
                <div id="footer">
                    <p>&copy; Owned by Naf-Store 2022</p>
                </div>
            </section>
        </footer>
    </body>
</html>

