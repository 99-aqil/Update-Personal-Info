<?php 

    require_once("connection.php");
    $query = " select * from bid ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>My Bid History</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>
                                <td> Bidder Name </td>
                                <td> Bid ID </td>
                                <td> Bid Status </td>
                                <td> Date </td>
                                <td> Rank  </td>
                                <td> Price </td>
								<td> Approved By </td>
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $BidderName = $row['Bidder Name'];
                                        $BidID = $row['Bid ID'];
                                        $BidStatus = $row['Bid Status'];
                                        $Date = $row['Date'];
										$Rank = $row['Rank'];
										$Price = $row['Price'];
										$ApprovedBy = $row['Approved By'];
                            ?>
                                    <tr>
                                        <td><?php echo $BidderName ?></td>
                                        <td><?php echo $BidID ?></td>
                                        <td><?php echo $BidStatus ?></td>
                                        <td><?php echo $Date ?></td>
										<td><?php echo $Rank ?></td>
										<td><?php echo $Price ?></td>
										<td><?php echo $ApprovedBy ?></td>
                                        
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