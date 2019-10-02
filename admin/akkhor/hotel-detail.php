<?php  require_once 'includes/connections.php';
if(empty($_SESSION['id'])){
    header("location:login.php");
}
?> 
<?php require_once 'includes/header.php' ?>

            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Hostal List</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>All Hostal Details</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <div class="row">
                    <!-- Add Room Area Start Here -->
                    
                    <!-- Add Room Area End Here -->
                    <!-- All Room List Area Start Here -->
                    <div class="col-8-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Hotel Room Lists</h3>
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
$sql = "SELECT * FROM hotel ";
if( isset($_GET['search']) ){
    $name = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
    $sql = "SELECT * FROM hotel WHERE fullname LIKE '%$name%' OR fathername  LIKE '%$name%' OR phone  LIKE '%$name%' OR catagory LIKE '%$name%' OR room LIKE '%$name%' OR bed LIKE '%$name%' ";



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
                                        
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input checkAll">
<th>Full Name</th>
                                                <th>Father Name</th>
                                                <th>Phone</th>
                                                <th>Hotel Type</th>
                                                <th>Room Type</th>
                                                <th>Number of Bed</th>
                                    </tr>

<?php
while($row = $result->fetch_assoc()){
    ?>
    <tr>
    <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input">
<label class="form-check-label"><?= $row['fullname']; ?></label>
                                                    </div>
                                                </td>
<td><?= $row['fathername']; ?></td>
<td><?= $row['phone']; ?></td>
<td><?= $row['catagory']; ?></td>
<td><?= $row['room']; ?></td>
<td><?= $row['bed']; ?></td>
<td>
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <span class="flaticon-more-button-of-three-dots"></span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
<a class="dropdown-item" href="updateroom.php?id=<?php echo $row['id']; ?>"><i class="fas fa-cogs text-dark-pastel-green"></i>Update</a>

<a class="dropdown-item" href="deleteroom.php?id=<?php echo $row['id']; ?>"><i class="fas fa-redo-alt text-orange-peel"></i>Delete</a>
                                                </div>
                                                    </div>
                                                </td>
    </tr>
    
                                <?php 
}
                                 ?>
                         
   



                                        </tbody>
                                    </table>
</table>
</div>
</div>

                        </div>
                    </div>
                    <!-- All Room List Area End Here -->
                </div>
<?php require_once 'includes/footer.php' ?>