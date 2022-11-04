<?php
    require "koneksi.php";
    $member = [];
    // $sql = "SELECT * FROM datamember";
    // $result = mysqli_query($conn, $sql);
    // while ($row = mysqli_fetch_assoc($result)){
    //     $member[] = $row;
    // }

    if(isset($_GET['search'])){
        $keyword = $_GET['keyword'];
        $result = mysqli_query($conn, "SELECT * FROM datamember WHERE nama LIKE '%$keyword%' OR nomor LIKE '%$keyword'");
        while($row = mysqli_fetch_assoc($result)){
            $member[] = $row;
        }
    }
    else{
        $result = mysqli_query($conn, "SELECT * FROM datamember");
        while($row = mysqli_fetch_assoc($result)){
            $member[] = $row;
        }
    }

    // $datamember = [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>List Membership</title>
    <link rel="stylesheet" href="./dist/css/style.css">
    <script src="js.js"></script>

</head>
<body>
<header1>
        <section class="navigation">
            <div id="container">
                <div id="box-navigation">
                    <div class="box" id = "boxtampilan">
                        <h1><a href="index.php" >NAF STORE</a></h1>
                    </div>
                    <div id="boxes" style = "font-size: 20px;">
                        <ul>
                            <h1>LIST MEMBER</h1>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
</header1>

<section class ="containermem">
    <div id = "tampilanmem">
        <b>LIST MEMBERSHIP</b>  
        <form action = "" method = "GET">
                            <table>
                                <tr>
                                    <td>
                                        <div class = "form-outline">
                                            <input type = "text" name = "keyword" id = "keyword" class = "form-control">
                                        </div>
                                    </td>
                                    <td>
                                        <button type = "submit" class = "btn btn-secondary" name="search">
                                            <i class = "fa fa-search"></i>
                                        </button>
                                    </td>
                                </tr>
                            </table>
                        </form>
        <div id = "tampilantable">
            <table id = "table1" border="2">
                <tr>
                    <td>NO</td>
                    <td>Nama</td>
                    <td>Nomor HP</td>
                    <td>Umur</td>
                    <td>Alamat</td>
                    <td>Jenis Kelamin</td>
                    <td>Jenis Membership</td>
                    <td>Foto Profile</td>
                    <td>Edit / Delete Data</td>
                    <td>Member Dibuat</td>
                </tr>
                <?php if(isset($member)){foreach($member as $mem):?>
                    <tr>
                    <td><?php echo $mem['id']; ?></td>
                    <td><?php echo $mem['nama']; ?></td>
                    <td><?php echo $mem['nomor']; ?></td>
                    <td><?php echo $mem['umur'];?></td>
                    <td><?php echo $mem['alamat']; ?></td>
                    <td><?php echo $mem['kelamin']; ?></td>
                    <td><?php echo $mem['tier']; ?></td>
                    <td><?php echo '<image src="gambar/'.$mem['profile'].'" style="width:100px; height:120px; padding-top: 5px; padding-bottom: 2px;">'?></td>
                    <td align="center" style = "font-size: 0.8cm";>
                        <a href="update.php?id=<?php echo $mem['id'];?>"><i class="fa fa-pencil"></i></a>
                        <a href="delete.php?id=<?php echo $mem['id'];?>"><i class="fa fa-trash" style = "margin-left: 20px; "size": 10px></i></a>
                    </td>
                    <td><?php echo $mem['durasi']?></td>
                    </tr>
                    <?php endforeach; }?>

            </table>
        </div>
       
    </div>
</section>

<section id="hero2">
            <h1>Welcome to Memberships!</h1>
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