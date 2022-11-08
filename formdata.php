<?php

if(isset($_POST['submit'])) {
    $name = $_POST['username'];
    $mailfrom = $_POST['email'];

}

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <div class="formdata">
    Welcome <?php echo $_POST["username"]; ?><br>
    Your email address is: <?php echo $_POST["email"]; ?>
    </div>
</body>
</html>