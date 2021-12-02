var openClose = document.querySelectorAll(".dropdown_filter");

var i;

for (i = 0; i < openClose.length; i++) {
  openClose[i].addEventListener("click", function() {
    
    this.classList.toggle("active");
    var options = this.nextElementSibling;
      
    if (options.style.display === "block") {
      options.style.display = "none";
  
    } else {
      options.style.display = "block";
    }
  });
}
