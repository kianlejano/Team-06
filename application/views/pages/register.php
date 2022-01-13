<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUP OpenStat - Register</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/boilerplate.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/register.css'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto:wght@100;300&family=Karla&display=swap" rel="stylesheet">
</head>

<body>
    <h1 id="header1">TUPOpenStat</h1>
    <div id="container">
        <h1 id="header2">Register</h1>
        <form method="post" action="<?= base_url("register/") ?>" id="formContainer">
            <div id="formLeft">
                <div id="formEmail">
                    <input type="email" placeholder="Email address" name="registerEmail">
                </div>
                <div id="formName">
                    <input type="text" placeholder="First name" name="registerName" required>
                    <input type="text" placeholder="Last name" name="registerLastName" required>
                </div>
                <div id="formPassword">
                    <input type="password" placeholder="New password" name="registerNewPassword" required><br>
                    <input type="password" placeholder="Confirm password" name="registerConfirmPassword" required>
                </div>
            </div>
            <div id="formRight">
                <div id="formBirthday">
                    <label for="registerMonth">Birthday<br>
                        <select name="registerMonth" id="registerMonth" required>
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <input type="number" min="0" max="31" placeholder="Day" name="registerDay" required>
                        <input type="number" min="1900" max="2025" placeholder="Year" name="registerYear" required>
                    </label>
                </div>
                <div id="formGender">
                    <label for="gender">Gender<br>
                        <label for="registerMale" class="radioContainer">Male
                            <input type="radio" id="registerMale" name="registerGender" value="male" required>
                            <span class="checkmark"></span>
                        </label>
                        <label for="registerFemale" class="radioContainer">Female
                            <input type="radio" id="registerFemale" name="registerGender" value="female" required>
                            <span class="checkmark"></span>
                        </label>
                    </label>
                </div>
                <div id="formContact">
                    <label for="registerContact">Contact<br>
                        <input type="text" placeholder="Mobile number/Landline" name="registerContact" required>
                    </label>
                </div>

                <Button id="signUpButton" type="submit">Sign Up</Button>
        </form>
    </div>
</body>

</html>