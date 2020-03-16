<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "link.php"?>
<title>ระบบยืมของภาควิชาคอม</title>
</head>

<body id="page-top">
  <div id="wrapper" >

    <!-- อันนี้ไว้เรียกใช้แท็บข้างๆๆ -->
      <?php include "logout.php" ?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column" style="background-color: #EBF5FB;">

      <!-- Main Content -->
      <div id="content" >

        <!-- อันนี้ไว้เรียกใช้แท็บบน -->
        <?php include "Topbar.php" ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <!-- เริ่ม -->
            <div class="row" >

                  <!-- ส่วนของคำว่า "แจ้งข้อเสนอแนะ" -->
                <div class="col-xl-12 col-12 mb-4"  >
                    <div class="card" >
                        <div class="card-header card-bg  header-text-color"  style="background-color:#fff;">
                        หน้าแจ้งข้อเสนอแนะเพิ่มเติม
                        </div>
                    </div>
                </div>
                  <!-- จบ ส่วนของคำว่า "แจ้งข้อเสนอแนะ" -->

        <!-- ส่วนของข้อเสนอแนะเพิ่มเติม -->
        <div class="col-xl-12 col-12 mb-4">
            <div class="card">
            <div class="card-header card-bg">
                <div class="card-header py-1">
                  <h6 class="h5 m-0 font-weight-bold text-primary">แจ้งข้อเสนอแนะเพิ่มเติม</h6>
                </div>
                     <div class="form-group">
                    <!-- <label for="exampleFormControlTextarea2">แจ้งข้อเสนอแนะเพิ่มเติม</label> -->
                    <textarea style="resize:none;" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="10"></textarea>
                    <br>
                    
                    <button type="button" style="float:right;" class="btn btn-success" data-toggle="modal" data-target="#modal-1">ส่งข้อเสนอแนะ</button>
                </div>
                </div>
                
                
                    </div>
                    
        
        <!-- จบ ส่วนของข้อเสนอแนะเพิ่มเติม-->
       
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

 
 
</body>

</html>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>