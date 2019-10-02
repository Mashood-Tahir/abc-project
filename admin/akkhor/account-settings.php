<?php require_once "includes/connections.php"; ?>
<?php
if(empty($_SESSION['id'])){
    header("location:login.php");
}
?> 
<?php require_once 'includes/header.php'; ?>

                <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Account Setting</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Setting</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Account Settings Area Start Here -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Add New User</h3>
                                    </div>
                                    
                                </div>
                                <form method="POST">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                                            <label>Full Name *</label>
<input type="text" name="fullname" placeholder="Fullname" class="form-control">
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                                            <label>E-mail *</label>
<input type="email" name="mail" placeholder="E-mail" class="form-control">
                                        </div>
                                        
                                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                                            <label>Password *</label>
<input type="password" name="pass" placeholder="Password" class="form-control">
                                        </div>
<div class="col-xl-4 col-lg-6 col-12 form-group">
                                            <label>Insert Image *</label>
<input type="file" name="file" class="form-control">

                                        </div>

                                        <div class="col-12 form-group mg-t-8">
<button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="submit">Submit</button>
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


    
      $fullname=$_POST['fullname'];
      $mail=$_POST['mail'];
      $pass=$_POST['pass'];


      $query="INSERT INTO admin(fullname, mail, pass, file) VALUES('$fullname','$mail','$pass', '$file')";

          if (mysqli_query($con, $query)) {
     echo "Register";
          }
          else{
            echo "error";
          }
         


  }
?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-8-xxxl col-xl-12">
                        <div class="card account-settings-box">
                            <div class="card-body">
                                <div class="heading-layout1 mg-b-20">
                                    <div class="item-title">
                                        <h3>Admin Detail</h3>
                                    </div>
                                </div>
                                <div class="user-details-box">
                                    <div class="item-img">
                                        <img src="img/figure/skjhdaskjdsh.png" alt="user">
                                    </div>
                                    <div class="item-content">
                                        <div class="info-table table-responsive">
                                            <table class="table text-nowrap">
                                                <tbody>
                                                    <tr>
                                                        <td>Name:</td>
                                                        <td class="font-medium text-dark-medium">Haseeb Sheikh</td>
                                                    </tr>
                                                    <tr>
                                                        <td>User Type:</td>
                                                        <td class="font-medium text-dark-medium">Super Admin</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gender:</td>
                                                        <td class="font-medium text-dark-medium">Male</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Father Name:</td>
                                                        <td class="font-medium text-dark-medium">Tahir Mahmood</td>
                                                    </tr>
                                                  
                                                    <tr>
                                                     
                                                    <tr>
                                                        <td>Religion:</td>
                                                        <td class="font-medium text-dark-medium">Islam</td>
                                                    </tr>
                                                                                                 
                                                    <tr>
                                                        <td>E-mail:</td>
                                                        <td class="font-medium text-dark-medium">stevmyexame87@gmail.com</td>
                                                    </tr>
                                                    
                                                   
                                                    <tr>
                                                        <td>Section:</td>
                                                        <td class="font-medium text-dark-medium">2019</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ID No:</td>
                                                        <td class="font-medium text-dark-medium">10005</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Address:</td>
                                                        <td class="font-medium text-dark-medium">Afghanabad #01 st #02</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Phone:</td>
                                                        <td class="font-medium text-dark-medium"> 0302-7186445</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Account Settings Area End Here -->
<?php require_once 'includes/footer.php' ?>

