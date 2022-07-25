// -------{Jelard]----------
const showMenu = (headerToggle, navbarId) => {
   const toggleBtn = document.getElementById(headerToggle),
     nav = document.getElementById(navbarId)

   if (headerToggle && navbarId) {
     toggleBtn.addEventListener('click', () => {
       nav.classList.toggle('show-menu')
       toggleBtn.classList.toggle('fa-times')
     })
   }
 }
 showMenu('header-toggle', 'navbar')

 const linkcolor = document.querySelectorAll('.nav_link');

 function colorLink() {
   linkcolor.forEach(l => l.classList.remove('active'))
   this.classList.add('active')
 }
 linkcolor.forEach(l => l.addEventListener('click', colorLink))


// modal
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img_a = document.getElementById("short_a");
var img_b = document.getElementById("short_b");
var img_c = document.getElementById("short_c");
var img_d = document.getElementById("short_d");
var img_e = document.getElementById("short_e");
var img_f = document.getElementById("short_f");
var img_g = document.getElementById("short_g");
var img_h = document.getElementById("short_h");
var modalImg = document.getElementById("pop");
var captionText = document.getElementById("caption");

img_a.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

img_b.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

img_c.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

img_d.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

img_e.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

img_f.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

img_g.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

img_h.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
