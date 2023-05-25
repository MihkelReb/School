try {
            //tehdään jotain
    let x = 10;
    console.log("try-blokissa x on: ",x);
}
catch (e) { //nimetään virheen nimi (tässä "e")
            //jos try epäonnistui, niin suoritetaan
            //ns. catch-blokki, block of code to handle errors
    console.log("VIRHE: ",e);
}
finally {   //vapaaehtoinen lisä:
            //Tänne tullaan jokatapauksessa
    console.log("tultiin finally-blokkiin");
}


taulukko=[1,2,3]
//UUSI FOR-LOOP TAPA, NOPEAMPI TAULUKOISSA JA OLIOISSA L.OBJEKTEISSA
for (let x of taulukko) {   //KÄYTTÄ TAULUKOIDEN JA OBJEKTEISSA
    console.log(x);
}


//WHILE-LOOPPI JA DO-WHILE-LOOPPI
// let i = 0;
// while (i<10) { //(sulkeisiin ehto)
//     console.log(i);
//     i++;
// }

//DO-WHILE
let i = 0;
do {
    console.log(i);
    i++
}
while (i<10);