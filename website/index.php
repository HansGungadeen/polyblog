<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--This is the title of the website-->
    <title>Poly Blog</title>

    <!--Add ccs style to html-->
    <link rel="stylesheet" href="style.css">

    <!--Add icon-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<section class="home">
    
    <section class="header">
        <nav>
            <a href="index.php"><img src="images/logoPML.png"></a>
            <div class="nav-links" id="navLinks">
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
        <!-- intro text -->
        <div class="text-box">
            <h1>Mauritius Amazing Campus</h1>
            <p>Polytechnics Mauritius is a campus that offers Higher Education and training programs to students throughout the region. 
                <br>The rich culture and diversity of the island make it an ideal place for students of all different backgrounds to live and study.  
                <br>This approach prepares our students to be innovative, creative, and empowered leaders in the workforce and elsewhere. 
                <br>We invite students from all over the island to apply and pursue a high-quality, cost-effective education.
            </p>
            <a href="https://poly.ac.mu/" target="_blank" class="hero-btn">Visit Us To Know More</a>
        </div>

    </section>

    <!--Course -->
    <section class="course">
        <h1>Courses We Offers</h1>
        <div class="row">
            <div class="course-col">
                <h3>IOT</h3>
                <p>The Internet of Things (IoT) describes the network of physical objects—“things”—that are embedded with sensors, software, and other technologies for the purpose of connecting and exchanging data with other devices and systems over the internet.</p>
            </div>
            <div class="course-col">
                <h3>Big Data</h3>
                <p>Big Data is a collection of data that is huge in volume, yet growing exponentially with time. It is a data with so large size and complexity that none of traditional data management tools can store it or process it efficiently. Big data is also a data but with huge size.</p>
            </div>
        </div>

    </section>

    <!--Campus-->
    <section class="campus">
        <h1>Our Polytechnics Campus</h1>
        <p>Polytechnics Consist Of 3 Campus.</p>

        <div class="row">
            <div class="campus-col">
                <img src="images/RC.jpg" width="575" height="300">
                <div class="layer">
                    <h3>Reduit</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="images/PC.jpg" width="575" height="300">
                <div class="layer">
                    <h3>Pamplemousses</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="images/MBC.jpg" width="575" height="300">
                <div class="layer">
                    <h3>Montagne Blanche</h3>
                </div>
            </div>
        </div>
    </section>

    <!--Facilities-->
    <section class="facilities">
        <h1>Our Facilities</h1>
        <p>The Campus Offer Many Facilities.</p>
        <div class="row">
            <div class="facilities-col">
                <img src="images/lab.jpg">
                <h3>Top Tech IT Lab</h3>
                <P>Polytechnics Campus Offer The Latest Technologies</P>
            </div>
            <div class="facilities-col">
                <img src="images/classroom.jpg">
                <h3>Well Designed Classroom</h3>
                <P>Polytechnics Campus Offer Well Designed Classroom</P>
            </div>
            <div class="facilities-col">
                <img src="images/Canteen.jpg">
                <h3>Tasty & Healty Cafeteria</h3>
                <P>Polytechnics Campus Offer Tasty & Healty Cafeteria</P>
            </div>
        </div>
    </section>

    <!--Testimonials-->
    <section class="testimonials">
        <h1>TESTIMONIALS</h1>
        <p>The Testimonials Of The Students Of Polytechnic</p>

        <div class="row">
            <div class="testimonial-col">
                <img src="images/steven.jpg">
                <div>
                    <p>
                        I thank Polytechnics Mauritius for putting in all the efforts to groom us 
                        and make us corporate professionals. It was a wonderful experience at Polytechnics Mauritius.
                    </p>
                    <h3>Steven Ramasawmy (IT Student)</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
            </div>
            <div class="testimonial-col">
                <img src="images/hans.jpg">
                <div>
                    <p>
                        “Think Different, that is one thing that Polytechnics Mauritius urges in and to far extent succeed in teaching to its students
                        which invariably helps to achieve what you need. 
                        It nourished me and thus gave me an opportunity to define me.
                    </p>
                    <h3>Hans Gungadeen (IT Student)</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
            </div>
            <div class="testimonial-col">
                <img src="images/mangesh.jpg">
                <div>
                    <p>Great experience from Polytechnics Mauritius. You get a lot of opportunities. Work hard to get it. 
                        Be prepared for everything. Maintain your attendance.   
                    </p>
                    <h3>Mangesh Aubeeluck (IT Student)</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
            </div>
            <div class="testimonial-col">
                <img src="images/divesh.jpg">
                <div>
                    <p>My experience at Polytechnics Mauritius is great and memorable. 
                        The teachers and mentors are really helpful and helped me to improve my academic and interpersonal skills.
                    </p>
                    <h3>Divesh Ramrichia (IT Student)</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
            </div>
        </div>
    </section>

    <!--Call to action-->
    <section class="cta">
        <h1>Enroll For Our Various Online Courses<br>Anywhere From The World</h1>
        <a href="https://poly.ac.mu/contact-us/" target="_blank" class="hero-btn">CONTACT</a>
    </section>

    <!--This is gor the footer-->
    <?php
        include ('includes/footer.php');
    ?>


</section> 


  <!--This is for the down to up button-->
  <div class="donwtoup">
    <button onclick="topFunction()" id="myBtn" title="Go to top">^</button>
  </div>

    <!--JavaScript for the Menu-->
    <!--This is for the  hideMenu and showMenu-->
    <script>
        var navLinks = document.getElementById("navLinks")
        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }

    </script>

    <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
    document.documentElement.scrollTop = 0;
    }
    </script>

</body>
</html>