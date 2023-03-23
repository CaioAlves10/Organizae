
function mostraAviso(){
/*     varWindow = window.open ('popup.html', 'popup'); */
// popup.classList.toggle("show");
URL="./form-lancamentos.html";
window.open(URL, 'janela', 'width=500, height=500, top=100, left=699, scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no')
};
window.onload=function(){
    let botaoAviso = document.getElementById("aviso");

    botaoAviso.onclick = function () {
        mostraAviso() ;
    };
}