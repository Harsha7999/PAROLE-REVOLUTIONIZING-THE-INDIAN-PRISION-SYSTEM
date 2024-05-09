<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <title>Home page</title>
  <style>
body {
    font-family: Cambria, Georgia, serif;
    background-image: url('jphome7.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-color: rgba(255, 255, 255, 0.5);
    margin: 0;
    padding: 0;
    display: flex;
    font-weight: bold; /* Added bold text */
}


    .dashboard {
      background-color: #333;
      color: #fff;
      width: 200px;
      padding: 20px;
      text-align: center;
    }

    h1 {
      background: 00FFFFFF;
      text-align: evenly;
	  color: #02f5ac;
	  top:-10px;
	  right: 50px;
      font-size: 1rem;
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

    .container {
      display: flex;
      justify-content: space-evenly;
      margin-top: 6rem;
      flex-grow: 1;
    }

    .form {
      background-color: #fff;
      border-radius: 15px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      width: 45%;
      margin-bottom: 20px;
    }

    .form h2 {
      text-align: center;
    }

    .form input[type="text"],
    .form input[type="email"],
    .form input[type="tel"],
    .form select,
    .form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 15px;
    }

    .form button {
      background-color: #333;
      color: #fff;
      border: none;
      border-radius: 25px;
      padding: 10px 20px;
      cursor: pointer;
      width: 100%;
    }

    .nf-button {
      
	  top: -40;
	  right: -1300px;
      background-color: #fc030f;
	   padding: 25px 27px;
      border-radius: 80px;
    }



  </style>
</head>
<body><div class="dashboard-button" id="dashboard-button"><i class="fa-solid fa-bars"></i></div>
    <div class="menu" id="menu">
        <a href="prisoner.html"><i class="fa-solid fa-house"></i>&nbsp;&nbsp;&nbspHome</a>
        <a href="Login.php" target="_blank"><i class="fa-solid fa-right-to-bracket"></i>&nbsp;&nbsp;&nbspLogin/Signup</a>
        <a href="register.php" target="_blank"><i class="fa-regular fa-user"></i>&nbsp;&nbsp;&nbspNew Registration</a>
        <a href="Q&A.html" target="_blank"><i class="fa-solid fa-question" style="color: #ffffff;">&nbsp;&nbsp;&nbsp</i>Q & A</a>
    
        <a href="about.php" target="_blank"><i class="fa-solid fa-circle-info"></i>&nbsp;&nbsp;&nbspAbout</a>
        <div id="welcome-message">
            <a href="notification.php" target="_blank"><button type="button" class="nf-button" id="nf-button"><i class="fa-solid fa-bell fa-shake" style="color: #ffffff;"></i></i></button>
		<a href="https://mediafiles.botpress.cloud/556f1531-288a-4202-b0f6-cffcd2a24c65/webchat/bot.html" target="_blank"><button type="button" class="right-corner-button" id="right-corner-button"><i class="fa-brands fa-rocketchat fa-xl" style="color: #f7f7f7;"></i></i></button>


        </div>
    </div>
<script>
        // Get DOM elements
    document.addEventListener("DOMContentLoaded", function () {
        const dashboardButton = document.getElementById('dashboard-button');
        const menu = document.getElementById('menu');
        const menuButton = document.getElementById('menu-button');
        const welcomeMessage = document.getElementById('welcome-message');
        const nfButton = document.getElementById("nf-button");
        const aboutLink = document.querySelector('a[href="about.php"]');
        const rightCornerButton = document.querySelector('.right-corner-button');

        dashboardButton.addEventListener('click', () => {
            menu.style.left = menu.style.left === '0px' ? '-200px' : '0px';
        });

        menuButton.addEventListener('click', () => {
            menu.style.left = menu.style.left === '0px' ? '-200px' : '0px';
        });

        nfButton.addEventListener("click", function () {
            window.open("notification.html", "_blank");
        });

        aboutLink.addEventListener('click', (e) => {
            e.preventDefault(); // Prevent the default link behavior
            welcomeMessage.textContent = 'Welcome to my website!';
        });

        rightCornerButton.addEventListener('click', () => {
            // Do something when the button is clicked
        });
    });
</script>
<script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
<script src="https://mediafiles.botpress.cloud/556f1531-288a-4202-b0f6-cffcd2a24c65/webchat/config.js" defer></script>
</body>
</html>
