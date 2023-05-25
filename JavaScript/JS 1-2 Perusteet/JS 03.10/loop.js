//FOR-LOOP 

//C-KIELESTÄ TUTTU (C,C++, C#, JAVA, PYTHON) SYNTAKSI:

// alkutilanne, ehto jatkamiseen; mitä tehdään joka kerroksen jälkeen

// let i;

// console.log('---i++ "ensimmäinen"---');

// for (i=0;i<10;i++) {        // i++ on sama kuin i=i+1
//     console.log(i);
// }

// console.log('---i+2 "toinen"---');

// for (i=0;i<10;i=i+2) {        // kasvataa i +1, tulostaa 0,2,4,6,8
//     console.log(i);
// }

// console.log('---7 i++---');

// for (i=-7;i<10;i=i+2) {        // kasvataa i +1, tulostaa 0,2,4,6,8
//     console.log(i);
// }

//HARJOITUS: Tee for-looppi, jossa tulostuu rangesta 1-10 vain parittomat luvut
//1,3,5,7,9 . älä käytä %-jakojäännöstä, vaan esimekeistä mallia

// for (i=1;i<10;i=i+2)
// console.log(i);

//HARJOITUS: Tulosta for-loopilla luvut alenevasti 10...1

// for (i=10;i>0;i--) {
//     console.log(i)
// };

// //NÄKYVYYDESTÄ ELI SCOPESTA: (BLOCK SCOPE:)

// let x = 44;
// // let x = 199; //virhe, koska esitelty jo let-tyypiseksi (declared)

// for (let x=0;x<10;x++) {    //tämä x on vain tässa for loopin sisällä
//     let y = 5;              // olemassa vain for-loopissa eli {} - blockissam
//                             //ei näy blockin ulkopuolelle
//     console.log(x);         // {} - määrittävät "block"-in = BLOCK SCOPE
// }

// // for (x=0;x<10;x++) {    //nyt se käyttää globaalista "x":i
// //     console.log(x);         

// console.log(x);             // viittaa globaaliin x-muutujaan , ei minkään blockin-
// //console.log(y);           // ei päästä käsiksi, koska ei GLOBAALISSA SCOPESSA

// //MODULUS ELI JAKOJÄÄNNÖS-MERKKI %

// if (10 % 2 == 0) {          //ei jakojäännöstä
//     console.log('ei jakojäännöstä')
// }
// else {
//     console.log('jakojäännös jäi.')
// }

// == vertaillaan muuttujien arvoja
// === vertaillaan muuttujien tyypejä ja arvoja     STRICT

// let s = '5';            // string
// let q = 5;              // number
// if (s==q) { }            // pitää paikkaansa
// else if (s===q) { }      //  ei pitää paikkansa

// HARJOITUS: TEE FOR-LOOPPI, JOSSA KÄYDÄÄN LÄPI LUVUT 0-10
// LISÄÄ LOOPIN SISÄLLE EHTOM JOSSA TARKISTETAAN ONKO LÄPIKÄYTÄVÄN
// NUMERON JAOLLINEN KAHDELLA (EI JAKOJÄÄNÖSTÄ). MIKÄLI ON: TULOSTA
// console.log("Luku" {luku} on parillinen.)

for (let i=0;i<11;i++) {
    if (i % 2 == 0) {
        console.log(i + " on parillinen.")
    }
    else { 
        console.log(i + " ei ole parillinen.")
    }
}

console.log("");
console.log("-------------");
console.log("");

let juostuMatka;
let kierrokset=0;

for (juostuMatka=0;juostuMatka<1608;juostuMatka+=400) {         // +=400 sama kuin =X+400
    console.log("Nyt on juostu " + juostuMatka + "m");
    kierrokset++;
    console.log("Menossa " + kierrokset + "'s kierros.");
}

console.log("");
console.log("-------------");
console.log("");

for(let i=0;i<11;i++) {
    if (i % 2 == 0) {
        //console.log(´Luku $(i) on parillinen.´);
        console.log("Luku " + i + " on parillinen.");
    }
}

console.log("");
console.log("-------------");
console.log("");

//BREAK JA CONTINUE
for (let i=0;i<10;i++) {
    if (i==5) {
        break;                // hyppää pois blockista
        //continue;               // Siirtyy suoraan seuraavaan kierrokseen
    }
    console.log(i);
}

console.log("");
console.log("-------------");
console.log("");

// NESTED FOR LOOPS:

for (let x=0;x<5;x++) {
    for (let y=0;y<5;y++) {
        console.log("X = " + x, "  Y = " + y)
    }
}

console.log("");
console.log("-------------");
console.log("");

