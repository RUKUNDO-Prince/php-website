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
        <h1>OUR CERTIFICATES & ONLINE PROGRAMS FOR 2023</h1>
    </section>

    <!-- BLOG PAGE CONTENT -->
    <section class="blog-content">
        <div class="row">
            <div class="blog-left">
                <img src="images/certificate.jpg" alt="Certificates">
                <h2>OUR CERTIFICATES & ONLINE PROGRAMS FOR 2023</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit commodi, quia, quos perspiciatis accusamus non doloremque, nesciunt itaque labore odio maiores aperiam impedit culpa ab minus quod eum libero sequi laudantium maxime praesentium. Laudantium, esse doloremque aliquam soluta autem nemo quas quasi, eligendi laboriosam veritatis ipsam, sapiente eos iure velit.</p>
                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo dolorem sapiente ut impedit eum, quam beatae facilis molestias ratione, quia sit. Ab rerum earum eum dolores ut quidem dolorem amet molestiae. Nesciunt a rem quis nulla illo, iure repellendus, distinctio ratione atque aperiam deserunt ipsa nam! Sint exercitationem rerum impedit.  Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus quos maiores sunt, neque minima asperiores impedit repellat ex consequuntur iure illum doloribus aspernatur odit amet modi praesentium fugiat, rem veritatis consequatur omnis iusto debitis! Voluptate quas deserunt illo necessitatibus, blanditiis ratione numquam maiores esse libero nulla delectus dolore ipsa ut?</p>
                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem mollitia quos exercitationem eaque, perferendis cumque officia pariatur! Doloremque voluptas commodi cum, quaerat itaque voluptates quia nisi fuga consectetur, distinctio minima quas, repudiandae suscipit expedita? Adipisci vel possimus dignissimos sed dolore! Ullam consectetur, quidem delectus sunt rerum harum tempora dignissimos quos.</p>
                <br>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde, consequatur, error voluptates perspiciatis magnam dolore aliquid, perferendis sequi ea excepturi soluta laudantium! Qui sint quis, quam vero ratione minima molestias, adipisci error rem, sapiente molestiae dolorum voluptate dolores soluta cumque aliquid voluptatum? Voluptatibus architecto ratione quaerat odio exercitationem illo deleniti.</p>
                <div class="comment-box">
                    <h2>LEAVE A COMMENT</h2>
                    <form class="comment-form">
                        <input type="text" placeholder="Enter your name">
                        <input type="email" placeholder="Enter your email">
                        <textarea rows="5" placeholder="Your comment..."></textarea>
                        <button type="submit" class="hero-btn red-btn">POST COMMENT</button>
                    </form>
                </div>
            </div>
            <div class="blog-right">
                <h3>POST CATEGORIES</h3>
                <div>
                    <span>Business Analytics</span>
                    <span>21</span>
                </div>
                <div>
                    <span>Data Sciences</span>
                    <span>28</span>
                </div>
                <div>
                    <span>Machine Learning</span>
                    <span>15</span>
                </div>
                <div>
                    <span>Computer Sciences</span>
                    <span>34</span>
                </div>
                <div>
                    <span>AutoCad</span>
                    <span>42</span>
                </div>
                <div>
                    <span>Journalism</span>
                    <span>22</span>
                </div>
                <div>
                    <span>Commerce</span>
                    <span>24</span>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <section class="footer">
        <h4>ABOUT US</h4>
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