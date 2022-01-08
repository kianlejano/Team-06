<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUP OpenStat - Register</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/register.css'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto:wght@100;300&family=Karla&display=swap" rel="stylesheet">
</head>

<body>
    <h1>TUPOpenStat</h1>
    <div id="registerContainerWrapper">
        <div id="registerContainer">
            <h1 id="header">Register</h1>
            <form>
                <div id="formContent">
                    <div id="registerLeft">
                        <input placeholder="Email Address" type="email" id="registerEmail" name="registerEmail">
                        <div id="registerNameSegment">
                            <input placeholder="First Name" type="text" id="registerName" name="registerName">
                            <input placeholder="Last Name" type="text" id="registerLastName" name="registerLastName">
                        </div>

                        <input placeholder="New Password" type="password" id="registerNewPassword" name="registerNewPassword">
                        <input placeholder="Confirm Password" type="password" id="registerConfirmPassword" name="registerConfirmPassword">
                    </div>

                    <div id="registerRight">
                        <div id="registerBirthdaySegment">
                            <label for="registerBirthMonth">Birthday</label>
                            <select name="registerBirthMonth" id="registerBirthMonth">
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

                            <input placeholder="Day" type="text" id="registerBirthday" name="registerBirthday">
                            <input placeholder="Year" type="text" id="registerBirthyear" name="registerBirthyear">
                        </div>
                        <div>
                            <div id="genderSegment">
                                <label for="gender">Gender</label>

                                <input type="radio" id="registerMale" value="male" name="gender">
                                <label for="registerMale">Male</label>
                                <input type="radio" id="registerFemale" value="female" name="gender">
                                <label for="registerFemale">Female</label>
                            </div>

                        </div>
                        <div>
                            <label for="registerContact">Contact</label>
                            <input placeholder="Mobile number/Landline" type="text" name="registerContact" id="registerContact">
                        </div>
                    </div>
                </div>

                <button type="submit">Sign Up</button>
            </form>
        </div>
    </div>


</body>

</html>