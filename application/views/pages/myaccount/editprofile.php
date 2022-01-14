<div class="mainContainer ">
    <div class="column-1 ">
        <img  id="profile" src="<?= base_url("assets/images/home/profile.jpg") ?>">
        <i class="bi bi-pencil-square"></i>
    </div>
    <div class="column-2">

        <h2>Account Settings</h2>
        <form action="" method="GET">
            <div class="forms">
                <h3 class="details">Email address</h3>
                <input id="email" type="text" class="input" name="email" placeholder="Email">
                <i class="bi bi-pencil-square"></i>
            </div>
            
            <div class="forms">
                <h3 class="details">First name</h3>
                <input type="text" class="input" placeholder="First Name">
                <i class="bi bi-pencil-square"></i>
            </div>

            
            <div class="forms">
                <h3>Last name</h3>
                <input type="text" class="input" placeholder="Last Name">
                <i class="bi bi-pencil-square"></i>
            </div>
            
            <div class="forms">   
                <h3>Birthday</h3>
                <input type="text" class="input" placeholder="Date">
                <i class="bi bi-pencil-square"></i>
            </div>
            <div class="forms">
                <label for="email">Email Address</label>
                <input type="text" class="input" name="email" id="email" placeholder="Email" value="username">
                <i class="bi bi-pencil-square"></i>
            </div>

            <div class="forms">
                <label for="fname">First Name</label>
                <input type="text" class="input" placeholder="First Name" name="fName" id="fName" value="userFname">
                <i class="bi bi-pencil-square"></i>
            </div>

            
            <div class="forms">
                <label for="lName">Last Name</label>
                <input type="text" class="input" placeholder="Last Name", name="lName" value="userLName">
                <i class="bi bi-pencil-square"></i>
            </div>
            
            <div class="forms">   
                <label for="birthday">Birthday</label>
                <input type="text" class="input" placeholder="Date" name="birthday" id="birthday" value="userBday">
                <i class="bi bi-pencil-square"></i>
            </div>








            <button class="button">Submit</button>

    
        </form>
        
    </div>
</div>





</body>

</html>