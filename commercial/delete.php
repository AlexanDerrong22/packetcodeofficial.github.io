<?php
    // session_start();
    // if(!isset($_SESSION['id']) && (!isset($_SESSION['user_name'])))
    // {
    //   header("Location:../login/index.php");
    //   exit();  
    // }
    include_once('../include/connection.php');
    if(isset($_GET['delete']))
    {
        $id = $_GET['delete'];
        $sql    ="SELECT image FROM commercial WHERE slide_id ='$id'";
        $result = $conn->query($sql);
        $row  = $result->fetch_assoc();
        $img = $row['image'];
        unlink("../assets/img/$img");

        $delete = "DELETE FROM commercial WHERE slide_id ='$id'";
        $result = $conn->query($delete);
        if($result)
        {
            header("location:index.php");
            exit();
        }
    }
?>
