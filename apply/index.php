<?php
    session_start();
?>

<?php
    if (!empty($_SESSION['email'])){
        echo '';
    }else{
        header("Location: ../auth/login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Application Portal Form</title>
    <link rel="stylesheet" href="indexs.css">
</head>
<body>
    <nav>
        <h1>Hi🙋 <?php echo $_SESSION['email']; ?> Welcome.</h1>
        <p class="log"><?php echo $_SESSION['email'][0]; ?></p>
        <div class="logout-div">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                <input class="logout" type="submit" value="Log-Out" name="logout">
            </form>
        </div>
    </nav>


</body>
</html>

<?php
    if (isset($_SERVER['PHP_SELF'])){
        if (isset($_POST['logout'])){
            session_destroy();
            header("Location: ../auth/login.php");
        }
    }
?>