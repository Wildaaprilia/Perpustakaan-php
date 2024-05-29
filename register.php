<?php
    session_start();

    if (isset($_SESSION['email'])) {
        header("Location: index.php");
    }
     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container w-75">
    <h1>Register</h1>

   
    <form method="POST" action="./register-proccess.php">
       
        <label for="email" >Email:</label><br>
        <input type="text" id="email" name="email"><br>

       
        <label for="password" >Password:</label><br>
        <input type="password" id="password" name="password"><br>

        <br>

        <input type="submit" value="Register">
    </form>
    </div>
</body>
</html>