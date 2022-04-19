window.addEventListener("load", function () {
  var myCarousel = document.querySelector("#carouselExampleIndicators");
  var carousel = new bootstrap.Carousel(myCarousel);

  // start image modal
  // Get the modal
  var modal = document.getElementById("imageModal");

  // Get the image and insert it inside the modal - use its "alt" text as a caption
  var imgs = document.getElementsByClassName("galleryImg");
  var modalImg = document.getElementById("img01");
  var captionText = document.getElementById("caption");
  for (img of imgs) {
    img.onclick = function () {
      modal.style.display = "block";
      modalImg.src = this.src;
      captionText.innerHTML = this.alt;
    };
  }

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  if(span){
    span.onclick = function () {
      modal.style.display = "none";
    };
  }
  // When the user clicks on <span> (x), close the modal
  // end image modal
});
