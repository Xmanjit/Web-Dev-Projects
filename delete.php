<?php
    include "connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from crude2 where id=$id";
        $conn->query($sql);
    }
    header('location:/student-mangement-system/index.php');
    exit;
?>