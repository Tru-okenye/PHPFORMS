<?php require "process.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    
    <form action="" method="POST">
    <span style="color: red;"><?php echo $error ?></span><br>
   <label>email</label>
   <input type="email" placeholder="enter your email" name="email">
   
    <span style="color: red;"><?php echo $errorPhone ?></span><br>
   <label>phone number</label>
   <input type="number" placeholder="enter your number" name="phone">

   <input type="submit" value="submit">
   </form> 
   <h3> hello <?php echo htmlspecialchars($email) ?>, your number is <?php echo htmlspecialchars($phone) ?></h3>

</body>
</html>