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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .dropdown {
        position: relative;
        display: inline-block;
    }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>

    <script>
        $(document).ready(function() {
            // Hide the dropdown when clicking outside of it
            $(document).on('click', function(event) {
                if (!$(event.target).closest('.dropdown').length) {
                    $('.dropdown-content').hide();
                }
            });

            // Show/hide the dropdown when clicking on the username button
            $('.dropdown-btn').on('click', function() {
                $('.dropdown-content').toggle();
            });
        });
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
                <a href="{{ url('/')}}">Home</a>
                <a href="{{ url('about') }}">About</a>
                <a href="{{ url('courses') }}">Courses</a>
                <a href="{{ url('testimoni') }}">Testimoni</a>
            </div>

            <div class="ltalk-container">
                @if(session('user'))
                    <div class="dropdown">
                        <button class="ltalk dropdown-btn">{{ session('user')->name }}</button>
                        <div class="dropdown-content">
                            <a href="#">Account Information</a>
                            <a href="{{ route('myCourses') }}">My Courses</a>
                            <a href="{{ route('logout') }}">Logout</a>
                        </div>
                    </div>
                @else
                    <button class="ltalk" onclick="window.location.href ='{{url('login')}}';">
                        Login
                    </button>
                @endif
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
                    <img src="Assets/images/marzuq.jpeg" alt="Landing Page">
                    <div class="daleman">
                        <p class="atasSendiri">"Tidak ada batasan bagi pengetahuan yang dapat Anda peroleh. Teruslah belajar dan Anda akan terus tumbuh."</p>
                        <p class="bawahSendiri">Marzuq Muads, Student</p>
                    </div>
                </div>

                <div class="kotak">
                    <img src="Assets/images/ilham.jpeg" alt="Landing Page">
                    <div class="daleman">
                        <p class="atasSendiri">"Pendidikan adalah kunci untuk membuka pintu kesuksesan. Selangkah demi selangkah, Anda mendekati kesempurnaan."</p>
                        <p class="bawahSendiri">Ilham Riswanda, Student</p>
                    </div>
                </div>
            </div>

            <div class="isi">
                <div class="kotak">
                    <img src="Assets/images/ferdy.jpeg" alt="Landing Page">
                    <div class="daleman">
                        <p class="atasSendiri">"Setiap harapan masa depan terletak di dalam buku-buku yang Anda pelajari hari ini."</p>
                        <p class="bawahSendiri">Ferdiansyah, Student</p>
                    </div>
                </div>

                <div class="kotak">
                    <img src="Assets/images/luna.jpeg" alt="Landing Page">
                    <div class="daleman">
                        <p class="atasSendiri">"Jangan takut gagal, karena kegagalan adalah kesempatan untuk memulai kembali dengan lebih bijaksana.""</p>
                        <p class="bawahSendiri">Nadira Luna, Student</p>
                    </div>
                </div>
            </div>

            <div class="isi">
                <div class="kotak">
                    <img src="Assets/images/dapid.jpeg" alt="Landing Page">
                    <div class="daleman">
                        <p class="atasSendiri">"Ketika Anda merasa frustasi, ingatlah bahwa bahasa baru, keterampilan baru, dan pengetahuan baru sedang menunggu untuk ditemukan."</p>
                        <p class="bawahSendiri">David Albustommy, Student</p>
                    </div>
                </div>

                <div class="kotak">
                    <img src="Assets/images/salman.jpeg" alt="Landing Page">
                    <div class="daleman">
                        <p class="atasSendiri">"Kesempatan tidak datang, ia dibuat. Peluang untuk belajar ada di sekitar kita, manfaatkan dengan baik."</p>
                        <p class="bawahSendiri">Salman, Student</p>
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
