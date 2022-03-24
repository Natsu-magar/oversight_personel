<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

$con = mysqli_connect("localhost","root","user","sl class");
$sql = "insert into register(firstname,lastname,email,password) values ('$firstname','$lastname','$email','$password')";

$data = mysqli_query($con,$sql);


?>