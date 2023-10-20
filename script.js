
/*function validaForm(e){
    e.preventDefault();
    let form = e.target;
    let formValido = true;
    let alerta = document.getElementById('alerta');

    if (form.titulo.value === ""){
        alerta.style.visibility = "visible"; 
        formValido = false;
    }

    if (form.genero.value === ""){
        alerta.style.visibility = "visible"; 
        formValido = false;
    }

    if (form.ebook.value === ""){
        alerta.style.visibility = "visible"; 
        formValido = false;

    }
    if (form.preco.value === ""){
        alerta.style.visibility = "visible"; 
        formValido = false;
    }
    return formValido;
}*/
/*
import { createPopper } from '@popperjs/core';
const popcorn = document.querySelector('#popcorn');
const tooltip = document.querySelector('#tooltip');
createPopper(popcorn, tooltip, {
  placement: 'top',
});*/


// function alterarClasseItem() {
//     var mediaQuery = window.matchMedia('(max-width: 600px)');

//     var elemento = document.getElementById('item');

//     function verificarAlteracao(e) {
//         if (e.matches) {
//             elemento.classList.add('container');
//             elemento.classList.remove('item');

//         } else {
//             elemento.classList.add('item');
//             elemento.classList.remove('container');
//         }
//     }

//     verificarAlteracao(mediaQuery);

//     mediaQuery.addEventListener(verificarAlteracao);
// }

// alterarClasseItem();



//class = "d-none"

buscar = function () {

let parametro = document.getElementById('pesq').value; 

document.querySelectorAll('div.item h2').forEach((h2) => {
  if (h2.textContent.includes(parametro)) {
    h2.parentElement.style.display = 'block';
  } else {
    h2.parentElement.classList.add('d-none');
  }
});


}