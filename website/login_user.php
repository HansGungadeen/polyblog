<?php
session_start();

if (isset($_SESSION['verified_user_id'])) 
{
    $_SESSION['status'] = "You are already Logged In";
    header("Location: home_admin.php");
    exit();
}

include('includes/header.php');
?>

<link rel="stylesheet" href="login.css">

<section class="home">

<section class="login-header">
        <nav>
            <a href="index.php"><img src="images/logoPML.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="courses.php">COURSES</a></li>
                    <li><a href="login_user.php">BLOG</a></li>
                    <li><a href="login_user.php">EVENT</a></li>
                    <li><a href="about_us.php">ABOUT</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>


    </section>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">

            <?php
                if (isset($_SESSION['status']))
                {
                    echo "<h4 class='alert alert-success>".$_SESSION['status']."</h4>";
                    unset($_SESSION['status']);
                }
            ?>

            <div class="card mt-5">
                <div class="card-header">
                    <h4>Login Form</h4>
                </div>
                <div class="card-body">
                    <form action="login_user_code.php" method="POST">

                    <br>
                        <div class="form-group-mb-3">
                            <label for="">Email Address</label>
                            <input type="email" name="email" class="form-control">
                        </div>

                        <br>
                        <div class="form-group-mb-3">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <br>
                        <div class="form-group-mb-3">
                            <button type="submit" name="login_btn" class="btn btn-primary">Login</button>
                        </div>
                        <br>
                         <p class="link">Don't have an account? <a href="register_user.php">Registration Now</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
</div>

</section>
