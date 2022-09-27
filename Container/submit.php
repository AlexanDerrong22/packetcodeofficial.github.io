<?php
    include_once('../include/connection.php');
    
    if(isset($_POST['submit']))
    {
        $id    = $_POST['con_id'];
        $text = $_POST['con_text'];
        $name   = $_POST['con_name'];
        $int = $_POST['con_int'];
        $cat = $_POST['con_cat'];
        $status = $_POST['status'];
        $image  = $_FILES['image']['name'];
        $target = "../assets/img/".basename($_FILES['image']['name']);
        // check is empty

        if($name=='')
        {
            header("Location:index.php?msg=3");
            exit();
        }

        // end check empty
        
        $sql    = "INSERT INTO container (con_id,con_text,con_name,con_int,con_cat,image,status) VALUES('$id','$text','$name','$int','$cat','$image','$status')";
        
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
        $idu    = $_POST['con_id'];
        $textu = $_POST['con_text'];
        $nameu   = $_POST['con_name'];
        $intu = $_POST['con_int'];
        $catu = $_POST['con_cat'];
        $statusu = $_POST['status'];
        $old_image =$_POST['old_image'];
        $imageu  = $_FILES['image']['name'];
        $targetu = "../assets/img/".basename($_FILES['image']['name']);
        if($imageu=="")
        {
            $sqlu   ="UPDATE container SET con_id='$idu', con_text='$textu',con_name='$nameu',con_int='$intu',con_cat='$catu' ,status='$statusu' WHERE con_id='$idu'";
            $resultu = $conn->query($sqlu);
            header("Location:index.php");
            exit();
        }
        else
        {
            $sqlu   ="UPDATE container SET con_id='$idu', con_text='$textu',con_name='$nameu',con_int='$intu',con_cat='$catu' ,status='$statusu',image='$imageu' WHERE con_id='$idu'";
            if ($conn->query($sqlu) === TRUE) {
                if(move_uploaded_file($_FILES['image']['tmp_name'], $targetu));
                unlink("../assets/img/$old_image");
                header("Location:index.php");
                exit();
            }
        }
    }
?>