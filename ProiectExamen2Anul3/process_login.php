<?php

//valorile definite
$user='111';
$pass='222';



if(
        (isset($_POST['username']))
     && (isset($_POST['password']))
             
  ){
    
    
    if(
            ($_POST['username'] == $user)
         && ($_POST['password'] == $pass)
       ){
       
       header("Location: dashboard.php");
    }
    
    else{
        
        echo "username/password invalid";
        
    }
    
}

else {
    
    echo "You must suppy a username and passoword";
    
}

?>