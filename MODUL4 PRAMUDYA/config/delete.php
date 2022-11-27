<?php
require './connector.php';

$id = $_GET['id'];

$deletequery = "DELETE FROM showroom_pram_tabel WHERE id_mobil = $id";

if (mysqli_query($connector, $deletequery)) {
  header("location: ../pages/ListCar-Pram.php?pesan=delete");
} else {
  header("location: ../pages/ListCar-Pram.php?pesan=failed");
}