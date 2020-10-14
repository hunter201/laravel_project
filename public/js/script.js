let press = document.querySelectorAll(".main-menu-elem");
let body = document.querySelector("body");
let submenu = document.querySelector(".submenu-fridges");
let a = 1;



window.addEventListener("scroll",()=>{
    submenu.style.width = submenu.style.width + "100px";
})

press.forEach((i, index) => {
    i.addEventListener("mouseover", () => {
        submenu.style.left = "188px";
        body.setAttribute("backgroundColor","red");
        switch (index + 1) {
            case 1:
                submenu.style.display = "block";
                i.style.color = "red";
            case 2:
                submenu.style.display = "block";
                i.style.color = "red";
            case 3:
                submenu.style.display = "block";
                i.style.color = "red";
            case 4:
                submenu.style.display = "block";
                i.style.color = "red";
        }

    });

    i.addEventListener("mouseout", () => {
        switch (index + 1) {
            case 1:
                submenu.style.display = "none";
                i.style.color = "black";
            case 2:
                submenu.style.display = "none";
                i.style.color = "black";
            case 3:
                submenu.style.display = "none";
                i.style.color = "black";
            case 4:
                submenu.style.display = "none";
                i.style.color = "black";
        }

    });

});
