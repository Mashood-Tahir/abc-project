<?php require_once 'includes/connections.php';
if(empty($_SESSION['id'])){
    header("location:login.php");
}
?>
<?php require_once 'includes/header.php' ?>

            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Tours Session</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Tour</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- All Subjects Area Start Here -->
                <div class="row">
                    <div class="col-4-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Add New Tour</h3>
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
<form class="new-added-form" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Title Name *</label>
<input type="text" name="titlename" placeholder="Title Name" class="form-control">
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Tour Detail *</label>
<textarea rows="4" cols="60" name="textarea" placeholder="Tour Detail" class="form-control">

</textarea>
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Select Tour Image *</label>
<input type="file" name="file" class="form-control">
                                        </div>
                                        <div class="col-12 form-group mg-t-8">
<button type="submit" name="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
<button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                        </div>
                                    </div>
                                </form>
<?php 
if (isset($_POST['submit'])) {
    
    $target_dir = "media/";
      $target_file = $target_dir . basename($_FILES["file"]["name"]);
      $file = basename($_FILES["file"]["name"]);
move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);


    $titlename=$_POST['titlename'];
    $textarea=$_POST['textarea'];

    $query="INSERT INTO tour(titlename, textarea, file) VALUES('$titlename','$textarea', '$file')";
    if (mysqli_query($con, $query)) {
        echo "done";
    }
    else{
        echo "error";
    }
}
 ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-8-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>All Subjects</h3>
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
                                
                                    


  <div class="container">
    <?php 
      $query= "SELECT * FROM tour";
      $select= mysqli_query($con, $query);

?>
    <div class="row">
      <?php  while ($row = mysqli_fetch_assoc($select)) {  
    ?>
   <div class="card col-lg-4">
    <div class="card-img">
        <img src="media/<?php echo $row['file']; ?>" class="card-img-top" alt="...">

    </div>
    
    <div class="card-body">
      <h5 class="card-title text-success"><?php echo $row["titlename"]; ?></h5>
      <p class="card-text text-dark"><?php echo $row['textarea']; ?></p>
      <a href="../../datainput.php" class="btn btn-primary ">Submit</a>
      <a href="deltour.php?id=<?= $row['id']; ?>" class="btn btn-primary "> Delete tour</a>
    </div>
          </div>
<?php 
}
 ?>
    </div>
  </div>

                             </div>
                        </div>
                    </div>
                </div>
                <!-- All Subjects Area End Here -->
<?php require_once 'includes/footer.php' ?>