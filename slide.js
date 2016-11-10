var slideIndex = 1;
showSlides(slideIndex);

var myIndex = 0;
carousel();

function carousel() {
    var i;
		
    var x = document.getElementsByClassName("mySlides");
	
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
	
	myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
	
    setTimeout(carousel, 5000);
}

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slds = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slds.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slds.length}
  for (i = 0; i < slds.length; i++) {
      slds[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slds[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}