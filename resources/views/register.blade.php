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
      * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Basic styles for the login section */
        .login {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
        }

        .container {
            width: 100%;
            max-width: 600px;
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Styles for the form */
        form {
            width: 100%;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        textarea,
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea {
            resize: vertical;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 30px;
            cursor: pointer;
        }

        button:hover {
            background-color: #666;
        }

        .button-register {
          margin-left: 170px;
        }

        .button-register a {
            display: inline-block;
            padding: 15px 10px;
            color: red;
            border: none;
            border-radius: 4px;
            font-weight: bold;
            text-decoration: none;
            align-items: center;
        }

        .button-register a:hover {
            text-decoration: underline;
        }

    </style>

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


    <section class="login">
        
        <div class="container">
            <h2>Sign up</h2>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="name" name="name" placeholder="Enter username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Email address" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Enter password" required>
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <textarea id="address" name="address" placeholder="Enter address" required></textarea>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="number" id="phone" name="phone" placeholder="Enter phone number" required>
                </div>
                <button type="submit">Sign up</button>
                <div class="button-register">
                    <a1>Already have an account?</a1><a href="{{url("login")}}" type="button">Log in</a>
                </div>
            </form>
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