function mostrarOcultarSenha(){
    var senha=document.getElementById("senha");
    if(senha.type=="password"){
        senha.type="text";
    }else{
        senha.type="password";
    }
}

let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });



$(function() {
    $( "#calendario" ).datepicker();
});

function loading(){
          
  document.getElementsByClassName("overlay")[0].style.display = "none";

}

// calcular

// document.querySelector("#qtde").addEventListener("change", atualizarPreco)
// document.querySelector("#js").addEventListener("change", atualizarPreco)
// document.querySelector("#layout-sim").addEventListener("change", atualizarPreco)
// document.querySelector("#layout-nao").addEventListener("change", atualizarPreco)
// document.querySelector("#prazo").addEventListener("change", function () { 
//     const prazo = document.querySelector("#prazo").value
//     document.querySelector("label[for=prazo]").innerHTML = `Prazo: ${prazo} semanas`
//     atualizarPreco()
// })

// function atualizarPreco(){
//     const qtde = document.querySelector("#qtde").value
//     const temJS = document.querySelector("#js").checked
//     const incluiLayout = document.querySelector("#layout-sim").checked
//     const prazo = document.querySelector("#prazo").value

//     let preco = qtde * 100;
//     if (temJS) preco *= 1.1
//     if (incluiLayout) preco += 500
//     let taxaUrgencia = 1 - prazo*0.1;
//     preco *= 1 + taxaUrgencia

//     document.querySelector("#preco").innerHTML = `R$ ${}`
// }

