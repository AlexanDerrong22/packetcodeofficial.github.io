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
                        <label>ប្រភេទទំនេញ</label>
                        <select class="form-control" name="con_cat">
                        <?php
                                      $sql ="SELECT * FROM category";
                                      $result = $conn->query($sql);
                                      if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                          $id     = $row['cat_id'];
                                          $name   = $row['cat_name'];
                                      ?>
                                      <option value="<?=$id?>"><?=$name?></option>
                                      <?php
                                        }
                                      }

                                    ?>    
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="con_name">ឈ្មោះទំនេញ</label>
                        <input type="name" class="form-control" id="text" name="con_name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="con_text">បញ្ចូលអំពីរទំនេញ</label>
                        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
                        <script>
                                tinymce.init({
                                selector: '#mytextarea'
                                });
                        </script>
                            <textarea id="mytextarea" name="con_text"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">បញ្ចូលរូបភាពទំនេញ</label>
                        <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text">តម្លៃទំនេញ</label>
                        <input type="text" class="form-control" id="con_int" name="con_int" placeholder="តម្លៃ">
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