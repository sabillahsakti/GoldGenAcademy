<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>

    <link rel="stylesheet" href="Assets/css/style.css">
    <style>
        footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 50px;
        }
        button {
            width: 120px;
        }

        button {
            background-color: #0041E8;
            color: #ffffff;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        button:hover {
            background-color: #0034b3;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="title">
            Digital Creation
        </div>
    
        <div class="menu-container">
            <div class="menu">
                <a href="home.html">Home</a>
                <a href="about.html">About</a>
                <a href="services.html">Services</a>
                <a href="portofolio.html">Portfolio</a>
                <a href="pricing.html">Pricing</a>
            </div>
    
            <div class="ltalk-container">
                <button class="ltalk" onclick="window.location.href ='order.html';">
                    Let's Talk
                </button>
            </div>
        </div>
    </div>

    <div class="services-section">
        <h2>List Courses</h2>
        <p>
            Choose the courses that you want    
        </p>
        
        <div class="service-card">
            @foreach($courses as $course)
            <div class="service">
                <img src="{{ asset($course->image) }}" alt="Course Image">
                <h3>{{ $course->name }}</h3>
                <h5>{{ $course->price }}</h5>
                <button onclick="window.location.href = '{{ route('courses.purchase', $course->id) }}'">Purchases</button>
            </div>
            @endforeach
        </div>
    </div>
</body>
<footer>
    <div class="left-content">
        <h1>Digital Creation</h1>
        <div class="pSingkat">
            <p>
                Prebör domisaning. Kemkastrering. Fagt kaskade. Bist decissa.
                
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
                    <span>digital.creation@gmail.com</span>
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