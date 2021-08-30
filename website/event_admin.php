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
            <li ><a href = "blog_admin.php">Blog</a></li>
            <li class = "active"><a href = "event_admin.php">Event</a></li>

            <!--<li><a href="login_user.php">Login</a></li>-->
            <!--<li><a href="register_user.php">Register</a></li>-->
                
        </ul>
        <ul class="nav nav-pills">
            
        </ul>

        <div class="col-md my-3 text-end">
            
        </div>
    </div>

    <div class = "alert alert-info">Events Dashboard</div>

    <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-4">
                        <div class="card-header">
                            <h4>Event Form</h4>
                        </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-6">

                                <form action="event_insert.php" method="POST">
                                    <div class="form-group mb-3">
                                        <label for="">Event Name</label>
                                        <input type="text" name="event_name" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Event Location</label>
                                        <input type="text" name="event_location" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Event Date</label>
                                        <input type="date" name="event_date" id="">
                                    </div>
                                    <div class="form-group mb-3">
                                        <button type="submit" name="event_insert" class="btn btn-primary">Add Event</button>
                                    </div>
                                </form>
                            </div>

                            <h3></h3>
                            <table class="table table-bordered">
                                
                                        <thead>
                                            <tr>
                                                <th>Event Name</th>
                                                <th>Event Location</th>
                                                <th>Event Date</th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include('config.php');

                                            //table_name
                                            $ref_table_comments = "events";
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
                                                        <td><?= $row['event_name'];?></td>
                                                        <td><?= $row['event_location'];?></td>
                                                        <td><?= $row['event_date'];?></td>
                                                        
                                                        <td>
                                                        <form action="events_delete.php" method="POST">
                                                                <input type="hidden" name="id_key" value="<?=$key;?>">
                                                                <button type="submit" name="event_delete" class="btn btn-danger">DELETE</button>
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