<?php
// session_start();
// if (isset($_SESSION["valid_uname"])&&isset($_SESSION["valid_pwd"])){
// session_start();
// if(isset($_SESSION["valid_uname"])&& isset($_SESSION["valid_pwd"]) && $_SESSION["user_state"] == '0'){
//   include "connect.php";
//   $valid_uname = $_SESSION["valid_uname"];
//   $sql1 = "SELECT * FROM teacher WHERE t_username = '$valid_uname'";
//   $result1 = mysql_query($sql1,$conn);
//   $rs1 = mysql_fetch_array($result1);
session_start();

if (!$_SESSION['userid']) {
  header("Location: frm_login.php");
} else {
  
  include ('connect.php');
  // $valid_uname = $_SESSION["valid_uname"];
  $sql = "Select * from member as m  Left join department as d on (m.de_id = d.de_id) Left join status as st on (m.sta_id = st.sta_id) WHERE d.de_id = '".$_SESSION['de_id']."'"  ;
  $query = mysqli_query($con, $sql)
  or die ("3.ไม่สามารถประมวลผลคำสั่งได้").mysqli_error; 
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ข้อมูลสมาชิก</title>

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
   include "user_menu.php";
   include "menu_logout.php";
   ?>
   <!-- Begin Page Content -->
   <div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><font size="6" face="TH SarabunPSK"> รายงานข้อมูลพนักงาน </font><a href="frm_addmember_user.php"><span class="btn btn-primary fa fas-plus float-right "><i class="fas fa-plus-circle"> เพิ่มข้อมูลพนักงาน</i></a></h6>

        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>รหัสพนักงาน</th>
                  <!-- <th>คำนำหน้า</th> -->
                  <th>ชื่อผู้ใช้</th>
                  <th>ชื่อ-นามสกุล</th>
                  <!-- <th>นามสกุล</th> -->
                  <th>เบอร์โทร</th>
                  <!-- <th>ชื่อแผนก</th> -->
                  <th>ตำแหน่ง</th>
                  <th>ระดับสิทธิ์</th>
                  <!-- <th>รายละเอียด</th> -->
                  <th>แก้ไข</th>
                  <th>ลบ</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>รหัสพนักงาน</th>
                  <!-- <th>คำนำหน้า</th> -->
                  <th>ชื่อผู้ใช้</th>
                  <th>ชื่อ-นามสกุล</th>
                  <!-- <th>นามสกุล</th> -->
                  <th>เบอร์โทร</th>
                  <!-- <th>ชื่อแผนก</th> -->
                  <th>ตำแหน่ง</th>
                  <th>ระดับสิทธิ์</th>
                  <!--  <th>รายละเอียด</th> -->
                  <th>แก้ไข</th>
                  <th>ลบ</th>
                </tr>
              </tfoot>
              <tbody>
                <?php
                while ($rs=mysqli_fetch_array($query)){
                  ?>
                  <tr>
                    <td height="32" align="center" bgcolor="#F8F8FF"><?php echo "$rs[id]"; ?></td>
                    <!-- <td align="left" bgcolor="#F8F8FF"><?php echo "$rs[ntitle]"; ?><?php echo "</a>"; ?></td> -->
                    <td align="left" bgcolor="#F8F8FF" ><?php echo "$rs[username]"; ?></td>

                    <td align="left" bgcolor="#F8F8FF" ><?php echo "$rs[ntitle]"; ?><?php echo "</a>"; ?><?php echo "$rs[firstname]"; ?>    <?php echo "$rs[lastname]"; ?></td>


                    <!-- <td align="left" bgcolor="#F8F8FF" ><?php echo "$rs[lastname]"; ?></td> -->
                    <td align="left" bgcolor="#F8F8FF" ><?php echo "$rs[phone]"; ?></td>
                    <!-- <td align="center" bgcolor="#F8F8FF" ><?php echo "$rs[de_name]"; ?></td> -->
                    <td align="center" bgcolor="#F8F8FF" ><?php echo "$rs[position]"; ?></td>
                    <td align="center" bgcolor="#F8F8FF" ><?php echo "$rs[sta_name]"; ?></td>



                    <!-- <td align="center" bgcolor="#F8F8FF"><div align="center">
                     <?php echo "<a href=\"frm_detailstatus.php?id=$rs[id]\">"; ?><span  class="btn btn-info  " > <i class="far fa-file-alt">  รายละเอียด  </i></span></a></div></td> -->
                     <td align="center" bgcolor="#F8F8FF"><div align="center">
                      <?php echo "<a href=\"frm_editmember_user.php?id=$rs[id]\">"; ?><span  class="btn btn-success   " > <i class="far fa-edit">  แก้ไข </i></span></a></div></td>
                      <td align="center" bgcolor="#F8F8FF"><div align="center">
                       <?php echo "<a href=\"frm_deletemember_user.php?id=$rs[id]\">"; ?><span  class="btn btn-danger   " > <i class="fas fa-trash">   ลบ   </i></span></a></div></td>



                     </tr>
                     <?php
                   }
                   ?>
                 </table>
               </div>
             </div>
           </div>

         </div>
         <!-- /.container-fluid -->

       </div>
       <!-- End of Main Content -->

       <?php
       include "foot1.php";
       ?>

     </div>
     <!-- End of Content Wrapper -->

   </div>
   <!-- End of Page Wrapper -->

   <!-- Scroll to Top Button-->
   <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
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
                        <?php } ?>