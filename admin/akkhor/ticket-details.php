<?php  require_once 'includes/connections.php';
if(empty($_SESSION['id'])){
    header("location:login.php");
}
?>            
<?php require_once 'includes/header.php' ?>

            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Route</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>All Route Details</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <div class="row">
                    <!-- Add Transport Area Start Here -->
                    
                    <!-- Add Transport Area End Here -->
                    <!-- All Transport List Area Start Here -->
                    <div class="col-8-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>All Route Lists</h3>
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
$sql = "SELECT * FROM ticket ";
if( isset($_GET['search']) ){
    $name = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
    $sql = "SELECT * FROM ticket WHERE departure LIKE '%$name%' OR arrival  LIKE '%$name%' OR dates  LIKE '%$name%' OR passport LIKE '%$name%' OR phone LIKE '%$name%' OR air LIKE '%$name%' ";



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
       
                                                <label class="form-check-label"><?= $row['id']; ?></label>
                                            </div>
                                        </td>                                            </div>
                                        </th>
                                        <th>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input checkAll">
<label class="form-check-label">Departure to</label>
                                                    </div>
                                                </th>
                                        <th>Arrival to</th>
<th>Date</th>
<th>Passport Number</th>
<th>Phone Number</th>
<th>Air line</th>
                                    </tr>

<?php
while($row = $result->fetch_assoc()){
    ?>
    <tr>
    
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input">
<label class="form-check-label"><?= $row['departure']; ?></label>
                                                    </div>
                                                </td>
<td><?= $row['arrival']; ?></td>
<td><?= $row['dates']; ?> </td>
<td><?= $row['passport']; ?></td>
<td><?= $row['phone']; ?></td>
<td><?= $row['air']; ?></td>

                                        <td>
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <span class="flaticon-more-button-of-three-dots"></span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
<a class="dropdown-item" href="update-ticket.php?id=<?php echo $row['id']; ?>"><i class="fas fa-cogs text-dark-pastel-green"></i>Update</a>

<a class="dropdown-item" href="delete-ticket.php?id=<?php echo $row['id']; ?>"><i class="fas fa-redo-alt text-orange-peel"></i>Delete</a>
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
                    </div>
                    <!-- All Transport List Area End Here -->
                </div>
                <!-- All Subjects Area End Here -->
<?php require_once 'includes/footer.php' ?>