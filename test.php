
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>e-Service</title>
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-pro/css/all.min.css">
  <link rel="stylesheet" href="node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="public/css/custom.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-white fixed-top flex-md-nowrap shadow">
  <div class="container">
    <span class="navbar-brand">e-Service</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu">
      <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarMenu">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="request.php">
            <i class="fas fa-home"></i>
          </a>
        </li>
				<li class="nav-item">
		  <a class="nav-link" href="users.php">
            <i class="fas fa-users"></i>
          </a>
        </li>
		<li class="nav-item">
		  <a class="nav-link" href="computers.php">
            <i class="fas fa-desktop"></i>
          </a>
        </li>
		      </ul>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" href="javascript:void(0)" data-toggle="dropdown">
            Administrator            <i class="fa fa-angle-down px-2"></i>
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="profile.php">
              <small>
                <i class="fas fa-user px-2"></i>
                โปรไฟล์
              </small>
            </a>
            <a class="dropdown-item" href="change_pwd.php">
              <small>
                <i class="fas fa-key px-2"></i>
                เปลี่ยนรหัสผ่าน
              </small>
            </a>
            <a class="dropdown-item" href="logout.php" onClick="return confirm('Are you sure?');">
              <small>
                <i class="fas fa-sign-out px-2"></i>
                ออกระบบ
              </small>
            </a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <div class="container-fluid">
    <div class="row">
      <nav class="col-xl-2 col-md-3 d-none d-md-block sidebar">
  <div class="sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <img class="nav-link img-fluid picture-profile mx-auto d-block" 
          src="public/images/users/999999.jpg" alt="">
      </li>
      <li class="nav-item">
        <h4 class="nav-link text-center">
          Administrator        </h4>
      </li>
            <li class="nav-item active">
        <a class="nav-link" href="request.php">
          <i class="fas fa-home px-2"></i>
          จัดการคำขอใช้บริการ
        </a>
      </li>
	              <li class="nav-item ">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-tachometer-alt px-2"></i>
          แผงควบคุม
        </a>
      </li>
            <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#sub_dashboard">
          <i class="fas fa-user-circle px-2"></i>
          ผู้ใช้งาน
          <i class="fas fa-angle-left px-3"></i>
        </a>
        <div id="sub_dashboard" class="collapse ">
          <ul class="nav flex-column">
            <li class="nav-item ">
              <a class="nav-link sub-menu" href="profile.php">
                <small>
                  <i class="fas fa-user px-2"></i>
                  โปรไฟล์
                </small>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link sub-menu" href="change_pwd.php">
                <small>
                  <i class="fas fa-key px-2"></i>
                  เปลี่ยนรหัสผ่าน
                </small>
              </a>
            </li>
          </ul>
        </div>
      </li>
            <li class="nav-item ">
        <a class="nav-link" href="users.php">
          <i class="fas fa-users px-2"></i>
          จัดการผู้ใช้งาน
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="computers.php">
          <i class="fas fa-desktop px-2"></i>
          จัดการคอมพิวเตอร์
        </a>
      </li>
            <li class="nav-item ">
        <a class="nav-link" href="system.php">
          <i class="fas fa-cogs px-2"></i>
          จัดการระบบ
        </a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="logout.php" onClick="return confirm('Are you sure?');">
          <i class="fas fa-sign-out px-2"></i>
          ออกจากระบบ
        </a>
      </li>
    </ul>
  </div>
