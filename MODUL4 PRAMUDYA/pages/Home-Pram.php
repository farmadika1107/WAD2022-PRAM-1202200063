<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <?php
  require '../config/connector.php';

  $query = "SELECT * FROM showroom_pram_tabel";
  $result = mysqli_query($conn, $query);

  ?>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav gap-3">
                    <a class="nav-link" style="color: white;" href="#home">Home</a>
                    <a class="nav-link" style="color: #e0e0e0; font-weight: 600;" href="<?php if (mysqli_num_rows($result) > 0) {
                                                                                echo "./Listcar-Pram.php";
                                                                              } else {
                                                                                echo "./Add-Pram.php";
                                                                              } ?>">MyCar</a>
                </div>
            </div>
        </div>
    </nav>
    <section id="home">
        <div class="container">
            <div style="margin-top: 200px;" class="d-flex gap-5 justify-content-center align-items-center">
                <div>
                    <h1
                        style="font-family: 'Raleway'; font-style: normal; font-weight: 800; font-size: 56px; line-height: 66px; letter-spacing: 1.2px; text-transform: capitalize;">
                        Selamat Datang Di<br /> Show Room Pram!</h1>
                    <p style="font-style: normal; font-weight: 400; font-size: 20px; line-height: 23px; letter-spacing: 0.2px;"
                        class="mt-3">.</p>
                    <a href="<?php if (mysqli_num_rows($result) > 0) {
                      echo "./Listcar-Pram.php";
                    } else {
                      echo "./Add-Pram.php";
                    } ?>"
                        style="display: flex; flex-direction: row; align-items: center; justify-content: center; gap: 10px; width: 137px; height: 51px; background: #3563e9; border-radius: 5px; border: none; color: white; margin-top: 40px; text-decoration: none;"
                        class="button btn-primary">MyCar</a>
                    <div class="d-flex align-items-center gap-5 mt-5">
                        <img src="./asset/images/logo-ead.png" alt="logo" style="width:100px;">
                        <p style="margin-top: 20px; font-size:14px;">Pram_1202200063</p>
                    </div>
                </div>
                <img src="./asset/images\mobil3.jpg" alt="hero" width="720" height="360">
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>