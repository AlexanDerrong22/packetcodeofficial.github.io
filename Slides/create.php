<?php
  include "../include/header.php";
  include "../include/aside.php";
?> 
 
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">បញ្ចូលព័ត៌មានរបស់ស្លាយ</h3>

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
                <div class="row">
                  <div class="col-md-12">
                      <!-- alert -->
                      <?php
              if(isset($_GET['msg']) == TRUE && $_GET['msg'] == 0)
              {
            ?>
             <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> បញ្ចូលទិន្នន័យ!</h5>
                ការបញ្ចូលទិន្នន័យបានសំរេច!
              </div>
             <?php
              }
            ?>

            <?php
              if(isset($_GET['msg']) == TRUE && $_GET['msg'] == 1)
              {
            ?>
             <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> មិនបានសំរេច!</h5>
                ការបញ្ចូលបញ្ចូលទិន្នន័យមិនបានសំរេច សូមពិនិត្យ TID.
              </div>
             <?php
              }
            ?>

            <?php
              if(isset($_GET['msg']) == TRUE && $_GET['msg'] == 2)
              {
            ?>
             <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> មិនបានសំរេច!</h5>
                ការបញ្ចូលបញ្ចូលទិន្នន័យមិនបានសំរេច សូមពិនិត្យ ID Card.
              </div>
             <?php
              }
            ?>

            <?php
              if(isset($_GET['msg']) == TRUE && $_GET['msg'] == 3)
              {
            ?>
             <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> មិនបានសំរេច!</h5>
                ការបញ្ចូលបញ្ចូលទិន្នន័យមិនបានសំរេច សូមពិនិត្យ Name.
              </div>
             <?php
              }
            ?>

            <?php
              if(isset($_GET['msg']) == TRUE && $_GET['msg'] == 4)
              {
            ?>
             <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> មិនបានសំរេច!</h5>
                ការបញ្ចូលបញ្ចូលទិន្នន័យមិនបានសំរេច សូមពិនិត្យ Date of Birth.
              </div>
             <?php
              }
            ?>

            <?php
              if(isset($_GET['msg']) == TRUE && $_GET['msg'] == 6)
              {
            ?>
             <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> មិនបានសំរេច!</h5>
                ការបញ្ចូលបញ្ចូលទិន្នន័យមិនបានសំរេច សូមពិនិត្យ Phone Number
              </div>
             <?php
              }
            ?>
                      <!-- form for insert -->
                    <form role="form" action="submit.php"  method="POST" enctype="multipart/form-data">
                      <div class="card-body">
                
                                <div class="form-group"style="margin-top: 8px;margin-left: 7px;width: 100%;">
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

                                <div class="col-md-6">
                                  <div class="form-group"style="width: 205%;">
                                    <label for="name">ឈ្មោះស្លាយ</label>
                                    <input type="text" class="form-control" id="slide_name" name="slide_name" placeholder="Please Enter Teacher Name">
                                  </div>
                                </div>
                               
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label style="margin-top: -4px;margin-left: 1px;">ស្ថានភាព</label> 
                                    <select class="form-control" name="status"style="width: 206%;margin-left: 0px;margin-top: 0px;">
                                        <option value="1">ប្រើប្រាស់បាន</option> 
                                        <option value="0">មិនទាន់ប្រើបាន</option>
                                    </select>
                                </div>
                             

                            <!-- /.card-body -->
                      
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary" name="submit">បញ្ចូលទិន្នន័យ</button>
                      </div>
                    </form>
                  </div>
                </div>
      
    
      
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