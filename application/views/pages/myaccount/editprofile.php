<div class="mainContainer ">
    <div class="column-1 ">
        <img  id="profile" src="<?= base_url("assets/images/home/user.png") ?>">
        <i class="bi bi-pencil-square"></i>
    </div>
    <div class="column-2">

        <h2>&nbsp;&nbsp;Account Settings</h2>
        <form action="" method="GET">
        <div class="forms">
                <label for="email">&nbsp;&nbsp;Email Address</label>
                <input type="text" class="input" name="email" id="email" placeholder="Email" >
                <i class="bi bi-pencil-square"></i>
            </div>

            <div class="forms">
                <label for="fname">&nbsp;&nbsp;First Name</label>
                <input type="text" class="input" placeholder="First Name" name="fName" id="fName" >
                <i class="bi bi-pencil-square"></i>
            </div>

            
            <div class="forms">
                <label for="lName">&nbsp;&nbsp;Last Name</label>
                <input type="text" class="input" placeholder="Last Name", name="lName" >
                <i class="bi bi-pencil-square"></i>
            </div>
            
            <div class="forms">   
                <label for="birthday">&nbsp;&nbsp;Birthday</label>
                <input type="text" class="input" placeholder="Date" name="birthday" id="birthday" >
                <i class="bi bi-pencil-square"></i>
            </div>
            <button class="button">Submit</button>
    
        </form>
        
    </div>
</div>

</body>

</html>