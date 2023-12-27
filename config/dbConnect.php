<?php
  $host = "localhost";
  $user = "root";
  $password = "";
  $database = "wood_boards";

  $connect = mysqli_connect($host, $user, $password, $database);

  if ($connect->connect_error) {
    die($connect->connect_error);
  }
