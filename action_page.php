<?php

if(isset($_POST['submit'])) {
    $name = $_POST['username'];
    $mailfrom = $_POST['email'];

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    Welcome <?php echo $_POST["username"]; ?><br>
    Your email address is: <?php echo $_POST["email"]; ?>
    
</body>
</html>