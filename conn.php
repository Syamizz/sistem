<?php
$host='localhost';
$user='root';
$password = '';
$dbname='contoh_login';

$conn = new mysqli($host,$user,$password,$dbname);
session_start();