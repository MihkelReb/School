
function lasku() {
    if (document.getElementById('#nappi').onclick = true){
        let anwser = parseInt(document.querySelector('#ekaNumero').value) + parseInt(document.querySelector('#tokaNumero').value);
        document.querySelector('#tulos').innerText=anwser;
    }
}




// function plussaa() {
//     var x = document.querySelector('#ekaNumero').value;
//     var y = document.querySelector('#tokaNumero').value;
//     let summa = parseInt(x) + parseInt(y);
//     document.querySelector('#tulos').innerText=summa;
// }
// function minus() {
//     let minus = parseInt(document.querySelector('#ekaNumero').value) * parseInt(document.querySelector('#tokaNumero').value);
//     document.querySelector('#tulos').innerText=minus;
// }
// function kerta() {
//     var x = document.querySelector('#ekaNumero').value;
//     var y = document.querySelector('#tokaNumero').value;
//     let kerta = parseInt(x) * parseInt(y);
//     document.querySelector('#tulos').innerText=kerta;
// }