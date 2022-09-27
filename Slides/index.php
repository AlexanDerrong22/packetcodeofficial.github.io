<?php
  include "../include/header.php";
  include "../include/aside.php";
  include "../include/connection.php";
?>
  
  
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <div class="container mt-3"style="text-align: center;">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>លរ</th>
                  <th>ឈ្មោះ</th>
                  <th>ប្រើប្រាស់បានឬនៅ</th>
                  <th>រូបភាព</th>
                  <th>សកម្មភាព</th>
                </tr>
              </thead>
              <tbody>
              <?php
                  $sql ="SELECT * FROM slideshow ";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                    $i=0;
                    while($row = $result->fetch_assoc()) {
                      $i++;
                      $id     = $row['slide_id'];
                      $name   = $row['slide_name'];
                      $image   = $row['image'];
                      $status   = $row['status'];
                    ?>
                <tr>
                  <td><?= $i ?></td>
                  <td><?= $name ?></td>
                  <td><?= $status ?></td>
                  <td>
                          <?php
                        if($image=='')
                        {
                          echo " <a href='../assets/img/default-150x150.png' data-lightbox='example-set' data-title='No Image'><img src='../assets/img/default-150x150.png' alt='' class='img-circle elevation-2' width='50px' height='50px'></a> ";
                        }
                        else
                        {
                          echo " <a href='../assets/img/$image' data-lightbox='example-set' data-title='$name'><img src='../assets/img/$image' alt='' class='img-circle elevation-2' width='50px' height='50px'></a> ";
                        }
                      ?>
                  </td>
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
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
<?php
  include "../include/footer.php";
?>

