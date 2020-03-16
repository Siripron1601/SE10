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

                  <!-- ส่วนของคำว่า "หน้าหลัก" -->
                <div class="col-xl-12 col-12 mb-4"  >
                    <div class="card" >
                        <div class="card-header card-bg  header-text-color"  style="background-color:#fff;">
                        หน้าประวัติการยืม - คืนอุปกรณ์
                           
                        </div>
                        
                        
                    </div>
                </div>
                  <!-- จบ ส่วนของคำว่า "หน้าหลัก" -->
                  
        
                 
              
            </div>
        <!-- จบ -->
  

         <!-- ส่วนของตาราง รายการขอยื่ม -->
         <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="h5 m-0 font-weight-bold text-primary">ประวัติการยืม - คืนอุปกรณ์</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <colgroup>
                        <col  width="20">
                        <col  width="20">
                        <col  width="20">
                        <col  width="20">
                        <col  width="20">
                        <col  width="20">
                        <col  width="20">
                        <col  width="20">
                        <col  width="40">
                      </colgroup>
                      <thead>
                        <tr>
                          <th>รหัสรายการ</th>
                          <th>วันที่ยืม</th>
                          <th>วันที่คืน</th>
                          <th>รหัสประจำตัว</th>
                          <th>ชื่อ - นามสกุล</th>
                          <th>จำนวนอุปกรณ์</th>
                          <th>ผู้อนุมัติ</th>
                          <th>หมายเหตุ</th>
                          <th>สถานะ</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>รหัสรายการ</th>
                          <th>วันที่ยืม</th>
                          <th>วันที่คืน</th>
                          <th>รหัสประจำตัว</th>
                          <th>ชื่อ - นามสกุล</th>
                          <th>จำนวนอุปกรณ์</th>
                          <th>ผู้อนุมัติ</th>
                          <th>หมายเหตุ</th>
                          <th>สถานะ</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>28-02-63</td>
                          <td>03-03-63</td>
                          <td>A001</td></td>
                          <td>น.ส.บี มั่นคง</td>
                          <td>2</td>
                          <td>อ.นุชนาฎ  สัตยากวี</td>
                          <td>-</td>
                          <td>คืนอุุปกรณ์เรียบร้อย</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>26-02-63</td>
                          <td>28-02-63</td>
                          <td>A002</td>
                          <td>นายเอ รุ่งเรือง</td>
                          <td>1</td>
                          <td>อ.นุชนาฎ  สัตยากวี</td>
                          <td>อุปกรณ์มีการชำรุด</td>
                          <td>ถูกปฏิเสธ</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>25-02-63</td>
                          <td>28-02-63</td>
                          <td>T001</td></td>
                          <td>อ.นุชนาฎ  สัตยากวี</td>
                          <td>1</td>
                          <td>น.ส.ศศิธร   ชลรัตน์อมฤต</td>
                          <td>-</td>
                          <td>คืนอุุปกรณ์เรียบร้อย</td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>23-02-63</td>
                          <td>25-02-63</td>
                          <td>T002</td>
                          <td>อ.จี หมั่นเพียร/td>
                          <td>3</td>
                          <td>น.ส.ศศิธร   ชลรัตน์อมฤต</td>
                          <td>อุปกรณ์มีการชำรุด</td>
                          <td>ถูกปฏิเสธ</td>
                        </tr>
                      
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
        <!-- จบ ส่วนของตาราง รายการรออนุมัติ-->
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