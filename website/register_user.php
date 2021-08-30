<?php
session_start();
include('includes/header.php');
?>


<link rel="stylesheet" href="register.css">


<section class="home">

<section class="register-header">
        <nav>
            <a href="index.php"><img src="images/logoPML.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="courses.php">COURSES</a></li>
                    <li><a href="register_user.php">BLOG</a></li>
                    <li><a href="register_user.php">EVENT</a></li>
                    <li><a href="about_us.php">ABOUT</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

    </section>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 mt-5">

        <div class="card">
            <div class="card-header">
                <h4>Register</h4>
            </div>
            <!-- <div class="card-header"></div> -->

            <form action="register_user_code.php" method="POST">

            <br>
                <div class="form-group-mb-3">
                    
                    <label for="">Full Name</label>
                    <input type="text" name="fullname" class="form-control">
                </div>

                <br>
                <!-- <div class="form-group mb-3">
                    <label for="">Phone Number</label>
                    <input type="text" name="phone" class="form-control">
                </div> -->

                <div class="form-group-mb-3">
                    <label for="">Email Address</label>
                    
                    <input type="text" name="email" class="form-control">
                </div>

                <br>
                <div class="form-group-mb-3">
                    <label for="">Password</label>
                    
                    <input type="text" name="password" class="form-control">
                </div>

                <br>
                <div class="form-group-mb-3">
                    <button type="submit" name="register_btn" class="btn btn-primary">Register</button>
                </div>

                <br>
                <div class="form-group-mb-3">
                <p class="link"> <a href="login_user.php">Back</a></p>
                </div>
            </form>
        </div>
        </div>
    </div>
    <br>
    <br>
</div>

</section>
