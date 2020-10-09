<?php
require('mahasiswa.class.php');
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
                <a class="nav-link" href="#">Aboutt</a>
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
                
                    <div class="card mb-2 shadow-sm">
                        <header class="card-header">
                            <div class="d-md-flex justify-content-between font-weight-bold">
                                <h5 class="mb-2"><i class="fa fa-graduation-cap fa-md"></i> Detail Mahasiswa</h5>
                                <p class="mb-0 float-right">
                                <a href="index.php" class="btn btn-sm btn-outline-primary">
                                <i class="fa fa-arrow-left fa-sm"></i> Kembali
                                </a>
                                    <!-- Jumlah Kelas <span class="badge mr-1 badge-primary"> Kuliah = 2 </span><span class="badge mr-1 badge-info"> Praktikum = 4 </span> -->
                                </p>
                            </div>
                        </header>
                        <div class="card-body">
                        <table class="table table-sm table-hover">
                            <tbody>
                            <?php

                            if (isset($_GET["id"]) and is_numeric($_GET["id"]) ) {

                                $mahasiswa = new Mahasiswa("localhost", "root", "", "pbw156");
                                $table = "mahasiswa";
                                // $data = array("nim");
                                $where = array("id" => $_GET["id"]);

                                $res = $mahasiswa->select($table, $data = NULL, $where);
                                
                                if (!$res) {
                                    echo "Hmm sepertinya data tidak ada.";
                                } else {

                            ?>
                                <tr>
                                    <th scope="col">NIM</th>
                                    <td><?php echo $res[0]->nim ?></td>
                                </tr>
                                <tr>
                                    <th scope="col">Nama</th>
                                    <td><?php echo $res[0]->nama ?></td>
                                </tr>
                                <tr>
                                    <th scope="col">Jenis Kelamin</th>
                                    <td>
                                        <?php 
                                            if ($res[0]->jenis_kelamin == "L") {
                                                echo "Laki-laki";
                                            } else if ($res[0]->jenis_kelamin == "P") {
                                                echo "Perempuan";
                                            } else {
                                                "";
                                            }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col">Agama</th>
                                    <td><?php echo ucfirst($res[0]->agama) ?></td>
                                </tr>
                                <tr>
                                    <th scope="col">Olahraga</th>
                                    <td><?php
                                            if (empty($res[0]->olahraga_fav)) {
                                                echo "-";
                                            } else {
                                                $olahraga = explode("#", $res[0]->olahraga_fav);
                                                for ($i=0; $i < count($olahraga); $i++) { 
                                                    if ($i == (count($olahraga)-1)) {
                                                        echo ucfirst($olahraga[$i]);
                                                    } else {
                                                        echo ucfirst($olahraga[$i]).", ";
                                                    }
                                                }
                                            }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="col">Foto</th>
                                    <td><?php echo "<img width=\"200\" src=\"data:image/jpeg;base64,".base64_encode($res[0]->foto_profil)."\"/>" ?></td>
                                </tr>
                            <?php
                                }
                            } else {
                                echo "Hmm sepertinya data tidak ada.";
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
</html>