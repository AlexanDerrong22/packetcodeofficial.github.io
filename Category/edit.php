<?php
  session_start();
  if(!isset($_SESSION['id']) && (!isset($_SESSION['user_name'])))
  include_once('../include/connection.php');
  include_once('../include/header.php');
  include_once('../include/aside.php');

  if(isset($_GET['edit']))
  {
    $id = $_GET['edit'];
    $sql ="SELECT * FROM category WHERE cat_id='$id'";
    $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
            $id     = $row['cat_id'];
            $name   = $row['cat_name'];
            $status   = $row['status'];

        }
  }
?>

    <!-- Main content -->
    <section class="content">

      <!-- do something -->
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">កែប្រែរឿង</h3>
            </div>
            <!-- form for insert -->
            <form role="form" action="submit.php"  method="POST" enctype="multipart/form-data">
              <input type="hidden" name="cat_id" value="<?= $id ?>">
              <div class="card-body">
                <!-- start row --> 

                    <div class="form-group">
                      <label for="name">កែប្រែទិន្នន័យឈ្មោះទំនេញ</label>
                      <input type="name" class="form-control" id="cat_name" name="cat_name" value="<?= $name ?>">
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
      </div>
    </section>
    <!-- /.content -->
  </div>
<?php
  include_once('../include/footer.php');
?>