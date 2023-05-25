<!DOCTYPE html>
<?php
//Valori predefinite pentru username si password

$user = '111';
$pass = '222';

//daca cookie-ul pentru username si passowrd este setat
//daca username-ul inregistrat in cookie-uri e egal cu username predefinit
//daca password-ul inregistrat in cookie-uri e egal cu passwordul predefinit

if (isset($_COOKIE['username']) && isset($_COOKIE['password']) && ($_COOKIE['username'] == $user) && ($_COOKIE['password'] == md5($pass))
) {

//redirect catre o alta pagina daca se intrunesc toate conditiile    
    header("dashboard.php");
} else {
    ?>

    <html>

        <head>
            <meta charset="UTF-8">
            <title> Login Page </title>
            <link rel="stylesheet" type="text/css" href="./css/styles.css"> 
        </head>

        <body>

            <div class="main-container">

                <div class="nav-container">

                    <ul>

                        <li><a href="index.php">Home</a></li>
                        |
                        <li><a href="login.php"><b>Login</b></a></li>

                    </ul>

                </div>

                <div class="login-container">

                    <div class="login-center">

                        <h1>Log In</h1>

                        <form name="login" action="process_login.php" method="post">

                            <label>Username: </label>
                            <input type="text" placeholder="Enter Username" name="username" required>

                            <br><br>

                            <label>Password: </label>
                            <input type="password" placeholder="Enter Password" name="password" required>

                            <br><br>

                            <input class="log-in-button" type="submit" name="submit" value="Login">



                        </form>
                    </div>

                </div> 

            </div>

        </body>
    </html>


    <?php
}
?>


