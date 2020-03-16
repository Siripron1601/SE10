<style>
            body {
                margin: 0 auto;
                padding: 0;
                font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
                font-size: 14px;
            }

            #calendar {
                max-width: 800px;
                margin: 0 auto;
                color: #000;
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            span,
            p,
            label,
            div {
                font-family: 'Kanit', sans-serif;

            }

            .fc-content {
                color: white;
            }

            .fc-day-number {
                color: #000000
            }

            #accordionSidebar {
                background-color: #3E49BB;
            }

            #calendar {
                max-width: 700px;
                margin: 0 auto;
            }

            #home {

                background-color: white;
                max-width: 700px;
            }

            #menu1 {
                background-color: white;
                max-width: auto;
            }

            .dot {
                height: 25px;
                width: 25px;
                background-color: #bbb;
                border-radius: 50%;
                display: inline-block;
            }
            .bg-gradient-danger {
              background-color: #42b9d6;
              background-image: linear-gradient(180deg, #42b9d6 10%, #42b9d6 100%);
              background-size: cover;
            }
            
</style>
<ul  class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="Admin.php">
        <div  class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-tools"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ระบบยืม-คืน </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="Admin2.php">
        <i class="fas fa-home"></i>
          <span>หน้าหลัก</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        ส่วนการทำงาน
      </div>
      
         <!-- Nav Item - Utilities Collapse Menu -->
         <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities1" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>จัดการ</span>
          </a>
          <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">จัดการข้อมูล:</h6>
              <a class="collapse-item" href="utilities-color.html">อุปกรณ์ในระบบ</a>
              <a class="collapse-item" href="utilities-border.html">หมวดหมู่ในระบบ</a>
             
            </div>
          </div>
        </li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item collapsed">
        <a class="nav-link" href="Admin_waitback.php">
        <i class="fas fa-box-open"></i>
          <span>การส่งคืนอุปกรณ์</span></a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item collapsed">
        <a class="nav-link" href="Admin_waitback.php">
        <i class="fas fa-tasks"></i>
          <span>รายการรออนุมัติ</span></a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item collapsed">
        <a class="nav-link" href="page_borrow.php">
        <i class="far fa-file-alt"></i>
          <span>ทำรายการยืม</span></a>
      </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item collapsed">
        <a class="nav-link" href="page_borrow.php">
        <i class="fas fa-box-open"></i>
          <span>รายการที่ต้องคืน</span></a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities2" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-history"></i>
            <span>ประวัติการยืม</span>
          </a>
          <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">ประวัติการยืมแต่ละประเภท:</h6>
              <a class="collapse-item" href="utilities-color.html">ผู้ยืมในระบบ</a>
              <a class="collapse-item" href="utilities-border.html">อาจารย์</a>
              <a class="collapse-item" href="utilities-border.html">เจ้าหน้าที่</a>
            </div>
          </div>
        </li>
      
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item collapsed">
        <a class="nav-link" href="Admin_history.php ">
        <i class="far fa-comments"></i>
          <span>ข้อเสนอแนะ</span></a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item collapsed">
        <a class="nav-link" href="Admin_waitback.php ">
        <i class="fas fa-chart-bar"></i>
          <span> สถิติ</span></a>
      </li>
    
      <!-- Sidebar Toggler (Sidebar) -->
      

    </ul>