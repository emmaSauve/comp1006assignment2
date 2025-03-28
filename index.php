<?php 
    require ("./include/header.php"); // include the header
?>


<main>

    <section class="intro"> <!-- index page header -->
        <div>
            <h2>Welcome Meow Moment, the #1 site to view cats !</h2>
            <h5>Click on the button to make an account and join Meow Moment</h5>
        </div>
    </section>


        <section class="register" id="register"> <!-- form to register a user-->
                <div>
                    <h3>Make a Meow Moment account today</h3>
                </div>

                <div>
                    <form method="post" action="save-the-user.php">
                        <div>
                            <label for="fName">First name :</label> <!-- first name-->
                            <input name="fName" id="fName" type="text" placeholder="First name" required>

                            <label for="lName">Last name :</label> <!-- last name -->
                            <input name="lName" id="lName" type="text" placeholder="Last name" required>

                            <label for="email">Email :</label> <!-- email -->
                            <input name="email" id="email" type="email" placeholder="Email" required>

                            <label for="username">Pick a purrfect username ! (Must be at least 3 characters long) :</label> <!-- username -->
                            <input name="username" id="username" type="text" placeholder="Username" required>

                            <label for="password">Password (At least : one uppercase letter, a number and 5 characters long) :</label> <!-- password -->
                            <input name="password" id="password" type="password" placeholder="Password" required>
                        </div>
                        <input type="submit" name="submit" value="Register">
                    </form>
                </div>
        </section>


        <section class="logInHere"> <!-- form to log into an existing account -->
            <div>
                <h3>Already have an account ? Log-in here</h3>
            </div>

            <div>
                <form method="post" action="./include/checkLogin.php">
                    <div>
                        <label for="user">Username :</label> <!-- username -->
                        <input name="username" id="user" type="text" placeholder="Username" required>

                        <label for="pass">Password :</label> <!-- password -->
                        <input name="password" id="pass" type="password" placeholder="Password" required>
                    </div>
                    <input type="submit" name="submit" value="Login">
                </form>
            </div>
        </section>

</main>

<?php 
    require ("./include/footer.php"); // include the footer
?>