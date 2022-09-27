<?php
  include "../include/header.php";
  include "../include/aside.php";
?>
  
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">បញ្ចូលពាណិជ្ជកម្ម</h3>

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
        <section class="content">

      <!-- Default box -->
      <!-- do something -->
               
                      <!-- alert -->
                      <!-- form for insert -->
                    <form role="form" action="submit.php"  method="POST" enctype="multipart/form-data">
                      <div class="card-body">
                
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
                                </div>
                              
                                  <div class="form-group">
                                    <label>ស្ថានភាព</label> 
                                    <select class="form-control" name="status">
                                        <option value="1">ប្រើប្រាស់បាន</option> 
                                        <option value="0">មិនទាន់ប្រើបាន</option>
                                    </select>

                                <div class="form-group">
                                    <label for="name">ឈ្មោះ</label>
                                    <input type="text" class="form-control" id="com_name" name="com_name" placeholder="Please Enter Teacher Name">
                                  </div>
                                </div>
  
                            <!-- /.card-body -->
                      
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary" name="submit">បញ្ចូលទិន្នន័យ</button>
                      </div>
                    </form>
               
      
    
      
      <!-- /.card -->

      </section>
      <!-- /.content -->
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