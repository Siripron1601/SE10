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
                        อุปกรณ์ในระบบ
                           
                        </div>
                        
                        
                    </div>
                </div>
                  <!-- จบ ส่วนของคำว่า "หน้าหลัก" -->
                  
                  <!-- เริ่มส่วนของ card-->

                     <!--  card คำขอที่อนุมัติแล้ว -->
                     <div class="col-xl-3 col-md-6 mb-4">
                      <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class=" h6 font-weight-bold text-primary  mb-1">จำนวนที่ชนิดอุปกรณ์</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">2 ชนิด</div>
                            </div>
                            <div class="col-auto">
                              <i class="fas fa-mail-bulk fa-2x "></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!--  card คำขอที่อนุมัติแล้ว -->
                    <div class="col-xl-3 col-md-6 mb-4">
                    <a href="#" style="text-decoration: none" >
                        <div class="card border-left-info shadow h-100 py-2">
                          <div class="card-body">
                            <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                <div class=" h6 font-weight-bold text-info  mb-1">เพิ่มชนิดอุปกรณ์</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">+1 ชนิดอุปกรณ์</div>
                              </div>
                              <div class="col-auto text-info">
                              <i class="fas fa-plus-circle fa-3x"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    
              <!-- จบส่วนของ card-->
                 
              
            </div>
        <!-- จบ -->
  

         <!-- ส่วนของตาราง รายการขอยื่ม -->
         <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="h5 m-0 font-weight-bold text-primary">ชนิดอุปกรณ์ในระบบ</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <colgroup>
                        <col  width="20">
                        <col  width="100">
                        <col  width="100">
                        <col  width="200">
                        <col  width="100">
                        <col  width="100">
                        <col  width="100">
                      </colgroup>
                      <thead>
                        <tr>
                          <th>ภาพ</th>
                          <th>ชื่ออุปกรณ์</th>
                          <th>หมายหมู่</th>
                          <th>รายละเอียด</th>
                          <th>จำนวนอุปกรณ์</th>
                          <th>สิทธิการยืม</th>
                          <th>จัดการ</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                        <th>ภาพ</th>
                          <th>ชื่ออุปกรณ์</th>
                          <th>หมายหมู่</th>
                          <th>รายละเอียด</th>
                          <th>จำนวนอุปกรณ์</th>
                          <th>สิทธิการยืม</th>
                          <th>จัดการ</th>
                        </tr>
                      </tfoot>
                      <tbody>
                      <tr>
                          <td><img src="https://cv.lnwfile.com/fl0jxa.jpg" alt="Lights" style="width:100%;max-width:100px"></td>
                          <td>เครื่องฉายภาพ</td>
                          <td>เครื่องฉาย</td>
                          <td>เป็นอุปกรณ์สำหรับฉายภาพจากสัญญาณวิดีโอ ผ่านระบบเลนส์ไปยังฉากรับภาพ โดยใช้ไฟที่สว่างและจ้าในการฉายภาพ</td>
                          <td>2</td>
                          <td>
                            <button type="button" id="btn_comfirm" data-toggle="tooltip" title="" class="btn btn-success btn-sm btn-circle tt" data-original-title="เจ้าหน้าที่">A</button>
                            <button type="button" id="btn_comfirm" data-toggle="tooltip" title="" class="btn btn-success btn-sm btn-circle tt" data-original-title="อาจารย์">T</button>
                            <button type="button" id="btn_comfirm" data-toggle="tooltip" title="" class="btn btn-success btn-sm btn-circle tt" data-original-title="ผู้ยืม">B</button>
                          </td>
                          <td style="text-align:center;">
                              <button type="button" class="btn btn-danger btn-sm " data-toggle="tooltip" title="" data-original-title="ไม่เปิดให้ยืม"><i class="fas fa-lock" aria-hidden="true"></i></button>
                              <button type="button" class="btn btn-warning btn-sm " data-toggle="tooltip" title="" data-original-title="แก้ไข"><i class="fas fa-edit" aria-hidden="true"></i></button>
                              <button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" title="" data-original-title="ลบ" ><i class="far fa-trash-alt" aria-hidden="true"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td><img src="https://images.samsung.com/is/image/samsung/th-led-sf350-ls24f350fhexxt-001-front-black?$PD_GALLERY_L_JPG$" alt="Lights" style="width:100%;max-width:100px"></td>
                          <td>จอคอมพิวเตอร์</td>
                          <td>อุปกรณ์คอม</td>
                          <td>จอ LED SAMSUNG 27 นิ้ว Full HD ดีไซน์บางเฉียบ พร้อมมุมมองกว้างพิเศษ 178 องศา เพื่อการรับชมที่สมบูรณ์แบบ</td>
                          <td>2</td>
                          <td>
                            <button type="button" id="btn_comfirm" data-toggle="tooltip" title="" class="btn btn-success btn-sm btn-circle tt" data-original-title="เจ้าหน้าที่">A</button>
                            <button type="button" id="btn_comfirm" data-toggle="tooltip" title="" class="btn btn-success btn-sm btn-circle tt" data-original-title="อาจารย์">T</button>
                            <button type="button" id="btn_comfirm" data-toggle="tooltip" title="" class="btn btn-secondary btn-sm btn-circle tt" data-original-title="ผู้ยืม">B</button>
                          </td>
                          <td style="text-align:center;">
                              <button type="button" class="btn btn-success btn-sm " data-toggle="tooltip" title="" data-original-title="เปิดให้ยืม"><i class="fas fa-lock-open" aria-hidden="true"></i></button>
                              <button type="button" class="btn btn-warning btn-sm " data-toggle="tooltip" title="" data-original-title="แก้ไข"><i class="fas fa-edit" aria-hidden="true"></i></button>
                              <button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" title="" data-original-title="ลบ" ><i class="far fa-trash-alt" aria-hidden="true"></i></button>
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