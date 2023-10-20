
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


function alterarClasseItem() {
    var mediaQuery = window.matchMedia('(max-width: 600px)');

    function verificarAlteracao(e) {
        var elementos = Array.from(document.getElementsByClassName('item'));

        for (var i = 0; i < elementos.length; i++) {
            if (e.matches) {
                elementos[i].classList.add('container');
                elementos[i].classList.remove('item');
            } else {
                elementos[i].classList.add('item');
                elementos[i].classList.remove('container');
            }
        }
    }

    mediaQuery.addEventListener('change', function(e) {
        verificarAlteracao(e);
    });

    verificarAlteracao(mediaQuery);
}

window.onload = alterarClasseItem;




//class = "d-none"

buscar = function (event) {
    event.preventDefault(); // Isso impede que a página seja recarregada
  
    let parametro = document.getElementById('pesq').value; 
  
    document.querySelectorAll('div.item h2').forEach((h2) => {
      if (h2.textContent.includes(parametro)) {
        // Se o parâmetro estiver contido no h2, exiba o item
        h2.closest('.item').style.display = 'block';
      } else {
        // Se o parâmetro não estiver contido no h2, adicione a classe 'd-none' para não exibir o item
        h2.closest('.item').classList.add('d-none');
      }
    });
  }