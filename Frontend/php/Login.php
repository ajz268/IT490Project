<?php include('DBClient.php') ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/Loginstyle.css">
    <script defer src="../js/Loginscript.js"></script>
</head>
<body>
    
    <div class="container">
        <form id="form">
            <h1>Login</h1>
            <div class="input-control">
                <label for="username" >Username</label>
                <input id="username" name="username" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="password">Password</label>
                <input id="password" name="password" type="password">
                <div class="error"></div>
            </div>
            <button type="submit">Login</button>
            <div id="create-account-wrap">
                <p>Dont have an account? <div></div><a href="createAcc.php">Create Account</a><p>
            </div>
        </form>
    </div>
</body>
</html>
