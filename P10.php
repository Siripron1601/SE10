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
                        หน้าสถิติ
                           
                        </div>
                        
                        
                    </div>
                </div>
                  <!-- จบ ส่วนของคำว่า "หน้าหลัก" -->
            </div>
        <!-- จบ -->
       
          

           <!-- ส่วนของตาราง รายการขอยื่ม -->
         <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="h5 m-0 font-weight-bold text-primary">กราฟแสดงอุปกรณ์ที่ถูกยืม</h6>
                  <div class="col-3">
                  เลือกผลการแสดง(ปี)
                    <select class="form-control" id="cars">
                      <option value="volvo">ทั้งหมด</option>
                      <option value="volvo"> 2020</option>
                      <option value="saab"> 2019</option>
                    </select>
                    
                  </div>
                </div>
                <div id="chart_div2" class="col-xl-1 col-12 mb-4 ">
                </div>
     
        </div>
        <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="h5 m-0 font-weight-bold text-primary">กราฟแสดงจำนวนอาจารย์อนุมัติ</h6>
                  <div class="col-3">
                  เลือกผลการแสดง(ปี)
                    <select class="form-control" id="cars">
                      <option value="volvo">ทั้งหมด</option>
                      <option value="volvo"> 2020</option>
                      <option value="saab"> 2019</option>
                    </select>
                    
                  </div>
                </div>
                <div id="chart_div1" class="col-xl-1 col-12 mb-4">
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

 
 
</body>

</html>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>   
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart2);
function drawChart2() {
    // สร้างตัวแปร array เก็บค่า ข้อมูล
    var dataArray1=[
      ['ชื่ออุปกรณ์', 'จำนวนอุปกรณ์'],
      ['จอคอม',  3],
      ['เมาส์',  2],
      ['เครื่องฉายภาพ',  1], 
      ['จอคอม',  3],
      ['เมาส์',  2],
      ['เครื่องฉายภาพ',  1], 
      ['จอคอม',  3],
      ['เมาส์',  2],
      ['เครื่องฉายภาพ',  1], 
      ['จอคอม',  3],
      ['เมาส์',  2],
      ['เครื่องฉายภาพ',  1], 
    ];
         
    // แปลงข้อมูลจาก array สำหรับใช้ในการสร้าง กราฟ
    var data = google.visualization.arrayToDataTable(dataArray1);
 
    // ตั้งค่าต่างๆ ของกราฟ
    var options = { 
        title: "กราฟแสดงจำนวนอุปกรณ์ที่ถูกยืม",
        hAxis: {title: 'ชื่ออุปกรณ์', titleTextStyle: {color: 'red'}},
        vAxis: {title: 'จำนวนอุปกรณ์', titleTextStyle: {color: 'blue'}},
        width: 1000,
        height: 400,
        bar: {groupWidth: "70%"},
        legend: { position: 'right', maxLines: 3 },
        tooltip: { trigger: 'select' }
    };
 
    // สร้างกราฟแนวตั้ง แสดงใน div id = chart_div
    var chart = new google.visualization.ColumnChart(document.getElementById('chart_div2'));
    chart.draw(data, options); // สร้างกราฟ
     
}
</script>       







<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart1);
function drawChart1() {
    // สร้างตัวแปร array เก็บค่า ข้อมูล
    var dataArray1=[
      ['ชื่ออาจารย์', 'จำนวนอนุมัติ'],
      ['อ.นุชนาฎ สัตยากวี',  3],
      ['อ.นุชนาฎ สัตยากวี',  2],
      ['อ.นุชนาฎ สัตยากวี',  1], 
      ['อ.นุชนาฎ สัตยากวี',  3],
      ['อ.นุชนาฎ สัตยากวี',  2],
      ['อ.นุชนาฎ สัตยากวี',  1], 
      ['อ.นุชนาฎ สัตยากวี',  3],
      ['อ.นุชนาฎ สัตยากวี',  2],
      ['อ.นุชนาฎ สัตยากวี',  1], 
      ['อ.นุชนาฎ สัตยากวี',  3],
      ['อ.นุชนาฎ สัตยากวี',  2],
      ['อ.นุชนาฎ สัตยากวี',  1], 
    ];
         
    // แปลงข้อมูลจาก array สำหรับใช้ในการสร้าง กราฟ
    var data = google.visualization.arrayToDataTable(dataArray1);
 
    // ตั้งค่าต่างๆ ของกราฟ
    var options = { 
        title: "กราฟแสดงจำนวนอุปกรณ์ที่ถูกยืม",
        hAxis: {title: 'ชื่ออาจารย์', titleTextStyle: {color: 'red'}},
        vAxis: {title: 'จำนวนอนุมัติ', titleTextStyle: {color: 'blue'}},
        width: 1000,
        height: 400,
        bar: {groupWidth: "70%"},
        legend: { position: 'right', maxLines: 3 },
        tooltip: { trigger: 'select' }
    };
 
    // สร้างกราฟแนวตั้ง แสดงใน div id = chart_div
    var chart = new google.visualization.ColumnChart(document.getElementById('chart_div1'));
    chart.draw(data, options); // สร้างกราฟ
     
}
</script>       
