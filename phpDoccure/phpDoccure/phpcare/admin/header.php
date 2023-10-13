<div class="header">

<div class="header-left">
<a href="index.html" class="logo">
<img src="assets/img/logo.png" alt="Logo">
</a>
<a href="index.html" class="logo logo-small">
<img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
</a>
</div>

<div class="top-nav-search">
<form>
<input type="text" class="form-control" placeholder="Search here">
<button class="btn" type="submit"><i class="fa fa-search"></i></button>
</form>
</div>

<?php

	include("files.php")
	
?>
	
<a class="mobile_btn" id="mobile_btn">
<i class="fa fa-bars"></i>
</a>


<ul class="nav user-menu">

<li class="nav-item dropdown has-arrow">
<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<span class="user-img"><img class="rounded-circle" src="assets/img/doctors/doctor-01.jpg" width="31" alt=""></span>
</a>
<div class="dropdown-menu">
<div class="user-header">
<div class="avatar avatar-sm">
<img src="assets/img/doctors/doctor-01.jpg" alt="User Image" class="avatar-img rounded-circle">
</div>
<div class="user-text">
<h6><?php echo $name ?></h6>
<p class="text-muted mb-0">Administrator</p>
</div>
</div>
<a class="dropdown-item" href="profile.php">My Profile</a>

<a class="dropdown-item" href="destroy.php">Logout</a>
</div>
</li>

</ul>

</div>



<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li class="menu-title">
<span>Main</span>
</li>
<li class="active">
<a href="index.php"><i class="fe fe-home"></i> <span>Dashboard</span></a>
</li>
<li>
<a href="appointments.php"><i class="fe fe-layout"></i> <span>Appointments</span></a>
</li>
<li>
<a href="specs.php"><i class="fe fe-users"></i> <span>Specialities</span></a>
</li>
<li>
<a href="doctors.php"><i class="fe fe-user-plus"></i> <span>Doctors</span></a>
</li>
<li>
<a href="patients.php"><i class="fe fe-user"></i> <span>Patients</span></a>
</li>
<li>
<a href="contact.php"><i class="fe fe-star-o"></i> <span>Messages</span></a>
</li>

<li>
<a href="profile.php"><i class="fe fe-user-plus"></i> <span>Profile</span></a>
</li>
</ul>
</div>
</div>
</div>

