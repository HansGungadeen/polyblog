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
    <li><a href = "users_list.php">Users</a></li>
    <li class = "active"><a href = "blog_admin.php">Blog</a></li>
    <li><a href = "event_admin.php">Event</a></li>			
</ul>		
</div>
<div class = "alert alert-info">Blog Dashboard</div>
<div class="container">
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Comment</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <h2>Comment Table</h2>
                <?php
                include('config.php');

                //table_name
                $ref_table_comments = "comments";
                $fetchdata_comments = $database->getReference($ref_table_comments)->getValue();

                
                if ($fetchdata_comments >0) 
                {
                    // $i=0;
                    foreach ($fetchdata_comments as $key => $row) 
                    {
                        // $i++;
                        ?>
                        <tr>
                            <!-- <td><?=$i ?></td> -->
                            <td><?= $row['name']; ?></td>
                            <td><?= $row['course']; ?></td>
                            <td><?= $row['comment']; ?></td>
                            <td>                            
                                <a href="publish_comments.php?id=<?=$key;?>" class="btn btn-success">PUBLISH</a>
                                
                            </td>
                            <td>
                            <form action="delete_comments.php" method="POST">
                                    <input type="hidden" name="id_key" value="<?=$key;?>">
                                    <button type="submit" name="delete_btn" class="btn btn-danger">DELETE</button>
                            </form>
                            </td>
                        </tr>
                        
                        <?php
                    }
                }
                else
                {
                    ?>
                    <tr>
                        <td colspan="6">No Record Found</td>
                    </tr>
                    <?php
                }

                
            ?>
            </tbody>

            
        </table>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Comment</th>
                    <th>Action</th>
                </tr>
            </thead>

        <tbody>
            <h2>Publication Table</h2>
                <?php
                include('config.php');
                $ref_table_publication = "publication";
                $fetchdata_publication = $database->getReference($ref_table_publication)->getValue();


                if ($fetchdata_publication >0) 
                {
                    // $i=0;
                    foreach ($fetchdata_publication as $key => $row) 
                    {
                        // $i++;
                        ?>
                        <tr>
                            <!-- <td><?=$i ?></td> -->
                            <td><?= $row['name']; ?></td>
                            <td><?= $row['course']; ?></td>
                            <td><?= $row['comment']; ?></td>
                            <td>
                            <form action="delete_publication.php" method="POST">
                                    <input type="hidden" name="id_key" value="<?=$key;?>">
                                    <button type="submit" name="delete_btn" class="btn btn-danger">DELETE</button>
                            </form>
                            </td>
                        </tr>
                        
                        <?php
                    }
                }
                else
                {
                    ?>
                    <tr>
                        <td colspan="6">No Record Found</td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>

        </table>
    </div>
    
</div>
