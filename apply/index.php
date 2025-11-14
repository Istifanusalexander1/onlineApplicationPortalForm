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

    <div class="formBody">
        <div class="formTitle">
            <h1>New Nigerian Army Recruitment Registration Form 93RRI</h1>
        </div>
        <form action="" method="post">

        <!-- Personal Information -->
            <div class="personalDetails">
                <h3>Personal Bio Data. <img src="../assets/icons/user.png" width=20 alt=""></h3>
                <label for="passport">Choose Passport</label>
                <input type="file" name="passport" id="passport">
                <h5>Full Name<p>*</p></h5>
                <div class="namesInput">
                    <input type="text" placeholder="First Name *">
                    <input type="text" placeholder="Surname *">
                    <input type="number" placeholder="Phone Number *">
                    DOB: <input type="date" >
                    <input type="email" placeholder="Email *">
                    <input type="number" placeholder="NIN *">
                    <select name="" id="">
                        <option value="">-----Select Gender-----</option>
                        <option value=""> Male </option>
                        <option value=""> Female </option>
                    </select>
                    <div>
                        Select Gender
                        <br>
                        <input type="radio" checked id="gender" name="gender">Male
                        <input type="radio" id="gender" name="gender">Female
                    </div>
                </div>
            </div>

            <!-- Education Qualification -->
            <div class="educationQualification">
                <h3>Education and Qualification. <img src="../assets/icons/book.png" width=20 alt=""></h3>
                <!-- <h3>Education and Qualification. 📖</h3> -->

                <!-- Primary School Section -->
                <h5>Primary School Details<p>*</p></h5>
                <div class="primarySchoolSection">
                    <input type="text" placeholder="Primary School Name *">
                    <textarea placeholder="Please enter the primary school address"></textarea>
                    <div class="primaryYear">
                         Start year: <select name="year" id="yeah">
                            <?php
                                for ($year = 1600; $year <= date('Y'); $year++){
                                    echo "<option value='$year'>$year</option>";
                                }
                            ?>
                        </select>
                         End year: <select name="year" id="yeah">
                            <?php
                                for ($year = 1600; $year <= date('Y'); $year++){
                                    echo "<option value='$year'>$year</option>";
                                }
                            ?>
                        </select>
                    </div>
                    Primary school certificate: <input type="file" placeholder="Email *">
                </div>



                <!-- Secondary School Section --> <br><br><br><br>
                <h5>Secondary School Details<p>*</p></h5>
                <div class="secondarySchoolSection">
                    <input type="text" placeholder="Secondary School Name *">
                    <textarea placeholder="Please enter the secondary school address"></textarea>
                    <div class="secondaryYear">
                         Start year: <select name="year" id="yeah">
                            <?php
                                for ($year = 1600; $year <= date('Y'); $year++){
                                    echo "<option value='$year'>$year</option>";
                                }
                            ?>
                        </select>
                         End year: <select name="year" id="yeah">
                            <?php
                                for ($year = 1600; $year <= date('Y'); $year++){
                                    echo "<option value='$year'>$year</option>";
                                }
                            ?>
                        </select>
                    </div>
                    Secondeary school certificate: <input type="file" placeholder="Email *">
                </div>
            </div>



            <br><br><br><br>
            <!-- Disability Questions -->
             <div class="disabilityQuestion">
                <div class="q1">
                    <p>Have you ever served in any of the Nigeria arm forces? if Yes please give reason bellow</p>
                    No <input type="radio" name="q1" checked>
                    Yes <input type="radio" name="q1">
                    <textarea placeholder="Give reasons"></textarea>
                </div>
                <div class="q1">
                    <p>Do you have any disability?</p>
                    No <input type="radio" name="q2" checked>
                    Yes <input type="radio" name="q2">
                    <textarea placeholder="Give reasons"></textarea>
                </div>
             </div>

            <input type="submit" value="Submit✔">
        </form>
    </div>

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









<!-- https://www.symbolspy.com/peace-sign-symbol.html -->