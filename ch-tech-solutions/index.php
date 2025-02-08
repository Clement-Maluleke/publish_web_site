<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/mystyle.css">
    <title>Document</title>
</head>
<body>

   <?php
        include ("includes/head.php");
        include ("includes/navigation.php");

       
   ?>

    <!--main body  -->

    <div class="container">
        <div class="row">
           
            <div class="col-lg-4">

                <div class="picture">
                    <img src="My-picture.jpg" class="rounded-circle">
                </div>
            </div>


            <div class="col-lg-8">
                <div class="intro">
                    <h2>WELCOME TO MY PORTFOLIO</h2>
                <p>Hello! I’m Clement Hlamulu Maluleke, 
                    A BSc graduate in Mathematical Sciences,  and a passionate web developer, data analyst, and cyber security, dedicated to creating innovative solutions and impactful projects. Explore my work, dive into my skills, and learn more about my journey in Web development, Data analytics, and Cybersecurity.
                    Let’s build something great together!
                    </p>

                    <p>I hold a degree from the class of 2023 and have over two years of experience as an ICT trainer. Following this, I completed three months of specialized training in cybersecurity. Currently, I am employed as a Junior Web Developer at Bastion Group.

In addition to my full-time role, I actively engage in data analytics projects during my spare time, having successfully completed multiple analytical initiatives.</p>

                    <button type="button" class="btn btn-link"> PORTFOLIO</button>
                    <button type="button" class="btn btn-link"> CONTACT US</button>
                    <button type="button" class="btn btn-link"> ABOUT US</button>

                </div>
                
            </div>
        </div>

    </div>

    <div class="container">

        <h2>Kindly explore my Projects</h2>
        <div class="row">

            <div class="col-xl-4">
                
                <div class="project-c" >
                        <img  src="MEDIA\Web_Development.png" alt="picture of Web Development">
                        <p class="Col-p"> <a class="Web-p-link">Web Development</a>  </p>
                </div>
            </div>

            <div class="col-xl-4">
                
                <div class="project-c" >
                        <img  src="MEDIA\Data_Analytics.png" alt="picture of data analysis">
                        <p class="Col-p">  <a class="Web-p-link"> Data analysis</a>    </p>
                </div>
            </div>


            <div class="col-xl-4">

                <div class="project-c" >
                        <img  src="MEDIA\CyberSecurity.png" alt="picture of Cybersecurity">
                        <p class="Col-p"> <a class="Web-p-link"> Cybersecurity</a> </p>
                 </div>
        
                
            </div>




        </div>

    </div>


<!--FOOTER--------------------------------------------------------------------->
  <?php
         include ("includes/footer.php")
  ?>

    
</body>
</html>