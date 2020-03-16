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
        <a class="nav-link" href="teacher.php">
        <i class="fas fa-home"></i>
          <span>หน้าหลัก</span></a>
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
        <i class="far fa-file-alt"></i>
          <span>ทำรายการยืม</span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item collapsed">
        <a class="nav-link" href="page_borrow.php">
        <i class="fas fa-box-open"></i>
          <span>รายการที่ต้องคืน</span></a>
      </li>

        <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item collapsed">
        <a class="nav-link" href="page_borrow.php">
        <i class="fas fa-history"></i>
          <span>ประวัติการอนุมัติ</span></a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item collapsed">
        <a class="nav-link" href="Admin_history.php ">
        <i class="far fa-comments"></i>
          <span>ข้อเสนอแนะ</span></a>
      </li>
    
    
      <!-- Sidebar Toggler (Sidebar) -->
      

    </ul>