<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Info Akun</title>

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

    .btn-change-password {
        display: inline-block;
        padding: 10px 20px;
        margin-top: 10px;
        color: white;
        background-color: #0041E8;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease;
        text-align: center;
    }

    .btn-change-password:hover {
        background-color: #0031b8;
    }

    .button-cp button {
        display: block;
        padding: 15px;
        background-color: #333;
        color: #fff;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        margin-left: 573px;
    }

    .button-cp button:hover {
        background-color: #666;
        /* Darker shade on hover */
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
                        <a href="{{ url('account') }}">Account Information</a>
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

    <div class="IaContainer">
        <div class="isi-ia">
            <div class="bagian-kiri">
                <div class="ket-bagianAtas">
                    <i class="fas fa-user-circle fa-4x" id="userimg"></i>
                    <p class="h4-bagiankiri">{{ $user->name }}</p>
                    <p class="h4-bagiankiri" style="color: gray">{{ $user->email }}</p>

                </div>
            </div>
            <div class="bagian-kanan">
                <p class="p-info">Informasi Akun</p>
                <p style="color: gray" class="p2-info">Manage your personal information, including phonenumber and email
                    address where you can be contatcted</p>
                <div class="isian">
                    <div class="kotakan">
                        <div class="dalemanan">
                            <p class="atas-header">Name</p>
                            <p class="atas-p">{{ $user->name }}</p>
                        </div>
                    </div>

                    <div class="kotakan">
                        <div class="dalemanan">
                            <div class="dalemanan">
                                <p class="atas-header">Address</p>
                                <p class="atas-p">{{ $user->address }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="isian">
                    <div class="kotakan">
                        <div class="dalemanan">
                            <div class="dalemanan">
                                <p class="atas-header">Email</p>
                                <p class="atas-p">{{ $user->email }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="kotakan">
                        <div class="dalemanan">
                            <div class="dalemanan">
                                <div>
                                    <p class="atas-header">Phone</p>
                                </div>
                                <p class="atas-p">{{ $user->phone }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-cp">
                    <button onclick="window.location.href='{{route('changePasswordForm')}}';"
                        class="btn-change-password">
                        Change Password
                    </button>
                </div>
            </div>
        </div>
    </div>

    </div>

    </div>

</body>

</html>