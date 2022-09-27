<?php
  session_start();
  if(!isset($_SESSION['id']) && (!isset($_SESSION['user_name'])))
  include_once('../include/connection.php');
  include_once('../include/header.php');
  include_once('../include/aside.php');

  if(isset($_GET['edit']))
  {
    $id = $_GET['edit'];
    $sql ="SELECT * FROM container WHERE con_id='$id'";
    $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
            $id     = $row['con_id'];
            $name   = $row['con_name'];
            $text    = $row['con_text'];
            $int   = $row['con_int'];
            $cat   = $row['con_cat'];
            $image  = $row['image'];
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
              <input type="hidden" name="con_id" value="<?= $id ?>">
              <div class="card-body">
                <!-- start row --> 

                    <div class="form-group">
                      <label for="name">កែប្រែទិន្នន័យឈ្មោះទំនេញ</label>
                      <input type="name" class="form-control" id="con_name" name="con_name" value="<?= $name ?>">
                    </div>

                    <div class="form-group"style="margin-left: 5px;">
                                  <label>ប្រភេទ</label>
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

                    <div class="col-md-6">
                        <div class="form-group">
                          <label style="margin-top: 10px;margin-left: -7px;">ស្ថានភាព</label> 
                          <select class="form-control" name="status"style="width: 206%;margin-left: -7px;margin-top: 3px">
                            <option value="1" <?php if($status=='1'){ echo 'selected="selected"';} ?>>ប្រើប្រាស់បាន</option>
                            <option value="0" <?php if($status=='0'){ echo 'selected="selected"';} ?>>មិនទាន់ប្រើបាន</option>
                          </select>
                        </div>
                      </div>

                    <div class="form-group">
                      <label for="text">កែប្រែតម្លៃ</label>
                      <input type="text" class="form-control" id="con_int" name="con_int" value="<?= $int ?>">
                    </div>
                    <div class="form-group">
                    <label for="pob">បញ្ចូលអំពីរឿង</label>
                      <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
                        <script>
                          tinymce.init({
                            selector: '#mytextarea'
                              });
                            </script>
                            <textarea id="mytextarea" name="con_text"><?= $text ?></textarea>
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputFile">រូបថត</label>
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
      </div>
    </section>
    <!-- /.content -->
  </div>
<?php
  include_once('../include/footer.php');
?>