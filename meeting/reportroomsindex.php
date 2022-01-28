<?php
include ('connect.php');
  // $valid_uname = $_SESSION["valid_uname"];
$sql = "Select * from rooms "  ;
$query = mysqli_query($con, $sql)
or die ("3.ไม่สามารถประมวลผลคำสั่งได้").mysqli_error; 
?>
<style>
  .inputcolor {
    padding: 0px !important;
  }
</style>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ข้อมูลห้องประชุม</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
  href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
  rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <?php
  include "headindex.php";
  ?>
  <br>
  <br>
  <!-- Begin Page Content -->
  <div class="container-fluid" style="width: 80%; height: auto;">

    <!-- DataTales Example -->
    <div class="card shadow mb-4 ">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><font size="6" face="TH SarabunPSK"> รายงานข้อมูลห้องประชุม </font><!-- <a href="frm_addrooms.php"><span class="btn btn-primary fa fas-plus float-right "><i class="fas fa-plus-circle"> เพิ่มข้อมูลห้องประชุม</i></a> --></h6>

        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>รหัสห้องประชุม</th>
                  <th>ชื่อห้องประชุม</th>
                  <th>จำนวนคน</th>
                  <th>รายละเอียด</th>
                  <!-- <th>สีแจ้งเตือน</th> -->
                </tr>
              </thead>
              <tbody>
                <?php
                while ($rs=mysqli_fetch_array($query)){
                  ?>
                  <tr>
                    <td width="140" align="center" bgcolor="#F8F8FF"><?php echo "$rs[ro_id]"; ?></td>
                    <td align="center" bgcolor="#F8F8FF"><?php echo "$rs[ro_name]"; ?><?php echo "</a>"; ?></td>
                    <td width="100" align="center" bgcolor="#F8F8FF"><?php echo "$rs[ro_people]"; ?><?php echo "</a>"; ?></td>
                    <td bgcolor="#F8F8FF"><?php echo "$rs[ro_detail]"; ?><?php echo "</a>"; ?></td>
                    <!-- <td class="center"bgcolor="#F8F8FF"><div style="background-color:<?php echo $rs['ro_color']?>;">&nbsp;</div></td> -->

                    <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    

  </div>
  <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<?php
include "foot1.php";
?>
                          <!-- <?php
                          //include "ad_menu_logout.php";
                          ?> -->

                          <!-- Bootstrap core JavaScript-->
                          <script src="vendor/jquery/jquery.min.js"></script>
                          <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                          <!-- Core plugin JavaScript-->
                          <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                          <!-- Custom scripts for all pages-->
                          <script src="js/sb-admin-2.min.js"></script>

                          <!-- Page level plugins -->
                          <script src="vendor/datatables/jquery.dataTables.min.js"></script>
                          <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

                          <!-- Page level custom scripts -->
                          <script src="js/demo/datatables-demo.js"></script>

                        </body>

                        </html>