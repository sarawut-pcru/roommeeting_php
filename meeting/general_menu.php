<?php 

// if (!$_SESSION['userid']) {
//   header("Location: frm_login.php");
// } else {

//   include "connect.php";
  // echo 'ทดสอบค่าตัวแปร'. $_SESSION['userid'] ;
  // $valid_uname= $_SESSION["userid"];
  // $sql3 = "select * FROM member INNER JOIN event on member.id = event.id WHERE member.id = '".$_SESSION['userid']."'";
  // $result = mysqli_query($con,$sql3)
  // or die(mysqli_error($con));
  // echo "ทดสอบค่า".mysqli_num_rows($result);

  // $rs = mysqli_fetch_array($result);

?>
<!-- Page Wrapper -->
<div id="wrapper">

  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar" style="background-image: linear-gradient(to top, #1a677a,#000000 );">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
      <div class="sidebar-brand-icon rotate-n-15">
        <!-- <i class="fas fa-laugh-wink"></i> -->
        <br>
        <i class="far fa-calendar-alt"></i>
      </div>
      <div class="sidebar-brand-text mx-3"><br><font size="5" face="TH SarabunPSK">ระบบจองห้องประชุม </font><!-- <sup>2</sup> --></div>
    </a>
    <br> 
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="calendar_general.php">
        <i class="fas fa-home"></i>
        <span><font size="5" face="TH SarabunPSK"><b>หน้าหลัก</b></font></span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        <span><font size="4" face="TH SarabunPSK">จองห้องประชุม</font></span>
      </div>
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="reportrooms_ge.php">
          <i class="fas fa-chalkboard-teacher"></i>
          <span><font size="5" face="TH SarabunPSK"><b>ห้องประชุม</b></font></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="frm_addbooking_general.php">
            <i class="far fa-calendar-check"></i>
            <span><font size="5" face="TH SarabunPSK"><b>จองห้องประชุม</b></font></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="showmybooking_general.php">
              <i class="fas fa-list"></i>
              <span><font size="5" face="TH SarabunPSK"><b>รายการจองของฉัน</b></font></span></a>
            </li>

            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
              <span><font size="4" face="TH SarabunPSK">แจ้งเตือน</font></span>
            </div>
            <li class="nav-item">
              <a class="nav-link" href="showmybooking_general1.php">
                <i class="fa fa-bell" aria-hidden="true"></i>
                <span><font size="5" face="TH SarabunPSK"><b>แจ้งเตือน</b></font></span>
                <span id='uun'></span>  </a>
              </li>


              <hr class="sidebar-divider">



              <!-- Sidebar Toggler (Sidebar) -->
              <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
              </div>



            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column ">

              <!-- Main Content -->
              <div id="content">

                <!-- Top bar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow bg-gradient-info">

                  <!-- Sidebar Toggle (Topbar) -->
                  <button id="sidebarToggleTop" class="btn btn-link d-md-none bg-white rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                  </button>





                  <!-- Topbar Navbar -->
                  <ul class="navbar-nav ml-auto">

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="mr-2 d-none d-lg-inline text-white small"><font size="5" face="TH SarabunPSK"><b>ยินดีต้อนรับ คุณ <?php echo $_SESSION['user']; ?></b></font></span>
                      <img class="img-profile rounded-circle"
                      src="img/undraw_profile.svg">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="frm_editgeneral.php">
                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                      แก้ไขข้อมูลส่วนตัว
                    </a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="ad_logout.php" data-toggle="modal" data-target="#logoutModal">
                      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                      ออกจากระบบ
                    </a>
                  </div>
                </li>

              </ul>

            </nav>
            <?php //} ?>
            <!-- End of Topbar -->

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
            <script>
              $(document).ready(function() {
               cache_clear();

               setInterval(function() {
                cache_clear()
              }, 5000);
             });
              function cache_clear() {

               $.ajax({
                type:"POST",
                url:"events03.php",
                success:function(result){
              // alert(result.ev_status);.
              //<span class="badge badge-danger"></span>
              if (result.ev_status > 0) {
                $("#uun").html('<span class="badge badge-danger">'+result.ev_status+'</span>');
              }
            
            }

          })
  // window.location.reload(); use this if you do not remove cache
}

</script>