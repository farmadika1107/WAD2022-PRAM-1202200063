<?php
  if(isset($_SESSION['login']))
  {
      header("location:./pages/Home-Pram.php");
  }  
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">


        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 23rem;" method="post" action="./config/login.php">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;"><b>Login</b></h3>

            <div class="form-outline mb-4">
              <input type="email" name="email" id="form2Example18" class="form-control form-control-lg" />
              <label class="form-label" for="form2Example18">Email</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" name="password" id="form2Example28" class="form-control form-control-lg" />
              <label class="form-label" for="form2Example28">Password</label>
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" name="submit" type="submit">Login</button>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Remember me
                 </label>
            </div>

            <p>Anda belum punya akun? <a href="./pages/Regist-Pram.php" class="link-info">Daftar</a></p>

          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="asset\images\wl login.jpg"
          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: right;">
      </div>
    </div>
  </div>
</section>

</body>

</html>
