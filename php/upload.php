<?php
    $conn = mysqli_connect('localhost','root','ututut0833');
    mysqli_select_db($conn,'tututu0833');
    $title = $_POST['title'];
    $author = $_POST['author'];
    $contents = $_POST['contents'];
    $sql ="INSERT INTO topic(title,description,author) VALUES('$title','$contents','$author')";
    $result = mysqli_query($conn,$sql);
    header('Location:/');
?>