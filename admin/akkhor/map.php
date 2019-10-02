<?php  require_once 'includes/connections.php';
if(empty($_SESSION['id'])){
    header("location:login.php");
}
?> 
<?php require_once 'includes/header.php' ?>

            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Admin Dashboard</h3>
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>Map</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Google Map Area Start Here -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card google-map-area">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Marker Map</h3>
                                    </div>
                                   <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" 
                                        data-toggle="dropdown" aria-expanded="false">...</a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>

                                        </div>
                                    </div>

                                </div>
                                <div class="default-map">
                                    <div id="markergoogleMap" style="width:100%; height:660px; border-radius: 4px;">
                                        
                                        
                                        
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3404.5957218723!2d73.08901851462842!3d31.42526285897751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922682106222b75%3A0x21eac74c2f3ec1cd!2sKM+Centre%2C+Faisalabad%2C+Punjab%2C+Pakistan!5e0!3m2!1sen!2s!4v1564400359102!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Google Map Area End Here -->
<?php require_once 'includes/footer.php' ?>