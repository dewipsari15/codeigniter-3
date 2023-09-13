<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <style>
        .logo img {
            margin-top: 70px;
        }

        body {
            background-image: url("https://media.istockphoto.com/id/1278507736/vector/vector-frame-back-to-school-with-education-doodle-icon-symbols-on-green-chalkboard-eps10.jpg?s=612x612&w=0&k=20&c=tJfcltxqhsRJnl5ig7tMpM7UhrFJyu_Rg-J52Hv0Mis=");
            background-size: cover;
            background-repeat: no-repeat;
            min-height: 100vh;
            margin-bottom: -100px;
            padding-bottom: 100px;
        }

        footer{
            background-color: white;
            position: relative;
            margin-top: 24%;
            bottom: 0;
            width: 100%;
        }

        .container{
            padding-top: 10px;
        }
        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            margin: 0;
        }

        ul li a {
            text-decoration: none;
            color: #000;
        }
    </style>
</head>
<body>
    <h4 class="text-center text-warning">ASIS</h4>
    <div class="logo text-center">
        <img src="https://binusasmg.sch.id/ppdb/logobinusa.png" alt="logo binus" style="width: 13%;">
    </div>
    <br>
    <h4 class="text-center"><b>SISTEM INFORMASI SEKOLAH</b></h4>
    <hr class="container text-dark">
    <br>
    <p class="text-center text-dark">SMK BINA NUSANTARA SEMARANG</p>
    <div class="d-flex justify-content-center mt-5">
        <button class="btn btn-sm btn-danger mx-1">perpustakaan</button>
        <a href="auth" class="btn btn-sm btn-warning mx-1">Login</a>
    </div>
</body>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Informasi Kontak</h3>
                <p>Alamat: Batursari Jl. mondosari No. 123, Kec. Mranggen Kab. Demak</p>
                <p>Email: smkbinusdemak@sch.com</p>
                <p>Telepon: (123) 456-7890</p>
            </div>
            <div class="col-md-4">
                <h3>Tentang Kami</h3>
                <p>Kami adalah sekolahan yang menjadi salah satu sekolah yang bekerjasama langsung dengan perusahaan dan bisa langsung bekerja.</p>
            </div>
            <div class="col-md-4">
                <h3>Ikuti Kami</h3>
                <p>Temukan kami di media sosial:</p>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</html>