</nav>  
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

                <nav>
          <ol class="breadcrumb bg-white border">
            <li class="breadcrumb-item">
              <a href="request.php"><i class="fas fa-home"></i></a>
            </li>
            <li class="breadcrumb-item active">
              ขอใช้บริการ
            </li>
          </ol>
        </nav>

        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h5 class="text-center">ขอใช้บริการ</h5>
              </div>
              <div class="card-body">
                <form action="?act=insert" method="POST" enctype="multipart/form-data">
                  <div class="form-group row" style="display: none">
                    <label class="col-sm-4 col-form-label text-md-right">รหัสผู้ใช้บริการ</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="req_user" readonly
                        value="999999">
                    </div>
                  </div>
				  <div class="form-group row" style="display: none">
					<label class="col-sm-4 col-form-label text-md-right">ผู้ขอใช้บริการ</label>
					<div class="col-sm-4">
					  <select id="user" class="form-control form-control-sm" name="user_code_useปปปป">
						<option value="">--- กรุณาเลือก ---</option>
						<option value='999999'>Administrator System</option><option value='HR01'>HR B2</option><option value='AC'>Account B3</option><option value='hr02'>HR B2</option><option value='1122'>Test Test</option><option value='8730'>Ka Chain</option><option value='it01'>Watchara Buttho</option><option value='10325'>Kk Kk</option><option value='152030'>Test ekt S</option>					  </select>
					</div>
				  </div>
			      <div class="form-group row">
					<label class="col-sm-4 col-form-label text-md-right">แผนกรับริการ</label>
					<div class="col-sm-4">
					  <select id="user" class="form-control form-control-sm" name="user_dep_use">
						<option value="">--- กรุณาเลือก ---</option>
						<option value='1'>คอมพิวเตอร์ (IT)</option><option value='2'>ทรัพยากรบุคคล (Human Resource)</option><option value='3'>บัญชี (Account)</option><option value='4'>การตลาด (Marketing)</option><option value='5'>ออกแบบ (Graphic)</option><option value='6'>ซ่อมบำรุง (Maintenance)</option><option value='7'>ตรวจรับ (Receive product)</option><option value='8'>จัดซื้อ (Purchasing Department)</option>					  </select>
					</div>
				  </div>
				  <div class="form-group row">
                    <label class="col-sm-4 col-form-label text-md-right">สาขา</label>
                    <div class="col-sm-3">
						<select class="form-control" name="bra_id" required>
                        <option value="">--- เลือก สาขา ---</option>
                                                <option value="1">B1</option>
                                                <option value="2">B2</option>
                                                <option value="3">B3</option>
                                              </select>

                    </div>
                  </div>
				  <div class="form-group row">
                    <label class="col-sm-4 col-form-label text-md-right">ผู้ขอใช้บริการ</label>
					<div class="col-sm-4">
                      <input type="text" class="form-control" name="user_code_use"
                        value="">
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label text-md-right">หมวดหมู่</label>
                    <div class="col-sm-3">
                      <select class="form-control form-control-sm" name="cat_id" 
                        onChange="getServiceList(this.value);" required>
                        <option value="">--- เลือก หมวดหมู่ ---</option>
                                                <option value="1">อุปกรณ์ (Hardware )</option>
                                                <option value="2">โปรแกรม (Software)</option>
                                                <option value="3">ระบบเครือข่าย (Network)</option>
                                                <option value="4">สิทธิ์ใช้งานระบบ (Authorization)</option>
                                              </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label text-md-right">บริการ</label>
                    <div class="col-sm-6">
                      <select class="form-control form-control-sm" name="service_id" id="service_list"
                        onChange="getBranch(this.value);" required>
                        <option value="">--- กรุณาเลือก บริการ ---</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label text-md-right">เพิ่มเอกสารหรือรูปประกอบ</label>
                    <div class="col-sm-4">
                      <input type="file" class="form-control" name="req_file">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label text-md-right">รายละเอียดเพิ่มเติม</label>
                    <div class="col-sm-6">
                      <textarea name="req_text" class="form-control" rows="5" required></textarea>
                    </div>
                  </div>
				  <div class="form-group row">
                    <label class="col-sm-4 col-form-label text-md-right">ผู้รับดำเนินการ</label>
                    <div class="col-sm-4">
						<select id="user_operator" class="form-control form-control-sm" name="user_operator">
						<option value="">--- กรุณาเลือก ---</option>
						<option value='999999'>Administrator System</option><option value='HR01'>HR B2</option><option value='AC'>Account B3</option><option value='hr02'>HR B2</option><option value='1122'>Test Test</option><option value='8730'>Ka Chain</option><option value='it01'>Watchara Buttho</option><option value='10325'>Kk Kk</option><option value='152030'>Test ekt S</option>					  </select>
                    </div>
				  </div>
				  <hr>
				  <div class="form-group row">
                    <label class="col-sm-4 col-form-label text-md-right">ผู้รับเรื่อง</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" readonly
                        value="Administrator System">
                    </div>
					  
                  </div>
				  <div class="form-group row">
                    <label class="col-sm-4 col-form-label text-md-right">สาขา</label>
					<div class="col-sm-4">
                      <input type="text" class="form-control" readonly name="req_branch"
                        value="B2">
                    </div>
                  </div>
				  <div class="form-group row">
					<label class="col-sm-4 col-form-label text-md-right">แผนก</label>
					<div class="col-sm-4">
                      <input type="text" class="form-control" readonly
                        value="คอมพิวเตอร์ (IT)">
                    </div>
                  </div>
                  <div class="form-group row justify-content-center">
                    <div class="col-sm-3 pb-2">
                      <button class="btn btn-success btn-sm btn-block" name="btnInsert">
                        <i class="fa fa-check pr-2"></i>ยืนยัน
                      </button>
                    </div>
                    <div class="col-sm-3 pb-2">
                      <a class="btn btn-danger btn-sm btn-block" href="request.php">
                        <i class="fa fa-arrow-left pr-2"></i>กลับหน้าหลัก
                      </a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

              </main>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  <!-- <script src="https://service.kokostudio.net/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="https://service.kokostudio.net/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script> -->
  <script src="node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="public/js/main.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#data').DataTable({
        "oLanguage": {
          "sLengthMenu": "แสดง _MENU_ ลำดับ ต่อหน้า",
          "sZeroRecords": "ไม่พบข้อมูลที่ค้นหา",
          "sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ ลำดับ",
          "sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 ลำดับ",
          "sInfoFiltered": "(จากทั้งหมด _MAX_ ลำดับ)",
          "sSearch": "ค้นหา :",
          "oPaginate": {
                "sFirst":    "หน้าแรก",
                "sLast":    "หน้าสุดท้าย",
                "sNext":    "ถัดไป",
                "sPrevious": "ก่อนหน้า"
            }
        }
      });
    });

    function getServiceList(val) {
      $.ajax({
        type: "POST",
        url: "getService.php",
        data:'cat_id='+val,
        success: function(data){
          $("#service_list").html(data);
        }
      });
    }
  </script>
</body>
</html>