<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testimoni</title>

    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="Assets/css/style.css">

    <script src='main.js'></script>
    <script>
        window.onscroll = function() {
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

<body>
    <div id="scrollBtn" onclick="scrollToTop()">
        &uarr;
    </div>
    <div class="navbar">
        <div class="title">
            GoldGen Academy
        </div>

        <div class="menu-container">
            <div class="menu">
                <a href="/">Home</a>
                <a href="{{ url('about') }}">About</a>
                <a href="{{ url('courses') }}">Courses</a>
                <a href="{{ url('testimoni') }}">Testimoni</a>
            </div>
        </div>
    </div>
    <div class="tContainer">
        <p class="tContainerHeader-h2">GoldGen Academy will make your future bright</p>
        <div class="tContainer-header">
            <p class="tContainerHeader-p">
                More than 1 million people rely on GoldenGen Academy aims to enhance skills and expand knowledge.
            </p>
        </div>
        <div class="tContainer-isi">
            <div class="isi">
                <div class="kotak">
                    <img src="Assets/images/cewehead.jpg" alt="Landing Page">
                    <div class="daleman">
                        <p class="atasSendiri">Lorem ipsum dolor sit amet. Ut nisi ducimus sit quas soluta 33 deleniti blanditiis est beatae
                            pariatur. Id illum minima qui vitae enim qui aliquid aliquam et debitis quia quo internos
                            tenetur.</p>
                        <p class="bawahSendiri">Grace Garey, Student</p>
                    </div>
                </div>

                <div class="kotak">
                    <img src="Assets/images/cewehead.jpg" alt="Landing Page">
                    <div class="daleman">
                        <p class="atasSendiri">"Lorem ipsum dolor sit amet. Ut nisi ducimus sit quas soluta 33 deleniti blanditiis est beatae
                            pariatur. Id illum minima qui vitae enim qui aliquid aliquam et debitis quia quo internos
                            tenetur."</p>
                        <p class="bawahSendiri">Ophelie Lechat, Student</p>
                    </div>
                </div>
            </div>

            <div class="isi">
                <div class="kotak">
                    <img src="Assets/images/cewehead.jpg" alt="Landing Page">
                    <div class="daleman">
                        <p class="atasSendiri">"Lorem ipsum dolor sit amet. Ut nisi ducimus sit quas soluta 33 deleniti blanditiis est beatae
                            pariatur. Id illum minima qui vitae enim qui aliquid aliquam et debitis quia quo internos
                            tenetur."</p>
                        <p class="bawahSendiri">Nir Eyal, Student</p>
                    </div>
                </div>

                <div class="kotak">
                    <img src="Assets/images/cewehead.jpg" alt="Landing Page">
                    <div class="daleman">
                        <p class="atasSendiri">"Lorem ipsum dolor sit amet. Ut nisi ducimus sit quas soluta 33 deleniti blanditiis est beatae
                            pariatur. Id illum minima qui vitae enim qui aliquid aliquam et debitis quia quo internos
                            tenetur."</p>
                        <p class="bawahSendiri">Paul Jarvis, Student</p>
                    </div>
                </div>
            </div>

            <div class="isi">
                <div class="kotak">
                    <img src="Assets/images/cewehead.jpg" alt="Landing Page">
                    <div class="daleman">
                        <p class="atasSendiri">"Lorem ipsum dolor sit amet. Ut nisi ducimus sit quas soluta 33 deleniti blanditiis est beatae
                            pariatur. Id illum minima qui vitae enim qui aliquid aliquam et debitis quia quo internos
                            tenetur."</p>
                        <p class="bawahSendiri">Lawrence Watkins, Student</p>
                    </div>
                </div>

                <div class="kotak">
                    <img src="Assets/images/cewehead.jpg" alt="Landing Page">
                    <div class="daleman">
                        <p class="atasSendiri">"Lorem ipsum dolor sit amet. Ut nisi ducimus sit quas soluta 33 deleniti blanditiis est beatae
                            pariatur. Id illum minima qui vitae enim qui aliquid aliquam et debitis quia quo internos
                            tenetur."</p>
                        <p class="bawahSendiri">Alex Minchin, Student</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
