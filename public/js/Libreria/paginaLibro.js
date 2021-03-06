"use strict";

/* ===== Smooth scrolling ====== */
/*  Note: You need to include smoothscroll.min.js (smooth scroll behavior polyfill) on the page to cover some browsers */
/* Ref: https://github.com/iamdustan/smoothscroll */

const pageNavLinks = document.querySelectorAll('.scrollto');

pageNavLinks.forEach((pageNavLink) => {
	
	pageNavLink.addEventListener('click', (e) => {
		
		e.preventDefault();
		
		var target = pageNavLink.getAttribute("href").replace('#', '');
		
		//console.log(target);
		
        document.getElementById(target).scrollIntoView({ behavior: 'smooth' });

		
    });
	
});

// para todos los radiobutton rating agregar un on change
const changeRating = document.querySelectorAll('input[name=rating]');
changeRating.forEach((radio) => {
  radio.addEventListener('change', getRating);
});

// buscar el radiobutton checked y armar el texto con el valor ( 0 - 5 )
function getRating() {
  let estrellas = document.querySelector('input[name=rating]:checked').value;
  document.getElementById("texto").innerHTML = (
    0 < estrellas ?
    estrellas + " estrella" + (1 < estrellas ? "s" : "") :
    "sin calificar"
  );

  // opcionalmente agregar un ajax para guardar el rating
}