<<?php
session_start();
include('includes/header.php');
include('config.php')
?>
<!DOCTYPE html>
<html lang = "en">
<head>
    <title>Poly Blog Admin</title>
    <meta charset = "utf-8" />
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
    <link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
    <link rel = "stylesheet" type = "text/css" href = "css/style.css" />
</head>
<body>
<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
<!-- <nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
        <div  class = "container-fluid">
        <div class = "navbar-header">
        <a class = "navbar-brand" >Poly Blog Admin</a> -->
    </div>
</nav>


<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">

        <?php

            if (isset($_SESSION['status'])) 
            {
                echo "<h4 class='alert alert-success'>".$_SESSION['status']."</h4>";
            }
            
            ?>
            <div class="card">
                <div class="card-header">
                    <h4>Edit User</h4>
                </div>
                <div class="card-body">


                    <form action="user_edit_code.php" method="POST">
                        <?php
                            if(isset($_GET['id']))
                            {
                                $user_id = $_GET['id'];
                                $user = $auth->getUser($user_id);
                            ?>

                            <div class="row">
                            <div class="col-md-6">
                                <!-- get userid -->
                                <input type="hidden" name="user_id" value="<?=$user_id;?>">

                                <div class="form-group mb-3">
                                <label for="">Display Name</label>
                                <input type="text" name="displayName" value="<?= $user->displayName; ?>" class="form-control" required>
                                </div>

                                <div class="form-group mb-3">
                                <label for="">Email</label>
                                <input type="text" name="email" value="<?= $user->email; ?>" class="form-control" required>
                                </div>

                                <!-- <div class="form-group mb-3">
                                <label for="">Phone Number</label>
                                <input type="text" name="phone" value="<?= $user->phoneNumber ?>" class="form-control">
                                </div> -->

                                <div class="form-group mb-3">
                                <button type="submit" name="user_edit_update_btn" class="btn btn-primary">Update User</button>
                                <a href="users_list.php" class="btn btn-danger">Back</a>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </form>
                </div>

                <div class="card-body">

                <form action="user_enadis_code.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- get userid -->
                                <label for="">Enable/Disable A/C</label>
                                <input type="hidden" name="user_id" value="<?=$_GET['id']; ?>">
                                <div class="form-group mb-3">
                                    <select name="account_disena" id="" required class="form-control">
                                        <option value="">Select Option</option>
                                        <option value="disable">Disable</option>
                                        <option value="enable">Enable</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                <button type="submit" name="enabledisable_user_btn" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                </form>
                
                </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>