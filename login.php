<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
<div id="login">
<h1>Login Form</h1>
<div id='line'></div>
<form action="core.php" method="POST">
<div id="iconDiv"><i class='fas fa-user'></i></div><input type="text" name="fname" id="inp" placeholder='Username'>
<div id="iconDiv"><i class='fas fa-lock'></i></div><input type="text" name="usr_pwd" id="inp" placeholder='Password'><br><br>
<button class='btn-hover' type='submit' name="submit" ><span>LOGIN</span></button>
</form>
</div>
</body>
</html>
