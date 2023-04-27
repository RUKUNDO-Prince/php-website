<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>COURSE -- UNIVERSITY</title>
</head>
<body>
    <!-- HEADER -->
    <section class="sub-header">
        <nav>
            <a href="index.html"><img src="images/logo.png" alt="logo"></a>
            <div class="nav-links" id="navlinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="course.php">COURSE</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>OUR COURSES</h1>
    </section>

    <!-- COURSE -->
    <section class="course">
        <h1>COURSES WE OFFER</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
        <div class="row">
            <div class="course-col">
                <h3>INTERMEDIATE</h3>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae nostrum excepturi mollitia minus? Iusto cumque praesentium incidunt. Minima rerum tenetur esse, optio doloribus itaque minus error delectus nobis commodi maiores!</P>
            </div>
            <div class="course-col">
                <h3>DEGREE</h3>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam reiciendis magni tempora tenetur, error ad, corporis autem totam similique excepturi deserunt a cupiditate fugiat dolor quo impedit odio, in doloremque.</P>
            </div>
            <div class="course-col">
                <h3>POST-GRADUATION</h3>
                <P>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi cupiditate id sed illo, tenetur repellendus aliquid eaque ut maxime corrupti autem quaerat alias fugiat earum! Repellendus exercitationem nihil eaque consequatur.</P>
            </div>    
        </div>
    </section>

    <!-- FACILITIES -->
    <section class="facilities">
        <h1>OUR FACILITIES</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
        <div class="row">
            <div class="facilities-col">
                <img src="images/library.png" alt="Library">
                <h3>WORLD CLASS LIBRARY</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, placeat in. Doloribus!</p>
            </div>
            <div class="facilities-col">
                <img src="images/basketball.png" alt="Basketball pitch">
                <h3>LARGEST PLAYGROUND</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, placeat in. Doloribus!</p>
            </div>
            <div class="facilities-col">
                <img src="images/cafeteria.png" alt="The cafeteria">
                <h3>TASTY AND HEALTHY FOOD</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, placeat in. Doloribus!</p>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <section class="footer">
        <h4>COURSES</h4>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet tempora voluptate porro corporis quis quisquam,<br> nisi a vero quibusdam dicta commodi dignissimos ipsum totam.</p>
        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
        </div>
        <p>Made with <i class="fa fa-heart"></i> by Prince</p>
    </section>

    <!-- SCRIPT FOR THE TOGGLE MENU -->
    <script>
        const navlinks = document.getElementById("navlinks");
        function showMenu(){
            navlinks.style.right = "0";
        }
        function hideMenu(){
            navlinks.style.right = "-200px";
        }
    </script>
</body>
</html>