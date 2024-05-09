<?php
session_start();

// Initialize the 'username' session variable if it's not set
if (!isset($_SESSION['username'])) {
    $_SESSION['username'] = "";
}

// Check if the user is logged in
if (empty($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}

// Check if the user wants to logout
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Prisoner Details</title>
    <style>
        /* Reset default margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styles */
        body {
            font-size: 16px;
            background-color: #F8F8FF;
            font-family: Arial, sans-serif;
        }

        /* Form container styles */
        .form-container {
            width: 45%;
            margin: 25px auto;
            padding: 20px;
            border: 1px solid #040404;
            background: #a4cadd;
            border-radius: 25px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Input group styles */
        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        /* Button styles */
        .btn {
            padding: 10px 20px;
            font-size: 18px;
            color: white;
            background: #5F9EA0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background: #4A8487;
        }

        /* Error message styles */
        .error {
            width: 100%;
            padding: 10px;
            border: 1px solid #a94442;
            color: #a94442;
            background: #f2dede;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        /* Success message styles */
        .success {
            width: 100%;
            padding: 10px;
            border: 1px solid #3c763d;
            color: #3c763d;
            background: #dff0d8;
            border-radius: 5px;
            margin-bottom: 20px;
        }


        /* Home button styles */
.home-button {
    margin-top: 15px;
    text-align: center;
}

.home-button a.btn {
    display: inline-block;
    padding: 10px 20px;
    font-size: 18px;
    color: white;
    background: #6E260E;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
}

.home-button a.btn:hover {
    background: #C19A6B;
}


    </style>
</head>
<body>

<div class="form-container">
    <!-- Prisoner details form -->
    <form>
        <!-- Heading -->
        <h2>Prisoner Details :</h2></br>

        <!-- Display prisoner name and CNR number -->
        <div class="input-group">
            <label for="prisoner_name">Prisoner Name: ShanmukaRao</label>
            <p><?php echo isset($_POST['Shannudaddy']) ? $_POST['Shannudaddy'] : ''; ?></p>
        </div>

        <div class="input-group">
            <label for="prisoner_id">CNR Number: MHAU019999992015</label>
            <p><?php echo isset($_POST['98836373637828']) ? $_POST['98836373637828'] : ''; ?></p>
        </div>

        <!-- Add more form fields as needed -->

        <!-- Home button -->
        <div class="home-button">
            <a href="home.php" class="btn">Go to Home</a>
        </div>
    </form>
</div>

</body>
</html>
