     <!DOCTYPE html>
     <html lang="en">

     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
          <title>MyBooking</title>
     </head>

     <body>
          <?php
          error_reporting(E_ERROR | E_PARSE);
          $idNumber = rand(300000, 600000);
          $nama = $_POST['nama'];
          $checkIn = $_POST['checkin'];
          $duration = $_GET['duration'];
          $checkOut = "checkout";
          $car = $_POST['car'];
          $Phone = $_POST['nomor'];

          if ($car == "toyotaford.jpeg") :
               $car = 'Toyota Ford';
          elseif ($car == "civic2022.png") :
               $car = 'Civic';
          elseif ($car == "xpander21.jpg") :
               $car = 'Xpander';
          endif;

          if ($car == "Toyota Ford") :
               $total = 300000 * $duration;
          elseif ($car == "Civic") :
               $total = 350000 * $duration;
          elseif ($car == "Xpander") :
               $total = 280000 * $duration;
          endif;

          if (empty($_POST['service1']) and empty($_POST['service2']) ) :
               $serv1 = "-";
               $serv2 = "NO Service";
          endif;

          if (!empty($_POST['service1']) and !empty($_POST['service2']) ) :
               $servShow = "Health Protocol & Driver";
               $total += 130000;
          endif;

          if (empty($_POST['service1']) and !empty($_POST['service2'])):
               $serv1 = "Driver";
               $servShow = "Driver";
               $total += 100000;
          endif;

          if (empty($_POST['service2']) and !empty($_POST['service1'])):
               $serv2 = "Health Protocol";
               $servShow = "Health Protocol";
               $total += 30000;
          endif;
          if (!empty($_POST['service1']) and !empty($_POST['service2']) and !empty($_POST['service3']) ) :
               $servShow = "Health Protocol & Fuel Filled & Driver";
               $total += 380000;
          endif;

          if (empty($_POST['service1']) and empty($_POST['service2']) and !empty($_POST['service3']) ):
               $serv3 = "Fuel Filled";
               $servShow = "Fuel Filled";
               $total += 250000;
          endif;


          ?>
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
               <div class="collapse navbar-collapse d-flex justify-content-center">
                    <div class="navbar-nav">
                         <a class="nav-item nav-link" href="home.php ">Home</a>
                         <a class="nav-item nav-link active" href="book.php">Booking</a>
                    </div>
               </div>
          </nav>
          <br><br>
          <div class="container d-flex justify-content-center">
               <table class="table table-striped">
                    <tr>
                         <th>Booking Number</th>
                         <th>Name</th>
                         <th>Check-in</th>
                         <th>Check-out</th>
                         <th>Car Type</th>
                         <th>Phone Number</th>
                         <th>Service(s)</th>
                         <th>Total Price</th>
                    </tr>
                    <tr>
                         <td class="font-weight-bold"><?= $idNumber ?></td>
                         <td><?= $name ?>Pram_1202200063</td>
                         <td><?= date('d/m/Y', strtotime($checkIn)) ?></td>
                         <td><?= date('d/m/Y', strtotime($checkOut)) ?></td>
                         <td><?= $car; ?></td>
                         <td><?= $phone ?>081248658661</td>
                         <td><?= $servShow ?></td>
                         <td>Rp<?= $total ?></td>
                    </tr>
               </table>
          </div>
          <div class="card-footer text-muted text-center">
     Created by : Pram_1202200063
     </div>
     </body>

     </html>