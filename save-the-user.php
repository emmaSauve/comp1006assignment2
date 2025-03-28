<?php

    require_once './include/database.php';
    require_once './include/validation.php';
    //include the validation and database

    //variables to store the inputs from the form
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $isItValid = true; // variable to check if the user is validated

    $validate = new validate();

    require ("./include/header.php"); //include the header


    $emptyFields = $validate->checkForEmpty($_POST, ['fName', 'lName', 'email', 'username', 'password']); //check for fields that are empty
    if ($emptyFields) {
        echo $emptyFields; // display the error message
        $isItValid = false; // make the variable false because it failed the validation test
    }

    if ($validate->checkForValidEmail($email) != true) {
        echo '<p>Please provide a valid email address.</p>';
        $isItValid = false;
    }

    $usernameValidation = $validate->checkUsername($username); //check for a valid username
    if ($usernameValidation !== true) {
        echo $usernameValidation;
        $isItValid = false;
    }

    $passwordValidation = $validate->checkPassword($password); //check for a valid password
    if ($passwordValidation !== true) {
        echo $passwordValidation;
        $isItValid = false;
    }

    if ($isItValid) { //if it passes the validation check
        $password = hash('sha512', $password); // hash the password
        $sql = "INSERT INTO users (fName, lName, email, username, password) VALUES ('$fName', '$lName', '$email', '$username', '$password')"; // put the information into the database
		$conn->exec($sql);
        echo '<h2>Congrats! your have successfully made an account</h2>';
        $conn = null;
    }

?>

<a href="index.php" class="button">Go back</a> <!-- button to go back to the index -->

<?php 
    require ("./include/footer.php"); //include the footer 
?>



