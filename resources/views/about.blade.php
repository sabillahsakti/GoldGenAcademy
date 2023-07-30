<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="Assets/css/style.css">

    <script src='main.js'></script>
    <title>About</title>
</head>

<body>
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
                    <a href="{{ url('') }}">Home</a>
                    <a href="{{ url('about') }}">About</a>
                    <a href="{{ url('courses') }}">Courses</a>
                    <a href="portofolio.html">Portfolio</a>
                    <a href="pricing.html">Pricing</a>
                </div>
            </div>
        </div>

        <div class="aContainer">
            <h2 class="header-h2">About Us</h2>
            <div class="aContainer-Header">
                <p class="header-p">
                    Golden Gen Academy holds strong values to define the company’s vision and mission statement. In hope
                    of
                    developing a sustainable company, values also become an essential fundamental for all Golden Gens
                    involved, including the founders and academics.
                </p>
            </div>

            <div class="aContainer-vm">
                <table class="table-vm">
                    <tbody>
                        <tr class="title-vm">
                            <td>Vision</td>
                            <td>Mission</td>
                        </tr>
                        <tr>
                            <td>
                                <p class="p-bold">Untuk Saling Menginspirasi dan Menyemangati</p>
                                <p class="p-gray">Ketika talenta potensial bersatu membentuk cahaya pembaruan dalam
                                    bidang digital,</p>
                                <p class="p-gray">hasil dan kolaborasi mereka harus bisa menghidupkan serta
                                    menginspirasi banyak orang.
                                </p>
                            </td>
                            <td>
                                <p class="p-bold">Untuk Saling Menemukan</p>
                                <p class="p-gray">Golden Gen Academy mengajak untuk terus mencari esensi,bukan hanya
                                    untuk meraih forma
                                </p>
                                <p class="p-gray">atau output yang terlihat baik. Forma dan substansi harus berjalan
                                    beriringan.</p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="p-bold">Untuk Saling Berproses</p>
                                <p class="p-gray">Golden Gen Academy mendorong untuk tidak hanya mempelajari wawasan dan
                                    teori tapi juga
                                    dapat</p>
                                <p class="p-gray">meneladani proses untuk menjadi landasan dalam membuat.</p>
                                <p class="p-gray">inovasi yang dapat membangun bangsa</p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p class="p-bold">Untuk Saling Terkoneks</p>
                                <p class="p-gray">Ilmu dan pelatihan yang menjadi bagian dari ekosistem Binar Academy
                                    dirancang untuk</p>
                                <p class="p-gray">menghubungkan talenta dengan pakar atau talenta dengan talenta. Dengan
                                    demikian,</p>
                                <p class="p-gray">terciptalah potensi dan kesempatan. Hubungan ini merupakan sebuah
                                    simbiosis yang</p>
                                <p class="p-gray">dilandaskan pada daya saing di era digital.</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="Container-team">
                <h3 class="team-h2">Our Team</h3>
                <div class="aContainer-team">
                    <p class="team-p">
                        Lorem ipsum dolor sit amet. Ut nisi ducimus sit quas soluta 33 deleniti blanditiis est beatae
                        pariatur. Id illum minima qui vitae enim qui aliquid aliquam et debitis quia quo internos
                        tenetur.Rem galisum architecto sed architecto obcaecati 33 eius iste et deleniti modi aut quasi
                        modi.Eum nobis consequatur eum minus
                    </p>
                </div>
                <div class="Container-atable">
                    <table class="atable">
                        <tr class="tr1-atable">
                            <td><img src="Assets/images/cewe.jpg" alt="" class="cewe-img"></td>
                            <td class="td-a1">
                                <h3 class="a1-h2">Lorem ipsum</h3>
                                <p class="team-p">
                                    Lorem ipsum dolor sit amet. Ut nisi ducimus sit quas soluta 33 deleniti blanditiis
                                    est beatae
                                    pariatur. Id illum minima qui vitae enim qui aliquid aliquam et debitis quia quo
                                    internos
                                    tenetur.Rem galisum architecto sed architecto obcaecati 33 eius iste et deleniti
                                    modi aut quasi
                                    modi.Eum nobis consequatur eum minus
                                </p>
                            </td>
                        </tr>
                        <tr class="tr1-atable">
                            <td class="td-a1">
                                <h3 class="a1-h2">Lorem ipsum</h3>
                                <p class="team-p">
                                    Lorem ipsum dolor sit amet. Ut nisi ducimus sit quas soluta 33 deleniti blanditiis
                                    est beatae
                                    pariatur. Id illum minima qui vitae enim qui aliquid aliquam et debitis quia quo
                                    internos
                                    tenetur.Rem galisum architecto sed architecto obcaecati 33 eius iste et deleniti
                                    modi aut quasi
                                    modi.Eum nobis consequatur eum minus
                                </p>
                                <td><img src="Assets/images/cewe.jpg" alt="" class="cewe-img2"></td>
                            </td>
                        </tr>
                        <tr class="tr1-atable">
                            <td><img src="Assets/images/cewe.jpg" alt="" class="cewe-img"></td>
                            <td class="td-a1">
                                <h3 class="a1-h2">Lorem ipsum</h3>
                                <p class="team-p">
                                    Lorem ipsum dolor sit amet. Ut nisi ducimus sit quas soluta 33 deleniti blanditiis
                                    est beatae
                                    pariatur. Id illum minima qui vitae enim qui aliquid aliquam et debitis quia quo
                                    internos
                                    tenetur.Rem galisum architecto sed architecto obcaecati 33 eius iste et deleniti
                                    modi aut quasi
                                    modi.Eum nobis consequatur eum minus
                                </p>
                            </td>
                        </tr>
                    </table>
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
