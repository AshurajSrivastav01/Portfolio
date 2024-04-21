<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap CSS files -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css">
    <!-- bootstrap JS Files  -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- Typed  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="circural-bar.css"> -->

    <!-- AOS Animation Liberary  -->
    <link rel="stylesheet" href="aos-master/dist/aos.css">
    <!-- <link rel="stylesheet" href="aos-master/dist/aos.js"> -->

    <title>Portfolio</title>
</head>
<body>
    <section>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container" style="margin-top: 0rem;">
                <a class="navbar-brand">Ashu Raj Srivastav</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#project" class="nav-link">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a href="#cont" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <hr style="color: gray; margin: 0rem;">
        <div class="container">
            <div class="sec1">
                <div class="right-box">
                    <p class="intro" style="margin-top: 1rem;">Hello I'm</p>
                    <p class="intro" id="txt"></p>
                    <span style="color: white;font-size: 21px;">Enthusiastic web developer with a focus on PHP, dedicated to creating elegant and efficient solutions that bring ideas to life.</span>
                </div>
                <div class="left-box" data-aos="fade-left" data-aos-duration="2000">
                    <img src="img/logo.png" alt="" style="    margin-top: 26px;width: 325px;">
                </div>
            </div>
            <div class="btn">
                <a href="#cont"><input class="btn1" href="#cont" type="button" value="Hire Me"></a>
                <a href="#"><input class="btn2" href="" type="button" value="Download CV"></a>
            </div>
        </div>
        <hr class="container">
        <div class="container second-layer" id="about" data-aos="fade-up" data-aos-duration="3000">
            <div class="img">
                <img src="img/logo2.png" alt="">
            </div>
            <div class="content" id="about">
                <h2>About Me</h2>
                <p>
                    Welcome to my portfolio! I'm a passionate web developer with a strong foundation in both front-end and back-end technologies. My journey in web development began with mastering HTML, CSS, and JavaScript, which I've since expanded upon with frameworks like Bootstrap and libraries like jQuery.
                    On the back end, I specialize in PHP and have experience working with Lumen for building basic APIs. My skills include implementing functionalities such as sending and verifying OTPs, as well as handling CRUD operations on databases.
                    During my six-month internship as a PHP developer, I had the opportunity to apply my knowledge in real-world scenarios, collaborating with clients to make tailored changes to their websites and ensuring their satisfaction with the final product.
                    With a keen eye for detail and a dedication to staying updated with the latest technologies, I strive to deliver clean, efficient, and user-friendly solutions for every project I undertake. Whether it's crafting responsive designs or optimizing back-end performance, I'm committed to exceeding expectations and creating impactful digital experiences.</p>
                    <br><p></p>
            </div>
        </div>
        <hr class="container">
        <!-- IT Skills  -->
        <div class="container skill" data-aos="fade-up" data-aos-duration="3000">
            <h2>IT <span style="color: #6ff2e5;">Skills</span></h2>
            <div class="skill-section">
                <div class="Fe" style="padding: 5px;">
                    <!-- <p style="font-size: 1.5rem; margin-left: 36%; margin-right: 36%;">Font-End</p> -->
                    <div class="bar">
                        <div id="lable">
                            <p>HTML</p>
                            <p>85%</p>
                        </div>
                        <div class="html" style="border: 5px solid #6ff2e5 !important; height: 28px; padding: 3px;">
                            <div class="progress" style="height: 90%; width: 85%;"></div>
                        </div>
                    </div>
                    <br>
                    <div class="bar">
                        <div id="lable">
                            <p>CSS</p>
                            <p>85%</p>
                        </div>
                        <div class="html" style="border: 5px solid #6ff2e5 !important; height: 28px; padding: 3px;">
                            <div class="progress" style="height: 90%; width: 85%;"></div>
                        </div>
                    </div>
                    <br>
                    <div class="bar">
                        <div id="lable">
                            <p>JavaScript</p>
                            <p>85%</p>
                        </div>
                        <div class="html" style="border: 5px solid #6ff2e5 !important; height: 28px; padding: 3px;">
                            <div class="progress" style="height: 90%; width: 85%;"></div>
                        </div>
                    </div>
                    <br>
                    <div class="bar">
                        <div id="lable">
                            <p>Bootstrap</p>
                            <p>85%</p>
                        </div>
                        <div class="html" style="border: 5px solid #6ff2e5 !important; height: 28px; padding: 3px;">
                            <div class="progress" style="height: 90%; width: 85%;"></div>
                        </div>
                    </div>
                    <br>
                    <div class="bar">
                        <div id="lable">
                            <p>Core Java</p>
                            <p>85%</p>
                        </div>
                        <div class="html" style="border: 5px solid #6ff2e5 !important; height: 28px; padding: 3px;">
                            <div class="progress" style="height: 90%; width: 85%;"></div>
                        </div>
                    </div>
                    <br>
                    <div class="bar">
                        <div id="lable">
                            <p>Canva</p>
                            <p>85%</p>
                        </div>
                        <div class="html" style="border: 5px solid #6ff2e5 !important; height: 28px; padding: 3px;">
                            <div class="progress" style="height: 90%; width: 85%;"></div>
                        </div>
                    </div>
                </div>

                <div class="be" style="padding: 5px;" >
                    <!-- <p style="font-size: 1.5rem; margin-left: 36%; margin-right: 36%;">Font-End</p> -->
                    <div class="bar">
                        <div id="lable">
                            <p>PHP</p>
                            <p>85%</p>
                        </div>
                        <div class="html" style="border: 5px solid #6ff2e5 !important; height: 28px; padding: 3px;">
                            <div class="progress" style="height: 90%; width: 85%;"></div>
                        </div>
                    </div>
                    <br>
                    <div class="bar">
                        <div id="lable">
                            <p>SQL</p>
                            <p>85%</p>
                        </div>
                        <div class="html" style="border: 5px solid #6ff2e5 !important; height: 28px; padding: 3px;">
                            <div class="progress" style="height: 90%; width: 85%;"></div>
                        </div>
                    </div>
                    <br>
                    <div class="bar">
                        <div id="lable">
                            <p>Lumen</p>
                            <p>85%</p>
                        </div>
                        <div class="html" style="border: 5px solid #6ff2e5 !important; height: 28px; padding: 3px;">
                            <div class="progress" style="height: 90%; width: 85%;"></div>
                        </div>
                    </div>
                    <br>
                    <div class="bar">
                        <div id="lable">
                            <p>Core Java</p>
                            <p>85%</p>
                        </div>
                        <div class="html" style="border: 5px solid #6ff2e5 !important; height: 28px; padding: 3px;">
                            <div class="progress" style="height: 90%; width: 85%;"></div>
                        </div>
                    </div>
                    <br>
                    <div class="bar">
                        <div id="lable">
                            <p>Off Page SEO</p>
                            <p>85%</p>
                        </div>
                        <div class="html" style="border: 5px solid #6ff2e5 !important; height: 28px; padding: 3px;">
                            <div class="progress" style="height: 90%; width: 85%;"></div>
                        </div>
                    </div>
                    <br>
                    <div class="bar">
                        <div id="lable">
                            <p>Word Press</p>
                            <p>85%</p>
                        </div>
                        <div class="html" style="border: 5px solid #6ff2e5 !important; height: 28px; padding: 3px;">
                            <div class="progress" style="height: 90%; width: 85%;"></div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <!-- Professional Skills  -->
        <div class="container proskills" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" id="project">
            <h2>Professional Skills</h2>
            <p>Here are a few past design projects I've worked on. Want to see more?</p>
            <div class="pskill">
                <?php
                    include_once('circural-bar.php');
                ?>
            </div>
        </div>
        <!-- Project Section  -->
        <div class="container projects" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" id="project">
            <h2>My Projects</h2>
            <p>Here are a few past design projects I've worked on. Want to see more?</p>
            <div class="plist">
                <div class="p1" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img src="img/project-img1.png" alt="Project One" class="image">
                    <div class="imgText">
                        <p class="text"><a href="index.php">Personal Portfolio</a></p>
                    </div>
                </div>
                <div class="p3" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <img src="img/project-img2.png" alt="Project Two" class="image">
                <div class="imgText">
                        <p class="text"><a href="#">Admin Panel <span>(Comming Soon)</span></a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container exp" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <h2>Work Experience</h2>
            <p>Here are a few past design projects I've worked on. Want to see more?</p>
            <div class="exp-content">
                <ul>
                    <li>
                        <h3 style="color:white; font-size: 2.5rem;">Intership (6 Month Internship)</h3>
                        <p style="text-align: start; margin-top: .5rem;">Brandshow Consultancy Services Pvt. Ltd. (12 Oct 2023 To Present)</p>
                        <p style="text-align: start; margin-top: .5rem;">Responsiblities:</p>
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container contact" id="cont">
            <h2>Contact me</h2>
            <p>Here are a few past design projects I've worked on. Want to see more?</p>
            <div class="contact-meta">
                
            </div>
        </div>
    </section>
    <footer>
        <h3>© 2024 All rights reserved | Designed and Developed by <a href="https://www.linkedin.com/in/ashuraj-srivastav-60a60522a/" target="_blank">Ashu Raj Srivastav</a></h3>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var text = document.querySelector('.intro');
        text.classList.add('show');
        typeWriter();
        });

        var i = 0;
        var txt = 'Web Developer';

        function typeWriter() {
            if (i < txt.length) {
                document.getElementById("txt").innerHTML += txt.charAt(i);
                i++;
                setTimeout(typeWriter, 300);
            }
        }
    </script>
    <script src="aos-master/dist/aos.js"></script>
    <script>
        AOS.init({
        easing: 'ease-in-out-sine'
        });
    </script>
</body>
</html>