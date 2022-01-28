<section id="changePassword">
    <div class="container">
        <h1>Change Password</h1>
        <form action="" method="post"> 
            <p>Old Password</p>
            <input class="passwordBox" type="password" name="oldPassword" id="oldPassword"> <br>
            <p>New Password</p>
            <input class="passwordBox" type="password" name="newPassword" id="newPassword">
            <p>Confirm New Password</p>
            <input class="passwordBox" type="password" name="confirmNewPassword" id="confirmNewPassword"><br>
            <input class="showToggle"type="checkbox" onclick="showPassword()">&nbsp;Show Password <br>
            <script>
                function showPassword() {
                    var x = document.getElementById("oldPassword");
                    var y = document.getElementById("newPassword");
                    var z = document.getElementById("confirmNewPassword");
                    if (x.type === "password" && y.type === "password" && z.type === "password") {
                        x.type = "text";
                        y.type = "text";
                        z.type = "text";
                    } else {
                        x.type = "password";
                        y.type = "password";
                        z.type = "password";
                    }
                }
            </script>
            <input class="button" type="reset" value="Close">
            <input class="button button2" type="submit" value="Submit">
        </form>
    </div>
</section>
</div>  
</body>

</html>