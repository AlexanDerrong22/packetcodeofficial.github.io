<?php
  include "../include/connection.php";
  include "../include/header.php";
  include "../include/aside.php";
?>

    <!-- Main content -->
    <section class="content">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">បញ្ចូលទំនិញ</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="submit.php"  method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label for="cat_name">Enter Category</label>
                        <input type="name" class="form-control" id="cat_name" name="cat_name" placeholder="Enter Category">
                    </div>
                    <div class="form-group">
                        <label>ស្ថានភាពទំនេញ</label>
                        <select class="form-control" name="status">
                            <option value="1">ប្រើប្រាស់បាន</option>
                            <option value="0">ប្រើមិនទានបាន</option>
                        </select>
                    </div>
                    
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <button type="" class="btn btn-primary" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
  include "../include/footer.php";
  ?>