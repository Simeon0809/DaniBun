document.addEventListener('DOMContentLoaded', function () {
    
    // UserOptions
    const userOptionButton = document.getElementById("user-menu-button")
    const userOptions = document.getElementById("userOptions")
    let optionsShown = false

    userOptionButton.addEventListener("click", (e) => {
        e.preventDefault()

        if(!optionsShown){
            userOptions.style.display = "block"
        } else {
            userOptions.style.display = "none" 
        }

        optionsShown = !optionsShown;
    })

    // MobileMenu
    const mobileMenuButton = document.getElementById("mobileMenuButton");
    const mobileMenuShown = document.getElementById("mobile-menu");
    let menuShown = false;

    mobileMenuButton.addEventListener("click", (e) => {
        e.preventDefault();

        if(!menuShown) {
            mobileMenuShown.style.display = "block";
        } else {
            mobileMenuShown.style.display = "none";
        }

        menuShown = !menuShown;
    });

});