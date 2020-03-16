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
        
        <div class="row">
          <div class="col-xl-12 col-12 mb-4">
            <div class="card">
                <div class="card-header card-bg">
                    หน้ายื่นยันการยืม
                    </div>
                </div>
          </div>
        </div>
              

        <!-- เริ่ม -->
            <div class="row" >

                  <!-- ส่วนของคำว่า "รายละเอียดรายการยืม" -->
                <div class="col-xl-12 col-12 mb-2"  >
                  <div class="card shadow mb-4">
                    <div class="card-header py-3">
                      <h6 class="h5 m-0 font-weight-bold text-primary">รายละเอียดรายการยืม </h6>
                    </div>
                    <div class="card-body" >
                      <div class="row mb-4">
                        <div class="col-xl-2 col-12 text-right">
                          <span>หมายเหตุ</span>
                        </div>
                        <div class="col-xl-9 col-12">
                        <textarea style="resize:none;" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"></textarea>
                        </div>
                    </div>
                  </div>
                </div>
                  <!-- จบ ส่วนของคำว่า "รายละเอียดรายการยืม" -->

                  <!-- ส่วนของตาราง รายการขอยื่ม -->
               <div class="card shadow mb-1">
                <div class="card-header py-3">
                  <h6 class="h5 m-0 font-weight-bold text-primary">รายการอุปกรณ์ที่จะยืม</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered"  width="100%" cellspacing="0">
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
                          <th>ภาพ</th>
                          <th>ชื่ออุปกรณ์</th>
                          <th>หมายหมู่</th>
                          <th>จำนวนที่เหลือ</th>
                          <th>รายละเอียด</th>
                          <th>จำนวนที่ขอยืม</th>
                        </tr>
                      </thead>
                      
                      <tbody>
                        <tr>
                          <td><img src="https://cv.lnwfile.com/fl0jxa.jpg" alt="Lights" style="width:100%;max-width:100px"></td>
                          <td>เครื่องฉายภาพ</td>
                          <td>เครื่องฉาย</td>
                          <td>5</td>
                          <td>เป็นอุปกรณ์สำหรับฉายภาพจากสัญญาณวิดีโอ ผ่านระบบเลนส์ไปยังฉากรับภาพ โดยใช้ไฟที่สว่างและจ้าในการฉายภาพ</td>
                          <td><input class="form-control form-control-user" type="number" min="0" value="0" ></td>
                        </tr>
                        <tr>
                          <td><img src="https://images.samsung.com/is/image/samsung/th-led-sf350-ls24f350fhexxt-001-front-black?$PD_GALLERY_L_JPG$" alt="Lights" style="width:100%;max-width:100px"></td>
                          <td>จอคอมพิวเตอร์</td>
                          <td>อุปกรณ์คอม</td>
                          <td>7</td>
                          <td>จอ LED SAMSUNG 27 นิ้ว Full HD ดีไซน์บางเฉียบ พร้อมมุมมองกว้างพิเศษ 178 องศา เพื่อการรับชมที่สมบูรณ์แบบ</td>
                          <td><input class="form-control form-control-user" type="number" min="0" value="0" ></td>
                        </tr>
                      </tbody>
                    </table>
                    
                  </div>
                  <div class="modal-footer">
                    <a><button type="submit" class="btn btn-success" name="submit">ยืนยัน</button></a>
                    <a class="nav-link" ><button type="button" class="btn btn-danger">ยกเลิก</button></a>
                  </div>
                </div>
              </div>
        <!-- จบ ส่วนของตาราง รายการรออนุมัติ-->
                 
              
            </div>
        <!-- จบ -->
  

         
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