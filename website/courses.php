<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="course-style.css">
    <link rel="stylesheet" href="style.css">
    
    <title>Poly Blog</title>
</head>
  <body>


<section class="course-header">

        <nav>
            <a href="index.php"><img src="images/logoPML.png"></a>
            <div class="nav-links-course" id="navLinks">
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

<div class="course-container">
    <div class="split left">
    <h1></h1>
    <a href="IoT.php" class="button">Click here to know more</a>
    </div>
    <div class="split right">
        <h1></h1>
        <a href="BigData.php" class="button">Click Here To Know More</a>
    </div>
</div>

</section>
<script src="main.js"></script>

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