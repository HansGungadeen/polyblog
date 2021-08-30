<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>About US</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
        <!-----About Us------>
    <section class="about-home">

        <section class="header_about">
            <nav>
                <a href="index.php"><img src="images/logoPML.png"></a>
                <div class="nav-links-about" id="navLinks">
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

        <br>
        <br>
        <br>
        <section class="about">
            <h1>Courses We Offer</h1>
            <p>The mission of polytechnics is to inspire students, nature a broad mindset and carve out 
                professional that lead and <br>transform, fostering growth, harmony and sustainability in
                Mauritius and beyond</p>
    
            <div class="row">
                <br>
                <div class="course-col-about">
                    <h3>Our Vision</h3>
                    <p>To innovate and craft a high-skills eco-system that makes us a world class powerhouse</p>
                </div>
                <br>

                <div class="course-col-about">
                    <h3>Strategic Intent</h3>
                    <p>Transform the higher and technical education sector by challenging assumptions<br> and providing long term solutions 
                        that create skilled and competent industry-focused managers and leaderse</p>
                </div>
                <br>

                <div class="course-col-about">
                    <h3>We Are Epic</h3>
                    <p class="text-top-reduced text-lead">
                        E: Experimental</p>
                     <p class="text-top-reduced text-lead">
                        P: Passion</p>
                     <p class="text-top-reduced text-lead">
                        I: Integrity</p>
                     <p class="text-top-reduced text-lead">
                        C: Co-Creation</p>
                </div>
                <br>

                <div class="course-col-about">
                <h3>Our Values</h3>
                <p>@Polytechnics Mauritius, values go beyond the writings on wall, they embody the life code through <br> which impact
                . Students, teachers, staff and stakeholders come together in this unique<br> concoction of values. They defiine how we
                take every step forward.</p>
                </div>
                <br>

                <div class="course-col-about">
                    <h3>Our Mission</h3>
                    <p>To inspire students, nurture a broad mindset and carve out professionals that lead
                    and transform industry, fostering growth, harmony and sustainability in 
                    Mauritius and beyond.</p>
                </div>
                <br>

                <div class="course-col-about">
                    <h3>Our Culture</h3>
                    <p>Symbols are important. Coming up with new ways of doing things stretches the body and
                        the mind and reinvigorates the spirit. This is why PML is sharply focused
                        on developing culture on and off campus.
                        </p>
                </div>
                <br>
            </div>
            
            <br>
            <br>
        </section>

    </section>

        <!--Footer-->
        <?php
    include ('includes/footer.php');
    ?>
    
    
</body>

</html>