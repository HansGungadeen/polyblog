<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="iot-style.css">

    <title>Poly Blog</title>
</head>
<body>
    
  <section class="iot-header">
    
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
    

  </section>

<!---This is for the IoT Course-->

<section class="iot-container">
    <h1>Internet Of Things (IoT)</h1>
    <div class="row">
        <div class="iot-container-col">
            <img src="images/iot4.jpg">
            <h3>What is IoT</h3>
            <p>The Internet of Things (IoT) is making lives so much easier. 
                Almost all appliances can be now monitored remotely and perhaps even run. 
                In this video on IoT, we explain what IoT is and its working with the help of a simple usecase. Especially if you're new to IoT, 
                then the video gives the core understanding of the subject. .</p>
                <br>
            <a href="https://poly.ac.mu/it-emerging-technologies/diploma-in-internet-of-things/" target="_blank" class="iot-btn">Click Here To Know More</a>
        </div>
        <div class="iot-container-col">
            <iframe width="470" height="310" src="https://www.youtube.com/embed/6mBO2vqLv38" title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h3>A Video About What Is IoT</h3>
            
        </div>
        <div class="iot-container-col">
            <img src="images/iot3.jpg">
            <h3>Career Opportunities In IoT</h3>
            <ul>
                <li>• IoT/Cloud Software Developer</li>
                <br>
                <li>• IoT Infrastructure Architect</li>
                <br>
                <li>• IoT Systems Administrator</li>
                <br>
                <li>• Vulnerability/Cyber Engineer</li>
                <br>
                <li>• Test Engineer</li>
            </ul>
            <br>
            <a href="https://poly.ac.mu/it-emerging-technologies/diploma-in-internet-of-things/" target="_blank" class="iot-btn">Click Here To Know More</a>
        </div>
    </div>
</section>

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