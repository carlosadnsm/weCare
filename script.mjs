/*window.onLoad = function () {
    document.forms.livro.onSubmit = validaForm;
}
function validaForm(e){
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
import { createPopper } from '@popperjs/core';
const popcorn = document.querySelector('#popcorn');
const tooltip = document.querySelector('#tooltip');
createPopper(popcorn, tooltip, {
  placement: 'top',
});

const form = () => {
    var titulo = document.getElementById("titulo");
            
    var genero = document.getElementsByClassName("form-check-input");

    var ebook = document.getElementById("ebook");

    var preco = document.getElementById("preco");

    var botao = document.getElementById("botao");

    var alerta = document.getElementById("alerta");
    
    
    
    botao.addEventListener("click", function(e){
        e.preventDefault();
        var checkTitulo = titulo.value.trim();
        if (checkTitulo===""){
            titulo.style.borderColor="red";
            alerta.style.visibility="visible"
        }
        var checkGenero = genero.value.trim();
        if (checkGenero===""){
            genero.style.borderColor="red";
            alerta.style.visibility="visible"
        }
        var checkEbook = ebook.value.trim();
        if (checkEbook===""){
            ebook.style.borderColor="red";
            alerta.style.visibility="visible"
        }
        var checkPreco = preco.value.trim();
        if (checkPreco===""){
            preco.style.borderColor="red";
            alerta.style.visibility="visible"
        }
    });
}
window.addEventListener("load", form)


