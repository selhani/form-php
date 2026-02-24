<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <link rel="stylesheet" href="style.css"/>

        <title>Connexion</title>
    </head>

    <body>

        <div class="connexion">
            <h2>Connexion</h2>

            <form action="process_login.php" method="POST">
                
                <label for="email">Email :</label> <br>
                <input type="email" id="email" name="email" required/> <br><br>

                <label for="password">Password :</label><br>
                <input type="password" id="password" name="password" required/> <br><br>

                <button type="submit">Sign in</button>
                
            </form>

            <p>Don't have an account? <a href="register.php">Sign up</a></p>

        </div>

    </body>

</html>