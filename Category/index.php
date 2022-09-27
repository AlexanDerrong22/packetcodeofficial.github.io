<?php
  include "../include/connection.php";
  include "../include/header.php";
  include "../include/aside.php";
?>

    <!-- Main content -->
    <section class="content">
    <div class="row">
          <div class="col-12">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Fixed Header Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 480px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>ឈ្មោះ</th>
                      <th>សកម្មភាព</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $sql ="SELECT * FROM category ORDER BY cat_id DESC";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                    $i=0;
                    while($row = $result->fetch_assoc()) {
                      $i++;
                      $id     = $row['cat_id'];
                      $name   = $row['cat_name'];
                      $status   = $row['status'];
                    ?>
                    <tr>
                      <td><?= $id ?></td>
                      <td><?= $name ?></td>
                      <td>
                        <a href="edit.php?edit=<?= $id ?>" class="btn btn-sm btn-warning"><i class="far fa-edit"></i></a>
                        <a href="delete.php?delete=<?= $id ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                      </td>
                    </tr>
                    <?php
                    }
                  }
                ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
  include "../include/footer.php";
  ?>
  

