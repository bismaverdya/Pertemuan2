<?php
require('mahasiswa.class.php');

if (isset($_GET["deleted"])) {
    if ($_GET["deleted"] == "success") {
        $alert = array(
            "type" => "alert-success",
            "message" => "Data <strong>".ucwords($_GET["data"])."</strong> berhasil dihapus.",
        );
    } else if ($_GET["deleted"] == "failed") {
        $alert = array(
            "type" => "alert-danger",
            "message" => "Data <strong>".ucwords($_GET["data"])."</strong> gagal dihapus.",
        );
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Pemrograman Berbasis Web</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Custom CSS -->
    <style>
        body {
            overflow-x: hidden;
            margin: 0;
            system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            background-color: #DCDCDC;
        }

        .navbar {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding: 5px;
        }

        .topbar{
            background-color: 	#000080;
            padding: 0;
        }

        .topbar .container .row {
            margin:-7px;
            padding:0;
        }

        .topbar .container .row .col-md-12 { 
        padding:0;
        }

        .topbar p{
            margin:0;
            display:inline-block;
            font-size: 13px;
            color: #28a745;
        }

        .topbar p > i{
            margin-right:5px;
        }
        .topbar p:last-child{
            text-align:right;
        } 

        header .navbar {
            margin-bottom: 0;
        }

        .topbar li.topbar {
            display: inline;
            padding-right: 18px;
            line-height: 52px;
            transition: all .3s linear;
        }

        .topbar li.topbar:hover {
            color: #1bbde8;
        }

        .topbar ul.info i {
            color: #131313;
            font-style: normal;
            margin-right: 8px;
            display: inline-block;
            position: relative;
            top: 4px;
        }

        .topbar ul.info li {
            float: right;
            padding-left: 30px;
            color: #ffffff;
            font-size: 13px;
            line-height: 44px;
        }

        .topbar ul.info i span {
            color: #aaa;
            font-size: 13px;
            font-weight: 400;
            line-height: 50px;
            padding-left: 18px;
        }

        ul.social-network {
            border:none;
            margin:0;
            padding:0;
        }

        ul.social-network li {
            border:none;  
            margin:0;
        }

        ul.social-network li i {
            margin:0;
        }

        ul.social-network li {
            display:inline;
            margin: 0 5px;
            border: 0px solid #2D2D2D;
            padding: 5px 0 0;
            width: 32px;
            display: inline-block;
            text-align: center;
            height: 32px;
            vertical-align: baseline;
            color: #000;
        }

        ul.social-network {
            list-style: none;
            margin: 5px 0 10px -25px;
            float: right;
        }

        .waves-effect {
            position: relative;
            cursor: pointer;
            display: inline-block;
            overflow: hidden;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-tap-highlight-color: transparent;
            vertical-align: middle;
            z-index: 1;
            will-change: opacity, transform;
            transition: .3s ease-out;
            color: #fff;
        }
        a {
            color: #0a0a0a;
            text-decoration: none;
        }

        li {
            list-style-type: none;
        }
        .bg-image-full {
            background-position: center center;
            background-repeat: no-repeat;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }
        .bg-dark {
            background-color: #222!important;
        }

        .mx-background-top-linear {
            background: -webkit-linear-gradient(45deg, #54d400 48%, #1b1e21 48%);
            background: -webkit-linear-gradient(left, #54d400 48%, #1b1e21 48%);
            background: linear-gradient(45deg, #54d400 48%, #1b1e21 48%);
        }


        .bg-primary {
            background-color: #007bff!important;
        }

        .accortoggle > a {
            display: block;
            position: relative;
        }

        .accortoggle > a:after {
            content: "\f078"; /* fa-chevron-down */
            font-family: 'FontAwesome';
            position: absolute;
            right: 0;
        }

        .accortoggle > a[aria-expanded="true"]:after {
            content: "\f077"; /* fa-chevron-up */
        }

        #footer {
            padding: 20px;
            color: white;
            background-color: #000080;
            text-align: center;
            font-weight: bold;
            position: fixed;
        }
    </style>

</head>
<body">

    <!-- Navigation Bar -->
    <div class="fixed-top">
    <header class="topbar">
        <div class="container">
            <div class="row">
            <!-- social icon-->
            <div class="col-sm-12">
                <ul class="social-network">
                <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-pinterest"></i></a></li>
                <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>

            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear">
        <div class="container">
        <a class="navbar-brand" href="index.php" style="text-transform: uppercase;">Pemrograman Berbasis Web</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav ml-auto">

            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
    </div>

    <!-- Page Content -->
    <div style="margin-top: 100px">
        <div class="container-fluid" style="margin-bottom: 100px;">
            <div class="row justify-content-center">
                <div class="col col-md-7">
                
                <?php if (isset($alert)) { ?>
                    <div class="alert <?php echo $alert["type"]; ?> alert-dismissible fade show" role="alert">
                        <?php echo $alert["message"]; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php } ?>

                    <div class="card mb-2 shadow-sm">
                        <header class="card-header">
                            <div class="d-md-flex justify-content-between font-weight-bold">
                                <h5 class="mb-2"><i class="fa fa-graduation-cap fa-md"></i> Daftar Mahasiswa</h5>
                                <p class="mb-0 float-right">
                                <a href="add.php" class="btn btn-sm btn-outline-primary">
                                <i class="fa fa-user-plus fa-sm"></i> Tambah
                                </a>
                                    <!-- Jumlah Kelas <span class="badge mr-1 badge-primary"> Kuliah = 2 </span><span class="badge mr-1 badge-info"> Praktikum = 4 </span> -->
                                </p>
                            </div>
                        </header>
                        <div class="card-body">
                        <table class="table table-sm table-hover">
                            <?php

                                $mahasiswa = new Mahasiswa("localhost", "root", "", "pbw156");
                                $table = "mahasiswa";
                                // $data = array("nim");
                                // $where = array("nama" => "naufal");

                                $res = $mahasiswa->select($table);

                                if (!empty($res)) {

                                    echo '
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">NIM</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>';

                                    $i = 1;
                                    foreach ($res as $row) {

                            ?>
                                <tr>
                                    <th scope="row"><?php echo $i++ ?></th>
                                    <td><?php echo $row->nim ?></td>
                                    <td><?php echo $row->nama ?></td>
                                    <td>
                                        <a href="delete.php?id=<?php echo $row->id ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash fa-md"></i></a>
                                        <a href="edit.php?id=<?php echo $row->id ?>" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                        <a href="detail.php?id=<?php echo $row->id ?>" class="btn btn-primary btn-sm"><i class="fa fa-search"></i> Detail</a>
                                    </td>
                                </tr>
                            <?php
                                
                                    }
                                } else {
                                    echo "<div class='text-center'>Data kosong</div>";
                                }
                            ?>
                            </tbody>
                        </table>
                            <!-- <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="tambahMahasiswa" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Mahasiswa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST">
                            <div class="form-group">
                                <label>NIM</label>
                                <input type="text" class="form-control" name="nim" placeholder="" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama" placeholder="" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <div class="float-right">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jk" value="L" checked>
                                        <label class="form-check-label">
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jk" value="P">
                                        <label class="form-check-label">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Agama</label>
                                <select name="agama" class="form-control" required>
                                    <option value="" selected disabled>-- Pilih! tdk boleh atheiss --</option>
                                    <option value="islam">Islam</option>
                                    <option value="kristen">Kristen</option>
                                    <option value="katolik">Katolik</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Olahraga</label>
                                <div class="float-right">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="olahraga" type="checkbox" value="">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Sepak bola
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="olahraga" type="checkbox" value="">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Basket
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="olahraga" type="checkbox" value="">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Renang
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="olahraga" type="checkbox" value="">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Futsal
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="olahraga" type="checkbox" value="">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Badminton
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label></label>
                            </div>

                            <div class="form-group">
                                <label>Foto</label>
                                <div class="float-right">
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                            </div>

                            <div class="form-group">
                                <label></label>
                            </div>

                            <button type="submit" name="subform" class="btn btn-primary btn-md">
                                <i class="fa fa-paper-plane fa-md"></i> Simpan
                            </button>
                            <button type="reset" class="btn btn-warning btn-md float-right">
                                <i class="fa fa-refresh fa-md"></i> Bersihkan
                            </button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Page Footer -->
    <footer id="footer" class="mt-4 fixed-bottom">
        <p>Pemrograman Berbasis Web &#169; 2020, Sekolah Vokasi IPB University</p>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
  </body>
</html>x