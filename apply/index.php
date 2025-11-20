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
    <link rel="stylesheet" href="test.css">
    <script src="script.js" defer></script>
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
        <form action="" method="post" id="form">

        <!-- Personal Information -->
            <div class="personalDetails">
                <h3>Personal Bio Data. <img src="../assets/icons/user.png" width=20 alt=""></h3>
                <div class="choose">
                    <label class="choosePicture" for="passport">Choose Passport</label>
                </div>
                <input type="file" name="passport" id="passport">
                <h5>Full Name<p> * </p></h5>
                <div class="namesInput">
                    <input type="text" placeholder="First Name *">
                    <input type="text" placeholder="Surname *">
                    <input type="text" placeholder="Other names (optional)">
                    <input type="number" placeholder="NIN *">
                    <input type="number" placeholder="Phone Number *">
                    <div class="dob">DOB: <input type="date" ></div>
                    <input type="email" placeholder="Email *">
                    <select name="" id="">
                        <option value="">-----Select Gender-----</option>
                        <option value=""> Male </option>
                        <option value=""> Female </option>
                    </select>
                    <div class="gender">
                        Select Gender
                        <br>
                        <h4> <input type="radio" name="radio" id="male" checked> <label for="male"> Male</label> </h4>
                        <h4> <input type="radio" name="radio" id="female"> <label for="female">Female</label> </h4>
                    </div>
                </div>
            </div>

            <!-- Education Qualification -->
            <div class="educationQualification">
                <h3>Education and Qualification. <img src="../assets/icons/book.png" width=20 alt=""></h3>
                <!-- <h3>Education and Qualification. 📖</h3> -->

                <!-- Primary School Section -->
                <h5 class="primaryDetails secondaryDetails">Primary School Details<p>*</p></h5>
                <div class="primarySchoolSection">
                    <input type="text" placeholder="Primary School Name *">
                    <textarea placeholder="Please enter the primary school address"></textarea>
                    <div class="primaryYear">
                        <div class="primaryStartYear">
                            Start year: <select name="year" id="yeah">
                               <?php
                                   for ($year = 1600; $year <= date('Y'); $year++){
                                       echo "<option value='$year'>$year</option>";
                                   }
                               ?>
                           </select>
                        </div>
                        <div class="primaryEndYear">
                            End year: <select name="year" id="yeah">
                               <?php
                                   for ($year = 1600; $year <= date('Y'); $year++){
                                       echo "<option value='$year'>$year</option>";
                                   }
                               ?>
                           </select>
                        </div>
                    </div>
                    <div class="primaryImg">Primary school certificate: <input type="file" placeholder="Email *"></div>
                </div>
                <hr>

                <!-- secondary School Section -->
                <h5 class="primaryDetails secondaryDetails">Secondary School Details<p>*</p></h5>
                <div class="secondarySchoolSection">
                    <input type="text" placeholder="Secondary School Name *">
                    <textarea placeholder="Please enter the secondary school address"></textarea>
                    <div class="secondaryYear">
                        <div class="secondaryStartYear">
                            Start year: <select name="year" id="yeah">
                               <?php
                                   for ($year = 1600; $year <= date('Y'); $year++){
                                       echo "<option value='$year'>$year</option>";
                                   }
                               ?>
                           </select>
                        </div>
                        <div class="secondaryEndYear">
                            End year: <select name="year" id="yeah">
                               <?php
                                   for ($year = 1600; $year <= date('Y'); $year++){
                                       echo "<option value='$year'>$year</option>";
                                   }
                               ?>
                           </select>
                        </div>
                    </div>
                    <div class="secondaryImg">Secondary school certificate: <input type="file" placeholder="Email *"></div>
                </div>


                
            <br><br><br><br>
            <!-- Disability Questions -->
             <hr>
            <div class="disabilityQuestion">
                <!-- Question 1 -->
                <div class="q1">
                    <p>Have you ever served in any of the Nigeria arm forces? if Yes please give reason bellow</p>
                    <div class="q1AnswerContainer">
                        <label for="noServe">No</label><input id="noServe" type="radio" name="serveQuestion" checked>
                        <div class="q1Answer1">
                            <label for="yesServe">Yes</label><input id="yesServe" type="radio" name="serveQuestion">
                            <textarea placeholder="Give reasons"></textarea>
                        </div>
                    </div>
                </div>
                
                <!-- Question 2 -->
                <div class="q2">
                    <p>Do you have any disability?</p>
                    <div class="q2AnswerContainer">
                        <label for="noDisability">No</label><input id="noDisability" type="radio" name="disability" checked>
                        <div class="q2Answer2">
                            <label for="yesDisability">Yes</label><input id="yesDisability" type="radio" name="disability">
                            <textarea placeholder="Give reasons"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            
            <button class="ask" type="submit" >Submit✔</button>
            <!-- <input type="submit" value="Submit✔"> -->
        </form>
        <div>
            <dialog id="confirmDialog">
                <h2>Are you sure you want to submit this form?</h2>

                <button class="yes">Yes</button>
                <button class="no" type="button">No</button>
            </dialog>

        </div>
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