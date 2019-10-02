<?php require_once 'includes/connections.php';
if(empty($_SESSION['id'])){
    header("location:login.php");
}
?>
<?php require_once 'includes/header.php';?>
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Booking</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Booking</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Student Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>All Booking Trash Data</h3>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <?php
$sql = "SELECT * FROM datainpute WHERE trash='yes' ";
if( isset($_GET['search']) ){
    $name = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
    $sql = "SELECT * FROM datainpute WHERE fname  LIKE '%$name%' OR lname  LIKE '%$name%' OR catagory  LIKE '%$name%' OR duration LIKE '%$name%' OR city LIKE '%$name%' OR country LIKE '%$name%' OR status LIKE '%$name%' ";



}


$result = $con->query($sql);


?>



<div class="container">
<label>Search</label>
<form action="" method="GET">
<input type="text" placeholder="Type the name here" name="search">&nbsp;
<input type="submit" value="Search" name="btn" class="btn btn-sm btn-primary">
</form>

<div class=" table-responsive">
<table class="table display data-table text-nowrap">
<tr>
       <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
</td>                                                
       <td>
                                                <label class="form-check-label"><?= $row['id']; ?></label>
                                            </div>
                                        </td>                                            </div>
                                        </th>
                                        <th>First Name</th>
                                        <th>Last name</th>
                                        <th>Catagory</th>
                                        <th>Duration</th>
                                    
                                        <th>City</th>
                                        <th>Country</th>
                                        <th>Date</th>
                                    
                                        <th>Current status</th>
                                        <th>Update status</th>
                                        
                                        <th>Status</th>
                                    </tr>

<?php
while($row = $result->fetch_assoc()){
    ?>
    <tr>
    
                                                <th><label class="form-check-label">

                                        <?= $row['id']; ?></label>
                                           </th>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="img/figure/student6.png" alt="student"></td>
                                        <td><?= $row['fname']; ?></td>
                                        <td><?= $row['lname']; ?></td>
                                        <td><?= $row['catagory']; ?></td>
                                        <td><?= $row['duration']; ?></td>
                                        <td><?= $row['city']; ?></td>
                                        <td><?= $row['country']; ?></td>
                                        <td><?= $row['date']; ?></td>
                                        <td><?= $row['status']; ?></td>
                                        <td>
<a class="btn btn-success badge-pill" href="status.php?id=<?php echo $row['id']; ?>&status=approved">Approved</a>
<a class="btn btn-danger badge-pill" href="status.php?id=<?php echo $row['id']; ?>&status=unapproved">UnApproved</a>



                                        </td>
                                        <td>
                                            
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
<a class="dropdown-item" href="updates.php?id=<?php echo $row['id']; ?>"><i class="fas fa-cogs text-dark-pastel-green"></i>Update</a>

<a class="dropdown-item" href="trash.php?id=<?php echo $row['id']; ?>&trash=yes"><i class="fas fa-redo-alt text-orange-peel"></i>Trash</a><a class="dropdown-item" href="deletes.php?id=<?php echo $row['id']; ?>&trash=yes"><i class="fas fa-redo-alt text-orange-peel"></i>Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                        
    </tr>
    
                                <?php 
}
                                 ?>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Student Table Area End Here -->
<?php require_once 'includes/footer.php' ?>