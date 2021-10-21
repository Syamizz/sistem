<?php
require '../conn.php';
if (!isset($_SESSION['idcustomer'])) header('location: ../');
$idcustomer = $_SESSION['idcustomer'];