<?php
    session_start();
    include("connection.php");
    $message = "";
    function createUser($details){
        global $conn;
        // global $db;
        $fname = $details["first_name"];
        $lname = $details["last_name"];
        $insti = $details["institution_name"];
        $dept = $details["department"];
        $faculty = $details["faculty"];
        $stdL = $details["student_level"];
        $stdSem = $details["student_semester"];
        $grad = $details["graduation_year"];
        $co = $details["carry_over"];
        $sex = $details["gender"];
        $age = $details["age"];
        $state = $details["student_state"];
        $lga = $details["student_lga"];
        $stdId = $details["student_id"];

        $query = "INSERT INTO users (first_name, last_name, institution_name, department, faculty, student_level, student_semester,graduation_year, carry_over, gender, age, student_state, student_lga, student_id)
              VALUES('$fname','$lname','$insti','$dept','$faculty','$stdL','$stdSem','$grad','$co','$sex','$age','$state','$lga','$stdId')";

        if (mysqli_query($conn, $query)) {
            return $message = "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    }

    

    if(isset($_POST['sub'])){
        //$name = $_POST;
        $message = createUser($_POST);
    }

    function createAdmin($details){
        $username = $details['username'];
        $password = $details['password'];
        $pwd = $details['pwd'];
        if($password == $pwd){
            global $conn;
            $insert = "INSERT INTO admin (username,password) VALUES('$username','$password')";   
            $sql=mysqli_query($conn,$insert)or die("faile to create user");
            if($sql){
                return $message = "created";
            }else{
                return $message = "user not created";
            }

        }else{
            return $message = "password mismatch";
        }
    }

    function loginAdmin($data){
        global $conn;
        $username = $data['username'];
        $password = $data['password'];

        $_SESSION['username'] = $username;

        $qury ="SELECT username,password FROM admin WHERE username='$username'AND password='$password'";
        $sql_query = $conn->query($qury);
        
        if($sql_query->num_rows > 0){
            header("location:index.php");
                      
        }else{
            return $message = "wrong login details";            
        }
    }

    function logout(){
        session_destroy();
        header("location:login.php");
    }

    if(isset($_POST['login'])){
        $message = loginAdmin($_POST);
    }

    if(isset($_POST['signup'])){
        $message = createAdmin($_POST);
    }

    if (isset($_POST['logout'])){
        logout();
    }
    
//https://github.com/kaslong015/abokisresearch

?>