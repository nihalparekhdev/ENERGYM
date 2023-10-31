<?php include_once ("controller.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification Form</title>
    <link rel="stylesheet" href="css/otp.css">
    <script type="text/javascript">
  function preventBack() {window.history.forward()};
  setTimeout("preventBack()",0);
  window.onunload=function(){null;}
</script>
</head>
<body>
    <div id="container">
        <h2>Sign Up</h2>
        <p>It's quick and easy.</p>
        <div id="line"></div>
        <form action="otp.php" method="POST" autocomplete="off">
            <?php
            if(isset($_SESSION['message'])){
                ?>
                <div id="alert"><?php echo $_SESSION['message']; ?></div>
                <?php
            }
            ?>

            <?php
            if($errors > 0){
                foreach($errors AS $displayErrors){
                ?>
                <div id="alert"><?php echo $displayErrors; ?></div>
                <?php
                }
            }
            ?>      
            <input type="number" name="otp" placeholder="Verification Code" required><br>
            <input type="submit" name="verify" value="Verify">
        </form>
    </div>
    <button style="font-size:large; text-decoration: none; align-items: center; padding:3px;"><a href="index.html">Logout</a></button>
</body>
</html>