<?php 

    require_once("connection.php");
    $query = " select * from chef ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>My INFO</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>							       
                                <td> Name </td>
                                <td> Username </td>
								<td> User_ID </td>
                                <td> Phone </td>
                                <td> Email </td>
                                <td> Address </td>
								<td> Specialty </td>
								<td> Edit  </td>
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {								
                                        $Name = $row['Name'];
                                        $Username = $row['Username'];
                                        $UserID = $row['User_ID'];
                                        $Phone = $row['Phone'];
	                                    $Email = $row['Email'];
		                                $Address = $row['Address'];
		                                $Specialty = $row['Specialty'];
                            ?>
                                    <tr>									   
                                        <td><?php echo $Name ?></td>
                                        <td><?php echo $Username ?></td>   
										<td><?php echo $UserID ?></td>
                                        <td><?php echo $Phone ?></td>
										<td><?php echo $Email ?></td>
										<td><?php echo $Address ?></td>
										<td><?php echo $Specialty ?></td>
										<td><a href="edit.php?GetID=<?php echo $UserID ?>">Edit</a></td>
                                        
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>