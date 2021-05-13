<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeSchool</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Dark mode toggle button -->
    <div class="modeTogContainer">
        <div id="modTogBg" class="ovel">
            <button id="modTogBtn" class="circle"></button>
        </div>
    </div>

    <!-- Title -->
    <h1>CodeSchool</h1>
    <p>Coding For Better World</p>
    
    <!-- Container -->
    <div class="logContainer">
        
        <!-- Sign in and Sign up tabs -->
        <nav class="navBar">
            <ul>
                <!-- Sign in button -->
                <li class="labelSI isBold"><input type="radio" id="siTogBtn" name="btnTog"><label for="siTogBtn">Sign In</label></li>
                <!-- Sign up button -->
                <li class="labelSU isLight"><input type="radio" id="suTogBtn" name="btnTog"><label for="suTogBtn">Sign Up</label></li>
            </ul>
            <div class="highlightContainer">
                <div id="highlightSI" class="highlightSI"></div>
                <div id="highlightSU" class="highlightSU visHidden"></div>
            </div>
            <div class="line"></div>
        </nav>
        
        <!-- Log In form -->
        <form id="loginForm">
            <div class="inputField">
                <label for="userNameSI">User Name :</label>
                <input type="text">
            </div>
            <div class="inputField">
                <label for="pwSI">Password :</label>
                <input type="password">
            </div>
            <div class="pwField">
                <input type="checkbox" id="rememberSI">
                <label for="rememberSI">Remember Password</label>
            </div>
            <button id="loginBtn">Log In</button>
            <a href="#">Forgot Password</a>
        </form>

        <!-- Sign Up form -->
        <form id="signInForm" action="includes/signup.inc.php" method="POST">
            <div class="inputField">
                <label for="userNameSU">User Name :</label>
                <input type="text" name="uname">
            </div>
            <div class="inputField">
                <label for="emailSU">Email :</label>
                <input type="text" name="uemail">
            </div>
            <div class="inputField">
                <label for="pwSU">Password :</label>
                <input type="password" name="upass">
            </div>
            <button id="signinBtn" type="submit" name="btnSignUp">Sign In</button>
            <div class="googleSU">
                <p>Or sign up using</p>
                <a href="#"><img class="googleIcon" src="sources/google-icon.svg" alt="Google">Google</a>
            </div>
        </form>
    </div>
    <script src="login.js"></script>
    <div class="php">
        <?php
            include "includes/dbh.inc.php";

            // check whether 'signup' included in url
            if(!isset($_GET['signup'])) {
                exit();
            } else {
                // store whatever comes after the 'signup='
                $msg = $_GET['signup'];

                // check msg
                if ($msg == "empty") {
                    echo "<p class='php-error'>Please fill all input fields!</p>";
                } else if ($msg == "invalidemail") {
                    echo "<p class='php-error'>Invalid email!</p>";
                } else if ($msg == "success") {
                    echo "<p class='php-success'>Signed up successfully!</p>";
                }
            }
        ?>
    </div>
</body>
</html>