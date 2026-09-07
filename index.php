
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$error="";
$username="";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["username"])){
        $error="name cannot be blank";
        }
        $username= $_POST["username"];
    }

?>
   <form action="" method="POST">
    <span style="color: red;"><?php echo $error ?></span><br>
   <label>Name</label>
   <input type="text" placeholder="enter name" name="username">

   <input type="submit" value="submit">
   </form> 
   <h3> hello <?php echo $username ?></h3>
</body>
</html>
