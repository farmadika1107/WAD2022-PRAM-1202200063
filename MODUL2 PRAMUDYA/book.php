     <!DOCTYPE html>
     <html lang="en">

     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
          <script>
               function setPicture() {
                    var banner = document.getElementById("tipe");
                    var value = banner.options[banner.selectedIndex].value;
                    $('img').attr("src", value);
               }
          </script>
          <?php
          if (empty($_GET['car'])) :
               $car = "Toyota Ford";
               $imgUrl = "toyotaford.jpeg";
          else :
               $car = $_GET['car'];
          endif;

          if ($car == "Toyota Ford") :
               $imgUrl = "toyotaford.jpeg";
          elseif ($car == "Civic") :
               $imgUrl = "civic2022.png";
          elseif ($car == "Xpander") :
               $imgUrl = "xpander21.jpg";
          endif;
          ?>
          <title>Booking</title>
     </head>

     <body>
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
               <div class="collapse navbar-collapse d-flex justify-content-center">
                    <div class="navbar-nav">
                         <a class="nav-item nav-link" href="home.php ">Home</a>
                         <a class="nav-item nav-link active" href="book.php">Booking</a>
                    </div>
               </div>
          </nav>

          <div class="container d-flex justify-content-center p-4">
               <div class="row">
                    <div class="col-sm-6 mr-3">
                         <form action="mybook.php" method="GET">
                              <div class="form-group">
                                   <label for="nama">Name</label>
                                   <input type="text" class="form-control" value="Pram_1202200063" name="nama">
                              </div>

                              <div class="form-group">
                                   <label for="nama">Book Date</label>
                                   <input type="date" class="form-control" name="checkin">
                              </div>

                              <div class="form-group">
                                   <label for="nama">Start Time</label>
                                   <input type="Time" class="form-control" name="checkin">
                              </div>

                              <div class="form-group">
                                   <label for="nama">Duration</label>
                                   <input type="number" class="form-control" name="duration">
                                   <p class="text-muted">Day(s)</p>
                              </div>

                              <div class="form-group ">
                                   <label for="car">Car Type</label>
                                   <?php if (empty($_GET['car'])) : ?>
                                        <select class="form-control" name="car" id="tipe" onchange="setPicture()">
                                             <option value="toyotaford.jpeg">
                                                  Toyota Ford</option>
                                             <option value="civic2022.png">
                                                  Civic</option>
                                             <option value="xpander21.jpg">
                                                  Xpander</option>
                                        </select>

                                   <?php else : ?>
                                        <input type="text" class="form-control" value=<?= $_GET['car'] ?> name="car" src readonly>
                                   <?php endif; ?>
                              </div>
                              
                              <div class="form-group">
                                   <label for="nomorhp">Phone Number</label>
                                   <input type="text" class="form-control" name="nomor">
                              </div>

                              <p class="mb-2">Add Service(s)</p>
                              
                              <div class="form-group">
                                   <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="service1" value="health">
                                        <label class="form-check-label" for="health">
                                        <p class="mb-0"><small>Health Protocol / Rp.30.000</small></p>
                                        </label>
                                   </div>
                                   <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="service2" value="Driver">
                                        <label class="form-check-label" for="Driver">
                                        <p class="mb-0"><small>Driver / Rp.100.000</small></p>
                                        </label>
                                   </div>
                                   <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="service3" value="Fuel">
                                        <label class="form-check-label" for="Fuel">
                                        <p class="mb-0"><small>Fuel Filled / Rp.250.000</small></p>
                                        </label>
                                   </div>
                              </div>

                              
                              <button class="btn btn-block btn-dark" type="submit" value="kirim">Book</button>
                         </form>
                    </div>
                    <div class="col-sm-4 float-left">
                         <img src="<?= $imgUrl; ?>" onchange="setPicture()" alt="image-form" style="width:500px;">
                    </div>
               </div>
          </div>
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
          <div class="card-footer text-muted text-center">
     Created by : Pram_1202200063
     </div>
     </body>

     </html>