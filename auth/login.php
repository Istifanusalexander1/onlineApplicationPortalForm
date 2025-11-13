<?php 
    session_start();
?>


<?php
    if (!empty($_SESSION['email'])){
        header("Location: ../apply/index.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        *{
            box-sizing: border-box;
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }
        body{
            background-color: #e1e1e184;
            justify-content: center;
            height: 100vh;
            align-items: center;
            display: flex;
            flex-direction: column;
        }
        nav{
            position: absolute;
            top: 0;
            /* border: solid 0.2px ; */
            padding: 90px;
            border-radius: 7px;
            width: 90%;
            align-items: center;
            justify-content: center;
            display: flex;
            /* box-shadow:  0 0 10px; */
            >h1{
                font-weight: 900;
                font-size: 40px;
                box-shadow: 0 0 5px;
                padding: 10px;
                /* background-color: #fff; */
            }
        }
        .allForm{
            background-color: #fff;
            display: flex;
            flex-direction: column;
            padding: 20px;
            justify-content: center;
            align-items: center;
            border-radius: 5px;
            >h1{
                font-weight: 700;
                >img{
                    width: 30px;
                }
            }
            >p{
                color: #6b6b6bff;
                font-weight: 600;
                margin-top: 20px;
                >a{
                    text-decoration: none;
                    color: #0300b4;
                }
                a:hover{
                    text-decoration: underline;
                }
            }
        }
        form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        input{
            padding: 16px 0;
            width: 400px;
            margin-top: 10px;
            border: solid #7472ec2e;
            background-color: #e1e1e184;
            border-radius: 5px;
            text-align: center;
            font-size: 17px;
            outline-color: #7472ecff;
        }
        .login{
            color: #fff;
            background-color: #0300b4;
            padding: 10px 70px;
            border-radius: 7px;
            font-size: 17px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.2s;
            box-shadow: 0 0 10px #5754efff;
            cursor: pointer;
            width: 200px;
            margin-top: 50px;
        }
        .login:hover{
            text-decoration: underline;
            background-color: #5351c2ff;
        }
    </style>
</head>
<body>
    <nav>
        <h1>HI🙋 WELCOME Back😊</h1>
    </nav>
    <div class="allForm">
        <h1>Login Here <img src="../assets/icons/door.svg" alt=""></h1><br>

        <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
            <input type="email" name="email" placeholder="Email">
            <input type="number" name="nin" placeholder="NIN">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="Log In" name="login" class="login">
        </form>
        <p>Don't have an account? <a class="" href="register.php">Register Here</a></p>
    </div>
</body>
</html>


<?php 
    if (isset($_SERVER['PHP_SELF'])){
        if (isset($_POST["login"])){
            if (!empty($_POST['email']) && !empty($_POST['nin']) && !empty($_POST['password'])){
                $email = $_POST['email'];
                $nin = $_POST['nin'];
                $password = $_POST['password'];

                $_SESSION['email'] = $email;
                $_SESSION['nin'] = $nin;
                $_SESSION['password'] = $password;
                
                header("Location: ../apply/index.php");

            }else{
                echo "<script>alert('Please kindly fill your details!')</script>";
            }
        }
    }
?>



<!-- https://www.jotform.com/form-templates/new-customer-registration-form
https://www.123formbuilder.com/free-form-templates/pet-adoption-event-application-form -->
<!-- https://www.symbolspy.com/peace-sign-symbol.html -->