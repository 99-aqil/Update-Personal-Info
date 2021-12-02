<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
        $Name = $_POST['name'];
        $Username = $_POST['username'];    
        $UserID = $_GET['ID'];		
        $Phone = $_POST['phone'];
	    $Email = $_POST['email'];
	    $Address = $_POST['address'];
	    $Specialty = $_POST['specialty'];

        $query = " update chef set Name = '".$Name."', Username='".$Username."',Phone='".$Phone."', Email = '".$Email."',Address = '".$Address."', Specialty = '".$Specialty."' where User_ID='".$UserID."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:myInfo.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:myInfo.php");
    }


?>