let cat_elem = document.querySelectorAll(".categories__elem");
let body = document.querySelector("body");
let submenu = document.querySelector(".submenu");
let angle_down = document.querySelectorAll(".fa-angle-down");
let a = 1;



$(document).ready(function () {

    $(body).css('background-color', '#e4963d');
})

$(".categories__elem").on("mouseover", () => {
    //alert("Hello");
})

// cat_elem.forEach((i, index) => {
//     i.addEventListener("mouseover", () => {
//         i.style.color = "red";

//         angle_down[index].style.visibility = 'visible';
//         i.style.transition = "color 0.3s, visibility 0.9s";
//     });


//     i.addEventListener("mouseout", () => {
//         i.style.color = "black";
//         i.style.transition = "color 0.3s, visibility 0.9s";
//         angle_down[index].style.visibility = 'hidden';
//     });


// });
