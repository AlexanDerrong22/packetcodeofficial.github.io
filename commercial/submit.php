<?php
    include_once('../include/connection.php');
    
    if(isset($_POST['submit']))
    {
        $id    = $_POST['com_id'];
        $name   = $_POST['com_name'];
        $image  = $_FILES['image']['name'];
        $target = "../assets/img/".basename($_FILES['image']['name']);
        // check is empty

        if($name=='')
        {
            header("Location:index.php?msg=3");
            exit();
        }

        // end check empty
        
        $sql    = "INSERT INTO commercial (com_id,com_name,image) VALUES('$id','$name','$image')";
        
        if ($conn->query($sql) === TRUE) {
            if(move_uploaded_file($_FILES['image']['tmp_name'], $target));
            header("Location:index.php?msg=0");
            exit();
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
          $conn->close();
    }


    //edit data on teachers
    if(isset($_POST['update']))
    {
        $idu    = $_POST['com_id'];
        $nameu   = $_POST['com_name'];
        $old_image =$_POST['old_image'];
        $imageu  = $_FILES['image']['name'];
        $targetu = "../assets/img/".basename($_FILES['image']['name']);
        if($imageu=="")
        {
            $sqlu   ="UPDATE commercial SET com_id='$idu',com_name='$nameu' WHERE com_id='$idu'";
            $resultu = $conn->query($sqlu);
            header("Location:index.php");
            exit();
        }
        else
        {
            $sqlu   ="UPDATE commercial SET com_id='$idu',com_name='$nameu',image='$imageu' WHERE com_id='$idu'";
            if ($conn->query($sqlu) === TRUE) {
                if(move_uploaded_file($_FILES['image']['tmp_name'], $targetu));
                unlink("../assets/img/$old_image");
                header("Location:index.php");
                exit();
            }
        }
    }
?>