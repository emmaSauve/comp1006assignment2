<?php
    $username = $_POST['username']; // get the username from the form
    $password = hash('sha512', $_POST['password']); //get the password from the form then hash it

    require_once 'database.php';

    $sql = "SELECT usersId FROM users WHERE username = '$username' AND password = '$password'"; // get the id from the database where the username and password are
    $result = $conn->query($sql); // store it in a variable


$idCounter = $result -> rowCount(); // store the number of ids inside the variable

if ($idCounter == 1){ // if theres a matching id
    echo "Congrats and welcome. You have logged in successfully !";

    foreach($result as $row){
        session_start(); // start the session

        $_SESSION['usersId'] = $row['usersId'];

        Header('Location: ../success.php'); //take the user to the success page

    }
    
}
else{ // show that its invalid and link to the index
    echo "<p>This login is invalid. click below to create an account :</p>";
    echo "<a href='../index.php'>Register</a>";
}
$conn = null;

?>