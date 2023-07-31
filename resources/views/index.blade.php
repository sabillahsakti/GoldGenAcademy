@extends('layout.master')

@section('content')
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
            <button class="sap" onclick="window.location.href ='{{url('recommendation')}}';">
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

@endsection