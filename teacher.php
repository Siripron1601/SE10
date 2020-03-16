<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "link.php"?>
<title>ระบบยืมของภาควิชาคอม</title>
</head>

<body id="page-top">
  <div id="wrapper" >

    <!-- อันนี้ไว้เรียกใช้แท็บข้างๆๆ -->
      <?php include "logout2.php" ?>
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
                        หน้าหลัก
                           
                        </div>
                        
                        
                    </div>
                </div>
                  <!-- จบ ส่วนของคำว่า "หน้าหลัก" -->
                  
                  <!-- เริ่มส่วนของ card-->

                    <!--  card คำขอที่รอการอนุมัติ -->
                    <div class="col-xl-3 col-md-6 mb-4">
                      <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class=" h6 font-weight-bold text-primary  mb-1">รายการรออนุมัติ</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">2 คำขอ</div>
                            </div>
                            <div class="col-auto">
                              <i class="fas fa-mail-bulk fa-2x "></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    
              <!-- จบส่วนของ card-->
                 
              
            </div>
        <!-- จบ -->
  

         <!-- ส่วนของตาราง รายการขอยื่ม -->
         <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="h5 m-0 font-weight-bold text-primary">รายการรออนุมัติ </h6>
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
                      </colgroup>
                      <thead>
                        <tr>
                        <th>ลำดับ</th>
                          <th>วันที่</th>
                          <th>รหัส</th>
                          <th>ชื่อ-นามสกุล</th>
                          <th>จำนวนอุปกรณ์</th>
                          <th>จัดการ</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>ลำดับ</th>
                          <th>วันที่</th>
                          <th>รหัส</th>
                          <th>ชื่อ-นามสกุล</th>
                          <th>จำนวนอุปกรณ์</th>
                          <th>จัดการ</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>28-02-63</td>
                          <td>600000000</td>
                          <td>นส.ป้อม</td>
                          <td>3</td>
                          <td style="text-align:center;">
                              <button type="button" class="btn btn-success btn-sm" data-toggle="tooltip" title="" data-original-title="ยืนยัน"><i class="fa fa-check"></i></button>
                              <button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" title="" data-original-title="ยกเลิก" ><i class="fa fa-times"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>27-02-63</td>
                          <td>600000001</td>
                          <td>นส.แอ๋ว</td>
                          <td>5</td>
                          <td style="text-align:center;">
                              <button type="button" class="btn btn-success btn-sm" data-toggle="tooltip" title="" data-original-title="ยืนยัน"><i class="fa fa-check"></i></button>
                              <button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" title="" data-original-title="ยกเลิก" ><i class="fa fa-times"></i></button>
                          </td>
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