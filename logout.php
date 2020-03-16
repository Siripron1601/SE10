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
        <a class="nav-link" href="borrower.php">
        <i class="fas fa-home"></i>
          <span>หน้าหลัก[ผู้ยืม]</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="teacher.php">
        <i class="fas fa-home"></i>
          <span>หน้าหลัก[อาจารย์]</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="Admin2.php">
        <i class="fas fa-home"></i>
          <span>หน้าหลัก[Admin]</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        ส่วนการทำงาน
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item collapsed">
        <a class="nav-link" href="page_borrow.php">
        <i class="fas fa-home"></i>
          <span>ทำรายการยืม</span></a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item collapsed">
        <a class="nav-link" href="Admin_history.php ">
        <i class="fas fa-home"></i>
          <span>ประวัติการยืมคืนทั้งหมด</span></a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item collapsed">
        <a class="nav-link" href="Admin_waitback.php ">
        <i class="fas fa-home"></i>
          <span> ตารางจัดการการส่งคืน</span></a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item collapsed">
        <a class="nav-link" href="borrower_history.php">
        <i class="fas fa-home"></i>
          <span> ผู้ยืมประวัติการยืมคืน</span></a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item collapsed">
        <a class="nav-link" href="teacher_history.php">
        <i class="fas fa-home"></i>
          <span> อาจารย์ประวัติการยืมคืน</span></a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item collapsed">
        <a class="nav-link" href="admin_self_history.php">
        <i class="fas fa-home"></i>
          <span> แอดมินประวัติการยืมคืน</span></a>
      </li>
       <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item collapsed">
        <a class="nav-link" href="teacher_confirm_history.php">
        <i class="fas fa-home"></i>
          <span> หน้าประวัติการอนุมัติของอาจารย์</span></a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item collapsed">
        <a class="nav-link" href="teacher_waitback.php">
        <i class="fas fa-home"></i>
          <span> อาจารย์ ตารางการส่งคืน</span></a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item collapsed">
        <a class="nav-link" href="Admin_self_waitback.php">
        <i class="fas fa-home"></i>
          <span> แอดมิน ตารางการส่งคืน</span></a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item collapsed">
        <a class="nav-link" href="edit_equipment.php">
        <i class="fas fa-home"></i>
          <span> แก้่ไขอุปกรณ์</span></a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item collapsed">
        <a class="nav-link" href="P5.php">
        <i class="fas fa-home"></i>
          <span> แก้่ไขหมวดหมู่</span></a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item collapsed">
        <a class="nav-link" href="P6.php">
        <i class="fas fa-home"></i>
          <span> จัดการอุปกรณ์</span></a>
      </li>
       <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item collapsed">
        <a class="nav-link" href="P7.php">
        <i class="fas fa-home"></i>
          <span> หน้าเพิ่มอุปกรณ์</span></a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item collapsed">
        <a class="nav-link" href="suggestion.php">
        <i class="fas fa-home"></i>
          <span> ข้อเสนอแนะ</span></a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item collapsed">
        <a class="nav-link" href="P10.php">
        <i class="fas fa-home"></i>
          <span> สถิติ</span></a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item collapsed">
        <a class="nav-link" href="P11.php">
        <i class="fas fa-home"></i>
          <span> หน้ายื่นยันการยืม</span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item collapsed">
        <a class="nav-link" href="P13.php">
        <i class="fas fa-home"></i>
          <span> หน้ายื่นยันการยืมของอาจารย์และเจ้าหน้าที่</span></a>
      </li>
      <li class="nav-item collapsed">
        <a class="nav-link" href="P12.php">
        <i class="fas fa-home"></i>
          <span> ข้อเสนอแนะ admin</span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item collapsed">
        <a class="nav-link" href="P14.php">
        <i class="fas fa-home"></i>
          <span> หน้าแก้ไขการยืม</span></a>
      </li>

       <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item collapsed">
        <a class="nav-link" href="P15.php">
        <i class="fas fa-home"></i>
          <span> หน้าแก้ไขการยืมAdmin</span></a>
      </li>
      <!-- Sidebar Toggler (Sidebar) -->
      

    </ul>