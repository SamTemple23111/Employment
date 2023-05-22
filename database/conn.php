<?php
$conn = mysqli_connect("localhost", "root", "", "employment");




if (!$conn) {
    die("mysqil connect erorr" . mysqli_connect_error());
}
