<?php require_once 'includes/connections.php';
if(empty($_SESSION['id'])){
    header("location:login.php");
}
?>
<?php require_once 'includes/header.php'?>

            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Customers</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Customers</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Student Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>All Customers Data</h3>
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
$sql = "SELECT * FROM users";
if( isset($_GET['search']) ){
    $name = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
    $sql = "SELECT * FROM users WHERE fname  LIKE '%$name%' OR lname  LIKE '%$name%' OR pass  LIKE '%$name%' ";



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
                                        <th>Password</th>
                                        
                                        
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
                                        <td><?= $row['pass']; ?></td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
<a class="dropdown-item" href="update.php?id=<?php echo $row['id']; ?>"><i class="fas fa-cogs text-dark-pastel-green"></i>Update</a>

<a class="dropdown-item" href="delete.php?id=<?php echo $row['id']; ?>"><i class="fas fa-redo-alt text-orange-peel"></i>Delete</a>
                                                </div>
                                            </div>
                                        </td>
    </tr>
    <?php
}
?>

                        </div>
                    </div>
</table>
                </div>
                <!-- Student Table Area End Here -->
<?php require_once 'includes/footer.php' ?>