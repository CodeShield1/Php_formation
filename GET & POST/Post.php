<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Post.php" method="post">
    <label for="First_name">Name:</label>
    <input type="text" id="name" name="name" required><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>
    <input type="submit" value="send" name="send" >
    </form>
</body>
</html>
<?php
if(isset($_POST["send"])) {
echo"First_name: " .$_POST['name'] ;
echo "<br>";
echo"Email: " .$_POST['email'] ;
}
?>