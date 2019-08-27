<?php 
include("function/function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
     
     <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
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
 
</nav>
</div>
<!-- ============================================================== -->
<!-- end navbar -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
<div class="container-fluid dashboard-content">
    <div class="row">                
            
<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
    <div class="section-block" id="basicform">
        <h3 class="section-title">Fell in the Form</h3>
        
    </div>
    <div class="card">
        <h5 class="card-header">Basic Form</h5>          
        <div class="card-body">
            <div class="alert" id="msg" role="alert"><?php echo $message; ?></div>
            <form action="index.php" method="post">
                <div class="form-group">
                    <label class="col-form-label">First Name</label>
                    <input name="first_name" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label class="col-form-label">Last Name</label>
                    <input name="last_name" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label class="col-form-label">Mat Number</label>
                    <input name="student_id" type="text" class="form-control" paceholder="student id(uj/2020/ns/0001)">
                </div>
               
                <div class="form-group">
                    <label class="col-form-label">Institution Name</label>

                    <select class="form-control form-control" name="institution_name" id="uni">
                        <option>Large select</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="col-form-label">Level</label>
                    <input name="student_level" type="text" class="form-control" paceholder="student id(uj/2020/ns/0001)">
                </div>

                <div class="form-group">
                    <label class="col-form-label">Age</label>
                    <input name="age" type="number" class="form-control">
                </div>

                <div class="form-group">
                    <label class="col-form-label">Carry Over</label>
                    <select class="form-control form-control" name="carry_over">
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="col-form-label">Semester(Term)</label>
                    <select class="form-control form-control" name="student_semester">
                        <option>First</option>
                        <option>Second</option>
                    </select>
                </div>

                <div class="custom-control custom-radio form-group">
                    <input type="radio" class="custom-control-input " id="customControlValidation3" name="gender" value="Male" required>
                    <label class="custom-control-label" for="customControlValidation3">Male</label>
                </div>

                <div class="custom-control custom-radio form-group">
                    <input type="radio" class="custom-control-input" id="customControlValidation4" name="gender" value="Female" required>
                    <label class="custom-control-label" for="customControlValidation4">Female</label>
                </div>
                <div class="form-group">
                    <label class="col-form-label">Graduation Year(yyyy)</label>
                    <input name="graduation_year" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label class="col-form-label">Faculty</label>
                    <select class="form-control form-control" name="faculty" id="faculty">
                        <option>select</option>
                    </select>
                </div>
                <div class="form-group">
                <label class="col-form-label">Department</label>
                    <select class="form-control" name="department" id="department">
                        <option>select</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="col-form-label">State</label>
                    <select class="form-control form-control" name="student_state" id="state">
                        <option value="">select</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="col-form-label">LGA</label>
                    <select class="form-control form-control" name="student_lga" id="lga">
                        <option value="">select</option>
                    </select> 
                </div> 
               
                <input type="submit" name="sub" class="btn btn-primary btn-block" value="submit">                          
            </form>
        </div>
                                            
    </div>
</div>
</div>
        <!-- ============================================================== -->
        <!-- end basic form  -->
        <!-- ============================================================== -->
        
    
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12">
                <div class="sidebar-nav-fixed">
                    
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
    <script src="assets/index.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script>    
    var div = document.querySelector("#msg");
    
    if(div.textContent == ""){
       $('#msg').hide(); 
    }else if(div.textContent == "user not created"){
        $("div #msg").addClass('alert-danger');
        $('#msg').fadeToggle(5000);
    }else{ 
        $("div #msg").addClass('alert-success')
        $('#msg').fadeToggle(5000);
    }
   
</script>
</body>
</html>