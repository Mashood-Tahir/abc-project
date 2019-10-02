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
                    <ul>
                        <li>
                            <a href="Index.php">Home</a>
                        </li>
                        <li>My Profile</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Account Settings Area Start Here -->
                <div class="row">
                    
                    
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

