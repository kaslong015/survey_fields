<?php 
include("../function/function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="a../ssets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
     
     <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <title>Document</title>
</head>
<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
<div class="dashboard-main-wrapper">
<!-- ============================================================== -->
<!-- navbar -->
<!-- ============================================================== -->
<div class="dashboard-header">
<nav class="navbar navbar-expand-lg bg-white fixed-top">
    <a class="navbar-brand" href="index.html">Concept</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto navbar-right-top">
            <li class="nav-item" style="margin-right:15px;">
                <form action="index.php" method="post">                
                    <input type="submit" name="logout" value="logout" class="btn btn-primary btn-sm">
                </form>
            </li>
        </ul>
    </div>
 
</nav>
</div>
<!-- ============================================================== -->
<!-- end navbar -->
<!-- ============================================================== -->
 <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
<div class="nav-left-sidebar sidebar-dark">
<div class="menu-list">
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav flex-column">
            <li class="nav-divider">
                Menu
            </li>
            <li class="nav-item ">
                <a class="nav-link active"><i class="fa fa-fw fa-user-circle"></i>Dashboard</a>
               
             </li>

             <li class="nav-item " style="margin-top: 10px;">
                <a href="reg.php" class="nav-link active"><i class="fa fa-fw fa-user-circle"></i>Add Admin</a>
               
             </li>
        </ul>
    </div>
                             
</nav>
</div>
</div>
<!-- ============================================================== -->
<!-- end left sidebar -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
	<div class="container-fluid dashboard-content">
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-muted">Total Data Collected</h5>
                        <div class="metric-value d-inline-block">
                            <?php 
                                $query = $conn->query("SELECT * FROM users");
                                $row = $query->num_rows;
                                echo"<h1 class='mb-1'>$row</h1>";
                            ?>     
                            
                        </div>
                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                            <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span>
                        </div>
                    </div>
                    <div id="sparkline-revenue2"></div>
                </div>
            </div> 
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-muted">Total Admin</h5>
                        <div class="metric-value d-inline-block">
                           <?php 
                                $query = $conn->query("SELECT * FROM admin");
                                $row = $query->num_rows;
                                echo"<h1 class='mb-1'>$row</h1>";
                            ?>  
                        </div>
                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                            <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span>
                        </div>
                    </div>
                    <div id="sparkline-revenue2"></div>
                </div>
            </div>             
		</div>
	</div>
	<div class="container-fluid dashboard-content">		
		<div class="row">		            
			 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Recent Orders</h5>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="bg-light">
                                    <tr class="border-0">                                    	
                                        <th class="border-0">#</th>
                                        <th class="border-0">first Name</th>
                                        <th class="border-0">Last Name</th>
                                        <th class="border-0">School Id</th>
                                        <th class="border-0">School</th>
                                        <th class="border-0">Level</th>
                                        <th class="border-0">Grad Year</th>
                                        <th class="border-0">Co</th>
                                        <th class="border-0">State</th>
                                        <th class="border-0">Lga</th>
                                        <th class="border-0">Faculty</th>
                                        <th class="border-0">Department</th>
                                        <th class="border-0">Gender</th>
                                        <th class="border-0">Age</th>
                                        <th class="border-0">Semester</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php 
                                        $query = $conn->query("SELECT * FROM users");
                                        $rowcount = $query->num_rows;
                                        $i =1;
                                        while($row = $query->fetch_array()){ 
                                            echo"<tr>";
                                            echo"<td>".$i."</td>";
                                            echo"<td>".$row['first_name']."</td>";              
                                            echo"<td>".$row['last_name']."</td>";
                                            echo"<td>".$row['student_id']."</td>";
                                            echo"<td>".$row['institution_name']."</td>";
                                            echo"<td>".$row['student_level']."</td>";
                                            echo"<td>".$row['graduation_year']."</td>";
                                            echo"<td>".$row['carry_over']."</td>";
                                            echo"<td>".$row['student_state']."</td>";
                                            echo"<td>".$row['student_lga']."</td>";
                                            echo"<td>".$row['faculty']."</td>";
                                            echo"<td>".$row['department']."</td>";
                                            echo"<td>".$row['gender']."</td>";
                                            echo"<td>".$row['age']."</td>";
                                            echo"<td>".$row['student_semester']."</td>";
                                            echo"</tr>";
                                        $i++;
                                        }
                                    ?>                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
		</div>               
    </div>
</div>
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    Copyright © 2019 kaslong .
                </div>
                
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end footer -->
    <!-- ============================================================== -->
        </div>
    </div>   
    <script src="../assets/index.js"></script>

</body>
</html>