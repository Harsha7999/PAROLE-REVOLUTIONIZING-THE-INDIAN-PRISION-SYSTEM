<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
	<title>Undertrial Prisoners Notification Center</title>
    <style>
/* Reset some default styles */
/* Reset some default styles */
body, h1, p {
    margin: 0;
    padding: 0;
}

/* Global Styles */
body {
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
}
  .dashboard {
      background-color: #333;
      color: #fff;
      width: 200px;
      padding: 20px;
      text-align: center;
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



/* Header Styles */
header {
    background-color:  #301934;
    color: #fff;
    text-align: center;
    padding: 10px 0;


/* Menu Styles */
.menu {
    position: absolute;
    top: 60px;
    left: -200px;
    background-color: #333;
    color: #ff4500;
    padding: 10px;
    border-radius: 5px;
    transition: left 0.3s;
}

.menu a {
    display: block;
    margin-bottom: 30px;
    color: #fff;
    text-decoration: none;
}

.menu a:hover {
    background-color: #0FFF50;
    color: #000;
    padding-left: 40px;
    padding-right: 40px;
}

/* Main Heading Styles */
h1 {
    background: FFFFFF ;
    text-align: center;
    font-size: 30px;
    padding: 5px 1em;
    font-weight: bold;
    margin-left: 15%;
    margin-right: 15%;
    cursor: pointer;
    font-family: "Arial Rounded MT Bold", sans-serif;
    color: #fff;
}

/* Main Content Styles */
.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #301934;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

/* Notification Center Styles */
.notification-container {
    position: fixed;
    top: 0;
    right: -300px;
    width: 300px;
    height: 100%;
    background-color: #301934;
    overflow-y: auto;
    transition: right 0.5s;
    z-index: 1;
}

.notification {
    background-color: #fff;
    padding: 10px;
    margin: 10px;
    border: 1px solid #ccc;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.notification h2 {
    color: #333;
}

.close-btn {
    background-color: #f44336;
    color: #fff;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
    float: right;
}
/* Table Styles */
table {
    width: 100%;
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

th, td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #f2f2f2;
    color: #333;
    font-weight: bold;
}

/* Alternate row background color */
tr:nth-child(even) {
    background-color: #f2f2f2;
}

/* Hover effect on rows */
tr:hover {
    background-color: #e0e0e0;
}

/* Styles for pager */
.pager {
    list-style: none;
    padding: 0;
    display: flex;
    justify-content: center;
}

.pager li {
    margin: 0 5px;
    font-size: 18px;
}

.pager a {
    text-decoration: none;
}

.pager li:first-child::before {
    content: "Previous ";
}

.pager li:last-child::after {
    content: " Next";
}


    </style>
</head>
<body>
    <!-- Dashboard -->
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
    <header>
        <h1>Undertrial Prisoners Notification Center</h1>
    </header>

  
      <div class="view-content">
      <table class="views-table cols-3">
         <thead>
      <tr>
                  <th class="views-field views-field-counter" scope="col">
            S.No.          </th>
                  <th class="views-field views-field-title" scope="col">
            Title          </th>
                  <th class="views-field views-field-php" scope="col">
            Download PDF :         </th>
              </tr>
    </thead>
    <tbody>
          <tr class="odd views-row-first">
                  <td class="views-field views-field-counter">
            1          </td>
                  <td class="views-field views-field-title">
            Notification No.19-2023 dated 14.09.2023 regarding Holding of Courts in Jail on regular basis to take up the cases of Undertrial prisoners.	          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/Notification%2019-2023.pdf" target="_blank">Notification 19-2023.pdf</a>          </td>
              </tr>
          <tr class="even">
                  <td class="views-field views-field-counter">
            2          </td>
                  <td class="views-field views-field-title">
            Notification No. 18-2023 dated 14.09.2023 regarding Holding of Courts in Jail on regular basis to take up the cases of Undertrial prisoners.	          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/Notification%2018-2023.pdf" target="_blank">Notification 18-2023.pdf</a>          </td>
              </tr>
          <tr class="odd">
                  <td class="views-field views-field-counter">
            3          </td>
                  <td class="views-field views-field-title">
            Notification 13-2023 dated 26.06.2023 regarding Holding of Courts in Jail on regular basis to take up the cases of Undertrial Prisoners.          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/Notification%2013-2023.pdf" target="_blank">Notification 13-2023.pdf</a>          </td>
              </tr>
          <tr class="even">
                  <td class="views-field views-field-counter">
            4          </td>
                  <td class="views-field views-field-title">
            Notification No. 06-2023 dated 28.03.2023 regarding Holding of Courts in Jail on regular basis to take up the cases of Undertrial prisoners.	          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/Notification%2006-2023.pdf" target="_blank">Notification 06-2023.pdf</a>          </td>
              </tr>
          <tr class="odd">
                  <td class="views-field views-field-counter">
            5          </td>
                  <td class="views-field views-field-title">
            Notification No. 41-2022 dated 28.12.2022 regarding Holding of Courts in Jail on regular basis to take up the cases of Under Trial Prisoners	          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/Notification%2041-2022.pdf" target="_blank">Notification 41-2022.pdf</a>          </td>
              </tr>
          <tr class="even">
                  <td class="views-field views-field-counter">
            6          </td>
                  <td class="views-field views-field-title">
            Notification No. 40-2022 dated 28.12.2022 regarding Holding of Courts in Jail on regular basis to take up the cases of Under Trial Prisoners	          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/Notification%2040-2022.pdf" target="_blank">Notification 40-2022.pdf</a>          </td>
              </tr>
          <tr class="odd">
                  <td class="views-field views-field-counter">
            7          </td>
                  <td class="views-field views-field-title">
            Holiday &amp; Sunday Court of Metropolitan Magistrates, Mumbai for production of Accused person within 24 Hours.          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/2182-2022_0.pdf" target="_blank">2182-2022.pdf</a>          </td>
              </tr>
          <tr class="even">
                  <td class="views-field views-field-counter">
            8          </td>
                  <td class="views-field views-field-title">
            Regarding Holiday Remand court for producing Juvenile in conflict with Law.          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/2183-2022_0.pdf" target="_blank">2183-2022.pdf</a>          </td>
              </tr>
          <tr class="odd">
                  <td class="views-field views-field-counter">
            9          </td>
                  <td class="views-field views-field-title">
            Notification No. 28-2022 dated 26.09.2022 regarding Holding of Courts in Jail on regular basis to take up the cases of Under-trial Prisoners.	          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/Notification%2028-2022.pdf" target="_blank">Notification 28-2022.pdf</a>          </td>
              </tr>
          <tr class="even">
                  <td class="views-field views-field-counter">
            10          </td>
                  <td class="views-field views-field-title">
            Notification No. 29-2022 dated 26.09.2022 regarding Holding of Courts in Jail on regular basis to take up the cases of Undertrial prisoners.	          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/Notification%20No.%2029-2022.pdf" target="_blank">Notification No. 29-2022.pdf</a>          </td>
              </tr>
          <tr class="odd">
                  <td class="views-field views-field-counter">
            11          </td>
                  <td class="views-field views-field-title">
            Holding of Courts in Jail on regular basis to take up the cases of Undertrial prisoners. Notification No 21-2022 dated 24.06.2022	          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/Notification-21-2022.pdf" target="_blank">Notification-21-2022.pdf</a>          </td>
              </tr>
          <tr class="even">
                  <td class="views-field views-field-counter">
            12          </td>
                  <td class="views-field views-field-title">
            Holding of Courts in Jail on regular basis to take up the cases of Under-trial Prisoners. Notification No 20-2022 dated 24.06.2022	          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/Notification%20-%2020-2022.pdf" target="_blank">Notification - 20-2022.pdf</a>          </td>
              </tr>
          <tr class="odd">
                  <td class="views-field views-field-counter">
            13          </td>
                  <td class="views-field views-field-title">
            Holiday Remand Court for producing Juvenile in conflict with Law . Office Order No 1093-2022 dated 23.06.2022.	          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/1093-2022.pdf" target="_blank">1093-2022.pdf</a>          </td>
              </tr>
          <tr class="even">
                  <td class="views-field views-field-counter">
            14          </td>
                  <td class="views-field views-field-title">
            Holiday &amp; Sunday Court of Metropolitan Magistrates, Mumbai for production of Accused person within 24 Hours. Office Order No 1092-2022 dated 23.06.2022	          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/1092-2022.pdf" target="_blank">1092-2022.pdf</a>          </td>
              </tr>
          <tr class="odd views-row-last">
                  <td class="views-field views-field-counter">
            15          </td>
                  <td class="views-field views-field-title">
            Notification No. 11-2022 dated 24.03.2022 regarding Holding of Courts in Jail on regular basis to take up the case          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/Notification%2011-2022.pdf" target="_blank">Notification 11-2022.pdf</a>          </td>
              </tr>
      </tbody>
</table>
    </div>
  
    <h2>Data from Page 2</h2>
    <div class="view-content">
        <table class="views-table cols-3">
            <thead>
                <tr>
                    <th class="views-field views-field-counter" scope="col">S.No.</th>
                    <th class="views-field views-field-title" scope="col">Title</th>
                    <th class="views-field views-field-php" scope="col">Download PDF :</th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd">
                    <td class="views-field views-field-counter">16</td>
                    <td class="views-field views-field-title">
                        Notification No. 10-2022 dated 24.03.2022 regarding Urgent Bail Applications after Courts Hours APRIL-2022 TO JUNE 2022
                    </td>
                    <td class="views-field views-field-php">
                        <a href="https://districts.ecourts.gov.in/sites/default/files/Notification%2010-2022.pdf" target="_blank">Notification 10-2022.pdf</a>
                    </td>
                </tr>
     
          <tr class="even">
                  <td class="views-field views-field-counter">
            17          </td>
                  <td class="views-field views-field-title">
            URGENT BAIL APPLICATION AFTER COURT HOURS 01.04.2022 TO 30.06.2022          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/Notification%2008-2022.pdf" target="_blank">Notification 08-2022.pdf</a>          </td>
              </tr>
          <tr class="odd">
                  <td class="views-field views-field-counter">
            18          </td>
                  <td class="views-field views-field-title">
            Notification No. 07-2022 dated 19.03.2022 regarding Urgent Bail Application after Court hours from 19.03.2022 to 20.03.2022.          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/Notification%2007-2022.pdf" target="_blank">Notification 07-2022.pdf</a>          </td>
              </tr>
          <tr class="even">
                  <td class="views-field views-field-counter">
            19          </td>
                  <td class="views-field views-field-title">
            Office Order No. 2097-2021 dated 23.12.2021 regarding Holiday and Sunday court of Metropolitan Magistrates Mumbai for production of accused person within 24 hours.          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/2097-2021_0.pdf" target="_blank">2097-2021.pdf</a>          </td>
              </tr>
          <tr class="odd">
                  <td class="views-field views-field-counter">
            20          </td>
                  <td class="views-field views-field-title">
            Notification No. CMM/GC/54/2021 dated 24.12.2021 regarding Holding of courts in jail on regular basis to take up the cases of Under Trial Prisoners.          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/54-2021.pdf" target="_blank">54-2021.pdf</a>          </td>
              </tr>
          <tr class="even">
                  <td class="views-field views-field-counter">
            21          </td>
                  <td class="views-field views-field-title">
            Notification No. CMM/GC/53/2021 dated 24.12.2021 regarding Holding of courts in jail on regular basis to take up the cases of Under Trial Prisoners.           </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/53-2021.pdf" target="_blank">53-2021.pdf</a>          </td>
              </tr>
          <tr class="odd">
                  <td class="views-field views-field-counter">
            22          </td>
                  <td class="views-field views-field-title">
            Notification No. CMM/GC/52/2021 dated 24.12.2021 regarding (JJB) Urgent Bail Applications after court hours.....           </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/52-2021.pdf" target="_blank">52-2021.pdf</a>          </td>
              </tr>
          <tr class="even">
                  <td class="views-field views-field-counter">
            23          </td>
                  <td class="views-field views-field-title">
            Notification No. CMM/GC/50/2021 dated 24.12.2021 regarding Urgent Bail Applications after Court hours on the working days, Sunday and Holidays month wise ......          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/50-2021.pdf" target="_blank">50-2021.pdf</a>          </td>
              </tr>
          <tr class="odd">
                  <td class="views-field views-field-counter">
            24          </td>
                  <td class="views-field views-field-title">
            Notification No.CMM/GC/48/2021 Dated 20.12.2021 regarding Urgent Bail Applications after Court hours.           </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/Notification%2048-2021.pdf" target="_blank">Notification 48-2021.pdf</a>          </td>
              </tr>
          <tr class="even">
                  <td class="views-field views-field-counter">
            25          </td>
                  <td class="views-field views-field-title">
            NOTIFICATION NO. CMM/GC/38/2021 DATED 30.10.2021 regarding Urgent Bail Application after Court Hours from 02.11.2021 to 07.11.2021.          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/Notification%2038-2021.pdf" target="_blank">Notification 38-2021.pdf</a>          </td>
              </tr>
          <tr class="odd">
                  <td class="views-field views-field-counter">
            26          </td>
                  <td class="views-field views-field-title">
            Notification No. CMM/GC/37/2021 dated 22.10.2021 regarding work of Urgent Bail Applications after Court hours.          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/NOTIFICATION%2037-2021.pdf" target="_blank">NOTIFICATION 37-2021.pdf</a>          </td>
              </tr>
          <tr class="even">
                  <td class="views-field views-field-counter">
            27          </td>
                  <td class="views-field views-field-title">
            NOTIFICATION NO. CMM/GC/34/2021 DATED 23.09.2021 REGARDING Holding of Courts in Jail on regular basis to take up the cases of Under-trial Prisoners.          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/NOTIFICATION%2034-2021.pdf" target="_blank">NOTIFICATION 34-2021.pdf</a>          </td>
              </tr>
          <tr class="odd">
                  <td class="views-field views-field-counter">
            28          </td>
                  <td class="views-field views-field-title">
            NOTIFICATION NO. CMM/GC/33/2021 DATED 23.09.2021 REGARDING Holding of Courts in Jail on regular basis to take up the cases of Undertrial Prisoners.          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/NOTIFICATION%2033-2021.pdf" target="_blank">NOTIFICATION 33-2021.pdf</a>          </td>
              </tr>
          <tr class="even">
                  <td class="views-field views-field-counter">
            29          </td>
                  <td class="views-field views-field-title">
            NOTIFICATION NO. CMM/GC/32/2021 DATED 23.09.2021 Regarding The work in respect of bail, remand etc. u/s.80 and 81 of the Cr.P.C.          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/NOTIFICATION%2032-2021.pdf" target="_blank">NOTIFICATION 32-2021.pdf</a>          </td>
              </tr>
          <tr class="odd views-row-last">
                  <td class="views-field views-field-counter">
            30          </td>
                  <td class="views-field views-field-title">
            NOTIFICATION NO. CMM/GC/31/2021 DATED 23.09.2021 REGARDING URGENT BAIL APPLICATIONS after Court hours.          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/NOTIFICATION%2031-2021.pdf" target="_blank">NOTIFICATION 31-2021.pdf</a>          </td>
              </tr>
			             <!-- Add more rows for data from page 2 as needed -->
            </tbody>
        </table>

    </div>
      
</div>
</div>
<div id="block-views-other-links-block-1" class="block block-views otherlink-toggle even">

        <h2 class="block__title block-title">Important Information</h2>
    
  <div class="view view-other-links view-id-other_links view-display-id-block_1 view-dom-id-98b8e7463fa4d2f2168eb63ae268c0f4">
        
  
  
      <div class="view-content">
      <div class="accordion-head">    <ul class="accordion-content">          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Mediation%20Scheme.pdf" target="_blank">The Bombay High Court Mediation Scheme for District  and Taluka Courts and Other Courts </a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/USER%20MANUAL%20OF%20VIDYO.pdf" target="_blank">USER MANUAL OF VIDYO FOR J.O.ADVOCATES (ANDHERI, VIKHROLI, JJB)</a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Circular%2013-2020_0.pdf" target="_blank">Cancellation of Summar Vacation and restoration of normal Court working, in case of lifting lock down 3rd May, 2020 and before 7th June, 2020.</a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/letter%20to%20allow%20staff%201477-2020.pdf" target="_blank">Permission letter to allow staff to travel during lock down</a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/498-2020.pdf" target="_blank">Office Order regarding remand work and other extremely urgent matters that cannot wait beyond one week at Esplanade Centre.</a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Office%20order%20499-2020%20for%20forming%20committee_0.pdf" target="_blank">Constitution of Committee to implement the safeguards to be taken to minimize spread of COVID-19 virus during lockdown period.</a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Select%20Wait%20Lists%20Extn%20lett_0.pdf" target="_blank">Extension to the existing Select/Wait Lists for the posts of Stenographer (L.G.), Junior Clerk and Peon/Hamal prepared in Recruitment Process-2018.</a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/710-2020_0.pdf" target="_blank">Modification in SOP Dated 03.06.2020 regarding attendance of Officers and Staff in the courts in the State of Maharashtra</a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/shift%20duties%20of%20courts_3.pdf" target="_blank">STANDARD OPERATING PROCEDURE DATED 3.06.2020 </a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/CALANDER%202021_0.pdf" target="_blank">Calendar 2021 of Chief Metropolitan Magistrate Courts, Mumbai.</a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/37875_2018_39_1501_24602_Judgement_04-Nov-2020_59.pdf" target="_blank">Circulation of Judgment of Hon'ble Supreme Court in Crl. Appeal No. 730-2020 for awarness and implementation.</a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/E%20INVITATION%20CARD.pdf" target="_blank">E-INVITATION FOR INAUGURATION OF E-SEVA KENDRA AT ESPLANADE CENTRE, MUMBAI.</a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/inauguration-e-seva-kendra-18th-janurary-2021-430-pm-esplanade-centre-mumbai">Inauguration of E-Seva Kendra on 18th Janurary, 2021 at 4.30 pm at Esplanade Centre, Mumbai. </a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/195-2021_1.pdf" target="_blank">OFFICE ORDER OF APPOINTMENT OF PEON/HAMAL AT SR. NO. 46 TO 54 OF SELECT / WAIT LIST</a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/151-2021.pdf" target="_blank">Office Order 151-2021 regarding Newly established five (05) Regional Cyber Police Station in Mumbai for allocation to concern courts w.e.f. 28.01.2021.</a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/19-2021_0.pdf" target="_blank">Notification No. CMM/GC/19/2021 dated 23.06.2021 regarding The work in respect of bail, remand etc. u/s. 80 and 81 of the Cr. P.C.</a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/20-2021_2.pdf" target="_blank">Notification No CMM/GC/20/2021 dated 23.06.2021 regarding Urgent Bail Applications after court hours.</a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/1245-2021_0.pdf" target="_blank">Office Order of appointment of Peon/Hamal Sr No 58 to 61 of Select/Wait list</a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/2059-2021.pdf" target="_blank">Office Order No. 2059-2021 dated 20.12.2021 regarding Holiday Remand Court for producing Juvenile in conflict with Law....</a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/50-2021_0.pdf" target="_blank">Notification No. CMM/GC/50/2021 dated 24.12.2021 regarding Urgent Bail Applications after Court hours on the working days, Sunday and Holidays month wise ......</a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/52-2021_0.pdf" target="_blank">Notification No. CMM/GC/52/2021 dated 24.12.2021 regarding (JJB) Urgent Bail Applications after court hours.....</a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/53-2021_0.pdf" target="_blank">Notification No. CMM/GC/53/2021 dated 24.12.2021 regarding Holding of courts in jail on regular basis to take up the cases of Under Trial Prisoners.</a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/54-2021_0.pdf" target="_blank">Notification No. CMM/GC/54/2021 dated 24.12.2021 regarding Holding of courts in jail on regular basis to take up the cases of Under Trial Prisoners.</a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/2097-2021.pdf" target="_blank">Office Order No. 2097-2021 dated 23.12.2021 regarding Holiday and Sunday court of Metropolitan Magistrates Mumbai for production of accused person within 24 hours.</a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/CALANDER%202022_0.pdf" target="_blank">Calendar 2022 of Chief Metropolitan Magistrate Courts, Mumbai.</a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Notification%2007-2022_0.pdf" target="_blank">Notification No. 07-2022 dated 19.03.2022 regarding Urgent Bail Application after Court hours from 19.03.2022 to 20.03.2022.</a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Revised%20433-2022.pdf" target="_blank">Holiday and Sunday Court of Metropolitan Magistrates Court,  Mumbai for production of Accused person within 24 hours</a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/CALENDAR%20CMM%202023.pdf" target="_blank">Calendar for the Year 2023 of Chief Metropolitan Magistrate Courts, Mumbai.</a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/2183-2022.pdf" target="_blank">Regarding Holiday Remand court for producing Juvenile in conflict with Law.</a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/2182-2022.pdf" target="_blank">Holiday &amp; Sunday Court of Metropolitan Magistrates, Mumbai for production of Accused person within 24 Hours.</a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/910-2023.pdf" target="_blank">Office Order No. 910-2023 dated 28.03.2023 regarding Holiday and Sunday Court of Metropolitan Magistrates, Mumbai for production of Accused person within 24 Hours.	</a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/911-2023.pdf" target="_blank">Office Order No. 911-2023 dated 28.03.2023 regarding Holiday Remand Court for producing Juvenile in conflict with Law.	</a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/1042-2023_11zon_1.pdf" target="_blank">CONCESSION LEAVE - Grant of - To the Addl. Chief Metropolitan Magistrates &amp; Metropolitan Magistrate Gr. Mumbai, during the ensuing Summer Vacation -2023.	</a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/1524-2023.pdf" target="_blank">Officer Order No. 1524-2023 dated 26.06.2023 regarding Holiday &amp; Sunday Court of Metropolitan Magistrates, Mumbai for production of Accused person within 24 Hours.</a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Small%20Cause%20Court%20Tender%20Notice.pdf" target="_blank">Tender Notice of Small Cause Court Mumbai regarding Purchase of 2 new 24 port Manageable Network Switches and 6 New 24 Port unmanageable Network Switches for Head Office and Bandra Branch.</a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Office%20Order%202014-2023_compressed.pdf" target="_blank">Office Order No. 2014-2023 dated 14.09.2023 regarding Holiday and Sunday Court of Metropolitan Magistrates, Mumbai  for production of accused person within 24 hrs.</a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/efilling%2042-2023.pdf" target="_blank">e-filing for case types (civil and criminal) manadatory from 09/01/2023 and 02/02/2023 for the District and Taluka Courts in the State of Maharashtra and Goa....	</a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Instruction%20of%20E-filling%20Process.pdf" target="_blank">Instruction of How to process E-filling.</a>  </li>
          <li class="">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/16-2013-2023_compressed.pdf" target="_blank">Holiday Remand Court for Producing Juvenile in Conflict with Law</a>  </li>
      </ul></div>    </div>
  
  
  
  
  
  
</div>
</div>
<div id="block-block-6" class="block block-block last odd">

</div>
  </div>
			  </div>
												
			<div class="main">
				 
				 <div class="clearfix"></div>
					
										<div class="breadcrumb">
														 
							 
							 
						</div>
						

				
					
				
																									


<div class="panel-display panel-1col clearfix">
  <div class="panel-panel panel-col">
    <div><div class="panel-pane pane-views pane-notifications">
  
        <h2 class="pane-title">Notifications</h2>
    
  
  <div class="view view-notifications view-id-notifications view-display-id-block view-dom-id-84e49787f743bd555a1982332cc5fe90">
        
  
  
      <div class="view-content">
      <table class="views-table cols-3">
         <thead>
      <tr>
                  <th class="views-field views-field-counter" scope="col">
            S.No.          </th>
                  <th class="views-field views-field-title" scope="col">
            Title          </th>
                  <th class="views-field views-field-php" scope="col">
            Download PDF :          </th>
              </tr>
    </thead>
    <tbody>
          <tr class="odd views-row-first">
                  <td class="views-field views-field-counter">
            31          </td>
                  <td class="views-field views-field-title">
            Notification No. CMM/GC/30/2021 dated 23.09.2021 regarding URGENT BAIL APPLICATION after Court hours on the working days, Sunday and Holidays Month-wise......          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/Notification%2030-2021.pdf" target="_blank">Notification 30-2021.pdf</a>          </td>
              </tr>
          <tr class="even">
                  <td class="views-field views-field-counter">
            32          </td>
                  <td class="views-field views-field-title">
            Holiday Remand Court for Producing Juvenile in conflict with Law ( OCTOBER TO DECEMBER)          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/1496-2021.pdf" target="_blank">1496-2021.pdf</a>          </td>
              </tr>
          <tr class="odd">
                  <td class="views-field views-field-counter">
            33          </td>
                  <td class="views-field views-field-title">
            Office Order 1495-2021 dated 22.09.2021 regarding Holiday &amp; Sunday Court of Metropolitan Magistrates, Mumbai for production of Accused person within 24 Hours.          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/1495-2021.pdf" target="_blank">1495-2021.pdf</a>          </td>
              </tr>
          <tr class="even">
                  <td class="views-field views-field-counter">
            34          </td>
                  <td class="views-field views-field-title">
            Notification No. 18-2021 regarding Due to Prevailing of COVID 19 holding the jail courts on VC to take up the cases of under trial Prisoners.	          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/Notification%2018-2021.pdf" target="_blank">Notification 18-2021.pdf</a>          </td>
              </tr>
          <tr class="odd">
                  <td class="views-field views-field-counter">
            35          </td>
                  <td class="views-field views-field-title">
            Notification No. 23-2021 dated 13.07.2021.	          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/NOTIFICATION%2023-2021.pdf" target="_blank">NOTIFICATION 23-2021.pdf</a>          </td>
              </tr>
          <tr class="even">
                  <td class="views-field views-field-counter">
            36          </td>
                  <td class="views-field views-field-title">
            Urgent Bail Application after courts hours on the working days, Sunday and Holiday Month-wise according to the jurisdiction as shown against their names.          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/Notification%2021-2021.pdf" target="_blank">Notification 21-2021.pdf</a>          </td>
              </tr>
          <tr class="odd">
                  <td class="views-field views-field-counter">
            37          </td>
                  <td class="views-field views-field-title">
            Office Order 999-2021 dated 23.06.2021 regarding Holiday &amp; Sunday Court of Metropolitan Magistrates, Mumbai for production of Accused person within 24 Hours.          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/Office%20Order%20999-2021%281%29.pdf" target="_blank">Office Order 999-2021(1).pdf</a>          </td>
              </tr>
          <tr class="even">
                  <td class="views-field views-field-counter">
            38          </td>
                  <td class="views-field views-field-title">
            Notification No CMM/GC/20/2021 dated 23.06.2021 regarding Urgent Bail Applications after court hours.          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/20-2021_1.pdf" target="_blank">20-2021.pdf</a>          </td>
              </tr>
          <tr class="odd">
                  <td class="views-field views-field-counter">
            39          </td>
                  <td class="views-field views-field-title">
            Notification No. CMM/GC/19/2021 dated 23.06.2021 regarding The work in respect of bail, remand etc. u/s. 80 and 81 of the Cr. P.C.          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/19-2021.pdf" target="_blank">19-2021.pdf</a>          </td>
              </tr>
          <tr class="even">
                  <td class="views-field views-field-counter">
            40          </td>
                  <td class="views-field views-field-title">
            Notification regarding procedure for Accused Production U/sec 80 &amp; 81 Cr.P.C.          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/NOTIFICATION%2013-2021_0.pdf" target="_blank">NOTIFICATION 13-2021.pdf</a>          </td>
              </tr>
          <tr class="odd">
                  <td class="views-field views-field-counter">
            41          </td>
                  <td class="views-field views-field-title">
            Notification regarding procedure for Accused Production U/sec 80 &amp; 81 Cr.P.C.          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/Notification%2009-2021%20%282%29_2.pdf" target="_blank">Notification 09-2021 (2).pdf</a>          </td>
              </tr>
          <tr class="even">
                  <td class="views-field views-field-counter">
            42          </td>
                  <td class="views-field views-field-title">
            Notification No 01-2021 dated 02.01.2021.          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/Notification%20No%2001-2021.pdf" target="_blank">Notification No 01-2021.pdf</a>          </td>
              </tr>
          <tr class="odd">
                  <td class="views-field views-field-counter">
            43          </td>
                  <td class="views-field views-field-title">
            The work in respect of bail, remand etc. u/s. 80 and 81 of the Cr. P.C.          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/Notification%20No%2024-2020.pdf" target="_blank">Notification No 24-2020.pdf</a>          </td>
              </tr>
          <tr class="even">
                  <td class="views-field views-field-counter">
            44          </td>
                  <td class="views-field views-field-title">
            Notification No 23-2020 dated 25.09.2020 regarding Urgent Bail Applications after court hours.          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/Notification%20No%2023-2020.pdf" target="_blank">Notification No 23-2020.pdf</a>          </td>
              </tr>
          <tr class="odd views-row-last">
                  <td class="views-field views-field-counter">
            45          </td>
                  <td class="views-field views-field-title">
             	Office Order regarding Remand of the Juvenile in conflict with law on Sundays and holidays during the Month of October 2020 to December 2020.          </td>
                  <td class="views-field views-field-php">
            <a href="https://districts.ecourts.gov.in/sites/default/files/751-2020.pdf" target="_blank">751-2020.pdf</a>          </td>
              </tr>
      </tbody>
</table>
    </div>

 </div>
  
  </div>
</div>
  </div>
</div>
								</div>
													<div id="sidebar2"><!-- <h2>Right Section Tender, Case Studies etc Links</h2>   -->
								     <div class="region region-right-sidebar">
    <div id="block-views-latest-updates-block-1" class="block block-views marq first odd">

        <h2 class="block__title block-title">Latest Announcements</h2>
    
  <div class="view view-latest-updates view-id-latest_updates view-display-id-block_1 view-dom-id-1bac9a742a20dbb4524f66f4c1591e46">
        
  
  
      <div class="view-content">
      <div class="tickerContainer">    <ul class="ticker" style="overflow: hidden;">          
          
          
          
          <li class="dt" style="margin-top: -50.5px;">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/1007-2021_0.pdf" target="_blank">Office Order of appointment of Junior Clerk (Clerk Typist) Sr No 94 to 98 of Select/Wait list	</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/151-2021_0.pdf" target="_blank">Office Order 151-2021 regarding Newly established five (05) Regional Cyber Police Station in Mumbai for allocation to concern courts w.e.f. 28.01.2021.</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Result%20of%20Lower%20Standard%20Departmental%20Examination%202020%20r.pdf" target="_blank">Result of Lower Standard Departmental Examination 2020 which is held on 13th and 14th February 2021.</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Result%20of%20Higher%20Standard%20Departmental%20Examination%202020%20.pdf" target="_blank">Result of Higher Standard Departmental Examination 2020 which is held on 13th and 14th February 2021.</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/e-invitation-inauguration-e-seva-kendra-esplanade-centre-mumbai">E-INVITATION FOR INAUGURATION OF E-SEVA KENDRA AT ESPLANADE CENTRE, MUMBAI. </a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Auction%20Notice_27.pdf" target="_blank">Auction Notice</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/710-2020.pdf" target="_blank">Modification in SOP Dated 03.06.2020 regarding attendance of Officers and Staff in the courts in the State of Maharashtra</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Select%20Wait%20Lists%20Extn%20lett_1.pdf" target="_blank">Extension to the existing Select/Wait Lists for the posts of Stenographer (L.G.), Junior Clerk and Peon/Hamal prepared in Recruitment Process-2018.</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/addendum%20to%20office%20circular%20%282%29_0.pdf" target="_blank">Addendum to Office Circular</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/shift%20duties%20of%20courts_1.pdf" target="_blank">CIRCULAR REGARDING SHIFT DUTIES</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/shift%20duties%20of%20courts.pdf" target="_blank">CIRCULAR REGARDING SHIFT DUTIES </a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Office%20order%20499-2020%20for%20forming%20committee.pdf" target="_blank">Constitution of Committee to implement the safeguards to be taken to minimize spread of COVID-19 virus during lockdown period.</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Corrigendum%20502-2020_0.pdf" target="_blank">Corrigendum of Office Order No. 498-2020 dated 18.05.2020</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Office%20Circular%20501-2020_0.pdf" target="_blank">Court and Office Working hours for the Judicial Officer and employees</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/NOTIFICATION%20REGARDING%20NIGHT%20BAIL%20%282%29.pdf" target="_blank">NOTIFICATION REGARDING NIGHT BAIL </a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Notification%20to%20allow%20staff.pdf" target="_blank">Letter to allow staff for travelling </a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/NOTIFICATION_REGARDING_REMAND_AND_URGENT_MATTERS_OF_JJB_DONGRI_1.pdf" target="_blank">NOTIFICATION REGARDING REMAND AND URGENT MATTERS OF JJB DONGRI</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/NOTIFICATION_REGARDING_REMAND_AND_URGENT_MATTERS_OF_JJB_DONGRI.pdf" target="_blank">NOTIFICATION REGARDING REMAND AND URGENT MATTERS OF JJB DONGRI </a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/NOTICE%20FOR%20URGENT%20MATTERS%20AT%20ANDHERI%20CENTRES_0.pdf" target="_blank">NOTICE AND PROCEDURE FOR URGENT HEARING AT ANDHERI CENTRE OF COURTS</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Notice%20and%20procedure%20regarding%20the%20Urgent.pdf" target="_blank">NOTICE AND PROCEDURE FOR URGENT HEARING AT ANDHERI CENTRE OF COURTS</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Notice%20and%20Procedure%20for%20Urgent%20Hearing_0.pdf" target="_blank">Notice and Procedure for Urgent hearing</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/1628-2019.pdf" target="_blank">Office Order regarding promotion in the cadre of Assistant Superintendent/Head Cashier/Sr. Clerk/ Head Typist/Record Keeper</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/1627-2019.pdf" target="_blank">Office Order regarding Chaprasi are selected to the post of Hamal</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/1626-2019.pdf" target="_blank">Office Order regarding Stenographer (Lower Grade) is selected for promotion to the post of Stenographer (Higher Grade)</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/1625-2019.pdf" target="_blank">Office Order regarding  Peon is selected for promotion to the post of Naik</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/1624-2019.pdf" target="_blank">Office Order regarding Judicial Clerks are selected for promotion in the Cadre of Assistant Registrar/ Chief Interpreter/Sr. Judicial Clerk/Office Superintendent </a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Lower%20Standard%20Departmental%20Exam%20Result%202019.pdf" target="_blank">Result of Lower Standard Departmental Examination 2019</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Higher%20Standard%20Departmental%20Exam%20Result%202019.pdf" target="_blank">Result of Higher Standard Departmental Examination 2019</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Notice%20and%20application%20for%20empanalment%20on%20Panel%20of%20Mediators%20-compressed-01.pdf" target="_blank">Notice and application for empanalment on Panel of Mediators </a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/1686-2018.pdf" target="_blank">Lower and Higher Standard Departmental Examination 2018 Result.</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/6099-2018.pdf" target="_blank">Stay / Suspension of Central Online Recruitment Process</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Jurisdiction_1.pdf" target="_blank">Jurisdication Of MM Courts</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Notificatin%20No%2005-2018.pdf" target="_blank">Notification regarding holding of Courts in Jail on regular Basis to take up the cases of Under Trial Prisoners </a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Notification%20No%2004-2018.pdf" target="_blank">The Jail Court Duty 2018</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Notification%20No%20115-2017.pdf" target="_blank">Urgent BAIL APPLICATIONS U/sec. 80 &amp; 81 of Cr.P.C. after Court hours</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Class%20IV%20employees%20are%20Granted%20Promotion%20to%20Clerk-Typist.pdf" target="_blank">Class IV are granted promotion to Clerk-Typist </a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/office%20order%20no%201449%20of%202017.pdf" target="_blank">Urgent Bail Application after court hours from 13th October to 22nd October 2017</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Office%20Order%20No%201396-2017.pdf" target="_blank">Appointment Order Of Clerk Typist of Sr no 203 to 220</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Office%20Order%201282%20-%202017.pdf" target="_blank">Holiday Remand Court for producing Juvenile in conflict with Law</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Office%20Order%201281%20-%202017.pdf" target="_blank">Holiday &amp; Sunday Court of Metropolitan Magistrates, Mumbai for production of Accused person within 24 Hours</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Notification%2086%20-%202017.pdf" target="_blank">Urgent Bail Applications U/sec. 80 &amp; 81 of Cr.P.C after Court hours on the working days, Sundays and Holidays Month-wise</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Notification%2085%20-%202017.pdf" target="_blank">Urgent Bail Applications after Court hours</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Notification%2084%20-%202017.pdf" target="_blank">The Work in respect of bail, remand etc. u/s. 80 and 81 of the Cr.P.C.</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Notification%2083%20-%202017.pdf" target="_blank">Holding of Courts in Jail on regular basis to take up the cases of Undertrial prisoners at Thane Central Prison</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Notification%2082%20-%202017.pdf" target="_blank">Notification for Holding of Courts in Jail on regular basis to take up the cases of Undertrial prisoners for Byculla and Arthur Road</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Office%20Order%20No%201195-2017_0.pdf" target="_blank">Urgent Bail Application after Court hours</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Office%20Order%20No%201195-2017.pdf" target="_blank">Urgent Bail Application after Court hours</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/List%20of%20candidates%20selected%20on%20promotion%20for%20the%20post%20of%20Interpreter%20.pdf" target="_blank">LIST OF CANDIDATES SELECTED ON PROMOTION FOR THE POST O F INTERPRETER</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Result%20of%20Higher%20Standard%20Departmental%20Examination%202017.pdf" target="_blank">Result of Higher Standard Departmental Examination 2017</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Result%20of%20Lower%20Standard%20Departmental%20Examination%202017%20.pdf" target="_blank">Result of Lower Standard Departmental Examination 2017  .</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Office%20Order%20600%202017.pdf" target="_blank">Appoint Order of Clerk Typist of Sr No 193, 195 to 202</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/1187-2017.pdf" target="_blank">Approval of Holidays on 04.04.2017 On Account of Ram Navmi  and on 17.08.2017 on Account of Parsi New Year</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Appointment%20Order%20of%20Junior%20Clerk%20of%20Sr%20No%20180%20to%20192.pdf" target="_blank">Appointment order of Jr. Clerks of Sr. No. 180 &amp; 192</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/extension%20to%20wait%20list1.pdf" target="_blank">Extension to select/wait list for Jr.Clerk and Peon for one year...</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/eCommittee%20Newsletter%20-%20November%202016_56.pdf" target="_blank">eCommittee Newsletter - November 2016</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/eCommittee%20Newsletter%20-%20October%202016_92.pdf" target="_blank">eCommittee Newsletter - October 2016</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/eCommittee%20Newsletter%20-%20Aug-Sep%202016_88.pdf" target="_blank">eCommittee Newsletter - Aug-Sep 2016</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/eCommittee%20Newsletter%20-%20July%202016_81.pdf" target="_blank">eCommittee Newsletter - July 2016</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/eCommittee%20Newsletter%20-%20June%202016_45.pdf" target="_blank">eCommittee Newsletter - June 2016</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Result%20of%20Lower%20Standard%20Examination_0.pdf" target="_blank">Result of Lower Standard Departmental Examination Year - 2016</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Result%20of%20Higher%20Standard%20Dept%20Examination.pdf" target="_blank">Result of Higher Standard departmental Examination Year - 2016</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/extension%20to%20wait%20list.pdf" target="_blank">Notice regarding extension to select/wait list for Jr.Clerk and Peon for one year...</a>  </li>
          <li class="dt">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/supreme%20court%20public%20notice.pdf" target="_blank">Public Notice of Hon'ble Supreme Court of India  regarding records Civil Appeals for the years 1986 to 1993 </a>  </li>
      <li class="dt" style="margin-top: 0px;">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Office%20Order%202014-2023_compressed_0.pdf" target="_blank">Office Order No. 2014-2023 dated 14.09.2023 regarding Holiday and Sunday Court of Metropolitan Magistrates, Mumbai  for production of accused person within 24 hrs.</a>  </li><li class="dt" style="margin-top: 0px;">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Small%20Cause%20Court%20Tender%20Notice_0.pdf" target="_blank">Tender Notice of Small Cause Court Mumbai regarding Purchase of 2 new 24 port Manageable Network Switches and 6 New 24 Port unmanageable Network Switches for Head Office and Bandra Branch.</a>  </li><li class="dt" style="margin-top: 0px;">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/1524-2023_0.pdf" target="_blank">Officer Order No. 1524-2023 dated 26.06.2023 regarding Holiday &amp; Sunday Court of Metropolitan Magistrates, Mumbai for production of Accused person within 24 Hours.</a>  </li><li class="dt" style="margin-top: 0px;">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/910-2023_0.pdf" target="_blank">Office Order No. 910-2023 dated 28.03.2023 regarding Holiday and Sunday Court of Metropolitan Magistrates, Mumbai for production of Accused person within 24 Hours.	</a>  </li><li class="dt" style="margin-top: 0px;">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/CALENDAR%20CMM%202023_0.pdf" target="_blank">Calendar for the Year 2023 of Chief Metropolitan Magistrate Courts, Mumbai.</a>  </li><li class="dt" style="margin-top: 0px;">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Help%20Desk%20Notice%2020-09-2022.pdf" target="_blank">Mumbai DLSA Help Desk Notice Dtd:20-09-2022</a>  </li><li class="dt" style="margin-top: 0px;">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/CALANDER%202022.pdf" target="_blank">Calendar 2022 of Chief Metropolitan Magistrate Courts, Mumbai. </a>  </li><li class="dt" style="margin-top: 0px;">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/1849-2021.pdf" target="_blank">Office Order No. 1849-2021 regarding Staff Members presently working as Lower Grade Stenographers are passed in re-test of Marathi Dictation Test to the post of Lower Grade Stenographer.</a>  </li><li class="dt" style="margin-top: 0px;">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/1848-2021.pdf" target="_blank">Office Order No. 1848-2021 regarding Staff Members presently working in Class IV are passed in Marathi and  English Typing Test.</a>  </li><li class="dt" style="margin-top: 0px;">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/1847-2021.pdf" target="_blank">Office Order No. 1847-2021 regarding Staff Members presently working as Clerk-Cum-Typist are passed in re-test of English Typing Test.</a>  </li><li class="dt" style="margin-top: 0px;">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Notification%2038-2021_0.pdf" target="_blank">NOTIFICATION NO. CMM/GC/38/2021 DATED 30.10.2021 regarding Urgent Bail Application after Court Hours from 02.11.2021 to 07.11.2021.</a>  </li><li class="dt" style="margin-top: 0px;">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Higher%20Departmental%20Examination%20result%202021.pdf" target="_blank">Result of Higher  Standard Departmental Examination 2021 which is held on 24th and 25th July, 2021</a>  </li><li class="dt" style="margin-top: 0px;">  
          <a href="https://districts.ecourts.gov.in/sites/default/files/Lower%20Department%20Exam%20Result%202021.pdf" target="_blank">Result of Lower Standard Departmental Examination 2021 which is held on 24th and 25th July, 2021</a>  </li></ul></div>    </div>
  
  
  
  
  
  
</div>
</div>
<div id="block-block-8" class="block block-block even">

</div>
  
  </div>
</div>
  </div>
</div>
    </script>
</body>
</html>
<!-- ... Your HTML code above ... -->

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


        dashboardButton.addEventListener('click', () => {
            if (menu.style.left === '0px') {
                menu.style.left = '-200px';
            } else {
                menu.style.left = '0px';
            }
        });

        const successMessage = document.getElementById('success-message');
        const form = document.querySelector('form');

        form.addEventListener('submit', function (e) {
            e.preventDefault();
            successMessage.style.display = 'block';
        });
        // JavaScript code
        function openNotificationCenter() {
            document.querySelector('.notification-container').style.right = '0';
        }

        function closeNotificationCenter() {
            document.querySelector('.notification-container').style.right = '-300px';
        }

        // Automatically slide in the notification center after 3 seconds (for demonstration)
        setTimeout(function() {
            openNotificationCenter();
        }, 3000);
    </script>
</body>
</html>
