<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haunted Login</title>
</head>
<body style="background-color:black;color:white;text-align:center;padding-top:100px;">
    <h1>Only the spirits may enter</h1>
    <form method="post" action="authenticate.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Enter">
    </form>
</body>
</html>
