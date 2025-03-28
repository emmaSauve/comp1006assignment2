<?php

include ("./include/header.php"); // add header

session_start();
if(!isset($_SESSION['usersId'])){ // if the user isnt logged in then redirect them back to the index
    Header('location:index.php');
    exit;
}else{ // when the user is logged in, show them the sucess message and the pictures
    require_once './include/database.php';
    echo "<section class='successPage'>"; 
        echo "<div>";
            echo "<h2>Congratulations ! you logged in !</h2>";
            echo "<h3>Here are some cats, good job</h3>";
        echo "</div>";

        echo "<section class='catImages'>";
            echo "<div>";
                echo "<img src='./img/cat1.jpg' alt='cat image 1'>";
            echo "</div>";

            echo "<div>";
                echo "<img src='./img/cat2.jpg' alt='cat image 2'>";
            echo "</div>";

            echo "<div>";
                echo "<img src='./img/cat3.jpg' alt='cat image 3'>";
            echo "</div>";

            echo "<div>";
                echo "<img src='./img/cat4.jpg' alt='cat image 4'>";
            echo "</div>";

            echo "<div>";
                echo "<img src='./img/cat5.jpg' alt='cat image 5'>";
            echo "</div>";

            echo "<div>";
                echo "<img src='./img/cat6.jpg' alt='cat image 6'>";
            echo "</div>";
        echo "</section>";

    echo "</section>";


}

echo "<a href='logout.php' class='button'>Logout</a>"; // button to log out
$conn = null;

include ("./include/footer.php"); // add footer 

?>