<?php
session_start();

if(!isset($_SESSION['username'])){
    echo "you are logged in";
    header('login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script language="javascript" type="text/javascript">
    window.history.forward();
    </script>
    <meta charset="UTF-8">
    <title>HomePage</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">    
</head>
<body>
    <header>
    <div class="wrapper">
        <div class="logo">
            <img src="logo.png" alt=""><h3> ENGINEER'S CHOICE </h3>
            
        </div>
<ul class="nav-area">

<li><a href="sgpa.html">Sgpa Calculator</a></li>
<li><a href="index.html">Cgpa Calculator </a></li>
<li><a href="about.html">About</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</div>
<div class="welcome-text">
        <h1>
SGPA/CGPA <span>CALCULATOR</span></h1>

    </div>
</header>

</body>
</html>