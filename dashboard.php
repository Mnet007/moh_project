<?php
include_once("./database/constants.php");
if (!isset($_SESSION["userid"])) {
    header("location:".DOMAIN."/");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inventory Management System</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
    <script type="text/javascript" src="./js/main.js"></script>
</head>
<body>
    <!--Navbar-->
    <?php include_once("./templates/header.php"); ?>
    <br/><br/>
    <div class="container">
        <div class="row">
            <div class="col=md-4">
                <div class="card mx-auto" style="width: 20rem;">
                <img class="card-img-top mx-auto" style="width:60%;" src="./images/users.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Profile Info</h5>
                    <p class="card-text"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>Mohammed Nabil</p>
                    <p class="card-text"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>Admin</p>
                    <p class="card-text">Last Login : xxxx-xx-xx</p>
                    <a href="#" class="btn btn-primary"><i class="fa fa-edit" aria-hidden="true">&nbsp;</i>Edit Profile</a>
                </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="jumbotron" style="width:100%; height:100%;">
                    <h1>Welcome Admin,</h1>
                    <div class="row">
                        <div class="col-sm-6">
                        <iframe src="https://free.timeanddate.com/clock/i8g3py4n/n1963/szw160/szh160/cf100/hnce1ead6" frameborder="0" width="160" height="160"></iframe>
                        </div>
                        <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">New Orders</h5>
                                <p class="card-text">Here you can make invoices and create new orders</p>
                                <a href="new_order.php" class="btn btn-primary">New Orders</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p></p>
    <p></p>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Categories</h5>
                        <p class="card-text">Here you can manage your categories and you can add new parent and sub categories</p>
                        <a href="#" data-toggle="modal" data-target="#form_category" class="btn btn-primary">Add</a>
                        <a href="manage_categories.php" class="btn btn-primary">Manage</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Brands</h5>
                        <p class="card-text">Here you can manage your brand and you can add new brand</p>
                        <a href="#" data-toggle="modal" data-target="#form_brand" class="btn btn-primary">Add</a>
                        <a href="manage_brand.php" class="btn btn-primary">Manage</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Products</h5>
                        <p class="card-text">Here you can manage your products and you can add new products</p>
                        <a href="#" data-toggle="modal" data-target="#form_products" class="btn btn-primary">Add</a>
                        <a href="manage_product.php" class="btn btn-primary">Manage</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    //Category form
    include_once("./templates/category.php");
    ?>
    <?php
    //Brand form
    include_once("./templates/brand.php");
    ?>
    <?php
    //Products form
    include_once("./templates/products.php");
    ?>



</body>
</html>