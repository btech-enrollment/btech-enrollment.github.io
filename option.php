<?php

    session_start();
    
    if (!$_SESSION['status']) {
        
        header('location: login.php');
        exit;
        // $LOGIN="login.php";
        // echo "<script>location.href='$LOGIN'</script>";

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Choose an option | BTECH </title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/option.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

</head>

<body>
  
    <div class="box">
    <h2>Choose Between</h2>
    <hr>
      <a href="enrollment-form.php"><button class="btn btn-primary">ENROLL</button></a>
      <br>
      <button class="btn btn-primary">SHIFT</button>
      <hr>
    <strong class="text-dark student-name"><?php echo $_SESSION['name'];  ?></strong>
    <div class="account">
        Student No: <?php echo " "?><p class="text-success"><strong>
            <?php echo $_SESSION['sno']; ?>
        </p></strong>
    </div>
    <hr>
    
    <form action="option.php" method="POST">
        <input type="submit" class="btn btn-danger" value="Logout" name="logout">
    </form>

    </div>

</body>
</html>

<?php

    if (isset($_POST['logout'])) {

        header('location: logout.php');
        
    }

?>