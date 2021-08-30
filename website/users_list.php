<?php
session_start();
// include('includes/header.php');
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
<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
        <div  class = "container-fluid">
        <div class = "navbar-header">
        <a class = "navbar-brand" >Poly Blog Admin</a>
    </div>
</nav>

<div class = "container-fluid">	
<ul class = "nav nav-pills">
    <li ><a href = "home_admin.php">Home</a></li>
    <li class = "active"><a href = "users_list.php">Users</a></li>
    <li><a href = "blog_admin.php">Blog</a></li>
    <li><a href = "event_admin.php">Event</a></li>			
</ul>		
</div>
<div class = "alert alert-info">Users Dashboard</div>

<div class="container">
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <!-- <th>SL.No</th> -->
                    <th>Display Name</th>
                    <th>Email</th>
                    <th>Enabled/Disabled</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('config.php');
                $users = $auth->listUsers();
                $i=1;

                foreach ($users as $user) 
                {
                    ?>

                    <tr>
                        <!-- <td><?= $i++ ?></td> -->
                        <td><?= $user->displayName ?></td>
                        <td><?= $user->email ?></td>
                        <td>
                            <?php
                                if ($user->disabled)
                                {
                                    echo "A/C Disabled";
                                }
                                else {
                                    
                                    echo "A/C Enabled";
                                }
                            ?>
                        </td>
                        <td>
                            <a href="user_edit.php?id=<?=$user->uid; ?>" class="btn btn-sm btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="admin_user_delete.php" method="POST">
                                <input type="hidden" name="user_id_delete" value="<?=$user->uid;?>"/>
                                <button type="submit" name="user_delete_btn" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>