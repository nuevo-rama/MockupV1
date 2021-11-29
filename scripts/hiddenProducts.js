let productsToHide = document.querySelector(".container_right");
let enterOpen = document.querySelector(".desktop_btn");
let enterClose = document.querySelector(".desktop_btn");

enterOpen.addEventListener("click", hideFunction);
enterClose.addEventListener("dblclick", showFunction);

function hideFunction() {
    document.getElementById("container_right").style.visibility = "hidden";
}
function showFunction() {
    document.getElementById("container_right").style.visibility = "visible"
}
