let navHover = document.getElementById("desktop_nav_red");
let titleChanged = document.getElementById("title_category");

navHover.addEventListener("mouseover", hoverFunction);
navHover.addEventListener("mouseout", outFunction);

function hoverFunction() {
    document.getElementById("title_category").style.color = "red";
}
function outFunction() {
    document.getElementById("title_category").style.color = "#000000";
}
