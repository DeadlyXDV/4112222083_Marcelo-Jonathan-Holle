<?php

$server = "db";
$user = "root";
$password = "root";
$database = "db_pendaftaran";

$db = mysqli_connect($server, $user, $password, $database);

if (!$db) {
    die("Gagal Terhubung dengan database!");
}
