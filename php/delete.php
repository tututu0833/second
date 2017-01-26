<?php
    $id = $_GET['id'];
    $conn = mysqli_connect('localhost','root','ututut0833');
    mysqli_select_db($conn,'tututu0833');
    $sql ="DELETE FROM `topic` WHERE `id` = $id";
    mysqli_query($conn,$sql);
    header('Location:/');
?>