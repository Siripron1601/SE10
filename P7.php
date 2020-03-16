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
        <div >
    <div class="row">
        <div class="col-xl-12 col-12 mb-4">
            <div class="card">
                <div class="card-header card-bg">
                    อุปกรณ์
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4 col-12 mb-4">
            <div class="row">
                <div class="col-xl-12 col-12">
                    <div class="card">
                        <div class="card-header card-bg">
                            รูปอุปกรณ์
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <img src="https://cv.lnwfile.com/fl0jxa.jpg" alt="Lights" style="width:100%;max-width:500px">
                            </div>
                            <div class="row mt-3">
                                <div class="col-xl-12 col-12">
                                    <!-- <input type="file" id="input_upload" style="display:none" /> -->
                                    <button type="button" id="edit_photo" class="btn btn-primary btn-sm form-control mb-3">เปลี่ยนรูปอุปกรณ์</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-12 mb-4">
            <div class="card">
                <div class="card-header card-bg">
                    รายละเอียดอุปกรณ์
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-xl-3 col-12 text-right">
                            <span>ชื่ออุปกรณ์</span>
                        </div>
                        <div class="col-xl-9 col-12">
                          <input type="text" class="form-control" id="firstname">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-xl-3 col-12 text-right">
                            <span>หมวดหมู่</span>
                        </div>
                        <div class="col-xl-9 col-12">
                        <select class="form-control" id="cars">
                          <option value="volvo">เลือกหมวดหมู่</option>
                          <option value="volvo">เครื่องฉาย</option>
                          <option value="saab">อุปกรณ์คอม</option>
                        </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-xl-3 col-12 text-right">
                            <span>รายละเอียด</span>
                        </div>
                        <div class="col-xl-9 col-12">
                        <textarea  style="resize:none;" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"></textarea>
                        </div>
                    </div>
                   
                    <div class="row mb-4">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                            <span>สิทธิการยืม</span>
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="admin" name="admin" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">เจ้าหน้าที่</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="admin" name="admin" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">อาจารย์</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="admin" name="admin" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">นิสิต</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- จบ -->
         <!-- ส่วนของตาราง รายการขอยื่ม -->
         <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="h5 m-0 font-weight-bold text-primary">ชนิดอุปกรณ์ในระบบ <button type="button" style="float:right;" class="btn btn-success" data-toggle="modal" data-target="#modal-1">เพื่มเลขครุภัณฑ์</button> </h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <colgroup>
                      <col  width="100">
                        <col  width="100">
                        <col  width="100">
                        <col  width="100">
                      </colgroup>
                      <thead>
                        <tr>
                          <th>ลำดับ</th>
                          <th>เลขครุภัณฑ์</th>
                          <th>สถานะ</th>
                          <th>จัดการ</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>ลำดับ</th>
                          <th>เลขครุภัณฑ์</th>
                          <th>สถานะ</th>
                          <th>จัดการ</th>
                        </tr>
                      </tfoot>
                      <tbody>
                      <tr>
                          <td>1</td>
                          <td>1248541348</td>
                          <td>
                            ถูกยืม
                          </td>
                          <td style="text-align:center;">
                              <button type="button" class="btn btn-danger btn-sm " data-toggle="tooltip" title="" data-original-title="ไม่เปิดให้ยืม"><i class="fas fa-lock" aria-hidden="true"></i></button>
                              <button type="button" class="btn btn-warning btn-sm " data-toggle="tooltip" title="" data-original-title="แก้ไข"><i class="fas fa-edit" aria-hidden="true"></i></button>
                              <button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" title="" data-original-title="ลบ" ><i class="far fa-trash-alt" aria-hidden="true"></i></button>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>4872727412</td>
                          <td>
                            -
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
                  <br>
                  <div class="modal-footer">
                    <a> <button type="submit" class="btn btn-success" name="submit">ยืนยัน</button></a>
                    <a class="nav-link" ><button type="button" class="btn btn-danger">ยกเลิก</button></a>
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