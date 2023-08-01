@extends('layout.master')

@section('content')
<div class="aContainer">
    <h2 class="header-h2">About us</h2>
    <div class="aContainer-Header">
        <p class="header-p">
            GoldGen Academy holds strong values to define the company’s vision and mission statement. In hope
            of developing a sustainable company, values also become an essential fundamental for all Golden Generation
            involved, including the founders and academics.
        </p>
    </div>

    <div class="aContainer-vm">
        <style>
        .aContainer-vm {
            display: flex;
            justify-content: space-between;
            width: 100%;
            max-width: 1000px;
            /* Sesuaikan lebar maksimum container sesuai kebutuhan */
            margin: 0 auto;
            /* Untuk membuat container berada di tengah halaman */
        }

        .table-vm {
            width: 100%;
        }

        .title-vm {
            background-color: #f0f0f0;
            /* Warna latar belakang untuk judul */
            font-weight: bold;
        }

        .title-vm td {
            padding: 10px;
        }

        .title-vm td:first-child {
            border-right: 1px solid #ccc;
            /* Garis vertikal pemisah antara Visi dan Misi */
        }

        .title-vm td:last-child {
            border-left: 1px solid #ccc;
            /* Garis vertikal pemisah antara Visi dan Misi */
        }

        .title-vm td:first-child,
        .title-vm td:last-child {
            text-align: center;
        }

        /* Untuk Visi */
        .visi-container {
            width: 48%;
            /* Lebar container Visi, sesuaikan sesuai kebutuhan */
            padding: 20px;
            border: 1px solid #ccc;
        }

        /* Untuk Misi */
        .misi-container {
            width: 48%;
            /* Lebar container Misi, sesuaikan sesuai kebutuhan */
            padding: 20px;
            border: 1px solid #ccc;
        }

        .p-bold {
            font-weight: bold;
        }

        .p-gray {
            color: #777;
        }
        </style>
        <table class="table-vm">
            <tbody>
                <tr class="title-vm">
                    <td>Vision</td>
                    <td>Mission</td>
                </tr>
                <tr>
                    <td>
                        <p class="p-bold">To Inspire and Encourage Each Other</p>
                        <p class="p-gray">To be a leading and innovative educational learning platform that presents the
                            world of knowledge and education in an inspiring form and empowers individuals from all
                            walks of life to achieve a brighter future.
                        </p>
                    </td>
                    <td>
                        <p class="p-bold">To Discover, Process, Connect</p>
                        <p class="p-gray">GoldGen Academy invites you to continue to seek the essence, not just to
                            achieve form or output that looks good. Form and substance must go hand in hand, and GoldGen
                            Academy encourages active participation in the learning process by providing forums and
                            interactive discussion spaces.</p>
                    </td>

                </tr>
            </tbody>
        </table>
    </div>
    <div class="Container-team">
        <h3 class="team-h2">Our Team</h3>
        <div class="aContainer-team">
            <p class="team-p">
                GoldGen Academy has a team of unique people and specialists in their respective fields. GoldGen Academy
                welcomes talents from all kinds of different backgrounds and this allows us to continue to grow and
                learn from each other.
            </p>
        </div>
        <div class="Container-atable">
            <table class="atable">
                <tr class="tr1-atable">
                    <td>
                        <img src="Assets/images/sabil.jpeg" alt="" class="cewe-img">
                    </td>
                    <td class="td-a1">
                        <h3 class="a1-h2">Sabilah Sakti</h3>
                        <p class="team-p">
                            Saya adalah seorang profesional di bidang Teknologi Informasi dengan gelar sarjana dan
                            pengalaman kerja selama beberapa tahun. Saya memiliki keahlian dan semangat belajar yang
                            tinggi di bidang ini. Selama studi saya di Institut Teknologi Telkom Surabaya, saya telah
                            menyelesaikan mata kuliah yang meliputi Internet of Things, Web Programming, Mobile
                            Programming, Database, dan Data Analysis. Saya percaya bahwa teknologi adalah
                            kunci untuk menciptakan perubahan positif dalam masyarakat dan saya berkomitmen untuk
                            berperan aktif dalam mencapai tujuan tersebut.
                        </p>
                    </td>
                </tr>
                <!-- Add the second team member -->
                <tr class="tr1-atable">
                    <style>
                    .cewe-img,
                    .cewe-img2 {
                        max-width: 100%;
                        height: auto;
                    }
                    </style>
                    <td class="td-a1">
                        <h3 class="a1-h2">Boby Septiananda</h3>
                        <p class="team-p">
                            Saya adalah seorang mahasiswa semester 6 jurusan Teknologi Informasi di Institut Teknologi
                            Telkom Surabaya yang memiliki minat dan
                            aspirasi untuk mengembangkan keterampilan dalam bidang Teknologi Informasi (IT) khususnya di
                            bidang Front End Engineer. Saya mengambil beberapa mata kuliah yang sesuai dengan minat saya
                            seperti Web Programming, Mobile Programming, Data Analysis, dan Internet of Things.
                        </p>
                    </td>
                    <td>
                        <img src="Assets/images/boby.jpeg" alt="" class="cewe-img2">
                    </td>
                </tr>
                <!-- Add the third team member -->
                <tr class="tr1-atable">
                    <style>
                    .cewe-img,
                    .cewe-img2 {
                        max-width: 100%;
                        height: auto;
                    }
                    </style>
                    <td>
                        <img src="Assets/images/andika.jpeg" alt="" class="cewe-img">
                    </td>
                    <td class="td-a1">
                        <h3 class="a1-h2">Andika Putra</h3>
                        <p class="team-p">
                            Saya adalah seorang mahasiswa semester 6 jurusan Teknologi Informasi di Institut Teknologi
                            Telkom Surabaya yang memiliki minat dan aspirasi untuk mengembangkan keterampilan dalam
                            bidang Teknologi Informasi (IT) khususnya di bidang Front End Engineer. Saya Juga memiliki
                            pengalaman yang signifikan sebagai YouTuber dengan saluran yang sukses
                            dan pertumbuhan yang konsisten. Mahir dalam pengeditan video, pemasaran digital, dan
                            analisis data YouTube.
                        </p>
                    </td>
                </tr>
                <!-- Add the fourth team member -->
                <tr class="tr1-atable">
                    <style>
                    .cewe-img,
                    .cewe-img2 {
                        max-width: 100%;
                        height: auto;
                    }
                    </style>
                    <td class="td-a1">
                        <h3 class="a1-h2">Marzuq Muadz</h3>
                        <p class="team-p">
                            Saya adalah seorang mahasiswa semester 6 jurusan Teknologi Informasi di Institut Teknologi
                            Telkom Surabaya. Saya memiliki keterampilan dan keinginan belajar di bidang Teknologi
                            Informasi. Mata kuliah yang sudah saya pelajari meliputi Internet of Things, Web
                            Programming, Mobile Programming, Database, dan Data Analysis.
                            Saya ingin terus mengembangkan diri dan berkontribusi dalam industri Teknologi Informasi.
                        </p>
                    </td>
                    <td>
                        <img src="Assets/images/marzuq2.jpeg" alt="" class="cewe-img2">
                    </td>
                </tr>
                <!-- Add the fifth team member -->
                <tr class="tr1-atable">
                    <style>
                    .cewe-img,
                    .cewe-img2 {
                        max-width: 100%;
                        height: auto;
                    }
                    </style>
                    <td>
                        <img src="Assets/images/radif.jpeg" alt="" class="cewe-img">
                    </td>
                    <td class="td-a1">
                        <h3 class="a1-h2">Muhammad Radif Aftamaulana</h3>
                        <p class="team-p">
                            Saya merupakan seorang mahasiswa semester 4 jurusan Teknologi Informasi di Institut
                            Teknologi Telkom Surabaya.
                            Minat dan aspirasi saya terletak pada pengembangan keterampilan di bidang Teknologi
                            Informasi (IT),
                            khususnya sebagai seorang Front End Engineer. Beberapa mata kuliah yang telah saya ambil dan
                            sesuai dengan minat saya antara lain Web Programming, Mobile Programming, dan Internet of
                            Things.
                        </p>
                    </td>
                </tr>
            </table>
        </div>

        @endsection