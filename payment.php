<?php
    $payment = false;
    $showErr = false;
    include 'Login_session.php';
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        include '_dbconnect.php';
        $course = $_POST['course'];
        $pass = $_SESSION['password'];
        $name = $_SESSION['username'];
        $id = $_SESSION['id'];
        $cid ; $amount;
        
        // Checking the whether the course is already purchased or not by fetching it.
        $sql = "SELECT * from relation INNER JOIN courses ON relation.course_id = courses.course_id WHERE st_id = $id AND course_name = '$course';";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0)
        {
            $showErr = "You have already purchased this course";
        }
        else{
            
            // Get the course id from the courses table
        
            $sql = "SELECT `course_id`, `price` FROM `courses` WHERE course_name = '$course' ";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) == 1)
            {
                $row = mysqli_fetch_assoc($result);
                $cid = $row['course_id'];
                $amount = $row['price'];
            }

            // Insert data into payment table

            $sql = "INSERT INTO `payment`(`st_id`, `course`, `amount`) VALUES ('$id','$course','$amount')";
            $result = mysqli_query($conn, $sql);
            $last_id = mysqli_insert_id($conn);  //Get the last inserted id from the payment table


            // Insert data into relationship table.
            $sql2 = "INSERT INTO `relation` (`st_id`, `course_id`, `pay_id`) VALUES ($id, $cid, $last_id)";
            $result = mysqli_query($conn, $sql2);

            $err = mysqli_error($conn);
    
            //Checking query
            if($result){
                $payment = true;
                header('location: courses.php');
            }
            else{
                $showErr = "Your payment is not successfull.";
            }     
        }
 
    }
    
?>

<!DOCTYPE html>
<html>

<head>
    <title>QR Code Payment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        
        body {
            background-color: #0896f5;
        }

        .container {
            max-width: 550px;
            margin: 30px auto;
            padding: 10px;
            background-color: #e5e5e7;
            border-radius: 5px;
            box-shadow: 0px 0px 5px 2px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-group input {
            border-radius: 3px;
        }

        .form-group input:focus {
            outline: none;
        }

        .btn-primary {
            width: 100%;
            padding: 10px;
            font-weight: bold;
            font-size: 24px;
        }

        .text-center {
            text-align: center;
        }

        .mt-3 {
            margin-top: 3rem;
        }

        .qr-code {
            max-width: 100%;
            height: auto;
        }
        .btn-light {
            border-radius: 5px;
            padding: 5px;
        }
        h4{
            color: rgb(3, 3, 3);
            text-align: justify,left;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 100;
            font-style: oblique;
            
        }
        header nav div{
            background-color: white;
            text-align: center;
            padding: 10px;
        }
    </style>
    <script type="text/javascript">
        function preventBack() {
            window.history.forward();
        }
          
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };
    </script>
    
</head>

<body>
    <header>
        <nav>
            <div class="container-fluid">
                    <img src="assets/img/logo2.png" class="logo" alt="Logo">
            </div>
        </nav>
    </header>
    <?php
        if($payment){
            echo '<div class="alert alert-success">
                            <strong>Sucess!</strong> Your payment is successfully.  
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
        }
        if($showErr){
            echo '<div class="alert alert-warning">
                            <strong>Error! </strong>' . $showErr . '
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
        }
    ?>
    <div class="container">
        <button type="submit" class="btn-light"><a href="profile.php" style="color:orange">Go Back</a></button>
        <form id="paymentForm" method="post" name="myForm">
            <div class="text-center mt-3">
                <img src="assets/img/payment.jpg" alt="QR Code" class="qr-code" style="width: 200px; height: 200px;">
            </div><br>
            <div class="text">
                 <h4>Paying Name:- Akshit Jain</h4>
                <h4>UPI Handle - 9910281163@paytm</h4>
            </div>
            <div class="form-group">
                <label for="Courses">Choose Course:</label>
                <select id="course" name="course" class="form-control" onchange="myFunction()">
                    <option value="Select">Select</option>
                    <option value="Tally">Tally</option>
                    <option value="Busy">Busy</option>
                    <option value="dtp">DTP</option>
                    <option value="advance_basic">Advance Basic</option>
                    <option value="advance_tally">Advance Tally</option>
                </select>
            </div>
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input id="amount" name="amount" placeholder="Amount" class="form-control" disabled>
            </div>
            <button type="submit" class="btn btn-primary" onclick="return payment();">Pay</button>
        </form>
    </div>
    
    <script>
        function myFunction() {
            var x = document.getElementById("course").value;
            var amt = document.getElementById("amount");
            switch(x)
                    {
                        case 'Tally' : amt.value = 1200;
                        break;
                        case 'Busy' : amt.value = 1200;
                        break;
                        case 'dtp' : amt.value = 2000;
                        break;
                        case 'advance_basic' : amt.value = 1499;
                        break;
                        case 'advance_tally' : amt.value = 1499;
                        break;
                    }
        }
        function payment(){
            var course = document.getElementById("course").value;
            if(course == "Select" || course == "")
            {
                alert("Please choose a course");
                return false;
            }
            return true;
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
</body>

</html>