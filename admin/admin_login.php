<?php
// var_dump($_POST); - don't need this, we just put it to see if the form is working, then we typed what is below instead

require_once('scripts/config.php'); 

    if(empty($_POST['username']) || empty($_POST['password'])){
        $message = 'Missing Fields';
    }else{
        $username = $_POST['username'];
        $password = $_POST['password'];

        $message = login($username,$password);
    }
?>

<!-- we need to add the login.php for the above thing to work, could do include but best practice is  -->

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
</head>
<body>

    <form action="admin_login.php" method="post"> <!--post is so that information is not public in url //action is the destination you want to send data to -->
        <label>Username:
            <input type="text" name="username" value="" required>
        </label>
        <br>
        <label>Password:
            <input type="password" name="password" required>
        </label>
        <br>
        <button type="submit">Submit</button>
    </form>

</body>
</html>