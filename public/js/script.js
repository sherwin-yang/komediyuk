let toggleNavStatus = false;

let toggleNav = function() {
    let getSidebar = document.querySelector(".nav-sidebar");
    let getSidebarUl = document.querySelector(".nav-sidebar ul");
    let getSidebarTittle = document.querySelector(".nav-sidebar ul span");
    let getSidebarLinks = document.querySelectorAll(".nav-sidebar ul a");

    if (toggleNavStatus == false) {
        getSidebarUl.style.visibility = "visible";
        getSidebar.style.width = "250px";
        getSidebarTittle.style.opacity = "0.5";

        let arrayLength = getSidebarLinks.length;
        for(let i = 0; i < arrayLength; i++) {
            getSidebarLinks[i].style.opacity = "1";
        }

        toggleNavStatus = true;
    }

    else if (toggleNavStatus == true) {
        getSidebar.style.width = "60px";
        getSidebarTittle.style.opacity = "0";

        let arrayLength = getSidebarLinks.length;
        for(let i = 0; i < arrayLength; i++) {
            getSidebarLinks[i].style.opacity = "0";
        }

        getSidebarUl.style.visibility = "hidden";

        toggleNavStatus = false;
    }
}
