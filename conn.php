<?php
$conn = mysqli_connect("localhost", "root", "", "project");




if (!$conn) {
    die("mysqil connect erorr" . mysqli_connect_error());
}
