<?php
  session_start();
  if(!isset($_SESSION['id']) && (!isset($_SESSION['user_name'])))
  include_once('../include/connection.php');
  include_once('../include/header.php');
  include_once('../include/aside.php');

  if(isset($_GET['edit']))
  {
    $id = $_GET['edit'];
    $sql ="SELECT * FROM commercial WHERE com_id='$id'";
    $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
            $id     = $row['com_id'];
            $name   = $row['com_name'];
            $image  = $row['image'];
            $status   = $row['status'];
        }
  }
?>

    <!-- Main content -->
    <section class="content">

      <!-- do something -->
      
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">កែប្រែពាណិជ្ជកម្ម</h3>
            </div>
            <!-- form for insert -->
            <form role="form" action="submit.php"  method="POST" enctype="multipart/form-data">
              <input type="hidden" name="com_id" value="<?= $id ?>">
              <div class="card-body">
                <!-- start row --> 
                    <div class="form-group">
                      <label for="name">កែប្រែឈ្មោះ</label>
                      <input type="text" class="form-control" id="com_name" name="com_name" value="<?= $name ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">​រូបថត</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="image" name="image">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text" id="">Upload</span>
                        </div>
                      </div>
                      <?php
                        if($image=='')
                        {
                          echo "<img src='../assets/img/default-150x150.png' style='margin-top:20px; width:250px;' class='img-circle elevation-2'>";
                        }
                        else
                        {
                          echo "<img src='../assets/img/$image' alt='' style='width:250px; margin-top:20px;' class='img-circle elevation-2'>";
                        }
                      ?>
                      <input type="hidden" name="old_image" value="<?= $image?>">
                    </div>


               
                  <!-- end col-md-6 2-->
                
                <!-- end row -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-success" name="update"> <i class="fa fa-pencil-alt"></i> កែប្រែទិន្នន័យ</button>
              </div>
            </form>
          </div>
        </div>
      
    </section>
    <!-- /.content -->
  </div>
<?php
  include_once('../include/footer.php');
?>