<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Registration</title>
    </head>

    <body>

        <div class="connexion">
            <h2>Create an account</h2>

            <form action="process_register.php" method="POST">

                <label>Email :</label>
                <input type="email" name="email" required>

                <label>Password :</label>
                <input type="password" name="password" required>

                <button type="submit">Sign up</button>

            </form>

            <p>Already have an account? <a href="index.php">Sign in</a></p>
        </div>

    </body>
</html>
