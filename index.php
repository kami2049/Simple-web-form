<!DOCTYPE html>
<html lang="en">
<head>
    <title>Simple Web Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div>
       <header>
            <h1>Contact Us</h1>
       </header>
        <form action="formdata.php" method="post"> 
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username"><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br><br>

            <label for="userissue">How can we assist you ?</label><br>
            <select name="userissue" id="userissue">
                <option value="chooseone">Choose one</option>
                <option value="query">Query</option>
                <option value="feedback">Feedback</option>
                <option value="complaint">Complaint</option>
                <option value="other">Other</option>
            </select><br><br>
            
            <textarea name="comment" id="comment" cols="30" rows="10">Add any additional information here</textarea><br><br>
            <input type="submit" formtarget="_blank" value="submit">
        </form>
    </div>
    <footer>
    </footer>
</body>
</html>