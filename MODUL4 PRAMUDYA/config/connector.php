<?php
$conn = new mysqli("127.0.0.1". ":" . "3306", "root", "", "client_project_pramudaya");

if (!$conn) {
  die("Koneksi Error: " . $conn->connect_error);
}