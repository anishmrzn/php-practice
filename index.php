<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <?php
    include 'connection.php'
    ?>
    <h1 >login</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum, asperiores! Modi numquam inventore facere obcaecati quisquam quae cum molestias quia minus eum! Voluptates velit labore perspiciatis minima quo incidunt non.</p>
    <form action="login.php" method="POST">
        <label>Username</label>
        <input type='text' name="username" />      
        <label>Password</label>
        <input type='password' name="password"/>
        <button type="submit" name="submit">Login</button>
    </form>
    <h1>register</h1>
    <form action="register.php" method="POST">
        <label>Username</label>
        <input type='text' name="username" />      
        <label>E-mail</label>
        <input type='email' name="email" />      
        <label>Password</label>
        <input type='password' name="password"/>
        <button type="submit" name="submit">Login</button>
    </form>
</body>
</html>