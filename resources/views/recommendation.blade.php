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

        body {
          display: flex;
          flex-direction: column;
          justify-content: space-between;
          min-height: 100vh;
          margin: 0;
          background: #FFFFFF;
        }

    .container {
      background-color: #ffffff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      max-width: 400px;
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: space-between;
      margin: 83px auto;
    }

    .input-wrapper {
      display: flex;
      flex-direction: column;
      margin-bottom: 20px;
      width: 100%;
    }

    label {
      font-size: 16px;
      margin-bottom: 8px;
    }

    input[type="text"] {
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                <a href="{{ url('about') }}">About</a>
                <a href="{{ url('courses') }}">Courses</a>
                <a href="portofolio.html">Testimoni</a>
            </div>

            <div class="ltalk-container">
                @if(session('user'))
                    <div class="dropdown">
                        <button class="ltalk dropdown-btn">{{ session('user')->name }}</button>
                        <div class="dropdown-content">
                            <a href="#">Info akun</a>
                            <a href="#">Daftar kelas</a>
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

    <div class="container">
        <form action="{{ route('submit.recommendation') }}" method="POST">
            @csrf
            <div class="input-wrapper">
                <label for="recommendationInput">Enter your recommendation:</label>
                <textarea name="recommendationInput" id="recommendationInput" rows="4"></textarea>
            </div>
            <button type="submit" id="recommendationButton">Recommendation</button>
        </form>

        @if(isset($results))
        <div class="result">
            <h3>Result:</h3>
            <pre>
                {{ print_r($results) }}
            </pre>
        </div>
        @endif
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