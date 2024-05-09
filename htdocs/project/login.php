<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
    <style>
        body {
            font-family: Cambria, Georgia, serif;
            background-image: url('JP3.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-color: rgba(255, 255, 255, 0.5);
            margin: 0;
            padding: 0;
            display: flex;
            font-weight: bold;
        }

        h1 {
            background: #00FFFFFF;
            text-align: center;
            color: #02f5ac;
            top: -10px;
            right: 50px;
            font-size: 5rem;
            padding: -2px 1em;
            font-weight: bold;
            cursor: pointer;
            font-family: "Arial Black MT Bold";
        }

        .dashboard-button,
        .menu-button,
        .nf-button {
            position: absolute;
            top: 10px;
            background-color: #27c8a9;
            color: #fff;
            padding: 15px 40px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
        }

        .dashboard-button:hover,
        .menu-button:hover,
        .nf-button:hover {
            background-color: #0a0a0a;
        }

        .dashboard-button {
            left: 10px;
        }

        .menu {
            position: absolute;
            top: 60px;
            left: -200px;
            background-color: #0a0a0a;
            color: #ff4500;
            padding: 10px;
            border-radius: 25px;
            transition: left 0.3s;
        }

        .menu a {
            display: block;
            margin-bottom: 45px;
            color: #fff;
            text-decoration: none;
        }

        .menu a:hover {
            background-color: #02f502;
            padding: 10px;
            border-radius: 25px;
            color: #000;
            padding-left: 40px;
            padding-right: 40px;
        }


        .form-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #00ffff03;; /* Fixed background color */
            padding: 20px;
            border-radius: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: left;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 40px;
            border: 1px solid #ccc;
            
        }

        .form-button {
            background-color: #3eb300;
            color: #fff;
            border: none;
            border-radius: 40px;
            padding: 10px 20px;
            cursor: pointer;
            width: 105px;
            transition: background-color 0.3s ease-in-out;
        }

        .form-button:hover {
            background-color: #555;
        }

        .success-message {
            background-color: #4CAF50;
            color: #fff;
            text-align: center;
            padding: 10px;
            border-radius: 5px;
            margin-top: 20px;
            width: 50%;
            margin-left: 25%;
            display: none;
        }


    </style>
</head>
<body>
<div class="dashboard-button" id="dashboard-button"><i class="fa-solid fa-bars"></i></div>
<div class="menu" id="menu">
    <a href="home.php"><i class="fa-solid fa-house"></i>&nbsp;&nbsp;&nbspHome</a>
    <a href="Login.php" target="_blank"><i class="fa-solid fa-right-to-bracket"></i>&nbsp;&nbsp;&nbspLogin/Signup</a>
    <a href="register.php" target="_blank"><i class="fa-regular fa-user"></i>&nbsp;&nbsp;&nbspNew Registration</a>
    <a href="Q&A.php" target="_blank"><i class="fa-solid fa-question"style="color: #ffffff;">&nbsp;&nbsp;&nbsp</i>Q & A</a>
    <a href="about.php" target="_blank"><i class="fa-solid fa-circle-info"></i>&nbsp;&nbsp;&nbspAbout</a>

</div>
 
<div class="header">
</div>

<form method="post" action="index.php" class="form-container">
<h2>Login</h2>
    <?php include('errors.php'); ?>
    <div class="input-group">
        <br><label><i class="fa-solid fa-user" style="color: #0c0d0d;"></i>  Username :</label></br>
        <input type="text" name="username">
    </div>
    <div class="input-group">
        <br><label><i class="fa-solid fa-key" style="color: #121212;"></i>  Password :</label></br>
        <input type="password" name="password">
    </div>
    <div class="input-group">
    </br>   <a href="index.php" target="_blank"><button type="submit" class="form-button" name="login_user">Login</button>
    </div>
    <p>
        New User? <a href="register.php"> Sign up</a>
    </p>
</form>
 
<script>
    const dashboardButton = document.getElementById('dashboard-button');
    const menu = document.getElementById('menu');
    const loginLink = document.getElementById('login-link');
    const SignupLink = document.getElementById('Signup-link');
    const visitorDetailsLink = document.getElementById('visitor-details-link');
    const loginForm = document.getElementById('login-form');
    const visitorDetailsForm = document.getElementById('visitor-details-form');
    const welcomeMessage = document.getElementById('welcome-message');
   

    dashboardButton.addEventListener('click', () => {
        if (menu.style.left === '0px') {
            menu.style.left = '-200px';
        } else {
            menu.style.left = '0px';
        }
    });

    loginLink.addEventListener('click', () => {
        loginForm.style.display = 'block';
        visitorDetailsForm.style.display = 'none';
    });

    visitorDetailsLink.addEventListener('click', () => {
        visitorDetailsForm.style.display = 'block';
        loginForm.style.display = 'none';
    });

    const aboutLink = document.querySelector('a[href="about.html"]');
    aboutLink.addEventListener('click', () => {
        welcomeMessage.textContent = 'Welcome to my website!';
    });
 </script>
 
<script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
<script src="https://mediafiles.botpress.cloud/556f1531-288a-4202-b0f6-cffcd2a24c65/webchat/config.js" defer></script>

 </body>
</html>
