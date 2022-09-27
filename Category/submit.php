<?php
    include_once('../include/connection.php');
    
    if(isset($_POST['submit']))
    {
        $id    = $_POST['cat_id'];
        $name   = $_POST['cat_name'];
        $status    = $_POST['status'];
        $image  = $_FILES['image']['name'];
        $target = "../assets/img/".basename($_FILES['image']['name']);
        // check is empty
        if($name=='')
        {
            header("Location:create.php?msg=3");
            exit();
        }

        // end check empty
        
        $sql    = "INSERT INTO category (cat_name,status) VALUES('$name','$status')";
        if(move_uploaded_file($_FILES['image']['tmp_name'], $target));
        if ($conn->query($sql) === TRUE) {
            header("Location:index.php?msg=0");
            exit();
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
          $conn->close();
    }
    //edit data
    if(isset($_POST['update']))
    {
        $idu     = $_POST['cat_id'];
        $nameu   = $_POST['cat_name'];
        $status    = $_POST['status'];
        if($imageu=="")
        {
            $sqlu   ="UPDATE category SET cat_name='$nameu', status='$status' WHERE cat_id='$idu'";
            $resultu = $conn->query($sqlu);
            $old_image =$_POST['old_image'];
            $imageu  = $_FILES['image']['name'];
            $targetu = "../assets/img/".basename($_FILES['image']['name']);
            header("Location:index.php");
            exit();
        }
        else
        {
            $sqlu   ="UPDATE category SET cat_name='$nameu',status='$status', WHERE cat_id='$idu'";
            if ($conn->query($sqlu) === TRUE) {
                if(move_uploaded_file($_FILES['image']['tmp_name'], $targetu));
                unlink("../assets/img/$old_image");
                header("Location:index.php");
                exit();
            }
        }
    }
    ?>