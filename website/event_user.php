<?php 
include 'authentication.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

  <!-- JavaScript Source -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>

    <link rel="stylesheet" href="event-user-style.css">
    
    <title>Event</title>
    
</head>

    <section class="event-home">
        
            <section class="event-header">
                            <nav>
                <a href="index.php"><img src="images/logoPML.png"></a>
                <div class="nav-links" id="navLinks">
                  
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="courses.php">COURSES</a></li>
                        <li><a href="blog_user.php">BLOG</a></li>
                        <li><a href="event_user.php">EVENT</a></li>
                        <li><a href="about_us.php">ABOUT</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                        <li><a href="logout_user.php">LOGOUT</a></li>
                    </ul>
                </div>
               
            </nav>
              
            </section>

            <section>
            
            
                <div class="card-body">
                    <div class="wrapper">
                <table class="table table-fluid table-hover " id="myTable">
            <thead>
            <tr><th>Event Date</th><th>Event Name</th><th>Event Location</th></tr>
            </thead>
            <tbody>
                        <?php
                        include('config.php');

                        $ref_table = "events";
                        $fetchdata = $database->getReference($ref_table)->getValue();

                        if ($fetchdata >0) 
                        {
                            $i=0;
                            foreach ($fetchdata as $key => $row) 
                            {
                                ?>
                                <tr>
                                    <td><?= $row['event_date'];?></td>
                                    <td><?= $row['event_name'];?></td>
                                    <td><?= $row['event_location'];?></td>
                                    
                                </tr>

                                <?php
                            }
                        }
                        else {
                            ?>
                            <tr>
                                <td>No Events!</td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        
            </section>
         



        <script>
            $(document).ready( function () {
            $('#myTable').DataTable();
        } );
            </script>
    </section>
        <?php
        include ('includes/footer.php');
    ?>


</html>