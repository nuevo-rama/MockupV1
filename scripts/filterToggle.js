let openClose = document.querySelectorAll(".dropdown_filter");

let i;

for (i = 0; i < openClose.length; i++) {
  openClose[i].addEventListener("click", function() {
    this.classList.toggle("open");

    let content = this.nextElementSibling;
    
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
