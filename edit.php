<?php 

    require_once("connection.php");
    $UserID = $_GET['GetID'];
    $query = " select * from chef where User_ID='".$UserID."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $Name = $row['Name'];
        $Username = $row['Username'];  
        $UserID = $row['User_ID'];		
        $Phone = $row['Phone'];
	    $Email = $row['Email'];
	    $Address = $row['Address'];
		$Specialty = $row['Specialty'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Document</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Update My INFO</h3>
                        </div>
                        <div class="card-body">

                            <form action="update.php?ID=<?php echo $UserID ?>" method="post">
                                <input type="text" class="form-control mb-2" placeholder=" User Name " name="name" value="<?php echo $Name ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Username " name="username" value="<?php echo $Username ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Phone " name="phone" value="<?php echo $Phone ?>">
								<input type="text" class="form-control mb-2" placeholder=" Email " name="email" value="<?php echo $Email ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Address " name="address" value="<?php echo $Address ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Specialty " name="specialty" value="<?php echo $Specialty ?>">
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>