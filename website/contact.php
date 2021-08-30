<?php 

include 'function.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
    $firstname = $_POST['Firstname']; // Get Name from form
    $lastname = $_POST['Lastname'];
    $email = $_POST['email']; // Get Email from form
    $phone = $_POST['phone'];
    $message = $_POST['message']; // Get Comment from form

    $sql = "INSERT INTO contact( firstname ,lastname , email ,phone ,message)
            VALUES ('$firstname', '$lastname', '$email', '$phone','$message')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Message successfully sent.')</script>";
    } else {
        echo "<script>alert('Message have not been sent.')</script>";
    }
}

?>
<html>
    <head>
        <title>Contact Us</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href='custom.css' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="style.css"> 
        <link rel="stylesheet" href="contact-style.css"> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>

    <section class="contact-home">    

        <section class="contact-header">
            <nav>
                <a href="index.php"><img src="images/logoPML.png"></a>
                <div class="nav-links-contact" id="navLinks">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="courses.php">COURSES</a></li>
                        <li><a href="blog_user.php">BLOG</a></li>
                        <li><a href="event_user.php">EVENT</a></li>
                        <li><a href="about_us.php">ABOUT</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
        </section>

        <section class="contact-photo">

            <section class="container-contact">
                <div class="row">
                    <div class="course-col-contact">
                        <h3>Head Office – Reduit Campus </h3>
                        <p>Reduit Triangle, Moka.<br> Telephone: +230 460 0705 <br>Opening Hours: Monday to Friday: <br>8hr30 – 16hr30<br> 
                        <br>Email:<a href="mailto:contact@poly.ac.mu"> contact@poly.ac.mu</a><p></p>
                </div>

                <div class="course-col-contact">
                    <h3>Montagne Blanche Campus</h3>
                    <p>Royal Road Montagne Blanche.<br> Telephone: +230 460 0362 <br> Opening Hours: Monday to Friday: <br>8hr30 – 16hr30<br>
                    <br>Email:<a href="mailto:contact@poly.ac.mu"> contact@poly.ac.mu</a></p>
                </div>

                <div class="course-col-contact">
                    <h3>Pamplemousses Campus</h3>
                    <p>Powder Mill Street, Pamplemousses.<br> Telephone: +230 260 0500 <br> Opening Hours: Monday to Friday: <br>8hr30 – 16hr30<br> 
                    <br>Email:<a href="mailto:contact@poly.ac.mu"> contact@poly.ac.mu</a></p>
    
                </div>

            </section>

            <div class="contact-container">

                <div class="row-contact">
                    <div class="col-lg-9 col-lg-offset-1">
                        <h1>Let's Talk! </h1>
                        <p class="lead">Feel free to contact us by an email or message.</p>

                        <form id="contact-form" method="post" role="form">
                            <div class="messages"></div>
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">Firstname *</label>
                                           <input id="form_name" type="text" name="Firstname" class="form-control" id="name" placeholder="Enter your Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label for="form_lastname">Lastname *</label>
                                        <input id="form_lastname" type="text"  name="Lastname"  class="form-control" id="name" placeholder="Enter your LastName" required>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email *</label>
                                            <input id="email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input id="phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="message">Message *</label>
                                            <textarea id="message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                                                                    </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button name="submit" class="btn btn-success">Send message</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                

                    </div><!-- /.8 -->

                </div> <!-- /.row-->

            </div> <!-- /.container-->
        

            <!--Footer-->
           

    </section>
 <?php
        include ('includes/footer.php');
        ?>  

        </section>

            <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
            

            <script>
            var navLinks = document.getElementById("navLinks")
            function showMenu(){
                navLinks.style.right = "0";
            }
            function hideMenu(){
                navLinks.style.right = "-200px";
            }
            </script>

        </body>
    </html>
