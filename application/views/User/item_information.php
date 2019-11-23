<!DOCTYPE html>
<html>
<?php
  $page = "company_information";
  include('head.php');
?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?php include('navbar.php'); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include('sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center mt-2">
            <h1>ITEM INFORMATION</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>



    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-10 offset-md-1">
            <!-- general form elements -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Item Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body row">

                  <div class="form-group col-md-4">
                    <input type="text" class="form-control form-control-sm" name="" id="" placeholder="Enter Item Name">
                  </div>

                  <div class="form-group col-md-4">
                    <input type="text" class="form-control form-control-sm" name="" id="" placeholder="Enter Party Code">
                  </div>
                  <div class="form-group col-md-4">
                    <input type="text" class="form-control form-control-sm" name="" id="" placeholder="HSN / SAC Code">
                  </div>

                  <div class="form-group col-md-6">
                    <select class="form-control select2 form-control-sm" style="width: 100%;">
                        <option selected="selected">Select GST Slab</option>
                      </select>
                  </div>
                  <div class="form-group col-md-6">
                    <select class="form-control select2 form-control-sm" style="width: 100%;">
                        <option selected="selected">Select Party Name</option>
                      </select>
                  </div>

                  <div class="form-group col-md-6">
                    <select class="form-control select2 form-control-sm" style="width: 100%;">
                        <option selected="selected">Select Item Group </option>
                      </select>
                  </div>
                  <div class="form-group col-md-6">
                    <select class="form-control select2 form-control-sm" style="width: 100%;">
                    <option selected="selected">Select Unit</option>
                      </select>
                  </div>

                  <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="" id="" placeholder="Inword Rate">
                  </div>
                  <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="" id="" placeholder="Outword Rate">
                  </div>
                  <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="" id="" placeholder="CI Boaring Weight Per Item">
                  </div>

                  <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="" id="" placeholder="PO No">
                  </div>
                  <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="" id="" placeholder="PO Date">
                  </div>
                  <div class="form-group col-md-4">

                  </div>
                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Add Item</button>
                  <button type="submit" class="btn btn-default ml-4">Cancel</button>
                </div>
              </form>
            </div>

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>
  <!-- /.content-wrapper -->
  <?php include('footer.php'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include('script.php') ?>
</body>
</html>
