<?php
    include('_dbconnect.php');
    
    $sql = "SELECT course FROM `registration` where name = 'princy'";
    $result = mysqli_query($conn, $sql);

    // 1. find the number of records in the table
    $num =  mysqli_num_rows($result);
    echo $num;
    echo "<br>";

    if($num == 1)
    {
        $row = mysqli_fetch_assoc($result);
        if($row != NULL)
        {
            $course =  $row['course'];
            if($course == 'Tally')
                echo "You have bought tally course.";
        }
    }
?>