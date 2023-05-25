// let nimi = "Matti Möttönen"; //muuttujan tyypi on string
// let nimi2 = 'Liisa Liisinen'; //toimii myös '' -merkein
// let mjono = "123dfjkls"; //string=merkkijono

// let x = 5; //x-muuttujan tyypi on number

// console.log(typeof(x)); //typeof:illa saadan selville muuttujan tyypi

// // var y = "5"; //lyhenne variable:sta 1. Muuttujasta 
// /*älä käytä var-sanaa muuttujissa, vaan käytä joko let tai const. */
// //jos tyyppi on const, sen arvoa ei voi muuttaa!
// console.log('X on alussa:', x);
// x = 10;
// console.log('X on nyt:', x);

// //let x = 44; // ei toimii, koska x on jo esitelty

// let y; //let:illä on mahdollista esitellä muuttuja ilman arvoa.
// console.log("y on:", y);

// //const z; // ei onnistu, const'tyyppisille pitää antaa arvo.
// //esimerkki const:in käytöstä:
// const PI = 3.1453453453;

// HARJOITUS:
// luo muuttujat etunimi ja sukunimi
// tulosta konsoliin "Nimeni on..." //esimerkkitulostus

// let etunimi = "Mihkel";
// let sukunimi = "Rebane";
// let nimi = {etunimi, sukunimi};

// console.log("Nimeni on", etunimi, sukunimi, nimi);
// console.log(`Nimeni on ${etunimi} ${sukunimi}`)

// let ika = 27;
// console.log(etunimi, ika);
// console.log(etunimi+ika);
// console.log(ika+etunimi);

// console.log(etunimi+String(ika)); //konvertoi numero stringiksi
// console.log(ika.toString()); //Sama kuin yllä



// // let num = 5;        //tyypiltään number
// // let num2 = 123e3;     //tyypiltään number
// // let num3 = 100-e3;     //tyypiltään number
// //                     // Muissa kielissä olisi float tai double
// // console.log(num,num2,num3);

// let isFriday = 1; //true=1
// let isRaining = false; //false=0

// let c;
// console.log(c); // undefined