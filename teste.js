// var eleve = ['ousmane', 'aicha', 'mouhamad', 'hafsa']
// for (var i = 0; i < eleve.length; i++) {
//     console.log("Bonjour" + [i]);
// var numero = 50

// for (var i = 0; i < numero;) {
//     console.log(numero++);
//     break

// } 

// var aDeviner = Math.random() * 10
// var essai = window.prompt("un chiffre")
// essai = parseInt(essai, 10)
// while (essai != aDeviner) {
//     if (essai > aDeviner) {
//         alert("au dessus")
//     }
//     break
// }
var p = document.querySelector('paragraphe')
window.setInterval(function() {
        p.classList.toggle('blue')
    },
    1000)