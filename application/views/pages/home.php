<section id="getStarted">
    <div id="getStartedText">
        <h1>Find all the data you need</h1>
    </div>

    <div id="getStartedButton">
        <button class="homeButton">Get Started</button>
    </div>
</section>

<section id="createFormContainer">
    <div id="createFormContent">
        <div id="createFormText">
            <div id="createFormTextHeader">
                <h2>Survey TUP students and personel</h2>
            </div>
            <div id="createFormTextDescription">
                <h3>Create forms and have your fellow TUPians answer them.</h3>
            </div>
            <div id="createFormTextReminder">
                <p>(You must create an account first to ensure the validity of surveys)</p>
            </div>

            <button class="homeButton">Create Form</button>
        </div>
        <div id="createFormImage">
            <img src="<?= base_url("assets/images/home/survey.png") ?>">
        </div>
    </div>
</section>

<section id="answerFormContainer">
    <div id="answerFormContent">
        <div id="answerFormText">
            <div id="answerFormTextHeader">
                <h2>Answer forms to contribute to the datasets</h2>
            </div>
            <div id="answerFormTextDescription">
                <h3>Enter the code to be given by the surveyor to be able to answer forms and improve their database.</h3>
            </div>

            <button class="homeButton">Answer Form</button>
        </div>
        <div id="answerFormImage">
            <img src="<?= base_url("assets/images/home/answer.png") ?>">
        </div>
    </div>
</section>

<section id="dataReportsContainer">
    <div id="dataReportsContent">
        <div id="dataReportsText">
            <div id="dataReportsTextHeader">
                <h2>Find the data you need for your research</h2>
            </div>
            <div id="dataReportsTextDescription">
                <h3>View the data reports generated from the answered surveys to help you complete your data for your research</h3>
            </div>

            <button class="homeButton">Data Reports</button>
        </div>
    </div>
</section>

<div id="bgModal"></div>

<div id="signInPage">
    <button id="closeSignIn">&#10005;</button>
    <form method="post" action="<?= base_url("login/") ?>">
        <h2>SIGN IN</h2>
        <label for="loginEmail">Email</label><br>
        <input id="loginEmail" type="email" name="loginEmail" required><br>
        <label for="loginPassword">Password</label><br>
        <input id="loginPassword" type="password" name="loginPassword" required>

        <a href="#">Forgot password?</a>

        <p>No account? <a href="<?= base_url("register/") ?>">Register here</a></p>

        <button type="submit">Sign In</button>
    </form>

</div>