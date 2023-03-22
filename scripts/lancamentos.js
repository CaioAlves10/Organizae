
function mostraAviso(){
/*     varWindow = window.open ('popup.html', 'popup'); */
popup.classList.toggle("show");
};
window.onload=function(){
    let botaoAviso = document.getElementById("aviso");

    botaoAviso.onclick = function () {
        mostraAviso() ;
    };
}