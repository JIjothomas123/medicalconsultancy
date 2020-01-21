	<!------------------doctor signup page----------------------->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> dash board</title>
		<!-- Custom fonts for this template-->
		<link  rel="stylesheet" href="fontawesome/css/all.min.css">
		<link href="css/sb-admin-2.min.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/style3.css" rel="stylesheet">
		<link rel="stylesheet" href="css/style3.css">
</head>

<body id="page-top" style="backgrond-color:grey;">


<!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
			<div>
		<img src="img/geminilogo.jpg" class="img-fluid">
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php" class="text-center">
          <i class="fas fa-user user-font px-4"></i></a></li>

        <!-- Divider -->
        <div class="side">
				
          </div>
          <div class="side">
				<ul>
					<li>
                        <a href="#"></a>
						<div class="subside">
							<ul>
								<li><a href="#"></a></li>
								<li><a href=#></a></li>
							</ul>
						</div>
					</li>
                 </ul>
          </div>
          <div class="side">
				<ul>
					<li>
                        <a href="#"></a>
						<div class="subside">
							<ul>
								<li><a href="#"></a></li>
								<li><a href=#></a></li>
							</ul>
						</div>
					</li>
                 </ul>
          </div>
      <!-- Nav Item - Pages Collapse Menu -->
      

      <!-- Nav Item -ptrevious details-->
      <li class="nav-item">
        <a class="nav-link" href="adminstudentdetails.php">
          <span></span></a>
      </li>
	  
      <!-- Sidebar Toggler (Sidebar) -->
      

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
		<div class="container-fliud">
        <nav class="navbar navbar-expand navbar-dark topbar mb-4 static-top shadow bg-gradient-primary">
		<!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle  bg-light">
            <i class="fa fa-bars"></i>
          </button>
		 <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto pr-5 p-hide">

            <!-- Nav Item - Alerts -->
            <li class="nav-item ">
              <a class="nav-link " href="adminhome.php">
                <i class="fas fa-home"><p> Home</p></i>
              </a>
              
            </li>
			
		
		
			<li class="nav-item">
              <a class="nav-link " href="index.php" >
              </a>
            </li>

          </ul>

        </nav>
                  <!-- Regestration Form -->

<form role="form" class="frm" name="Myform"  action="insertdoctor.php" method="post" onsubmit="return form()">
  <div class="form-group">
    <label for="name">Full Name:</label>
    <input type="text" class="form-control"  name="name" id="name" required="required">
  </div>
  <div class="form-group">
    <label for="pwd">E-mail:</label>
    <input type="email" class="form-control"  name="email" id="pwd" required="required">
  </div>
  <div class="form-group">
    <label for="n_id">National-ID:</label>
    <input type="text" class="form-control"  name="n_id" id="n_id" required="required">
  </div>
 <div class="form-group">
    <label for="qual">Qualification:</label>
    <input type="text" class="form-control"  name="qualification" id="qual" required="required">
  </div>
  <div class="form-group">
    <label for="pmdc">PMDC certificate.no:</label>
    <input type="text" class="form-control" id="pmdc" name="pmdc" required="required">
  </div>
  <div class="form-group">
    <label for="c_address">Clinic address:</label>
    <input type="text" class="form-control" id="c_address" name="c_address" required="required">
  </div>
  <div class="form-group">
    <label for="specialisation">Specialisation:</label>
    <input type="text" class="form-control" id="specialisation" name="specialisation" required="required">
  </div>
  <div class="form-group">
    <label for="c_timing">Clinic timing:</label>
    <input type="text" class="form-control" id="c_timing" name="c_timing" required="required">
  </div>
  <div class="form-group">
    <label for="username">Username:</label>
    <input type="text" class="form-control" id="username" name="username" required="required">
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="text" class="form-control" id="password" name="password" required="required">
  </div>
  <button type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit">submit</button>
</form>
                  <!-- Footer -->

<footer class="bg-color py-2 foot text-center">
			<h5 class="text-center">Copyright &copy; Gemini consultancy 2019-2020</h5>
		</footer>
    </body>
   <!-- Password validation -->

<script>

function form()
{
  

  var str = document.getElementById('password').value;
  
  if (str.length < 6) {
        alert("too_short");
        return ("too_short");
    } 
}
</script>
