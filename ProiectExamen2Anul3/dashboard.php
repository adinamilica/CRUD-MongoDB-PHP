

<?php
//loginul predefenit
$user = '111';
$pass = '222';

$welcome_msg;

$cookie_msg;

if (
        (isset($_COOKIE['username'])) && (isset($_COOKIE['password']))
) {

    if (
            ($_COOKIE['username'] != $user) ||
            ($_COOKIE['password'] != md5($pass))
    ) {

        echo "wrong cookie :(( ";
        header("Location: index.php");
    } else {

        //daca totul este bine (a fost activat remember me-ul), il duce la pagina principala
        //$welcome_msg= 'Welcome back ' .$_COOKIE['username'];
        //$cookie_msg='Cookie-ul a fost setat!';
    }
} else {

    // in cazul in care nu s-a activat remember me-ul se duce la index.php
    // nu asta vrem. Pur si simplu logheaza omu intr-o sesiune si gen aia e 
    //header("Location: index.php");
    //$welcome_msg= 'Welcome back '.$user;
    //$cookie_msg='Nu ai optat pentru remember me!';
}
?>

<?php
// Start the session
session_start();

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve the input value from the field
    $inputValue = $_POST['input_field'];

    // Store the input value in a session variable
    $_SESSION['input_value'] = $inputValue;

    // Redirect to another page or process the data
    header('Location: search_results.php');
    exit;
}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Your page</title>
        <link rel="stylesheet" type="text/css" href="./css/dashboard_styles.css"> 
    </head>
    <body>

        <div class="main-container">

            <div class="nav-container">

                <ul>

                    <li><a href="for_visitors.php">Collection</a></li>
                    <li><a href="upload.php">Upload</a><li>
                        |
                    <li><a href="dashboard.php"><b>Dashboard</b></a><li>
                    <li><button class="log-in-button"><a href="log_out_user.php" class="log-in-text">Logout</a></button></li>

                </ul>

            </div>

            <div class="center-user-stuff">

                <h1>Your page</h1>

                <h3 style="color:white;">Search</h3>

                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input type="text" name="input_field" placeholder="Cauta un articol">
                    <input type="submit" name="submit" value="Submit">
                </form>


                <!-- Aici sa pui toate  -->

            </div>


            <div class="footer-container">
                <ul>
                    <li><a href="#conditions">Termeni si Conditii</a></li>
                    <li><a href="#something">Protectia datelor personale</a></li>
                </ul>
            </div>   

        </div>

    </body>

</html>

