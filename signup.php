<?php
if(isset($_POST['signUp']))
{
    $user = $_POST['Username'];
    $email = $_POST['E-mail'];
    $pass = $_POST['Password'];
    $passCr = $_POST['Confirm Password'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./designer.css"/>
    <meta charset="UTF-8">
    <title>Sign Up</title>
</head>
<body>
<?php include 'nav.php';?>
<div class="sign-content">
    <div class="hero2">
        <img src="tonaleft.jpg">
    </div>
    <div class="sign-details">
        <h1>Be Creative !</h1>
    </div>
    <div class="sign-box" >
        <h1>Register</h1>
        <div class="sign-frame">
            <form action="#" method="post">
                <input class="inputs"  value="Username" required><br><br>
                <input class="inputs" value="E-mail" required><br><br>
                <input class="inputs" value="Password" required><br><br>
                <input class="inputs" value="Confirm Password" required><br><br>
                <br>
                <button name="signUp" class="sign-btn" >Sign Up</button>

            </form>

        </div>
    </div>
</div>


</body>
</html>