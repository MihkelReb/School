//let nimi = `chuck norris`
//console.log(nimi.length);   //12 -haettiin propertyllä
//Search character by index:
// let eka = nimi.charAt();   //JS ei herjaa jos indexiä ei löydy!
// console.log(eka);

//to upper/lowercase letters:
// console.log(nimi.toUpperCase());
// console.log(nimi.toLowerCase());

// console.log(nimi.substring(0,11)); //viimeistä merkkiä ei oteta
// console.log(nimi.substring(6)); //6'st eteenpäin
// console.log(nimi.substring(0)); //0'st eteenpäin

//console.log(nimi.split(` `))
// let lista = nimi.split(` `);
// console.log(lista[0].toUpperCase(),lista[1]);


/*HARJOITUKSIA:

1)Miten tulostat nimesi käyttäen ES10-tyylillä?
(eli ${...})

2)Luo muuttuja x, aseta arvoksi 1, alerttaa index.html-sivulle teksti: "X=1"
Kasvata x-muuttujan arvoa yhdellä ja alerttaa taas index.html-sivulle teksti: "X=2"

3) Summa console.log:illa tämän jälkeen x+8 //10

4) Luo boolean-tyypinen muuttuja isWeekend, aseta arvo true'ksi ja tulosta konsoliin sekä muuttujan arvo, että muuttujan tyyppi.

*/

//Harjoitus 1
let etunimi = "Mihkel";
let sukunimi = "Rebane";
console.log(`Nimeni on ${etunimi} ${sukunimi}`);

//Harjoitus 2
let x = 1;
alert("X = " + Number(x));

alert("X = " + Number(x + 1));

//Harjoitus 3
console.log(x+8);

//Harjoitus 4
let isWeekend = true;
console.log(isWeekend, typeof(isWeekend));