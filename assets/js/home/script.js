var signIn = document.querySelector("#sign-in");
var shade = document.querySelector("#bgModal");
var signInPage = document.querySelector("#signInPage");
var closeSignIn = document.querySelector("#closeSignIn");

if(signIn) {
    signIn.addEventListener("click", function() {
        
        if(shade && signInPage) {
            shade.style.display = "block";
            signInPage.style.display = "block";
        }
    })
}

if(closeSignIn) {
    closeSignIn.addEventListener("click", function() {
        if(shade && signInPage) {
            shade.style.display = "none";
            signInPage.style.display = "none";
        }
    })
}
