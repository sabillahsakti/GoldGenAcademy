<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoldGen Academy</title>

    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="Assets/css/style.css">

    <script src='main.js'></script>

    <style>

    </style>

    <script>
        window.onscroll = function () {
            scrollFunction();
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("scrollBtn").style.display = "block";
            } else {
                document.getElementById("scrollBtn").style.display = "none";
            }
        }

        function scrollToTop() {
            document.body.scrollTop = 0; 
            document.documentElement.scrollTop = 0; 
        }
    </script>
</head>

<body style="background: #FFFFFF;">
    <div id="scrollBtn" onclick="scrollToTop()">
        &uarr;
    </div>
    <div class="navbar">
        <div class="title">
            GoldGen Academy
        </div>

        <div class="menu-container">
            <div class="menu">
                <a href="home.html">Home</a>
                <a href="about.html">About</a>
                <a href="services.html">Courses</a>
                <a href="portofolio.html">Testimoni</a>
            </div>

            <div class="ltalk-container">
                <button class="ltalk" onclick="window.location.href ='order.html';">
                    Login
                </button>
            </div>
        </div>
    </div>

    <section class="tengah">

        <div class="dwu">
            Join Us !
        </div>

        <div class="desc">
            6666 People Have Gotten Jobs From Here
        </div>

        <div class="desc2">
            With Us Get More Opportunities to Get Jobs in Technology
        </div>

        <div>
            <button class="sap">
                Click to Get Course Recommendation
            </button>
        </div>

        <div class="socialMedia">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-linkedin"></i>
        </div>


    </section>

    <section class="partner">
        <div class="tp">
            Trusted Partner
        </div>

        <div class="logoPartner">
            <img src="Assets/images/Microsoft.png" alt="">
            <img src="Assets/images/gmeet.png" alt="">
            <img src="Assets/images/zoom.png" alt="">
        </div>
    </section>

    <div class="ellipse2"></div>

    <section class="courses">
        <div class="tulisan">

            <div class="successP">
                Popular Courses
            </div>
        </div>

        <div class="gambarP">
            <div class="frameKiri">
                <img src="Assets/images/projectimage1.png" alt="">
                <h1>Website Design</h1>
                <p>Lörem ipsum astrobel sar direlig. Kronde est konfoni med kelig. Terabel pov astrobel sar</p>
            </div>

            <div class="frameKanan">
                <div class="fkAtas">
                    <img src="Assets/images/projectimage1.png" alt="">
                    <h1>Website Design</h1>
                    <p>Lörem ipsum astrobel sar direlig. Kronde est konfoni med kelig. Terabel pov astrobel sar</p>
                </div>
                <div class="fkAtas">
                    <img src="Assets/images/projectimage1.png" alt="">
                    <h1>Website Design</h1>
                    <p>Lörem ipsum astrobel sar direlig. Kronde est konfoni med kelig. Terabel pov astrobel sar</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bawah">
        <div class="bgBawah">
            <div class="content">
                <h1>Join Now With Us</h1>
                <p>Our company is a very professional company, with friendly service, modern homes and interest course</p>
            </div>
            <div class="button-container">
                <button>Register</button>
            </div>
        </div>
    </section>

</body>

<footer style="display: flex; align-items: center; justify-content: space-between; padding: 10px 50px;">
    <div class="left-content">
        <h1>GoldGen Academy</h1>
        <div class="pSingkat">
            <p>
                

            </p>
            <div class="smf">
                <i class="fab fa-instagram"></i>
                <i class="fab fa-whatsapp"></i>
                <i class="fab fa-youtube"></i>
                <i class="fab fa-linkedin"></i>
                <i class="fab fa-twitter"></i>
            </div>
        </div>
    </div>

    <div class="right-content">
        <div class="contact">

            <div class="iconContact">
                <h2>Contact</h2>
                <div class="iconItem">
                    <i class="fas fa-phone"></i>
                    <span>(406) 555-0120</span>
                </div>
                <div class="iconItem">
                    <i class="fas fa-envelope"></i>
                    <span>GoldGen.Academy@gmail.com</span>
                </div>
                <div class="iconItem">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Jl. Karang Rejo VII No.9 Wonokromo</span>
                </div>
            </div>
        </div>
    </div>
</footer>


</html>