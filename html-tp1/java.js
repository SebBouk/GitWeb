// retrieve tabs by class name
const tabs = Array.from(document.getElementsByClassName("menu"));
// for each tab
tabs.forEach((tab) => {
  // register a callback function to be triggered on click, for each element
  tab.addEventListener("click", (event) => {
    // remove class `active` on each tab header
    tabs.forEach((tab) => tab.classList.remove("active"));
    // retrieve element from event
    const anchorElement = event.target;
    // add class `active` to set the tab anchor active
    anchorElement.classList.add("active");
    // retrieve value of id to display from `data-target` attribute
    const idArticleToShow = anchorElement.dataset.target;
    // for each article, remove class `show`
    Array.from(document.getElementsByTagName("article")).forEach((article) =>
      article.classList.remove("show"),
    );
    // add class `show` to element to display
    document.getElementById(idArticleToShow).classList.add("show");
  });
});

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("custom-slider");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
}
