
<link rel="stylesheet" type="text/css" href="./css/style.css">
<script src="./js/script.js"></script>
<script src= "./js/particles.js">
    </script>
     <script src= "./js/app.js">
    </script>
            <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<link rel="shortcut icon" href="<?php echo $root; ?>images/favicon.png" type="image/x-icon">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
<link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@800&family=Montserrat:wght@500&display=swap" rel="stylesheet">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-W591ERMP0D"></script>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-W591ERMP0D');
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<?php
// <!-- start of code for sending mail 
// ============================================= -->
// $name = $email = $phone = $contactNumber = $description ="";
// $status = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['emailID'];
    $phone = $_POST['contactNumber'];
    $Message = $_POST['Message'];

    $secretKey = "6LelBUAaAAAAAACr3mWA7bxXWd8edAmYIy095Pgy";
    $responseKey = $_POST['g-recaptcha-response'];
    $userIP = $_SERVER['REMOTE_ADDR'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";

    $response = file_get_contents($url);
    $response = json_decode($response);


    if($response -> success){
        if (empty($name) || empty($email) || empty($phone) || empty($Message) )
        {
            echo '<script>alert("Please fill all fields.")</script>';
        }
        else {
            $message = '<h2>Appointment Details from '.$name.' Submitted</h2>
            <p><b>Name :</b> '.$name.'</p>
            <p><b>Email :</b> '.$email.'</p>
            <p><b>Contact Number :</b> '.$phone.'</p>
            <p><b>Message :</b> '.$Message.'</p>';

            $to = "specslab.in@gmail.com";
            $subject = "Appointment Details from ".$name.".";

            $header = "From: $name<$email>\r\n";
            $header .= "MIME-version:1.0 \r\n";
            $header .="Content-type:text/html\r\n";

            if (mail($to, $subject, $message, $header)) {
                echo '<script>alert("Message sent, thank you for contacting us!")</script>';
                $name = $email = $phone = $Message ="";
            }
            else {
                echo '<script>alert("Something went wrong, please try again.")</script>';
            }
        }
    }
    else{
        echo '<script>alert("Please Fillup the Captcha and Try Again!")</script>';
      }
}                      

// <!-- end of code for sending mail
// ============================================ -->
?>



<!-- header  -->
    <div style="background-color: white;" id="myHeader">
        <div class="container">
            <div class="header" >
                <div class="header-logo">
                    <a href="./"><img src="./images/m.svg" alt=""></a>
                </div>
                <div class="links">
                    <nav>
                        <ul>
                            <li><a href="#about-us">About Us</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#key-features">Key Features</a></li>
                            <li><a href="#brands-we-carry">Brands We Carry</a></li>
                            <li><a href="#gallery">Gallery</a></li>
                            <!-- <li><a href="">Blogs</a></li> -->
                            <li>
                                <div class="appointment">
                                    <button id="myBtn">Book An Appointment</button>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- side-nav -->
                <div id="mySidenav" class="sidenav" >
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="#about-us" onclick="closeNav()">About US</a>
                    <a href="#services" onclick="closeNav()">Services</a>
                    <a href="#key-features" onclick="closeNav()">Key Features</a>
                    <a href="#brands-we-carry" onclick="closeNav()">Brands We Carry</a>
                    <a href="#gallery" onclick="closeNav()">Gallery</a>
                    <!-- <a href="#" onclick="closeNav()">Blogs</a> -->
                    <div class="appointment nav2" style="padding-top: 0.5em; padding-left: 2em">
                        <button id="myBtn2">Book An Appointment</button>
                    </div>
                </div>
                <span class="nav2" style="font-size:30px;cursor:pointer;" onclick="openNav()"><img src="./images/Menu.svg" alt="menu"></span>
            </div>
        </div>
    </div>
    <!-- form  -->
    <div id="myModal" class="modal">
        <div class="modal-content">
        <form class="form" method="POST" enctype="multipart/form-data">
            <div class="form-data">
                <span class="close">&times;</span>
                <h3>Book An Appointment</h3>
                <div>
                    <br><input type="text" size="19" name="name" placeholder="Name" required><br>
                </div>
                <div>
                    <br><input type="email" name="emailID" placeholder="E-mail" required><br>
                </div>
                <div>
                    <br><input type="number" size="12" name="contactNumber" placeholder="Phone" required><br>
                </div>
                <div>
                    <br><textarea name="Message" rows="2" placeholder="Message" required></textarea><br> 
                </div>
            </div>
            <div class="re-captcha">
                <div class="g-recaptcha captcha" data-sitekey="6LelBUAaAAAAAKw-xehgTgDspSa1X9Er_RXlONL_"></div>
            </div>
            <div class="form-bottom">
                <button class="submit" name="submit">Submit</button>
            </div>
        </form>
        </div>
    </div>