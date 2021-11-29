let productsToHide = document.querySelector(".container_right");
let enterOpen = document.querySelector(".desktop_btn");
let enterClose = document.querySelector(".desktop_btn");

enterOpen.addEventListener("click", hideFunction);


function hideFunction() {
    if (document.getElementById("container_right").style.visibility === "hidden") {
        document.getElementById("container_right").style.visibility = "visible"
      } else {
        document.getElementById("container_right").style.visibility = "hidden"
    } 
}
