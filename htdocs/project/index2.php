<?php
session_start();

// Initialize the 'username' session variable if it's not set
if (!isset($_SESSION['username'])) {
    $_SESSION['username'] = "";
}

// Check if the user is logged in
if (empty($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index2.php');
}

// Check if the user wants to logout
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index2.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style>
        /* Reset default margin and padding */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f8f8f8;
}

/* Header styles */
.header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px;
}

/* Content styles */
.content {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Notification message styles */
.error.success {
    background-color: #dff0d8;
    border: 1px solid #3c763d;
    color: #3c763d;
    padding: 10px;
    border-radius: 5px;
    text-align: center;
}

/* Logged-in user information styles */
.content p {
    font-size: 18px;
    margin-bottom: 10px;
}

.content p a {
    color: red;
    text-decoration: none;
}

.content p a:hover {
    text-decoration: underline;
}
</style>
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
	Successfully Registered !	
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index2.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>

</body>
</html>