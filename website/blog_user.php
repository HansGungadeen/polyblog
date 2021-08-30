<?php 

include 'config.php';
include 'authentication.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
    $name = $_POST['name']; // Get Name from form
    $course = $_POST['course']; // Get Email from form
    $comment = $_POST['comment']; // Get Comment from forms

    $sql = "INSERT INTO comments (name, course, comment)
            VALUES ('$name', '$course', '$comment')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Comment added successfully.')</script>";
    } else {
        echo "<script>alert('Comment does not add.')</script>";
    }
}

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

    <link rel="stylesheet" href="blog-user-style.css">
    
    <title>Blog</title>
    
</head>

    <section class="blog">
        
            <section class="blog-header">
                <nav>
                    <a href="index.php"><img src="images/logoPML.png"></a>
                    <div class="nav-links-event" id="navLinks">
                        
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
        <div class="card-body">
        <div class="wrapper">
        <form action="insert_comments.php" method="POST" class="form">
            <div class="row">
                <div class="input-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your Name" required>
                </div>
                <div class="input-group">
                    <label for="course">Course</label></n>
    
                    <select name="course" id="course">
                          <option value="Diploma In Internet of Things">Internet of Things</option>
                          <option value="Diploma In Big Data">Big Data</option>
                          <option value="Diploma In Cyber Security">Cyber Security</option>
                          <option value="Diploma In Interactive & Digital Media">Interactive & Digital Media</option>
                    </select>
                </div>
            </div>
            <div class="input-group textarea">
                <label for="comment">Comment</label>
                <textarea id="comment" name="comment" placeholder="Enter your Comment" required></textarea>
            </div>
            <div class="input-group">
                <button type="submit" name="insert_comment" class="btn btn-primary">Comment</button>
            </div>
        </form>
        <div class="prev-comments">
            <table class="table table-fluid table-hover " id="myTable">
    <thead>
    <tr><th>Name</th><th>Course</th><th>Comment</th></tr>
    </thead>
    <tbody>
    <?php
                include('config.php');

                //table_name
                $ref_table = "publication";
                $fetchdata = $database->getReference($ref_table)->getValue();

                if ($fetchdata >0) 
                {
                    $i=0;
                    foreach ($fetchdata as $key => $row) 
                    {
                        // $i++;
                        ?>
                        <tr>
                            <!-- <td><?=$i ?></td> -->
                            <td><?= $row['name']; ?></td>
                            <td><?= $row['course']; ?></td>
                            <td><?= $row['comment']; ?></td>
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