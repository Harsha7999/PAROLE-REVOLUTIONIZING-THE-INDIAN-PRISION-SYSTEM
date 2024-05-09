<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
  <title>AboutUs</title>
    <style>
        body {
            background-image: url('about.jpg'); /* Replace 'your-image.jpg' with the path to your image file */
            background-size: cover; /* Adjust as needed */
            background-repeat: no-repeat; /* Prevent image from repeating */
            background-attachment: fixed; /* Keep the background fixed while scrolling */
            color: #fff;
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



    </style>
</head>
<body>
    <div class="dashboard-button" id="dashboard-button"><i class="fa-solid fa-bars"></i></div>
    <div class="menu" id="menu">
        <a href="home.php"><i class="fa-solid fa-house"></i>&nbsp;&nbsp;&nbspHome</a>
        <a href="Login.php" target="_blank"><i class="fa-solid fa-right-to-bracket"></i>&nbsp;&nbsp;&nbspLogin/Signup</a>
        <a href="register.php" target="_blank"><i class="fa-regular fa-user"></i>&nbsp;&nbsp;&nbspNew Registration</a>
        <a href="Q&A.php" target="_blank"><i class="fa-solid fa-question" style="color: #ffffff;">&nbsp;&nbsp;&nbsp</i>Q & A</a>
    
        <a href="about.php" target="_blank"><i class="fa-solid fa-circle-info"></i>&nbsp;&nbsp;&nbspAbout</a>
        <div id="welcome-message">
        
        </div>
    </div>

             <br>
			                                                  
			 </br>
			 </br>
            Welcome to the Undertrial Prisoners Application, an innovative and comprehensive solution designed to streamline and enhance the management of prisons and prisoners within the criminal justice system. Our application suite, developed by NIC, is a cloud-based product with an intuitive user interface and robust security features. It can be easily customized to meet the specific needs of any state prison department, ensuring seamless integration into existing workflows.<br><br>
            
            <strong>Our Mission</strong><br>
            Our mission is to provide a unified platform for efficient and transparent management of prisons and prisoners, enabling prison officials and stakeholders to access real-time information and services. We aim to improve the overall quality of prison management and prisoner welfare by leveraging technology.<br><br>

            <strong>Key Features</strong><br>
            - Cloud-Based Solution: Our application is available as Software as a Service (SaaS) from the NIC Cloud, ensuring high availability, scalability, and robustness.<br>
            - User-Friendly Interface: We have designed our application with an easy-to-use graphical user interface (GUI) to facilitate user adoption.<br>
            - Integration Capabilities: We offer necessary services for seamless integration with other stakeholders in the Criminal Justice System.<br>
            - SMS and Email Alerts: Stay informed with real-time alerts and notifications for various events and activities.<br>
            - Data Quality: Implement authorization checks and validations to ensure data accuracy and integrity.<br><br>

            <strong>Our Products</strong><br>
            1. <em>ePrisons MIS (Management Information System)</em>:<br>
            - Prisoner Information Management System (PIMS)<br>
            - Visitor Management System (eVisitor)<br>
            - Hospital Management System (eHospital)<br>
            - Legal Aid Management System<br>
            - Inventory Management System<br>
            - Prison Management System (PMS)<br>
            - Police Intelligence System<br>
            - Court Monitoring<br>
            - Kiosk Information<br><br>

            2. <em>NPIP (National Prisons Information Portal)</em>:<br>
            - Citizen-centric portal displaying statistical data of various prisons in the country.<br>
            - Online visit request booking for visitors.<br>
            - Grievance submission for concerns related to inmates.<br>
            - Inmate tracking facilities for investigating agencies.<br><br>

            3. <em>Kara Bazaar</em>:<br>
            - A portal showcasing and selling products manufactured by inmates in various prisons across the country.<br><br>

            <strong>Services We Offer</strong><br>
            <em>To the Public:</em><br>
            - Registration of visit requests.<br>
            - Status queries for visit requests.<br>
            - SMS/email alerts for visitors.<br>
            - Submission of grievances.<br>
            - Access to KaraBazaar products.<br><br>

            <em>To the Prisons:</em><br>
            - Controlled registration of prisoners.<br>
            - Tracking prisoner movement and management.<br>
            - Availability of various administrative reports.<br>
            - Graphical and statistical reports for monitoring.<br>
            - Resource optimization for prison management.<br>
            - Alerts for various events (e.g., hearings, parole).<br><br>

            <em>To the Courts:</em><br>
            - Availability of CrPC 436, 436 'A,' and 441 reports.<br>
            - Access to nominal rolls online.<br>
            - Alerts for parole/interim bail return due dates.<br>
            - Access to prisoner information on demand<br><br>

            <em>To the Police and Investigating Agencies:</em><br>
            - Nationwide search for inmates and their profiles.<br>
            - Alert notifications for various events.<br>
            - Reports and statistical data for analysis.<br><br>

            <strong>Visit Request Procedure:</strong><br>
            1. Prospective visitors submit visit details through the registration page.<br>
            2. Visitors receive SMS/email notifications with visit details and approval status.<br>
            3. Visit requests are authenticated by the officer to be visited using eVisitor.<br>
            4. Visitors can inquire about the approval status on the website.<br>
            5. Visitors receive SMS/email updates on visit approval or changes.<br>
            6. Approved visitors receive visitor passes at the reception counter<br><br>

            <strong>Grievance Submission Procedure</strong><br>
            1. Prospective visitors submit grievance details through the grievance page.<br>
            2. Grievance details are submitted, including visitor information and grievance specifics.<br>
            3. Grievances are authenticated by the officer.<br>
            4. Visitors can inquire about the grievance status on the website.<br>
            5. Visitors receive SMS/email updates on grievance status<br><br>

            <strong>Inmate Tracking Procedure:</strong><br>
            - Authorized users, such as police and investigating agencies, can search for inmates in correctional homes.<br>
            - Login credentials are provided to authorized users for database access.<br>
            - Users can search for relatives using login credentials.<br>
            - The application ensures secure and controlled access to inmate data.<br><br>

            Thank you for choosing the Undertrial Prisoners Application for efficient prison management and prisoner welfare. We are committed to enhancing the criminal justice system's effectiveness through technology and innovation.
        </p>
    </div>

    <script>
  const dashboardButton = document.getElementById('dashboard-button');
        const menu = document.getElementById('menu');
        const menuButton = document.getElementById('menu-button');
        const welcomeMessage = document.getElementById('welcome-message');

        dashboardButton.addEventListener('click', () => {
            menu.style.left = menu.style.left === '0px' ? '-200px' : '0px';
        });

        menuButton.addEventListener('click', () => {
            menu.style.left = menu.style.left === '0px' ? '-200px' : '0px';
        });

        document.getElementById("nf-button").addEventListener("click", function() {
            window.open("notification.php", "_blank");
        });

        const aboutLink = document.querySelector('a[href="about.html"]');
        aboutLink.addEventListener('click', () => {
            welcomeMessage.textContent = 'Welcome to my website!';
        });
    </script>
</body>
</html>

	
      